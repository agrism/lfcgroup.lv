<x-layout>
    <!-- Top Header / Navigation -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-40">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-18">
                <!-- Brand -->
                <a href="{{ route('index') }}" class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded bg-slate-900 flex items-center justify-center text-white">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <span class="font-bold text-slate-900 text-lg tracking-tight block leading-tight">{{ __('site.brand') }}</span>
                    </div>
                </a>

                <!-- Nav links -->
                <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-600">
                    <a href="#services" class="hover:text-slate-900 transition-colors">{{ __('site.nav.services') }}</a>
                    <a href="#about" class="hover:text-slate-900 transition-colors">{{ __('site.nav.capabilities') }}</a>
                    <a href="#process" class="hover:text-slate-900 transition-colors">{{ __('site.nav.approach') }}</a>
                    <a href="#contact" class="hover:text-slate-900 transition-colors">{{ __('site.nav.contact') }}</a>
                </nav>

                <!-- Language Switcher & CTA -->
                <div class="hidden sm:flex items-center gap-4">
                    <!-- Language Switcher -->
                    <div class="flex items-center text-xs font-semibold border border-slate-200 rounded-md overflow-hidden bg-slate-100 p-0.5">
                        <a href="{{ route('lang.switch', 'en') }}" class="px-2 py-1 rounded {{ app()->getLocale() == 'en' ? 'bg-white text-slate-900 shadow-xs' : 'text-slate-500 hover:text-slate-900' }}">EN</a>
                        <a href="{{ route('lang.switch', 'lv') }}" class="px-2 py-1 rounded {{ app()->getLocale() == 'lv' ? 'bg-white text-slate-900 shadow-xs' : 'text-slate-500 hover:text-slate-900' }}">LV</a>
                        <a href="{{ route('lang.switch', 'ru') }}" class="px-2 py-1 rounded {{ app()->getLocale() == 'ru' ? 'bg-white text-slate-900 shadow-xs' : 'text-slate-500 hover:text-slate-900' }}">RU</a>
                    </div>

                    <a href="#contactForm" class="inline-flex items-center justify-center px-4 py-2 rounded-md bg-slate-900 text-white hover:bg-slate-800 text-sm font-medium transition-colors">
                        {{ __('site.nav.request_consultation') }}
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center gap-2 md:hidden">
                    <div class="flex items-center text-xs font-semibold border border-slate-200 rounded-md overflow-hidden bg-slate-100 p-0.5">
                        <a href="{{ route('lang.switch', 'en') }}" class="px-1.5 py-0.5 rounded {{ app()->getLocale() == 'en' ? 'bg-white text-slate-900' : 'text-slate-500' }}">EN</a>
                        <a href="{{ route('lang.switch', 'lv') }}" class="px-1.5 py-0.5 rounded {{ app()->getLocale() == 'lv' ? 'bg-white text-slate-900' : 'text-slate-500' }}">LV</a>
                        <a href="{{ route('lang.switch', 'ru') }}" class="px-1.5 py-0.5 rounded {{ app()->getLocale() == 'ru' ? 'bg-white text-slate-900' : 'text-slate-500' }}">RU</a>
                    </div>
                    <button id="mobile-menu-btn" type="button" class="text-slate-600 hover:text-slate-900 p-2" aria-label="Toggle menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 bg-white px-4 py-4 space-y-3">
            <a href="#services" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('site.nav.services') }}</a>
            <a href="#about" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('site.nav.capabilities') }}</a>
            <a href="#process" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('site.nav.approach') }}</a>
            <a href="#contact" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">{{ __('site.nav.contact') }}</a>
            <a href="#contactForm" class="block text-center w-full py-2.5 rounded-md bg-slate-900 text-white font-medium text-sm mt-2">
                {{ __('site.nav.request_consultation') }}
            </a>
        </div>
    </header>

    <main class="flex-grow">
        <!-- HERO SECTION -->
        <section class="bg-white border-b border-slate-200 py-16 sm:py-24">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="max-w-3xl">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-4">
                        {{ __('site.hero.eyebrow') }}
                    </p>
                    <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-6">
                        {{ __('site.hero.title') }}
                    </h1>
                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed mb-8">
                        {{ __('site.hero.subtitle') }}
                    </p>

                    <div class="flex flex-wrap items-center gap-4">
                        <a href="#contactForm" class="inline-flex items-center justify-center px-6 py-3 rounded-md bg-slate-900 text-white hover:bg-slate-800 text-sm font-semibold transition-colors">
                            {{ __('site.hero.cta_primary') }}
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center px-6 py-3 rounded-md border border-slate-300 text-slate-700 hover:bg-slate-50 hover:text-slate-900 text-sm font-semibold transition-colors">
                            {{ __('site.hero.cta_secondary') }}
                        </a>
                    </div>
                </div>

                <!-- Trust Points Grid -->
                <div class="mt-16 pt-10 border-t border-slate-200 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">{{ __('site.hero.pillars.architecture_label') }}</div>
                        <div class="text-sm font-bold text-slate-900">{{ __('site.hero.pillars.architecture_desc') }}</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">{{ __('site.hero.pillars.automation_label') }}</div>
                        <div class="text-sm font-bold text-slate-900">{{ __('site.hero.pillars.automation_desc') }}</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">{{ __('site.hero.pillars.integration_label') }}</div>
                        <div class="text-sm font-bold text-slate-900">{{ __('site.hero.pillars.integration_desc') }}</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">{{ __('site.hero.pillars.data_label') }}</div>
                        <div class="text-sm font-bold text-slate-900">{{ __('site.hero.pillars.data_desc') }}</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES SECTION (3 PILLARS) -->
        <section id="services" class="py-16 sm:py-20 bg-slate-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                
                <div class="mb-12">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">{{ __('site.services.eyebrow') }}</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        {{ __('site.services.title') }}
                    </h2>
                </div>

                <div class="space-y-8">
                    
                    <!-- Service 1: Web Scraping Solutions -->
                    <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900">{{ __('site.services.scraping.title') }}</h3>
                                <p class="text-slate-600 text-sm sm:text-base mt-2">
                                    {{ __('site.services.scraping.description') }}
                                </p>
                            </div>
                            <button type="button" onclick="selectService('Web Scraping Solutions')" class="inline-flex items-center text-sm font-semibold text-slate-900 hover:text-slate-600 transition-colors shrink-0 self-start md:self-center">
                                {{ __('site.services.inquire') }} &rarr;
                            </button>
                        </div>

                        <div class="mt-6">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
                                @foreach(__('site.services.scraping.features') as $feature)
                                    <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Service 2: Business Process Automation -->
                    <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900">{{ __('site.services.automation.title') }}</h3>
                                <p class="text-slate-600 text-sm sm:text-base mt-2">
                                    {{ __('site.services.automation.description') }}
                                </p>
                            </div>
                            <button type="button" onclick="selectService('Business Process Automation')" class="inline-flex items-center text-sm font-semibold text-slate-900 hover:text-slate-600 transition-colors shrink-0 self-start md:self-center">
                                {{ __('site.services.inquire') }} &rarr;
                            </button>
                        </div>

                        <div class="mt-6">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
                                @foreach(__('site.services.automation.features') as $feature)
                                    <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Service 3: ERP Systems Integration -->
                    <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900">{{ __('site.services.erp.title') }}</h3>
                                <p class="text-slate-600 text-sm sm:text-base mt-2">
                                    {{ __('site.services.erp.description') }}
                                </p>
                            </div>
                            <button type="button" onclick="selectService('ERP Systems Integration')" class="inline-flex items-center text-sm font-semibold text-slate-900 hover:text-slate-600 transition-colors shrink-0 self-start md:self-center">
                                {{ __('site.services.inquire') }} &rarr;
                            </button>
                        </div>

                        <div class="mt-6">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
                                @foreach(__('site.services.erp.features') as $feature)
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
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">{{ __('site.capabilities.eyebrow') }}</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        {{ __('site.capabilities.title') }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach(__('site.capabilities.items') as $item)
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
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">{{ __('site.process.eyebrow') }}</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        {{ __('site.process.title') }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach(__('site.process.steps') as $step)
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
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">{{ __('site.contact.eyebrow') }}</p>
                            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                                {{ __('site.contact.title') }}
                            </h2>
                            <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                                {{ __('site.contact.subtitle') }}
                            </p>
                        </div>

                        <div class="bg-slate-50 border border-slate-200 rounded-lg p-6 space-y-3">
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">{{ __('site.contact.email_label') }}</div>
                            <a href="mailto:support@lfcgroup.lv" class="text-lg font-bold text-slate-900 hover:text-slate-700 transition-colors block">
                                support@lfcgroup.lv
                            </a>
                            <p class="text-xs text-slate-500">{{ __('site.contact.sla') }}</p>
                        </div>
                    </div>

                    <!-- Right: Submit Request Form -->
                    <div class="lg:col-span-7">
                        <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                            <h3 class="text-xl font-bold text-slate-900 mb-6">{{ __('site.contact.form_title') }}</h3>

                            @if(session('success'))
                                <div class="mb-6 p-4 rounded-md bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-medium">
                                    {{ __('site.contact.success') }}
                                </div>
                            @endif

                            <form id="contactForm" action="{{ route('request-consultation') }}" method="POST" class="space-y-5">
                                @csrf

                                <div>
                                    <label for="name" class="block text-sm font-medium text-slate-700 mb-1">
                                        {{ __('site.contact.name') }} <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                           class="w-full px-3.5 py-2.5 border @error('name') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm">
                                    @error('name')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">
                                        {{ __('site.contact.email') }} <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                           class="w-full px-3.5 py-2.5 border @error('email') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm">
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="subject" class="block text-sm font-medium text-slate-700 mb-1">
                                        {{ __('site.contact.service') }} <span class="text-red-500">*</span>
                                    </label>
                                    <select id="subject" name="subject" required
                                            class="w-full px-3.5 py-2.5 border @error('subject') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm bg-white">
                                        <option value="Web Scraping Solutions" @if(old('subject') == 'Web Scraping Solutions') selected @endif>{{ __('site.contact.service_options.Web Scraping Solutions') }}</option>
                                        <option value="Business Process Automation" @if(old('subject') == 'Business Process Automation') selected @endif>{{ __('site.contact.service_options.Business Process Automation') }}</option>
                                        <option value="ERP Systems Integration" @if(old('subject') == 'ERP Systems Integration') selected @endif>{{ __('site.contact.service_options.ERP Systems Integration') }}</option>
                                        <option value="Other" @if(old('subject') == 'Other') selected @endif>{{ __('site.contact.service_options.Other') }}</option>
                                    </select>
                                    @error('subject')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="message" class="block text-sm font-medium text-slate-700 mb-1">
                                        {{ __('site.contact.message') }} <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="message" name="message" rows="4" required
                                              class="w-full px-3.5 py-2.5 border @error('message') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm">{{ old('message') }}</textarea>
                                    @error('message')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit"
                                        class="w-full sm:w-auto px-6 py-3 bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-md text-sm transition-colors cursor-pointer">
                                    {{ __('site.contact.submit') }}
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
                    <span class="font-semibold text-white text-sm">{{ __('site.brand') }}</span>
                </div>
                <div>
                    &copy; {{ \Carbon\Carbon::now()->year }} {{ __('site.footer.rights') }}
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
