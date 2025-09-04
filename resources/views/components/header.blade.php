<!-- resources/views/component/header.blade.php -->
<header class="bg-white py-4 shadow-sm sticky-header">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="HM²" class="h-12">
            </a>

            <!-- Navigation -->
            <nav class="hidden md:flex items-center space-x-2">
                <a href="{{ route('home') }}" class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600">Home</a>

                <div class="relative group">
                    <a href="{{ route('about') }}" class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600 flex items-center">
                        About Us
                    </a>
                </div>

                <div class="relative group">
                    <a href="{{ route('portfolio') }}" class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600 flex items-center">
                        Portfolio
                    </a>
                </div>

                <div class="relative group">
                    <a href="{{ route('service') }}" class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600 flex items-center">
                        Service
                    </a>
                </div>
                <div class="relative group">
                    <button class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600 flex items-center">
                        Careers
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 p-2 hidden group-hover:block z-50">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Open Positions</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Why Join Us</a>
                    </div>
                </div>

                <div class="relative group">
                    <button class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600 flex items-center">
                        se
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 p-2 hidden group-hover:block z-50">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Our Work</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Case Studies</a>
                    </div>
                </div>
            </nav>

            <!-- CTA Button -->
            <a href="{{ route('contact') }}" class="py-2 px-6 rounded bg-gradient-to-r from-teal-500 to-amber-400 text-white font-medium hover:opacity-90 transition-opacity">Let's Talk</a>

            <!-- Mobile Menu Button (hidden on desktop) -->
            <button class="md:hidden text-gray-500 hover:text-gray-700 focus:outline-none" id="mobile-menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <div class="md:hidden hidden bg-white py-2 shadow-inner" id="mobile-menu">
        <div class="container mx-auto px-4">
            <a href="{{ route('home') }}" class="block py-2 border-b border-gray-100 text-gray-800 hover:text-blue-600">Home</a>

            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex justify-between w-full py-2 border-b border-gray-100 text-gray-800 hover:text-blue-600">
                    What We Do
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" class="pl-4">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Service 1</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Service 2</a>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex justify-between w-full py-2 border-b border-gray-100 text-gray-800 hover:text-blue-600">
                    Clients
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" class="pl-4">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Client Type 1</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Client Type 2</a>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex justify-between w-full py-2 border-b border-gray-100 text-gray-800 hover:text-blue-600">
                    Careers
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" class="pl-4">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Open Positions</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Why Join Us</a>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex justify-between w-full py-2 border-b border-gray-100 text-gray-800 hover:text-blue-600">
                    Portfolio
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" class="pl-4">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Our Work</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Case Studies</a>
                </div>
            </div>

            {{-- <a href="{{ route('blog') }}" class="block py-2 border-b border-gray-100 text-gray-800 hover:text-blue-600">Blog</a> --}}

            <div class="mt-4">
                <a href="{{ route('contact') }}" class="block w-full text-center py-2 px-4 rounded bg-gradient-to-r from-teal-500 to-amber-400 text-white font-medium hover:opacity-90 transition-opacity">Let's Talk</a>
            </div>
        </div>
    </div>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // For Alpine.js dropdowns in mobile menu
    // Make sure to include Alpine.js in your main layout if you use this
    // <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</script>

<style>
.sticky-header {
    position: sticky;
    top: 0;
    z-index: 1000;
    background: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
</style>
