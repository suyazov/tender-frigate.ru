<?php
/**
 * Template Name: Главная
 * @package Fregat
 */
get_header();
?>

<main id="primary" class="site-main">

<!-- Hero Section -->
<section id="hero" class="relative min-h-screen flex items-center overflow-hidden" style="background: linear-gradient(135deg, #0a1929 0%, #102a43 30%, #1a3a5c 60%, #0a1929 100%);">
    <div class="absolute top-20 right-10 w-72 h-72 bg-gold-500/5 rounded-full blur-[100px]"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-blue-500/5 rounded-full blur-[120px]"></div>
    <div class="absolute top-1/3 left-1/4 w-2 h-2 bg-gold-400/30 rounded-full" style="animation: float 4s ease-in-out infinite;"></div>
    <div class="absolute top-1/2 right-1/3 w-1.5 h-1.5 bg-gold-400/20 rounded-full" style="animation: float 5s ease-in-out infinite 1s;"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-32 pb-20 relative z-10">
        <div class="max-w-4xl">
            <div class="animate-fade-up inline-flex items-center gap-2 px-4 py-2 rounded-full border border-gold-500/20 bg-gold-500/5 mb-8">
                <span class="w-2 h-2 bg-gold-400 rounded-full animate-pulse"></span>
                <span class="text-xs font-medium text-gold-400 tracking-wider uppercase">Коммерческое предложение</span>
            </div>

            <h1 class="animate-fade-up delay-100 text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black tracking-tight leading-[0.95] mb-6 text-white">
                Тендерное<br>
                <span class="text-gold-gradient">сопровождение</span><br>
                под ключ
            </h1>

            <p class="animate-fade-up delay-200 text-lg md:text-xl text-gray-300 max-w-2xl mb-4 leading-relaxed">
                Профессиональная юридическая и тендерная поддержка бизнеса для компаний, которые хотят стабильно выигрывать закупки и зарабатывать на госзаказах.
            </p>
            <p class="animate-fade-up delay-300 text-base text-gray-400 max-w-xl mb-10">
                Вы занимаетесь бизнесом — мы занимаемся закупками.
            </p>

            <div class="animate-fade-up delay-400 flex flex-col sm:flex-row gap-4">
                <a href="#contact" class="btn-gold px-8 py-4 rounded-xl text-base inline-flex items-center justify-center gap-2 group">
                    Получить консультацию
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="#pricing" class="px-8 py-4 border border-white/10 text-white font-medium rounded-xl hover:border-gold-500/30 hover:bg-white/5 transition-all text-base inline-flex items-center justify-center">
                    Узнать стоимость
                </a>
            </div>

            <div class="animate-fade-up delay-500 mt-16 grid grid-cols-3 gap-8 max-w-lg">
                <div>
                    <div class="text-2xl md:text-3xl font-black text-gold-gradient">2%</div>
                    <div class="text-xs text-gray-400 mt-1">Вознаграждение от контракта</div>
                </div>
                <div>
                    <div class="text-2xl md:text-3xl font-black text-gold-gradient">24/7</div>
                    <div class="text-xs text-gray-400 mt-1">Поддержка клиентов</div>
                </div>
                <div>
                    <div class="text-2xl md:text-3xl font-black text-gold-gradient">100%</div>
                    <div class="text-xs text-gray-400 mt-1">Сопровождение под ключ</div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full overflow-hidden line-height-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-[60px] md:h-[80px]">
            <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,60 1440,60 L1440,120 L0,120 Z" fill="#0a1929"/>
        </svg>
    </div>
</section>

<!-- Problems Section -->
<section id="problems" class="relative py-24 md:py-32 bg-[#0a1929] overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-red-500/3 rounded-full blur-[150px]"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-section">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-red-500/20 bg-red-500/5 mb-6">
                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                <span class="text-xs font-medium text-red-400 tracking-wider uppercase">Проблема</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight mb-6 text-white">
                Вы теряете прибыль, пока<br>
                <span class="text-red-400">конкуренты выигрывают тендеры</span>
            </h2>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                Большинство предпринимателей сталкиваются с одними и теми же проблемами
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
            <div class="problem-card rounded-2xl bg-[#142125] p-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-red-500/5 rounded-bl-full"></div>
                <div class="w-12 h-12 rounded-xl bg-red-500/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Заявки отклоняют</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Ошибки в документах приводят к отклонению заявок, и вы теряете возможность получить контракт</p>
            </div>

            <div class="problem-card rounded-2xl bg-[#142125] p-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-red-500/5 rounded-bl-full"></div>
                <div class="w-12 h-12 rounded-xl bg-red-500/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Нет времени отслеживать</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Сотрудники не успевают отслеживать выгодные закупки на множестве площадок</p>
            </div>

            <div class="problem-card rounded-2xl bg-[#142125] p-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-red-500/5 rounded-bl-full"></div>
                <div class="w-12 h-12 rounded-xl bg-red-500/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Сложно рассчитать себестоимость</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Неправильный расчёт рентабельности ведёт к убыткам и работе в минус</p>
            </div>

            <div class="problem-card rounded-2xl bg-[#142125] p-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-red-500/5 rounded-bl-full"></div>
                <div class="w-12 h-12 rounded-xl bg-red-500/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Изменения законодательства</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Постоянные изменения в законах создают риск штрафов и жалоб в УФАС</p>
            </div>

            <div class="problem-card rounded-2xl bg-[#142125] p-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-red-500/5 rounded-bl-full"></div>
                <div class="w-12 h-12 rounded-xl bg-red-500/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Нет защиты в УФАС и суде</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Отсутствие понимания, как защищать свои интересы в УФАС и судебных инстанциях</p>
            </div>

            <div class="problem-card rounded-2xl bg-[#142125] p-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-red-500/5 rounded-bl-full"></div>
                <div class="w-12 h-12 rounded-xl bg-red-500/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Нужен отдельный штат</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Участие в тендерах требует времени, нервов и отдельного штата специалистов</p>
            </div>
        </div>

        <div class="max-w-3xl mx-auto rounded-2xl border border-red-500/20 bg-red-500/5 p-8 md:p-10">
            <h3 class="text-xl font-bold mb-6 text-center text-white">В результате бизнес теряет:</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center"><span class="text-2xl font-bold text-red-400">Деньги</span></div>
                <div class="text-center"><span class="text-2xl font-bold text-red-400">Контракты</span></div>
                <div class="text-center"><span class="text-2xl font-bold text-red-400">Время</span></div>
                <div class="text-center"><span class="text-2xl font-bold text-red-400">Рост</span></div>
            </div>
        </div>
    </div>
</section>

<!-- Solution Section -->
<section id="solution" class="relative py-24 md:py-32 bg-[#102a43] overflow-hidden">
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-gold-500/5 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="animate-section">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-gold-500/20 bg-gold-500/5 mb-6">
                    <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    <span class="text-xs font-medium text-gold tracking-wider uppercase">Решение</span>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight mb-6 text-white">
                    ООО «ФРЕГАТ» берёт<br>
                    <span class="text-gold-gradient">тендерную работу</span><br>
                    на себя
                </h2>
                <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                    Мы помогаем компаниям получать государственные и коммерческие контракты без необходимости содержать собственный тендерный отдел.
                </p>
                <div class="p-6 rounded-2xl bg-[#0a1929] border border-gold-500/10">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-gold-500/10 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        </div>
                        <div>
                            <p class="text-xl font-semibold text-gold-gradient mb-1">Вы занимаетесь бизнесом —</p>
                            <p class="text-xl font-semibold text-white">мы занимаемся закупками.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="animate-section">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-gold-500/10 to-transparent rounded-3xl"></div>
                    <div class="relative bg-[#0a1929] rounded-3xl border border-white/5 p-8 md:p-10">
                        <div class="space-y-6">
                            <div class="flex items-center gap-4 p-4 rounded-xl bg-[#142125] border border-white/5">
                                <div class="w-10 h-10 rounded-lg bg-blue-500/10 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                </div>
                                <div>
                                    <p class="font-medium text-sm text-white">Поиск закупок</p>
                                    <p class="text-xs text-gray-400">Находим выгодные тендеры для вас</p>
                                </div>
                                <svg class="w-5 h-5 text-green-400 ml-auto shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div class="flex justify-center">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                            </div>
                            <div class="flex items-center gap-4 p-4 rounded-xl bg-[#142125] border border-white/5">
                                <div class="w-10 h-10 rounded-lg bg-purple-500/10 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                </div>
                                <div>
                                    <p class="font-medium text-sm text-white">Подготовка заявки</p>
                                    <p class="text-xs text-gray-400">Формируем безошибочную документацию</p>
                                </div>
                                <svg class="w-5 h-5 text-green-400 ml-auto shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div class="flex justify-center">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                            </div>
                            <div class="flex items-center gap-4 p-4 rounded-xl bg-[#142125] border border-white/5">
                                <div class="w-10 h-10 rounded-lg bg-gold-500/10 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                                </div>
                                <div>
                                    <p class="font-medium text-sm text-white">Выигрыш контракта</p>
                                    <p class="text-xs text-gray-400">Получаем контракт и защищаем интересы</p>
                                </div>
                                <svg class="w-5 h-5 text-green-400 ml-auto shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div class="flex justify-center">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                            </div>
                            <div class="flex items-center gap-4 p-4 rounded-xl bg-gradient-to-r from-gold-500/10 to-gold-600/5 border border-gold-500/20">
                                <div class="w-10 h-10 rounded-lg bg-gold-500/20 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-sm text-gold">Результат</p>
                                    <p class="text-xs text-gray-300">Вы получаете контракт и прибыль</p>
                                </div>
                                <svg class="w-5 h-5 text-gold ml-auto shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Benefits Section -->
<section id="benefits" class="relative py-24 md:py-32 bg-[#0a1929] overflow-hidden">
    <div class="absolute top-1/2 left-0 w-[400px] h-[400px] bg-gold-500/5 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-section">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-gold-500/20 bg-gold-500/5 mb-6">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/></svg>
                <span class="text-xs font-medium text-gold tracking-wider uppercase">Что вы получаете</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight mb-6 text-white">
                Что получает <span class="text-gold-gradient">ваша компания</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="benefit-card rounded-2xl bg-[#142125] p-8 group">
                <div class="benefit-icon w-14 h-14 rounded-2xl bg-gold-500/10 flex items-center justify-center mb-6 transition-all duration-300">
                    <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-white">Постоянный поиск закупок</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Непрерывный мониторинг всех площадок для поиска выгодных тендеров, подходящих именно вашей компании</p>
            </div>

            <div class="benefit-card rounded-2xl bg-[#142125] p-8 group">
                <div class="benefit-icon w-14 h-14 rounded-2xl bg-gold-500/10 flex items-center justify-center mb-6 transition-all duration-300">
                    <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-white">Нивелирование рисков</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Исключаем риск отклонения заявок благодаря тщательной проверке каждого документа</p>
            </div>

            <div class="benefit-card rounded-2xl bg-[#142125] p-8 group">
                <div class="benefit-icon w-14 h-14 rounded-2xl bg-gold-500/10 flex items-center justify-center mb-6 transition-all duration-300">
                    <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-white">Расчёт рентабельности</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Помогаем правильно рассчитать себестоимость, чтобы контракт приносил прибыль, а не убытки</p>
            </div>

            <div class="benefit-card rounded-2xl bg-[#142125] p-8 group">
                <div class="benefit-icon w-14 h-14 rounded-2xl bg-gold-500/10 flex items-center justify-center mb-6 transition-all duration-300">
                    <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-white">Полное сопровождение</h3>
                <p class="text-gray-400 text-sm leading-relaxed">От поиска закупки до заключения контракта — ведём весь процесс от начала до конца</p>
            </div>

            <div class="benefit-card rounded-2xl bg-[#142125] p-8 group lg:col-span-2">
                <div class="benefit-icon w-14 h-14 rounded-2xl bg-gold-500/10 flex items-center justify-center mb-6 transition-all duration-300">
                    <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-white">Юридическая защита интересов</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Профессиональная защита в УФАС и суде, представительство ваших интересов на всех этапах закупочного процесса</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="relative py-24 md:py-32 bg-[#102a43] overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-gold-500/5 rounded-full blur-[150px]"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-section">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-gold-500/20 bg-gold-500/5 mb-6">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                <span class="text-xs font-medium text-gold tracking-wider uppercase">Стоимость услуг</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight mb-6 text-white">
                Прозрачные <span class="text-gold-gradient">условия</span> сотрудничества
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            <div class="rounded-3xl bg-[#0a1929] border border-gold-500/20 p-8 md:p-10 relative overflow-hidden" style="animation: pulse-glow 3s ease-in-out infinite;">
                <div class="absolute top-0 right-0 w-40 h-40 bg-gold-500/5 rounded-full blur-[60px]"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-gold-500/10 border border-gold-500/20 mb-6">
                        <svg class="w-3.5 h-3.5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        <span class="text-xs font-medium text-gold">Абонентское сопровождение</span>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-baseline gap-2">
                            <span class="text-5xl md:text-6xl font-black text-white">50 000</span>
                            <span class="text-xl text-gray-400">₽/мес</span>
                        </div>
                        <p class="text-gray-400 text-sm mt-2">Фиксированная оплата за полный цикл сопровождения</p>
                    </div>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-gray-200">Постоянный поиск выгодных закупок</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-gray-200">Подготовка и подача заявок</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-gray-200">Сопровождение закупок</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-gray-200">Юридическая поддержка</span>
                        </div>
                    </div>
                    <a href="#contact" class="block w-full py-4 text-center btn-gold rounded-xl text-base">
                        Начать сотрудничество
                    </a>
                </div>
            </div>

            <div class="rounded-3xl bg-[#0a1929] border border-white/5 p-8 md:p-10 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-blue-500/5 rounded-full blur-[60px]"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 mb-6">
                        <svg class="w-3.5 h-3.5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                        <span class="text-xs font-medium text-gray-300">Вознаграждение по выигранным контрактам</span>
                    </div>
                    <div class="mb-6">
                        <p class="text-gray-400 text-sm mb-6">Платите только за результат — когда контракт уже ваш</p>
                        <div class="overflow-hidden rounded-xl border border-white/5">
                            <table class="w-full">
                                <thead>
                                    <tr class="bg-[#142125]">
                                        <th class="text-left py-3 px-4 text-xs font-medium text-gray-400 uppercase tracking-wider">Стоимость контракта</th>
                                        <th class="text-right py-3 px-4 text-xs font-medium text-gray-400 uppercase tracking-wider">Вознаграждение</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-white/5 hover:bg-gold-500/5 transition">
                                        <td class="py-4 px-4 text-sm text-white">до 50 млн ₽</td>
                                        <td class="py-4 px-4 text-sm text-right font-bold text-gold">2%</td>
                                    </tr>
                                    <tr class="border-t border-white/5 hover:bg-gold-500/5 transition">
                                        <td class="py-4 px-4 text-sm text-white">50 — 100 млн ₽</td>
                                        <td class="py-4 px-4 text-sm text-right font-bold text-gold">1,5%</td>
                                    </tr>
                                    <tr class="border-t border-white/5 hover:bg-gold-500/5 transition">
                                        <td class="py-4 px-4 text-sm text-white">свыше 100 млн ₽</td>
                                        <td class="py-4 px-4 text-sm text-right font-bold text-gold">1%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="#contact" class="block w-full py-4 text-center border border-white/10 text-white font-semibold rounded-xl hover:border-gold-500/30 hover:bg-white/5 transition-all duration-300">
                        Узнать подробности
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-2xl mx-auto rounded-2xl border border-white/5 bg-[#0a1929] p-8">
            <div class="flex items-center gap-3 mb-5">
                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h3 class="font-semibold text-gray-300">В стоимость НЕ входит:</h3>
            </div>
            <div class="space-y-3">
                <div class="flex items-start gap-3">
                    <svg class="w-4 h-4 text-gray-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    <span class="text-sm text-gray-400">Участие представителей ООО «ФРЕГАТ» в заседаниях</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-4 h-4 text-gray-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    <span class="text-sm text-gray-400">Бухгалтерское сопровождение закупок</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-4 h-4 text-gray-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    <span class="text-sm text-gray-400">Услуги, не относящиеся к тендерному сопровождению и юридической поддержке закупочной деятельности</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Why Us Section -->
<section id="advantages" class="relative py-24 md:py-32 bg-[#0a1929] overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-gold-500/3 rounded-full blur-[150px]"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-section">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-gold-500/20 bg-gold-500/5 mb-6">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                <span class="text-xs font-medium text-gold tracking-wider uppercase">Наши преимущества</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight mb-6 text-white">
                Почему выбирают<br>
                <span class="text-gold-gradient">ООО «ФРЕГАТ»</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="reason-card rounded-2xl bg-[#142125] border border-white/5 p-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gold-500/10 to-gold-600/5 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Экономия времени и ресурсов</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Не нужно содержать собственный тендерный отдел — мы берём всю работу на себя</p>
            </div>

            <div class="reason-card rounded-2xl bg-[#142125] border border-white/5 p-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gold-500/10 to-gold-600/5 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Минимизация юридических рисков</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Профессиональная юридическая защита на всех этапах закупочного процесса</p>
            </div>

            <div class="reason-card rounded-2xl bg-[#142125] border border-white/5 p-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gold-500/10 to-gold-600/5 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Сопровождение «под ключ»</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Полный цикл услуг — от поиска тендера до получения контракта и защиты интересов</p>
            </div>

            <div class="reason-card rounded-2xl bg-[#142125] border border-white/5 p-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gold-500/10 to-gold-600/5 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Увеличение выигранных контрактов</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Системный подход, который значительно повышает процент ваших побед в тендерах</p>
            </div>

            <div class="reason-card rounded-2xl bg-[#142125] border border-white/5 p-8 text-center lg:col-span-2">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gold-500/10 to-gold-600/5 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-3 text-white">Работа на результат и долгосрочное сотрудничество</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Мы заинтересованы в вашем успехе — наша мотивация напрямую связана с вашими результатами. Строим партнёрство, а не просто оказываем услуги</p>
            </div>
        </div>
    </div>
</section>

<!-- Quiz Section -->
<section id="quiz" class="relative py-24 md:py-32 bg-[#102a43] overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[400px] bg-gold-500/5 rounded-full blur-[150px]"></div>

    <div class="max-w-3xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12 animate-section">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-gold-500/20 bg-gold-500/5 mb-6">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-xs font-medium text-gold tracking-wider uppercase">Подобрать формат</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4 text-white">
                Какой формат <span class="text-gold-gradient">сотрудничества</span> вам подходит?
            </h2>
            <p class="text-gray-400">Ответьте на 4 вопроса — мы подберём оптимальный вариант</p>
        </div>

        <div id="tender-quiz" class="bg-[#0a1929] border border-white/5 rounded-3xl p-8 md:p-10">
            <!-- Progress -->
            <div class="mb-8">
                <div class="flex justify-between text-sm text-gray-400 mb-2">
                    <span>Вопрос <span id="quiz-current-step">1</span> из 4</span>
                    <span id="quiz-progress-text">25%</span>
                </div>
                <div class="w-full bg-white/5 rounded-full h-2">
                    <div id="quiz-progress-bar" class="bg-gradient-to-r from-gold-500 to-gold-600 h-2 rounded-full transition-all duration-300" style="width: 25%"></div>
                </div>
            </div>

            <!-- Step 1 -->
            <div class="quiz-step" data-step="1">
                <h3 class="text-xl font-semibold mb-6 text-white">У вас есть опыт участия в тендерах?</h3>
                <div class="space-y-3">
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q1" value="yes" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Да, участвуем регулярно</span>
                    </label>
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q1" value="sometimes" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Пробовали, но без результата</span>
                    </label>
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q1" value="no" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Нет, хотим начать</span>
                    </label>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="quiz-step" data-step="2" style="display:none;">
                <h3 class="text-xl font-semibold mb-6 text-white">Каков размер вашей компании?</h3>
                <div class="space-y-3">
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q2" value="small" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Малый бизнес (до 50 сотрудников)</span>
                    </label>
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q2" value="medium" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Средний бизнес (50-250 сотрудников)</span>
                    </label>
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q2" value="large" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Крупный бизнес (более 250 сотрудников)</span>
                    </label>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="quiz-step" data-step="3" style="display:none;">
                <h3 class="text-xl font-semibold mb-6 text-white">Что для вас важнее всего?</h3>
                <div class="space-y-3">
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q3" value="economy" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Экономия — платить только за результат</span>
                    </label>
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q3" value="volume" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Максимум контрактов — полное сопровождение</span>
                    </label>
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q3" value="legal" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Юридическая защита — минимизация рисков</span>
                    </label>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="quiz-step" data-step="4" style="display:none;">
                <h3 class="text-xl font-semibold mb-6 text-white">Когда вы готовы начать?</h3>
                <div class="space-y-3">
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q4" value="now" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Прямо сейчас — тендеры уже ждут</span>
                    </label>
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q4" value="month" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">В течение месяца</span>
                    </label>
                    <label class="quiz-option flex items-center gap-4 p-4 rounded-xl border border-white/5 cursor-pointer hover:border-gold/30 transition-all">
                        <input type="radio" name="q4" value="think" class="hidden">
                        <div class="w-5 h-5 rounded-full border-2 border-white/20 flex items-center justify-center shrink-0">
                            <div class="w-2.5 h-2.5 rounded-full bg-gold hidden"></div>
                        </div>
                        <span class="text-gray-300">Пока изучаю варианты</span>
                    </label>
                </div>
            </div>

            <!-- Result -->
            <div id="quiz-result" style="display:none;" class="text-center">
                <div class="w-16 h-16 rounded-2xl bg-gold-500/10 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Ваш результат:</h3>
                <p id="quiz-result-text" class="text-lg text-gold mb-8"></p>
                <div class="max-w-sm mx-auto space-y-4">
                    <input type="text" id="quiz-name" placeholder="Ваше имя" class="w-full px-4 py-3 rounded-xl bg-[#142125] border border-white/10 text-white placeholder-gray-600 focus:outline-none focus:border-gold-500/50">
                    <input type="tel" id="quiz-phone" placeholder="+7 (___) ___-__-__" class="w-full px-4 py-3 rounded-xl bg-[#142125] border border-white/10 text-white placeholder-gray-600 focus:outline-none focus:border-gold-500/50">
                    <button id="quiz-submit" class="w-full py-4 btn-gold rounded-xl text-base">Получить рекомендацию</button>
                </div>
            </div>

            <!-- Navigation -->
            <div id="quiz-nav" class="flex justify-between mt-8">
                <button id="quiz-prev" class="px-6 py-3 border border-white/10 text-gray-300 rounded-xl hover:border-gold-500/30 transition-all" style="visibility:hidden;">Назад</button>
                <button id="quiz-next" class="px-8 py-3 btn-gold rounded-xl">Далее</button>
            </div>
        </div>
    </div>
</section>


<!-- Urgency Section -->
<section class="relative py-24 md:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-[#102a43] via-[#0a1929] to-[#102a43]"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-gold-500/5 rounded-full blur-[150px]"></div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 relative z-10 text-center">
        <div class="animate-section">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-red-500/20 bg-red-500/5 mb-8">
                <span class="w-2 h-2 bg-red-400 rounded-full animate-pulse"></span>
                <span class="text-xs font-medium text-red-400 tracking-wider uppercase">Не упустите возможность</span>
            </div>

            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight mb-6 text-white">
                Ваши конкуренты уже<br>
                <span class="text-red-400">участвуют в закупках</span><br>
                и получают контракты
            </h2>

            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10 leading-relaxed">
                Пока одни компании сомневаются — другие системно зарабатывают на тендерах миллионы рублей. Не упускайте возможности для роста вашего бизнеса.
            </p>

            <a href="#contact" class="group inline-flex items-center justify-center gap-2 px-10 py-5 btn-gold rounded-xl text-lg">
                Свяжитесь с нами уже сегодня
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="relative py-24 md:py-32 bg-[#0a1929] overflow-hidden">
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-gold-500/5 rounded-full blur-[150px]"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
            <div class="animate-section">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-gold-500/20 bg-gold-500/5 mb-6">
                    <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span class="text-xs font-medium text-gold tracking-wider uppercase">Контакты</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-6 text-white">
                    Свяжитесь <span class="text-gold-gradient">с нами</span>
                </h2>
                <p class="text-lg text-gray-300 mb-10 leading-relaxed">
                    Получите консультацию и узнайте, какие закупки подходят именно вашей компании.
                </p>

                <div class="space-y-6">
                    <a href="tel:+79340709990" class="flex items-center gap-4 group">
                        <div class="w-12 h-12 rounded-xl bg-gold-500/10 flex items-center justify-center group-hover:bg-gold-500/20 transition-colors">
                            <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-0.5">Телефон</p>
                            <p class="text-lg font-medium group-hover:text-gold transition-colors text-white">+7 (934) 070-99-90</p>
                        </div>
                    </a>

                    <a href="tel:+79232352247" class="flex items-center gap-4 group">
                        <div class="w-12 h-12 rounded-xl bg-gold-500/10 flex items-center justify-center group-hover:bg-gold-500/20 transition-colors">
                            <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-0.5">Дополнительный телефон</p>
                            <p class="text-lg font-medium group-hover:text-gold transition-colors text-white">+7 (923) 235-22-47</p>
                        </div>
                    </a>

                    <a href="mailto:Frigate26@yandex.ru" class="flex items-center gap-4 group">
                        <div class="w-12 h-12 rounded-xl bg-gold-500/10 flex items-center justify-center group-hover:bg-gold-500/20 transition-colors">
                            <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-0.5">E-mail</p>
                            <p class="text-lg font-medium group-hover:text-gold transition-colors text-white">Frigate26@yandex.ru</p>
                        </div>
                    </a>
                </div>

                <div class="mt-10 p-6 rounded-2xl bg-[#142125] border border-white/5">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-[#D4AF37] to-[#B8860B] flex items-center justify-center text-[#0a1929] font-black text-sm">Ф</div>
                        <span class="font-bold text-white">ООО «ФРЕГАТ»</span>
                    </div>
                    <p class="text-sm text-gray-400">Надёжный партнёр в сфере тендерного сопровождения и закупочной деятельности.</p>
                </div>
            </div>

            <div class="animate-section">
                <form id="contactForm" class="bg-[#142125] border border-white/5 rounded-3xl p-8 md:p-10">
                    <h3 class="text-xl font-bold mb-2 text-white">Получить консультацию</h3>
                    <p class="text-sm text-gray-400 mb-8">Заполните форму и мы свяжемся с вами в ближайшее время</p>

                    <div class="space-y-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Ваше имя *</label>
                            <input type="text" id="formName" required placeholder="Иван Иванов" class="w-full px-4 py-3 rounded-xl bg-[#0a1929] border border-white/10 text-white placeholder-gray-600 focus:outline-none focus:border-gold-500/50 focus:ring-1 focus:ring-gold-500/25 transition-colors text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Телефон *</label>
                            <input type="tel" id="formPhone" required placeholder="+7 (___) ___-__-__" class="w-full px-4 py-3 rounded-xl bg-[#0a1929] border border-white/10 text-white placeholder-gray-600 focus:outline-none focus:border-gold-500/50 focus:ring-1 focus:ring-gold-500/25 transition-colors text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">E-mail</label>
                            <input type="email" id="formEmail" placeholder="company@example.com" class="w-full px-4 py-3 rounded-xl bg-[#0a1929] border border-white/10 text-white placeholder-gray-600 focus:outline-none focus:border-gold-500/50 focus:ring-1 focus:ring-gold-500/25 transition-colors text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Сообщение</label>
                            <textarea id="formMessage" rows="4" placeholder="Расскажите о вашей компании и какие закупки вас интересуют..." class="w-full px-4 py-3 rounded-xl bg-[#0a1929] border border-white/10 text-white placeholder-gray-600 focus:outline-none focus:border-gold-500/50 focus:ring-1 focus:ring-gold-500/25 transition-colors text-sm resize-none"></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 btn-gold rounded-xl text-base flex items-center justify-center gap-2">
                            <span>Отправить заявку</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                        </button>

                        <p class="text-xs text-gray-600 text-center">Нажимая кнопку, вы соглашаетесь с обработкой персональных данных</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</main>

<!-- Toast -->
<div id="toast" class="fixed bottom-6 right-6 z-[100] bg-[#142125] border border-gold-500/20 rounded-xl p-4 shadow-2xl max-w-sm transform translate-x-full opacity-0 transition-all duration-400">
    <div class="flex items-start gap-3">
        <div class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div>
            <p class="font-semibold text-sm text-white">Заявка отправлена!</p>
            <p class="text-xs text-gray-400 mt-1">Мы свяжемся с вами в ближайшее время</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Contact form
    var contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var name = document.getElementById('formName').value.trim();
            var phone = document.getElementById('formPhone').value.trim();
            if (!name || !phone) return;

            var formData = new FormData();
            formData.append('action', 'fregat_contact');
            formData.append('nonce', typeof fregat_contact !== 'undefined' ? fregat_contact.nonce : '');
            formData.append('name', name);
            formData.append('phone', phone);
            formData.append('email', document.getElementById('formEmail').value);
            formData.append('message', document.getElementById('formMessage').value);

            if (typeof fregat_contact !== 'undefined') {
                fetch(fregat_contact.ajax_url, { method: 'POST', body: formData });
            }

            var toast = document.getElementById('toast');
            toast.style.transform = 'translateX(0)';
            toast.style.opacity = '1';
            setTimeout(function() {
                toast.style.transform = 'translateX(100%)';
                toast.style.opacity = '0';
            }, 5000);
            contactForm.reset();
        });
    }

    // Phone mask
    var phoneInput = document.getElementById('formPhone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            var value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('7') || value.startsWith('8')) value = value.substring(1);
            var formatted = '+7';
            if (value.length > 0) formatted += ' (' + value.substring(0, 3);
            if (value.length > 3) formatted += ') ' + value.substring(3, 6);
            if (value.length > 6) formatted += '-' + value.substring(6, 8);
            if (value.length > 8) formatted += '-' + value.substring(8, 10);
            e.target.value = formatted;
        });
    }
});
</script>

<?php get_footer(); ?>
