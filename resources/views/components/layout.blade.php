<!DOCTYPE html>
<html lang="en">
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
    <title>Enterprise Intelligence Solutions</title>
    <meta name="description"
          content="Leading provider of business intelligence automation, ERP systems integration, and data-driven solutions. Transform your operations with enterprise-grade process optimization.">
    <meta name="keywords"
          content="business intelligence, data automation, ERP integration, process optimization, enterprise solutions, market analytics">
    <meta property="og:title" content="Enterprise Intelligence Solutions">
    <meta property="og:description"
          content="Transform your business operations with automated data analytics and process optimization">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
{{$slot}}
</body>
</html>
