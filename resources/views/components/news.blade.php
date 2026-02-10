<section 
    id="news" 
    class="py-20 bg-gradient-to-b from-gray-50 to-white"
    x-data="{ inView: false }"
    x-intersect.once="inView = true"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" x-show="inView" x-transition.opacity.duration.600ms>
            <span class="inline-block px-6 py-2 bg-red-100 text-red-600 rounded-full text-sm font-semibold tracking-wide uppercase mb-4">Latest News</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">What's Happening at School</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Stay updated with the latest news, events, and achievements from our school community.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts ?? [] as $index => $post)
            <article 
                x-show="inView"
                x-transition.scale.origin.bottom.duration.600ms
                style="transition-delay: {{ $index * 150 }}ms;"
                onclick="window.location.href='{{ route('posts.show', $post) }}'"
                class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 cursor-pointer hover:-translate-y-2"
            >
                <div class="relative h-56 overflow-hidden">
                    @if($post->thumbnail)
                        <img src="{{ Storage::url($post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    @else
                        <img src="https://images.unsplash.com/photo-1588072432904-d3ef0b9f08df?w=600" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        @if($post->categories->isNotEmpty())
                            <span class="px-4 py-1.5 bg-red-600 text-white text-xs font-bold rounded-full uppercase tracking-wide shadow-lg">{{ $post->categories->first()->name }}</span>
                        @endif
                    </div>
                    <div class="absolute bottom-4 right-4 flex items-center gap-1.5 px-3 py-1.5 bg-white/90 backdrop-blur-sm rounded-full">
                        <i data-lucide="clock" class="w-3.5 h-3.5 text-gray-600"></i>
                        <span class="text-xs font-semibold text-gray-700">5 min read</span>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3 text-gray-500">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">{{ $post->published_at->format('F d, Y') }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-red-600 transition-colors leading-snug">{{ $post->title }}</h3>
                    <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">{{ strip_tags($post->description) }}</p>
                    
                    <div class="flex items-center gap-2 text-red-600 font-semibold group-hover:gap-3 transition-all">
                        <a href="{{ route('posts.show', $post) }}" class="flex items-center gap-2">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <div class="h-1 bg-gradient-to-r from-red-600 to-red-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            </article>
            @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-gray-500 text-lg">No news articles available at the moment.</p>
            </div>
            @endforelse
        </div>

        @if(($posts ?? collect())->isNotEmpty())
        <div class="mt-12 text-center" x-show="inView" x-transition.opacity style="transition-delay: 600ms;">
            <button class="px-10 py-4 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-xl font-semibold text-lg shadow-2xl hover:shadow-red-500/50 hover:scale-105 hover:-translate-y-1 transition-all active:scale-95">
                View All News
            </button>
        </div>
        @endif
    </div>
</section>
