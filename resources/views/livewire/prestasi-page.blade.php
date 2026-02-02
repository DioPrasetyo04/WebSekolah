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
                🏆 Prestasi Sekolah
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                Prestasi <span class="text-blue-400">Kami</span>
            </h1>
            <p class="text-lg sm:text-xl text-slate-300 max-w-2xl mx-auto">
                Berbagai prestasi membanggakan yang diraih oleh siswa-siswi SDN 03 Tugu dalam berbagai bidang kompetisi.
            </p>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-12 bg-slate-900 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-bold text-blue-400 mb-2">25+</div>
                    <div class="text-slate-400 text-sm">Total Prestasi</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-bold text-blue-400 mb-2">12</div>
                    <div class="text-slate-400 text-sm">Juara 1</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-bold text-blue-400 mb-2">8</div>
                    <div class="text-slate-400 text-sm">Tingkat Kabupaten</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl sm:text-4xl font-bold text-blue-400 mb-2">5</div>
                    <div class="text-slate-400 text-sm">Kategori Lomba</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Category Filter & Search --}}
    <section class="py-8 bg-slate-900 sticky top-20 z-40 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-4 items-center justify-between">
                {{-- Search Input --}}
                <div class="relative w-full lg:w-80">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input 
                        type="text" 
                        wire:model.live.debounce.300ms="searchKeyword"
                        placeholder="Cari prestasi..."
                        class="w-full pl-12 pr-10 py-3 bg-slate-800/50 border border-slate-700 focus:border-blue-500 rounded-xl text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 transition-all"
                    >
                    @if($searchKeyword)
                    <button 
                        wire:click="$set('searchKeyword', '')"
                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-white transition-colors"
                    >
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    @endif
                </div>
                
                {{-- Category Filter Buttons --}}
                <div class="flex flex-wrap items-center justify-center gap-2">
                    <button 
                        wire:click="filterByCategory('')"
                        class="px-4 py-2 text-sm font-medium rounded-lg transition-all {{ $selectedCategory === '' ? 'bg-blue-500 text-white' : 'bg-slate-800 hover:bg-slate-700 text-slate-300 border border-slate-700' }}"
                    >
                        Semua
                    </button>
                    @foreach($categories as $category)
                    <button 
                        wire:click="filterByCategory('{{ $category }}')"
                        class="px-4 py-2 text-sm font-medium rounded-lg transition-all {{ $selectedCategory === $category ? 'bg-blue-500 text-white' : 'bg-slate-800 hover:bg-slate-700 text-slate-300 border border-slate-700' }}"
                    >
                        {{ $category }}
                    </button>
                    @endforeach
                </div>
            </div>
            
            {{-- Active Filters Info --}}
            @if($selectedCategory || $searchKeyword)
            <div class="flex items-center justify-center gap-4 mt-4">
                <span class="text-slate-400 text-sm">
                    Menampilkan {{ count($prestasi) }} prestasi
                    @if($selectedCategory)
                        dalam kategori "<span class="text-blue-400">{{ $selectedCategory }}</span>"
                    @endif
                    @if($searchKeyword)
                        dengan kata kunci "<span class="text-blue-400">{{ $searchKeyword }}</span>"
                    @endif
                </span>
                <button 
                    wire:click="clearFilters"
                    class="text-sm text-blue-400 hover:text-blue-300 transition-colors flex items-center gap-1"
                >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                    Reset Filter
                </button>
            </div>
            @endif
        </div>
    </section>

    {{-- Prestasi Grid --}}
    <section class="py-20 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($prestasi as $item)
                <div class="group bg-slate-800/50 border border-slate-700 hover:border-blue-500/50 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:shadow-blue-500/5">
                    {{-- Image --}}
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ $item['image'] }}" 
                             alt="{{ $item['title'] }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
                        
                        {{-- Badges --}}
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="px-3 py-1 bg-blue-500/90 text-white text-xs font-bold rounded-full">
                                {{ $item['year'] }}
                            </span>
                            <span class="px-3 py-1 bg-slate-800/90 text-slate-200 text-xs font-medium rounded-full">
                                {{ $item['level'] }}
                            </span>
                        </div>
                        
                    </div>
                    
                    {{-- Content --}}
                    <div class="p-6">
                        <span class="inline-block px-2 py-0.5 bg-blue-500/10 text-blue-400 text-xs rounded-full mb-3">
                            {{ $item['category'] }}
                        </span>
                        <h3 class="text-lg font-semibold text-white mb-3 group-hover:text-blue-400 transition-colors">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-slate-400 text-sm mb-4 line-clamp-2">
                            {{ $item['description'] }}
                        </p>
                        
                        {{-- Students --}}
                        <div class="pt-4 border-t border-slate-700">
                            <div class="flex items-center gap-2 text-slate-500 text-xs">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                <span>{{ implode(', ', array_slice($item['students'], 0, 2)) }}{{ count($item['students']) > 2 ? ' +' . (count($item['students']) - 2) . ' lainnya' : '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                {{-- Empty State --}}
                <div class="col-span-full text-center py-16">
                    <div class="w-20 h-20 bg-slate-800/50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Prestasi tidak ditemukan</h3>
                    <p class="text-slate-400 mb-6">Tidak ada prestasi yang sesuai dengan filter atau pencarian Anda.</p>
                    <button 
                        wire:click="clearFilters"
                        class="px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-xl transition-colors"
                    >
                        Reset Filter
                    </button>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 bg-slate-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="glass rounded-3xl p-8 sm:p-12">
                <div class="w-16 h-16 bg-blue-500/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                    </svg>
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">
                    Raih Prestasimu Bersama Kami!
                </h2>
                <p class="text-slate-400 mb-8 max-w-xl mx-auto">
                    SDN 03 Tugu berkomitmen untuk mendukung pengembangan potensi dan bakat setiap siswa untuk mencapai prestasi terbaik.
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
