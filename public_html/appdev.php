<?php
include 'components/header.php';
?>
    <style>

        /* Hero Section */
        .hero-section {
            background: var(--gradient-primary);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="60" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        .hero-cta {
            background: var(--gradient-secondary);
            border: none;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(240, 147, 251, 0.3);
        }

        .hero-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(240, 147, 251, 0.4);
        }

        .hero-stats .stat-item {
            text-align: center;
        }

        .hero-stats .stat-number {
            display: block;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }

        .hero-stats .stat-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Phone Mockup Styles */
        .app-showcase {
            position: relative;
            max-width: 400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .phone-mockup {
            position: relative;
            width: 300px;
            height: 550px;
            margin: 0 auto;
            animation: float 3s ease-in-out infinite;
        }

        .phone-frame {
            width: 100%;
            height: 100%;
            background: linear-gradient(145deg, #2c3e50, #34495e);
            border-radius: 35px;
            padding: 15px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .phone-frame::before {
            content: '';
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 6px;
            background: #34495e;
            border-radius: 3px;
        }

        .phone-frame::after {
            content: '';
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            border: 2px solid #34495e;
            border-radius: 50%;
        }

        .phone-screen {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 25px;
            overflow: hidden;
            position: relative;
        }

        .app-interface {
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            flex-direction: column;
        }

        .status-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 16px;
            background: #f8f9fa;
            font-size: 14px;
            font-weight: 600;
        }

        .time {
            color: #2c3e50;
        }

        .battery-indicator {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .signal-bars {
            display: flex;
            gap: 2px;
        }

        .signal-bars span {
            width: 3px;
            background: #2c3e50;
            border-radius: 1px;
        }

        .signal-bars span:nth-child(1) { height: 4px; }
        .signal-bars span:nth-child(2) { height: 6px; }
        .signal-bars span:nth-child(3) { height: 8px; }
        .signal-bars span:nth-child(4) { height: 10px; }

        .battery {
            width: 20px;
            height: 10px;
            border: 1px solid #2c3e50;
            border-radius: 2px;
            position: relative;
        }

        .battery::after {
            content: '';
            position: absolute;
            right: -3px;
            top: 2px;
            width: 2px;
            height: 6px;
            background: #2c3e50;
            border-radius: 0 1px 1px 0;
        }

        .battery-level {
            width: 80%;
            height: 100%;
            background: #27ae60;
            border-radius: 1px;
        }

        .app-header {
            padding: 20px 16px;
            background: var(--gradient-primary);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .app-header h3 {
            font-size: 18px;
            font-weight: 600;
            margin: 0;
        }

        .notification-dot {
            width: 8px;
            height: 8px;
            background: #e74c3c;
            border-radius: 50%;
        }

        .app-content {
            flex: 1;
            padding: 20px 16px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .feature-card {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: #f8f9fa;
            border-radius: 12px;
        }

        .feature-card .feature-icon {
            width: 40px;
            height: 40px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }

        .feature-card .feature-text h4 {
            font-size: 14px;
            font-weight: 600;
            margin: 0 0 4px 0;
            color: #2c3e50;
        }

        .feature-card .feature-text p {
            font-size: 12px;
            color: #7f8c8d;
            margin: 0;
        }

        .app-navigation {
            display: flex;
            justify-content: space-around;
            padding: 16px;
            background: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }
        .floating-platforms {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }

        .platform-icon {
            position: absolute;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            animation: floatPlatform 4s ease-in-out infinite;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .platform-icon.ios {
            background: linear-gradient(135deg, #000000, #434343);
            top: 10%;
            right: -5%;
            animation-delay: 0s;
        }

        .platform-icon.android {
            background: linear-gradient(135deg, #a4c639, #7cb342);
            top: 35%;
            left: -10%;
            animation-delay: 1s;
        }

        .platform-icon.react {
            background: linear-gradient(135deg, #61dafb, #21d4fd);
            color: #000;
            bottom: 35%;
            right: -8%;
            animation-delay: 2s;
        }

        .platform-icon.flutter {
            background: linear-gradient(135deg, #02569b, #0277bd);
            bottom: 10%;
            left: -5%;
            animation-delay: 3s;
        }

        /* Service Cards */
        .service-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(102, 126, 234, 0.1);
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
            background: var(--gradient-primary);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: white;
        }

        .service-icon.native-ios {
            background: linear-gradient(135deg, #000000, #434343);
        }

        .service-icon.native-android {
            background: linear-gradient(135deg, #a4c639, #7cb342);
        }

        .service-icon.cross-platform {
            background: var(--gradient-primary);
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .service-description {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .service-list {
            list-style: none;
            padding: 0;
        }

        .service-list li {
            padding: 0.5rem 0;
            color: var(--text-light);
            position: relative;
            padding-left: 1.5rem;
        }

        .service-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-weight: bold;
        }

        /* Industry Cards */
        .industry-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(102, 126, 234, 0.1);
            height: 100%;
        }

        .industry-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.1);
        }

        .industry-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
            color: white;
        }

        .industry-icon.ecommerce { background: linear-gradient(135deg, #ff6b6b, #ee5a24); }
        .industry-icon.healthcare { background: linear-gradient(135deg, #00d2d3, #54a0ff); }
        .industry-icon.fintech { background: linear-gradient(135deg, #5f27cd, #341f97); }
        .industry-icon.education { background: linear-gradient(135deg, #00d2d3, #54a0ff); }
        .industry-icon.social { background: linear-gradient(135deg, #ff9ff3, #f368e0); }
        .industry-icon.travel { background: linear-gradient(135deg, #feca57, #ff9ff3); }
        .industry-icon.logistics { background: linear-gradient(135deg, #48dbfb, #0abde3); }
        .industry-icon.entertainment { background: linear-gradient(135deg, #ff6348, #ff4757); }

        .industry-title {
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .industry-description {
            color: var(--text-light);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Feature Items */
        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .feature-icon-wrapper {
            flex-shrink: 0;
        }

        .feature-icon-wrapper .feature-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .feature-icon.performance { background: linear-gradient(135deg, #667eea, #764ba2); }
        .feature-icon.security { background: linear-gradient(135deg, #f093fb, #f5576c); }
        .feature-icon.scalable { background: linear-gradient(135deg, #4facfe, #00f2fe); }
        .feature-icon.support { background: linear-gradient(135deg, #43e97b, #38f9d7); }

        .feature-content h4 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .feature-content p {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Process Timeline */
        .process-timeline {
            position: relative;
            padding: 2rem 0;
        }

        .process-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, var(--primary-color), var(--secondary-color));
            transform: translateX(-50%);
        }

        .process-step {
            display: flex;
            align-items: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .process-step:nth-child(even) {
            flex-direction: row-reverse;
        }

        .process-step:nth-child(even) .step-content {
            text-align: right;
        }

        .step-number {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--gradient-primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .step-content {
            flex: 1;
            max-width: 400px;
            padding: 0 3rem;
        }

        .step-content h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .step-content p {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Pricing Cards */
        .pricing-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem 2rem;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            height: 100%;
        }

        .pricing-card.featured {
            border-color: var(--primary-color);
            transform: scale(1.05);
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(102, 126, 234, 0.15);
        }

        .pricing-card.featured:hover {
            transform: scale(1.05) translateY(-10px);
        }

        .popular-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--gradient-secondary);
            color: white;
            padding: 8px 24px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .pricing-header {
            margin-bottom: 2rem;
        }

        .pricing-header h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .price {
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 0.25rem;
        }

        .currency {
            font-size: 1.5rem;
            color: var(--text-light);
        }

        .amount {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-color);
        }

        .period {
            font-size: 1rem;
            color: var(--text-light);
        }

        .pricing-features ul {
            list-style: none;
            padding: 0;
        }

        .pricing-features li {
            padding: 0.75rem 0;
            color: var(--text-light);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .pricing-features i {
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .pricing-btn {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 12px;
            background: var(--gradient-primary);
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 2rem;
            transition: all 0.3s ease;
        }

        .pricing-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient-primary);
            color: white;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .cta-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* Section Titles */
        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .section-subtitle {
            font-size: 1.25rem;
            color: var(--text-light);
            margin-bottom: 3rem;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { 
                transform: translateY(0px); 
            }
            50% { 
                transform: translateY(-20px); 
            }
        }

        @keyframes floatPlatform {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg); 
                opacity: 0.8;
            }
            50% { 
                transform: translateY(-20px) rotate(180deg); 
                opacity: 1;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .phone-mockup {
                width: 250px;
                height: 450px;
            }
            
            .floating-platforms {
                display: none;
            }
            
            .process-timeline::before {
                left: 30px;
            }
            
            .process-step {
                flex-direction: row !important;
                padding-left: 60px;
            }
            
            .process-step:nth-child(even) .step-content {
                text-align: left;
            }
            
            .step-number {
                left: 30px;
                transform: translateX(-50%);
            }
            
            .step-content {
                padding: 0 0 0 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .cta-title {
                font-size: 2rem;
            }
        }
    </style>
    <!-- App Development Hero Section -->
    <section class="hero-section" id="app-development-hero">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content fade-in">
                        <h1 class="hero-title">Mobile App Development That Delivers Results</h1>
                        <p class="hero-subtitle">Transform your ideas into powerful mobile applications. We create native and cross-platform apps that engage users and drive business growth across iOS and Android platforms.</p>
                        <div class="hero-buttons">
                            <button class="hero-cta me-3">Start Your App Project</button>
                            <button class="btn btn-outline-light btn-lg">View App Portfolio</button>
                        </div>
                        <div class="hero-stats mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="stat-item">
                                        <span class="stat-number">200+</span>
                                        <span class="stat-label">Apps Launched</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-item">
                                        <span class="stat-number">5M+</span>
                                        <span class="stat-label">Downloads</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-item">
                                        <span class="stat-number">4.8★</span>
                                        <span class="stat-label">Avg Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image fade-in">
                        <div class="app-showcase">
                            <div class="phone-mockup iphone">
                                <div class="phone-frame">
                                    <div class="phone-screen">
                                        <div class="app-interface">
                                            <div class="status-bar">
                                                <span class="time">9:41</span>
                                                <div class="battery-indicator">
                                                    <div class="signal-bars">
                                                        <span></span><span></span><span></span><span></span>
                                                    </div>
                                                    <div class="battery">
                                                        <div class="battery-level"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="app-header">
                                                <h3>GTCS App</h3>
                                                <div class="notification-dot"></div>
                                            </div>
                                            <div class="app-content">
                                                <div class="feature-card">
                                                    <div class="feature-icon">
                                                        <i class="ri-smartphone-line"></i>
                                                    </div>
                                                    <div class="feature-text">
                                                        <h4>Native Performance</h4>
                                                        <p>Lightning fast apps</p>
                                                    </div>
                                                </div>
                                                <div class="feature-card">
                                                    <div class="feature-icon">
                                                        <i class="ri-shield-check-line"></i>
                                                    </div>
                                                    <div class="feature-text">
                                                        <h4>Secure & Reliable</h4>
                                                        <p>Bank-level security</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="app-navigation">
                                                <div class="nav-item active">
                                                    <i class="ri-home-line"></i>
                                                </div>
                                                <div class="nav-item">
                                                    <i class="ri-search-line"></i>
                                                </div>
                                                <div class="nav-item">
                                                    <i class="ri-user-line"></i>
                                                </div>
                                                <div class="nav-item">
                                                    <i class="ri-settings-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="floating-platforms">
                                <div class="platform-icon ios"><i class="ri-apple-line"></i></div>
                                <div class="platform-icon android"><i class="ri-android-line"></i></div>
                                <div class="platform-icon react"><i class="ri-reactjs-line"></i></div>
                                <div class="platform-icon flutter"><i class="ri-flutter-line"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App Types Section -->
    <!--<section class-->
    <!-- App Types Section -->
    <section class="py-5" id="app-types">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">App Development Services</h2>
                    <p class="section-subtitle">We specialize in creating exceptional mobile experiences across all platforms and technologies</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon native-ios">
                            <i class="ri-apple-line"></i>
                        </div>
                        <h3 class="service-title">Native iOS Apps</h3>
                        <p class="service-description">Built with Swift and Objective-C for optimal performance and seamless integration with iOS ecosystem.</p>
                        <ul class="service-list">
                            <li>Native iOS performance</li>
                            <li>App Store optimization</li>
                            <li>iOS-specific features</li>
                            <li>Apple Design Guidelines</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon native-android">
                            <i class="ri-android-line"></i>
                        </div>
                        <h3 class="service-title">Native Android Apps</h3>
                        <p class="service-description">Developed with Java and Kotlin to leverage the full potential of Android platform capabilities.</p>
                        <ul class="service-list">
                            <li>Material Design implementation</li>
                            <li>Google Play Store ready</li>
                            <li>Android-specific integrations</li>
                            <li>Multi-device compatibility</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon cross-platform">
                            <i class="ri-smartphone-line"></i>
                        </div>
                        <h3 class="service-title">Cross-Platform Apps</h3>
                        <p class="service-description">React Native and Flutter solutions that deliver native-like experience across both platforms.</p>
                        <ul class="service-list">
                            <li>Single codebase</li>
                            <li>Faster time to market</li>
                            <li>Cost-effective solution</li>
                            <li>Consistent user experience</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve -->
    <section class="py-5 bg-light" id="industries">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Industries We Serve</h2>
                    <p class="section-subtitle">Delivering specialized mobile solutions across diverse industry verticals</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon ecommerce">
                            <i class="ri-shopping-cart-line"></i>
                        </div>
                        <h4 class="industry-title">E-Commerce</h4>
                        <p class="industry-description">Mobile shopping apps with secure payments, product catalogs, and seamless checkout experiences.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon healthcare">
                            <i class="ri-heart-pulse-line"></i>
                        </div>
                        <h4 class="industry-title">Healthcare</h4>
                        <p class="industry-description">HIPAA-compliant health apps for patient management, telemedicine, and medical data tracking.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon fintech">
                            <i class="ri-bank-card-line"></i>
                        </div>
                        <h4 class="industry-title">FinTech</h4>
                        <p class="industry-description">Secure financial apps with banking integrations, payment processing, and investment tracking.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon education">
                            <i class="ri-graduation-cap-line"></i>
                        </div>
                        <h4 class="industry-title">Education</h4>
                        <p class="industry-description">E-learning platforms with interactive content, progress tracking, and virtual classrooms.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon social">
                            <i class="ri-team-line"></i>
                        </div>
                        <h4 class="industry-title">Social Media</h4>
                        <p class="industry-description">Engaging social platforms with real-time messaging, content sharing, and community features.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon travel">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <h4 class="industry-title">Travel & Tourism</h4>
                        <p class="industry-description">Travel booking apps with itinerary planning, location services, and booking management.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon logistics">
                            <i class="ri-truck-line"></i>
                        </div>
                        <h4 class="industry-title">Logistics</h4>
                        <p class="industry-description">Fleet management and delivery tracking apps with real-time GPS and route optimization.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon entertainment">
                            <i class="ri-movie-line"></i>
                        </div>
                        <h4 class="industry-title">Entertainment</h4>
                        <p class="industry-description">Media streaming apps with content management, user personalization, and multimedia playback.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="py-5" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Why Choose Our App Development</h2>
                    <p class="section-subtitle">We deliver exceptional mobile solutions with cutting-edge technology and user-centric design</p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon performance">
                                <i class="ri-rocket-line"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h4>High Performance</h4>
                            <p>Optimized code architecture and efficient algorithms ensure your app runs smoothly with minimal battery drain and fast loading times across all devices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon security">
                                <i class="ri-shield-check-line"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h4>Advanced Security</h4>
                            <p>Multi-layered security implementation with data encryption, secure API communications, and compliance with industry standards like GDPR and CCPA.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon scalable">
                                <i class="ri-line-chart-line"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h4>Scalable Architecture</h4>
                            <p>Built with modular architecture that grows with your business. Easily add new features, handle increased user load, and expand to new markets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon support">
                                <i class="ri-customer-service-line"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h4>24/7 Support</h4>
                            <p>Comprehensive post-launch support including bug fixes, feature updates, performance monitoring, and technical assistance whenever you need it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Process -->
    <section class="py-5 bg-light" id="process">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Our Development Process</h2>
                    <p class="section-subtitle">A proven methodology that ensures successful app delivery from concept to launch</p>
                </div>
            </div>
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Discovery & Planning</h4>
                        <p>We analyze your requirements, target audience, and business goals to create a comprehensive project roadmap and technical specifications.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>UI/UX Design</h4>
                        <p>Our designers create intuitive wireframes and stunning visual designs that provide exceptional user experience across all devices.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Development</h4>
                        <p>Using agile methodology, our developers build your app with clean code, following best practices and regular milestone deliveries.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4>Testing & QA</h4>
                        <p>Comprehensive testing across multiple devices and scenarios ensures your app is bug-free and performs optimally before launch.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h4>Launch & Support</h4>
                        <p>We handle app store submissions and provide ongoing maintenance, updates, and technical support to ensure continued success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Plans -->
    <section class="py-5" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">App Development Packages</h2>
                    <p class="section-subtitle">Choose the perfect plan for your mobile app development needs</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h4>Starter App</h4>
                            <div class="price">
                                <span class="currency">$</span>
                                <span class="amount">5,999</span>
                            </div>
                            <p class="text-muted">Perfect for simple apps</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="ri-check-line"></i> Single platform (iOS or Android)</li>
                                <li><i class="ri-check-line"></i> Up to 5 screens</li>
                                <li><i class="ri-check-line"></i> Basic UI/UX design</li>
                                <li><i class="ri-check-line"></i> API integration</li>
                                <li><i class="ri-check-line"></i> 3 months support</li>
                                <li><i class="ri-check-line"></i> App store submission</li>
                            </ul>
                        </div>
                        <button class="pricing-btn">Choose Starter</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card featured">
                        <div class="popular-badge">Most Popular</div>
                        <div class="pricing-header">
                            <h4>Professional App</h4>
                            <div class="price">
                                <span class="currency">$</span>
                                <span class="amount">12,999</span>
                            </div>
                            <p class="text-muted">For growing businesses</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="ri-check-line"></i> Cross-platform (iOS & Android)</li>
                                <li><i class="ri-check-line"></i> Up to 15 screens</li>
                                <li><i class="ri-check-line"></i> Custom UI/UX design</li>
                                <li><i class="ri-check-line"></i> Advanced features</li>
                                <li><i class="ri-check-line"></i> Push notifications</li>
                                <li><i class="ri-check-line"></i> Analytics integration</li>
                                <li><i class="ri-check-line"></i> 6 months support</li>
                            </ul>
                        </div>
                        <button class="pricing-btn">Choose Professional</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h4>Enterprise App</h4>
                            <div class="price">
                                <span class="currency">$</span>
                                <span class="amount">25,999</span>
                            </div>
                            <p class="text-muted">For large-scale solutions</p>
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li><i class="ri-check-line"></i> Native iOS & Android</li>
                                <li><i class="ri-check-line"></i> Unlimited screens</li>
                                <li><i class="ri-check-line"></i> Premium UI/UX design</li>
                                <li><i class="ri-check-line"></i> Complex integrations</li>
                                <li><i class="ri-check-line"></i> Advanced security</li>
                                <li><i class="ri-check-line"></i> Admin panel</li>
                                <li><i class="ri-check-line"></i> 12 months support</li>
                            </ul>
                        </div>
                        <button class="pricing-btn">Choose Enterprise</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-5" id="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="cta-title">Ready to Build Your Dream App?</h2>
                    <p class="cta-subtitle">Let's transform your idea into a powerful mobile application that drives results and delights users.</p>
                    <div class="cta-buttons">
                        <button class="hero-cta me-3">Start Your Project</button>
                        <button class="btn btn-outline-light btn-lg">Schedule Consultation</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'components/footer.php';
?>