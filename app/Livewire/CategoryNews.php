<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class CategoryNews extends Component
{
    public $category;
    public $categorySlug;
    public $posts = [];

    public function mount($slug)
    {
        $this->categorySlug = $slug;
        $this->category = Category::where('slug', $slug)->firstOrFail();
        $this->loadPosts();
    }

    public function loadPosts()
    {
        $this->posts = $this->category->posts()
            ->with(['author', 'categories'])
            ->where('published_at', '<=', now())
            ->orderByDesc('published_at')
            ->get();
    }

    public function render()
    {
        $allCategories = Category::withCount('posts')->get();
        
        return view('livewire.category-news', [
            'allCategories' => $allCategories,
        ])->layout('layouts.layout', [
            'title' => $this->category->name . ' - SDN 03 Tugu',
            'description' => $this->category->description ?? 'Berita kategori ' . $this->category->name
        ]);
    }
}
