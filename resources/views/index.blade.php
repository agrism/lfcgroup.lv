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
                        <span class="font-bold text-slate-900 text-lg tracking-tight block leading-tight">Enterprise Intelligence Solutions</span>
                    </div>
                </a>


                <!-- Nav links -->
                <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-600">
                    <a href="#services" class="hover:text-slate-900 transition-colors">Services</a>
                    <a href="#about" class="hover:text-slate-900 transition-colors">Capabilities</a>
                    <a href="#process" class="hover:text-slate-900 transition-colors">Approach</a>
                    <a href="#contact" class="hover:text-slate-900 transition-colors">Contact</a>
                </nav>

                <!-- CTA -->
                <div class="hidden sm:flex items-center">
                    <a href="#contactForm" class="inline-flex items-center justify-center px-4 py-2 rounded-md bg-slate-900 text-white hover:bg-slate-800 text-sm font-medium transition-colors">
                        Request Consultation
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
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
            <a href="#services" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">Services</a>
            <a href="#about" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">Capabilities</a>
            <a href="#process" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">Approach</a>
            <a href="#contact" class="block py-1.5 text-sm font-medium text-slate-700 hover:text-slate-900">Contact</a>
            <a href="#contactForm" class="block text-center w-full py-2.5 rounded-md bg-slate-900 text-white font-medium text-sm mt-2">
                Request Consultation
            </a>
        </div>
    </header>

    <main class="flex-grow">
        <!-- HERO SECTION -->
        <section class="bg-white border-b border-slate-200 py-16 sm:py-24">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="max-w-3xl">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-4">
                        Enterprise Intelligence Solutions
                    </p>
                    <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-6">
                        Business Process Solutions
                    </h1>
                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed mb-8">
                        Accelerating business growth through intelligent automation and data-driven solutions.
                    </p>

                    <div class="flex flex-wrap items-center gap-4">
                        <a href="#contactForm" class="inline-flex items-center justify-center px-6 py-3 rounded-md bg-slate-900 text-white hover:bg-slate-800 text-sm font-semibold transition-colors">
                            Request Consultation
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center px-6 py-3 rounded-md border border-slate-300 text-slate-700 hover:bg-slate-50 hover:text-slate-900 text-sm font-semibold transition-colors">
                            View Services
                        </a>
                    </div>
                </div>

                <!-- Trust Points Grid -->
                <div class="mt-16 pt-10 border-t border-slate-200 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">Architecture</div>
                        <div class="text-sm font-bold text-slate-900">Scalable Cloud Systems</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">Automation</div>
                        <div class="text-sm font-bold text-slate-900">End-to-End Workflows</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">Integration</div>
                        <div class="text-sm font-bold text-slate-900">Enterprise ERP & APIs</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1">Data Ingestion</div>
                        <div class="text-sm font-bold text-slate-900">High-Volume Web Harvesting</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES SECTION (3 PILLARS) -->
        <section id="services" class="py-16 sm:py-20 bg-slate-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                
                <div class="mb-12">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">Core Services</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        Tailored Solutions for Enterprise Needs
                    </h2>
                </div>

                <div class="space-y-8">
                    
                    <!-- Service 1: Web Scraping Solutions -->
                    <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900">Web Scraping Solutions</h3>
                                <p class="text-slate-600 text-sm sm:text-base mt-2">
                                    Transform unstructured web data into actionable business insights. Our advanced web scraping services deliver:
                                </p>
                            </div>
                            <button type="button" onclick="selectService('Web Scraping Solutions')" class="inline-flex items-center text-sm font-semibold text-slate-900 hover:text-slate-600 transition-colors shrink-0 self-start md:self-center">
                                Inquire about this service &rarr;
                            </button>
                        </div>

                        <div class="mt-6">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Real-time competitor price monitoring</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Automated market research data collection</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Custom data extraction APIs</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Large-scale web data harvesting</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Advanced proxy rotation systems</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Sentiment analysis tools</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Customizable data feeds</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Automated quality assurance</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Multi-format data delivery</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Real-time market intelligence</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Structured data parsing</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Scalable cloud infrastructure</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Custom reporting dashboards</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Scheduled data collection</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Service 2: Business Process Automation -->
                    <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900">Business Process Automation</h3>
                                <p class="text-slate-600 text-sm sm:text-base mt-2">
                                    Streamline your operations with intelligent automation solutions that drive efficiency:
                                </p>
                            </div>
                            <button type="button" onclick="selectService('Business Process Automation')" class="inline-flex items-center text-sm font-semibold text-slate-900 hover:text-slate-600 transition-colors shrink-0 self-start md:self-center">
                                Inquire about this service &rarr;
                            </button>
                        </div>

                        <div class="mt-6">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Workflow automation and optimization</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Document processing and management</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Task scheduling and monitoring</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Custom automation scripts and tools</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Data integration and migration</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Process mapping and analysis</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>API system integration</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Automated reporting systems</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Business rule automation</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Form automation</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Email automation</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Database synchronization</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Compliance monitoring</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Service 3: ERP Systems Integration -->
                    <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900">ERP Systems Integration</h3>
                                <p class="text-slate-600 text-sm sm:text-base mt-2">
                                    Comprehensive ERP solutions to unify your business processes:
                                </p>
                            </div>
                            <button type="button" onclick="selectService('ERP Systems Integration')" class="inline-flex items-center text-sm font-semibold text-slate-900 hover:text-slate-600 transition-colors shrink-0 self-start md:self-center">
                                Inquire about this service &rarr;
                            </button>
                        </div>

                        <div class="mt-6">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Custom ERP development and implementation</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Legacy system integration</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Real-time business analytics</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Scalable cloud-based ERP solutions</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Data migration services</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>API integrations</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Performance optimization</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Security implementation</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Workflow automation</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>User training systems</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Mobile ERP access</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Custom reporting tools</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>Database management</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-slate-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-900 mt-2 shrink-0"></span>
                                    <span>System maintenance</span>
                                </li>
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
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">Capabilities</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        Enterprise Engineering Standards
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="border-t-2 border-slate-900 pt-5">
                        <h3 class="text-base font-bold text-slate-900 mb-2">High Reliability & Scalability</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Infrastructure engineered to handle continuous data streams, large-scale extraction pipelines, and zero-downtime operation.
                        </p>
                    </div>

                    <div class="border-t-2 border-slate-900 pt-5">
                        <h3 class="text-base font-bold text-slate-900 mb-2">Enterprise Security & Compliance</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Strict data protection, encrypted endpoints, and rigorous adherence to industry standards and client governance requirements.
                        </p>
                    </div>

                    <div class="border-t-2 border-slate-900 pt-5">
                        <h3 class="text-base font-bold text-slate-900 mb-2">Seamless Integration</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Bespoke integrations that connect seamlessly with your legacy ERP systems, cloud applications, and data warehouses.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- IMPLEMENTATION PROCESS -->
        <section id="process" class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="mb-12">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">Delivery Model</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        Our Implementation Process
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white border border-slate-200 rounded-lg p-6">
                        <div class="text-2xl font-bold text-slate-300 font-mono mb-3">01</div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Requirements & Analysis</h3>
                        <p class="text-sm text-slate-600">Detailed assessment of your data structure, business workflows, and technical targets.</p>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-lg p-6">
                        <div class="text-2xl font-bold text-slate-300 font-mono mb-3">02</div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Solution Architecture</h3>
                        <p class="text-sm text-slate-600">Design of custom extraction pipelines, automation scripts, and API connectors.</p>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-lg p-6">
                        <div class="text-2xl font-bold text-slate-300 font-mono mb-3">03</div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Implementation & Sync</h3>
                        <p class="text-sm text-slate-600">System deployment, validation testing, and secure ERP integration.</p>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-lg p-6">
                        <div class="text-2xl font-bold text-slate-300 font-mono mb-3">04</div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">Ongoing Maintenance</h3>
                        <p class="text-sm text-slate-600">Continuous monitoring, quality assurance, and technical support.</p>
                    </div>
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
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-2">Get in Touch</p>
                            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                                Contact Our IT Experts
                            </h2>
                            <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                                Discuss your business process automation, web scraping, or ERP integration requirements with our technical team.
                            </p>
                        </div>

                        <div class="bg-slate-50 border border-slate-200 rounded-lg p-6 space-y-3">
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">Direct Email</div>
                            <a href="mailto:support@lfcgroup.lv" class="text-lg font-bold text-slate-900 hover:text-slate-700 transition-colors block">
                                support@lfcgroup.lv
                            </a>
                            <p class="text-xs text-slate-500">We respond to enterprise inquiries within one business day.</p>
                        </div>
                    </div>

                    <!-- Right: Submit Request Form -->
                    <div class="lg:col-span-7">
                        <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 shadow-sm">
                            <h3 class="text-xl font-bold text-slate-900 mb-6">Or Submit Request Form</h3>

                            @if(session('success'))
                                <div class="mb-6 p-4 rounded-md bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-medium">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form id="contactForm" action="{{ route('request-consultation') }}" method="POST" class="space-y-5">
                                @csrf

                                <div>
                                    <label for="name" class="block text-sm font-medium text-slate-700 mb-1">
                                        Name <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                           class="w-full px-3.5 py-2.5 border @error('name') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm">
                                    @error('name')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">
                                        Email <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                           class="w-full px-3.5 py-2.5 border @error('email') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm">
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="subject" class="block text-sm font-medium text-slate-700 mb-1">
                                        Service Required <span class="text-red-500">*</span>
                                    </label>
                                    <select id="subject" name="subject" required
                                            class="w-full px-3.5 py-2.5 border @error('subject') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm bg-white">
                                        <option value="Web Scraping Solutions" @if(old('subject') == 'Web Scraping Solutions') selected @endif>Web Scraping Solutions</option>
                                        <option value="Business Process Automation" @if(old('subject') == 'Business Process Automation') selected @endif>Business Process Automation</option>
                                        <option value="ERP Systems Integration" @if(old('subject') == 'ERP Systems Integration') selected @endif>ERP Systems Integration</option>
                                        <option value="Other" @if(old('subject') == 'Other') selected @endif>Other</option>
                                    </select>
                                    @error('subject')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="message" class="block text-sm font-medium text-slate-700 mb-1">
                                        Project Details <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="message" name="message" rows="4" required
                                              class="w-full px-3.5 py-2.5 border @error('message') border-red-500 @else border-slate-300 @enderror rounded-md text-slate-900 focus:outline-none focus:ring-1 focus:ring-slate-900 focus:border-slate-900 text-sm">{{ old('message') }}</textarea>
                                    @error('message')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit"
                                        class="w-full sm:w-auto px-6 py-3 bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-md text-sm transition-colors cursor-pointer">
                                    Request Consultation
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
                    <span class="font-semibold text-white text-sm">Enterprise Intelligence Solutions</span>
                </div>
                <div>
                    &copy; {{ \Carbon\Carbon::now()->year }} All rights reserved.
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
