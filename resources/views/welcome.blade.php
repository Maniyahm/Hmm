@extends('components.layout')

@section('content')
    
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-container">
        <h1 class="hero-title">
            The <span class="highlight">Ultimate Solution</span> for Your
            <br>Digital Presence
        </h1>
        
        <p class="hero-description">
            Discover the key to unlocking unlimited growth in the competitive world of 
            business. Our comprehensive solutions are designed to enhance performance, 
            maximize profitability, and foster innovation.
        </p>
        
        <div class="hero-buttons">
            <a href="{{ route('contact')}}" class="btn btn-primary">Lets Get Started →</a>
        </div>
    </div>
</section>

<!-- Achieve More Section -->
<section class="py-16 bg-white-50">
    <div class="container mx-auto px-6">

        <!-- "What We Offer" Section -->
        <div class="mt-8 text-center">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">What We Offer</h3>
            <p class="text-lg text-gray-600 mb-12">
                We examine all catalysts of transformation – starting from the basics, and well inspire and assist you in making the desired transition.
            </p>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-lg shadow-lg p-8 text-center">
                    <div class="w-16 h-16 bg-purple-600 text-white rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">Strategy Consultation</h4>
                    <p class="text-gray-600">
                      Helping firms define and implement powerful strategies to drive growth and competitive advantage.
                    </p>
                </div>
                
                <!-- Service Card 2 -->
                <div class="bg-white rounded-lg shadow-lg p-8 text-center">
                    <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">Customized Solutions</h4>
                    <p class="text-gray-600">
                        Tailored solutions designed to maximize efficiency and success.
                    </p>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-white rounded-lg shadow-lg p-8 text-center">
                    <div class="w-16 h-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">Team Collaboration</h4>
                    <p class="text-gray-600">
                        Foster collaboration and teamwork to drive innovation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <body class="bg-gray-50">
        <div class="container mx-auto mt-16 px-4">
            <h2 class="text-center text-3xl font-bold text-gray-800">Our expertise on</h2>
            <h3 class="text-center text-lg text-gray-500 mb-12">Popular Website & Mobile App Technologies for MVP Development</h3>
        
            <!-- Tabs Section -->
            <div class="flex flex-wrap justify-center mb-8">
                <!-- Tab Buttons -->
                <button id="front-end-tab" class="tabs-button px-6 py-2 m-2 text-gray-800 bg-white rounded-full border-2 border-blue-500 hover:bg-blue-500 hover:text-white focus:outline-none transition-colors duration-300">Front end</button>
                <button id="backend-tab" class="tabs-button px-6 py-2 m-2 text-gray-800 bg-white rounded-full border-2 border-blue-500 hover:bg-blue-500 hover:text-white focus:outline-none transition-colors duration-300">Backend</button>
                <button id="mobile-tab" class="tabs-button px-6 py-2 m-2 text-gray-800 bg-white rounded-full border-2 border-blue-500 hover:bg-blue-500 hover:text-white focus:outline-none transition-colors duration-300">Mobile</button>
                <button id="devops-tab" class="tabs-button px-6 py-2 m-2 text-gray-800 bg-white rounded-full border-2 border-blue-500 hover:bg-blue-500 hover:text-white focus:outline-none transition-colors duration-300">DevOps & Cloud</button>
                <button id="integration-tab" class="tabs-button px-6 py-2 m-2 text-gray-800 bg-white rounded-full border-2 border-blue-500 hover:bg-blue-500 hover:text-white focus:outline-none transition-colors duration-300">Third Party Integration</button>
            </div>
        
            <!-- Technologies Content for Tabs -->
            <div id="front-end" class="tech-grid grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-12 mb-16">
                <!-- Front-end Technologies -->
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/angular-icon.png')}}" alt="Angular JS" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Angular JS</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/typescript-icon.png')}}" alt="TypeScript" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">TypeScript</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/react-icon.png')}}" alt="React JS" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">React JS</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/nextjs-icon.jpg')}}" alt="Next JS" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Next JS</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/vuejs-icon.png')}}" alt="Vue JS" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Vue JS</h5>
                </div>
            </div>
        
            <div id="backend" class="tech-grid hidden grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-12 mb-16">
                <!-- Back-end Technologies -->
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/laravel.png')}}" alt="Laravel" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Laravel</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/nodejs.jpg')}}" alt="Node JS" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Node JS</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/php.png')}}" alt="PHP" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">PHP</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/python.png')}}" alt="Python" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Python</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/mysql.png')}}" alt="MySQL" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">MySQL</h5>
                </div>
            </div>
        
            <div id="mobile" class="tech-grid hidden grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-12 mb-16">
                <!-- Mobile Technologies -->
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/ios.png')}}" alt="iOS" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">iOS</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/android.png')}}" alt="Android" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Android</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/react native.png')}}" alt="React Native" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">React Native</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/fluter.jpg')}}" alt="Flutter" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Flutter</h5>
                </div>
                
            </div>
    
            <div id="devops" class="tech-grid hidden grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-12 mb-16">
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/rest.png')}}" alt="REST API" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">REST API</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/graph.jpg')}}" alt="GraphQL" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">GraphQL</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/stripe.jpg')}}" alt="Payment Gateways" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Stripe Payment Gateways</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/social.jpg')}}" alt="Social Auth" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Social Auth</h5>
                </div>
                <!-- DevOps Technologies -->

            </div>
    
            <div id="integration" class="tech-grid hidden grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-12 mb-16">
                <!-- Integration Technologies -->
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/aws.png')}}" alt="AWS" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">AWS</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/twillo.png')}}" alt="Azure" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Twillo</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/msg91.jpg')}}" alt="Docker" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">MSG91</h5>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md mb-4 flex items-center justify-center w-24 h-24 mx-auto">
                        <img src="{{ asset('images/kubernetes.png')}}" alt="Kubernetes" class="w-16 h-16">
                    </div>
                    <h5 class="font-semibold text-lg">Kubernetes</h5>
                </div>
            </div>
        </div>
        @include('components.member')
<style>
    /* Reset any potential margin/padding that might affect width */
    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden;
    }
    
    .hero-section {
        background: linear-gradient(180deg, #fce8df 0%, #e6f0ff 100%);
        width: 100%;
        min-height: 50px; /* Fixed height instead of 100vh */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 80px 0; /* Vertical padding only */
        margin: 0;
    }
    
    .hero-container {
        width: 100%;
        text-align: center;
        padding: 0 20px; /* Side padding for content */
    }
    
    .hero-title {
        font-size: 44px;
        font-weight: 700;
        color: #000;
        margin-bottom: 25px;
        line-height: 1.2;
    }
    
    .highlight {
        color: #2872f6;
    }
    
    .hero-description {
        font-size: 18px;
        line-height: 1.6;
        color: #444;
        max-width: 800px;
        margin: 0 auto 40px;
    }
    
    .hero-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
    }
    
    .btn {
        padding: 14px 30px;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary {
        background-color: #2872f6;
        color: white;
        box-shadow: 0 8px 20px rgba(40, 114, 246, 0.3);
    }
    
    .btn-primary:hover {
        background-color: #1c60dc;
        transform: translateY(-2px);
    }
    
    .btn-outline {
        background-color: transparent;
        color: #2872f6;
        border: 2px solid #2872f6;
    }
    
    .btn-outline:hover {
        background-color: rgba(40, 114, 246, 0.1);
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 32px;
        }
        
        .hero-description {
            font-size: 16px;
        }
        
        .hero-buttons {
            flex-direction: column;
            align-items: center;
        }
    }
</style>


<script>
    // Function to handle tab switching
    function switchTab(tabId) {
        // Hide all tabs content
        document.querySelectorAll('.tech-grid').forEach(function(tabContent) {
            tabContent.classList.add('hidden');
        });

        // Remove active class from all tabs
        document.querySelectorAll('.tabs-button').forEach(function(tabButton) {
            tabButton.classList.remove('bg-blue-500', 'text-white');
            tabButton.classList.add('bg-white', 'text-gray-800');
        });

        // Show the selected tab content
        document.getElementById(tabId).classList.remove('hidden');
        
        // Set the active tab
        document.getElementById(tabId + '-tab').classList.remove('bg-white', 'text-gray-800');
        document.getElementById(tabId + '-tab').classList.add('bg-blue-500', 'text-white');
    }

    // Event listeners for tab buttons
    document.getElementById('front-end-tab').addEventListener('click', function() {
        switchTab('front-end');
    });

    document.getElementById('backend-tab').addEventListener('click', function() {
        switchTab('backend');
    });

    document.getElementById('mobile-tab').addEventListener('click', function() {
        switchTab('mobile');
    });

    document.getElementById('devops-tab').addEventListener('click', function() {
        switchTab('devops');
    });

    document.getElementById('integration-tab').addEventListener('click', function() {
        switchTab('integration');
    });

    // Set initial tab to Front End
    switchTab('front-end');
</script>
@endsection