<div>
    {{-- Hero Section --}}
    <section id="beranda" class="relative min-h-screen flex items-center overflow-hidden">
        {{-- Background Gradient --}}
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-800 to-blue-900"></div>

        {{-- Grid Pattern Overlay --}}
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%233B82F6&quot; fill-opacity=&quot;0.15&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-16 w-full">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">
                {{-- Left Content --}}
                <div class="text-center lg:text-left">
                    {{-- Badge --}}
                    <div
                        class="inline-flex items-center gap-2 px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 rounded-full mb-6 animate-fade-up">
                        <span class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></span>
                        <span class="text-blue-400 text-sm font-medium">Terakreditasi A</span>
                    </div>

                    {{-- Headline --}}
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight animate-fade-up"
                        style="animation-delay: 100ms;">
                        Selamat Datang di
                        <span
                            class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600">SDN
                            03 Tugu</span>
                    </h1>

                    {{-- Subtext --}}
                    <p class="text-lg text-slate-300 max-w-xl mx-auto lg:mx-0 mb-8 animate-fade-up"
                        style="animation-delay: 200ms;">
                        Membentuk generasi unggul, berkarakter, dan berprestasi melalui pendidikan berkualitas dengan
                        lingkungan belajar yang nyaman dan mendukung.
                    </p>

                    {{-- CTA Buttons --}}
                    <div class="flex flex-col sm:flex-row items-center lg:items-start justify-center lg:justify-start gap-4 animate-fade-up"
                        style="animation-delay: 300ms;">
                        <a href="#tentang"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-xl btn-glow transition-all">
                            Lihat Profil Sekolah
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="#kontak"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 bg-slate-800/50 hover:bg-slate-700/50 text-white font-semibold rounded-xl border border-slate-700 transition-all">
                            Hubungi Kami
                        </a>
                    </div>

                    {{-- Stats Preview --}}
                    <div class="mt-12 grid grid-cols-2 sm:grid-cols-4 gap-6 animate-fade-up"
                        style="animation-delay: 400ms;">
                        <div class="text-center lg:text-left">
                            <div class="text-3xl font-bold text-blue-400 mb-1">500+</div>
                            <div class="text-slate-400 text-sm">Siswa Aktif</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-3xl font-bold text-blue-400 mb-1">35+</div>
                            <div class="text-slate-400 text-sm">Tenaga Pengajar</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-3xl font-bold text-blue-400 mb-1">30+</div>
                            <div class="text-slate-400 text-sm">Tahun Berdiri</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-3xl font-bold text-blue-400 mb-1">50+</div>
                            <div class="text-slate-400 text-sm">Prestasi</div>
                        </div>
                    </div>
                </div>

                {{-- Right Content - Student Images --}}
                <div class="relative hidden lg:block animate-fade-up" style="animation-delay: 300ms;">
                    {{-- Main Student Image --}}
                    <div class="relative">
                        {{-- Student Image - No rounded corners, natural look --}}
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&h=500&fit=crop"
                            alt="Siswa SDN 03 Tugu" class="w-full h-auto max-w-lg mx-auto object-cover drop-shadow-2xl">
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

    {{-- Tentang Kami Section --}}
    <section id="tentang" class="py-24 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 text-sm font-medium mb-4">Tentang
                    Kami</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6">
                    Mengenal Lebih Dekat <span class="text-blue-400">SDN 03 Tugu</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto">
                    Sekolah dasar negeri yang berkomitmen memberikan pendidikan terbaik untuk masa depan generasi
                    penerus bangsa.
                </p>
            </div>

            {{-- Visi Misi Cards --}}
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                {{-- Visi --}}
                <div class="glass rounded-2xl p-8 hover:border-blue-500/40 transition-all">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/30">
                        <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Visi</h3>
                    <p class="text-slate-300 leading-relaxed">
                        Menjadi sekolah dasar unggulan yang menghasilkan lulusan berkarakter, cerdas, kreatif, dan
                        berdaya saing tinggi yang siap menghadapi tantangan masa depan.
                    </p>
                </div>

                {{-- Misi --}}
                <div class="glass rounded-2xl p-8 hover:border-blue-500/40 transition-all">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/30">
                        <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Misi</h3>
                    <ul class="text-slate-300 space-y-2">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Menyelenggarakan pendidikan berkualitas berbasis karakter
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Mengembangkan potensi siswa secara optimal
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Menciptakan lingkungan belajar yang kondusif
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Membangun kerjasama dengan orang tua dan masyarakat
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Program Unggulan Section --}}
    <section id="program" class="py-24 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 text-sm font-medium mb-4">Program
                    Unggulan</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6">
                    Keunggulan <span class="text-blue-400">Kami</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto">
                    Berbagai program dan kegiatan untuk mengembangkan potensi siswa secara menyeluruh.
                </p>
            </div>

            {{-- Program Grid --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Card 1 --}}
                <div
                    class="group bg-slate-800/50 hover:bg-slate-800 border border-slate-700 hover:border-blue-500/50 rounded-2xl p-6 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-colors">
                        <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Kurikulum Merdeka</h3>
                    <p class="text-slate-400 text-sm">Menerapkan Kurikulum Merdeka untuk pembelajaran yang lebih
                        fleksibel dan berpusat pada siswa.</p>
                </div>

                {{-- Card 2 --}}
                <div
                    class="group bg-slate-800/50 hover:bg-slate-800 border border-slate-700 hover:border-blue-500/50 rounded-2xl p-6 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-colors">
                        <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Literasi Digital</h3>
                    <p class="text-slate-400 text-sm">Membekali siswa dengan kemampuan teknologi dan literasi digital
                        sejak dini.</p>
                </div>

                {{-- Card 3 --}}
                <div
                    class="group bg-slate-800/50 hover:bg-slate-800 border border-slate-700 hover:border-blue-500/50 rounded-2xl p-6 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-colors">
                        <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Pendidikan Karakter</h3>
                    <p class="text-slate-400 text-sm">Pembentukan karakter mulia melalui pembiasaan nilai-nilai
                        Pancasila.</p>
                </div>

                {{-- Card 4 - Ekstrakurikuler with Explore More --}}
                <div
                    class="group bg-slate-800/50 hover:bg-slate-800 border border-slate-700 hover:border-blue-500/50 rounded-2xl p-6 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-colors">
                        <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Ekstrakurikuler</h3>
                    <p class="text-slate-400 text-sm mb-4">Pramuka, Seni Tari, Drumband, Futsal, dan berbagai kegiatan
                        pengembangan bakat.</p>
                    <a href="{{ route('ekstrakurikuler') }}"
                        class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 text-sm font-medium transition-colors">
                        Lihat Selengkapnya
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- Card 5 - Prestasi with Explore More --}}
                <div
                    class="group bg-slate-800/50 hover:bg-slate-800 border border-slate-700 hover:border-yellow-500/50 rounded-2xl p-6 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-yellow-500/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-yellow-500/20 transition-colors">
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Prestasi</h3>
                    <p class="text-slate-400 text-sm mb-4">Berbagai prestasi membanggakan yang diraih siswa dalam
                        kompetisi akademik dan non-akademik.</p>
                    <a href="{{ route('prestasi') }}"
                        class="inline-flex items-center gap-2 text-yellow-400 hover:text-yellow-300 text-sm font-medium transition-colors">
                        Lihat Selengkapnya
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- Card 6 --}}
                <div
                    class="group bg-slate-800/50 hover:bg-slate-800 border border-slate-700 hover:border-blue-500/50 rounded-2xl p-6 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-colors">
                        <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Bimbingan Belajar</h3>
                    <p class="text-slate-400 text-sm">Program intensif untuk membantu siswa dalam persiapan ujian dan
                        penguatan materi.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Guru & Staff Section --}}
    <section id="guru" class="py-24 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 text-sm font-medium mb-4">Tenaga
                    Pendidik</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    Guru & <span class="text-blue-400">Staff</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto">
                    Tenaga pendidik dan kependidikan yang berdedikasi untuk memberikan pendidikan terbaik bagi siswa.
                </p>
            </div>

            {{-- Staff Grid --}}
            @php
                $staffMembers = [
                    [
                        'name' => 'Drs. Ahmad Sudirman, M.Pd',
                        'position' => 'Kepala Sekolah',
                        'category' => 'Pimpinan',
                        'image' => 'https://randomuser.me/api/portraits/men/1.jpg',
                    ],
                    [
                        'name' => 'Sri Wahyuni, S.Pd',
                        'position' => 'Wakil Kepala Sekolah',
                        'category' => 'Pimpinan',
                        'image' => 'https://randomuser.me/api/portraits/women/2.jpg',
                    ],
                    [
                        'name' => 'Budi Santoso, S.Pd',
                        'position' => 'Guru Kelas 6',
                        'category' => 'Guru',
                        'image' => 'https://randomuser.me/api/portraits/men/3.jpg',
                    ],
                    [
                        'name' => 'Siti Rahayu, S.Pd',
                        'position' => 'Guru Kelas 5',
                        'category' => 'Guru',
                        'image' => 'https://randomuser.me/api/portraits/women/4.jpg',
                    ],
                    [
                        'name' => 'Agus Purnomo, S.Pd',
                        'position' => 'Guru Kelas 4',
                        'category' => 'Guru',
                        'image' => 'https://randomuser.me/api/portraits/men/5.jpg',
                    ],
                    [
                        'name' => 'Dewi Lestari, S.Pd',
                        'position' => 'Guru Kelas 3',
                        'category' => 'Guru',
                        'image' => 'https://randomuser.me/api/portraits/women/6.jpg',
                    ],
                    [
                        'name' => 'Hendra Wijaya, S.Pd',
                        'position' => 'Guru Kelas 2',
                        'category' => 'Guru',
                        'image' => 'https://randomuser.me/api/portraits/men/7.jpg',
                    ],
                    [
                        'name' => 'Rina Kusuma, S.Pd',
                        'position' => 'Guru Kelas 1',
                        'category' => 'Guru',
                        'image' => 'https://randomuser.me/api/portraits/women/8.jpg',
                    ],
                    [
                        'name' => 'Joko Susanto, S.Pd',
                        'position' => 'Guru PJOK',
                        'category' => 'Guru',
                        'image' => 'https://randomuser.me/api/portraits/men/9.jpg',
                    ],
                    [
                        'name' => 'Linda Sari, S.Pd',
                        'position' => 'Guru PAI',
                        'category' => 'Guru',
                        'image' => 'https://randomuser.me/api/portraits/women/10.jpg',
                    ],
                    [
                        'name' => 'Eko Prasetyo',
                        'position' => 'Tata Usaha',
                        'category' => 'Staff',
                        'image' => 'https://randomuser.me/api/portraits/men/11.jpg',
                    ],
                    [
                        'name' => 'Yanti Mulyani',
                        'position' => 'Petugas Perpustakaan',
                        'category' => 'Staff',
                        'image' => 'https://randomuser.me/api/portraits/women/12.jpg',
                    ],
                ];
            @endphp

            {{-- Scrollable Container --}}
            <div x-data="{
                scrollContainer: null,
                canScrollLeft: false,
                canScrollRight: true,
                checkScroll() {
                    if (this.scrollContainer) {
                        this.canScrollLeft = this.scrollContainer.scrollLeft > 0;
                        this.canScrollRight = this.scrollContainer.scrollLeft < (this.scrollContainer.scrollWidth - this.scrollContainer.clientWidth - 10);
                    }
                },
                scrollLeft() {
                    this.scrollContainer.scrollBy({ left: -280, behavior: 'smooth' });
                },
                scrollRight() {
                    this.scrollContainer.scrollBy({ left: 280, behavior: 'smooth' });
                }
            }" x-init="scrollContainer = $refs.staffScroll;
            checkScroll()" class="relative">
                {{-- Scroll Buttons --}}
                <button x-show="canScrollLeft" x-transition @click="scrollLeft()"
                    class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-12 h-12 bg-slate-800/90 hover:bg-blue-500 rounded-full flex items-center justify-center shadow-lg transition-colors -ml-4 lg:-ml-6">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button x-show="canScrollRight" x-transition @click="scrollRight()"
                    class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-12 h-12 bg-slate-800/90 hover:bg-blue-500 rounded-full flex items-center justify-center shadow-lg transition-colors -mr-4 lg:-mr-6">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <div x-ref="staffScroll" @scroll="checkScroll()"
                    class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide scroll-smooth snap-x snap-mandatory"
                    style="-webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none;">

                    @foreach ($staffMembers as $staff)
                        <div class="group flex-shrink-0 w-[240px] sm:w-[260px] snap-start">
                            <div
                                class="bg-slate-800/50 border border-slate-700 hover:border-blue-500/50 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:shadow-blue-500/5">
                                {{-- Photo --}}
                                <div class="aspect-square overflow-hidden relative">
                                    <img src="{{ $staff['image'] }}" alt="{{ $staff['name'] }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent">
                                    </div>
                                    <span
                                        class="absolute bottom-4 left-4 px-3 py-1 bg-blue-500/90 text-white text-xs font-medium rounded-full">
                                        {{ $staff['category'] }}
                                    </span>
                                </div>

                                {{-- Info --}}
                                <div class="p-5 text-center">
                                    <h3
                                        class="text-lg font-semibold text-white mb-1 group-hover:text-blue-400 transition-colors">
                                        {{ $staff['name'] }}
                                    </h3>
                                    <p class="text-slate-400 text-sm">
                                        {{ $staff['position'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Berita Terbaru Section --}}
    <section id="berita" class="py-24 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
                <div>
                    <span
                        class="inline-block px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 text-sm font-medium mb-4">Berita
                        & Informasi</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-white">
                        Berita <span class="text-blue-400">Terbaru</span>
                    </h2>
                </div>
                <a href="#"
                    class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 font-medium transition-colors">
                    Lihat Semua Berita
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            {{-- Filter & Search Bar --}}
            <div class="flex flex-col lg:flex-row gap-4 mb-8">
                {{-- Search Input --}}
                <div class="relative flex-1 max-w-md">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text" wire:model.live.debounce.300ms="searchKeyword" placeholder="Cari berita..."
                        class="w-full pl-12 pr-4 py-3 bg-slate-800/50 border border-slate-700 focus:border-blue-500 rounded-xl text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 transition-all">
                    @if ($searchKeyword)
                        <button wire:click="$set('searchKeyword', '')"
                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    @endif
                </div>

                {{-- Category Filter Buttons --}}
                <div class="flex flex-wrap gap-2">
                    <button wire:click="filterByCategory"
                        class="px-4 py-2 rounded-lg text-sm font-medium transition-all {{ is_null($selectedCategory) ? 'bg-blue-500 text-white' : 'bg-slate-800/50 text-slate-300 hover:bg-slate-700 border border-slate-700' }}">
                        Semua
                    </button>

                    @foreach ($categories as $category)
                        <button wire:click="filterByCategory({{ $category->id }})"
                            class="px-4 py-2 rounded-lg text-sm font-medium transition-all {{ (int) $selectedCategory === $category->id ? 'bg-blue-500 text-white' : 'bg-slate-800/50 text-slate-300 hover:bg-slate-700 border border-slate-700' }}">
                            {{ $category->name }}
                            <span class="ml-1 text-xs opacity-75">({{ $category->posts_count }})</span>
                        </button>
                    @endforeach

                </div>
            </div>

            {{-- Active Filters Info --}}
            @if ($selectedCategory || $searchKeyword)
                <div class="flex items-center gap-4 mb-6">
                    <span class="text-slate-400 text-sm">
                        Menampilkan {{ $latestPosts->count() }} berita
                        @if ($searchKeyword)
                            dengan kata kunci "<span class="text-blue-400">{{ $searchKeyword }}</span>"
                        @endif
                    </span>
                    <button wire:click="clearFilters"
                        class="text-sm text-blue-400 hover:text-blue-300 transition-colors flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        Reset Filter
                    </button>
                </div>
            @endif

            {{-- News Carousel --}}
            <div x-data="{
                scrollContainer: null,
                canScrollLeft: false,
                canScrollRight: true,
                checkScroll() {
                    if (this.scrollContainer) {
                        this.canScrollLeft = this.scrollContainer.scrollLeft > 0;
                        this.canScrollRight = this.scrollContainer.scrollLeft < (this.scrollContainer.scrollWidth - this.scrollContainer.clientWidth - 10);
                    }
                },
                scrollLeft() {
                    this.scrollContainer.scrollBy({ left: -340, behavior: 'smooth' });
                },
                scrollRight() {
                    this.scrollContainer.scrollBy({ left: 340, behavior: 'smooth' });
                }
            }" x-init="scrollContainer = $refs.newsScroll;
            checkScroll()" class="relative">
                {{-- Scroll Buttons --}}
                <button x-show="canScrollLeft" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" @click="scrollLeft()"
                    class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-12 h-12 bg-slate-800/90 hover:bg-blue-500 rounded-full flex items-center justify-center shadow-lg transition-colors -ml-4 lg:-ml-6">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button x-show="canScrollRight" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" @click="scrollRight()"
                    class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-12 h-12 bg-slate-800/90 hover:bg-blue-500 rounded-full flex items-center justify-center shadow-lg transition-colors -mr-4 lg:-mr-6">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                {{-- Scrollable Container --}}
                <div x-ref="newsScroll" @scroll="checkScroll()"
                    class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide scroll-smooth snap-x snap-mandatory"
                    style="-webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none;">

                    @forelse($latestPosts as $post)
                        <article
                            class="group flex-shrink-0 w-[320px] sm:w-[340px] bg-slate-800/50 border border-slate-700 hover:border-blue-500/50 rounded-2xl overflow-hidden transition-all duration-300 snap-start">
                            {{-- Thumbnail --}}
                            <div class="aspect-video bg-slate-700 overflow-hidden">
                                @if ($post->thumbnail)
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                @else
                                    <div
                                        class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-500/20 to-blue-600/20">
                                        <svg class="w-12 h-12 text-blue-500/50" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            {{-- Content --}}
                            <div class="p-6">
                                <div class="flex items-center gap-3 mb-3">
                                    <span
                                        class="text-slate-500 text-sm">{{ $post->published_at?->format('d M Y') }}</span>
                                    @if ($post->categories->first())
                                        <span
                                            class="px-2 py-0.5 bg-blue-500/10 text-blue-400 text-xs rounded-full">{{ $post->categories->first()->name }}</span>
                                    @endif
                                </div>
                                <h3
                                    class="text-lg font-semibold text-white mb-2 line-clamp-2 group-hover:text-blue-400 transition-colors">
                                    {{ $post->title }}
                                </h3>
                                <p class="text-slate-400 text-sm line-clamp-2 mb-4">
                                    {{ Str::limit(strip_tags($post->description), 100) }}
                                </p>
                                <a href="{{ route('post.show', $post->slug) }}"
                                    class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 text-sm font-medium transition-colors">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @empty
                        {{-- Empty State - Sample Cards (6 items) --}}
                        @php
                            $dummyNews = [
                                [
                                    'title' => 'Penerimaan Siswa Baru Tahun Ajaran 2026/2027',
                                    'category' => 'Pengumuman',
                                    'desc' =>
                                        'Pendaftaran siswa baru untuk tahun ajaran 2026/2027 telah dibuka. Segera daftarkan putra-putri Anda.',
                                ],
                                [
                                    'title' => 'Juara 1 Lomba Cerdas Cermat Tingkat Kecamatan',
                                    'category' => 'Prestasi',
                                    'desc' =>
                                        'Tim cerdas cermat SDN 03 Tugu berhasil meraih juara 1 dalam lomba tingkat kecamatan.',
                                ],
                                [
                                    'title' => 'Peringatan Hari Pendidikan Nasional',
                                    'category' => 'Kegiatan',
                                    'desc' =>
                                        'Upacara dan berbagai kegiatan menarik dalam rangka memperingati Hari Pendidikan Nasional.',
                                ],
                                [
                                    'title' => 'Workshop Literasi Digital untuk Guru',
                                    'category' => 'Pelatihan',
                                    'desc' =>
                                        'Guru-guru mengikuti workshop peningkatan kompetensi literasi digital di era modern.',
                                ],
                                [
                                    'title' => 'Pentas Seni Akhir Semester',
                                    'category' => 'Kegiatan',
                                    'desc' =>
                                        'Siswa menampilkan berbagai pertunjukan seni dalam acara pentas seni akhir semester.',
                                ],
                                [
                                    'title' => 'Kunjungan Industri ke Museum Nasional',
                                    'category' => 'Karyawisata',
                                    'desc' =>
                                        'Siswa kelas 5 dan 6 melakukan kunjungan edukatif ke Museum Nasional Jakarta.',
                                ],
                            ];
                        @endphp

                        @foreach ($dummyNews as $i => $news)
                            <article
                                class="group flex-shrink-0 w-[320px] sm:w-[340px] bg-slate-800/50 border border-slate-700 hover:border-blue-500/50 rounded-2xl overflow-hidden transition-all duration-300 snap-start">
                                <div
                                    class="aspect-video bg-gradient-to-br from-blue-500/20 to-blue-600/20 flex items-center justify-center overflow-hidden">
                                    <img src="https://picsum.photos/seed/news{{ $i }}/680/380"
                                        alt="{{ $news['title'] }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-3 mb-3">
                                        <span
                                            class="text-slate-500 text-sm">{{ now()->subDays($i)->format('d M Y') }}</span>
                                        <span
                                            class="px-2 py-0.5 bg-blue-500/10 text-blue-400 text-xs rounded-full">{{ $news['category'] }}</span>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-white mb-2 line-clamp-2 group-hover:text-blue-400 transition-colors">
                                        {{ $news['title'] }}
                                    </h3>
                                    <p class="text-slate-400 text-sm line-clamp-2 mb-4">
                                        {{ $news['desc'] }}
                                    </p>
                                    <a href="{{ route('post.show', 'berita-sekolah-' . ($i + 1)) }}"
                                        class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 text-sm font-medium transition-colors">
                                        Baca Selengkapnya
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    {{-- Fasilitas Section --}}
    <section id="fasilitas" class="py-24 bg-slate-900" x-data="{
        showLightbox: false,
        currentImage: '',
        currentName: '',
        openLightbox(image, name) {
            this.currentImage = image;
            this.currentName = name;
            this.showLightbox = true;
            document.body.style.overflow = 'hidden';
        },
        closeLightbox() {
            this.showLightbox = false;
            document.body.style.overflow = 'auto';
        }
    }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 text-sm font-medium mb-4">Fasilitas</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6">
                    Fasilitas <span class="text-blue-400">Lengkap</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto">
                    Kami menyediakan berbagai fasilitas modern untuk mendukung kegiatan belajar mengajar.
                </p>
            </div>

            {{-- Facilities Grid --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $facilities = [
                        [
                            'name' => 'Ruang Kelas Nyaman',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
                            'image' => 'https://picsum.photos/seed/kelas/800/600',
                        ],
                        [
                            'name' => 'Perpustakaan',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>',
                            'image' => 'https://picsum.photos/seed/perpus/800/600',
                        ],
                        [
                            'name' => 'Lab Komputer',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
                            'image' => 'https://picsum.photos/seed/labkom/800/600',
                        ],
                        [
                            'name' => 'Mushola',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M9 21V8l-3 3V21m12 0V8l-3 3v10M12 3l9 8H3l9-8z"/>',
                            'image' => 'https://picsum.photos/seed/mushola/800/600',
                        ],
                        [
                            'name' => 'Lapangan Olahraga',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"/>',
                            'image' => 'https://picsum.photos/seed/lapangan/800/600',
                        ],
                        [
                            'name' => 'UKS',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
                            'image' => 'https://picsum.photos/seed/uks/800/600',
                        ],
                        [
                            'name' => 'Kantin Sehat',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>',
                            'image' => 'https://picsum.photos/seed/kantin/800/600',
                        ],
                        [
                            'name' => 'Taman Bermain',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                            'image' => 'https://picsum.photos/seed/taman/800/600',
                        ],
                    ];
                @endphp

                @foreach ($facilities as $facility)
                    <div class="group relative bg-slate-800/30 hover:bg-slate-800/60 border border-slate-700/50 hover:border-blue-500/30 rounded-xl p-6 text-center transition-all duration-300 cursor-pointer overflow-hidden"
                        @click="openLightbox('{{ $facility['image'] }}', '{{ $facility['name'] }}')">
                        {{-- Default View --}}
                        <div class="transition-all duration-300 group-hover:opacity-0 group-hover:scale-95">
                            <div
                                class="w-14 h-14 bg-blue-500/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-7 h-7 text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    {!! $facility['icon'] !!}
                                </svg>
                            </div>
                            <h3 class="text-white font-medium">{{ $facility['name'] }}</h3>
                        </div>

                        {{-- Hover View --}}
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 scale-110 group-hover:scale-100">
                            <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mb-3">
                                <svg class="w-8 h-8 text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <span class="text-blue-400 font-medium">Lihat</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Lightbox Modal --}}
        <div x-show="showLightbox" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @click.self="closeLightbox()" @keydown.escape.window="closeLightbox()"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 backdrop-blur-sm p-4"
            style="display: none;">
            {{-- Close Button --}}
            <button @click="closeLightbox()"
                class="absolute top-4 right-4 w-12 h-12 bg-slate-800/80 hover:bg-slate-700 rounded-full flex items-center justify-center text-white transition-colors z-10">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            {{-- Modal Content --}}
            <div x-show="showLightbox" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90" class="relative max-w-5xl w-full">
                {{-- Image --}}
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img :src="currentImage" :alt="currentName"
                        class="w-full h-auto max-h-[80vh] object-contain bg-slate-900">
                </div>

                {{-- Caption --}}
                <div class="text-center mt-4">
                    <h3 class="text-xl font-semibold text-white" x-text="currentName"></h3>
                    <p class="text-slate-400 text-sm mt-1">Fasilitas SDN 03 Tugu</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Sambutan Kepala Sekolah Section --}}
    <section class="py-24 bg-slate-950">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass rounded-3xl p-8 sm:p-12 text-center">
                <svg class="w-12 h-12 text-blue-500/30 mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                </svg>
                <blockquote class="text-xl sm:text-2xl lg:text-3xl text-white font-medium leading-relaxed mb-8">
                    "Pendidikan adalah jembatan emas menuju masa depan yang cerah. Di SDN 03 Tugu, kami berkomitmen
                    membentuk generasi yang tidak hanya cerdas, tetapi juga berkarakter mulia."
                </blockquote>
                <div class="flex items-center justify-center gap-4">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-blue-500/30">
                        KS
                    </div>
                    <div class="text-left">
                        <div class="text-white font-semibold">Nama Kepala Sekolah</div>
                        <div class="text-slate-400 text-sm">Kepala Sekolah SDN 03 Tugu</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Kontak Section --}}
    <section id="kontak" class="py-24 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 text-sm font-medium mb-4">Kontak</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6">
                    Hubungi <span class="text-blue-400">Kami</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto">
                    Ada pertanyaan? Jangan ragu untuk menghubungi kami atau kunjungi sekolah kami.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                {{-- Contact Info --}}
                <div class="space-y-8">
                    <div class="glass rounded-2xl p-6 flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">Alamat</h3>
                            <p class="text-slate-400">Jl. Balai Rakyat No. 19, Kota Jakarta Utara</p>
                        </div>
                    </div>

                    <div class="glass rounded-2xl p-6 flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">Telepon</h3>
                            <p class="text-slate-400">(021) 871-2345</p>
                        </div>
                    </div>

                    <div class="glass rounded-2xl p-6 flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">Email</h3>
                            <p class="text-slate-400">info@sdn03tugu.sch.id</p>
                        </div>
                    </div>

                    <div class="glass rounded-2xl p-6 flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">Jam Operasional</h3>
                            <p class="text-slate-400">Senin - Jumat: 07.00 - 14.00 WIB<br>Sabtu: 07.00 - 11.00 WIB</p>
                        </div>
                    </div>
                </div>

                {{-- Map --}}
                <div class="glass rounded-2xl overflow-hidden h-[400px] lg:h-auto">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2935285855647!2d106.87036077489666!3d-6.354653662204746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed0d36d7e5e7%3A0x7e5f8ebb2d0a2b4!2sDepok%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1706861234567!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
</div>
