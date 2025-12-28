<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مجموعة الكليبي | قريباً</title>
    <meta name="description" content="مجموعة الكليبي - قريباً. إبداعنا يطبخ على مهل.. خلك قريب!">
    <link href="https://db.onlinewebfonts.com/c/b0c178a6bf63dc134f142a232e2f7241?family=Arabic" rel="stylesheet" type="text/css"/>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Arabic";
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
                padding: 15px 20px;
            }

            .logo img {
                height: 32px;
            }

            .hero {
                padding: 40px 15px;
                gap: 30px;
            }

            .hourglass-icon {
                width: 60px;
                height: 60px;
            }

            .main-heading {
                font-size: 28px;
            }

            .status-banner {
                flex-direction: column;
                border-radius: 30px;
            }

            .status-soon {
                border-radius: 30px 30px 0 0;
                padding: 15px 30px;
                font-size: 18px;
            }

            .status-text {
                padding: 15px 30px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Background with Video -->
        <div class="background">
            <video class="background-video" autoplay muted loop playsinline>
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
            <img src="assets/hourglass.svg" alt="Hourglass" class="hourglass-icon">
            
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
</body>
</html>
