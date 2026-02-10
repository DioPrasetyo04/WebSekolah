<nav 
    x-data="{ 
        isScrolled: false,
        mobileMenuOpen: false 
    }"
    @scroll.window="isScrolled = (window.pageYOffset > 20)"
    :class="isScrolled ? 'bg-white/95 backdrop-blur-lg shadow-lg' : 'bg-gradient-to-r from-red-700 to-red-600'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    x-init="setTimeout(() => { $el.style.transform = 'translateY(0)' }, 100)"
    style="transform: translateY(-100px); transition: transform 0.6s ease-out;"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center gap-3 cursor-pointer hover:scale-105 transition-transform">
                <div class="w-12 h-12 bg-white rounded-xl shadow-lg p-1 backdrop-blur-sm">
                    <img src="{{ asset('images/logo.png') }}" alt="School Logo" class="w-full h-full object-contain">
                </div>
                <div class="hidden sm:block">
                    <h1 
                        :class="isScrolled ? 'text-red-600' : 'text-white'"
                        class="font-bold text-lg leading-tight transition-colors"
                    >
                        SDN Tugu Selatan 03
                    </h1>
                    <p 
                        :class="isScrolled ? 'text-gray-600' : 'text-red-100'"
                        class="text-sm transition-colors"
                    >
                        Jakarta Utara
                    </p>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-8">
                @php
                $menuItems = [
                    ['label' => 'Home', 'href' => '#home'],
                    ['label' => 'About School', 'href' => '#about-school'],
                    ['label' => 'Programs', 'href' => '#programs'],
                    ['label' => 'Gallery', 'href' => '#gallery'],
                    ['label' => 'News', 'href' => '#news'],
                    ['label' => 'Contact', 'href' => '#contact'],
                ];
                @endphp

                @foreach($menuItems as $index => $item)
                <a 
                    href="{{ $item['href'] }}"
                    :class="isScrolled ? 'text-gray-700 hover:text-red-600' : 'text-white hover:text-red-100'"
                    class="font-medium transition-all relative group"
                    style="opacity: 0; animation: fadeIn 0.6s ease-out {{ $index * 0.1 }}s forwards;"
                >
                    {{ $item['label'] }}
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-600 transition-all group-hover:w-full"></span>
                </a>
                @endforeach
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-3">
                <!-- Login Button -->
                <button 
                    :class="isScrolled ? 'bg-red-600 text-white hover:bg-red-700' : 'bg-white text-red-600 hover:bg-red-50'"
                    class="hidden md:flex items-center gap-2 px-5 py-2.5 rounded-xl font-medium transition-all shadow-lg hover:scale-105 hover:-translate-y-0.5 active:scale-95"
                >
                    <i data-lucide="log-in" class="w-4 h-4"></i>
                    Login
                </button>

                <!-- Settings Button -->
                <button 
                    :class="isScrolled ? 'bg-gray-100 text-gray-700 hover:bg-gray-200' : 'bg-white/20 text-white hover:bg-white/30'"
                    class="hidden md:flex items-center justify-center w-10 h-10 rounded-lg transition-all hover:rotate-90"
                >
                    <i data-lucide="settings" class="w-5 h-5"></i>
                </button>

                <!-- Mobile Menu Button -->
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    :class="isScrolled ? 'text-gray-700' : 'text-white'"
                    class="lg:hidden p-2 rounded-lg active:scale-90 transition-transform"
                >
                    <i :data-lucide="mobileMenuOpen ? 'x' : 'menu'" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div 
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 max-h-0"
        x-transition:enter-end="opacity-100 max-h-96"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 max-h-96"
        x-transition:leave-end="opacity-0 max-h-0"
        class="lg:hidden bg-white border-t overflow-hidden"
    >
        <div class="px-4 py-6 space-y-4">
            @foreach($menuItems as $index => $item)
            <a 
                href="{{ $item['href'] }}"
                @click="mobileMenuOpen = false"
                class="block px-4 py-3 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg font-medium transition-all"
                style="opacity: 0; animation: fadeIn 0.3s ease-out {{ $index * 0.05 }}s forwards;"
            >
                {{ $item['label'] }}
            </a>
            @endforeach
            
            <div class="flex gap-3 pt-4">
                <button class="flex-1 flex items-center justify-center gap-2 px-4 py-3 bg-red-600 text-white rounded-lg font-medium hover:bg-red-700 transition-all">
                    <i data-lucide="log-in" class="w-4 h-4"></i>
                    Login
                </button>
                <button class="flex items-center justify-center px-4 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-all">
                    <i data-lucide="settings" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
    </div>
</nav>
