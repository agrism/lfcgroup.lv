<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-slate-50 text-slate-900 antialiased font-sans min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white border border-slate-200 rounded-xl shadow-sm p-8 text-center">
        <h1 class="text-4xl font-extrabold text-slate-900 font-mono mb-2">
            @yield('code')
        </h1>
        <p class="text-slate-600 text-base mb-6">@yield('message')</p>
        <a href="/" class="inline-flex items-center justify-center px-5 py-2.5 rounded-md bg-slate-900 text-white font-medium text-sm hover:bg-slate-800 transition-colors">
            Return to Homepage
        </a>
    </div>
</body>
</html>


