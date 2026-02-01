<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

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
                'description' => 'Berita dan informasi terbaru seputar kegiatan sekolah',
            ],
            [
                'name' => 'Agenda Kegiatan',
                'description' => 'Jadwal dan agenda kegiatan sekolah yang akan datang',
            ],
            [
                'name' => 'Prestasi',
                'description' => 'Prestasi yang diraih oleh siswa dan sekolah',
            ],
            [
                'name' => 'Pengumuman',
                'description' => 'Pengumuman penting untuk siswa, guru, dan orang tua',
            ],
            [
                'name' => 'Ekstrakurikuler',
                'description' => 'Informasi tentang kegiatan ekstrakurikuler',
            ],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']],
                ['description' => $category['description']]
            );
        }

        $this->command->info('Sample categories created successfully!');
    }
}
