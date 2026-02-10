<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SDN Tugu Selatan 03 - Elementary School Jakarta Utara">
    <title>{{ $title ?? 'SDN Tugu Selatan 03 - Elementary School' }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased bg-white">
    
    {{ $slot }}

    <!-- Lucide Icons (as a global fallback if needed, but app.js handles it) -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Livewire Scripts -->
    @livewireScripts
    
    @stack('scripts')
</body>

    <!-- Livewire Scripts -->
    @livewireScripts
    
    @stack('scripts')
</body>
</html>
