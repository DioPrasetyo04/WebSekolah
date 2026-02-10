<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post;
    public $isDemo = false;

    public function mount(string $slug)
    {
        // Try to find real post first
        $realPost = Post::where('slug', $slug)
            ->where('status', 'published')
            ->with(['author', 'categories', 'media' => function ($q) {
                $q->orderBy('id', 'asc');
            }])
            ->first();

        if ($realPost) {
            $this->post = $realPost;
        } else {
            // Demo mode with dummy data
            $this->isDemo = true;
            $this->post = (object) [
                'title' => 'Contoh Berita Sekolah - ' . ucfirst(str_replace('-', ' ', $slug)),
                'slug' => $slug,
                'description' => '
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <h2>Kegiatan Sekolah</h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                    <h2>Prestasi Siswa</h2>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>

                    <blockquote>
                        "Pendidikan adalah senjata paling ampuh yang bisa kamu gunakan untuk mengubah dunia." - Nelson Mandela
                    </blockquote>

                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                ',
                'thumbnail' => 'https://picsum.photos/seed/' . $slug . '/1200/600',
                'published_at' => now()->subDays(rand(1, 7)),
                'created_at' => now()->subDays(rand(1, 7)),
                'author' => (object) ['name' => 'Admin SDN 03 Tugu'],
                'categories' => collect([
                    (object) ['id' => 1, 'name' => 'Informasi', 'slug' => 'informasi'],
                ]),
            ];
        }
    }

    public function render()
    {
        // Get related posts (only if not in demo mode)
        $relatedPosts = collect();

        if (!$this->isDemo && $this->post instanceof Post) {
            $relatedPosts = Post::where('status', 'published')
                ->where('id', '!=', $this->post->id)
                ->whereHas('categories', function ($query) {
                    $query->whereIn('categories.id', $this->post->categories->pluck('id'));
                })
                ->latest('published_at')
                ->take(3)
                ->get();
        }

        return view('home.show', [
            'relatedPosts' => $relatedPosts,
        ])->layout('layouts.layout', [
            'title' => $this->post->title . ' - SDN 03 Tugu',
        ]);
    }
}
