{{-- Business Services Section --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center mb-4">
            <p class="text-blue-600 font-medium mb-2">Who We Serve?</p>
            <h2 class="text-4xl font-bold text-gray-900 mb-16">
                Customized Solutions for Diverse Business Needs
            </h2>
        </div>

        {{-- Services Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            {{-- Small Business --}}
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/small-business.jpg') }}"
                         alt="Small Business Team Meeting"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">

                    {{-- Icon Overlay --}}
                    <div class="absolute bottom-4 left-4">
                        <div class="bg-orange-500 rounded-full p-3">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Small Business</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        With our consultative approach, we take the time to fully grasp your unique challenges and objectives. We provide scalable IT solutions, ranging from cloud computing to cybersecurity, that evolve alongside your business.
                    </p>
                    {{-- <a href="#"
                       class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
                        Discover More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a> --}}
                </div>
            </div>

            {{-- Enterprise --}}
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/enterprise.jpg') }}"
                         alt="Enterprise Presentation"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">

                    {{-- Icon Overlay --}}
                    <div class="absolute bottom-4 left-4">
                        <div class="bg-orange-500 rounded-full p-3">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Enterprise</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        We design enterprise solutions with a thorough understanding of your organization's unique requirements. Through careful consultation and collaboration, we provide strategic technology that fosters innovation, enhances operational efficiency, and ensures security.
                    </p>
                    {{-- <a href="#"
                       class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
                        Discover More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a> --}}
                </div>
            </div>

            {{-- Partnerships Network --}}
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/partnerships.jpg') }}"
                         alt="Global Partnership Network"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">

                    {{-- Icon Overlay --}}
                    <div class="absolute bottom-4 left-4">
                        <div class="bg-orange-500 rounded-full p-3">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.54 8H16c-.8 0-1.54.37-2 1l-3.72 5.58L8.54 11.4A1.5 1.5 0 0 0 7.16 11H3v2h3.54l2.26 6.8c.18.54.69.95 1.26 1.05.57.1 1.15-.2 1.42-.71L12 18.5l.52 1.64c.27.51.85.81 1.42.71.57-.1 1.08-.51 1.26-1.05L17.46 13H20v9h-4z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Partnerships Network</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        From unified software systems to secure data sharing, we help you implement the tools that promote smooth communication and drive collaborative growth.
                    </p>
                    {{-- <a href="#"
                       class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
                        Discover More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Consultation CTA Section --}}
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-gray-600 text-lg leading-relaxed mb-8">
            No matter the size of your company, we take a consultative approach to ensure optimal outcomes. MegaMinds listens carefully and asks the right questions to understand your unique needs. Our goal is to guide you toward the best solutions for your success.
        </p>

        <a href="{{ route('contact') }}"
           class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-8 rounded-lg transition-colors duration-300 transform hover:scale-105">
            Let's Talk About Your Project
        </a>
    </div>
</section>

{{-- Optional: Add some custom styles --}}
@push('styles')
<style>
    .group:hover .group-hover\:scale-105 {
        transform: scale(1.05);
    }
</style>
@endpush
