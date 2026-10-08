<x-layout :title="__('enterprise.meta.title')" :description="__('enterprise.meta.description')" :keywords="__('enterprise.meta.keywords')">
    <!-- Top Header / Navigation -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-40">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-16 sm:h-18">
                <!-- Brand -->
                <a href="{{ route('enterprise.locale', app()->getLocale()) }}" class="flex items-center gap-2.5 shrink-0">
                    <div class="w-8 h-8 rounded bg-slate-900 flex items-center justify-center text-white shrink-0">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <span class="font-bold text-slate-900 text-sm sm:text-base md:text-lg tracking-tight whitespace-nowrap">{{ __('enterprise.brand') }}</span>
                </a>

                <!-- Nav links (Desktop) -->
                <nav class="hidden lg:flex items-center space-x-7 text-sm font-medium text-slate-600">
                    <a href="{{ route('index.locale', app()->getLocale()) }}" class="text-slate-900 font-semibold hover:text-slate-600 transition-colors flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        <span>{{ __('enterprise.nav.home') }}</span>
                    </a>
                    <a href="#services" class="hover:text-slate-900 transition-colors whitespace-nowrap">{{ __('enterprise.nav.services') }}</a>
                    <a href="#about" class="hover:text-slate-900 transition-colors whitespace-nowrap">{{ __('enterprise.nav.capabilities') }}</a>
                    <a href="#process" class="hover:text-slate-900 transition-colors whitespace-nowrap">{{ __('enterprise.nav.approach') }}</a>
                    <a href="#contact" class="hover:text-slate-900 transition-colors whitespace-nowrap">{{ __('enterprise.nav.contact') }}</a>
                </nav>

                <!-- Desktop Actions: Language Switcher & CTA -->
                <div class="hidden lg:flex items-center gap-4 shrink-0">
                    <!-- Language Dropdown (Globe + Flags) -->
                    <div class="relative">
                        <button id="lang-dropdown-btn" type="button" class="inline-flex items-center gap-2 px-3 py-2 rounded-md border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 hover:text-slate-900 text-xs font-semibold shadow-xs transition-colors cursor-pointer" aria-label="Select language">
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke-width="1.8"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
                            </svg>
                            
                            @if(app()->getLocale() == 'lv')
                                <svg class="w-4 h-3 rounded-[2px] shadow-xs border border-slate-200/80 shrink-0" viewBox="0 0 640 480"><rect width="640" height="480" fill="#9e3039"/><rect y="192" width="640" height="96" fill="#ffffff"/></svg>
                                <span>LV</span>
                            @elseif(app()->getLocale() == 'ru')
                                <svg class="w-4 h-3 rounded-[2px] shadow-xs border border-slate-200/80 shrink-0" viewBox="0 0 640 480"><rect width="640" height="160" fill="#ffffff"/><rect y="160" width="640" height="160" fill="#0039a6"/><rect y="320" width="640" height="160" fill="#d52b1e"/></svg>
                                <span>RU</span>
                            @else
                                <svg class="w-4 h-3 rounded-[2px] shadow-xs border border-slate-200/80 shrink-0" viewBox="0 0 640 480"><path fill="#012169" d="M0 0h640v480H0z"/><path fill="#fff" d="m75 0 245 180L565 0h75v60L435 240l205 180v60h-75L320 300 75 480H0v-60l205-180L0 60V0h75z"/><path fill="#c8102e" d="m424 288 216 156v36l-265-192h49zm-208-96L0 36V0l265 192h-49zm360-156-216 156h49L640 36V0h-64zm-512 360 216-156h-49L0 444v36h64z"/><path fill="#fff" d="M240 0h160v480H240zM0 160h640v160H0z"/><path fill="#c8102e" d="M266 0h108v480H266zM0 186h640v108H0z"/></svg>
                                <span>EN</span>
                            @endif

                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="lang-dropdown-menu" class="hidden absolute right-0 mt-1.5 w-44 bg-white border border-slate-200 rounded-lg shadow-lg py-1.5 z-50">
                            <!-- English -->
                            <a href="{{ route('enterprise.locale', 'en') }}" class="flex items-center justify-between px-3.5 py-2 text-xs font-medium {{ app()->getLocale() == 'en' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' }}">
                                <span class="flex items-center gap-2.5">
                                    <svg class="w-4 h-3 rounded-[2px] shadow-xs border border-slate-200/80 shrink-0" viewBox="0 0 640 480"><path fill="#012169" d="M0 0h640v480H0z"/><path fill="#fff" d="m75 0 245 180L565 0h75v60L435 240l205 180v60h-75L320 300 75 480H0v-60l205-180L0 60V0h75z"/><path fill="#c8102e" d="m424 288 216 156v36l-265-192h49zm-208-96L0 36V0l265 192h-49zm360-156-216 156h49L640 36V0h-64zm-512 360 216-156h-49L0 444v36h64z"/><path fill="#fff" d="M240 0h160v480H240zM0 160h640v160H0z"/><path fill="#c8102e" d="M266 0h108v480H266zM0 186h640v108H0z"/></svg>
                                    <span>English</span>
                                </span>
                                @if(app()->getLocale() == 'en')
                                    <svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                @endif
                            </a>

                            <!-- Latviešu -->
                            <a href="{{ route('enterprise.locale', 'lv') }}" class="flex items-center justify-between px-3.5 py-2 text-xs font-medium {{ app()->getLocale() == 'lv' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' }}">
                                <span class="flex items-center gap-2.5">
                                    <svg class="w-4 h-3 rounded-[2px] shadow-xs border border-slate-200/80 shrink-0" viewBox="0 0 640 480"><rect width="640" height="480" fill="#9e3039"/><rect y="192" width="640" height="96" fill="#ffffff"/></svg>
                                    <span>Latviešu</span>
                                </span>
                                @if(app()->getLocale() == 'lv')
                                    <svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                @endif
                            </a>

                            <!-- Русский -->
                            <a href="{{ route('enterprise.locale', 'ru') }}" class="flex items-center justify-between px-3.5 py-2 text-xs font-medium {{ app()->getLocale() == 'ru' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' }}">
                                <span class="flex items-center gap-2.5">
                                    <svg class="w-4 h-3 rounded-[2px] shadow-xs border border-slate-200/80 shrink-0" viewBox="0 0 640 480"><rect width="640" height="160" fill="#ffffff"/><rect y="160" width="640" height="160" fill="#0039a6"/><rect y="320" width="640" height="160" fill="#d52b1e"/></svg>
                                    <span>Русский</span>
                                </span>
                                @if(app()->getLocale() == 'ru')
                                    <svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                @endif
                            </a>
                        </div>
                    </div>

                    <a href="#contactForm" class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 rounded-md bg-slate-900 text-white hover:bg-slate-800 text-sm font-medium transition-colors">
                        {{ __('enterprise.nav.request_consultation') }}
                    </a>
                </div>

                <!-- Mobile / Tablet Right Controls -->
                <div class="flex items-center gap-2.5 lg:hidden">
                    <!-- Mobile Language Dropdown -->
                    <div class="relative">
                        <button id="lang-mobile-dropdown-btn" type="button" class="inline-flex items-center gap-1.5 px-2.5 py-1.5 rounded-md border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold shadow-xs cursor-pointer" aria-label="Select language">
                            <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke-width="1.8"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
                            </svg>
                            @if(app()->getLocale() == 'lv')
                                <svg class="w-3.5 h-2.5 rounded-[1px] shadow-xs shrink-0" viewBox="0 0 640 480"><rect width="640" height="480" fill="#9e3039"/><rect y="192" width="640" height="96" fill="#ffffff"/></svg>
                                <span>LV</span>
                            @elseif(app()->getLocale() == 'ru')
                                <svg class="w-3.5 h-2.5 rounded-[1px] shadow-xs shrink-0" viewBox="0 0 640 480"><rect width="640" height="160" fill="#ffffff"/><rect y="160" width="640" height="160" fill="#0039a6"/><rect y="320" width="640" height="160" fill="#d52b1e"/></svg>
                                <span>RU</span>
                            @else
                                <svg class="w-3.5 h-2.5 rounded-[1px] shadow-xs shrink-0" viewBox="0 0 640 480"><path fill="#012169" d="M0 0h640v480H0z"/><path fill="#fff" d="m75 0 245 180L565 0h75v60L435 240l205 180v60h-75L320 300 75 480H0v-60l205-180L0 60V0h75z"/><path fill="#c8102e" d="m424 288 216 156v36l-265-192h49zm-208-96L0 36V0l265 192h-49zm360-156-216 156h49L640 36V0h-64zm-512 360 216-156h-49L0 444v36h64z"/><path fill="#fff" d="M240 0h160v480H240zM0 160h640v160H0z"/><path fill="#c8102e" d="M266 0h108v480H266zM0 186h640v108H0z"/></svg>
                                <span>EN</span>
                            @endif
                            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        
                        <div id="lang-mobile-dropdown-menu" class="hidden absolute right-0 mt-1.5 w-40 bg-white border border-slate-200 rounded-lg shadow-lg py-1 z-50">
                            <a href="{{ route('enterprise.locale', 'en') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium {{ app()->getLocale() == 'en' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                                <span class="flex items-center gap-2">
                                    <svg class="w-3.5 h-2.5 rounded-[1px] shrink-0" viewBox="0 0 640 480"><path fill="#012169" d="M0 0h640v480H0z"/><path fill="#fff" d="m75 0 245 180L565 0h75v60L435 240l205 180v60h-75L320 300 75 480H0v-60l205-180L0 60V0h75z"/><path fill="#c8102e" d="m424 288 216 156v36l-265-192h49zm-208-96L0 36V0l265 192h-49zm360-156-216 156h49L640 36V0h-64zm-512 360 216-156h-49L0 444v36h64z"/><path fill="#fff" d="M240 0h160v480H240zM0 160h640v160H0z"/><path fill="#c8102e" d="M266 0h108v480H266zM0 186h640v108H0z"/></svg>
                                    <span>English</span>
                                </span>
                                @if(app()->getLocale() == 'en')<svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>@endif
                            </a>
                            <a href="{{ route('enterprise.locale', 'lv') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium {{ app()->getLocale() == 'lv' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                                <span class="flex items-center gap-2">
                                    <svg class="w-3.5 h-2.5 rounded-[1px] shrink-0" viewBox="0 0 640 480"><rect width="640" height="480" fill="#9e3039"/><rect y="192" width="640" height="96" fill="#ffffff"/></svg>
                                    <span>Latviešu</span>
                                </span>
                                @if(app()->getLocale() == 'lv')<svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>@endif
                            </a>
                            <a href="{{ route('enterprise.locale', 'ru') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium {{ app()->getLocale() == 'ru' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                                <span class="flex items-center gap-2">
                                    <svg class="w-3.5 h-2.5 rounded-[1px] shrink-0" viewBox="0 0 640 480"><rect width="640" height="160" fill="#ffffff"/><rect y="160" width="640" height="160" fill="#0039a6"/><rect y="320" width="640" height="160" fill="#d52b1e"/></svg>
                                    <span>Русский</span>
                                </span>
                                @if(app()->getLocale() == 'ru')<svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>@endif
                            </a>
                        </div>
                    </div>

                    <button id="mobile-menu-btn" type="button" class="text-slate-700 hover:text-slate-900 p-1.5 focus:outline-none" aria-label="Toggle menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile / Tablet menu dropdown -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white px-4 py-4 space-y-3">
            <a href="{{ route('index.locale', app()->getLocale()) }}" class="block py-1.5 text-sm font-semibold text-slate-900">{{ __('enterprise.nav.home') }}</a>
            <a href="#services" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('enterprise.nav.services') }}</a>
            <a href="#about" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('enterprise.nav.capabilities') }}</a>
            <a href="#process" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('enterprise.nav.approach') }}</a>
            <a href="#contact" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('enterprise.nav.contact') }}</a>
            <a href="#contactForm" class="block text-center w-full py-2.5 rounded-md bg-slate-900 text-white font-medium text-sm mt-2">
                {{ __('enterprise.nav.request_consultation') }}
            </a>
        </div>
    </header>


    <main class="flex-grow">
        <!-- HERO SECTION -->
        <section class="bg-white border-b border-slate-200 py-16 sm:py-24">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="max-w-3xl">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-4">
                        {{ __('enterprise.hero.eyebrow') }}
                    </p>
                    <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-6">
                        {{ __('enterprise.hero.title') }}
                    </h1>
                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed mb-8">
                        {{ __('enterprise.hero.subtitle') }}
                    </p>

                    <div class="flex flex-wrap items-center gap-4">
                        <a href="#contactForm" class="inline-flex items-center justify-center px-6 py-3 rounded-md bg-slate-900 text-white hover:bg-slate-800 text-sm font-semibold transition-colors">
                            {{ __('enterprise.hero.cta_primary') }}
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center px-6 py-3 rounded-md border border-slate-300 text-slate-700 hover:bg-slate-50 hover:text-slate-900 text-sm font-semibold transition-colors">
                            {{ __('enterprise.hero.cta_secondary') }}
                        </a>
                    </div>
                </div>

                <!-- Trust Points Grid -->
                <div class="mt-16 pt-10 border-t border-slate-200 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">{{ __('enterprise.hero.pillars.architecture_label') }}</div>
                        <div class="text-sm font-bold text-slate-900">{{ __('enterprise.hero.pillars.architecture_desc') }}</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">{{ __('enterprise.hero.pillars.automation_label') }}</div>
                        <div class="text-sm font-bold text-slate-900">{{ __('enterprise.hero.pillars.automation_desc') }}</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">{{ __('enterprise.hero.pillars.integration_label') }}</div>
                        <div class="text-sm font-bold text-slate-900">{{ __('enterprise.hero.pillars.integration_desc') }}</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">{{ __('enterprise.hero.pillars.data_label') }}</div>
                        <div class="text-sm font-bold text-slate-900">{{ __('enterprise.hero.pillars.data_desc') }}</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES SECTION (4 PILLARS) -->
        <section id="services" class="py-16 sm:py-20 bg-slate-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                
                <div class="mb-12">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">{{ __('enterprise.services.eyebrow') }}</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        {{ __('enterprise.services.title') }}
                    </h2>
                </div>

                <div class="space-y-8">
                    
                    <!-- Service 1: AI Process Automation -->
                    <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900">{{ __('enterprise.services.ai.title') }}</h3>
                                <p class="text-slate-600 text-sm sm:text-base mt-2">
                                    {{ __('enterprise.services.ai.description') }}
                                </p>
                            </div>
                            <button type="button" onclick="selectService('AI Process Automation')" class="inline-flex items-center text-sm font-semibold text-slate-900 hover:text-slate-600 transition-colors shrink-0 self-start md:self-center">
                                {{ __('enterprise.services.inquire') }} &rarr;
                            </button>
                        </div>

                        <div class="mt-6">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
                                @foreach(__('enterprise.services.ai.features') as $feature)
                                    <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Service 2: Web Scraping Solutions -->
                    <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900">{{ __('enterprise.services.scraping.title') }}</h3>
                                <p class="text-slate-600 text-sm sm:text-base mt-2">
                                    {{ __('enterprise.services.scraping.description') }}
                                </p>
                            </div>
                            <button type="button" onclick="selectService('Web Scraping Solutions')" class="inline-flex items-center text-sm font-semibold text-slate-900 hover:text-slate-600 transition-colors shrink-0 self-start md:self-center">
                                {{ __('enterprise.services.inquire') }} &rarr;
                            </button>
                        </div>

                        <div class="mt-6">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
                                @foreach(__('enterprise.services.scraping.features') as $feature)
                                    <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Service 3: Business Process Automation -->
                    <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900">{{ __('enterprise.services.automation.title') }}</h3>
                                <p class="text-slate-600 text-sm sm:text-base mt-2">
                                    {{ __('enterprise.services.automation.description') }}
                                </p>
                            </div>
                            <button type="button" onclick="selectService('Business Process Automation')" class="inline-flex items-center text-sm font-semibold text-slate-900 hover:text-slate-600 transition-colors shrink-0 self-start md:self-center">
                                {{ __('enterprise.services.inquire') }} &rarr;
                            </button>
                        </div>

                        <div class="mt-6">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
                                @foreach(__('enterprise.services.automation.features') as $feature)
                                    <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Service 4: ERP Systems Integration -->
                    <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900">{{ __('enterprise.services.erp.title') }}</h3>
                                <p class="text-slate-600 text-sm sm:text-base mt-2">
                                    {{ __('enterprise.services.erp.description') }}
                                </p>
                            </div>
                            <button type="button" onclick="selectService('ERP Systems Integration')" class="inline-flex items-center text-sm font-semibold text-slate-900 hover:text-slate-600 transition-colors shrink-0 self-start md:self-center">
                                {{ __('enterprise.services.inquire') }} &rarr;
                            </button>
                        </div>

                        <div class="mt-6">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
                                @foreach(__('enterprise.services.erp.features') as $feature)
                                    <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CAPABILITIES & STANDARDS -->
        <section id="about" class="py-16 sm:py-20 bg-white border-y border-slate-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="mb-12">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">{{ __('enterprise.capabilities.eyebrow') }}</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        {{ __('enterprise.capabilities.title') }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach(__('enterprise.capabilities.items') as $item)
                        <div class="border-t-2 border-slate-900 pt-5">
                            <h3 class="text-base font-bold text-slate-900 mb-2">{{ $item['title'] }}</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ $item['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- IMPLEMENTATION PROCESS -->
        <section id="process" class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="mb-12">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">{{ __('enterprise.process.eyebrow') }}</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        {{ __('enterprise.process.title') }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach(__('enterprise.process.steps') as $step)
                        <div class="bg-white border border-slate-200 rounded-lg p-6">
                            <div class="text-2xl font-bold text-slate-300 font-mono mb-3">{{ $step['number'] }}</div>
                            <h3 class="text-base font-bold text-slate-900 mb-2">{{ $step['title'] }}</h3>
                            <p class="text-sm text-slate-600">{{ $step['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CONTACT & REQUEST FORM -->
        <section id="contact" class="py-16 sm:py-24 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    
                    <!-- Left: Contact info -->
                    <div class="lg:col-span-5 space-y-6">
                        <div>
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">{{ __('enterprise.contact.eyebrow') }}</p>
                            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                                {{ __('enterprise.contact.title') }}
                            </h2>
                            <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                                {{ __('enterprise.contact.subtitle') }}
                            </p>
                        </div>

                        <div class="bg-slate-50 border border-slate-200 rounded-lg p-6 space-y-3">
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">{{ __('enterprise.contact.email_label') }}</div>
                            <a href="mailto:support@lfcgroup.lv" class="text-lg font-bold text-slate-900 hover:text-slate-700 transition-colors block">
                                support@lfcgroup.lv
                            </a>
                            <p class="text-xs text-slate-500">{{ __('enterprise.contact.sla') }}</p>
                        </div>
                    </div>

                    <!-- Right: Submit Request Form -->
                    <div class="lg:col-span-7">
                        <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                            <h3 class="text-xl font-bold text-slate-900 mb-6">{{ __('enterprise.contact.form_title') }}</h3>

                            @if(session('success'))
                                <div class="mb-6 p-4 rounded-md bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-medium">
                                    {{ __('enterprise.contact.success') }}
                                </div>
                            @endif

                            <form id="contactForm" action="{{ route('request-consultation') }}" method="POST" class="space-y-5">
                                @csrf

                                <div>
                                    <label for="name" class="block text-sm font-medium text-slate-700 mb-1">
                                        {{ __('enterprise.contact.name') }} <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                           class="w-full px-3.5 py-2.5 border @error('name') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm">
                                    @error('name')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">
                                        {{ __('enterprise.contact.email') }} <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                           class="w-full px-3.5 py-2.5 border @error('email') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm">
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="subject" class="block text-sm font-medium text-slate-700 mb-1">
                                        {{ __('enterprise.contact.service') }} <span class="text-red-500">*</span>
                                    </label>
                                    <select id="subject" name="subject" required
                                            class="w-full px-3.5 py-2.5 border @error('subject') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm bg-white">
                                        <option value="AI Process Automation" @if(old('subject') == 'AI Process Automation') selected @endif>{{ __('enterprise.contact.service_options.AI Process Automation') }}</option>
                                        <option value="Web Scraping Solutions" @if(old('subject') == 'Web Scraping Solutions') selected @endif>{{ __('enterprise.contact.service_options.Web Scraping Solutions') }}</option>
                                        <option value="Business Process Automation" @if(old('subject') == 'Business Process Automation') selected @endif>{{ __('enterprise.contact.service_options.Business Process Automation') }}</option>
                                        <option value="ERP Systems Integration" @if(old('subject') == 'ERP Systems Integration') selected @endif>{{ __('enterprise.contact.service_options.ERP Systems Integration') }}</option>
                                        <option value="Other" @if(old('subject') == 'Other') selected @endif>{{ __('enterprise.contact.service_options.Other') }}</option>
                                    </select>
                                    @error('subject')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="message" class="block text-sm font-medium text-slate-700 mb-1">
                                        {{ __('enterprise.contact.message') }} <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="message" name="message" rows="4" required
                                              class="w-full px-3.5 py-2.5 border @error('message') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm">{{ old('message') }}</textarea>
                                    @error('message')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit"
                                        class="w-full sm:w-auto px-6 py-3 bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-md text-sm transition-colors cursor-pointer">
                                    {{ __('enterprise.contact.submit') }}
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-400 py-10 border-t border-slate-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
                <div>
                    <span class="font-semibold text-white text-sm">{{ __('enterprise.brand') }}</span>
                </div>
                <div>
                    &copy; {{ \Carbon\Carbon::now()->year }} {{ __('enterprise.footer.rights') }}
                </div>
            </div>
        </div>
    </footer>

    @if(session('success') || $errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const formElem = document.getElementById('contactForm');
                if (formElem) {
                    formElem.scrollIntoView({ behavior: 'smooth' });
                }
            });
        </script>
    @endif
</x-layout>
