/**
 * Scroll Progress Bar для WordPress темы Fregat
 */

(function() {
    'use strict';

    // Создаём элемент прогресса если его нет
    const progressBar = document.getElementById('scroll-progress');
    if (!progressBar) {
        const bar = document.createElement('div');
        bar.id = 'scroll-progress';
        bar.style.cssText = 'position:fixed;top:0;left:0;height:3px;background:linear-gradient(90deg,#D4AF37,#FBE5A8);z-index:9999;transition:width 100ms;width:0';
        document.body.appendChild(bar);
    }

    // Обновляем прогресс при скролле
    window.addEventListener('scroll', () => {
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (window.scrollY / windowHeight) * 100;
        const bar = document.getElementById('scroll-progress');
        if (bar) {
            bar.style.width = scrolled + '%';
        }
    });

    // Кнопка наверх
    let backToTop = document.getElementById('back-to-top');
    if (!backToTop) {
        backToTop = document.createElement('div');
        backToTop.id = 'back-to-top';
        backToTop.innerHTML = '<svg style="width:24px;height:24px" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>';
        backToTop.style.cssText = 'position:fixed;bottom:3rem;right:3rem;width:50px;height:50px;border:1px solid #D4AF37;background:rgba(20,33,37,0.9);color:#D4AF37;border-radius:9999px;display:flex;align-items:center;justify-content:center;cursor:pointer;opacity:0;visibility:hidden;transition:all 300ms;z-index:1000';
        document.body.appendChild(backToTop);
    }

    // Показываем/скрываем кнопку
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTop.style.opacity = '1';
            backToTop.style.visibility = 'visible';
        } else {
            backToTop.style.opacity = '0';
            backToTop.style.visibility = 'hidden';
        }
    });

    // Скролл наверх при клике
    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

})();
