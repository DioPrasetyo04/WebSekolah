<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\PostShow;
use App\Livewire\EkstrakurikulerPage;
use App\Livewire\PrestasiPage;
use App\Livewire\CategoryNews;

Route::get('/', HomePage::class)->name('home');
Route::get('/berita/{slug}', PostShow::class)->name('posts.show');
Route::get('/kategori/{slug}', CategoryNews::class)->name('category.news');
Route::get('/ekstrakurikuler', EkstrakurikulerPage::class)->name('ekstrakurikuler');
Route::get('/prestasi', PrestasiPage::class)->name('prestasi');
