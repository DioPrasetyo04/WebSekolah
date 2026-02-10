import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, EffectFade } from 'swiper/modules';

// Register Alpine plugins
Alpine.plugin(intersect);

// Make Alpine available globally
window.Alpine = Alpine;

// Make Swiper available globally
window.Swiper = Swiper;
window.SwiperModules = { Navigation, Pagination, Autoplay, EffectFade };

// Start Alpine
Alpine.start();

// Initialize Lucide icons after page load
document.addEventListener('DOMContentLoaded', function() {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});

// Reinitialize icons after Livewire updates
document.addEventListener('livewire:navigated', function() {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
