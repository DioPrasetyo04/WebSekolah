<div>
    {{-- Hero Section with Post Title --}}
    <section
        class="relative min-h-[40vh] flex items-center justify-center bg-gradient-to-br from-slate-900 via-slate-900 to-blue-900/30 pt-20">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,...')] opacity-5"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-slate-900"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-16">
            {{-- Categories --}}
            <div class="flex flex-wrap items-center justify-center gap-2 mb-6">
                @foreach ($post->categories as $category)
                    <span
                        class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs font-medium rounded-full border border-blue-500/30">
                        {{ $category->name }}
                    </span>
                @endforeach
            </div>

            {{-- Title --}}
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight mb-6">
                {{ $post->title }}
            </h1>

            {{-- Meta Info --}}
            <div class="flex flex-wrap items-center justify-center gap-4 text-slate-400 text-sm">
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>{{ $post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y') }}</span>
                </div>
                @if ($post->author)
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span>{{ $post->author->name }}</span>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="py-16 bg-slate-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Featured Image --}}
            {{-- Featured Media Carousel --}}
            @if ($post->medias && $post->medias->count())
                <div x-data="{
                    index: 0,
                    total: {{ $post->medias->count() }},
                    startX: 0,
                    endX: 0,
                    next() { this.index = (this.index + 1) % this.total },
                    prev() { this.index = (this.index - 1 + this.total) % this.total },
                    onTouchStart(e) { this.startX = e.touches[0].clientX },
                    onTouchEnd(e) {
                        this.endX = e.changedTouches[0].clientX;
                        if (this.startX - this.endX > 50) this.next();
                        if (this.endX - this.startX > 50) this.prev();
                    }
                }"
                    class="mb-12 rounded-2xl overflow-hidden border border-slate-800 bg-slate-950"
                    @touchstart="onTouchStart($event)" @touchend="onTouchEnd($event)">
                    {{-- Slides --}}
                    <div class="relative aspect-video w-full overflow-hidden">

                        @foreach ($post->medias as $i => $media)
                            <div x-show="index === {{ $i }}" x-transition.opacity.duration.300ms
                                class="absolute inset-0 w-full h-full">
                                @if ($media->type === 'video')
                                    <video controls class="w-full h-full object-cover" preload="metadata">
                                        <source src="{{ $media->file_url}}" type="video/mp4">
                                        Browser tidak mendukung video.
                                    </video>
                                @else
                                    <img src="{{$media->file_url}}" alt="{{ $post->title }}"
                                        class="w-full h-full object-cover">
                                @endif
                            </div>
                        @endforeach

                        {{-- Prev --}}
                        <button type="button" @click="prev()"
                            class="absolute left-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-black/50 hover:bg-black/70 flex items-center justify-center text-white">
                            ‹
                        </button>

                        {{-- Next --}}
                        <button type="button" @click="next()"
                            class="absolute right-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-black/50 hover:bg-black/70 flex items-center justify-center text-white">
                            ›
                        </button>

                        {{-- Dots --}}
                        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2">
                            @foreach ($post->medias as $i => $media)
                                <button type="button" @click="index = {{ $i }}"
                                    class="w-2.5 h-2.5 rounded-full"
                                    :class="index === {{ $i }} ? 'bg-blue-500' : 'bg-white/30'"></button>
                            @endforeach
                        </div>

                    </div>

                    {{-- Caption media type --}}
                    <div class="px-4 py-3 text-xs text-slate-400 border-t border-slate-800">
                        <span x-text="`Media ${index + 1} / ${total}`"></span>
                    </div>
                </div>
            @endif


            {{-- Content --}}
            <article class="prose prose-lg prose-invert prose-blue max-w-none">
                <div class="text-slate-300 leading-relaxed">
                    {!! $post->description !!}
                </div>
            </article>

            {{-- Share Buttons --}}
            <div class="mt-12 pt-8 border-t border-slate-800">
                <div class="flex flex-wrap items-center gap-4">
                    <span class="text-slate-400 text-sm font-medium">Bagikan:</span>
                    <div class="flex items-center gap-2">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                            target="_blank"
                            class="w-10 h-10 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}"
                            target="_blank"
                            class="w-10 h-10 bg-slate-800 hover:bg-sky-500 rounded-lg flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . request()->url()) }}"
                            target="_blank"
                            class="w-10 h-10 bg-slate-800 hover:bg-green-600 rounded-lg flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Back Button --}}
            <div class="mt-8">
                <a href="{{ route('home') }}#berita"
                    class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Berita
                </a>
            </div>
        </div>
    </section>

    {{-- Related Posts --}}
    @if ($relatedPosts->count() > 0)
        <section class="py-16 bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-white mb-8">Berita Terkait</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($relatedPosts as $relatedPost)
                        <a href="{{ route('post.show', $relatedPost->slug) }}"
                            class="group glass rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all">
                            {{-- Thumbnail --}}
                            <div class="aspect-video bg-slate-800 overflow-hidden">
                                @if ($relatedPost->thumbnail)
                                    <img src="{{ Storage::url($relatedPost->thumbnail) }}"
                                        alt="{{ $relatedPost->title }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                @else
                                    <div class="w-full h-full flex items-center justify-center">
                                        <svg class="w-12 h-12 text-slate-600" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            {{-- Content --}}
                            <div class="p-6">
                                <div class="text-slate-500 text-xs mb-2">
                                    {{ $relatedPost->published_at ? $relatedPost->published_at->format('d M Y') : $relatedPost->created_at->format('d M Y') }}
                                </div>
                                <h3
                                    class="text-white font-semibold mb-2 group-hover:text-blue-400 transition-colors line-clamp-2">
                                    {{ $relatedPost->title }}
                                </h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</div>
