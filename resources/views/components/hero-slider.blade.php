<section id="home" class="relative h-screen min-h-[600px] overflow-hidden">
    <!-- Swiper Hero Slider -->
    <div class="swiper heroSwiper h-full">
        <div class="swiper-wrapper">
            @php
            $heroSlides = [
                [
                    'id' => 1,
                    'image' => 'https://images.unsplash.com/photo-1759143102544-790af882ff45?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=1920',
                    'title' => 'Discover the Perfect Learning Environment',
                    'subtitle' => 'Where young minds grow and dreams take flight',
                    'description' => 'Join our nurturing community where every child receives personalized attention and quality education',
                ],
                [
                    'id' => 2,
                    'image' => 'https://images.unsplash.com/photo-1769515370431-bd2f3da8ba38?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=1920',
                    'title' => 'Active Learning Through Play',
                    'subtitle' => 'Building strong bodies and confident minds',
                    'description' => 'Our outdoor programs encourage physical activity, teamwork, and social development',
                ],
                [
                    'id' => 3,
                    'image' => 'https://images.unsplash.com/photo-1628605007510-696cd5731961?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=1920',
                    'title' => 'Technology-Enhanced Education',
                    'subtitle' => 'Preparing students for tomorrow',
                    'description' => 'Modern digital tools and innovative teaching methods for 21st-century learning',
                ],
            ];
            @endphp

            @foreach($heroSlides as $slide)
            <div class="swiper-slide relative h-screen min-h-[600px]">
                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img 
                        src="{{ $slide['image'] }}" 
                        alt="{{ $slide['title'] }}" 
                        class="w-full h-full object-cover swiper-lazy"
                        style="animation: scaleImage 7s ease-out infinite alternate;"
                    >
                    <!-- Gradient Overlays -->
                    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                </div>

                <!-- Play Icon Overlay -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-30">
                    <div class="w-24 h-24 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                        <i data-lucide="play" class="w-12 h-12 text-white ml-2"></i>
                    </div>
                </div>

                <!-- Content -->
                <div class="absolute inset-0 flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-3xl">
                            <!-- Subtitle Badge -->
                            <div class="inline-block mb-6 opacity-0 animate-fadeInUp delay-500" style="animation-delay: 0.5s;">
                                <span class="px-6 py-2 bg-red-600/90 backdrop-blur-sm text-white rounded-full text-sm font-semibold tracking-wide uppercase">
                                    {{ $slide['subtitle'] }}
                                </span>
                            </div>

                            <!-- Title -->
                            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight opacity-0 animate-fadeInUp delay-600" style="animation-delay: 0.6s;">
                                {{ $slide['title'] }}
                            </h1>

                            <!-- Description -->
                            <p class="text-xl md:text-2xl text-gray-200 mb-10 leading-relaxed opacity-0 animate-fadeInUp delay-700" style="animation-delay: 0.7s;">
                                {{ $slide['description'] }}
                            </p>

                            <!-- CTA Buttons -->
                            <div class="flex flex-wrap gap-4 opacity-0 animate-fadeInUp delay-800" style="animation-delay: 0.8s;">
                                <button class="group px-8 py-4 bg-red-600 text-white rounded-xl font-semibold text-lg shadow-2xl hover:bg-red-700 hover:scale-105 hover:-translate-y-1 transition-all flex items-center gap-2">
                                    Enroll Now
                                    <i data-lucide="chevron-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                                </button>

                                <button class="px-8 py-4 bg-white/20 backdrop-blur-md text-white rounded-xl font-semibold text-lg border-2 border-white/50 hover:bg-white/30 hover:scale-105 hover:-translate-y-1 transition-all">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
        <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center p-1">
            <div class="w-1.5 h-3 bg-white rounded-full"></div>
        </div>
    </div>
</section>

@push('scripts')
<style>
    @keyframes scaleImage {
        from { transform: scale(1); }
        to { transform: scale(1.1); }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const heroSwiper = new Swiper('.heroSwiper', {
            modules: [window.SwiperModules?.Navigation, window.SwiperModules?.Pagination, window.SwiperModules?.Autoplay, window.SwiperModules?.EffectFade],
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            lazy: true,
        });

        // Reinitialize icons after Swiper loads
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>
@endpush
