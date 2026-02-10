<section 
    id="programs" 
    class="py-20 bg-gradient-to-b from-gray-50 to-white"
    x-data="{ inView: false }"
    x-intersect.once="inView = true"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16" x-show="inView" x-transition.opacity.duration.600ms>
            <span class="inline-block px-6 py-2 bg-red-100 text-red-600 rounded-full text-sm font-semibold tracking-wide uppercase mb-4">
                Our Programs
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Academic Excellence Programs
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Diverse programs designed to develop well-rounded students with strong 
                academic foundations and creative skills.
            </p>
        </div>

        <!-- Programs Grid -->
        @php
        $programs = [
            ['icon' => 'book-open', 'title' => 'Core Curriculum', 'description' => 'Comprehensive foundation in Math, Science, Language Arts, and Social Studies.', 'image' => 'https://images.unsplash.com/photo-1759143102544-790af882ff45?w=600', 'gradient' => 'from-blue-500 to-blue-700'],
            ['icon' => 'microscope', 'title' => 'Science & Technology', 'description' => 'Hands-on STEM activities fostering curiosity and scientific thinking.', 'image' => 'https://images.unsplash.com/photo-1758685734153-132c8620c1bd?w=600', 'gradient' => 'from-purple-500 to-purple-700'],
            ['icon' => 'palette', 'title' => 'Arts & Creativity', 'description' => 'Visual arts, crafts, and creative expression to nurture imagination.', 'image' => 'https://images.unsplash.com/photo-1765947389862-afcc9035ba12?w=600', 'gradient' => 'from-pink-500 to-pink-700'],
            ['icon' => 'music', 'title' => 'Music & Performance', 'description' => 'Vocal and instrumental music education developing rhythm and harmony.', 'image' => 'https://images.unsplash.com/photo-1628605007510-696cd5731961?w=600', 'gradient' => 'from-red-500 to-red-700'],
            ['icon' => 'globe', 'title' => 'Language Studies', 'description' => 'English and additional foreign language programs for global readiness.', 'image' => 'https://images.unsplash.com/photo-1762475833776-fd57865db4d5?w=600', 'gradient' => 'from-green-500 to-green-700'],
            ['icon' => 'trophy', 'title' => 'Physical Education', 'description' => 'Sports and fitness programs promoting health and teamwork.', 'image' => 'https://images.unsplash.com/photo-1761039807514-292d7d33059f?w=600', 'gradient' => 'from-orange-500 to-orange-700'],
        ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($programs as $index => $program)
            <div 
                x-show="inView"
                x-transition.scale.origin.bottom.duration.600ms
                style="transition-delay: {{ $index * 100 }}ms;"
                class="group cursor-pointer"
            >
                <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 h-full hover:-translate-y-3">
                    <!-- Image Container -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ $program['image'] }}" alt="{{ $program['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t {{ $program['gradient'] }} opacity-60 group-hover:opacity-40 transition-opacity"></div>
                        
                        <!-- Icon Badge -->
                        <div class="absolute top-4 right-4 w-14 h-14 bg-white/90 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-12 transition-transform duration-300">
                            <i data-lucide="{{ $program['icon'] }}" class="w-7 h-7 text-red-600"></i>
                        </div>

                        <!-- Play Icon on Hover -->
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="w-16 h-16 bg-white/30 backdrop-blur-md rounded-full flex items-center justify-center">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                                    <i data-lucide="play" class="w-5 h-5 text-red-600 ml-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-red-600 transition-colors">
                            {{ $program['title'] }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            {{ $program['description'] }}
                        </p>

                        <!-- Learn More Link -->
                        <div class="flex items-center gap-2 text-red-600 font-semibold text-sm group-hover:gap-3 transition-all">
                            <span>Learn More</span>
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </div>
                    </div>

                    <!-- Bottom Accent Bar -->
                    <div class="h-1 bg-gradient-to-r {{ $program['gradient'] }} transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
