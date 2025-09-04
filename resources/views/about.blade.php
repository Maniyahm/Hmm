@extends('components.layout')

@section('content')

<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <p class="subtitle">We Are Hm²</p>
            <h1>Your Partner For Web<br>And Mobile App Services</h1>
        </div>
        <div class="hero-image" style="size: 100ch">
            {{-- Banner Image --}}
            <img src="{{ asset('images/download.png') }}"
            alt="Hm² Technologies Banner"
            class="developer-illustration">
        </div>
    </div>

</section>
<section class="about-section">
    <div class="about-content">
        <h2 class="about-title">Who Are We?</h2>
        <p class="about-text">
            We leverage a wide range of technologies to build scalable solutions. Our team stays current with the latest advancements in Healthcare, Insurance, and Custom Web Solutions, delivering innovative results that keep our clients ahead.
        </p>
        <p class="about-text">
            <span class="company-highlight">Hm²</span> We help businesses of all sizes boost their online presence and visibility, ensuring high-quality results with every project.
        </p>
    </div>
</section>
<section class="vision-mission-section">
    <div class="vmg-container">

        {{-- Vision --}}
        <div class="vmg-item">
            <div class="vmg-icon-wrapper">
                <div class="vmg-icon">
                    <img src="{{ asset('images/vision-icon.png') }}" alt="Vision Icon" class="icon-img">
                </div>
            </div>
            <h3 class="vmg-title">Vision</h3>
            <p class="vmg-description">
                To become the foremost technology partner, revolutionizing businesses through innovative web and mobile solutions, turning visionary ideas into reality            </p>
        </div>

        {{-- Mission --}}
        <div class="vmg-item">
            <div class="vmg-icon-wrapper">
                <div class="vmg-icon">
                    <img src="{{ asset('images/mission-icon.png') }}" alt="Mission Icon" class="icon-img">
                </div>
            </div>
            <h3 class="vmg-title">Mission</h3>
            <p class="vmg-description">
                To establish an endless cycle of success by providing clients with precise solutions through exceptional customer service and groundbreaking technological innovations
            </p>
        </div>

        {{-- Goal --}}
        <div class="vmg-item">
            <div class="vmg-icon-wrapper">
                <div class="vmg-icon">
                    <img src="{{ asset('images/goal-icon.png') }}" alt="Goal Icon" class="icon-img">
                </div>
            </div>
            <h3 class="vmg-title">Goal</h3>
            <p class="vmg-description">
                To surpass expectations by transforming your ideas into reality through a perfect fusion of creativity, innovation, and technical expertise
            </p>
        </div>

    </div>
</section>
<section class="core-values-section">
    <div class="core-values-container">

        {{-- Section Title --}}
        <h2 class="section-title">Core Values</h2>

        {{-- Core Values Grid --}}
        <div class="values-grid">

            {{-- Discipline --}}
            <div class="value-card discipline-card">
                <div class="value-icon-wrapper">
                    <div class="value-icon">
                        <img src="{{ asset('images/discipline-icon.png') }}" alt="Discipline Icon" class="value-icon-img">
                    </div>
                </div>
                <h3 class="value-title">Discipline</h3>
            </div>

            {{-- Happiness --}}
            <div class="value-card happiness-card">
                <div class="value-icon-wrapper">
                    <div class="value-icon">
                        <img src="{{ asset('images/happiness-icon.png') }}" alt="Happiness Icon" class="value-icon-img">
                    </div>
                </div>
                <h3 class="value-title">Happiness</h3>
            </div>

            {{-- Innovations --}}
            <div class="value-card innovations-card">
                <div class="value-icon-wrapper">
                    <div class="value-icon">
                        <img src="{{ asset('images/innovations-icon.png') }}" alt="Innovations Icon" class="value-icon-img">
                    </div>
                </div>
                <h3 class="value-title">Innovations</h3>
            </div>

        </div>
    </div>
</section>
<style>
.core-values-section {
        padding: 5rem 0;
        background: #ffffff;
        position: relative;
    }

    .core-values-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        text-align: center;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 3rem;
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: #f39c12;
        border-radius: 2px;
    }

    .values-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 2rem;
        align-items: stretch;
    }

    .value-card {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 3rem 2rem;
        transition: all 0.3s ease;
        position: relative;
        border: 2px solid #e9ecef;
        min-height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .value-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    /* Discipline Card - Yellow border on hover (same as others) */
    .discipline-card:hover {
        border: 2px solid #f1c40f;
        background: #fffef7;
    }

    /* Happiness Card - Yellow border on hover */
    .happiness-card:hover {
        border: 2px solid #f1c40f;
        background: #fffef7;
    }

    /* Innovations Card - Yellow border on hover */
    .innovations-card:hover {
        border: 2px solid #f1c40f;
        background: #fffef7;
    }

    .value-icon-wrapper {
        margin-bottom: 1.5rem;
        position: relative;
    }

    .value-icon-wrapper::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100px;
        height: 100px;
        background: rgba(243, 156, 18, 0.1);
        border-radius: 50%;
        z-index: 1;
    }

    .value-icon {
        width: 70px;
        height: 70px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 2;
        margin: 0 auto;
    }

    .value-icon-img {
        width: 35px;
        height: 35px;
        object-fit: contain;
    }

    .value-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #2c3e50;
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .values-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .core-values-container {
            padding: 0 1rem;
        }

        .value-card {
            padding: 2rem 1.5rem;
            min-height: 200px;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .core-values-section {
            padding: 3rem 0;
        }
    }

    @media (max-width: 1024px) and (min-width: 769px) {
        .values-grid {
            gap: 1.5rem;
        }

        .value-card {
            padding: 2.5rem 1.5rem;
        }
    }

    /* Animation for cards */
    .value-card {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.6s ease forwards;
    }

    .value-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .value-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .value-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .vision-mission-section {
        padding: 5rem 0;
        background: #f8f9fa;
        position: relative;
        overflow: hidden;
    }

    .vision-mission-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%23e2e8f0" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
        opacity: 0.3;
    }

    .vmg-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 3rem;
        position: relative;
        z-index: 2;
    }

    .vmg-item {
        text-align: center;
        background: white;
        padding: 3rem 2rem;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        border: 1px solid #e2e8f0;
    }

    .vmg-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .vmg-icon-wrapper {
        position: relative;
        margin-bottom: 2rem;
        display: flex;
        justify-content: center;
    }

    .vmg-icon-wrapper::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        opacity: 0.1;
        z-index: 1;
    }

    .vmg-icon {
        width: 80px;
        height: 80px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 2;
        border: 3px solid #3498db;
    }

    .icon-img {
        width: 40px;
        height: 40px;
        object-fit: contain;
    }

    .vmg-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 1.5rem;
        position: relative;
    }

    .vmg-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background: linear-gradient(45deg, #3498db, #2980b9);
        border-radius: 2px;
    }

    .vmg-description {
        font-size: 1rem;
        color: #7f8c8d;
        line-height: 1.7;
        font-weight: 400;
    }

    .highlight-text {
        color: #2c3e50;
        font-weight: 600;
        text-decoration: underline;
        text-decoration-color: #3498db;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .vmg-container {
            grid-template-columns: 1fr;
            gap: 2rem;
            padding: 0 1rem;
        }

        .vmg-item {
            padding: 2rem 1.5rem;
        }

        .vmg-title {
            font-size: 1.5rem;
        }

        .vision-mission-section {
            padding: 3rem 0;
        }
    }

    @media (max-width: 1024px) and (min-width: 769px) {
        .vmg-container {
            gap: 2rem;
        }

        .vmg-item {
            padding: 2.5rem 1.5rem;
        }
    }
    .hero-section {
        background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        /* min-height: 100vh; */
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .hero-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .hero-text {
        color: white;
    }

    .hero-text .subtitle {
        color: #3498db;
        font-size: 1.0rem;
        font-weight: 600;
        margin-bottom: 4rem;
        margin-top: 4rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .hero-text h1 {
        font-size: 2.5rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 4rem;
    }

    .hero-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .developer-illustration {
        width: 100%;
        max-width: 500px;
        height: auto;
    }

    .about-section {
        padding: 5rem 0;
        background: #f8f9fa;
    }

    .about-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .about-title {
        color: #3498db;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .about-text {
        color: #2c3e50;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 2rem;
    }

    .company-highlight {
        font-weight: 600;
        color: #2c3e50;
    }

    .portfolio-btn {
        background: #3498db;
        color: white;
        padding: 1rem 2rem;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .portfolio-btn:hover {
        background: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
    }

    @media (max-width: 768px) {
        .hero-content {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 2rem;
        }

        .hero-text h1 {
            font-size: 1.5rem;
        }

        .about-content {
            padding: 0 1rem;
        }
    }
</style>


@endsection
