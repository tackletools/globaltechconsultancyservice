<?php
include 'components/header.php';
?>
    
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-dark: #4f46e5;
            --secondary-color: #f59e0b;
            --accent-color: #06b6d4;
            --dark-color: #0f172a;
            --light-color: #f8fafc;
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --gradient-accent: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --gradient-success: linear-gradient(135deg, #26de81 0%, #20bf6b 100%); /* Added for stat-icon.clients */
        }
            /* Enhanced Mobile-First Responsive Carousel */
        .main-carousel {
            height: 100vh;
            min-height: 500px;
            max-height: 700px;
        }
        
        .carousel-item {
            height: 100vh;
            min-height: 500px;
            max-height: 700px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }
        
        .carousel-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }
        
        .carousel-content {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 2;
            display: flex;
            align-items: center;
            padding: 1rem 0;
        }
        
        .carousel-item.slide-1 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .carousel-item.slide-2 {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }
        
        .carousel-item.slide-3 {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }
        
        .hero-btn {
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            display: inline-block;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .hero-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            color: white;
            background: rgba(255, 255, 255, 0.35);
        }

        .hero-btn:active {
            transform: translateY(-1px);
        }

        /* Hero Image Responsive Styling */
        .hero-image {
            border-radius: 15px !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3) !important;
            transition: transform 0.3s ease;
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .hero-image:hover {
            transform: scale(1.02);
        }

        /* Mobile Responsive Breakpoints */
        
        /* Extra Small Devices (phones, 320px and up) */
        @media (max-width: 576px) {
            .main-carousel {
                height: 100vh;
                min-height: 450px;
                max-height: 600px;
            }
            
            .carousel-item {
                height: 100vh;
                min-height: 450px;
                max-height: 600px;
            }
            
            .carousel-content {
                padding: 0.5rem 0;
            }
            
            .hero-title {
                font-size: 1.75rem !important;
                line-height: 1.2;
                margin-bottom: 1rem !important;
            }
            
            .hero-subtitle {
                font-size: 0.9rem !important;
                line-height: 1.4;
                margin-bottom: 1.5rem !important;
            }
            
            .hero-btn {
                padding: 0.6rem 1.5rem;
                font-size: 0.9rem;
                width: 100%;
                max-width: 250px;
                text-align: center;
            }
            
            .hero-image {
                max-height: 200px;
                margin-bottom: 1rem;
            }
            
            .hero-content-padding {
                padding: 0 1rem;
            }
        }
        
        /* Small Devices (landscape phones, 576px and up) */
        @media (min-width: 576px) and (max-width: 767px) {
            .main-carousel {
                height: 100vh;
                min-height: 500px;
                max-height: 650px;
            }
            
            .carousel-item {
                height: 100vh;
                min-height: 500px;
                max-height: 650px;
            }
            
            .hero-title {
                font-size: 2rem !important;
                line-height: 1.3;
                margin-bottom: 1rem !important;
            }
            
            .hero-subtitle {
                font-size: 1rem !important;
                line-height: 1.5;
                margin-bottom: 2rem !important;
            }
            
            .hero-btn {
                padding: 0.7rem 1.8rem;
                font-size: 0.95rem;
            }
            
            .hero-image {
                max-height: 250px;
                margin-bottom: 1.5rem;
            }
            
            .hero-content-padding {
                padding: 0 1.5rem;
            }
        }
        
        /* Medium Devices (tablets, 768px and up) */
        @media (min-width: 768px) and (max-width: 991px) {
            .main-carousel {
                height: 80vh;
                min-height: 550px;
                max-height: 650px;
            }
            
            .carousel-item {
                height: 80vh;
                min-height: 550px;
                max-height: 650px;
            }
            
            .hero-title {
                font-size: 2.25rem !important;
                line-height: 1.3;
                margin-bottom: 1.25rem !important;
            }
            
            .hero-subtitle {
                font-size: 1.1rem !important;
                line-height: 1.6;
                margin-bottom: 2rem !important;
            }
            
            .hero-btn {
                padding: 0.75rem 2rem;
                font-size: 1rem;
            }
            
            .hero-image {
                max-height: 300px;
            }
            
            .hero-content-padding {
                padding: 0 2rem;
            }
        }
        
        /* Large Devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            .main-carousel {
                height: 70vh;
                min-height: 600px;
                max-height: 700px;
            }
            
            .carousel-item {
                height: 70vh;
                min-height: 600px;
                max-height: 700px;
            }
            
            .hero-title {
                font-size: 2.5rem !important;
                line-height: 1.3;
                margin-bottom: 1.5rem !important;
            }
            
            .hero-subtitle {
                font-size: 1.2rem !important;
                line-height: 1.6;
                margin-bottom: 2.5rem !important;
            }
            
            .hero-btn {
                padding: 0.75rem 2rem;
                font-size: 1rem;
            }
            
            .hero-image {
                max-height: 350px;
            }
            
            .hero-content-padding {
                padding: 0 3rem;
            }
        }

        /* Portrait Orientation Adjustments */
        @media (orientation: portrait) and (max-width: 768px) {
            .main-carousel,
            .carousel-item {
                min-height: 500px;
            }
            
            .hero-image {
                max-height: 180px;
            }
        }

        /* Landscape Orientation Adjustments for Mobile */
        @media (orientation: landscape) and (max-height: 500px) {
            .main-carousel,
            .carousel-item {
                height: 100vh;
                min-height: 400px;
            }
            
            .hero-title {
                font-size: 1.5rem !important;
                margin-bottom: 0.75rem !important;
            }
            
            .hero-subtitle {
                font-size: 0.85rem !important;
                margin-bottom: 1rem !important;
            }
            
            .hero-btn {
                padding: 0.5rem 1.25rem;
                font-size: 0.85rem;
            }
            
            .hero-image {
                max-height: 150px;
            }
        }

        /* Very Small Screens (320px and below) */
        @media (max-width: 320px) {
            .hero-title {
                font-size: 1.5rem !important;
            }
            
            .hero-subtitle {
                font-size: 0.8rem !important;
            }
            
            .hero-btn {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }
            
            .hero-content-padding {
                padding: 0 0.75rem;
            }
        }

        /* Carousel Controls Responsive */
        .carousel-control-prev,
        .carousel-control-next {
            width: 10%;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .carousel-control-prev,
            .carousel-control-next {
                width: 15%;
            }
        }

        /* Text Highlighting */
        .text-highlight {
            color: #fbbf24 !important;
        }

        /* Utility Classes */
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .backdrop-blur {
            backdrop-filter: blur(10px);
        }
    
    /* Industries section */
        .industry-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: white;
            margin-bottom: 0.8rem;
        }
        
        .industry-card {
            transition: all 0.3s ease;
            border: none;
            background: white;
        }
        
        .industry-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        /* Feature cards (Why Choose GTCS) */
        .feature-card {
            background: white;
            border-radius: 12px;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: white;
            margin-bottom: 0.8rem; /* Added for consistency with industry-icon */
        }

        .feature-icon.innovation {
            background: var(--gradient-primary);
        }

        .feature-icon.quality {
            background: var(--gradient-secondary);
        }

        .feature-icon.support {
            background: var(--gradient-accent);
        }

        .feature-icon.security {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        /* About section */
        .about-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        .gradient-text {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Enhanced Stats Cards */
        .stats-container {
            background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(248,250,252,0.8) 100%);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            border: 1px solid rgba(255,255,255,0.3);
            padding: 1rem;
            position: relative;
            overflow: hidden;
        }

        .stats-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(99,102,241,0.1) 0%, rgba(124,58,237,0.05) 100%);
            z-index: 0;
        }

        .stats-grid {
            position: relative;
            z-index: 1;
        }

        .stat-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 12px;
            padding: 1rem;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255,255,255,0.6);
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .stat-card::before {
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

        .stat-card:hover::before {
            transform: scaleX(1);
        }

        .stat-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(99,102,241,0.2);
            border-color: rgba(99,102,241,0.3);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            margin: 0 auto 0.75rem;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: white;
            transition: all 0.3s ease;
            position: relative;
        }

        .stat-icon::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 12px;
            background: inherit;
            filter: blur(6px);
            opacity: 0.3;
            z-index: -1;
        }

        .stat-card:hover .stat-icon {
            transform: rotateY(180deg);
        }

        .stat-icon.projects {
            background: var(--gradient-primary);
        }

        .stat-icon.clients {
            background: var(--gradient-success);
        }

        .stat-icon.experience {
            background: var(--gradient-secondary);
        }

        .stat-icon.support {
            background: var(--gradient-accent);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.25rem;
            line-height: 1;
        }

        .stat-label {
            font-size: 0.8rem;
            font-weight: 600;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.25rem;
        }

        .stat-description {
            font-size: 0.7rem;
            color: #94a3b8;
            line-height: 1.4;
        }

        .stats-header {
            text-align: center;
            margin-bottom: 1rem;
        }

        .stats-title {
            font-size: 1.25rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.25rem;
        }

        .stats-subtitle {
            color: #64748b;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Floating particles effect */
        .floating-particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: linear-gradient(45deg, #6366f1, #8b5cf6);
            border-radius: 50%;
            animation: float-particle 6s ease-in-out infinite; /* Renamed to avoid conflict */
            opacity: 0.6;
        }

        .floating-particle:nth-child(odd) {
            animation-duration: 8s;
            animation-delay: -2s;
        }

        .floating-particle:nth-child(even) {
            animation-duration: 10s;
            animation-delay: -4s;
        }

        @keyframes float-particle { /* Renamed to avoid conflict */
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .service-item {
            transition: all 0.3s ease;
            border-left-width: 3px !important;
        }

        .service-item:hover {
            border-left-width: 5px !important;
            transform: translateX(3px);
            background-color: rgba(255,255,255,0.8) !important;
        }

        .x-small {
            font-size: 0.75rem;
        }

        .mission-card {
            background: white;
            border-radius: 12px;
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s ease;
        }

        .mission-card:hover {
            border-left-width: 6px;
            transform: translateX(5px);
        }

        .vision-card {
            background: white;
            border-radius: 12px;
            border-left: 4px solid var(--secondary-color);
            transition: all 0.3s ease;
        }

        .vision-card:hover {
            border-left-width: 6px;
            transform: translateX(5px);
        }

        @media (max-width: 768px) {
            .section-title { /* Moved from original position to group media queries */
                font-size: 1.5rem;
            }
            .stat-number {
                font-size: 1.75rem;
            }
            .stat-icon {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            .stats-container {
                padding: 0.75rem;
            }
            .stat-card {
                padding: 0.75rem;
            }
            .process-step:not(:last-child)::after { /* Moved from original position */
                display: none;
            }
            section { /* Moved from original position */
                padding: 2rem 0 !important;
            }
        }
        
         /* Case Studies Styles */
        .case-study-card {
            transition: all 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }
        
        .case-study-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        .case-study-overlay {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.9), rgba(118, 75, 162, 0.9));
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        
        .case-study-card:hover .case-study-overlay {
            opacity: 1;
        }
        
        .case-study-icon {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.5rem;
        }
        
        /* Client Logo Styles - Not present in provided HTML, but keeping for completeness if needed */
        .client-logo {
            height: 60px;
            width: auto;
            max-width: 120px;
            object-fit: contain;
            transition: all 0.3s ease;
            filter: grayscale(100%) opacity(0.7);
        }
        
        .client-logo:hover {
            filter: grayscale(0%) opacity(1);
            transform: scale(1.05);
        }
        
        /* Section Title Gradient */
        .section-title-gradient {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Minimal spacing overrides */
        .py-custom {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }
        
        .mb-custom {
            margin-bottom: 1rem !important;
        }
        
        .mb-custom-sm {
            margin-bottom: 0.5rem !important;
        }
        
        /* Small font utilities */
        .fs-sm {
            font-size: 0.875rem !important;
        }
        
        .fs-xs {
            font-size: 0.75rem !important;
        }
        
        /*Testimonials Section*/
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .testimonial-accent::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        /* Work Process */
        .work-process {
            padding: 4rem 0;
            background: white;
        }

        .process-step {
            text-align: center;
            padding: 1.5rem;
            position: relative;
        }

        .process-number {
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 1rem;
        }

        .process-step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 30px;
            right: -50%;
            width: 100%;
            height: 2px;
            background: var(--primary-color);
            z-index: -1;
        }

        /* Section Titles */
        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 0.5rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            text-align: center;
            color: #6b7280;
            margin-bottom: 3rem;
        }

        /* Utilities */
        .text-gradient {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Animation for revealed sections */
        section.revealed {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        /* Ripple animation for stat cards */
        @keyframes ripple {
            to {
                width: 200px;
                height: 200px;
                opacity: 0;
            }
        }
    </style>
    
    <!-- Hero Section -->
    <div id="heroCarousel" class="carousel slide carousel-fade main-carousel" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner h-100">
            <!-- Slide 1 - Web Development -->
            <div class="carousel-item active slide-1">
                <div class="carousel-content">
                    <div class="container-fluid">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-6 col-md-7 order-2 order-md-1">
                                <div class="hero-content-padding">
                                    <h1 class="hero-title display-5 fw-bold text-white text-shadow">
                                        Transform Your Ideas into 
                                        <span class="text-highlight">Digital Reality</span>
                                    </h1>
                                    <p class="hero-subtitle lead text-white-50">
                                        We create stunning websites, powerful applications, and engaging digital experiences 
                                        that drive your business forward with cutting-edge technology.
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start">
                                        <a href="#services" class="hero-btn">
                                            <i class="ri-rocket-line me-2"></i>Start Your Project
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 order-1 order-md-2 text-center">
                                <div class="p-2 p-md-3">
                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                                         alt="Web Development" class="hero-image img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 - Digital Marketing -->
            <div class="carousel-item slide-2">
                <div class="carousel-content">
                    <div class="container-fluid">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-6 col-md-7 order-2 order-md-1">
                                <div class="hero-content-padding">
                                    <h1 class="hero-title display-5 fw-bold text-white text-shadow">
                                        Grow Your Brand with
                                        <span class="text-highlight">Smart Marketing</span>
                                    </h1>
                                    <p class="hero-subtitle lead text-white-50">
                                        Reach your target audience effectively with data-driven digital marketing 
                                        strategies that deliver measurable results and sustainable growth.
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start">
                                        <a href="#services" class="hero-btn">
                                            <i class="ri-line-chart-line me-2"></i>Boost Your Business
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 order-1 order-md-2 text-center">
                                <div class="p-2 p-md-3">
                                    <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                                         alt="Digital Marketing" class="hero-image img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 - UI/UX Design -->
            <div class="carousel-item slide-3">
                <div class="carousel-content">
                    <div class="container-fluid">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-6 col-md-7 order-2 order-md-1">
                                <div class="hero-content-padding">
                                    <h1 class="hero-title display-5 fw-bold text-white text-shadow">
                                        Design Experiences That
                                        <span class="text-highlight">Captivate Users</span>
                                    </h1>
                                    <p class="hero-subtitle lead text-white-50">
                                        Create intuitive and beautiful user interfaces that provide seamless 
                                        user experiences across all devices and platforms.
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start">
                                        <a href="#services" class="hero-btn">
                                            <i class="ri-pen-nib-line me-2"></i>Design With Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 order-1 order-md-2 text-center">
                                <div class="p-2 p-md-3">
                                    <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                                         alt="UI/UX Design" class="hero-image img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carousel Indicators (Optional - you can enable these) -->
        <div class="carousel-indicators d-none d-md-flex">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>  

        <!-- Industries We Serve Section -->
    <section class="py-4 bg-light">
        <div class="container-fluid px-3">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-2">Industries We Serve</h2>
                    <p class="text-muted mb-0 fs-6">Delivering cutting-edge technology solutions across diverse sectors</p>
                </div>
            </div>
            
            <div class="row g-3">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: var(--gradient-primary);">
                            <i class="ri-health-book-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Healthcare</h6>
                        <small class="text-muted">Medical & Wellness</small>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: var(--gradient-secondary);">
                            <i class="ri-graduation-cap-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Education</h6>
                        <small class="text-muted">E-learning & EdTech</small>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: var(--gradient-accent);">
                            <i class="ri-shopping-cart-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">E-commerce</h6>
                        <small class="text-muted">Retail & Shopping</small>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <i class="ri-bank-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Finance</h6>
                        <small class="text-muted">Banking & FinTech</small>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);">
                            <i class="ri-car-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Automotive</h6>
                        <small class="text-muted">Transport & Logistics</small>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: linear-gradient(135deg, #26de81 0%, #20bf6b 100%);">
                            <i class="ri-restaurant-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Food & Beverage</h6>
                        <small class="text-muted">Hospitality & Tourism</small>
                    </div>
                </div>
            </div>
            
            <div class="row g-3 mt-2">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: linear-gradient(135deg, #a55eea 0%, #8854d0 100%);">
                            <i class="ri-home-smile-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Real Estate</h6>
                        <small class="text-muted">Property & Construction</small>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: linear-gradient(135deg, #fd79a8 0%, #e84393 100%);">
                            <i class="ri-gamepad-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Entertainment</h6>
                        <small class="text-muted">Gaming & Media</small>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: linear-gradient(135deg, #fdcb6e 0%, #e17055 100%);">
                            <i class="ri-hammer-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Manufacturing</h6>
                        <small class="text-muted">Industry & Production</small>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: linear-gradient(135deg, #74b9ff 0%, #0984e3 100%);">
                            <i class="ri-government-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Government</h6>
                        <small class="text-muted">Public Services</small>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: linear-gradient(135deg, #00b894 0%, #00a085 100%);">
                            <i class="ri-leaf-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Agriculture</h6>
                        <small class="text-muted">Farming & AgriTech</small>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="card industry-card h-100 p-3 text-center border-0 shadow-sm">
                        <div class="industry-icon mx-auto" style="background: linear-gradient(135deg, #636e72 0%, #2d3436 100%);">
                            <i class="ri-more-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-1 text-dark">Others</h6>
                        <small class="text-muted">Custom Solutions</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose GTCS Section -->
    <section class="py-4 px-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container-fluid px-3">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mb-2 fw-semibold" style="font-size: 1.8rem;">Why Choose GTCS?</h2>
                    <p class="text-white-50 mb-0 fs-6">Experience excellence in every project with our proven expertise</p>
                </div>
            </div>
            
            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 p-3 border-0">
                        <div class="feature-icon" style="background: var(--gradient-secondary);">
                            <i class="ri-award-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-2 text-dark">Proven Expertise</h6>
                        <p class="text-muted mb-2 small">10+ years of industry experience with 500+ successful projects delivered across diverse domains.</p>
                        <div class="d-flex align-items-center small text-primary">
                            <i class="ri-check-line me-1"></i>
                            <span>Certified professionals</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 p-3 border-0">
                        <div class="feature-icon" style="background: var(--gradient-accent);">
                            <i class="ri-rocket-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-2 text-dark">Fast Delivery</h6>
                        <p class="text-muted mb-2 small">Agile development methodology ensuring 50% faster delivery without compromising quality.</p>
                        <div class="d-flex align-items-center small text-primary">
                            <i class="ri-check-line me-1"></i>
                            <span>Quick turnaround time</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 p-3 border-0">
                        <div class="feature-icon" style="background: var(--gradient-primary);">
                            <i class="ri-customer-service-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-2 text-dark">24/7 Support</h6>
                        <p class="text-muted mb-2 small">Round-the-clock technical support and maintenance services for uninterrupted operations.</p>
                        <div class="d-flex align-items-center small text-primary">
                            <i class="ri-check-line me-1"></i>
                            <span>Always available</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 p-3 border-0">
                        <div class="feature-icon" style="background: linear-gradient(135deg, #26de81 0%, #20bf6b 100%);">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-2 text-dark">Cost Effective</h6>
                        <p class="text-muted mb-2 small">Competitive pricing with transparent billing and no hidden costs for maximum ROI.</p>
                        <div class="d-flex align-items-center small text-primary">
                            <i class="ri-check-line me-1"></i>
                            <span>Budget-friendly solutions</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 p-3 border-0">
                        <div class="feature-icon" style="background: linear-gradient(135deg, #fd79a8 0%, #e84393 100%);">
                            <i class="ri-lightbulb-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-2 text-dark">Innovation Focus</h6>
                        <p class="text-muted mb-2 small">Cutting-edge technologies and innovative solutions to keep you ahead of competition.</p>
                        <div class="d-flex align-items-center small text-primary">
                            <i class="ri-check-line me-1"></i>
                            <span>Latest tech stack</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 p-3 border-0">
                        <div class="feature-icon" style="background: linear-gradient(135deg, #a55eea 0%, #8854d0 100%);">
                            <i class="ri-team-line"></i>
                        </div>
                        <h6 class="fw-semibold mb-2 text-dark">Expert Team</h6>
                        <p class="text-muted mb-2 small">Skilled developers, designers, and consultants dedicated to your project success.</p>
                        <div class="d-flex align-items-center small text-primary">
                            <i class="ri-check-line me-1"></i>
                            <span>Dedicated professionals</span>
                        </div>
                    </div>
                </div>
            </div>
            
             <!--Call to Action -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-6 text-center">
                    <div class="bg-white bg-opacity-10 backdrop-blur rounded-3 p-3">
                        <h6 class="text-white mb-2">Ready to Start Your Project?</h6>
                        <p class="text-white-50 small mb-3">Let's discuss how we can help transform your business with technology</p>
                        <a href="#" class="btn btn-light btn-sm px-4 me-2">Get Free Consultation</a>
                        <a href="#" class="btn btn-outline-light btn-sm px-4">View Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="py-4 px-3 bg-white">
        <div class="container-fluid px-3">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-2">Our Services</h2>
                    <p class="text-muted mb-0 fs-6">Comprehensive technology solutions tailored to your business needs</p>
                </div>
            </div>
            
            <div class="row g-3">
                <!-- Development Services -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="background: var(--gradient-primary);">
                                <i class="ri-code-s-slash-line"></i>
                            </div>
                            <h5 class="fw-semibold mb-0 text-dark">Development</h5>
                        </div>
                        <ul class="list-unstyled mb-3">
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Website Development</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Mobile App Development</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Game Development</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Custom Software</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Learn More</a>
                    </div>
                </div>

                <!-- Design Services -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="background: var(--gradient-secondary);">
                                <i class="ri-pen-nib-line"></i>
                            </div>
                            <h5 class="fw-semibold mb-0 text-dark">Design & Creative</h5>
                        </div>
                        <ul class="list-unstyled mb-3">
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>UI/UX Design</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Multimedia Animation</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Brand Identity</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Graphic Design</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Learn More</a>
                    </div>
                </div>

                <!-- Marketing Services -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="background: var(--gradient-accent);">
                                <i class="ri-line-chart-line"></i>
                            </div>
                            <h5 class="fw-semibold mb-0 text-dark">Digital Marketing</h5>
                        </div>
                        <ul class="list-unstyled mb-3">
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>SEO & SEM</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Social Media Marketing</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>E-commerce Solutions</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Content Marketing</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Learn More</a>
                    </div>
                </div>

                <!-- Security Services -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                <i class="ri-shield-line"></i>
                            </div>
                            <h5 class="fw-semibold mb-0 text-dark">Security & Data</h5>
                        </div>
                        <ul class="list-unstyled mb-3">
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Cyber Security</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Database Management</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Cloud Solutions</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Data Analytics</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Learn More</a>
                    </div>
                </div>

                <!-- Consultation Services -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="background: linear-gradient(135deg, #26de81 0%, #20bf6b 100%);">
                                <i class="ri-user-settings-line"></i>
                            </div>
                            <h5 class="fw-semibold mb-0 text-dark">Consultation</h5>
                        </div>
                        <ul class="list-unstyled mb-3">
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>IT Strategy Planning</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Digital Transformation</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Technology Audit</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Business Analysis</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Learn More</a>
                    </div>
                </div>

                <!-- Support Services -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="background: linear-gradient(135deg, #fd79a8 0%, #e84393 100%);">
                                <i class="ri-customer-service-2-line"></i>
                            </div>
                            <h5 class="fw-semibold mb-0 text-dark">Support & Maintenance</h5>
                        </div>
                        <ul class="list-unstyled mb-3">
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>24/7 Technical Support</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>System Maintenance</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Performance Optimization</span>
                            </li>
                            <li class="d-flex align-items-center mb-2 small">
                                <i class="ri-check-line text-primary me-2"></i>
                                <span>Bug Fixes & Updates</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Service Stats -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-10">
                    <div class="row g-3 text-center">
                        <div class="col-6 col-md-3">
                            <div class="p-3">
                                <h4 class="fw-bold text-primary mb-1">500+</h4>
                                <small class="text-muted">Projects Completed</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="p-3">
                                <h4 class="fw-bold text-primary mb-1">98%</h4>
                                <small class="text-muted">Client Satisfaction</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="p-3">
                                <h4 class="fw-bold text-primary mb-1">5+</h4>
                                <small class="text-muted">Years Experience</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="p-3">
                                <h4 class="fw-bold text-primary mb-1">50+</h4>
                                <small class="text-muted">Expert Team</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About GTCS Section -->
    <section class="about-section py-4">
        <div class="container-fluid px-3">
            <!-- Section Header -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="h3 fw-bold gradient-text mb-2">About Global Tech Consultancy Services</h2>
                    <p class="text-muted mb-0 fs-6">Empowering businesses through innovative technology solutions</p>
                </div>
            </div>

            <!-- Main Content Row -->
            <div class="row g-3 mb-4">
                <!-- Company Overview -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="fw-semibold text-dark mb-3">Who We Are</h4>
                            <p class="text-muted mb-3 fs-6">
                                Global Tech Consultancy Services (GTCS) is a leading technology consultancy firm dedicated to 
                                transforming businesses through cutting-edge digital solutions. Since our inception, we've been 
                                at the forefront of technological innovation, helping organizations navigate the digital landscape 
                                with confidence and success.
                            </p>
                            <p class="text-muted mb-3 fs-6">
                                Our team of expert developers, designers, and consultants work collaboratively to deliver 
                                comprehensive solutions that drive growth, efficiency, and competitive advantage for our clients 
                                across various industries.
                            </p>
                            
                            <!-- Mission & Vision Cards -->
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <div class="mission-card p-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="ri-focus-2-line text-primary me-2 fs-5"></i>
                                            <h6 class="fw-semibold mb-0">Our Mission</h6>
                                        </div>
                                        <p class="text-muted mb-0 small">
                                            To empower businesses with innovative technology solutions that drive growth and success.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="vision-card p-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="ri-eye-line me-2 fs-5" style="color: var(--secondary-color);"></i>
                                            <h6 class="fw-semibold mb-0">Our Vision</h6>
                                        </div>
                                        <p class="text-muted mb-0 small">
                                            To be the global leader in technology consultancy, shaping the future of digital innovation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Stats Section -->
                <div class="col-lg-4">
                    <div class="stats-container h-100 position-relative">
                        <!-- Floating particles -->
                        <div class="floating-particle" style="top: 20%; left: 15%;"></div>
                        <div class="floating-particle" style="top: 60%; right: 20%;"></div>
                        <div class="floating-particle" style="bottom: 30%; left: 25%;"></div>
                        
                        <div class="stats-header">
                            <h4 class="stats-title">Our Impact</h4>
                            <p class="stats-subtitle">Numbers that speak for themselves</p>
                        </div>
                        
                        <div class="stats-grid row g-2">
                            <div class="col-6">
                                <div class="stat-card animate-in">
                                    <div class="stat-icon projects">
                                        <i class="ri-service-line"></i>
                                    </div>
                                    <div class="stat-number" data-target="500">0</div>
                                    <div class="stat-label">Projects</div>
                                    <div class="stat-description">Successfully delivered</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card animate-in">
                                    <div class="stat-icon clients">
                                        <i class="ri-user-heart-line"></i>
                                    </div>
                                    <div class="stat-number" data-target="50">0</div>
                                    <div class="stat-label">Clients</div>
                                    <div class="stat-description">Satisfied customers</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card animate-in">
                                    <div class="stat-icon experience">
                                        <i class="ri-time-line"></i>
                                    </div>
                                    <div class="stat-number" data-target="5">0</div>
                                    <div class="stat-label">Years</div>
                                    <div class="stat-description">Of excellence</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card animate-in">
                                    <div class="stat-icon support">
                                        <i class="ri-customer-service-line"></i>
                                    </div>
                                    <div class="stat-number">24/7</div>
                                    <div class="stat-label">Support</div>
                                    <div class="stat-description">Always available</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced About Content -->
            <div class="row g-3">
                <!-- Our Story & Values -->
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="feature-icon innovation me-3">
                                    <i class="ri-building-line"></i>
                                </div>
                                <h4 class="fw-bold gradient-text mb-0">Our Story</h4>
                            </div>
                            <p class="text-muted mb-3 fs-6">
                                Founded with a vision to bridge the gap between technology and business success, GTCS has evolved 
                                into a trusted partner for organizations seeking digital transformation. We combine deep technical 
                                expertise with business acumen to deliver solutions that matter.
                            </p>
                            
                            <!-- Core Values Grid -->
                            <div class="row g-2 mt-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start p-2 rounded bg-light">
                                        <i class="ri-rocket-line text-primary me-2 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold mb-1 small">Innovation</h6>
                                            <p class="text-muted mb-0 x-small">Pushing boundaries with cutting-edge solutions</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start p-2 rounded bg-light">
                                        <i class="ri-team-line text-success me-2 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold mb-1 small">Collaboration</h6>
                                            <p class="text-muted mb-0 x-small">Working together for exceptional results</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start p-2 rounded bg-light">
                                        <i class="ri-medal-line text-warning me-2 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold mb-1 small">Excellence</h6>
                                            <p class="text-muted mb-0 x-small">Delivering quality in every project</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start p-2 rounded bg-light">
                                        <i class="ri-customer-service-2-line text-info me-2 mt-1"></i>
                                        <div>
                                            <h6 class="fw-semibold mb-1 small">Client Focus</h6>
                                            <p class="text-muted mb-0 x-small">Your success is our priority</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- What We Do -->
                <div class="col-lg-5">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="feature-icon quality me-3">
                                    <i class="ri-tools-line"></i>
                                </div>
                                <h4 class="fw-bold gradient-text mb-0">What We Do</h4>
                            </div>
                            <p class="text-muted mb-3 fs-6">
                                We specialize in comprehensive technology solutions that transform how businesses operate in the digital age.
                            </p>
                            
                            <!-- Services List -->
                            <div class="row g-2">
                                <div class="col-12">
                                    <div class="service-item p-2 rounded border-start border-3 border-primary bg-light bg-opacity-50">
                                        <h6 class="fw-semibold mb-1 small">Full-Stack Development</h6>
                                        <p class="text-muted mb-0 x-small">Web, mobile & enterprise applications</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="service-item p-2 rounded border-start border-3 border-success bg-light bg-opacity-50">
                                        <h6 class="fw-semibold mb-1 small">Digital Marketing</h6>
                                        <p class="text-muted mb-0 x-small">Strategic online presence & growth</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="service-item p-2 rounded border-start border-3 border-warning bg-light bg-opacity-50">
                                        <h6 class="fw-semibold mb-1 small">UI/UX Design</h6>
                                        <p class="text-muted mb-0 x-small">User-centered design experiences</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="service-item p-2 rounded border-start border-3 border-info bg-light bg-opacity-50">
                                        <h6 class="fw-semibold mb-1 small">Cybersecurity</h6>
                                        <p class="text-muted mb-0 x-small">Comprehensive security solutions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Case Studies Section -->
    <section class="py-custom px-3 bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center mb-custom">
                    <h2 class="h4 fw-bold section-title-gradient mb-2">Case Studies</h2>
                    <p class="text-muted fs-sm mb-0">Discover how we've helped businesses transform digitally</p>
                </div>
            </div>
            
            <div class="row g-3">
                <!-- Case Study 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card case-study-card border-0 h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                 class="card-img-top" alt="E-commerce Platform" style="height: 180px; object-fit: cover;">
                            <div class="case-study-overlay">
                                <div class="case-study-icon">
                                    <i class="ri-shopping-cart-line text-white fs-5"></i>
                                </div>
                                <span class="text-white fs-sm fw-medium">View Case Study</span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title fs-6 fw-semibold mb-0">E-commerce Platform</h5>
                                <span class="badge bg-primary fs-xs">Web Development</span>
                            </div>
                            <p class="card-text text-muted fs-sm mb-2">Built a scalable e-commerce platform that increased client's revenue by 300% within 6 months.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted fs-xs">
                                    <i class="ri-time-line me-1"></i>3 months
                                </small>
                                <small class="text-success fw-medium fs-xs">
                                    <i class="ri-arrow-up-line me-1"></i>300% ROI
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case Study 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card case-study-card border-0 h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                 class="card-img-top" alt="Mobile Banking App" style="height: 180px; object-fit: cover;">
                            <div class="case-study-overlay">
                                <div class="case-study-icon">
                                    <i class="ri-smartphone-line text-white fs-5"></i>
                                </div>
                                <span class="text-white fs-sm fw-medium">View Case Study</span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title fs-6 fw-semibold mb-0">Mobile Banking App</h5>
                                <span class="badge bg-success fs-xs">App Development</span>
                            </div>
                            <p class="card-text text-muted fs-sm mb-2">Developed a secure mobile banking app with 1M+ downloads and 4.8-star rating.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted fs-xs">
                                    <i class="ri-time-line me-1"></i>6 months
                                </small>
                                <small class="text-success fw-medium fs-xs">
                                    <i class="ri-download-line me-1"></i>1M+ Downloads
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case Study 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card case-study-card border-0 h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                 class="card-img-top" alt="Digital Marketing Campaign" style="height: 180px; object-fit: cover;">
                            <div class="case-study-overlay">
                                <div class="case-study-icon">
                                    <i class="ri-line-chart-line text-white fs-5"></i>
                                </div>
                                <span class="text-white fs-sm fw-medium">View Case Study</span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title fs-6 fw-semibold mb-0">Digital Marketing Campaign</h5>
                                <span class="badge bg-warning fs-xs">Marketing</span>
                            </div>
                            <p class="card-text text-muted fs-sm mb-2">Launched a comprehensive digital marketing strategy that boosted brand awareness by 250%.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted fs-xs">
                                    <i class="ri-time-line me-1"></i>4 months
                                </small>
                                <small class="text-success fw-medium fs-xs">
                                    <i class="ri-eye-line me-1"></i>250% Reach
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case Study 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card case-study-card border-0 h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                 class="card-img-top" alt="SaaS Dashboard" style="height: 180px; object-fit: cover;">
                            <div class="case-study-overlay">
                                <div class="case-study-icon">
                                    <i class="ri-dashboard-line text-white fs-5"></i>
                                </div>
                                <span class="text-white fs-sm fw-medium">View Case Study</span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title fs-6 fw-semibold mb-0">SaaS Dashboard</h5>
                                <span class="badge bg-info fs-xs">UI/UX Design</span>
                            </div>
                            <p class="card-text text-muted fs-sm mb-2">Redesigned a complex SaaS dashboard improving user engagement by 180%.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted fs-xs">
                                    <i class="ri-time-line me-1"></i>2 months
                                </small>
                                <small class="text-success fw-medium fs-xs">
                                    <i class="ri-user-line me-1"></i>180% Engagement
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case Study 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card case-study-card border-0 h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                 class="card-img-top" alt="Gaming Platform" style="height: 180px; object-fit: cover;">
                            <div class="case-study-overlay">
                                <div class="case-study-icon">
                                    <i class="ri-gamepad-line text-white fs-5"></i>
                                </div>
                                <span class="text-white fs-sm fw-medium">View Case Study</span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title fs-6 fw-semibold mb-0">Gaming Platform</h5>
                                <span class="badge bg-danger fs-xs">Game Development</span>
                            </div>
                            <p class="card-text text-muted fs-sm mb-2">Created an interactive gaming platform with real-time multiplayer capabilities.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted fs-xs">
                                    <i class="ri-time-line me-1"></i>8 months
                                </small>
                                <small class="text-success fw-medium fs-xs">
                                    <i class="ri-group-line me-1"></i>50K Users
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case Study 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card case-study-card border-0 h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                 class="card-img-top" alt="Cloud Infrastructure" style="height: 180px; object-fit: cover;">
                            <div class="case-study-overlay">
                                <div class="case-study-icon">
                                    <i class="ri-cloud-line text-white fs-5"></i>
                                </div>
                                <span class="text-white fs-sm fw-medium">View Case Study</span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title fs-6 fw-semibold mb-0">Cloud Infrastructure</h5>
                                <span class="badge bg-secondary fs-xs">Cloud Services</span>
                            </div>
                            <p class="card-text text-muted fs-sm mb-2">Migrated enterprise systems to cloud, reducing operational costs by 60%.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted fs-xs">
                                    <i class="ri-time-line me-1"></i>5 months
                                </small>
                                <small class="text-success fw-medium fs-xs">
                                    <i class="ri-arrow-down-line me-1"></i>60% Cost Reduction
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <button class="btn btn-outline-primary btn-sm px-4 fs-sm">
                    View All Case Studies <i class="ri-arrow-right-line ms-1"></i>
                </button>
            </div>
        </div>
    </section>    

    <!-- Testimonials Section -->
     <section class="py-4 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="h4 fw-semibold gradient-text mb-1">Client Testimonials</h2>
                <p class="text-muted small mb-0">What our clients say about us</p>
            </div>
            
            <div class="row g-3">
                <!-- Testimonial 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 position-relative testimonial-accent">
                        <div class="card-body p-3">
                            <div class="text-primary opacity-25 fs-1 lh-1 mb-2">"</div>
                            <p class="card-text small text-muted fst-italic mb-3">
                                "GTCS delivered exceptional web development services. Their team understood our requirements perfectly and delivered beyond expectations."
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white fw-semibold me-2 flex-shrink-0" style="width: 35px; height: 35px;">
                                    <small>SK</small>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 small fw-semibold">Sarah Johnson</h6>
                                    <small class="text-muted">CEO, TechStart</small>
                                    <div class="mt-1">
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 position-relative testimonial-accent">
                        <div class="card-body p-3">
                            <div class="text-primary opacity-25 fs-1 lh-1 mb-2">"</div>
                            <p class="card-text small text-muted fst-italic mb-3">
                                "Outstanding digital marketing results! Our online presence improved dramatically within just 3 months of working with GTCS."
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white fw-semibold me-2 flex-shrink-0" style="width: 35px; height: 35px;">
                                    <small>MR</small>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 small fw-semibold">Mike Rodriguez</h6>
                                    <small class="text-muted">Founder, GrowthCorp</small>
                                    <div class="mt-1">
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 position-relative testimonial-accent">
                        <div class="card-body p-3">
                            <div class="text-primary opacity-25 fs-1 lh-1 mb-2">"</div>
                            <p class="card-text small text-muted fst-italic mb-3">
                                "Professional, reliable, and innovative. GTCS helped us modernize our entire digital infrastructure. Highly recommended!"
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white fw-semibold me-2 flex-shrink-0" style="width: 35px; height: 35px;">
                                    <small>EP</small>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 small fw-semibold">Emily Parker</h6>
                                    <small class="text-muted">CTO, InnovateLab</small>
                                    <div class="mt-1">
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section -->
    <section class="work-process">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Our Work Process</h2>
                    <p class="section-subtitle">Simple, efficient, and results-driven approach</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">1</div>
                        <h5>Discovery</h5>
                        <p class="mb-0">We analyze your requirements and understand your business goals thoroughly.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">2</div>
                        <h5>Planning</h5>
                        <p class="mb-0">Strategic planning and roadmap creation for optimal project execution.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">3</div>
                        <h5>Development</h5>
                        <p class="mb-0">Expert development with regular updates and transparent communication.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">4</div>
                        <h5>Launch</h5>
                        <p class="mb-0">Successful project delivery with ongoing support and maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer options for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        // Function to animate value for counters
        function animateValue(element, start, end, duration) {
            const startTime = performance.now();
            
            function update(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                const current = Math.floor(easeOutQuart * (end - start) + start);
                
                element.textContent = current + (element.textContent.includes('+') ? '+' : '');
                
                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            }
            requestAnimationFrame(update);
        }

        // Main DOMContentLoaded listener
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Bootstrap Carousel
            const carousel = document.querySelector('#heroCarousel');
            const bsCarousel = new bootstrap.Carousel(carousel, {
                interval: 4000, // Original interval was 4000, changed to 5000 in JS, reverting to 4000
                ride: 'carousel'
            });

            // Pause carousel on hover
            carousel.addEventListener('mouseenter', () => {
                bsCarousel.pause();
            });

            carousel.addEventListener('mouseleave', () => {
                bsCarousel.cycle();
            });

            // Observer for general scroll animations (testimonial cards, process steps, industry/feature cards)
            const generalObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        generalObserver.unobserve(entry.target); // Stop observing once animated
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.testimonial-card, .process-step, .industry-card, .feature-card').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)'; // Initial translateY for animation
                el.style.transition = 'all 0.6s ease';
                generalObserver.observe(el);
            });

            // Observer for stats section animation and counter
            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate stat numbers
                        const statNumbers = entry.target.querySelectorAll('.stat-number');
                        statNumbers.forEach((stat, index) => {
                            setTimeout(() => {
                                const target = parseInt(stat.getAttribute('data-target'));
                                if (!isNaN(target)) { // Ensure target is a valid number
                                    animateValue(stat, 0, target, 2000);
                                }
                            }, index * 200);
                        });

                        // Add stagger animation to stat cards
                        const statCards = entry.target.querySelectorAll('.stat-card');
                        statCards.forEach((card, index) => {
                            setTimeout(() => {
                                card.style.opacity = '1'; // Ensure opacity is set to 1
                                card.style.transform = 'translateY(0)'; // Ensure transform is reset
                            }, index * 150);
                        });
                        statsObserver.unobserve(entry.target); // Stop observing once animated
                    }
                });
            }, { threshold: 0.3, rootMargin: '0px 0px -50px 0px' }); // Specific options for stats

            const statsContainer = document.querySelector('.stats-container');
            if (statsContainer) {
                // Set initial styles for stat cards for animation
                statsContainer.querySelectorAll('.stat-card').forEach(card => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(30px)';
                    card.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                });
                statsObserver.observe(statsContainer);
            }

            // Mobile menu improvements
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            
            if (navbarToggler && navbarCollapse) {
                document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                    link.addEventListener('click', () => {
                        if (navbarCollapse.classList.contains('show')) {
                            navbarToggler.click();
                        }
                    });
                });
            }

            // Smooth reveal animation for sections
            const revealSections = document.querySelectorAll('section');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        revealObserver.unobserve(entry.target); // Stop observing once revealed
                    }
                });
            }, { threshold: 0.15 });

            revealSections.forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(50px)';
                section.style.transition = 'all 0.8s ease';
                revealObserver.observe(section);
            });
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.3s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.carousel-item');
            
            parallaxElements.forEach(el => {
                const speed = 0.1; // Reduced speed for a more subtle effect
                el.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Enhanced hover effects for stat cards (ripple effect)
        document.querySelectorAll('.stat-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                const ripple = document.createElement('div');
                ripple.classList.add('ripple-effect'); // Add a class for styling
                this.appendChild(ripple);
                
                // Position the ripple at the mouse cursor
                const rect = this.getBoundingClientRect();
                const x = event.clientX - rect.left;
                const y = event.clientY - rect.top;
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;

                setTimeout(() => {
                    if (ripple.parentNode) {
                        ripple.parentNode.removeChild(ripple);
                    }
                }, 600);
            });
        });

        // Add CSS for ripple effect dynamically
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            .ripple-effect {
                position: absolute;
                width: 0;
                height: 0;
                border-radius: 50%;
                background: rgba(99, 102, 241, 0.1);
                transform: translate(-50%, -50%);
                animation: ripple 0.6s ease-out;
                pointer-events: none;
                z-index: 2; /* Ensure ripple is above other content */
            }
        `;
        document.head.appendChild(rippleStyle);

        // Parallax effect for floating particles
        document.addEventListener('mousemove', (e) => {
            const particles = document.querySelectorAll('.floating-particle');
            const { clientX, clientY } = e;
            const { innerWidth, innerHeight } = window;
            
            particles.forEach((particle, index) => {
                const speed = (index + 1) * 0.01; // Reduced speed for subtlety
                const x = (clientX - innerWidth / 2) * speed;
                const y = (clientY - innerHeight / 2) * speed;
                
                particle.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    </script>

<?php
include 'components/footer.php';
?>
