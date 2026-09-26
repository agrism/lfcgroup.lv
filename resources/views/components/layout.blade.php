<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    @if(app()->isProduction())
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-CE7KZTTZ2J"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'G-CE7KZTTZ2J');
        </script>
    @endif
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('site.meta.title') }}</title>
    <meta name="description" content="{{ __('site.meta.description') }}">
    <meta name="keywords" content="{{ __('site.meta.keywords') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-slate-50 text-slate-900 antialiased font-sans min-h-screen flex flex-col selection:bg-slate-900 selection:text-white">
    {{$slot}}
</body>
</html>



