@extends('components.layout')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
        <div class="shape shape-5"></div>
    </div>

    <div class="hero-container">
        <div class="hero-content">
            <div class="text-glitch">
                <h1 class="hero-title glitch" data-text="Digital Excellence">
                    The <span class="highlight-neon">Digital Excellence</span> for Your
                    <br><span class="typewriter">Future Business</span>
                </h1>
            </div>

            <p class="hero-description morphing-text">
                Transforming Ideas into Future-Ready Tech Solutions that Drive Growth, Efficiency, and Success for Your Business.
            </p>

            <div class="hero-buttons">
                <a href="{{ route('contact')}}" class="btn btn-electric">
                    <span class="btn-text">Launch Project</span>
                    <div class="btn-particles"></div>
                </a>
                <a href="#services" class="btn btn-ghost">
                    <span class="btn-text">Explore Services</span>
                </a>
            </div>
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
@include('components.leadership')
@include('components.vision')
@include('components.industry')
<!-- Technologies Section with Holographic Display -->
<section class="tech-section">
    <div class="container mx-auto px-4">
        <div class="tech-header">
            <h2 class="tech-title holographic-text">Technology Matrix</h2>
            <p class="tech-subtitle">Experience the future of development with our quantum-powered toolkit</p>
        </div>

        <!-- Holographic Navigation -->
        <div class="holo-nav">
            <button class="holo-btn active" data-category="frontend">
                <span class="holo-text">Frontend</span>
                <div class="holo-glow"></div>
            </button>
            <button class="holo-btn" data-category="backend">
                <span class="holo-text">Backend</span>
                <div class="holo-glow"></div>
            </button>
            <button class="holo-btn" data-category="mobile">
                <span class="holo-text">Mobile</span>
                <div class="holo-glow"></div>
            </button>
            <button class="holo-btn" data-category="cloud">
                <span class="holo-text">Cloud</span>
                <div class="holo-glow"></div>
            </button>
            <button class="holo-btn" data-category="ai">
                <span class="holo-text">AI/ML</span>
                <div class="holo-glow"></div>
            </button>
        </div>

        <!-- Technology Display Grid -->
        <div class="tech-matrix">
            <!-- Frontend Technologies -->
            <div class="tech-category active" data-category="frontend">
                <div class="tech-grid holographic-grid">
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/react-icon.png')}}" alt="React" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">React</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/angular-icon.png')}}" alt="Angular" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">Angular</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/vuejs-icon.png')}}" alt="Vue" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">Vue.js</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/nextjs-icon.jpg')}}" alt="Next.js" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">Next.js</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/typescript-icon.png')}}" alt="TypeScript" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">TypeScript</h5>
                        <div class="tech-particles"></div>
                    </div>
                </div>
            </div>

            <!-- Backend Technologies -->
            <div class="tech-category" data-category="backend">
                <div class="tech-grid holographic-grid">
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/nodejs.jpg')}}" alt="Node.js" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">Node.js</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/laravel.png')}}" alt="Laravel" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">Laravel</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/python.png')}}" alt="Python" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">Python</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/php.png')}}" alt="PHP" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">PHP</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/mysql.png')}}" alt="MySQL" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">MySQL</h5>
                        <div class="tech-particles"></div>
                    </div>
                </div>
            </div>

            <!-- Mobile Technologies -->
            <div class="tech-category" data-category="mobile">
                <div class="tech-grid holographic-grid">
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/react native.png')}}" alt="React Native" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">React Native</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/fluter.jpg')}}" alt="Flutter" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">Flutter</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/ios.png')}}" alt="iOS" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">iOS Native</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/android.png')}}" alt="Android" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">Android</h5>
                        <div class="tech-particles"></div>
                    </div>
                </div>
            </div>

            <!-- Cloud Technologies -->
            <div class="tech-category" data-category="cloud">
                <div class="tech-grid holographic-grid">
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/aws.png')}}" alt="AWS" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">AWS Cloud</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/kubernetes.png')}}" alt="Kubernetes" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">Kubernetes</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/stripe.jpg')}}" alt="Stripe" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">Payment Systems</h5>
                        <div class="tech-particles"></div>
                    </div>
                </div>
            </div>

            <!-- AI/ML Technologies -->
            <div class="tech-category" data-category="ai">
                <div class="tech-grid holographic-grid">
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/graph.jpg')}}" alt="GraphQL" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">GraphQL</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/rest.png')}}" alt="REST API" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">REST APIs</h5>
                        <div class="tech-particles"></div>
                    </div>
                    <div class="tech-item holo-item">
                        <div class="tech-hologram">
                            <img src="{{ asset('images/social.jpg')}}" alt="AI Integration" class="tech-logo">
                            <div class="holo-reflection"></div>
                        </div>
                        <h5 class="tech-name">AI Integration</h5>
                        <div class="tech-particles"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        {{-- @include('components.member') --}}
        @include('components.project')

        <style>
            /* Reset and Base */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
                background: #0a0a0a;
                color: #ffffff;
                overflow-x: hidden;
            }

            /* Hero Section - Cyberpunk Style */
            .hero-section {
                min-height: 100vh;
                background: radial-gradient(circle at 30% 50%, #1a0033 0%, #000000 50%, #001a33 100%);
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden;
            }

            /* Floating Shapes */
            .floating-shapes {
                position: absolute;
                width: 100%;
                height: 100%;
                pointer-events: none;
            }

            .shape {
                position: absolute;
                background: linear-gradient(45deg, #00ffff, #ff00ff);
                border-radius: 50%;
                opacity: 0.1;
                animation: float 6s ease-in-out infinite;
            }

            .shape-1 {
                width: 100px;
                height: 100px;
                top: 20%;
                left: 10%;
                animation-delay: 0s;
            }

            .shape-2 {
                width: 150px;
                height: 150px;
                top: 60%;
                right: 15%;
                animation-delay: 2s;
            }

            .shape-3 {
                width: 80px;
                height: 80px;
                bottom: 30%;
                left: 70%;
                animation-delay: 4s;
            }

            .shape-4 {
                width: 120px;
                height: 120px;
                top: 10%;
                right: 30%;
                animation-delay: 1s;
            }

            .shape-5 {
                width: 200px;
                height: 200px;
                bottom: 10%;
                left: 20%;
                animation-delay: 3s;
            }

            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                33% { transform: translateY(-20px) rotate(5deg); }
                66% { transform: translateY(20px) rotate(-5deg); }
            }

            .hero-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 2rem;
                text-align: center;
                z-index: 2;
                position: relative;
            }

            /* Glitch Effect */
            .glitch {
                position: relative;
                color: #00ffff;
                font-size: 4rem;
                font-weight: 900;
                text-transform: uppercase;
                letter-spacing: 3px;
                margin-bottom: 2rem;
                animation: glitch 2s linear infinite;
            }

            .glitch:before,
            .glitch:after {
                /* content: attr(data-text); */
                position: absolute;
                top: 0;
                left: 0;
                width: 0%;
                height: 0%;
            }

            .glitch:before {
                animation: glitch-1 0.5s linear infinite reverse;
                color: #ff00ff;
                z-index: -1;
            }

            .glitch:after {
                animation: glitch-2 0.5s linear infinite reverse;
                color: #ffff00;
                z-index: -2;
            }

            @keyframes glitch {
                0% { transform: translate(0); }
                20% { transform: translate(-2px, 2px); }
                40% { transform: translate(-2px, -2px); }
                60% { transform: translate(2px, 2px); }
                80% { transform: translate(2px, -2px); }
                100% { transform: translate(0); }
            }

            @keyframes glitch-1 {
                0% { clip: rect(132px, 9999px, 142px, 0); }
                10% { clip: rect(40px, 9999px, 43px, 0); }
                20% { clip: rect(89px, 9999px, 95px, 0); }
                100% { clip: rect(132px, 9999px, 142px, 0); }
            }

            @keyframes glitch-2 {
                0% { clip: rect(65px, 9999px, 119px, 0); }
                15% { clip: rect(54px, 9999px, 85px, 0); }
                35% { clip: rect(31px, 9999px, 103px, 0); }
                100% { clip: rect(65px, 9999px, 119px, 0); }
            }

            .highlight-neon {
                background: linear-gradient(45deg, #00ffff, #ff00ff, #ffff00);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                /* background-clip: text; */
                /* animation: neonGlow 2s ease-in-out infinite alternate; */
            }

            @keyframes neonGlow {
                from {
                    text-shadow: 0 0 20px #00ffff, 0 0 30px #00ffff, 0 0 40px #00ffff;
                }
                to {
                    text-shadow: 0 0 10px #ff00ff, 0 0 20px #ff00ff, 0 0 30px #ff00ff;
                }
            }

            /* Typewriter Effect */
            .typewriter {
                border-right: 3px solid #00ffff;
                animation: typing 4s steps(20) 1s infinite, blink 0.75s step-end infinite;
                white-space: nowrap;
                overflow: hidden;
                display: inline-block;
            }

            @keyframes typing {
                0% { width: 0; }
                50% { width: 100%; }
                100% { width: 0; }
            }

            @keyframes blink {
                from, to { border-color: transparent; }
                50% { border-color: #00ffff; }
            }

            .hero-description {
                font-size: 1.4rem;
                line-height: 1.8;
                margin-bottom: 3rem;
                opacity: 0.9;
                max-width: 800px;
                margin-left: auto;
                margin-right: auto;
            }

            /* Electric Buttons */
            .hero-buttons {
                display: flex;
                gap: 2rem;
                justify-content: center;
                flex-wrap: wrap;
            }

            .btn {
                position: relative;
                padding: 1rem 2.5rem;
                font-size: 1.1rem;
                font-weight: 600;
                text-decoration: none;
                border: none;
                border-radius: 50px;
                cursor: pointer;
                transition: all 0.3s ease;
                overflow: hidden;
            }

            .btn-electric {
                background: linear-gradient(45deg, #ff006e, #00ffff);
                color: #ffffff;
                box-shadow: 0 0 20px rgba(255, 0, 110, 0.5);
                position: relative;
            }

            .btn-electric:hover {
                transform: scale(1.05);
                box-shadow: 0 0 40px rgba(255, 0, 110, 0.8);
            }

            .btn-electric .btn-particles {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
            }

            .btn-electric .btn-particles:before {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                width: 0;
                height: 0;
                background: radial-gradient(circle, #ffffff 1px, transparent 1px);
                opacity: 0;
                animation: particleExplosion 0.6s ease-out;
            }

            .btn-electric:hover .btn-particles:before {
                animation: particleExplosion 0.6s ease-out;
            }

            @keyframes particleExplosion {
                0% {
                    width: 0;
                    height: 0;
                    opacity: 1;
                }
                100% {
                    width: 200px;
                    height: 200px;
                    margin-left: -100px;
                    margin-top: -100px;
                    opacity: 0;
                }
            }

            .btn-ghost {
                background: transparent;
                color: #00ffff;
                border: 2px solid #00ffff;
            }

            .btn-ghost:hover {
                background: #00ffff;
                color: #000000;
                box-shadow: 0 0 30px #00ffff;
            }

            /* Services Section */
            .services-section {
                padding: 8rem 0;
                background: linear-gradient(135deg, #000000 0%, #1a0033 50%, #000000 100%);
                position: relative;
            }

            .section-header {
                text-align: center;
                margin-bottom: 4rem;
            }

            .section-title {
                font-size: 3.5rem;
                font-weight: 900;
                margin-bottom: 1rem;
                background: linear-gradient(45deg, #00ffff, #ff00ff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .section-subtitle {
                font-size: 1.3rem;
                opacity: 0.8;
                max-width: 600px;
                margin: 0 auto;
            }

            /* Service Cards */
            .services-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                gap: 3rem;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 2rem;
            }

            .service-card {
                position: relative;
                background: rgba(255, 255, 255, 0.05);
                border-radius: 20px;
                padding: 2.5rem;
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
                cursor: pointer;
            }

            .service-card:hover {
                transform: translateY(-10px) rotateX(5deg);
                box-shadow: 0 20px 60px rgba(0, 255, 255, 0.3);
            }

            /* Liquid Card Effect */
            .liquid-card {
                overflow: hidden;
            }

            .liquid-blob {
                position: absolute;
                border-radius: 50%;
                background: linear-gradient(45deg, #00ffff, #ff00ff);
                opacity: 0.1;
                animation: liquidMove 8s ease-in-out infinite;
            }

            .blob-1 {
                width: 200px;
                height: 200px;
                top: -50px;
                left: -50px;
                animation-delay: 0s;
            }

            .blob-2 {
                width: 150px;
                height: 150px;
                bottom: -30px;
                right: -30px;
                animation-delay: 4s;
            }

            @keyframes liquidMove {
                0%, 100% { transform: translate(0, 0) scale(1); }
                33% { transform: translate(30px, -30px) scale(1.1); }
                66% { transform: translate(-20px, 20px) scale(0.9); }
            }

            /* Geometric Card */
            .geometric-pattern {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0.1;
            }

            .geo-element {
                position: absolute;
                border: 2px solid #00ffff;
                animation: geometricSpin 10s linear infinite;
            }

            .geo-1 {
                width: 60px;
                height: 60px;
                top: 20px;
                right: 20px;
                animation-delay: 0s;
            }

            .geo-2 {
                width: 40px;
                height: 40px;
                bottom: 40px;
                left: 30px;
                border-radius: 50%;
                animation-delay: 3s;
            }

            .geo-3 {
                width: 80px;
                height: 80px;
                top: 50%;
                left: 10px;
                transform: rotate(45deg);
                animation-delay: 6s;
            }

            @keyframes geometricSpin {
                0% { transform: rotate(0deg) scale(1); }
                50% { transform: rotate(180deg) scale(1.2); }
                100% { transform: rotate(360deg) scale(1); }
            }

            /* Particle Card */
            .particle-system {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
            }

            .particle {
                position: absolute;
                width: 4px;
                height: 4px;
                background: #00ffff;
                border-radius: 50%;
                animation: particleFloat 6s ease-in-out infinite;
            }

            .particle:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
            .particle:nth-child(2) { top: 40%; right: 15%; animation-delay: 1.2s; }
            .particle:nth-child(3) { bottom: 30%; left: 20%; animation-delay: 2.4s; }
            .particle:nth-child(4) { top: 60%; right: 30%; animation-delay: 3.6s; }
            .particle:nth-child(5) { bottom: 20%; right: 10%; animation-delay: 4.8s; }

            @keyframes particleFloat {
                0%, 100% { transform: translateY(0px) opacity(0.5); }
                50% { transform: translateY(-20px) opacity(1); }
            }

            .card-content {
                position: relative;
                z-index: 2;
            }

            .service-icon {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 80px;
                height: 80px;
                margin: 0 auto 1.5rem;
                position: relative;
            }

            .icon-orbit {
                width: 60px;
                height: 60px;
                border: 2px solid #00ffff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.5rem;
                color: #00ffff;
                position: relative;
                animation: iconPulse 3s ease-in-out infinite;
            }

            .icon-orbit:before {
                content: '';
                position: absolute;
                top: -10px;
                left: -10px;
                right: -10px;
                bottom: -10px;
                border: 1px solid rgba(0, 255, 255, 0.3);
                border-radius: 50%;
                animation: orbitRotate 8s linear infinite;
            }

            @keyframes iconPulse {
                0%, 100% { transform: scale(1); box-shadow: 0 0 20px rgba(0, 255, 255, 0.3); }
                50% { transform: scale(1.1); box-shadow: 0 0 40px rgba(0, 255, 255, 0.6); }
            }

            @keyframes orbitRotate {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            .service-title {
                font-size: 1.5rem;
                font-weight: 700;
                margin-bottom: 1rem;
                color: #ffffff;
                text-align: center;
            }

            .service-description {
                font-size: 1rem;
                line-height: 1.6;
                opacity: 0.8;
                text-align: center;
                margin-bottom: 1.5rem;
            }

            .card-footer {
                text-align: center;
            }

            .learn-more {
                color: #00ffff;
                font-weight: 600;
                text-decoration: none;
                position: relative;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .learn-more:hover {
                color: #ff00ff;
                transform: translateX(5px);
            }

            .learn-more:after {
                content: '';
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 0;
                height: 2px;
                background: linear-gradient(45deg, #00ffff, #ff00ff);
                transition: width 0.3s ease;
            }

            .learn-more:hover:after {
                width: 100%;
            }

            /* Technology Section */
            .tech-section {
                padding: 8rem 0;
                background: #000000;
                position: relative;
                overflow: hidden;
            }

            .tech-section:before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: radial-gradient(circle at 50% 50%, rgba(0, 255, 255, 0.05) 0%, transparent 50%);
            }

            .tech-header {
                text-align: center;
                margin-bottom: 4rem;
            }

            .tech-title {
                font-size: 4rem;
                font-weight: 900;
                margin-bottom: 1rem;
                position: relative;
            }

            .holographic-text {
                background: linear-gradient(45deg, #00ffff, #ff00ff, #ffff00, #00ffff);
                background-size: 400% 400%;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                animation: holographicShift 3s ease-in-out infinite;
                text-shadow: 0 0 50px rgba(0, 255, 255, 0.5);
            }

            @keyframes holographicShift {
                0%, 100% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
            }

            .tech-subtitle {
                font-size: 1.3rem;
                opacity: 0.7;
                max-width: 600px;
                margin: 0 auto;
            }

            /* Holographic Navigation */
            .holo-nav {
                display: flex;
                justify-content: center;
                gap: 1rem;
                margin-bottom: 4rem;
                flex-wrap: wrap;
            }

            .holo-btn {
                position: relative;
                padding: 1rem 2rem;
                background: transparent;
                border: 2px solid rgba(0, 255, 255, 0.3);
                border-radius: 50px;
                color: #ffffff;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.4s ease;
                overflow: hidden;
            }

            .holo-btn:before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(0, 255, 255, 0.2), transparent);
                transition: left 0.6s ease;
            }

            .holo-btn:hover:before {
                left: 100%;
            }

            .holo-btn.active {
                border-color: #00ffff;
                background: rgba(0, 255, 255, 0.1);
                box-shadow: 0 0 30px rgba(0, 255, 255, 0.3);
                color: #00ffff;
            }

            .holo-btn:hover {
                border-color: #ff00ff;
                color: #ff00ff;
                transform: translateY(-2px);
                box-shadow: 0 10px 30px rgba(255, 0, 255, 0.3);
            }

            .holo-glow {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 0;
                height: 0;
                background: radial-gradient(circle, #00ffff 0%, transparent 70%);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                opacity: 0;
                transition: all 0.4s ease;
            }

            .holo-btn:hover .holo-glow {
                width: 200px;
                height: 200px;
                opacity: 0.2;
            }

            /* Technology Matrix */
            .tech-matrix {
                position: relative;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 2rem;
            }

            .tech-category {
                display: none;
                animation: matrixFadeIn 0.8s ease-out;
            }

            .tech-category.active {
                display: block;
            }

            @keyframes matrixFadeIn {
                0% { opacity: 0; transform: rotateX(90deg); }
                100% { opacity: 1; transform: rotateX(0deg); }
            }

            .holographic-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 2rem;
                perspective: 1000px;
            }

            .holo-item {
                position: relative;
                text-align: center;
                cursor: pointer;
                transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            }

            .holo-item:hover {
                transform: translateY(-20px) rotateY(10deg) rotateX(10deg);
            }

            .tech-hologram {
                position: relative;
                width: 120px;
                height: 120px;
                margin: 0 auto 1rem;
                border: 2px solid rgba(0, 255, 255, 0.3);
                border-radius: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(0, 255, 255, 0.05);
                backdrop-filter: blur(10px);
                transition: all 0.4s ease;
            }

            .tech-hologram:before {
                content: '';
                position: absolute;
                top: -2px;
                left: -2px;
                right: -2px;
                bottom: -2px;
                background: linear-gradient(45deg, #00ffff, #ff00ff, #ffff00, #00ffff);
                background-size: 400% 400%;
                border-radius: 20px;
                z-index: -1;
                opacity: 0;
                animation: hologramBorder 3s linear infinite;
                transition: opacity 0.3s ease;
            }

            .holo-item:hover .tech-hologram:before {
                opacity: 1;
            }

            @keyframes hologramBorder {
                0%, 100% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
            }

            .tech-logo {
                width: 60px;
                height: 60px;
                object-fit: contain;
                filter: brightness(0.8) saturate(0.7);
                transition: all 0.4s ease;
            }

            .holo-item:hover .tech-logo {
                filter: brightness(1.2) saturate(1.2);
                transform: scale(1.1) rotateY(360deg);
            }

            .holo-reflection {
                position: absolute;
                bottom: -40px;
                left: 50%;
                transform: translateX(-50%) scaleY(-1);
                width: 60px;
                height: 30px;
                background: linear-gradient(to bottom, rgba(0, 255, 255, 0.2) 0%, transparent 100%);
                opacity: 0;
                transition: opacity 0.4s ease;
            }

            .holo-item:hover .holo-reflection {
                opacity: 1;
            }

            .tech-name {
                font-size: 1rem;
                font-weight: 600;
                color: #ffffff;
                margin-bottom: 0.5rem;
                transition: color 0.3s ease;
            }

            .holo-item:hover .tech-name {
                color: #00ffff;
                text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
            }

            .tech-particles {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
                opacity: 0;
                transition: opacity 0.4s ease;
            }

            .tech-particles:before,
            .tech-particles:after {
                content: '';
                position: absolute;
                width: 2px;
                height: 2px;
                background: #00ffff;
                border-radius: 50%;
                animation: particleDance 2s ease-in-out infinite;
            }

            .tech-particles:before {
                top: 20%;
                left: 20%;
                animation-delay: 0s;
            }

            .tech-particles:after {
                bottom: 20%;
                right: 20%;
                animation-delay: 1s;
            }

            .holo-item:hover .tech-particles {
                opacity: 1;
            }

            @keyframes particleDance {
                0%, 100% { transform: scale(1) translate(0, 0); opacity: 0.5; }
                50% { transform: scale(1.5) translate(10px, -10px); opacity: 1; }
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .glitch {
                    font-size: 2.5rem;
                }

                .hero-description {
                    font-size: 1.1rem;
                }

                .hero-buttons {
                    flex-direction: column;
                    align-items: center;
                }

                .section-title {
                    font-size: 2.5rem;
                }

                .tech-title {
                    font-size: 2.5rem;
                }

                .services-grid {
                    grid-template-columns: 1fr;
                    gap: 2rem;
                }

                .holographic-grid {
                    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                    gap: 1.5rem;
                }

                .holo-nav {
                    gap: 0.5rem;
                }

                .holo-btn {
                    padding: 0.8rem 1.5rem;
                    font-size: 0.9rem;
                }
            }

            @media (max-width: 480px) {
                .glitch {
                    font-size: 2rem;
                }

                .typewriter {
                    animation: none;
                    border: none;
                    white-space: normal;
                }

                .tech-hologram {
                    width: 100px;
                    height: 100px;
                }

                .tech-logo {
                    width: 50px;
                    height: 50px;
                }
            }

            /* Performance Optimizations */
            .hero-section,
            .services-section,
            .tech-section {
                will-change: transform;
            }

            .service-card,
            .holo-item,
            .holo-btn {
                will-change: transform, box-shadow;
            }

            /* Accessibility */
            @media (prefers-reduced-motion: reduce) {
                * {
                    animation-duration: 0.01ms !important;
                    animation-iteration-count: 1 !important;
                    transition-duration: 0.01ms !important;
                }
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Holographic navigation functionality
                const holoButtons = document.querySelectorAll('.holo-btn');
                const techCategories = document.querySelectorAll('.tech-category');

                holoButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const category = this.getAttribute('data-category');

                        // Remove active class from all buttons
                        holoButtons.forEach(btn => btn.classList.remove('active'));

                        // Hide all categories with fade effect
                        techCategories.forEach(cat => {
                            cat.classList.remove('active');
                            cat.style.opacity = '0';
                            cat.style.transform = 'rotateX(90deg)';
                        });

                        // Add active class to clicked button
                        this.classList.add('active');

                        // Show selected category with holographic effect
                        setTimeout(() => {
                            const targetCategory = document.querySelector(`.tech-category[data-category="${category}"]`);
                            if (targetCategory) {
                                targetCategory.classList.add('active');
                                targetCategory.style.opacity = '1';
                                targetCategory.style.transform = 'rotateX(0deg)';

                                // Animate tech items with stagger
                                const techItems = targetCategory.querySelectorAll('.holo-item');
                                techItems.forEach((item, index) => {
                                    item.style.opacity = '0';
                                    item.style.transform = 'translateY(50px) rotateY(45deg)';

                                    setTimeout(() => {
                                        item.style.transition = 'all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
                                        item.style.opacity = '1';
                                        item.style.transform = 'translateY(0) rotateY(0deg)';
                                    }, index * 150);
                                });
                            }
                        }, 300);

                        // Create holographic ripple effect
                        createHoloRipple(this);
                    });
                });

                // Holographic ripple effect
                function createHoloRipple(element) {
                    const ripple = document.createElement('div');
                    const rect = element.getBoundingClientRect();

                    ripple.style.position = 'absolute';
                    ripple.style.top = '50%';
                    ripple.style.left = '50%';
                    ripple.style.width = '0';
                    ripple.style.height = '0';
                    ripple.style.background = 'radial-gradient(circle, rgba(0, 255, 255, 0.6) 0%, transparent 70%)';
                    ripple.style.borderRadius = '50%';
                    ripple.style.transform = 'translate(-50%, -50%)';
                    ripple.style.pointerEvents = 'none';
                    ripple.style.zIndex = '1000';

                    element.style.position = 'relative';
                    element.appendChild(ripple);

                    // Animate ripple
                    ripple.animate([
                        { width: '0', height: '0', opacity: '1' },
                        { width: '300px', height: '300px', opacity: '0' }
                    ], {
                        duration: 800,
                        easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
                    }).onfinish = () => ripple.remove();
                }

                // Initialize with first category
                setTimeout(() => {
                    holoButtons[0].click();
                }, 1000);

                // Add magnetic effect to service cards
                const serviceCards = document.querySelectorAll('.service-card');
                serviceCards.forEach(card => {
                    card.addEventListener('mousemove', function(e) {
                        const rect = this.getBoundingClientRect();
                        const centerX = rect.left + rect.width / 2;
                        const centerY = rect.top + rect.height / 2;
                        const deltaX = (e.clientX - centerX) * 0.1;
                        const deltaY = (e.clientY - centerY) * 0.1;

                        this.style.transform = `translateY(-10px) rotateX(${deltaY * 0.5}deg) rotateY(${deltaX * 0.5}deg)`;
                    });

                    card.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0) rotateX(0deg) rotateY(0deg)';
                    });
                });

                // Add parallax effect to floating shapes
                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;
                    const shapes = document.querySelectorAll('.shape');

                    shapes.forEach((shape, index) => {
                        const speed = (index + 1) * 0.2;
                        const yPos = scrolled * speed;
                        shape.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.1}deg)`;
                    });
                });

                // Add intersection observer for animations
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.animationPlayState = 'running';
                            entry.target.classList.add('animate-in');
                        }
                    });
                }, observerOptions);

                // Observe all animated elements
                document.querySelectorAll('.service-card, .holo-item').forEach(el => {
                    observer.observe(el);
                });

                // Add electric effect to buttons
                const electricBtns = document.querySelectorAll('.btn-electric');
                electricBtns.forEach(btn => {
                    btn.addEventListener('mouseenter', function() {
                        createElectricEffect(this);
                    });
                });

                function createElectricEffect(button) {
                    for (let i = 0; i < 5; i++) {
                        const spark = document.createElement('div');
                        spark.style.position = 'absolute';
                        spark.style.width = '2px';
                        spark.style.height = '2px';
                        spark.style.background = '#ffffff';
                        spark.style.borderRadius = '50%';
                        spark.style.pointerEvents = 'none';
                        spark.style.zIndex = '1000';

                        const rect = button.getBoundingClientRect();
                        spark.style.left = Math.random() * rect.width + 'px';
                        spark.style.top = Math.random() * rect.height + 'px';

                        button.appendChild(spark);

                        spark.animate([
                            { opacity: '1', transform: 'scale(1)' },
                            { opacity: '0', transform: 'scale(2) translate(20px, -20px)' }
                        ], {
                            duration: 600,
                            easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
                        }).onfinish = () => spark.remove();
                    }
                }
            });
        </script>
        @endsection
