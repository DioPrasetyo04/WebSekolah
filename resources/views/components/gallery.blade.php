<section 
    id="gallery" 
    class="py-20 bg-white"
    x-data="{ inView: false, hoveredId: null }"
    x-intersect.once="inView = true"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" x-show="inView" x-transition.opacity.duration.600ms>
            <span class="inline-block px-6 py-2 bg-red-100 text-red-600 rounded-full text-sm font-semibold tracking-wide uppercase mb-4">Gallery</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Moments That Matter</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Explore the vibrant life at our school through photos of daily activities, special events, and memorable moments.
            </p>
        </div>

        @php
        $galleryImages = [
            ['id' => 1, 'url' => 'https://images.unsplash.com/photo-1759143102544-790af882ff45?w=600', 'title' => 'Classroom Learning', 'category' => 'Academic'],
            ['id' => 2, 'url' => 'https://images.unsplash.com/photo-1769515370431-bd2f3da8ba38?w=600', 'title' => 'Outdoor Activities', 'category' => 'Sports'],
            ['id' => 3, 'url' => 'https://images.unsplash.com/photo-1628605007510-696cd5731961?w=600', 'title' => 'Technology Lab', 'category' => 'Technology'],
            ['id' => 4, 'url' => 'https://images.unsplash.com/photo-1758685734153-132c8620c1bd?w=600', 'title' => 'Science Experiments', 'category' => 'Science'],
            ['id' => 5, 'url' => 'https://images.unsplash.com/photo-1765947389862-afcc9035ba12?w=600', 'title' => 'Art Class', 'category' => 'Arts'],
            ['id' => 6, 'url' => 'https://images.unsplash.com/photo-1761039807514-292d7d33059f?w=600', 'title' => 'Sports Day', 'category' => 'Sports'],
        ];
        @endphp

        <div class="columns-1 md:columns-2 lg:columns-3 gap-6">
            @foreach($galleryImages as $index => $image)
            <div 
                @mouseenter="hoveredId = {{ $image['id'] }}"
                @mouseleave="hoveredId = null"
                x-show="inView"
                x-transition.scale.duration.600ms
                style="transition-delay: {{ $index * 100 }}ms;"
                class="relative group cursor-pointer overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 mb-6 break-inside-avoid"
            >
                <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}" class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-700">
                
                <div 
                    x-show="hoveredId === {{ $image['id'] }}"
                    x-transition.opacity.duration.300ms
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end p-6"
                >
                    <span class="inline-block px-3 py-1 bg-red-600 text-white text-xs font-semibold rounded-full mb-2 w-fit">{{ $image['category'] }}</span>
                    <h3 class="text-white text-xl font-bold">{{ $image['title'] }}</h3>
                </div>

                <div 
                    x-show="hoveredId === {{ $image['id'] }}"
                    x-transition.scale.duration.300ms
                    class="absolute top-4 right-4 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center"
                >
                    <i data-lucide="zoom-in" class="w-5 h-5 text-gray-900"></i>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-12 text-center" x-show="inView" x-transition.opacity style="transition-delay: 800ms;">
            <button class="px-10 py-4 bg-white text-red-600 border-2 border-red-600 rounded-xl font-semibold text-lg hover:bg-red-600 hover:text-white hover:scale-105 hover:-translate-y-1 transition-all shadow-lg active:scale-95">
                View Full Gallery
            </button>
        </div>
    </div>
</section>
