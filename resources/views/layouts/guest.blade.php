<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

</head>

<body class="antialiased bg-body text-body font-body">
    <section class="skewed-bottom-right">
        {{ isset($header) ? $header : '' }}
    </section>

    {{ $slot }}

    @stack('modals')
    @stack('script')

    @livewireScripts
</body>

</html>
