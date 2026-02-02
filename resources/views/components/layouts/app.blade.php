<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'SDN 03 Tugu - Sekolah Dasar Negeri' }}</title>
    <meta name="description" content="{{ $description ?? 'Website resmi SDN 03 Tugu - Sekolah Dasar Negeri berkualitas dengan fasilitas lengkap dan tenaga pengajar profesional.' }}">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $title ?? 'SDN 03 Tugu' }}">
    <meta property="og:description" content="{{ $description ?? 'Website resmi SDN 03 Tugu' }}">
    <meta property="og:type" content="website">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased bg-slate-900 text-white font-sans">
    <!-- Navigation -->
    <x-navigation />

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />

    @livewireScripts
</body>
</html>
