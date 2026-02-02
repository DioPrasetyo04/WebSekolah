<?php

namespace App\Livewire;

use Livewire\Component;

class EkstrakurikulerPage extends Component
{
    public $ekstrakurikuler = [];

    public function mount()
    {
        $this->ekstrakurikuler = [
            [
                'name' => 'Pramuka',
                'category' => 'Kepemimpinan',
                'description' => 'Kegiatan kepanduan yang melatih kemandirian, kepemimpinan, dan keterampilan bertahan hidup. Siswa belajar tentang alam, kemah, dan nilai-nilai kepramukaan.',
                'schedule' => 'Setiap Jumat, 14:00 - 16:00',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>',
                'image' => 'https://picsum.photos/seed/pramuka/600/400',
            ],
            [
                'name' => 'Seni Tari',
                'category' => 'Seni & Budaya',
                'description' => 'Melestarikan budaya Indonesia melalui tarian tradisional dan modern. Siswa belajar berbagai tarian daerah dan koreografi kontemporer.',
                'schedule' => 'Setiap Selasa & Kamis, 14:00 - 15:30',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>',
                'image' => 'https://picsum.photos/seed/tari/600/400',
            ],
            [
                'name' => 'Drumband',
                'category' => 'Musik',
                'description' => 'Melatih kerjasama tim dan kemampuan bermusik melalui marching band. Termasuk pelatihan alat musik perkusi, brass, dan color guard.',
                'schedule' => 'Setiap Rabu & Sabtu, 14:00 - 16:00',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>',
                'image' => 'https://picsum.photos/seed/drumband/600/400',
            ],
            [
                'name' => 'Futsal',
                'category' => 'Olahraga',
                'description' => 'Mengembangkan kemampuan olahraga sepak bola dalam ruangan. Melatih teknik dasar, strategi permainan, dan sportivitas.',
                'schedule' => 'Setiap Senin & Rabu, 15:00 - 17:00',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"/>',
                'image' => 'https://picsum.photos/seed/futsal/600/400',
            ],
            [
                'name' => 'Pencak Silat',
                'category' => 'Bela Diri',
                'description' => 'Seni bela diri tradisional Indonesia yang mengajarkan teknik pertahanan diri, disiplin, dan penghormatan terhadap budaya.',
                'schedule' => 'Setiap Selasa & Jumat, 15:00 - 16:30',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
                'image' => 'https://picsum.photos/seed/silat/600/400',
            ],
            [
                'name' => 'English Club',
                'category' => 'Bahasa',
                'description' => 'Meningkatkan kemampuan bahasa Inggris melalui kegiatan menyenangkan seperti games, storytelling, dan public speaking.',
                'schedule' => 'Setiap Kamis, 14:00 - 15:30',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                'image' => 'https://picsum.photos/seed/english/600/400',
            ],
            [
                'name' => 'Seni Lukis',
                'category' => 'Seni & Budaya',
                'description' => 'Mengekspresikan kreativitas melalui seni rupa. Siswa belajar teknik menggambar, mewarnai, dan berbagai media seni.',
                'schedule' => 'Setiap Senin, 14:00 - 15:30',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>',
                'image' => 'https://picsum.photos/seed/lukis/600/400',
            ],
            [
                'name' => 'Robotika',
                'category' => 'Teknologi',
                'description' => 'Mengenalkan dunia robotika dan programming dasar. Siswa belajar merakit robot sederhana dan dasar-dasar coding.',
                'schedule' => 'Setiap Sabtu, 09:00 - 11:00',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
                'image' => 'https://picsum.photos/seed/robotika/600/400',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.ekstrakurikuler-page')
            ->layout('components.layouts.app', [
                'title' => 'Ekstrakurikuler - SDN 03 Tugu',
            ]);
    }
}
