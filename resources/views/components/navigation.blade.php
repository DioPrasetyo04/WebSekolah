<nav x-data="{ open: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
     :class="scrolled ? 'bg-slate-900 shadow-lg shadow-blue-500/5' : 'bg-slate-900/80 backdrop-blur-md'"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:shadow-blue-500/50 transition-all">
                    <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div>
                    <span class="text-xl font-bold text-white">SDN 03 Tugu</span>
                    <span class="block text-xs text-slate-400">Sekolah Dasar Negeri</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-1">
                <a href="{{ route('home') }}#beranda" class="px-4 py-2 text-sm font-medium text-white hover:text-blue-400 transition-colors">Beranda</a>
                <a href="{{ route('home') }}#tentang" class="px-4 py-2 text-sm font-medium text-slate-300 hover:text-blue-400 transition-colors">Tentang</a>
                <a href="{{ route('home') }}#program" class="px-4 py-2 text-sm font-medium text-slate-300 hover:text-blue-400 transition-colors">Program</a>
                <a href="{{ route('home') }}#berita" class="px-4 py-2 text-sm font-medium text-slate-300 hover:text-blue-400 transition-colors">Berita</a>
                <a href="{{ route('home') }}#fasilitas" class="px-4 py-2 text-sm font-medium text-slate-300 hover:text-blue-400 transition-colors">Fasilitas</a>
                <a href="{{ route('home') }}#kontak" class="px-4 py-2 text-sm font-medium text-slate-300 hover:text-blue-400 transition-colors">Kontak</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden lg:block">
                <a href="{{ route('home') }}#kontak" class="inline-flex items-center gap-2 px-6 py-2.5 bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold rounded-lg btn-glow transition-all">
                    Hubungi Kami
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="lg:hidden p-2 text-slate-300 hover:text-white relative z-[60]">
                <svg x-show="!open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay - Full Screen -->
    <template x-teleport="body">
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="open = false"
             x-cloak
             class="lg:hidden fixed inset-0 bg-black/60 backdrop-blur-sm"
             style="z-index: 9998;">
        </div>
    </template>

    <!-- Mobile Slide-in Menu - Teleported to body -->
    <template x-teleport="body">
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             x-cloak
             class="lg:hidden fixed top-0 right-0 bottom-0 w-80 max-w-[85vw] overflow-hidden shadow-2xl"
             style="z-index: 9999; background-color: #0f172a;">
            
            <!-- Close Button -->
            <div class="flex items-center justify-between p-6 border-b border-slate-700" style="background-color: #0f172a;">
                <span class="text-lg font-semibold text-white">Menu</span>
                <button @click="open = false" class="p-2 text-slate-400 hover:text-white rounded-lg hover:bg-slate-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            
            <!-- Menu Items -->
            <div class="p-6 space-y-2" style="background-color: #0f172a;">
                <a href="{{ route('home') }}#beranda" @click="open = false" class="flex items-center gap-3 px-4 py-3 text-white hover:bg-blue-500/10 hover:text-blue-400 rounded-xl transition-colors">
                    <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Beranda
                </a>
                <a href="{{ route('home') }}#tentang" @click="open = false" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-blue-500/10 hover:text-blue-400 rounded-xl transition-colors">
                    <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Tentang Kami
                </a>
                <a href="{{ route('home') }}#program" @click="open = false" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-blue-500/10 hover:text-blue-400 rounded-xl transition-colors">
                    <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    Program Unggulan
                </a>
                <a href="{{ route('home') }}#berita" @click="open = false" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-blue-500/10 hover:text-blue-400 rounded-xl transition-colors">
                    <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                    Berita
                </a>
                <a href="{{ route('home') }}#fasilitas" @click="open = false" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-blue-500/10 hover:text-blue-400 rounded-xl transition-colors">
                    <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Fasilitas
                </a>
                <a href="{{ route('home') }}#kontak" @click="open = false" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-blue-500/10 hover:text-blue-400 rounded-xl transition-colors">
                    <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Kontak
                </a>
            </div>
            
            <!-- CTA Button -->
            <div class="p-6 border-t border-slate-700" style="background-color: #0f172a;">
                <a href="{{ route('home') }}#kontak" @click="open = false" class="flex items-center justify-center gap-2 w-full px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-xl btn-glow transition-all">
                    Hubungi Kami
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </template>
</nav>
