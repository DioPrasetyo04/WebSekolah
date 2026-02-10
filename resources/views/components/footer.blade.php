<footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-96 h-96 bg-red-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- School Info -->
                <div>
                    <div class="flex items-center gap-3 mb-6 hover:scale-105 transition-transform cursor-pointer">
                        <div class="w-14 h-14 bg-white rounded-xl shadow-lg p-1.5">
                            <img src="{{ asset('images/logo.png') }}" alt="School Logo" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">SDN Tugu Selatan 03</h3>
                            <p class="text-sm text-gray-400">Jakarta Utara</p>
                        </div>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Nurturing young minds and building bright futures through quality education and innovative learning.
                    </p>
                    <div class="flex gap-3">
                        @foreach(['facebook', 'instagram', 'twitter', 'youtube'] as $social)
                        <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-white/20 hover:-translate-y-1 transition-all">
                            <i data-lucide="{{ $social }}" class="w-5 h-5"></i>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold text-lg mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        @foreach(['About Us' => '#about-school', 'Admission' => '#contact', 'Academic Programs' => '#programs', 'News & Events' => '#news', 'Gallery' => '#gallery', 'Contact' => '#contact'] as $label => $href)
                        <li>
                            <a href="{{ $href }}" class="text-gray-400 hover:text-white transition-all inline-flex items-center group hover:translate-x-1">
                                <span class="w-0 h-0.5 bg-red-500 group-hover:w-4 transition-all mr-2"></span>
                                {{ $label }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Programs -->
                <div>
                    <h3 class="font-bold text-lg mb-6">Our Programs</h3>
                    <ul class="space-y-3">
                        @foreach(['Core Curriculum', 'Science & Technology', 'Arts & Creativity', 'Music & Performance', 'Language Studies', 'Physical Education'] as $program)
                        <li>
                            <a href="#programs" class="text-gray-400 hover:text-white transition-all inline-flex items-center group hover:translate-x-1">
                                <span class="w-0 h-0.5 bg-red-500 group-hover:w-4 transition-all mr-2"></span>
                                {{ $program }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="font-bold text-lg mb-6">Contact Info</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3 hover:translate-x-1 transition-transform">
                            <div class="w-10 h-10 bg-red-600/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="map-pin" class="w-5 h-5 text-red-500"></i>
                            </div>
                            <p class="text-gray-400 leading-relaxed">Jl. Tugu Selatan No. 03,<br>Jakarta Utara, DKI Jakarta 14260</p>
                        </div>
                        <div class="flex items-center gap-3 hover:translate-x-1 transition-transform">
                            <div class="w-10 h-10 bg-blue-600/20 rounded-lg flex items-center justify-center">
                                <i data-lucide="phone" class="w-5 h-5 text-blue-500"></i>
                            </div>
                            <a href="tel:+622112345678" class="text-gray-400 hover:text-white transition-colors">+62 21 1234 5678</a>
                        </div>
                        <div class="flex items-center gap-3 hover:translate-x-1 transition-transform">
                            <div class="w-10 h-10 bg-green-600/20 rounded-lg flex items-center justify-center">
                                <i data-lucide="mail" class="w-5 h-5 text-green-500"></i>
                            </div>
                            <a href="mailto:info@sdntuguselatan03.sch.id" class="text-gray-400 hover:text-white transition-colors">info@sdntuguselatan03.sch.id</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="border-t border-gray-700 pt-12 mb-12">
                <div class="max-w-2xl mx-auto text-center">
                    <h3 class="text-2xl font-bold mb-4">Stay Updated</h3>
                    <p class="text-gray-400 mb-6">Subscribe to our newsletter for the latest news and updates</p>
                    <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                        <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-3 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-red-500 transition-all">
                        <button class="px-8 py-3 bg-gradient-to-r from-red-600 to-red-700 rounded-xl font-semibold hover:shadow-lg hover:shadow-red-500/50 hover:scale-105 active:scale-95 transition-all">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-400 text-sm">© 2026 SDN Tugu Selatan 03. All rights reserved.</p>
                <div class="flex gap-6">
                    @foreach(['Privacy Policy', 'Terms of Service', 'Sitemap'] as $link)
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">{{ $link }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>
