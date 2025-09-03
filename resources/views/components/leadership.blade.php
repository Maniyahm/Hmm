<!-- resources/views/sections/leadership.blade.php -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h3 class="text-blue-600 font-semibold text-lg mb-4 tracking-wide">Leadership Perspective</h3>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">What Our CEO Says</h2>
        </div>

        <!-- CEO Quote Section -->
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
            <!-- Quote Content -->
            <div class="lg:w-2/3 relative">
                <!-- Opening Quote -->
                <div class="text-yellow-400 text-8xl font-serif leading-none mb-4">"</div>

                <!-- Quote Text -->
                <blockquote class="text-gray-600 text-lg md:text-xl leading-relaxed mb-8 relative -mt-8 pl-8">
                    My mission is to build a self-sustaining cycle of excellence, where each
                    client journey is defined by innovation, collaboration, and exceptional
                    service. At Hmms, we don't just solve problems—we reimagine
                    what's possible, creating lasting value and continuous growth for our
                    clients and us.
                </blockquote>

                <!-- Closing Quote -->
                <div class="text-yellow-400 text-8xl font-serif leading-none float-right -mt-4">"</div>

                <!-- CEO Information -->
                <div class="flex items-center mt-8 clear-both">
                    <div class="w-16 h-px bg-gray-400 mr-6"></div>
                    <div>
                        <h4 class="text-2xl font-bold text-gray-900">Hiren Maniya</h4>
                        <p class="text-gray-600 font-medium">CEO</p>
                        <div class="flex items-center mt-2 text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <span class="text-sm">maniyahiren154@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CEO Image -->
            <div class="lg:w-1/3 flex justify-center">
                <div class="relative">
                    <!-- Hexagonal Image Container -->
                    <div class="hexagon-container">
                        <img src="{{ asset('images/ceo-photo.jpg') }}"
                             alt="Hiren Maniya - CEO"
                             class="hexagon-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Hexagonal Image Styling */
.hexagon-container {
    width: 300px;
    height: 300px;
    position: relative;
}

.hexagon-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    transition: transform 0.3s ease;
}

.hexagon-image:hover {
    transform: scale(1.05);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .hexagon-container {
        width: 250px;
        height: 250px;
    }

    .text-8xl {
        font-size: 4rem;
    }
}

@media (max-width: 640px) {
    .hexagon-container {
        width: 200px;
        height: 200px;
    }

    .text-8xl {
        font-size: 3rem;
    }
}

/* Quote styling enhancements */
blockquote::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: linear-gradient(to bottom, #3B82F6, #06B6D4);
    border-radius: 2px;
}
</style>
