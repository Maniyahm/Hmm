@extends('components.layout')

@section('content')
<style>
    .services-hero-section {
        background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        min-height: 60vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .services-hero-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        text-align: center;
        color: white;
        position: relative;
        z-index: 2;
    }

    .services-hero-content h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .services-hero-content p {
        font-size: 1.2rem;
        opacity: 0.9;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .services-main-section {
        padding: 6rem 0;
        background: #f8f9fa;
    }

    .services-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .services-intro {
        text-align: center;
        margin-bottom: 4rem;
    }

    .services-intro h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 1.5rem;
    }

    .services-intro p {
        font-size: 1.1rem;
        color: #6c757d;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.7;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2.5rem;
        margin-bottom: 4rem;
    }

    .service-card {
        background: white;
        border-radius: 15px;
        padding: 2.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        position: relative;
        overflow: hidden;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(45deg, #3498db, #2980b9);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .service-card:hover::before {
        opacity: 1;
    }

    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .service-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(45deg, #3498db, #2980b9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
        color: white;
    }

    .service-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 1rem;
    }

    .service-description {
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .service-features {
        list-style: none;
        padding: 0;
        margin-bottom: 1.5rem;
    }

    .service-features li {
        color: #495057;
        margin-bottom: 0.5rem;
        padding-left: 1.5rem;
        position: relative;
    }

    .service-features li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #28a745;
        font-weight: bold;
    }

    .service-price {
        font-size: 1.2rem;
        font-weight: 600;
        color: #3498db;
        margin-bottom: 1rem;
    }

    .service-btn {
        background: #3498db;
        color: white;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .service-btn:hover {
        background: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
    }

    .process-section {
        padding: 5rem 0;
        background: white;
    }

    .process-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .process-title {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 3rem;
    }

    .process-steps {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .process-step {
        text-align: center;
        padding: 2rem 1rem;
        position: relative;
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: linear-gradient(45deg, #8a2be2, #9370db);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        margin: 0 auto 1.5rem;
    }

    .step-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 1rem;
    }

    .step-description {
        color: #6c757d;
        line-height: 1.6;
    }

    .cta-section {
        padding: 4rem 0;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        text-align: center;
    }

    .cta-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 2rem;
        color: white;
    }

    .cta-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    .cta-description {
        font-size: 1.1rem;
        opacity: 0.9;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .cta-button {
        background: rgba(255, 255, 255, 0.95);
        color: #667eea;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        display: inline-block;
        transition: all 0.3s ease;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .cta-button:hover {
        background: white;
        color: #5a67d8;
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 768px) {
        .services-hero-content h1 {
            font-size: 2.5rem;
        }

        .services-main-section {
            padding: 4rem 0;
        }

        .services-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .service-card {
            padding: 2rem;
        }

        .process-steps {
            grid-template-columns: 1fr;
        }

        .services-intro h2,
        .process-title,
        .cta-title {
            font-size: 2rem;
        }

        .cta-section {
            padding: 3rem 0;
        }
    }
    .why-choose-us-section {
        padding: 6rem 0;
        background: #f8f9fa;
        position: relative;
    }

    .choose-us-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .choose-us-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }

    .choose-us-content {
        padding-right: 2rem;
    }

    .section-badge {
        display: inline-block;
        background: rgba(52, 152, 219, 0.1);
        color: #3498db;
        font-size: 0.9rem;
        font-weight: 600;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        margin-bottom: 1.5rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .choose-us-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        line-height: 1.3;
        margin-bottom: 1.5rem;
    }

    .choose-us-description {
        font-size: 1.1rem;
        color: #6c757d;
        line-height: 1.7;
        margin-bottom: 3rem;
        max-width: 500px;
    }

    .features-list {
        display: flex;
        flex-direction: column;
        gap: 2.5rem;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 1.5rem;
    }

    .feature-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .purple-icon {
        background: linear-gradient(45deg, #8a2be2, #9370db);
        color: white;
    }

    .red-icon {
        background: linear-gradient(45deg, #e74c3c, #c0392b);
        color: white;
    }

    .yellow-icon {
        background: linear-gradient(45deg, #f39c12, #e67e22);
        color: white;
    }

    .blue-icon {
        background: linear-gradient(45deg, #3498db, #2980b9);
        color: white;
    }

    .feature-content {
        flex: 1;
    }

    .feature-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 0.5rem;
    }

    .feature-description {
        color: #6c757d;
        line-height: 1.6;
        margin: 0;
    }

    .choose-us-image {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .service-illustration {
        width: 100%;
        max-width: 500px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .service-illustration:hover {
        transform: scale(1.02);
    }

    /* Background decoration */
    .choose-us-image::before {
        content: '';
        position: absolute;
        top: -20px;
        right: -20px;
        width: 100px;
        height: 100px;
        background: linear-gradient(45deg, #3498db, #2980b9);
        border-radius: 50%;
        opacity: 0.1;
        z-index: 1;
    }

    .choose-us-image::after {
        content: '';
        position: absolute;
        bottom: -30px;
        left: -30px;
        width: 80px;
        height: 80px;
        background: linear-gradient(45deg, #8a2be2, #9370db);
        border-radius: 50%;
        opacity: 0.1;
        z-index: 1;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .choose-us-grid {
            gap: 3rem;
        }

        .choose-us-content {
            padding-right: 1rem;
        }

        .choose-us-title {
            font-size: 2.2rem;
        }
    }

    @media (max-width: 768px) {
        .choose-us-grid {
            grid-template-columns: 1fr;
            gap: 3rem;
        }

        .choose-us-content {
            padding-right: 0;
            order: 2;
        }

        .choose-us-image {
            order: 1;
        }

        .choose-us-title {
            font-size: 2rem;
        }

        .features-list {
            gap: 2rem;
        }

        .feature-item {
            gap: 1rem;
        }

        .feature-icon {
            width: 45px;
            height: 45px;
        }

        .why-choose-us-section {
            padding: 4rem 0;
        }

        .choose-us-container {
            padding: 0 1rem;
        }
    }

    @media (max-width: 480px) {
        .choose-us-title {
            font-size: 1.8rem;
        }

        .choose-us-description {
            font-size: 1rem;
        }

        .feature-title {
            font-size: 1.2rem;
        }

        .feature-description {
            font-size: 0.95rem;
        }
    }

    /* Animation */
    .feature-item {
        opacity: 0;
        transform: translateX(-30px);
        animation: slideInLeft 0.6s ease forwards;
    }

    .feature-item:nth-child(1) { animation-delay: 0.1s; }
    .feature-item:nth-child(2) { animation-delay: 0.2s; }
    .feature-item:nth-child(3) { animation-delay: 0.3s; }
    .feature-item:nth-child(4) { animation-delay: 0.4s; }

    @keyframes slideInLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

{{-- Hero Section --}}
<section class="services-hero-section">
    <div class="services-hero-content">
        <h1>Our Services</h1>
        <p>
            We provide comprehensive digital solutions to help your business thrive in the modern world.
            From web development to mobile apps, we've got you covered.
        </p>
    </div>
</section>

{{-- Services Section --}}
<section class="services-main-section">
    <div class="services-container">
        <div class="services-intro">
            <h2>What We Offer</h2>
            <p>
                Our expert team delivers cutting-edge technology solutions tailored to your business needs.
                We combine innovation with reliability to create exceptional digital experiences.
            </p>
        </div>

        <div class="services-grid">
            {{-- Web Development --}}
            <div class="service-card">
                <div class="service-icon">🌐</div>
                <h3 class="service-title">Web Development</h3>
                <p class="service-description">
                    Create stunning, responsive websites that engage your audience and drive business growth.
                </p>
                <ul class="service-features">
                    <li>Custom Website Design</li>
                    <li>Responsive Development</li>
                    <li>CMS Integration</li>
                    <li>E-commerce Solutions</li>
                    <li>SEO Optimization</li>
                </ul>
                <a href="{{ route('contact') }}" class="service-btn">Get Quote</a>
            </div>

            {{-- Mobile App Development --}}
            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3 class="service-title">Mobile App Development</h3>
                <p class="service-description">
                    Build powerful mobile applications for iOS and Android platforms with seamless user experience.
                </p>
                <ul class="service-features">
                    <li>Native iOS & Android Apps</li>
                    <li>Cross-platform Solutions</li>
                    <li>UI/UX Design</li>
                    <li>App Store Deployment</li>
                    <li>Maintenance & Support</li>
                </ul>
                <a href="{{ route('contact') }}" class="service-btn">Get Quote</a>
            </div>

            {{-- UI/UX Design --}}
            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h3 class="service-title">UI/UX Design</h3>
                <p class="service-description">
                    Design beautiful and intuitive user interfaces that provide exceptional user experiences.
                </p>
                <ul class="service-features">
                    <li>User Research & Analysis</li>
                    <li>Wireframing & Prototyping</li>
                    <li>Visual Design</li>
                    <li>Usability Testing</li>
                    <li>Design System Creation</li>
                </ul>
                <a href="{{ route('contact') }}" class="service-btn">Get Quote</a>
            </div>

            {{-- Digital Marketing --}}
            <div class="service-card">
                <div class="service-icon">📈</div>
                <h3 class="service-title">Digital Marketing</h3>
                <p class="service-description">
                    Boost your online presence and reach your target audience with our comprehensive marketing strategies.
                </p>
                <ul class="service-features">
                    <li>Search Engine Optimization</li>
                    <li>Social Media Marketing</li>
                    <li>Pay-Per-Click Advertising</li>
                    <li>Content Marketing</li>
                    <li>Analytics & Reporting</li>
                </ul>
                <a href="{{ route('contact') }}" class="service-btn">Get Quote</a>
            </div>

            {{-- Cloud Solutions --}}
            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3 class="service-title">Cloud Solutions</h3>
                <p class="service-description">
                    Migrate and optimize your infrastructure with secure, scalable cloud solutions.
                </p>
                <ul class="service-features">
                    <li>Cloud Migration</li>
                    <li>Infrastructure Setup</li>
                    <li>Security Implementation</li>
                    <li>Performance Optimization</li>
                    <li>24/7 Monitoring</li>
                </ul>
                <a href="{{ route('contact') }}" class="service-btn">Get Quote</a>
            </div>

            {{-- Maintenance & Support --}}
            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3 class="service-title">Maintenance & Support</h3>
                <p class="service-description">
                    Keep your digital assets running smoothly with our ongoing maintenance and support services.
                </p>
                <ul class="service-features">
                    <li>Regular Updates</li>
                    <li>Security Monitoring</li>
                    <li>Bug Fixes</li>
                    <li>Performance Optimization</li>
                    <li>Technical Support</li>
                </ul>
                <a href="{{ route('contact') }}" class="service-btn">Get Quote</a>
            </div>
        </div>
    </div>
</section>

{{-- Process Section --}}
<section class="process-section">
    <div class="process-container">
        <h2 class="process-title">Our Work Process</h2>
        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <h3 class="step-title">Discovery</h3>
                <p class="step-description">
                    We understand your business goals, target audience, and project requirements through detailed consultation.
                </p>
            </div>
            <div class="process-step">
                <div class="step-number">2</div>
                <h3 class="step-title">Planning</h3>
                <p class="step-description">
                    Create a comprehensive project roadmap with timelines, milestones, and resource allocation.
                </p>
            </div>
            <div class="process-step">
                <div class="step-number">3</div>
                <h3 class="step-title">Design & Development</h3>
                <p class="step-description">
                    Our team brings your vision to life with cutting-edge design and robust development practices.
                </p>
            </div>
            <div class="process-step">
                <div class="step-number">4</div>
                <h3 class="step-title">Testing & Launch</h3>
                <p class="step-description">
                    Rigorous testing ensures quality before we launch your project and provide ongoing support.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="cta-section">
    <div class="cta-container">
        <h2 class="cta-title">Ready to Start Your Project?</h2>
        <p class="cta-description">
            Let's discuss how we can help transform your business with our innovative solutions.
            Contact us today for a free consultation.
        </p>
        <a href="{{ route('contact') }}" class="cta-button">Get Started Today</a>
    </div>
</section>

<section class="why-choose-us-section">
    <div class="choose-us-container">

        {{-- Content Grid --}}
        <div class="choose-us-grid">

            {{-- Left Content --}}
            <div class="choose-us-content">
                <div class="section-badge">CHOOSE US</div>
                <h2 class="choose-us-title">Why Make Us Your Trusted Partner</h2>
                <p class="choose-us-description">
                    Choose us to leverage expertise and innovation for your
                    business's transformative journey towards success.
                </p>

                {{-- Features List --}}
                <div class="features-list">

                    {{-- Feature 1 --}}
                    <div class="feature-item">
                        <div class="feature-icon purple-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">Expert Guidance</h3>
                            <p class="feature-description">
                                Navigate your business challenges with the help of our
                                seasoned consultants, skilled in diverse industry verticals.
                            </p>
                        </div>
                    </div>

                    {{-- Feature 2 --}}
                    <div class="feature-item">
                        <div class="feature-icon red-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/>
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">Innovative Strategies</h3>
                            <p class="feature-description">
                                Capitalise on our forward-thinking approaches designed to keep
                                your business ahead in the ever-evolving market.
                            </p>
                        </div>
                    </div>

                    {{-- Feature 3 --}}
                    <div class="feature-item">
                        <div class="feature-icon yellow-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">Bespoke Solutions</h3>
                            <p class="feature-description">
                                Benefit from our tailored strategies and tools, perfectly designed
                                to meet your unique business needs.
                            </p>
                        </div>
                    </div>

                    {{-- Feature 4 --}}
                    <div class="feature-item">
                        <div class="feature-icon blue-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm-1 16H9V7h9v14z"/>
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">Partnership Approach</h3>
                            <p class="feature-description">
                                Enjoy the advantage of our partnership-driven ethos, focusing
                                on your success as our primary goal.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Right Image --}}
            <div class="choose-us-image">
                <img src="{{ asset('images/service.png') }}" alt="Why Choose Us" class="service-illustration">
            </div>

        </div>
    </div>
</section>
@endsection
