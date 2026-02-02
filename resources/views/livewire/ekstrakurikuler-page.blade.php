<div>
    {{-- Hero Section --}}
    <section class="relative min-h-[50vh] flex items-center justify-center bg-gradient-to-br from-slate-900 via-slate-900 to-blue-900/30 pt-20">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,...')] opacity-5"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-slate-900"></div>
        
        {{-- Glow Effects --}}
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-600/10 rounded-full filter blur-3xl"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-16">
            <span class="inline-block px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 text-sm font-medium mb-6">
                Pengembangan Bakat & Minat
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                Ekstrakurikuler
            </h1>
            <p class="text-lg sm:text-xl text-slate-300 max-w-2xl mx-auto">
                Beragam kegiatan ekstrakurikuler untuk mengembangkan potensi, bakat, dan minat siswa di luar kegiatan akademik.
            </p>
        </div>
    </section>

    {{-- Category Filter --}}
    <section class="py-8 bg-slate-900 border-b border-slate-800 sticky top-20 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-center gap-3">
                <button class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-lg transition-colors">
                    Semua
                </button>
                <button class="px-4 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 text-sm font-medium rounded-lg transition-colors">
                    Olahraga
                </button>
                <button class="px-4 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 text-sm font-medium rounded-lg transition-colors">
                    Seni & Budaya
                </button>
                <button class="px-4 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 text-sm font-medium rounded-lg transition-colors">
                    Kepemimpinan
                </button>
                <button class="px-4 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 text-sm font-medium rounded-lg transition-colors">
                    Teknologi
                </button>
            </div>
        </div>
    </section>

    {{-- Ekstrakurikuler Grid --}}
    <section class="py-20 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($ekstrakurikuler as $ekskul)
                <div class="group bg-slate-800/50 border border-slate-700 hover:border-blue-500/50 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:shadow-blue-500/5">
                    {{-- Image --}}
                    <div class="aspect-[4/3] overflow-hidden relative">
                        <img src="{{ $ekskul['image'] }}" 
                             alt="{{ $ekskul['name'] }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
                        <span class="absolute bottom-4 left-4 px-3 py-1 bg-blue-500/90 text-white text-xs font-medium rounded-full">
                            {{ $ekskul['category'] }}
                        </span>
                    </div>
                    
                    {{-- Content --}}
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    {!! $ekskul['icon'] !!}
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-white group-hover:text-blue-400 transition-colors">
                                {{ $ekskul['name'] }}
                            </h3>
                        </div>
                        
                        <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                            {{ $ekskul['description'] }}
                        </p>
                        
                        <div class="flex items-center gap-2 text-slate-500 text-xs">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ $ekskul['schedule'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 bg-slate-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="glass rounded-3xl p-8 sm:p-12">
                <div class="w-16 h-16 bg-blue-500/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">
                    Tertarik Bergabung?
                </h2>
                <p class="text-slate-400 mb-8 max-w-xl mx-auto">
                    Hubungi kami untuk informasi lebih lanjut tentang pendaftaran ekstrakurikuler dan jadwal kegiatan.
                </p>
                <a href="{{ route('home') }}#kontak" class="inline-flex items-center gap-2 px-8 py-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-xl btn-glow transition-all">
                    Hubungi Kami
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Back to Home --}}
    <section class="py-8 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}#program" class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Beranda
            </a>
        </div>
    </section>
</div>
