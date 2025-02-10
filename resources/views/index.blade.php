<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Intelligence Solutions</title>
    <meta name="description" content="Leading provider of business intelligence automation, ERP systems integration, and data-driven solutions. Transform your operations with enterprise-grade process optimization.">
    <meta name="keywords" content="business intelligence, data automation, ERP integration, process optimization, enterprise solutions, market analytics">
    <meta property="og:title" content="Enterprise Intelligence Solutions">
    <meta property="og:description" content="Transform your business operations with automated data analytics and process optimization">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div class="flex items-center py-4">
                    <span class="font-semibold text-gray-800 text-lg">Enterprise Intelligence Solutions</span>
                </div>
            </div>
        </div>
    </div>
</nav>

<main class="max-w-6xl mx-auto mt-10 px-4">

    <div class="bg-white rounded-lg shadow-xl p-6 md:p-10">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Business Process Solutions</h1>
        <p class="text-gray-600 text-lg mb-8">Accelerating business growth through intelligent automation and data-driven solutions.</p>

{{--        <div class="grid md:grid-cols-2 gap-8 mb-12">--}}
{{--            <div class="space-y-4">--}}
{{--                <img src="/api/placeholder/600/400" alt="Server Room" class="rounded-lg shadow-md w-full object-cover"/>--}}
{{--                <p class="text-sm text-gray-600">High-performance server infrastructure</p>--}}
{{--            </div>--}}
{{--            <div class="space-y-4">--}}
{{--                <img src="/api/placeholder/600/400" alt="Network Infrastructure" class="rounded-lg shadow-md w-full object-cover"/>--}}
{{--                <p class="text-sm text-gray-600">Advanced networking solutions</p>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="space-y-8 mb-12">
            <div class="bg-gray-50 p-6 rounded-lg hover:border">
                <h3 class="font-semibold text-xl mb-3">Web Scraping Solutions</h3>
                <p class="text-gray-600 mb-4">Transform unstructured web data into actionable business insights. Our advanced web scraping services deliver:</p>
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    <li>Real-time competitor price monitoring</li>
                    <li>Automated market research data collection</li>
                    <li>Custom data extraction APIs</li>
                    <li>Large-scale web data harvesting</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg hover:border">
                <h3 class="font-semibold text-xl mb-3">Business Process Automation</h3>
                <p class="text-gray-600 mb-4">Streamline your operations with intelligent automation solutions that drive efficiency:</p>
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    <li>Workflow automation and optimization</li>
                    <li>Document processing and management</li>
                    <li>Task scheduling and monitoring</li>
                    <li>Custom automation scripts and tools</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg hover:border">
                <h3 class="font-semibold text-xl mb-3">ERP Systems Integration</h3>
                <p class="text-gray-600 mb-4">Comprehensive ERP solutions to unify your business processes:</p>
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    <li>Custom ERP development and implementation</li>
                    <li>Legacy system integration</li>
                    <li>Real-time business analytics</li>
                    <li>Scalable cloud-based ERP solutions</li>
                </ul>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Our IT Experts</h2>
            <div class="space-y-4">
                <div>
                    <p class="text-gray-700"><span class="font-medium">Email:</span> support@lfcgroup.lv</p>
                </div>
                <div>
                    <p class="text-gray-700"><span class="font-medium">Location:</span> Riga, Latvia</p>
                </div>
            </div>
        </div>

        <form class="space-y-6" id="contactForm" action="{{route('request-consultation')}}" method="POST">
            @csrf
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <div>
                <label class="block text-gray-700 mb-2" for="name">Name <i class="text-red-500">*</i></label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 mb-2" for="email">Email <i class="text-red-500">*</i></label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 mb-2" for="service">Service Required <i class="text-red-500">*</i></label>
                <select id="subject" name="subject" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    <option @if(old('subject') == 'Web Scraping Solutions') selected @endif>Web Scraping Solutions</option>
                    <option @if(old('subject') == 'Business Process Automation') selected @endif>Business Process Automation</option>
                    <option @if(old('subject') == 'ERP Systems Integration') selected @endif>ERP Systems Integration</option>
                    <option @if(old('subject') == 'Other') selected @endif>Other</option>
                </select>
                @error('subject')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 mb-2" for="message">Project Details <i class="text-red-500">*</i></label>
                <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">{{ old('message') }}</textarea>
                @error('message')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition-colors">Request Consultation</button>
        </form>
    </div>
</main>

<footer class="bg-gray-800 text-white mt-16 py-8">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <p>&copy; {{\Carbon\Carbon::now()->year}} LFC Group. All rights reserved.</p>
    </div>
</footer>

@if(session('success') || $errors->any())
    <script>
        window.location.hash = '#contactForm';
    </script>
@endif
</body>
</html>
