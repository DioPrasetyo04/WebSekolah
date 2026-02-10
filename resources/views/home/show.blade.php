<div class="min-h-screen bg-gray-50 pt-32 pb-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-8 text-sm text-gray-500">
            <a href="/" class="hover:text-red-600 transition-colors">Home</a>
            <span class="mx-2">/</span>
            <span class="text-gray-900 truncate">{{ $post->title }}</span>
        </nav>

        <article class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
            <!-- Header Image -->
            <div class="relative h-96 w-full">
                @if($post->thumbnail)
                    <img src="{{ Storage::url($post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                @else
                    <img src="https://images.unsplash.com/photo-1588072432904-d3ef0b9f08df?w=1200" alt="{{ $post->title }}" class="w-full h-full object-cover">
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                <div class="absolute bottom-0 left-0 p-8 md:p-12 w-full">
                    <div class="flex items-center gap-4 mb-4 text-white/90 text-sm font-medium">
                        @if($post->categories->isNotEmpty())
                            <span class="px-3 py-1 bg-red-600 rounded-full text-white">{{ $post->categories->first()->name }}</span>
                        @endif
                        <span class="flex items-center gap-1">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            {{ $post->published_at->format('F d, Y') }}
                        </span>
                         <span class="flex items-center gap-1">
                            <i data-lucide="user" class="w-4 h-4"></i>
                            {{ $post->author->name ?? 'Admin' }}
                        </span>
                    </div>
                    <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight mb-2">{{ $post->title }}</h1>
                </div>
            </div>

            <!-- Content -->
            <div class="p-8 md:p-12">
                <div class="prose prose-lg prose-red max-w-none">
                    {!! $post->description !!}
                </div>

                <!-- Share / Tags -->
                <div class="mt-12 pt-8 border-t border-gray-100 flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-2">
                        <span class="text-gray-600 font-medium">Tags:</span>
                        <div class="flex flex-wrap gap-2">
                            @foreach($post->categories as $category)
                                <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-sm hover:bg-red-50 hover:text-red-600 transition-colors cursor-pointer">
                                    #{{ $category->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Back Button -->
        <div class="mt-12 text-center">
            <a href="/#news" class="inline-flex items-center gap-2 px-8 py-3 bg-white border border-gray-200 text-gray-700 rounded-xl font-medium hover:bg-gray-50 hover:border-red-200 hover:text-red-600 transition-all shadow-sm">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                Back to News
            </a>
        </div>
    </div>
</div>
