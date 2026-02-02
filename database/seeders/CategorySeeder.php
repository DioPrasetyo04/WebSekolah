<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Berita Sekolah',
                'slug' => 'berita-sekolah',
                'description' => 'Berita dan informasi terbaru seputar kegiatan sekolah',
            ],
            [
                'name' => 'Agenda Kegiatan',
                'slug' => 'agenda-kegiatan',
                'description' => 'Jadwal dan agenda kegiatan sekolah yang akan datang',
            ],
            [
                'name' => 'Prestasi',
                'slug' => 'prestasi',
                'description' => 'Prestasi yang diraih oleh siswa dan sekolah',
            ],
            [
                'name' => 'Pengumuman',
                'slug' => 'pengumuman',
                'description' => 'Pengumuman penting untuk siswa, guru, dan orang tua',
            ],
            [
                'name' => 'Ekstrakurikuler',
                'slug' => 'ekstrakurikuler',
                'description' => 'Informasi tentang kegiatan ekstrakurikuler',
            ],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']],
                [
                    'slug' => $category['slug'],
                    'description' => $category['description']
                ]
            );
        }

        $this->command->info('Sample categories created successfully!');
    }
}
