<section 
    class="py-20 bg-white relative overflow-hidden"
    x-data="{ inView: false }"
    x-intersect.once="inView = true"
>
    <!-- Background Decoration -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-10 w-72 h-72 bg-red-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" x-show="inView" x-transition.opacity.duration.600ms>
            <span class="inline-block px-6 py-2 bg-red-100 text-red-600 rounded-full text-sm font-semibold tracking-wide uppercase mb-4">
                Why Choose Us
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                What Makes Us Special
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                We go beyond traditional education to create a holistic learning experience 
                that prepares children for a bright future.
            </p>
        </div>

        <!-- Features Grid -->
        @php
        $features = [
            [
                'icon' => 'graduation-cap',
                'title' => 'Quality Education',
                'description' => 'Experienced teachers with modern teaching methodologies and personalized learning approaches for every student.',
                'gradient' => 'from-red-500 to-red-600',
                'bgColor' => 'bg-red-50',
            ],
            [
                'icon' => 'heart',
                'title' => 'Caring Environment',
                'description' => 'A nurturing and supportive atmosphere where every child feels valued, safe, and encouraged to express themselves.',
                'gradient' => 'from-pink-500 to-pink-600',
                'bgColor' => 'bg-pink-50',
            ],
            [
                'icon' => 'lightbulb',
                'title' => 'Innovative Learning',
                'description' => 'Integration of technology and creative teaching methods to make learning engaging, interactive, and fun.',
                'gradient' => 'from-blue-500 to-blue-600',
                'bgColor' => 'bg-blue-50',
            ],
            [
                'icon' => 'shield',
                'title' => 'Safe & Secure',
                'description' => 'Top-notch security measures, health protocols, and supervised activities ensuring peace of mind for parents.',
                'gradient' => 'from-green-500 to-green-600',
                'bgColor' => 'bg-green-50',
            ],
        ];
        @endphp

        <div class="grid md:grid-cols-2 gap-8">
            @foreach($features as $index => $feature)
            <div 
                x-show="inView"
                x-transition.scale.origin.bottom.duration.600ms
                style="transition-delay: {{ $index * 150 }}ms;"
                class="group relative"
            >
                <div class="bg-white rounded-3xl p-8 md:p-10 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 h-full hover:-translate-y-2">
                    <!-- Glassmorphism Background -->
                    <div class="absolute inset-0 {{ $feature['bgColor'] }} rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10">
                        <!-- Icon Container -->
                        <div class="relative mb-6">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-br {{ $feature['gradient'] }} flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                                <i data-lucide="{{ $feature['icon'] }}" class="w-10 h-10 text-white" stroke-width="2"></i>
                            </div>
                            <!-- Glow effect -->
                            <div class="absolute inset-0 bg-gradient-to-br {{ $feature['gradient'] }} rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity"></div>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-red-600 transition-colors">
                            {{ $feature['title'] }}
                        </h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            {{ $feature['description'] }}
                        </p>

                        <!-- Decorative Line -->
                        <div class="h-1 bg-gradient-to-r {{ $feature['gradient'] }} rounded-full mt-6 w-0 group-hover:w-16 transition-all duration-600"></div>
                    </div>

                    <!-- Corner Accent -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-white via-transparent to-transparent rounded-3xl opacity-50"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- CTA Section -->
        <div class="mt-16 text-center" x-show="inView" x-transition.opacity.duration.600ms style="transition-delay: 800ms;">
            <button class="px-10 py-5 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-xl font-semibold text-lg shadow-2xl hover:shadow-red-500/50 hover:scale-105 hover:-translate-y-1 transition-all active:scale-95">
                Schedule a School Tour
            </button>
        </div>
    </div>
</section>
