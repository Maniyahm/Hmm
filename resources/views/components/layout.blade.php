<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hm² Infotech</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        /* Add this CSS to fix the 175% zoom display issue */

        /* Fix for high zoom levels and browser scaling */
        @media screen and (-webkit-min-device-pixel-ratio: 1.5),
        screen and (min-resolution: 144dpi),
        screen and (min-resolution: 1.5dppx) {
            .phone-popup-content {
                width: 85vw !important;
                max-width: 500px !important;
                min-width: 320px !important;
                padding: 25px !important;
                margin: 10px !important;
            }

            .phone-popup-header h3 {
                font-size: 1.6rem !important;
            }

            .phone-popup-header p {
                font-size: 1rem !important;
            }

            .phone-contact,
            .youtube {
                padding: 20px !important;
                margin: 15px 0 !important;
            }

            .contact-label {
                font-size: 1rem !important;
            }

            .phone-number {
                font-size: 1.2rem !important;
            }

            .youtube .contact-label {
                font-size: 1rem !important;
            }
        }

        /* Specific fix for Windows scaling (125%, 150%, 175%, 200%) */
        @media screen {
            .phone-popup {
                padding: 20px;
                box-sizing: border-box;
            }

            .phone-popup-content {
                transform: none !important;
                box-sizing: border-box;
                max-height: 90vh;
                overflow-y: auto;
            }

            /* Ensure content scales properly */
            .phone-popup-body {
                margin: 20px 0;
            }

            .phone-contact,
            .youtube {
                min-height: auto;
                box-sizing: border-box;
            }
        }

        /* Fix for very high zoom levels (200%+) */
        @media screen and (-webkit-min-device-pixel-ratio: 2),
        screen and (min-resolution: 192dpi) {
            .phone-popup-content {
                width: 90vw !important;
                max-width: 400px !important;
                padding: 20px !important;
            }

            .phone-popup-header h3 {
                font-size: 1.4rem !important;
            }

            .phone-popup-header p {
                font-size: 0.9rem !important;
            }

            .phone-contact,
            .youtube {
                padding: 15px !important;
                margin: 10px 0 !important;
            }

            .contact-label {
                font-size: 0.9rem !important;
            }

            .phone-number {
                font-size: 1.1rem !important;
            }

            .close-btn {
                width: 40px !important;
                height: 40px !important;
                font-size: 1.2rem !important;
            }
        }

        /* Alternative approach using viewport units for better scaling */
        .phone-popup-content-responsive {
            width: clamp(300px, 85vw, 500px) !important;
            padding: clamp(15px, 4vw, 40px) !important;
        }

        /* Apply responsive class to your content */
        .phone-popup-header h3 {
            font-size: clamp(1.2rem, 4vw, 2rem) !important;
        }

        .phone-popup-header p {
            font-size: clamp(0.8rem, 2.5vw, 1.1rem) !important;
        }

        .contact-label {
            font-size: clamp(0.8rem, 2.5vw, 1.1rem) !important;
        }

        .phone-number {
            font-size: clamp(1rem, 3vw, 1.4rem) !important;
        }

        :root {
            --optional-color: #4608ad;
            --gradient-start: #667eea;
            --gradient-end: #764ba2;
        }

        #fab {
            position: fixed;
            cursor: pointer;
            bottom: 25px;
            right: 25px;
            margin-bottom: 50px;
            background: #667eea;
            border-radius: 50%;
            z-index: 99999;
            width: 65px;
            height: 65px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 8px 25px rgba(70, 8, 173, 0.4);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            outline: none;
        }

        #fab:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 35px rgba(70, 8, 173, 0.6);
            background: linear-gradient(135deg, #5a67d8, #667eea);
        }

        #fab:active {
            transform: scale(0.95);
        }

        #fab i {
            font-size: 2.2rem;
            color: white;
            transition: transform 0.3s ease;
        }

        #fab:hover i {
            transform: rotate(15deg);
        }

        /* Beautiful Phone Popup */
        .phone-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            z-index: 999999;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .phone-popup.show {
            display: flex;
            opacity: 1;
        }

        .phone-popup-content {
            background: linear-gradient(135deg, #ffffff, #f8fafc);
            border-radius: 20px;
            padding: 40px;
            width: 450px;
            max-width: 90vw;
            box-shadow:
                0 25px 50px rgba(0, 0, 0, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            position: relative;
            animation: popupSlideIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .phone-popup-header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .phone-popup-header::before {
            content: '';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            border-radius: 2px;
        }

        .phone-popup-header h3 {
            font-size: 2rem;
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
            font-weight: 700;
        }

        .phone-popup-header p {
            color: #64748b;
            margin: 10px 0 0 0;
            font-size: 1.1rem;
        }

        .close-btn {
            position: absolute;
            top: -10px;
            right: -10px;
            width: 35px;
            height: 35px;
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            cursor: pointer;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
        }

        .close-btn:hover {
            transform: scale(1.1) rotate(90deg);
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.6);
        }

        .phone-popup-body {
            margin: 30px 0;
        }

        .phone-contact {
            background: linear-gradient(135deg, #f8fafc, #ffffff);
            border: 2px solid #e2e8f0;
            border-radius: 15px;
            padding: 25px;
            margin: 20px 0;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .phone-contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.5), transparent);
            transition: left 0.5s ease;
        }

        .phone-contact:hover::before {
            left: 100%;
        }

        .phone-contact:hover {
            border-color: var(--optional-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(70, 8, 173, 0.2);
        }

        /* YouTube Section CSS */
        .youtube {
            background: linear-gradient(135deg, #f8fafc, #ffffff);
            border: 2px solid #e2e8f0;
            border-radius: 15px;
            padding: 25px;
            margin: 20px 0;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .youtube::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.5), transparent);
            transition: left 0.5s ease;
        }

        .youtube:hover::before {
            left: 100%;
        }

        .youtube:hover {
            border-color: var(--optional-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(70, 8, 173, 0.2);
        }

        .youtube .contact-label {
            font-size: 1.1rem;
            color: #475569;
            margin: 0;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: color 0.3s ease;
        }

        .youtube .contact-label:hover {
            color: #4608ad;
            text-decoration: none;
        }

        .youtube .contact-label:focus {
            outline: 2px solid #4608ad;
            outline-offset: 2px;
            text-decoration: none;
        }

        .youtube .contact-label i {
            font-size: 1.3rem;
            color: #ff0000 !important;
        }

        .contact-label {
            font-size: 1.1rem;
            color: #475569;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .phone-number {
            font-size: 1.4rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
            letter-spacing: 1px;
        }

        /* Animation */
        @keyframes popupSlideIn {
            0% {
                transform: translateY(-50px) scale(0.8);
                opacity: 0;
            }

            100% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            #fab {
                right: 20px;
                bottom: 20px;
                width: 60px;
                height: 60px;
            }

            .phone-popup-content {
                width: 350px;
                padding: 30px 25px;
            }

            .phone-popup-header h3 {
                font-size: 1.6rem;
            }

            .phone-number {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .phone-popup-content {
                width: 300px;
                padding: 25px 20px;
            }

            .phone-contact {
                padding: 20px;
            }
        }

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
    <!-- FAB Contact Button - Available on all pages -->
    <div id="fab">
        <i class="ri-phone-line"></i>
    </div>

    <!-- Beautiful Phone Popup - Available on all pages -->
    <div id="phonePopup" class="phone-popup">
        <div class="phone-popup-content phone-popup-content-responsive">
            <div class="phone-popup-header">
                <h3>📞 Contact Us</h3>
                <p>Choose your preferred contact method</p>
                <span class="close-btn" onclick="closePhonePopup()">×</span>
            </div>

            <!-- Replace the existing YouTube section in your popup with this code -->
            <!-- Replace the existing YouTube section in your popup with this code -->
            <div class="phone-popup-body">
                @if(auth()->check())
                @if(auth()->user()->role == 2)
                <!-- Show only Recruiter Tutorial -->
                <div class="youtube" onclick="window.open('https://www.youtube.com/watch?v=EWjUo3mlcY8', '_blank')"
                    style="cursor: pointer;">
                    <div class="contact-label" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Watch Recruiter Tutorial">
                        <i class="fab fa-youtube" style="color: red;"></i> Employer Tutorial
                    </div>
                </div>
                @elseif(auth()->user()->role == 1)
                <!-- Show only Job Seeker Tutorial -->
                <div class="youtube" onclick="window.open('https://www.youtube.com/watch?v=kSu2dC4u9fE', '_blank')"
                    style="cursor: pointer;">
                    <div class="contact-label" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Watch Job Seeker Tutorial">
                        <i class="fab fa-youtube" style="color: red;"></i> Job Seeker Tutorial
                    </div>
                </div>
                @else
                <!-- Show both tutorials if role is neither 1 nor 2 -->
                <div class="youtube" onclick="window.open('https://www.youtube.com/watch?v=EWjUo3mlcY8', '_blank')"
                    style="cursor: pointer;">
                    <div class="contact-label" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Watch Recruiter Tutorial">
                        <i class="fab fa-youtube" style="color: red;"></i> Employer Tutorial
                    </div>
                </div>
                <div class="youtube" onclick="window.open('https://www.youtube.com/watch?v=kSu2dC4u9fE', '_blank')"
                    style="cursor: pointer;">
                    <div class="contact-label" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Watch Job Seeker Tutorial">
                        <i class="fab fa-youtube" style="color: red;"></i> Job Seeker Tutorial
                    </div>
                </div>
                @endif
                @else
                <!-- User not logged in - Show both tutorials -->
                <div class="youtube" onclick="window.open('https://www.youtube.com/watch?v=EWjUo3mlcY8', '_blank')"
                    style="cursor: pointer;">
                    <div class="contact-label" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Watch Recruiter Tutorial">
                        <i class="fab fa-youtube" style="color: red;"></i> Employer Tutorial
                    </div>
                </div>
                <div class="youtube" onclick="window.open('https://www.youtube.com/watch?v=kSu2dC4u9fE', '_blank')"
                    style="cursor: pointer;">
                    <div class="contact-label" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Watch Job Seeker Tutorial">
                        <i class="fab fa-youtube" style="color: red;"></i> Job Seeker Tutorial
                    </div>
                </div>
                @endif

                <!-- Keep your existing phone contact sections -->
                <div class="phone-contact" onclick="callNumber('+919426428673')">
                    <div class="contact-label">☎️ Primary Support</div>
                    <div class="phone-number">+919426428673</div>
                </div>

                <div class="phone-contact"
                    onclick="window.location.href='mailto:jobs@sgcci.in?subject=Subject&body=Body%20of%20email'">
                    <div class="contact-label">📧 Email</div>
                    <div class="phone-number">jobs@sgcci.in</div>
                </div>
            </div>
        </div>
    </div>

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





            // FAB and Popup JavaScript - Available on all pages
            document.addEventListener('DOMContentLoaded', function() {
                // FAB click event
                const fab = document.getElementById('fab');
                if (fab) {
                    fab.addEventListener('click', function() {
                        const phonePopup = document.getElementById('phonePopup');
                        phonePopup.classList.add('show');
                    });
                }

                // Close popup when clicking outside
                const phonePopup = document.getElementById('phonePopup');
                if (phonePopup) {
                    phonePopup.addEventListener('click', function(e) {
                        if (e.target === this) {
                            closePhonePopup();
                        }
                    });
                }
            });

            // Close the popup when the close button is clicked
            function closePhonePopup() {
                const phonePopup = document.getElementById('phonePopup');
                phonePopup.classList.remove('show');
            }

            // Call function for specific numbers
            function callNumber(phoneNumber) {
                // Visual feedback - show calling state
                const allButtons = document.querySelectorAll('.call-btn');
                allButtons.forEach(btn => {
                    if (btn.onclick && btn.onclick.toString().includes(phoneNumber)) {
                        btn.classList.add('calling');
                        btn.innerHTML = `<i class="ri-phone-fill"></i>Calling...`;
                    }
                });

                closePhonePopup(); // Close the popup first

                // Try to initiate the call directly
                try {
                    // This works on mobile devices and some desktop apps
                    window.location.href = `tel:${phoneNumber}`;

                    // For desktop browsers, show a custom confirmation dialog
                    setTimeout(() => {
                        if (!isMobileDevice()) {
                            showCustomCallDialog(phoneNumber);
                        }
                    }, 100);

                } catch (error) {
                    // Fallback for any errors
                    showCustomCallDialog(phoneNumber);
                }

                // Reset button state after 3 seconds
                setTimeout(() => {
                    allButtons.forEach(btn => {
                        btn.classList.remove('calling');
                        if (btn.onclick && btn.onclick.toString().includes('+919426428673')) {
                            btn.innerHTML = `<i class="ri-phone-fill"></i>Call Primary`;
                        } else {
                            btn.innerHTML = `<i class="ri-customer-service-2-fill"></i>Call Service`;
                        }
                    });
                }, 3000);
            }

            // Detect if device is mobile
            function isMobileDevice() {
                return /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ||
                       (window.navigator.userAgentData && window.navigator.userAgentData.mobile) ||
                       window.innerWidth <= 768;
            }

            // Custom call dialog for desktop
            function showCustomCallDialog(phoneNumber) {
                if (confirm(`📞 Call ${phoneNumber}?\n\nClick OK to dial this number.\nThis will open your default phone app or dialer.`)) {
                    // Try multiple methods to open dialer
                    window.open(`tel:${phoneNumber}`, '_self');

                    // Method 2: Try opening in new window (for some desktop apps)
                    setTimeout(() => {
                        try {
                            window.open(`tel:${phoneNumber}`, '_blank');
                        } catch (e) {
                            // Method 3: Copy to clipboard as fallback
                            copyToClipboard(phoneNumber);
                            alert(`📋 Number copied to clipboard: ${phoneNumber}\n\nPaste this number in your phone app to dial.`);
                        }
                    }, 200);
                }
            }

            // Copy number to clipboard
            function copyToClipboard(text) {
                if (navigator.clipboard && window.isSecureContext) {
                    navigator.clipboard.writeText(text);
                } else {
                    // Fallback for older browsers
                    const textArea = document.createElement('textarea');
                    textArea.value = text;
                    document.body.appendChild(textArea);
                    textArea.focus();
                    textArea.select();
                    try {
                        document.execCommand('copy');
                    } catch (err) {
                        console.error('Failed to copy text: ', err);
                    }
                    document.body.removeChild(textArea);
                }
            }

            // Close popup with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closePhonePopup();
                }
            });

    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
