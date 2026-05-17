/**
 * Fregat Theme Main JavaScript
 */

(function() {
    'use strict';

    /**
     * Scroll Progress Bar
     */
    function initScrollProgress() {
        const progressBar = document.getElementById('scroll-progress');
        if (!progressBar) return;

        window.addEventListener('scroll', () => {
            const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (window.scrollY / windowHeight) * 100;
            progressBar.style.width = scrolled + '%';
        });
    }

    /**
     * Back to Top Button
     */
    function initBackToTop() {
        const backToTop = document.getElementById('back-to-top');
        if (!backToTop) return;

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /**
     * FAQ Accordion
     */
    function initFaqAccordion() {
        const questions = document.querySelectorAll('.faq-question');

        questions.forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const icon = this.querySelector('.faq-icon');
                const isOpen = answer.classList.contains('open');

                // Close all answers
                document.querySelectorAll('.faq-answer').forEach(a => {
                    a.classList.remove('open');
                });
                document.querySelectorAll('.faq-icon').forEach(i => {
                    i.classList.remove('rotate-180');
                });

                // Open current if it was closed
                if (!isOpen) {
                    answer.classList.add('open');
                    if (icon) icon.classList.add('rotate-180');
                }
            });
        });
    }

    /**
     * Module Accordion
     */
    function initModuleAccordion() {
        window.toggleModule = function(header) {
            const content = header.nextElementSibling;
            const icon = header.querySelector('.module-icon');

            // Close others
            document.querySelectorAll('.module-content').forEach(c => {
                if (c !== content) c.classList.add('hidden');
            });
            document.querySelectorAll('.module-icon').forEach(i => {
                if (i !== icon) i.classList.remove('rotate-180');
            });

            // Toggle current
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        };

        // Attach click handlers to module headers
        document.querySelectorAll('.module-header').forEach(header => {
            header.addEventListener('click', function() {
                window.toggleModule(this);
            });
        });
    }

    /**
     * FAQ Tabs
     */
    function initFaqTabs() {
        const tabs = document.querySelectorAll('.faq-tab');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const targetCategory = this.dataset.category;

                // Update active tab
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                // Show/hide FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item.dataset.category === targetCategory || targetCategory === 'all') {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });

                // Close all open answers when switching categories
                document.querySelectorAll('.faq-answer').forEach(a => {
                    a.classList.remove('open');
                });
                document.querySelectorAll('.faq-icon').forEach(i => {
                    i.classList.remove('rotate-180');
                });
            });
        });

        // Global function for inline onclick handlers
        window.showFaqCategory = function(category) {
            // Update tabs
            document.querySelectorAll('.faq-tab').forEach(tab => {
                tab.classList.remove('active');
                if(tab.dataset.category === category) {
                    tab.classList.add('active');
                }
            });

            // Filter items
            document.querySelectorAll('.faq-item').forEach(item => {
                if(category === 'all' || item.dataset.category === category) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });

            // Close all open answers when switching categories
            document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
            document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotate-180'));
        };

        // Show only "course" category by default, hide others
        if (document.querySelectorAll('.faq-tab').length > 0) {
            window.showFaqCategory('course');
        }
    }

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        var toggle = document.querySelector('.mobile-menu-toggle');
        var navLinks = document.querySelector('.nav-links');

        if (!toggle || !navLinks) return;

        toggle.addEventListener('click', function() {
            navLinks.classList.toggle('hidden');
            navLinks.classList.toggle('flex');
        });

        // Close mobile menu when clicking a link
        navLinks.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                navLinks.classList.add('hidden');
                navLinks.classList.remove('flex');
            });
        });
    }

    /**
     * Scroll Animations (CSS-only, no JS class toggling)
     */

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    /**
     * Quiz Modal
     */
    function initQuizModal() {
        var modal = document.getElementById('quiz-modal');

        function closeModal() {
            if (!modal) return;
            modal.style.display = 'none';
            modal.classList.remove('quiz-modal-active');
            document.body.style.overflow = '';
        }

        document.addEventListener('click', function(e) {
            var trigger = e.target.closest('[data-quiz]');
            if (!trigger) return;
            e.preventDefault();

            if (modal) {
                modal.style.display = 'flex';
                modal.classList.add('quiz-modal-active');
                document.body.style.overflow = 'hidden';
            } else {
                // Blog posts: scroll to inline quiz
                var quiz = document.querySelector('.post-content .quizle-container') || document.querySelector('.quizle-container');
                if (quiz) {
                    quiz.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });

        if (modal) {
            modal.querySelector('.quiz-modal-backdrop').addEventListener('click', closeModal);
            modal.querySelector('.quiz-modal-close').addEventListener('click', closeModal);
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.classList.contains('quiz-modal-active')) {
                    closeModal();
                }
            });
        }
    }

    /**
     * Quiz tracking (Yandex Metrika)
     */
    function initQuizTracking() {
        document.addEventListener('quizle:submit_contacts', function() {
            if (typeof ym !== 'undefined') {
                ym(108500072, 'reachGoal', 'quiz_complete');
            }
        });
    }

    /**
     * Video Testimonials Carousel
     */
    function initTestimonialsCarousel() {
        var track = document.getElementById('testimonials-track');
        if (!track) return;

        // Lazy load videos when they scroll into view
        var lazyObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var video = entry.target;
                    if (video.dataset.src && !video.src) {
                        video.src = video.dataset.src;
                        video.load();
                    }
                    lazyObserver.unobserve(video);
                }
            });
        }, { rootMargin: '200px' });

        // Video play/pause on click
        var cards = track.querySelectorAll('.testimonial-card');
        cards.forEach(function(card) {
            var wrap = card.querySelector('.testimonial-video-wrap');
            var video = card.querySelector('.testimonial-video');
            if (!wrap || !video) return;

            // Observe for lazy loading
            if (video.dataset.src) {
                lazyObserver.observe(video);
            }

            // Generate poster from first frame
            video.addEventListener('loadeddata', function() {
                video.currentTime = 0.1;
            });

            video.addEventListener('seeked', function() {
                try {
                    var canvas = document.createElement('canvas');
                    canvas.width = video.videoWidth || 360;
                    canvas.height = video.videoHeight || 640;
                    var ctx = canvas.getContext('2d');
                    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                    video.poster = canvas.toDataURL('image/jpeg', 0.7);
                } catch(e) {}
            });

            wrap.addEventListener('click', function() {
                if (video.paused) {
                    // Pause all other videos
                    track.querySelectorAll('.testimonial-video').forEach(function(v) {
                        if (v !== video && !v.paused) {
                            v.pause();
                            v.closest('.testimonial-video-wrap').classList.remove('playing');
                        }
                    });
                    video.play();
                    wrap.classList.add('playing');
                } else {
                    video.pause();
                    wrap.classList.remove('playing');
                }
            });

            video.addEventListener('ended', function() {
                wrap.classList.remove('playing');
            });
        });

        // Carousel navigation
        var prevBtn = document.querySelector('.testimonial-prev');
        var nextBtn = document.querySelector('.testimonial-next');
        var scrollAmount = 260;

        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });
        }
    }

    /**
     * Table of Contents (auto-generated from H2/H3)
     */
    function initTableOfContents() {
        var tocContainer = document.getElementById('toc');
        var tocItems = document.getElementById('toc-items');
        var tocToggle = document.getElementById('toc-toggle');
        var tocList = document.getElementById('toc-list');
        var tocArrow = document.getElementById('toc-arrow');
        if (!tocContainer || !tocItems) return;

        var content = document.querySelector('.post-content');
        if (!content) return;

        var headings = content.querySelectorAll('h2, h3');
        if (headings.length < 2) return;

        var html = '';
        headings.forEach(function(heading, i) {
            var id = 'heading-' + i;
            heading.id = id;
            var isH3 = heading.tagName === 'H3';
            var indent = isH3 ? 'padding-left: 1rem;' : '';
            html += '<li style="' + indent + '"><a href="#' + id + '" class="block py-1 text-gray-400 hover:text-gold transition' + (isH3 ? ' text-xs' : '') + '">' + heading.textContent + '</a></li>';
        });

        tocItems.innerHTML = html;
        tocContainer.classList.remove('hidden');

        // Toggle TOC
        if (tocToggle && tocList) {
            tocToggle.addEventListener('click', function() {
                var isHidden = tocList.classList.contains('hidden');
                if (isHidden) {
                    tocList.classList.remove('hidden');
                    if (tocArrow) tocArrow.style.transform = 'rotate(180deg)';
                } else {
                    tocList.classList.add('hidden');
                    if (tocArrow) tocArrow.style.transform = 'rotate(0)';
                }
            });
        }
    }

    /**
     * Article Rating System
     */
    function initArticleRating() {
        var ratingContainer = document.getElementById('article-rating');
        if (!ratingContainer) return;

        var postId = ratingContainer.dataset.postId;
        if (!postId) return;

        var rated = localStorage.getItem('fregat_rated_' + postId);
        var stars = ratingContainer.querySelectorAll('.rating-star');
        var isRated = false;

        if (rated) {
            isRated = true;
            highlightStars(stars, parseInt(rated));
            stars.forEach(function(star) {
                star.style.cursor = 'default';
                star.style.pointerEvents = 'none';
            });
            return;
        }

        stars.forEach(function(star) {
            star.addEventListener('mouseenter', function() {
                if (isRated) return;
                var val = parseInt(this.dataset.value);
                highlightStars(stars, val);
            });

            star.addEventListener('mouseleave', function() {
                if (isRated) return;
                highlightStars(stars, 0);
            });

            star.addEventListener('click', function() {
                if (isRated) return;
                isRated = true;
                var val = parseInt(this.dataset.value);
                highlightStars(stars, val);
                stars.forEach(function(s) {
                    s.style.cursor = 'default';
                });

                localStorage.setItem('fregat_rated_' + postId, val);

                var formData = new FormData();
                formData.append('action', 'fregat_rate_post');
                formData.append('post_id', postId);
                formData.append('rating', val);

                var ajaxUrl = (window.fregat_post && window.fregat_post.ajax_url) || '/wp-admin/admin-ajax.php';
                fetch(ajaxUrl, {
                    method: 'POST',
                    body: formData
                }).catch(function() {});
            });
        });
    }

    function highlightStars(stars, value) {
        stars.forEach(function(star) {
            var v = parseInt(star.dataset.value);
            if (v <= value) {
                star.classList.add('active');
            } else {
                star.classList.remove('active');
            }
        });
    }

    function submitRating(postId, rating, container, stars) {
        localStorage.setItem('fregat_rated_' + postId, rating);
        highlightStars(stars, rating);
        stars.forEach(function(star) {
            star.style.cursor = 'default';
            star.style.pointerEvents = 'none';
        });

        var formData = new FormData();
        formData.append('action', 'fregat_rate_post');
        formData.append('post_id', postId);
        formData.append('rating', rating);

        var ajaxUrl = (window.fregat_post && window.fregat_post.ajax_url) || '/wp-admin/admin-ajax.php';
        fetch(ajaxUrl, {
            method: 'POST',
            body: formData
        }).catch(function() {});
    }

    /**
     * AJAX view counter (works with nginx cache)
     */
    function initViewCounter() {
        if (!window.fregat_post || !window.fregat_post.id) return;

        var formData = new FormData();
        formData.append('action', 'fregat_count_view');
        formData.append('post_id', window.fregat_post.id);

        fetch(window.fregat_post.ajax_url, {
            method: 'POST',
            body: formData
        }).then(function(resp) { return resp.json(); })
        .then(function(data) {
            if (data.success && data.data.views) {
                var viewsEl = document.getElementById('post-views-count');
                if (viewsEl) {
                    var v = data.data.views;
                    viewsEl.textContent = v >= 1000 ? Math.round(v / 1000 * 10) / 10 + 'к' : v;
                }
            }
        }).catch(function() {});
    }

    /**
     * Contact Form AJAX
     */
    function initContactForm() {
        var form = document.getElementById('contactForm');
        if (!form) return;

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(form);
            var data = {
                action: 'fregat_contact',
                nonce: (window.fregat_contact && window.fregat_contact.nonce) || '',
                name: formData.get('name') || form.querySelector('input[type="text"]').value,
                phone: formData.get('phone') || form.querySelector('input[type="tel"]').value,
                email: formData.get('email') || form.querySelector('input[type="email"]').value,
                message: formData.get('message') || form.querySelector('textarea').value,
            };

            var ajaxUrl = (window.fregat_contact && window.fregat_contact.ajax_url) || '/wp-admin/admin-ajax.php';

            fetch(ajaxUrl, {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: new URLSearchParams(data)
            })
            .then(function(resp) { return resp.json(); })
            .then(function(result) {
                if (result.success) {
                    form.reset();
                    alert('Заявка отправлена! Мы свяжемся с вами в ближайшее время.');
                } else {
                    alert('Ошибка отправки. Попробуйте ещё раз.');
                }
            })
            .catch(function() {
                alert('Ошибка соединения. Попробуйте ещё раз.');
            });
        });
    }

    /**
     * Initialize all functionality
     */
    function init() {
        initScrollProgress();
        initBackToTop();
        initFaqAccordion();
        initModuleAccordion();
        initFaqTabs();
        initMobileMenu();
        initSmoothScroll();
        initContactForm();
        initQuizModal();
        initQuizTracking();
        initTestimonialsCarousel();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
