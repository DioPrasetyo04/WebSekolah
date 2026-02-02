<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\PostShow;
use App\Livewire\EkstrakurikulerPage;
use App\Livewire\PrestasiPage;

Route::get('/', HomePage::class)->name('home');
Route::get('/berita/{slug}', PostShow::class)->name('post.show');
Route::get('/ekstrakurikuler', EkstrakurikulerPage::class)->name('ekstrakurikuler');
Route::get('/prestasi', PrestasiPage::class)->name('prestasi');
