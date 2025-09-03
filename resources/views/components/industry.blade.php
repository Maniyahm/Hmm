{{-- Sector Solutions Section --}}
<section class="sector-solutions-section" style=" margin-top:200px; background-image: url('{{ asset('images/solutions-img.png') }}');">
    <div class="overlay">
        <div class="container">
            <div class="section-header text-center">
                <p class="section-subtitle">Industries</p>
                <h2 class="section-title">Industries</h2>
            </div>

            <div class="industries-grid">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="industry-title">Healthcare</h3>
                </div>

                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="industry-title">Insurance</h3>
                </div>

                <div class="industry-card active">
                    <div class="industry-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="industry-title">Fintech</h3>
                </div>

                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="industry-title">Logistics & Transportation</h3>
                </div>

                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="industry-title">Manufacturing (OEM)</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.sector-solutions-section {
    position: relative;
    padding: 100px 0;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 600px;
}

.sector-solutions-section .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(52, 58, 64, 0.85);
    display: flex;
    align-items: center;
}

.sector-solutions-section .container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.section-header {
    margin-bottom: 60px;
}

.section-subtitle {
    color: #fff;
    font-size: 16px;
    margin-bottom: 10px;
    font-weight: 400;
    letter-spacing: 1px;
}

.section-title {
    color: #fff;
    font-size: 48px;
    font-weight: 700;
    margin: 0;
}

.industries-grid {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin-bottom: 50px;
}

.industry-card {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 40px 30px;
    text-align: center;
    min-width: 200px;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    position: relative;
    overflow: hidden;
}

.industry-card:hover {
    transform: translateY(-10px);
    border-color: #ff6b35;
    background: rgba(255, 255, 255, 0.15);
}

.industry-card.active {
    border: 2px dashed #ff6b35;
    background: rgba(255, 107, 53, 0.1);
}

.industry-card.active::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    border: 2px dashed #ff6b35;
    border-radius: 15px;
    animation: dash 20s linear infinite;
}

@keyframes dash {
    to {
        stroke-dashoffset: -100;
    }
}

.industry-icon {
    width: 80px;
    height: 80px;
    background: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 30px;
    color: #007bff;
}

.industry-title {
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    margin: 0;
    line-height: 1.3;
}

.btn-expert {
    background: #ff6b35;
    color: #fff;
    padding: 15px 35px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
}

.btn-expert:hover {
    background: #e55a2b;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
    color: #fff;
    text-decoration: none;
}

/* Responsive Design */
@media (max-width: 768px) {
    .sector-solutions-section {
        padding: 60px 0;
    }

    .section-title {
        font-size: 32px;
    }

    .industries-grid {
        gap: 20px;
    }

    .industry-card {
        min-width: 160px;
        padding: 30px 20px;
    }

    .industry-icon {
        width: 60px;
        height: 60px;
        font-size: 24px;
    }

    .industry-title {
        font-size: 16px;
    }
}

@media (max-width: 576px) {
    .industries-grid {
        flex-direction: column;
        align-items: center;
    }

    .industry-card {
        width: 100%;
        max-width: 280px;
    }
}
</style>
