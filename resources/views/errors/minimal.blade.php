<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-0">
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="max-w-md w-full bg-white rounded-lg shadow-sm p-8 text-center">
        <h1 class="text-4xl font-medium text-slate-900 mb-2">@yield('code')</h1>
        <p class="text-slate-600 mb-6">@yield('message')</p>
        <a href="/" class="inline-block bg-slate-400 text-white px-5 py-2 rounded-md text-sm hover:bg-slate-600 transition-colors">
            Return to Homepage
        </a>
    </div>
</div>
</body>
</html>
