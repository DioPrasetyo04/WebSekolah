<div class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold mb-8">Kategori: {{ $category->name }}</h1>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <!-- Post Card (similar to news component) -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                    <a href="{{ route('posts.show', $post) }}" class="text-red-600 font-bold">Baca Selengkapnya</a>
                </div>
            @empty
                <p>Tidak ada berita di kategori ini.</p>
            @endforelse
        </div>
    </div>
</div>
