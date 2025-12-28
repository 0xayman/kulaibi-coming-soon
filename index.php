<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مجموعة الكليبي | قريباً</title>
    <meta name="description" content="مجموعة الكليبي - قريباً. إبداعنا يطبخ على مهل.. خلك قريب!">
    <style>
        /* Huwiya Font Family - All Weights */
        @font-face {
            font-family: 'Huwiya Arabic';
            src: url('assets/itfHuwiyaArabic-Light.otf') format('opentype');
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Huwiya Arabic';
            src: url('assets/itfHuwiyaArabic-Regular.otf') format('opentype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Huwiya Arabic';
            src: url('assets/itfHuwiyaArabic-Medium.otf') format('opentype');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Huwiya Arabic';
            src: url('assets/itfHuwiyaArabic-Bold.otf') format('opentype');
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'Huwiya Arabic';
            src: url('assets/itfHuwiyaArabic-Black.otf') format('opentype');
            font-weight: 900;
            font-style: normal;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Huwiya Arabic', sans-serif;
            min-height: 100vh;
            background-color: #1a1a1a;
            overflow-x: hidden;
        }

        .container {
            min-height: 100vh;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        /* Background with video */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
            background: #1a1a1a;
        }

        .background-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('assets/background.svg');
            background-size: contain;
            background-position: top center;
            background-repeat: no-repeat;
            z-index: 3;
            pointer-events: none;
        }

        .background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9) 0%, rgba(71, 56, 29, 0.9) 100%);
            z-index: 2;
        }

        /* Header/Navigation */
        .header {
            position: relative;
            z-index: 10;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        .language-switcher {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #333;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }

        .language-switcher:hover {
            opacity: 0.7;
        }

        .language-switcher img {
            width: 20px;
            height: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            width: auto;
        }

        /* Hero Section */
        .hero {
            position: relative;
            z-index: 10;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
            text-align: center;
            gap: 40px;
        }

        /* Hourglass Icon */
        .hourglass-icon {
            width: 100px;
            height: 100px;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                filter: drop-shadow(0 0 20px rgba(203, 160, 82, 0.5));
            }
            50% {
                transform: scale(1.05);
                filter: drop-shadow(0 0 30px rgba(203, 160, 82, 0.7));
            }
        }

        /* Status Banner - Main feature */
        .status-banner {
            display: inline-flex;
            align-items: stretch;
            border-radius: 60px;
            overflow: visible;
            border: 0.5px solid transparent;
            background: rgba(255, 255, 255, 0.2);
            height: 43px;
            gap: 0;
            box-shadow: inset 0 -2px 9px 0 rgba(240, 234, 240, 0.16);
            border: 0.5px solid rgba(255, 255, 255, 0.5);
            padding: 4px;
        }

        .status-soon {
            background: #5D3A7A;
            color: white;
            font-size: 18px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0px 24px;
            border-radius: 60px;
            white-space: nowrap;
        }

        .status-soon .emoji {
            font-size: 20px;
            margin-left: 4px;
        }

        .status-text {
            color: white;
            font-size: 16px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8px 20px;
            white-space: nowrap;
        }

        /* Main Heading */
        .main-heading {
            color: #CBA052;
            font-size: clamp(32px, 5vw, 56px);
            font-weight: 700;
            line-height: 1.4;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.5);
            max-width: 900px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                padding: 16px 24px;
            }

            .logo img {
                height: 32px;
            }

            .language-switcher {
                font-size: 13px;
            }

            .language-switcher img {
                width: 18px;
                height: 18px;
            }

            .hero {
                padding: 40px 24px;
                gap: 32px;
            }

            .hourglass-icon {
                width: 80px;
                height: 80px;
            }

            .status-banner {
                height: auto;
                min-height: 40px;
                padding: 3px;
                border-radius: 50px;
            }

            .status-soon {
                font-size: 15px;
                padding: 10px 18px;
                border-radius: 50px;
            }

            .status-soon .emoji {
                font-size: 16px;
            }

            .status-text {
                font-size: 14px;
                padding: 8px 16px;
            }

            .main-heading {
                font-size: clamp(28px, 5.5vw, 36px);
                line-height: 1.3;
            }

            .background-overlay {
                background-size: cover;
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 14px 20px;
            }

            .logo img {
                height: 28px;
            }

            .language-switcher {
                font-size: 12px;
                gap: 6px;
            }

            .language-switcher img {
                width: 16px;
                height: 16px;
            }

            .hero {
                padding: 32px 20px;
                gap: 28px;
            }

            .hourglass-icon {
                width: 70px;
                height: 70px;
            }

            .status-banner {
                height: auto;
                min-height: 36px;
                padding: 3px;
                border-radius: 45px;
                max-width: 90%;
            }

            .status-soon {
                font-size: 14px;
                padding: 8px 16px;
                border-radius: 45px;
            }

            .status-soon .emoji {
                font-size: 15px;
            }

            .status-text {
                font-size: 13px;
                padding: 7px 14px;
            }

            .main-heading {
                font-size: clamp(24px, 6vw, 32px);
                line-height: 1.35;
                max-width: 95%;
            }
        }

        @media (max-width: 390px) {
            .header {
                padding: 12px 16px;
            }

            .logo img {
                height: 26px;
            }

            .language-switcher {
                font-size: 11px;
            }

            .hero {
                padding: 28px 16px;
                gap: 24px;
            }

            .hourglass-icon {
                width: 64px;
                height: 64px;
            }

            .status-banner {
                min-height: 34px;
                padding: 2.5px;
                max-width: 92%;
            }

            .status-soon {
                font-size: 13px;
                padding: 7px 14px;
            }

            .status-text {
                font-size: 12px;
                padding: 6px 12px;
            }

            .main-heading {
                font-size: clamp(22px, 6.5vw, 28px);
                line-height: 1.4;
            }
        }

        @media (max-width: 360px) {
            .status-banner {
                max-width: 95%;
            }

            .status-soon {
                font-size: 12px;
                padding: 6px 12px;
            }

            .status-text {
                font-size: 11px;
                padding: 6px 10px;
            }

            .main-heading {
                font-size: clamp(20px, 7vw, 26px);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Background with Video -->
        <div class="background">
            <video id="bg-video" class="background-video" autoplay muted loop playsinline preload="auto">
                <source src="https://muqla-test.sfo3.cdn.digitaloceanspaces.com/13085426_3840_2160_60fps.mp4" type="video/mp4">
            </video>
            <div class="background-overlay"></div>
        </div>

        <!-- Header -->
        <header class="header">
            <div class="logo">
                <img src="assets/logo.svg" alt="ALKULAIBI GROUP - مجموعة الكليبي">
            </div>
            <div class="language-switcher">
                <img src="assets/language.svg" alt="Language">
                <span>العربية</span>
            </div>
        </header>

        <!-- Hero Section -->
        <main class="hero">
            <!-- Hourglass Icon -->
            <img src="assets/hourglass.gif" alt="Hourglass" class="hourglass-icon">
            
            <div class="status-banner">
                <div class="status-soon">
                    <span>🛠️ قريبًا ...</span>
                </div>
                <div class="status-text">إطلاق موقعنا الجديد</div>
            </div>

            <h1 class="main-heading">
                إبداعنا يطبخ على مهل.. خلك قريب!
            </h1>
        </main>
    </div>

    <script>
        // Ensure video plays on mobile devices
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.getElementById('bg-video');
            
            if (video) {
                // Function to play video
                function playVideo() {
                    const playPromise = video.play();
                    
                    if (playPromise !== undefined) {
                        playPromise
                            .then(() => {
                                console.log('Video playback started successfully');
                            })
                            .catch(error => {
                                console.log('Autoplay prevented, attempting to play on user interaction:', error);
                                
                                // Try to play on any user interaction
                                const playOnInteraction = () => {
                                    video.play().then(() => {
                                        console.log('Video started after user interaction');
                                        // Remove listeners after successful play
                                        document.removeEventListener('touchstart', playOnInteraction);
                                        document.removeEventListener('click', playOnInteraction);
                                        document.removeEventListener('scroll', playOnInteraction);
                                    }).catch(err => {
                                        console.log('Still unable to play video:', err);
                                    });
                                };
                                
                                document.addEventListener('touchstart', playOnInteraction, { once: true });
                                document.addEventListener('click', playOnInteraction, { once: true });
                                document.addEventListener('scroll', playOnInteraction, { once: true });
                            });
                    }
                }
                
                // Set video properties explicitly for mobile
                video.muted = true;
                video.playsInline = true;
                video.setAttribute('playsinline', '');
                video.setAttribute('webkit-playsinline', '');
                
                // Try to play immediately
                playVideo();
                
                // Also try to play when the video is loaded
                video.addEventListener('loadeddata', function() {
                    playVideo();
                });
                
                // Handle visibility change (when user returns to tab)
                document.addEventListener('visibilitychange', function() {
                    if (!document.hidden && video.paused) {
                        playVideo();
                    }
                });
                
                // iOS-specific: try to play when page becomes visible
                window.addEventListener('pageshow', function() {
                    if (video.paused) {
                        playVideo();
                    }
                });
            }
        });
    </script>
</body>
</html>
