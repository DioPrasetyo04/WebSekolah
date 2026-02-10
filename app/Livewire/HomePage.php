<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class HomePage extends Component
{
    public $latestPosts = [];
    public $categories = [];
    public $selectedCategory = null; // gunakan null
    public $searchKeyword = '';

    public function mount()
    {
        $this->categories = Category::withCount('posts')->get();
        $this->loadPosts();
    }

    public function loadPosts()
    {
        $query = Post::query()
            ->with(['author', 'categories'])
            ->orderByDesc('published_at');

        if (!empty($this->selectedCategory)) {
            $categoryId = (int) $this->selectedCategory;

            $query->whereHas('categories', function ($q) use ($categoryId) {
                $q->where('categories.id', $categoryId);
            });
        }

        if (!empty($this->searchKeyword)) {
            $keyword = $this->searchKeyword;

            $query->where(function ($q) use ($keyword) {
                $q->where('title', 'like', "%{$keyword}%")
                    ->orWhere('description', 'like', "%{$keyword}%");
            });
        }

        $this->latestPosts = $query->get();
    }

    public function updatedSelectedCategory()
    {
        $this->loadPosts();
    }

    public function updatedSearchKeyword()
    {
        $this->loadPosts();
    }

    public function filterByCategory($categoryId = null)
    {
        $this->selectedCategory = $categoryId ?: null;
        $this->loadPosts();
    }

    public function clearFilters()
    {
        $this->selectedCategory = null;
        $this->searchKeyword = '';
        $this->loadPosts();
    }

    public function render()
    {
        return view('welcome', [
            'posts' => $this->latestPosts,
        ])
            ->layout('layouts.layout', [
                'title' => 'SDN 03 Tugu - Sekolah Dasar Negeri Berkualitas',
                'description' => 'Website resmi SDN 03 Tugu. Membentuk generasi unggul, berkarakter, dan berprestasi melalui pendidikan berkualitas.'
            ]);
    }
}
