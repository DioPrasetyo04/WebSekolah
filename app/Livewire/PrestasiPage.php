<?php

namespace App\Livewire;

use Livewire\Component;

class PrestasiPage extends Component
{
    public $allPrestasi = [];
    public $prestasi = [];
    public $selectedCategory = '';
    public $searchKeyword = '';
    public $categories = [];

    public function mount()
    {
        $this->allPrestasi = [
            [
                'title' => 'Juara 1 Lomba Cerdas Cermat Tingkat Kecamatan',
                'category' => 'Akademik',
                'year' => '2025',
                'level' => 'Kecamatan',
                'description' => 'Tim cerdas cermat SDN 03 Tugu berhasil meraih juara 1 dalam lomba tingkat kecamatan yang diikuti oleh 24 sekolah dasar.',
                'image' => 'https://picsum.photos/seed/prestasi1/600/400',
                'students' => ['Ahmad Rizki', 'Siti Nurhaliza', 'Budi Santoso'],
            ],
            [
                'title' => 'Juara 2 Olimpiade Matematika',
                'category' => 'Akademik',
                'year' => '2025',
                'level' => 'Kabupaten',
                'description' => 'Siswa SDN 03 Tugu meraih juara 2 dalam Olimpiade Matematika tingkat Kabupaten.',
                'image' => 'https://picsum.photos/seed/prestasi2/600/400',
                'students' => ['Dewi Lestari'],
            ],
            [
                'title' => 'Juara 1 Lomba Tari Tradisional',
                'category' => 'Seni',
                'year' => '2025',
                'level' => 'Kecamatan',
                'description' => 'Tim tari SDN 03 Tugu mempersembahkan tarian tradisional dan meraih juara 1.',
                'image' => 'https://picsum.photos/seed/prestasi3/600/400',
                'students' => ['Rina Kusuma', 'Yanti Mulyani', 'Linda Sari', 'Maya Putri', 'Dinda Ayu'],
            ],
            [
                'title' => 'Juara 3 Lomba Drumband',
                'category' => 'Seni',
                'year' => '2024',
                'level' => 'Kabupaten',
                'description' => 'Tim drumband SDN 03 Tugu berhasil meraih juara 3 dalam lomba drumband tingkat Kabupaten.',
                'image' => 'https://picsum.photos/seed/prestasi4/600/400',
                'students' => ['Tim Drumband SDN 03 Tugu'],
            ],
            [
                'title' => 'Juara 1 Lomba Futsal',
                'category' => 'Olahraga',
                'year' => '2024',
                'level' => 'Kecamatan',
                'description' => 'Tim futsal putra SDN 03 Tugu meraih juara 1 dalam turnamen futsal antar SD se-kecamatan.',
                'image' => 'https://picsum.photos/seed/prestasi5/600/400',
                'students' => ['Tim Futsal SDN 03 Tugu'],
            ],
            [
                'title' => 'Juara 2 Lomba Pidato Bahasa Indonesia',
                'category' => 'Akademik',
                'year' => '2024',
                'level' => 'Kecamatan',
                'description' => 'Siswa SDN 03 Tugu berhasil meraih juara 2 dalam lomba pidato Bahasa Indonesia.',
                'image' => 'https://picsum.photos/seed/prestasi6/600/400',
                'students' => ['Anisa Rahma'],
            ],
            [
                'title' => 'Juara 1 Lomba Kebersihan Sekolah',
                'category' => 'Lingkungan',
                'year' => '2024',
                'level' => 'Kabupaten',
                'description' => 'SDN 03 Tugu meraih juara 1 sebagai sekolah terbersih dan ternyaman tingkat Kabupaten.',
                'image' => 'https://picsum.photos/seed/prestasi7/600/400',
                'students' => ['Seluruh Warga Sekolah'],
            ],
            [
                'title' => 'Juara 3 Lomba Pramuka',
                'category' => 'Kepramukaan',
                'year' => '2024',
                'level' => 'Kecamatan',
                'description' => 'Regu pramuka SDN 03 Tugu meraih juara 3 dalam perlombaan pramuka tingkat kecamatan.',
                'image' => 'https://picsum.photos/seed/prestasi8/600/400',
                'students' => ['Regu Pramuka SDN 03 Tugu'],
            ],
        ];

        // Get unique categories
        $this->categories = collect($this->allPrestasi)->pluck('category')->unique()->values()->toArray();
        
        $this->filterPrestasi();
    }

    public function filterPrestasi()
    {
        $filtered = collect($this->allPrestasi);

        // Filter by category
        if ($this->selectedCategory) {
            $filtered = $filtered->filter(function ($item) {
                return $item['category'] === $this->selectedCategory;
            });
        }

        // Search by keyword
        if ($this->searchKeyword) {
            $keyword = strtolower($this->searchKeyword);
            $filtered = $filtered->filter(function ($item) use ($keyword) {
                return str_contains(strtolower($item['title']), $keyword) ||
                       str_contains(strtolower($item['description']), $keyword) ||
                       str_contains(strtolower($item['category']), $keyword) ||
                       str_contains(strtolower($item['level']), $keyword);
            });
        }

        $this->prestasi = $filtered->values()->toArray();
    }

    public function updatedSelectedCategory()
    {
        $this->filterPrestasi();
    }

    public function updatedSearchKeyword()
    {
        $this->filterPrestasi();
    }

    public function filterByCategory($category)
    {
        $this->selectedCategory = $category;
        $this->filterPrestasi();
    }

    public function clearFilters()
    {
        $this->selectedCategory = '';
        $this->searchKeyword = '';
        $this->filterPrestasi();
    }

    public function render()
    {
        return view('livewire.prestasi-page')
            ->layout('components.layouts.app', [
                'title' => 'Prestasi - SDN 03 Tugu',
            ]);
    }
}
