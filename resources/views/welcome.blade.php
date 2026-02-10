<div class="min-h-screen bg-white">
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Main Content -->
    <main>
        <!-- Hero Slider -->
        @include('components.hero-slider')

        <!-- School Introduction -->
        @include('components.school-intro')

        <!-- Why Choose Us -->
        @include('components.why-choose')

        <!-- Academic Programs -->
        @include('components.programs')

        <!-- Gallery -->
        @include('components.gallery')

        <!-- Latest News Section (Uses $posts from controller) -->
        @include('components.news', ['posts' => $posts])

        <!-- Testimonials -->
        @include('components.testimonials')

        <!-- Contact Section -->
        @include('components.contact')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Back to Top Button -->
    @include('components.back-to-top')
</div>
