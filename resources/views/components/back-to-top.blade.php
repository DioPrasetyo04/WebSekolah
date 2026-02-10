<div 
    x-data="{ 
        showButton: false,
        scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }"
    @scroll.window="showButton = (window.pageYOffset > 300)"
>
    <button
        x-show="showButton"
        @click="scrollToTop"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-50 translate-y-24"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-50 translate-y-24"
        class="fixed bottom-8 right-8 z-50 w-14 h-14 bg-gradient-to-br from-red-600 to-red-700 text-white rounded-full shadow-2xl hover:shadow-red-500/50 flex items-center justify-center hover:scale-110 hover:-translate-y-1 active:scale-90 transition-all"
        aria-label="Back to top"
    >
        <i data-lucide="arrow-up" class="w-6 h-6"></i>
    </button>
</div>
