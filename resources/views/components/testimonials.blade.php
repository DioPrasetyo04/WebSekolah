<section class="py-20 bg-gradient-to-br from-red-50 via-white to-blue-50 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-20 w-96 h-96 bg-red-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-20 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="inline-block px-6 py-2 bg-red-100 text-red-600 rounded-full text-sm font-semibold tracking-wide uppercase mb-4">Testimonials</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">What Parents Say About Us</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Don't just take our word for it. Here's what our school community has to say.
            </p>
        </div>

        <!-- Swiper Testimonials -->
        <div class="swiper testimonialsSwiper pb-12">
            <div class="swiper-wrapper">
                @php
                $testimonials = [
                    ['id' => 1, 'name' => 'Sarah Johnson', 'role' => 'Parent', 'avatar' => 'https://images.unsplash.com/photo-1709127347876-114b147e270c?w=200', 'content' => 'SDN Tugu Selatan 03 has been wonderful for our daughter. The teachers are caring, the curriculum is engaging, and we\'ve seen tremendous growth in her confidence and abilities.', 'rating' => 5],
                    ['id' => 2, 'name' => 'Michael Chen', 'role' => 'Parent', 'avatar' => 'https://images.unsplash.com/photo-1732319882816-45eee81b105d?w=200', 'content' => 'The school\'s focus on both academics and character development is impressive. My son loves going to school every day, and his creativity has flourished here.', 'rating' => 5],
                    ['id' => 3, 'name' => 'Priya Sharma', 'role' => 'Parent', 'avatar' => 'https://images.unsplash.com/photo-1762354766812-86025ea7e2bd?w=200', 'content' => 'Outstanding school with excellent facilities and dedicated staff. The communication with parents is transparent, and they truly care about each child\'s individual needs.', 'rating' => 5],
                    ['id' => 4, 'name' => 'David Martinez', 'role' => 'Parent', 'avatar' => 'https://images.unsplash.com/photo-1769515370431-bd2f3da8ba38?w=200', 'content' => 'We moved here from another city, and this school exceeded our expectations. The warm welcome, professional staff, and nurturing environment make it the perfect choice.', 'rating' => 5],
                ];
                @endphp

                @foreach($testimonials as $testimonial)
                <div class="swiper-slide px-4">
                    <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 h-full relative">
                        <div class="absolute -top-4 left-8">
                            <div class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-700 rounded-full flex items-center justify-center shadow-lg">
                                <i data-lucide="quote" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>

                        <div class="flex gap-1 mb-6 pt-4">
                            @for($i = 0; $i < $testimonial['rating']; $i++)
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>
                            @endfor
                        </div>

                        <p class="text-gray-700 leading-relaxed mb-6 italic">"{{ $testimonial['content'] }}"</p>

                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                            <div class="w-14 h-14 rounded-full overflow-hidden ring-2 ring-red-100">
                                <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">{{ $testimonial['name'] }}</h4>
                                <p class="text-sm text-gray-600">{{ $testimonial['role'] }}</p>
                            </div>
                        </div>

                        <div class="absolute bottom-0 right-0 w-24 h-24 bg-gradient-to-br from-red-100/50 to-transparent rounded-3xl"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="text-center mt-8">
            <button class="px-10 py-4 bg-white text-red-600 border-2 border-red-600 rounded-xl font-semibold text-lg hover:bg-red-600 hover:text-white hover:scale-105 hover:-translate-y-1 transition-all shadow-lg active:scale-95">
                Share Your Experience
            </button>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const testimonialSwiper = new Swiper('.testimonialsSwiper', {
            modules: [window.SwiperModules?.Pagination, window.SwiperModules?.Autoplay],
            slidesPerView: 1,
            spaceBetween: 30,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 1 },
                1024: { slidesPerView: 2 },
                1280: { slidesPerView: 3 },
            },
        });
        if (typeof lucide !== 'undefined') lucide.createIcons();
    });
</script>
@endpush
