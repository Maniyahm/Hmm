<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <style>
        /* Keep default cursor visible */
        * {
            cursor: auto !important;
        }

        .cursor {
            position: fixed;
            width: 40px;
            height: 40px;
            border: 2px solid #0192ed;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transition: all 0.25s ease-out;
            animation: cursor-pulse 0.5s infinite alternate;
            transform: translate(-50%, -50%);
            background: transparent;
        }

        /* Center dot */
        .cursor::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 6px;
            height: 6px;
            background: #0192ed;
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes cursor-pulse {
            0% {
                transform: translate(-50%, -50%) scale(1);
                box-shadow: 0 0 0 0 rgba(1, 146, 237, 0.2);
            }
            100% {
                transform: translate(-50%, -50%) scale(1.1);
                box-shadow: 0 0 0 10px rgba(1, 146, 237, 0.1);
            }
        }
    </style>
</head>
<body>
    <!-- Custom cursor element -->
    <div class="cursor" id="cursor"></div>

    @include('components.header')
    <div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @yield('content')
    </div>
    @include('components.footer')

    <script>
        // Custom cursor JavaScript
        const cursor = document.getElementById('cursor');

        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        // Hide cursor when mouse leaves window
        document.addEventListener('mouseleave', () => {
            cursor.style.opacity = '0';
        });

        // Show cursor when mouse enters window
        document.addEventListener('mouseenter', () => {
            cursor.style.opacity = '1';
        });

        // Optional: Change cursor on hover over clickable elements
        const clickableElements = document.querySelectorAll('a, button, [onclick]');

        clickableElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursor.style.transform = 'translate(-50%, -50%) scale(1.5)';
                cursor.style.borderColor = '#ff6b6b';
            });

            element.addEventListener('mouseleave', () => {
                cursor.style.transform = 'translate(-50%, -50%) scale(1)';
                cursor.style.borderColor = '#0192ed';
            });
        });
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>





  {{-- Project 2: JobPortal Website --}}
  {{-- <a href="https://jobportal.sgcci.in/" target="_blank"> --}}
    {{-- <div class="portfolio-item website-project" data-category="website">
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
</a> --}}


{{-- Project 2: Restaurant Website --}}
{{-- <a href="https://saudieleagues.com/" target="_blank">
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
                    <img src="{{ asset('saudi.png') }}" alt="Restaurant Website" class="project-screenshot">
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
</a> --}}
