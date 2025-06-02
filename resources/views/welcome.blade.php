<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <link href="{asset('build/assets/tailwind.css')}">
    @fluxAppearance
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
    <livewire:menu.lifewire-header />
 
    @if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
    @endif

    @fluxScripts
</body>
</html>
