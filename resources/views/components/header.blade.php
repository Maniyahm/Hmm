<!-- resources/views/component/header.blade.php -->
<header class="bg-white py-4 shadow-sm">
    <div class="container mx-60 px-40">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="3" class="flex items-center ml-20 h-20">
                <img src="{{ asset('images/logo.png') }}" alt="HM²" class="h-12">
            </a>
            
            <!-- Navigation -->
            <nav class="hidden md:flex items-center space-x-2">
                <a href="{{ route('home')}}" class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600">Home</a>
                
                <div class="relative group">
                    <button class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600 flex items-center">
                        What We Do
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 p-2 hidden group-hover:block z-50">
                        <!-- Dropdown menu items go here -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Service 1</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Service 2</a>
                    </div>
                </div>
                
                <div class="relative group">
                    <div class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 p-2 hidden group-hover:block z-50">
                        <!-- Dropdown menu items go here -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Client Type 1</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Client Type 2</a>
                    </div>
                </div>
                
                <div class="relative group">
                    <button class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600 flex items-center">
                        Careers
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 p-2 hidden group-hover:block z-50">
                        <!-- Dropdown menu items go here -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Open Positions</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Why Join Us</a>
                    </div>
                </div>
                
                <div class="relative group">
                    <button class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600 flex items-center">
                        
                       Portfolio
                    </button>
                    <div class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 p-2 hidden group-hover:block z-50">
                        <!-- Dropdown menu items go here -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">About Us</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Our Team</a>
                    </div>
                </div>
                
                <a href="3" class="py-2 px-3 font-medium text-gray-800 hover:text-blue-600">Blog</a>
                
                {{-- <span class="text-green-500 py-2 px-3 font-medium">We're Hiring!</span> --}}
            </nav>
            
            <!-- CTA Button -->
            <a href="{{route('contact')}}" class="py-2 px-6 rounded bg-gradient-to-r from-teal-500 to-amber-400 text-white font-medium hover:opacity-90 transition-opacity">Let's Talk</a>
            
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
            <a href="3" class="block py-2 border-b border-gray-100 text-gray-800 hover:text-blue-600">Home</a>
            
            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex justify-between w-full py-2 border-b border-gray-100 text-gray-800 hover:text-blue-600">
                    Products
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" class="pl-4">
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Product 1</a>
                    <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Product 2</a>
                </div>
            </div>
            
            <!-- Repeat similar blocks for other dropdown menus -->
            
            <a href="#" class="block py-2 border-b border-gray-100 text-gray-800 hover:text-blue-600">Blog</a>
            <a href="#" class="block py-2 text-gray-800 hover:text-blue-600">Contact</a>
            
            <div class="mt-4">
                <a href="#" class="block w-full text-center py-2 px-4 rounded bg-gradient-to-r from-teal-500 to-amber-400 text-white font-medium hover:opacity-90 transition-opacity">Let's Talk</a>
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