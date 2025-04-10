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
            <a href="#" class="btn btn-primary">Lets Get Started →</a>
            <a href="#" class="btn btn-outline">Discover More →</a>
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
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">Mobile App Development</h4>
                    <p class="text-gray-600">
                        Development of user-friendly mobile app using android ios and cross-plateform application.
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
@endsection