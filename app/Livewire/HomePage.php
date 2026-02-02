<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Category;
use Livewire\Component;

class HomePage extends Component
{
    public $latestPosts;
    public $categories;
    public $selectedCategory = '';
    public $searchKeyword = '';

    public function mount()
    {
        // Get all categories for filter
        $this->categories = Category::withCount('posts')->get();
        
        // Get latest posts
        $this->loadPosts();
    }

    public function loadPosts()
    {
        $query = Post::published()
            ->with('author', 'categories')
            ->latest('published_at');

        // Filter by category
        if ($this->selectedCategory) {
            $query->whereHas('categories', function($q) {
                $q->where('categories.id', $this->selectedCategory);
            });
        }

        // Search by keyword
        if ($this->searchKeyword) {
            $query->where(function($q) {
                $q->where('title', 'like', '%' . $this->searchKeyword . '%')
                  ->orWhere('description', 'like', '%' . $this->searchKeyword . '%');
            });
        }

        $this->latestPosts = $query->take(6)->get();
    }

    public function updatedSelectedCategory()
    {
        $this->loadPosts();
    }

    public function updatedSearchKeyword()
    {
        $this->loadPosts();
    }

    public function filterByCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->loadPosts();
    }

    public function clearFilters()
    {
        $this->selectedCategory = '';
        $this->searchKeyword = '';
        $this->loadPosts();
    }

    public function render()
    {
        return view('livewire.home-page')
            ->layout('components.layouts.app', [
                'title' => 'SDN 03 Tugu - Sekolah Dasar Negeri Berkualitas',
                'description' => 'Website resmi SDN 03 Tugu. Membentuk generasi unggul, berkarakter, dan berprestasi melalui pendidikan berkualitas.'
            ]);
    }
}
