@extends('components.layout')

@section('content')

{{-- Portfolio Section --}}
<section class="portfolio-section">
    <div class="portfolio-container">

        {{-- Section Header --}}
        <div class="portfolio-header">
            <h2 class="portfolio-title">Our Creative Portfolio</h2>
            <p class="portfolio-subtitle">Discover our latest projects and creative solutions</p>
        </div>

        {{-- Filter Tabs --}}
        <div class="portfolio-filters">
            <div class="filter-wrapper">
                <button class="filter-btn active" data-filter="all">
                    <span class="filter-icon">🌟</span>
                    <span>All Projects</span>
                </button>
                <button class="filter-btn" data-filter="website">
                    <span class="filter-icon">🌐</span>
                    <span>Websites</span>
                </button>
                <button class="filter-btn" data-filter="app">
                    <span class="filter-icon">📱</span>
                    <span>Mobile Apps</span>
                </button>
            </div>
        </div>

        {{-- Portfolio Grid --}}
        <div class="portfolio-grid">

            {{-- Project 1: Jobportel Website --}}
            <a href="https://jobportal.sgcci.in/" target="_blank">
            <div class="portfolio-item website-project" data-category="website">
                <div class="portfolio-card">
                    <div class="project-badge website-badge">Website</div>
                    <div class="portfolio-image">
                        <div class="browser-mockup">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                            <img src="{{ asset('job.png') }}" alt="Restaurant Website" class="project-screenshot">
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <div class="project-header">
                            <h3 class="project-title">Job-portel</h3>
                        </div>
                        <p class="project-description">
                            SGCCI Job Portal, where recruiters can find top talent and employees can explore exciting career opportunities. Whether you're hiring or job hunting, we connect the right people to the right roles
                        </p>
                    </div>
                </div>
            </div>
            </a>

            {{-- Project 2: affyscout Website --}}
            <a href="https://app.affyscout.com/" target="_blank">
            <div class="portfolio-item website-project" data-category="website">
                <div class="portfolio-card">
                    <div class="project-badge website-badge">Website</div>
                    <div class="portfolio-image">
                        <div class="browser-mockup">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                            <img src="{{ asset('images/affy.png.png') }}" alt="Corporate Website" class="project-screenshot">
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <div class="project-header">
                            <h3 class="project-title">App.Affyscout</h3>

                        </div>
                        <p class="project-description">
                            AffyScout, the ultimate platform for affiliate marketing and brand collaborations. Discover new opportunities, track your performance, and boost your earnings by partnering with top brands.
                        </p>
                    </div>
                </div>
            </div>
            </a>

             {{-- Project 3: Moviemap Website --}}
             <a href="https://moviemap.online/" target="_blank">
             <div class="portfolio-item website-project" data-category="website">
                <div class="portfolio-card">
                    <div class="project-badge website-badge">Website</div>
                    <div class="portfolio-image">
                        <div class="browser-mockup">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                            <img src="{{ asset('images/movie.png') }}" alt="Restaurant Website" class="project-screenshot">
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <div class="project-header">
                            <h3 class="project-title">Movie Map Store</h3>

                        </div>
                        <p class="project-description">
                            Explore MovieMap, your go-to platform for discovering and tracking the latest movies and shows. Get personalized recommendations and stay updated with all the entertainment you love.
                        </p>
                    </div>
                </div>
            </div>
            </a>

            {{-- Project 4: saudieleagues Website --}}
            <a href="https://saudieleagues.com/" target="_blank">

            <div class="portfolio-item website-project" data-category="website">
                <div class="portfolio-card">
                    <div class="project-badge website-badge">Website</div>
                    <div class="portfolio-image">
                        <div class="browser-mockup">
                            <div class="browser-header">
                                <div class="browser-dots">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                            <img src="{{ asset('images/corporate-website.png') }}" alt="Corporate Website" class="project-screenshot">
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <div class="project-header">
                            <h3 class="project-title">Saudi-e-league</h3>

                        </div>
                        <p class="project-description">
                            Saudi E-League, the premier destination for competitive esports in Saudi Arabia. Join us for thrilling tournaments, top-tier gameplay, and a community of passionate gamers.
                        </p>
                    </div>
                </div>
            </div>
            </a>

            {{-- Project 5: Bio-diversity App --}}
            <a href="https://play.google.com/store/apps/details?id=com.biodiversity.org&hl=en_IN" target="_blank">
            <div class="portfolio-item app-project" data-category="app">
                <div class="portfolio-card">
                    <div class="project-badge app-badge">Mobile App</div>
                    <div class="portfolio-image">
                        <div class="phone-mockup">
                            <img src="{{ asset('bio.png') }}" alt="E-Commerce App" class="project-screenshot">
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <div class="project-header">
                            <h3 class="project-title">Bio-diversity</h3>

                        </div>
                        <p class="project-description">
                            Discover and protect biodiversity with our app, designed to help you explore and contribute to the preservation of wildlife and ecosystems. Join the movement to safeguard nature and its diverse species
                        </p>
                    </div>
                </div>
            </div>
            </a>

            {{-- Project 6: Fitness App --}}
            <a href="https://play.google.com/store/apps/details?id=com.helloastro.customer" target="_blank">
            <div class="portfolio-item app-project" data-category="app">
                <div class="portfolio-card">
                    <div class="project-badge app-badge">Mobile App</div>
                    <div class="portfolio-image">
                        <div class="phone-mockup">
                            <img src="{{ asset('images/doctor.png') }}" alt="Fitness App" class="project-screenshot">
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <div class="project-header">
                            <h3 class="project-title">Astrology Horoscope</h3>

                        </div>
                        <p class="project-description">
                            Developed a captivating Astrology Horoscope app with Flutter, offering personalized daily predictions, zodiac insights, and compatibility analyses. The app provides users with an engaging platform to explore it.                       </p>
                    </div>
                </div>
            </div>
            </a>

            {{-- Project 7: E-Commerce App --}}
            <a href="https://play.google.com/store/apps/details?id=com.edutech.edutech&hl=en&gl=US" target="_blank">
            <div class="portfolio-item app-project" data-category="app">
                <div class="portfolio-card">
                    <div class="project-badge app-badge">Mobile App</div>
                    <div class="portfolio-image">
                        <div class="phone-mockup">
                            <img src="{{ asset('images/edu.png') }}" alt="E-Commerce App" class="project-screenshot">
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <div class="project-header">
                            <h3 class="project-title">Edutech</h3>

                        </div>
                        <p class="project-description">
                            Developed Eduteck, an educational app powered by Flutter, offering interactive learning modules, quizzes, and progress tracking for an engaging 
                        </p>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    {{-- Background Elements --}}
    <div class="bg-elements">
        <div class="bg-circle bg-circle-1"></div>
        <div class="bg-circle bg-circle-2"></div>
        <div class="bg-circle bg-circle-3"></div>
    </div>
</section>

<style>
    .portfolio-section {
        padding: 6rem 0;
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 25%, #0f3460 50%, #16213e 75%, #1a1a2e 100%);
        position: relative;
        overflow: hidden;
        min-height: 100vh;
    }

    /* Background Elements */
    .bg-elements {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        z-index: 1;
    }

    .bg-circle {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(138, 43, 226, 0.3) 0%, rgba(75, 0, 130, 0.2) 50%, transparent 100%);
        filter: blur(40px);
    }

    .bg-circle-1 {
        width: 400px;
        height: 400px;
        top: 10%;
        right: -100px;
        background: radial-gradient(circle, rgba(138, 43, 226, 0.4) 0%, rgba(75, 0, 130, 0.3) 50%, transparent 100%);
    }

    .bg-circle-2 {
        width: 300px;
        height: 300px;
        bottom: 20%;
        left: -50px;
        background: radial-gradient(circle, rgba(72, 61, 139, 0.3) 0%, rgba(106, 90, 205, 0.2) 50%, transparent 100%);
    }

    .bg-circle-3 {
        width: 200px;
        height: 200px;
        top: 50%;
        left: 20%;
        background: radial-gradient(circle, rgba(147, 112, 219, 0.2) 0%, rgba(138, 43, 226, 0.1) 50%, transparent 100%);
    }

    .portfolio-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        position: relative;
        z-index: 2;
    }

    /* Header */
    .portfolio-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .portfolio-title {
        font-size: 3rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1rem;
        background: linear-gradient(45deg, #ffffff, #e6e6fa, #dda0dd);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 2px 10px rgba(255, 255, 255, 0.1);
    }

    .portfolio-subtitle {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.7);
        margin: 0;
    }

    /* Filters */
    .portfolio-filters {
        display: flex;
        justify-content: center;
        margin-bottom: 4rem;
    }

    .filter-wrapper {
        display: flex;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50px;
        padding: 8px;
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }

    .filter-btn {
        background: transparent;
        border: none;
        color: rgba(255, 255, 255, 0.7);
        font-size: 1rem;
        font-weight: 600;
        padding: 1rem 2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        border-radius: 40px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .filter-btn.active {
        background: linear-gradient(45deg, #8a2be2, #9370db);
        color: white;
        box-shadow: 0 8px 20px rgba(138, 43, 226, 0.4);
    }

    .filter-btn:hover {
        color: white;
        background: rgba(255, 255, 255, 0.15);
    }

    .filter-icon {
        font-size: 1.2rem;
    }

    /* Portfolio Grid */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 2.5rem;
    }

    .portfolio-item {
        opacity: 1;
        transform: translateY(0);
        transition: all 0.6s ease;
    }

    .portfolio-item.hidden {
        opacity: 0;
        transform: translateY(50px);
        pointer-events: none;
    }

    .portfolio-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        transition: all 0.4s ease;
        position: relative;
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
    }

    .portfolio-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
        border-color: rgba(138, 43, 226, 0.5);
    }

    /* Project Badge */
    .project-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 3;
        backdrop-filter: blur(10px);
    }

    .app-badge {
        background: linear-gradient(45deg, #ff6b6b, #ee5a24);
        color: white;
        box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
    }

    .website-badge {
        background: linear-gradient(45deg, #4ecdc4, #44a08d);
        color: white;
        box-shadow: 0 4px 15px rgba(78, 205, 196, 0.3);
    }

    /* Mockups */
    .portfolio-image {
        padding: 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        min-height: 250px;
    }

    .phone-mockup {
        width: 200px;
        height: 350px;
        background: #1a1a2e;
        border-radius: 25px;
        padding: 15px;
        position: relative;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        border: 2px solid #333;
    }

    .phone-mockup::before {
        content: '';
        position: absolute;
        top: 5px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: #666;
        border-radius: 2px;
    }

    .browser-mockup {
        width: 100%;
        max-width: 400px;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        border: 1px solid #ddd;
    }

    .browser-header {
        background: #f1f3f4;
        padding: 12px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #e0e0e0;
    }

    .browser-dots {
        display: flex;
        gap: 6px;
    }

    .browser-dots span {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #ddd;
    }

    .browser-dots span:nth-child(1) { background: #ff5f56; }
    .browser-dots span:nth-child(2) { background: #ffbd2e; }
    .browser-dots span:nth-child(3) { background: #27ca3f; }

    .project-screenshot {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .browser-mockup .project-screenshot {
        border-radius: 0;
        height: 250px;
    }

    /* Content */
    .portfolio-content {
        padding: 2rem;
        background: rgba(255, 255, 255, 0.98);
    }

    .project-header {
        margin-bottom: 1rem;
    }

    .project-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 0.5rem;
    }

    .tag {
        background: linear-gradient(45deg, #8a2be2, #9370db);
        color: white;
        padding: 4px 12px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
        box-shadow: 0 2px 8px rgba(138, 43, 226, 0.3);
    }

    .project-description {
        color: #4a5568;
        line-height: 1.6;
        margin: 1.5rem 0;
    }

    .project-stats {
        display: flex;
        gap: 2rem;
        padding-top: 1rem;
        border-top: 1px solid #e2e8f0;
    }

    .stat {
        text-align: center;
    }

    .stat-number {
        display: block;
        font-size: 1.2rem;
        font-weight: 700;
        color: #1a1a2e;
    }

    .stat-label {
        font-size: 0.8rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .portfolio-grid {
            grid-template-columns: 1fr;
        }

        .filter-wrapper {
            flex-direction: column;
            border-radius: 20px;
        }

        .filter-btn {
            justify-content: center;
        }

        .portfolio-title {
            font-size: 2rem;
        }

        .portfolio-section {
            padding: 4rem 0;
        }

        .project-stats {
            gap: 1rem;
        }

        .bg-circle-1 {
            width: 250px;
            height: 250px;
            right: -50px;
        }

        .bg-circle-2 {
            width: 200px;
            height: 200px;
            left: -30px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            portfolioItems.forEach(item => {
                if (filterValue === 'all') {
                    item.classList.remove('hidden');
                } else {
                    if (item.classList.contains(filterValue + '-project')) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                }
            });
        });
    });
});
</script>


@endsection
