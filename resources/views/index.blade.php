<x-layout>
    <!-- Top Header / Navigation -->
    <header class="bg-white/95 backdrop-blur-md border-b border-slate-200 sticky top-0 z-40 transition-all">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Brand -->
                <a href="{{ route('index.locale', app()->getLocale()) }}" class="flex items-center gap-3 shrink-0 group">
                    <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-gradient-to-tr from-slate-950 via-slate-900 to-slate-800 flex items-center justify-center text-white shadow-sm ring-1 ring-slate-900/10 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-slate-900 text-sm sm:text-base md:text-lg tracking-tight leading-none">{{ __('site.brand') }}</span>
                        <span class="text-[11px] text-slate-500 font-medium hidden sm:inline-block mt-1">{{ __('site.tagline') }}</span>
                    </div>
                </a>

                <!-- Nav links (Desktop) -->
                <nav class="hidden lg:flex items-center space-x-6 text-sm font-medium text-slate-600">
                    <a href="#services" class="hover:text-slate-900 transition-colors whitespace-nowrap">{{ __('site.nav.services') }}</a>
                    <a href="#why-me" class="hover:text-slate-900 transition-colors whitespace-nowrap">{{ __('site.nav.why_me') }}</a>
                    <a href="#process" class="hover:text-slate-900 transition-colors whitespace-nowrap">{{ __('site.nav.process') }}</a>
                    <a href="#contact" class="hover:text-slate-900 transition-colors whitespace-nowrap">{{ __('site.nav.contact') }}</a>
                </nav>

                <!-- Desktop Actions: Language Switcher & CTA -->
                <div class="hidden lg:flex items-center gap-3.5 shrink-0">
                    <!-- Language Dropdown -->
                    <div class="relative">
                        <button id="lang-dropdown-btn" type="button" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 hover:text-slate-900 text-xs font-semibold shadow-xs transition-colors cursor-pointer" aria-label="Select language">
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
                        <div id="lang-dropdown-menu" class="hidden absolute right-0 mt-1.5 w-44 bg-white border border-slate-200 rounded-xl shadow-xl py-1.5 z-50 ring-1 ring-slate-900/5">
                            <!-- Latviešu -->
                            <a href="{{ route('index.locale', 'lv') }}" class="flex items-center justify-between px-3.5 py-2 text-xs font-medium {{ app()->getLocale() == 'lv' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' }}">
                                <span class="flex items-center gap-2.5">
                                    <svg class="w-4 h-3 rounded-[2px] shadow-xs border border-slate-200/80 shrink-0" viewBox="0 0 640 480"><rect width="640" height="480" fill="#9e3039"/><rect y="192" width="640" height="96" fill="#ffffff"/></svg>
                                    <span>Latviešu</span>
                                </span>
                                @if(app()->getLocale() == 'lv')
                                    <svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                @endif
                            </a>

                            <!-- English -->
                            <a href="{{ route('index.locale', 'en') }}" class="flex items-center justify-between px-3.5 py-2 text-xs font-medium {{ app()->getLocale() == 'en' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' }}">
                                <span class="flex items-center gap-2.5">
                                    <svg class="w-4 h-3 rounded-[2px] shadow-xs border border-slate-200/80 shrink-0" viewBox="0 0 640 480"><path fill="#012169" d="M0 0h640v480H0z"/><path fill="#fff" d="m75 0 245 180L565 0h75v60L435 240l205 180v60h-75L320 300 75 480H0v-60l205-180L0 60V0h75z"/><path fill="#c8102e" d="m424 288 216 156v36l-265-192h49zm-208-96L0 36V0l265 192h-49zm360-156-216 156h49L640 36V0h-64zm-512 360 216-156h-49L0 444v36h64z"/><path fill="#fff" d="M240 0h160v480H240zM0 160h640v160H0z"/><path fill="#c8102e" d="M266 0h108v480H266zM0 186h640v108H0z"/></svg>
                                    <span>English</span>
                                </span>
                                @if(app()->getLocale() == 'en')
                                    <svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                @endif
                            </a>

                            <!-- Русский -->
                            <a href="{{ route('index.locale', 'ru') }}" class="flex items-center justify-between px-3.5 py-2 text-xs font-medium {{ app()->getLocale() == 'ru' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' }}">
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

                    <a href="#contactForm" class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 rounded-lg bg-slate-900 text-white hover:bg-slate-800 text-sm font-semibold shadow-sm transition-all hover:shadow">
                        {{ __('site.nav.start_project') }}
                    </a>
                </div>

                <!-- Mobile Controls -->
                <div class="flex items-center gap-2 lg:hidden">
                    <!-- Mobile Language Dropdown -->
                    <div class="relative">
                        <button id="lang-mobile-dropdown-btn" type="button" class="inline-flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold shadow-xs cursor-pointer" aria-label="Select language">
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
                        
                        <div id="lang-mobile-dropdown-menu" class="hidden absolute right-0 mt-1.5 w-40 bg-white border border-slate-200 rounded-xl shadow-xl py-1 z-50">
                            <a href="{{ route('index.locale', 'lv') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium {{ app()->getLocale() == 'lv' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                                <span class="flex items-center gap-2">
                                    <svg class="w-3.5 h-2.5 rounded-[1px] shrink-0" viewBox="0 0 640 480"><rect width="640" height="480" fill="#9e3039"/><rect y="192" width="640" height="96" fill="#ffffff"/></svg>
                                    <span>Latviešu</span>
                                </span>
                                @if(app()->getLocale() == 'lv')<svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>@endif
                            </a>
                            <a href="{{ route('index.locale', 'en') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium {{ app()->getLocale() == 'en' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                                <span class="flex items-center gap-2">
                                    <svg class="w-3.5 h-2.5 rounded-[1px] shrink-0" viewBox="0 0 640 480"><path fill="#012169" d="M0 0h640v480H0z"/><path fill="#fff" d="m75 0 245 180L565 0h75v60L435 240l205 180v60h-75L320 300 75 480H0v-60l205-180L0 60V0h75z"/><path fill="#c8102e" d="m424 288 216 156v36l-265-192h49zm-208-96L0 36V0l265 192h-49zm360-156-216 156h49L640 36V0h-64zm-512 360 216-156h-49L0 444v36h64z"/><path fill="#fff" d="M240 0h160v480H240zM0 160h640v160H0z"/><path fill="#c8102e" d="M266 0h108v480H266zM0 186h640v108H0z"/></svg>
                                    <span>English</span>
                                </span>
                                @if(app()->getLocale() == 'en')<svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>@endif
                            </a>
                            <a href="{{ route('index.locale', 'ru') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium {{ app()->getLocale() == 'ru' ? 'bg-slate-50 text-slate-900 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                                <span class="flex items-center gap-2">
                                    <svg class="w-3.5 h-2.5 rounded-[1px] shrink-0" viewBox="0 0 640 480"><rect width="640" height="160" fill="#ffffff"/><rect y="160" width="640" height="160" fill="#0039a6"/><rect y="320" width="640" height="160" fill="#d52b1e"/></svg>
                                    <span>Русский</span>
                                </span>
                                @if(app()->getLocale() == 'ru')<svg class="w-3.5 h-3.5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>@endif
                            </a>
                        </div>
                    </div>

                    <button id="mobile-menu-btn" type="button" class="p-2 rounded-lg text-slate-700 hover:bg-slate-100 focus:outline-none" aria-label="Toggle menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white px-4 py-4 space-y-3">
            <a href="#services" class="block py-2 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('site.nav.services') }}</a>
            <a href="#why-me" class="block py-2 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('site.nav.why_me') }}</a>
            <a href="#process" class="block py-2 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('site.nav.process') }}</a>
            <a href="#contact" class="block py-2 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('site.nav.contact') }}</a>
            <a href="#contactForm" class="block text-center w-full py-2.5 rounded-lg bg-slate-900 text-white font-semibold text-sm mt-2 shadow-sm">
                {{ __('site.nav.start_project') }}
            </a>
        </div>
    </header>

    <main class="flex-grow">
        <!-- HERO SECTION -->
        <section class="relative overflow-hidden bg-gradient-to-b from-white via-slate-50 to-slate-100/70 border-b border-slate-200 py-16 sm:py-24 lg:py-28">
            <!-- Background subtle pattern -->
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:24px_24px] pointer-events-none"></div>

            <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    
                    <!-- Pill Badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900/5 text-slate-900 text-xs sm:text-sm font-semibold mb-6 ring-1 ring-slate-900/10 shadow-xs">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>{{ __('site.hero.badge') }}</span>
                    </div>

                    <!-- Main H1 Headline -->
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.15] mb-6">
                        {{ __('site.hero.title') }}
                    </h1>

                    <!-- Subtitle / Question statement -->
                    <p class="text-lg sm:text-xl md:text-2xl text-slate-600 font-normal leading-relaxed max-w-3xl mx-auto mb-10">
                        {{ __('site.hero.subtitle') }}
                    </p>

                    <!-- CTA Action Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-14">
                        <a href="#contactForm" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-semibold text-base shadow-lg shadow-slate-900/20 hover:shadow-xl transition-all transform hover:-translate-y-0.5">
                            <span>{{ __('site.hero.cta_primary') }}</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                        <a href="#process" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl bg-white hover:bg-slate-50 text-slate-800 font-semibold text-base border border-slate-300 shadow-sm transition-all">
                            <span>{{ __('site.hero.cta_secondary') }}</span>
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Direct Quick Contact Bar (WhatsApp, Phone, Email) -->
                    <div class="inline-flex flex-wrap items-center justify-center gap-3 p-2 rounded-2xl bg-white/80 backdrop-blur-sm border border-slate-200/90 shadow-sm">
                        <a href="https://wa.me/37126645999?text={{ urlencode(app()->getLocale() == 'ru' ? 'Здравствуйте! Хочу узнать подробнее о разработке проекта.' : (app()->getLocale() == 'en' ? 'Hello! I would like to inquire about project development.' : 'Labdien! Vēlos noskaidrot par projekta izstrādi.')) }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-800 text-xs sm:text-sm font-semibold border border-emerald-200 transition-colors">
                            <svg class="w-4 h-4 text-emerald-600 fill-current" viewBox="0 0 24 24">
                                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.81 13.47 3.81 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/>
                            </svg>
                            <span>WhatsApp ({{ __('site.contact.phone_val') }})</span>
                        </a>

                        <a href="tel:{{ __('site.contact.phone_raw') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 text-xs sm:text-sm font-semibold border border-slate-200 transition-colors">
                            <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>{{ __('site.contact.phone_val') }}</span>
                        </a>

                        <a href="mailto:support@lfcgroup.lv" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 text-xs sm:text-sm font-semibold border border-slate-200 transition-colors">
                            <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>support@lfcgroup.lv</span>
                        </a>
                    </div>

                </div>

                <!-- 4 Highlights / Trust Pillars Grid -->
                <div class="mt-16 pt-10 border-t border-slate-200/90 grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                    <div class="bg-white/90 backdrop-blur-xs p-4 sm:p-5 rounded-xl border border-slate-200/80 shadow-xs flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-500 font-medium block">Pieredze</span>
                            <span class="text-xs sm:text-sm font-bold text-slate-900 leading-tight block">{{ __('site.hero.highlights.experience') }}</span>
                        </div>
                    </div>

                    <div class="bg-white/90 backdrop-blur-xs p-4 sm:p-5 rounded-xl border border-slate-200/80 shadow-xs flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-500 font-medium block">Tehnoloģijas</span>
                            <span class="text-xs sm:text-sm font-bold text-slate-900 leading-tight block">{{ __('site.hero.highlights.ai_speed') }}</span>
                        </div>
                    </div>

                    <div class="bg-white/90 backdrop-blur-xs p-4 sm:p-5 rounded-xl border border-slate-200/80 shadow-xs flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-500 font-medium block">Garantija</span>
                            <span class="text-xs sm:text-sm font-bold text-slate-900 leading-tight block">{{ __('site.hero.highlights.no_prepayment') }}</span>
                        </div>
                    </div>

                    <div class="bg-white/90 backdrop-blur-xs p-4 sm:p-5 rounded-xl border border-slate-200/80 shadow-xs flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-500 font-medium block">Saziņa</span>
                            <span class="text-xs sm:text-sm font-bold text-slate-900 leading-tight block">{{ __('site.hero.highlights.languages') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SERVICES SECTION -->
        <section id="services" class="py-20 bg-slate-50 border-b border-slate-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                
                <div class="max-w-2xl mb-14">
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">{{ __('site.services.eyebrow') }}</p>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                        {{ __('site.services.title') }}
                    </h2>
                    <p class="text-slate-600 text-base sm:text-lg mt-3">
                        {{ __('site.services.subtitle') }}
                    </p>
                </div>

                <!-- 4 Service Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    
                    <!-- 1. Websites -->
                    <div class="bg-white rounded-2xl p-7 sm:p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white flex items-center justify-center mb-6 shadow-sm group-hover:scale-105 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">{{ __('site.services.items.websites.title') }}</h3>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                                {{ __('site.services.items.websites.desc') }}
                            </p>
                            
                            <div class="flex flex-wrap gap-2 mb-8">
                                @foreach(__('site.services.items.websites.tags') as $tag)
                                    <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 border border-slate-200/60">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="pt-5 border-t border-slate-100">
                            <button type="button" onclick="selectService('{{ __('site.services.items.websites.title') }}')" class="w-full inline-flex items-center justify-between text-sm font-semibold text-slate-900 hover:text-blue-600 transition-colors py-1 cursor-pointer">
                                <span>{{ __('site.services.choose_service') }}</span>
                                <span>&rarr;</span>
                            </button>
                        </div>
                    </div>

                    <!-- 2. E-Commerce -->
                    <div class="bg-white rounded-2xl p-7 sm:p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white flex items-center justify-center mb-6 shadow-sm group-hover:scale-105 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">{{ __('site.services.items.ecommerce.title') }}</h3>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                                {{ __('site.services.items.ecommerce.desc') }}
                            </p>
                            
                            <div class="flex flex-wrap gap-2 mb-8">
                                @foreach(__('site.services.items.ecommerce.tags') as $tag)
                                    <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 border border-slate-200/60">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="pt-5 border-t border-slate-100">
                            <button type="button" onclick="selectService('{{ __('site.services.items.ecommerce.title') }}')" class="w-full inline-flex items-center justify-between text-sm font-semibold text-slate-900 hover:text-emerald-600 transition-colors py-1 cursor-pointer">
                                <span>{{ __('site.services.choose_service') }}</span>
                                <span>&rarr;</span>
                            </button>
                        </div>
                    </div>

                    <!-- 3. Business Systems & Automation -->
                    <div class="bg-white rounded-2xl p-7 sm:p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-indigo-600 text-white flex items-center justify-center mb-6 shadow-sm group-hover:scale-105 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">{{ __('site.services.items.systems.title') }}</h3>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                                {{ __('site.services.items.systems.desc') }}
                            </p>
                            
                            <div class="flex flex-wrap gap-2 mb-8">
                                @foreach(__('site.services.items.systems.tags') as $tag)
                                    <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 border border-slate-200/60">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="pt-5 border-t border-slate-100">
                            <button type="button" onclick="selectService('{{ __('site.services.items.systems.title') }}')" class="w-full inline-flex items-center justify-between text-sm font-semibold text-slate-900 hover:text-purple-600 transition-colors py-1 cursor-pointer">
                                <span>{{ __('site.services.choose_service') }}</span>
                                <span>&rarr;</span>
                            </button>
                        </div>
                    </div>

                    <!-- 4. Mobile Apps -->
                    <div class="bg-white rounded-2xl p-7 sm:p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-rose-600 text-white flex items-center justify-center mb-6 shadow-sm group-hover:scale-105 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">{{ __('site.services.items.mobile.title') }}</h3>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                                {{ __('site.services.items.mobile.desc') }}
                            </p>
                            
                            <div class="flex flex-wrap gap-2 mb-8">
                                @foreach(__('site.services.items.mobile.tags') as $tag)
                                    <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 border border-slate-200/60">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="pt-5 border-t border-slate-100">
                            <button type="button" onclick="selectService('{{ __('site.services.items.mobile.title') }}')" class="w-full inline-flex items-center justify-between text-sm font-semibold text-slate-900 hover:text-amber-600 transition-colors py-1 cursor-pointer">
                                <span>{{ __('site.services.choose_service') }}</span>
                                <span>&rarr;</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- WHY CHOOSE ME SECTION -->
        <section id="why-me" class="py-20 bg-white border-b border-slate-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                
                <div class="max-w-3xl mb-14">
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">{{ __('site.why_me.eyebrow') }}</p>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                        {{ __('site.why_me.title') }}
                    </h2>
                    <p class="text-slate-600 text-base sm:text-lg mt-3">
                        {{ __('site.why_me.subtitle') }}
                    </p>
                </div>

                <!-- 4 Benefit Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <!-- 1. Quality & 8+ Years IT -->
                    <div class="relative p-7 sm:p-8 rounded-2xl bg-gradient-to-br from-slate-900 to-slate-950 text-white shadow-xl overflow-hidden">
                        <div class="absolute top-0 right-0 p-8 opacity-10 pointer-events-none">
                            <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div class="relative z-10">
                            <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-white/10 text-sky-400 mb-6 backdrop-blur-md">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold mb-3">{{ __('site.why_me.cards.quality.title') }}</h3>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                                {{ __('site.why_me.cards.quality.desc') }}
                            </p>
                        </div>
                    </div>

                    <!-- 2. Maximum Speed with AI -->
                    <div class="relative p-7 sm:p-8 rounded-2xl bg-gradient-to-br from-indigo-900 via-slate-900 to-slate-950 text-white shadow-xl overflow-hidden">
                        <div class="absolute top-0 right-0 p-8 opacity-10 pointer-events-none">
                            <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div class="relative z-10">
                            <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-white/10 text-amber-400 mb-6 backdrop-blur-md">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold mb-3">{{ __('site.why_me.cards.speed.title') }}</h3>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                                {{ __('site.why_me.cards.speed.desc') }}
                            </p>
                        </div>
                    </div>

                    <!-- 3. Full Spectrum of Services -->
                    <div class="p-7 sm:p-8 rounded-2xl bg-slate-50 border border-slate-200/90 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-slate-900 text-white flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">{{ __('site.why_me.cards.services.title') }}</h3>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                                {{ __('site.why_me.cards.services.desc') }}
                            </p>
                        </div>
                    </div>

                    <!-- 4. Convenient Communication -->
                    <div class="p-7 sm:p-8 rounded-2xl bg-slate-50 border border-slate-200/90 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-slate-900 text-white flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">{{ __('site.why_me.cards.communication.title') }}</h3>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                                {{ __('site.why_me.cards.communication.desc') }}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- COLLABORATION PROCESS (8 STEPS) -->
        <section id="process" class="py-20 bg-slate-50 border-b border-slate-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                
                <div class="max-w-3xl mb-14">
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">{{ __('site.process.eyebrow') }}</p>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                        {{ __('site.process.title') }}
                    </h2>
                    <p class="text-slate-600 text-base sm:text-lg mt-3">
                        {{ __('site.process.subtitle') }}
                    </p>
                </div>

                <!-- 8 Step Workflow Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6">
                    @foreach(__('site.process.steps') as $step)
                        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-xs hover:shadow-md transition-all flex flex-col justify-between group">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-2xl sm:text-3xl font-black text-slate-900 font-mono tracking-tighter">{{ $step['number'] }}</span>
                                    <div class="w-2.5 h-2.5 rounded-full bg-slate-300 group-hover:bg-slate-900 transition-colors"></div>
                                </div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 mb-2 leading-snug">{{ $step['title'] }}</h3>
                                <p class="text-sm text-slate-600 leading-relaxed">{{ $step['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Highlight Box: Cenu nosaki Tu pats! & 0% Risks -->
                <div class="mt-12 p-6 sm:p-8 rounded-2xl bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 text-white flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-lg">
                    <div class="space-y-2 max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-400/20 text-amber-300 text-xs font-semibold">
                            <span>✨ {{ __('site.process.pricing_callout_title') }}</span>
                        </div>
                        <h4 class="text-lg sm:text-xl font-bold">{{ __('site.process.pricing_callout_text') }}</h4>
                    </div>
                    <a href="#contactForm" class="shrink-0 inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-white text-slate-900 hover:bg-slate-100 font-semibold text-sm shadow-sm transition-all">
                        <span>{{ __('site.hero.cta_primary') }}</span>
                        <span>&rarr;</span>
                    </a>
                </div>

            </div>
        </section>


        <!-- CONTACT & REQUEST FORM -->
        <section id="contact" class="py-20 sm:py-24 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14">
                    
                    <!-- Left Column: Direct Contacts & Reassurance -->
                    <div class="lg:col-span-5 space-y-8">
                        <div>
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">{{ __('site.contact.eyebrow') }}</p>
                            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                                {{ __('site.contact.title') }}
                            </h2>
                            <p class="text-slate-600 text-base mt-4 leading-relaxed">
                                {{ __('site.contact.subtitle') }}
                            </p>
                        </div>

                        <!-- Direct Contacts Card -->
                        <div class="bg-slate-50 rounded-2xl p-6 sm:p-7 border border-slate-200 space-y-5">
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500">{{ __('site.contact.direct_contacts') }}</h3>
                            
                            <!-- WhatsApp -->
                            <a href="https://wa.me/37126645999?text={{ urlencode(app()->getLocale() == 'ru' ? 'Здравствуйте! Хочу узнать подробнее о разработке проекта.' : (app()->getLocale() == 'en' ? 'Hello! I would like to inquire about project development.' : 'Labdien! Vēlos noskaidrot par projekta izstrādi.')) }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between p-3.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 border border-emerald-200 text-emerald-950 transition-colors group">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-emerald-500 text-white flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                            <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.81 13.47 3.81 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-xs text-emerald-700 font-medium block">{{ __('site.contact.whatsapp_label') }}</span>
                                        <span class="text-sm font-bold text-emerald-900 block">{{ __('site.contact.whatsapp_btn') }} ({{ __('site.contact.phone_val') }})</span>
                                    </div>
                                </div>
                                <span class="text-emerald-700 font-bold group-hover:translate-x-1 transition-transform">&rarr;</span>
                            </a>

                            <!-- Phone -->
                            <a href="tel:{{ __('site.contact.phone_raw') }}" class="flex items-center justify-between p-3.5 rounded-xl bg-white hover:bg-slate-100 border border-slate-200 text-slate-900 transition-colors group">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-slate-900 text-white flex items-center justify-center shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-xs text-slate-500 font-medium block">{{ __('site.contact.phone_label') }}</span>
                                        <span class="text-sm font-bold text-slate-900 block">{{ __('site.contact.phone_val') }}</span>
                                    </div>
                                </div>
                                <span class="text-slate-400 group-hover:translate-x-1 transition-transform">&rarr;</span>
                            </a>

                            <!-- Email -->
                            <a href="mailto:support@lfcgroup.lv" class="flex items-center justify-between p-3.5 rounded-xl bg-white hover:bg-slate-100 border border-slate-200 text-slate-900 transition-colors group">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-slate-900 text-white flex items-center justify-center shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-xs text-slate-500 font-medium block">{{ __('site.contact.email_label') }}</span>
                                        <span class="text-sm font-bold text-slate-900 block">{{ __('site.contact.email_val') }}</span>
                                    </div>
                                </div>
                                <span class="text-slate-400 group-hover:translate-x-1 transition-transform">&rarr;</span>
                            </a>

                            <div class="pt-2 text-xs text-slate-500 space-y-1">
                                <p class="font-medium text-slate-700">{{ __('site.contact.languages_spoken') }}</p>
                                <p>⚡ {{ __('site.contact.quick_reply') }}</p>
                            </div>
                        </div>

                        <!-- 0% Risk Badge -->
                        <div class="p-4 rounded-xl bg-slate-100 border border-slate-200 text-xs text-slate-700 leading-relaxed font-medium">
                            {{ __('site.contact.no_risk_badge') }}
                        </div>
                    </div>

                    <!-- Right Column: Interactive Project Request Form -->
                    <div class="lg:col-span-7">
                        <div class="bg-white rounded-2xl p-6 sm:p-8 lg:p-10 border border-slate-200/90 shadow-lg">
                            <h3 class="text-2xl font-bold text-slate-900 mb-6">{{ __('site.contact.form_title') }}</h3>

                            @if(session('success'))
                                <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-semibold flex items-center gap-3">
                                    <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>{{ __('site.contact.success') }}</span>
                                </div>
                            @endif

                            <form id="contactForm" action="{{ route('request-consultation') }}" method="POST" class="space-y-5">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-slate-800 mb-1">
                                        {{ __('site.contact.name') }} <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="{{ __('site.contact.name_placeholder') }}" required
                                           class="w-full px-4 py-3 border @error('name') border-red-500 ring-1 ring-red-500 @else border-slate-300 @enderror rounded-xl text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent text-sm">
                                    @error('name')
                                        <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email & Phone Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label for="email" class="block text-sm font-semibold text-slate-800 mb-1">
                                            {{ __('site.contact.email') }} <span class="text-red-500">*</span>
                                        </label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="{{ __('site.contact.email_placeholder') }}" required
                                               class="w-full px-4 py-3 border @error('email') border-red-500 ring-1 ring-red-500 @else border-slate-300 @enderror rounded-xl text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent text-sm">
                                        @error('email')
                                            <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="phone" class="block text-sm font-semibold text-slate-800 mb-1">
                                            {{ __('site.contact.phone') }}
                                        </label>
                                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="{{ __('site.contact.phone_placeholder') }}"
                                               class="w-full px-4 py-3 border border-slate-300 rounded-xl text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent text-sm">
                                    </div>
                                </div>

                                <!-- Service Selector -->
                                <div>
                                    <label for="subject" class="block text-sm font-semibold text-slate-800 mb-1">
                                        {{ __('site.contact.service') }} <span class="text-red-500">*</span>
                                    </label>
                                    <select id="subject" name="subject" required
                                            class="w-full px-4 py-3 border @error('subject') border-red-500 ring-1 ring-red-500 @else border-slate-300 @enderror rounded-xl text-slate-900 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent text-sm bg-white cursor-pointer">
                                        @foreach(__('site.contact.service_options') as $optKey => $optLabel)
                                            <option value="{{ $optLabel }}" @if(old('subject') == $optLabel) selected @endif>{{ $optLabel }}</option>
                                        @endforeach
                                    </select>
                                    @error('subject')
                                        <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Proposed Budget / Price ("Cenu nosaki Tu pats!") -->
                                <div>
                                    <label for="budget" class="block text-sm font-semibold text-slate-800 mb-1">
                                        {{ __('site.contact.budget') }}
                                    </label>
                                    <input type="text" id="budget" name="budget" value="{{ old('budget') }}" placeholder="{{ __('site.contact.budget_placeholder') }}"
                                           class="w-full px-4 py-3 border border-slate-300 rounded-xl text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent text-sm bg-amber-50/30 border-amber-200">
                                    <p class="text-[11px] text-slate-500 mt-1.5">{{ __('site.contact.budget_help') }}</p>
                                </div>

                                <!-- Message / Details -->
                                <div>
                                    <label for="message" class="block text-sm font-semibold text-slate-800 mb-1">
                                        {{ __('site.contact.message') }} <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="message" name="message" rows="4" placeholder="{{ __('site.contact.message_placeholder') }}" required
                                              class="w-full px-4 py-3 border @error('message') border-red-500 ring-1 ring-red-500 @else border-slate-300 @enderror rounded-xl text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent text-sm leading-relaxed">{{ old('message') }}</textarea>
                                    @error('message')
                                        <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit"
                                        class="w-full py-4 px-8 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl text-base shadow-lg shadow-slate-900/20 hover:shadow-xl transition-all cursor-pointer">
                                    {!! __('site.contact.submit') !!}
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="bg-slate-950 text-slate-400 py-12 border-t border-slate-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 pb-10 border-b border-slate-800/80">
                
                <!-- Brand col -->
                <div class="md:col-span-5 space-y-3">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-lg bg-slate-800 flex items-center justify-center text-sky-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <span class="font-bold text-white text-base tracking-tight">{{ __('site.brand') }}</span>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                        {{ __('site.footer.description') }}
                    </p>
                </div>

                <!-- Navigation Links -->
                <div class="md:col-span-4 space-y-2 text-xs">
                    <div class="font-semibold text-white uppercase tracking-wider mb-3">Navigācija</div>
                    <ul class="space-y-2">
                        <li><a href="#services" class="hover:text-white transition-colors">{{ __('site.nav.services') }}</a></li>
                        <li><a href="#why-me" class="hover:text-white transition-colors">{{ __('site.nav.why_me') }}</a></li>
                        <li><a href="#process" class="hover:text-white transition-colors">{{ __('site.nav.process') }}</a></li>
                        <li><a href="#contact" class="hover:text-white transition-colors">{{ __('site.nav.contact') }}</a></li>
                        <li>
                            <a href="{{ route('enterprise.locale', app()->getLocale()) }}" class="text-sky-400 hover:text-sky-300 font-medium transition-colors">
                                &rarr; {{ __('site.footer.enterprise_link') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Languages & Fast Contact -->
                <div class="md:col-span-3 space-y-3 text-xs">
                    <div class="font-semibold text-white uppercase tracking-wider mb-3">Valoda & Kontakti</div>
                    <div class="flex items-center gap-3 text-xs">
                        <a href="{{ route('index.locale', 'lv') }}" class="{{ app()->getLocale() == 'lv' ? 'text-white font-bold underline' : 'text-slate-400 hover:text-white' }}">Latviešu</a>
                        <span class="text-slate-700">•</span>
                        <a href="{{ route('index.locale', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'text-white font-bold underline' : 'text-slate-400 hover:text-white' }}">English</a>
                        <span class="text-slate-700">•</span>
                        <a href="{{ route('index.locale', 'ru') }}" class="{{ app()->getLocale() == 'ru' ? 'text-white font-bold underline' : 'text-slate-400 hover:text-white' }}">Русский</a>
                    </div>
                    <p class="text-slate-500 pt-2">E-pasts: <a href="mailto:support@lfcgroup.lv" class="text-slate-300 hover:text-white">support@lfcgroup.lv</a></p>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <div>
                    &copy; {{ \Carbon\Carbon::now()->year }} {{ __('site.brand') }}. {{ __('site.footer.rights') }}
                </div>
                <div class="flex items-center gap-4">
                    <span>LV • EN • RU</span>
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
