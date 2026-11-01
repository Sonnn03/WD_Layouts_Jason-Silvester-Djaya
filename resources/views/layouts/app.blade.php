<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio')</title>
    @vite('resources/css/style.css')
</head>
<body class="bg-white dark:bg-neutral-900">
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</body>
</html>