<section 
    id="contact" 
    class="py-20 bg-white"
    x-data="{ inView: false }"
    x-intersect.once="inView = true"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" x-show="inView" x-transition.opacity.duration.600ms>
            <span class="inline-block px-6 py-2 bg-red-100 text-red-600 rounded-full text-sm font-semibold tracking-wide uppercase mb-4">Get In Touch</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Contact Us</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
        </div>

        @php
        $contactInfo = [
            ['icon' => 'map-pin', 'title' => 'Address', 'content' => 'Jl. Tugu Selatan No. 03, Jakarta Utara, DKI Jakarta 14260', 'gradient' => 'from-red-500 to-red-600'],
            ['icon' => 'phone', 'title' => 'Phone', 'content' => '+62 21 1234 5678', 'gradient' => 'from-blue-500 to-blue-600'],
            ['icon' => 'mail', 'title' => 'Email', 'content' => 'info@sdntuguselatan03.sch.id', 'gradient' => 'from-green-500 to-green-600'],
            ['icon' => 'clock', 'title' => 'Office Hours', 'content' => 'Monday - Friday: 7:00 AM - 3:00 PM', 'gradient' => 'from-purple-500 to-purple-600'],
        ];
        @endphp

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            @foreach($contactInfo as $index => $info)
            <div 
                x-show="inView"
                x-transition.scale.duration.600ms
                style="transition-delay: {{ $index * 100 }}ms;"
                class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 text-center hover:-translate-y-2"
            >
                <div class="w-14 h-14 bg-gradient-to-br {{ $info['gradient'] }} rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg hover:rotate-12 transition-transform">
                    <i data-lucide="{{ $info['icon'] }}" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">{{ $info['title'] }}</h3>
                <p class="text-sm text-gray-600 leading-relaxed">{{ $info['content'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Contact Form (Livewire Component) -->
            <div x-show="inView" x-transition.opacity style="transition-delay: 400ms;">
                @livewire('contact-form')
            </div>

            <!-- Google Maps -->
            <div 
                x-show="inView"
                x-transition.opacity
                style="transition-delay: 400ms;"
                class="rounded-3xl overflow-hidden shadow-xl border border-gray-100 h-full min-h-[500px]"
            >
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8690894469937!2d106.82879931476898!3d-6.143055395526126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNorth%20Jakarta%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1634567890123!5m2!1sen!2sid"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    title="School Location"
                    class="w-full h-full"
                ></iframe>
            </div>
        </div>
    </div>
</section>
