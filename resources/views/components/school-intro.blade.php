<section 
    id="about-school" 
    class="py-20 bg-gradient-to-b from-white to-gray-50"
    x-data="{ inView: false }"
    x-intersect.once="inView = true"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16" x-show="inView" x-transition.opacity.duration.600ms>
            <span class="inline-block px-6 py-2 bg-red-100 text-red-600 rounded-full text-sm font-semibold tracking-wide uppercase mb-4">
                About Our School
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Welcome to SDN Tugu Selatan 03
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                A leading elementary school in Jakarta Utara, dedicated to nurturing young minds 
                through innovative teaching methods, comprehensive curriculum, and a supportive environment 
                that encourages every child to reach their full potential.
            </p>
        </div>

        <!-- Stats Grid -->
        @php
        $stats = [
            [
                'icon' => 'users',
                'value' => '1,200+',
                'label' => 'Active Students',
                'color' => 'bg-red-500',
            ],
            [
                'icon' => 'award',
                'value' => '50+',
                'label' => 'Expert Teachers',
                'color' => 'bg-blue-500',
            ],
            [
                'icon' => 'book-open',
                'value' => '15+',
                'label' => 'Academic Programs',
                'color' => 'bg-green-500',
            ],
            [
                'icon' => 'trending-up',
                'value' => '95%',
                'label' => 'Success Rate',
                'color' => 'bg-purple-500',
            ],
        ];
        @endphp

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
            @foreach($stats as $index => $stat)
            <div 
                x-show="inView"
                x-transition.scale.origin.bottom.duration.600ms
                style="transition-delay: {{ $index * 100 }}ms;"
                class="relative group"
            >
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-2">
                    <!-- Glassmorphism effect -->
                    <div class="absolute inset-0 bg-gradient-to-br from-white/50 to-gray-50/50 rounded-2xl backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    
                    <div class="relative z-10">
                        <!-- Icon -->
                        <div class="{{ $stat['color'] }} w-14 h-14 md:w-16 md:h-16 rounded-xl flex items-center justify-center mb-4 shadow-lg group-hover:rotate-12 transition-transform duration-300">
                            <i data-lucide="{{ $stat['icon'] }}" class="w-7 h-7 md:w-8 md:h-8 text-white"></i>
                        </div>

                        <!-- Value -->
                        <div class="mb-2">
                            <span class="text-3xl md:text-4xl font-bold text-gray-900 block">
                                {{ $stat['value'] }}
                            </span>
                        </div>

                        <!-- Label -->
                        <p class="text-sm md:text-base text-gray-600 font-medium">
                            {{ $stat['label'] }}
                        </p>
                    </div>

                    <!-- Decorative corner -->
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-red-100/50 to-transparent rounded-2xl transform translate-x-4 -translate-y-4 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Additional Info Section -->
        <div 
            x-show="inView"
            x-transition.opacity.duration.600ms
            style="transition-delay: 600ms;"
            class="mt-16 bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-gray-100"
        >
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">
                        Our Mission
                    </h3>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        To provide a safe, nurturing, and stimulating environment where children 
                        can develop academically, socially, and emotionally. We believe in fostering 
                        creativity, critical thinking, and character development in every student.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-red-50 text-red-600 rounded-full text-sm font-medium">
                            Excellence
                        </span>
                        <span class="px-4 py-2 bg-blue-50 text-blue-600 rounded-full text-sm font-medium">
                            Innovation
                        </span>
                        <span class="px-4 py-2 bg-green-50 text-green-600 rounded-full text-sm font-medium">
                            Integrity
                        </span>
                    </div>
                </div>
                <div class="relative h-64 md:h-80 rounded-2xl overflow-hidden shadow-lg">
                    <img
                        src="https://images.unsplash.com/photo-1732319882816-45eee81b105d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=800"
                        alt="Happy students"
                        class="w-full h-full object-cover hover:scale-110 transition-transform duration-700"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                </div>
            </div>
        </div>
    </div>
</section>
