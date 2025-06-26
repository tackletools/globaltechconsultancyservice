<?php
include 'components/header.php';
?>
    
<style>
    /* CSS Variables for Gradients */
    :root {
        --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --gradient-accent: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
        --gradient-gold: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
        --gradient-orange: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%);
    }

    /* Carousel Core Styles */
    .carousel {
        position: relative;
        width: 100%;
        height: 100vh;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .carousel-item {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        opacity: 0;
        transition: opacity 0.6s ease-in-out;
    }

    .carousel-item.active {
        opacity: 1;
        position: relative;
    }

    /* Slide Backgrounds */
    .slide-1 { background: var(--gradient-primary); }
    .slide-2 { background: var(--gradient-secondary); }
    .slide-3 { background: var(--gradient-primary); }

    /* Background Overlay */
    .carousel-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,0 1000,300 1000,1000 0,700"/></svg>');
        pointer-events: none;
        z-index: 1;
    }

    /* Particles */
    .hero-particles {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 2;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 50%;
        animation: float-particles 8s infinite ease-in-out;
    }

    @keyframes float-particles {
        0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.1; }
        50% { transform: translateY(-80px) rotate(180deg); opacity: 0.4; }
    }

    /* Carousel Controls */
    .carousel-control-prev, .carousel-control-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(15px);
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.25);
        transition: all 0.4s ease;
        opacity: 0.8;
        z-index: 20;
    }

    .carousel-control-prev { left: 30px; }
    .carousel-control-next { right: 30px; }

    .carousel-control-prev:hover, .carousel-control-next:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-50%) scale(1.1);
        opacity: 1;
    }

    .carousel-control-prev-icon, .carousel-control-next-icon {
        width: 24px;
        height: 24px;
        background-size: 24px 24px;
    }

    /* Carousel Indicators */
    .carousel-indicators {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 20;
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .carousel-indicators button {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.4);
        border: 2px solid rgba(255, 255, 255, 0.7);
        transition: all 0.4s ease;
    }

    .carousel-indicators button.active {
        background: white;
        transform: scale(1.3);
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    }

    /* Gradient Text Classes */
    .gradient-text-gold { background: var(--gradient-gold); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .gradient-text-primary { background: var(--gradient-primary); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .gradient-text-orange { background: var(--gradient-orange); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

    /* Glassmorphism Effects */
    .glass-card {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.25);
    }

    .glass-btn {
        background: rgba(255, 255, 255, 0.25);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        transition: all 0.4s ease;
    }

    .glass-btn:hover {
        background: rgba(255, 255, 255, 0.35);
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    /* Gradient Backgrounds */
    .bg-gradient-primary { background: var(--gradient-primary); }
    .bg-gradient-secondary { background: var(--gradient-secondary); }
    .bg-gradient-accent { background: var(--gradient-accent); }

    /* Animation */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }

    .float-animation { animation: float 4s ease-in-out infinite; }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .carousel-control-prev, .carousel-control-next {
            width: 50px;
            height: 50px;
        }
        .carousel-control-prev { left: 15px; }
        .carousel-control-next { right: 15px; }
    }
</style>

<!-- Hero Section -->
<section>
    <div id="heroCarousel" class="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-slide="0" class="active"></button>
            <button type="button" data-slide="1"></button>
            <button type="button" data-slide="2"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active slide-1 d-flex align-items-center">
                <div class="hero-particles">
                    <div class="particle" style="left: 10%; top: 20%; width: 4px; height: 4px; animation-delay: 0s;"></div>
                    <div class="particle" style="left: 20%; top: 80%; width: 6px; height: 6px; animation-delay: 1s;"></div>
                    <div class="particle" style="left: 80%; top: 10%; width: 8px; height: 8px; animation-delay: 2s;"></div>
                    <div class="particle" style="left: 90%; top: 60%; width: 5px; height: 5px; animation-delay: 3s;"></div>
                    <div class="particle" style="left: 30%; top: 40%; width: 3px; height: 3px; animation-delay: 4s;"></div>
                    <div class="particle" style="left: 70%; top: 90%; width: 7px; height: 7px; animation-delay: 5s;"></div>
                </div>
                
                <div class="container position-relative" style="z-index: 10;">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="display-3 fw-bold text-white mb-4 lh-sm" style="text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);">
                                Empower Growth with  <span class="gradient-text-gold">Technology</span>
                            </h3>
                            <p class="fs-5 text-white mb-4 fw-light" style="text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
                                WWe’re GTCS — turning ideas into digital solutions that drive global growth.
                            </p>
                            <div class="d-flex flex-column flex-md-row gap-3">
                                <a href="#contact" class="btn btn-lg glass-btn text-white fw-semibold rounded-pill px-4 py-3 text-decoration-none shadow">Get Started Today</a>
                                <a href="#services" class="btn btn-lg btn-outline-light fw-semibold rounded-pill px-4 py-3 text-decoration-none">Explore Services</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="glass-card rounded-4 p-5 text-center shadow-lg float-animation">
                                <i class="ri-rocket-line display-1 text-white mb-3" style="text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);"></i>
                                <div class="fs-5 fw-semibold text-white" style="text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">Innovation in Motion</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item slide-2 d-flex align-items-center">
                <div class="hero-particles">
                    <div class="particle" style="left: 15%; top: 30%; width: 5px; height: 5px; animation-delay: 0.5s;"></div>
                    <div class="particle" style="left: 25%; top: 70%; width: 4px; height: 4px; animation-delay: 1.5s;"></div>
                    <div class="particle" style="left: 75%; top: 15%; width: 6px; height: 6px; animation-delay: 2.5s;"></div>
                    <div class="particle" style="left: 85%; top: 55%; width: 8px; height: 8px; animation-delay: 3.5s;"></div>
                    <div class="particle" style="left: 40%; top: 35%; width: 3px; height: 3px; animation-delay: 4.5s;"></div>
                    <div class="particle" style="left: 60%; top: 85%; width: 7px; height: 7px; animation-delay: 5.5s;"></div>
                </div>
                
                <div class="container position-relative" style="z-index: 10;">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h1 class="display-3 fw-bold text-white mb-4 lh-sm" style="text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);">
                                Accelerate Growth with <span class="gradient-text-primary">Smart Solutions</span>
                            </h1>
                            <p class="fs-5 text-white mb-4 fw-light" style="text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
                                Smart tech solutions, from AI to cloud, driving your business forward.
                            </p>
                            <div class="d-flex flex-column flex-md-row gap-3">
                                <a href="#portfolio" class="btn btn-lg glass-btn text-white fw-semibold rounded-pill px-4 py-3 text-decoration-none shadow">View Our Work</a>
                                <a href="#about" class="btn btn-lg btn-outline-light fw-semibold rounded-pill px-4 py-3 text-decoration-none">Know More</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="glass-card rounded-4 p-5 text-center shadow-lg float-animation">
                                <i class="ri-brain-line display-1 text-white mb-3" style="text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);"></i>
                                <div class="fs-5 fw-semibold text-white" style="text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">AI-Powered Solutions</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item slide-3 d-flex align-items-center">
                <div class="hero-particles">
                    <div class="particle" style="left: 12%; top: 25%; width: 6px; height: 6px; animation-delay: 1s;"></div>
                    <div class="particle" style="left: 22%; top: 75%; width: 4px; height: 4px; animation-delay: 2s;"></div>
                    <div class="particle" style="left: 78%; top: 20%; width: 5px; height: 5px; animation-delay: 3s;"></div>
                    <div class="particle" style="left: 88%; top: 65%; width: 7px; height: 7px; animation-delay: 4s;"></div>
                    <div class="particle" style="left: 35%; top: 45%; width: 3px; height: 3px; animation-delay: 5s;"></div>
                    <div class="particle" style="left: 65%; top: 80%; width: 8px; height: 8px; animation-delay: 6s;"></div>
                </div>
                
                <div class="container position-relative" style="z-index: 10;">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h1 class="display-3 fw-bold text-white mb-4 lh-sm" style="text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);">
                                Global Insight.<br><span class="gradient-text-gold">Tomorrow’s Solutions.</span>
                            </h1>
                            <p class="fs-5 text-white mb-4 fw-light" style="text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
                                Partner with experts who share your vision—global reach, local expertise, exceptional results.
                            </p>
                            <div class="d-flex flex-column flex-md-row gap-3">
                                <a href="#contact" class="btn btn-lg glass-btn text-white fw-semibold rounded-pill px-4 py-3 text-decoration-none shadow">Start Your Project</a>
                                <a href="#team" class="btn btn-lg btn-outline-light fw-semibold rounded-pill px-4 py-3 text-decoration-none">Meet Our Team</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="glass-card rounded-4 p-5 text-center shadow-lg float-animation">
                                <i class="ri-global-line display-1 text-white mb-3" style="text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);"></i>
                                <div class="fs-5 fw-semibold text-white" style="text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">Global Network</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation controls -->
        <!--<button class="carousel-control-prev d-flex align-items-center justify-content-center" type="button" id="prevBtn">-->
        <!--    <span class="carousel-control-prev-icon"></span>-->
        <!--</button>-->
        <!--<button class="carousel-control-next d-flex align-items-center justify-content-center" type="button" id="nextBtn">-->
        <!--    <span class="carousel-control-next-icon"></span>-->
        <!--</button>-->
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-4 fw-bold mb-3 gradient-text-primary">Why Choose GTCS?</h2>
                <p class="fs-5 text-muted">We combine innovation, expertise, and dedication to deliver exceptional results for our clients.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 h-100">
                    <div class="bg-gradient-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow" style="width: 100px; height: 100px;">
                        <i class="ri-award-line fs-1"></i>
                    </div>
                    <h4 class="fw-semibold mb-3">Expert Team</h4>
                    <p class="text-muted">Our skilled professionals bring years of experience and cutting-edge knowledge to every project.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 h-100">
                    <div class="bg-gradient-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow" style="width: 100px; height: 100px;">
                        <i class="ri-time-line fs-1"></i>
                    </div>
                    <h4 class="fw-semibold mb-3">Fast Delivery</h4>
                    <p class="text-muted">We understand the importance of time in business and deliver projects on schedule without compromising quality.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 h-100">
                    <div class="bg-gradient-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow" style="width: 100px; height: 100px;">
                        <i class="ri-customer-service-2-line fs-1"></i>
                    </div>
                    <h4 class="fw-semibold mb-3">24/7 Support</h4>
                    <p class="text-muted">Round-the-clock support ensures your business runs smoothly and any issues are resolved quickly.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 h-100">
                    <div class="bg-gradient-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow" style="width: 100px; height: 100px;">
                        <i class="ri-shield-check-line fs-1"></i>
                    </div>
                    <h4 class="fw-semibold mb-3">Secure Solutions</h4>
                    <p class="text-muted">We prioritize security in all our solutions to protect your data and ensure business continuity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-5 bg-white" id="services">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-4 fw-bold mb-3 gradient-text-primary">Our Services</h2>
                <p class="fs-5 text-muted">Comprehensive technology solutions tailored to meet your business needs and drive digital transformation.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3">
                <div class="card border-0 shadow-lg h-100 position-relative overflow-hidden">
                    <div class="position-absolute top-0 start-0 w-100 bg-gradient-primary" style="height: 4px;"></div>
                    <div class="card-body p-4">
                        <div class="bg-gradient-primary text-white rounded-3 d-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="ri-code-s-slash-line fs-2"></i>
                        </div>
                        <h3 class="fw-semibold mb-3">Development Solutions</h3>
                        <p class="text-muted mb-3">Custom software development, web applications, and mobile solutions built with the latest technologies.</p>
                        <ul class="list-unstyled">
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Website Development
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Mobile App Development
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Game Development
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Custom Software Solutions
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border-0 shadow-lg h-100 position-relative overflow-hidden">
                    <div class="position-absolute top-0 start-0 w-100 bg-gradient-primary" style="height: 4px;"></div>
                    <div class="card-body p-4">
                        <div class="bg-gradient-primary text-white rounded-3 d-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="ri-line-chart-line fs-2"></i>
                        </div>
                        <h3 class="fw-semibold mb-3">Digital Marketing</h3>
                        <p class="text-muted mb-3">Strategic marketing solutions to boost your online presence and drive business growth.</p>
                        <ul class="list-unstyled">
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Search Engine Optimization
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Social Media Marketing
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                E-commerce Solutions
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Content Marketing
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border-0 shadow-lg h-100 position-relative overflow-hidden">
                    <div class="position-absolute top-0 start-0 w-100 bg-gradient-primary" style="height: 4px;"></div>
                    <div class="card-body p-4">
                        <div class="bg-gradient-primary text-white rounded-3 d-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="ri-pen-nib-line fs-2"></i>
                        </div>
                        <h3 class="fw-semibold mb-3">Design & Animation</h3>
                        <p class="text-muted mb-3">Creative design solutions that captivate audiences and enhance user experience.</p>
                        <ul class="list-unstyled">
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                UI/UX Design
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Multimedia Animation
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Brand Identity
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Graphic Design
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border-0 shadow-lg h-100 position-relative overflow-hidden">
                    <div class="position-absolute top-0 start-0 w-100 bg-gradient-primary" style="height: 4px;"></div>
                    <div class="card-body p-4">
                        <div class="bg-gradient-primary text-white rounded-3 d-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="ri-fingerprint-line fs-2"></i>
                        </div>
                        <h3 class="fw-semibold mb-3">Security & Maintenance</h3>
                        <p class="text-muted mb-3">Robust security solutions and reliable maintenance services to keep your systems running smoothly.</p>
                        <ul class="list-unstyled">
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Database Management
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Cyber Security
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                System Maintenance
                            </li>
                            <li class="py-2 text-muted position-relative ps-4">
                                <i class="ri-check-line text-primary position-absolute start-0 top-50 translate-middle-y fw-bold"></i>
                                Data Protection
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-4 fw-bold mb-4 gradient-text-primary">About GTCS</h2>
                <p class="mb-4">Global Tech Consultancy Services (GTCS) is a leading technology consultancy firm dedicated to helping businesses navigate the digital landscape. With years of experience and a team of expert professionals, we provide innovative solutions that drive growth and success.</p>
                <p class="mb-4">Our mission is to empower businesses with cutting-edge technology solutions that are not only effective but also sustainable and scalable. We believe in building long-term partnerships with our clients and being their trusted technology advisor.</p>
                <a href="about.php" class="btn btn-lg glass-btn text-primary fw-semibold rounded-pill px-4 py-3 text-decoration-none">Learn More About Us</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="text-center p-4 glass-card rounded-4 shadow">
                            <div class="display-4 fw-bold gradient-text-primary mb-2">500+</div>
                            <div class="text-muted fw-semibold">Projects Completed</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center p-4 glass-card rounded-4 shadow">
                            <div class="display-4 fw-bold gradient-text-primary mb-2">100+</div>
                            <div class="text-muted fw-semibold">Happy Clients</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center p-4 glass-card rounded-4 shadow">
                            <div class="display-4 fw-bold gradient-text-primary mb-2">50+</div>
                            <div class="text-muted fw-semibold">Team Members</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center p-4 glass-card rounded-4 shadow">
                            <div class="display-4 fw-bold gradient-text-primary mb-2">5+</div>
                            <div class="text-muted fw-semibold">Years Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-4 fw-bold mb-3 gradient-text-primary">What Our Clients Say</h2>
                <p class="fs-5 text-muted">Don't just take our word for it. Here's what our satisfied clients have to say about our services.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-lg h-100 p-4 text-center">
                    <div class="bg-gradient-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                        <i class="ri-user-line fs-2"></i>
                    </div>
                    <p class="text-muted mb-4 fst-italic">"GTCS transformed our business with their innovative web development solutions. The team was professional, efficient, and delivered beyond our expectations."</p>
                    <div class="mt-auto">
                        <h5 class="fw-semibold mb-1">Amit Gusain</h5>
                        <small class="text-muted">CEO, Tackletools.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-lg h-100 p-4 text-center">
                    <div class="bg-gradient-secondary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                        <i class="ri-user-2-line fs-2"></i>
                    </div>
                    <p class="text-muted mb-4 fst-italic">"The digital marketing strategies implemented by GTCS increased our online presence significantly. Our ROI has improved by 300% since working with them."</p>
                    <div class="mt-auto">
                        <h5 class="fw-semibold mb-1">Rudra Pratap Singh</h5>
                        <small class="text-muted">Marketing Director, GrowthCo</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-lg h-100 p-4 text-center">
                    <div class="bg-gradient-accent text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                        <i class="ri-user-3-line fs-2"></i>
                    </div>
                    <p class="text-muted mb-4 fst-italic">"Outstanding service and support! GTCS developed our mobile app from concept to launch. The attention to detail and user experience is exceptional."</p>
                    <div class="mt-auto">
                        <h5 class="fw-semibold mb-1">Emily Rodriguez</h5>
                        <small class="text-muted">Founder, AppVenture</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5 bg-gradient-primary" id="contact">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-4 fw-bold mb-3 text-white">Ready to Get Started?</h2>
                <p class="fs-5 text-white-50">Let's discuss your project and see how we can help transform your business with innovative technology solutions.</p>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="glass-card rounded-4 p-4 shadow-lg h-100">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-lg rounded-pill border-0 shadow-sm" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control form-control-lg rounded-pill border-0 shadow-sm" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg rounded-pill border-0 shadow-sm" placeholder="Subject" required>
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control form-control-lg rounded-3 border-0 shadow-sm" rows="5" placeholder="Your Message" required style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg glass-btn text-white fw-semibold rounded-pill px-5 py-3 shadow">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="glass-card rounded-4 p-4 shadow-lg text-white h-100">
                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-white bg-opacity-25 rounded-circle p-3 me-3 flex-shrink-0">
                            <i class="ri-map-pin-line fs-5 text-white"></i>
                        </div>
                        <div>
                            <h5 class="fw-semibold mb-2">Our Location</h5>
                            <p class="mb-0 text-white-50">Radhe Krishna Bhawan, 1st Floor, In front of CGR Complex Block C-2, Near Arjan Garh Metro Station, Delhi – 110047</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-white bg-opacity-25 rounded-circle p-3 me-3 flex-shrink-0">
                            <i class="ri-phone-line fs-5 text-white"></i>
                        </div>
                        <div>
                            <h5 class="fw-semibold mb-2">Call Us</h5>
                            <p class="mb-0 text-white-50">+91 892 044 2794</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-white bg-opacity-25 rounded-circle p-3 me-3 flex-shrink-0">
                            <i class="ri-mail-line fs-5 text-white"></i>
                        </div>
                        <div>
                            <h5 class="fw-semibold mb-2">Email Us</h5>
                            <p class="mb-0 text-white-50">info@globaltechconsultancyservice.com</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start">
                        <div class="bg-white bg-opacity-25 rounded-circle p-3 me-3 flex-shrink-0">
                            <i class="ri-time-line fs-5 text-white"></i>
                        </div>
                        <div>
                            <h5 class="fw-semibold mb-2">Business Hours</h5>
                            <p class="mb-0 text-white-50">Mon - Sun: 10:00 AM - 07:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Custom carousel functionality
class SimpleCarousel {
    constructor(element) {
        this.carousel = element;
        this.slides = this.carousel.querySelectorAll('.carousel-item');
        this.indicators = this.carousel.querySelectorAll('.carousel-indicators button');
        this.prevBtn = this.carousel.querySelector('#prevBtn');
        this.nextBtn = this.carousel.querySelector('#nextBtn');
        this.currentSlide = 0;
        this.totalSlides = this.slides.length;
        this.autoplayInterval = null;

        this.init();
    }

    init() {
        // Set up event listeners
        this.prevBtn.addEventListener('click', () => this.prevSlide());
        this.nextBtn.addEventListener('click', () => this.nextSlide());
        
        this.indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => this.goToSlide(index));
        });

        // Start autoplay
        this.startAutoplay();

        // Pause autoplay on hover
        this.carousel.addEventListener('mouseenter', () => this.stopAutoplay());
        this.carousel.addEventListener('mouseleave', () => this.startAutoplay());
    }

    goToSlide(slideIndex) {
        // Remove active class from current slide and indicator
        this.slides[this.currentSlide].classList.remove('active');
        this.indicators[this.currentSlide].classList.remove('active');

        // Update current slide index
        this.currentSlide = slideIndex;

        // Add active class to new slide and indicator
        this.slides[this.currentSlide].classList.add('active');
        this.indicators[this.currentSlide].classList.add('active');
    }

    nextSlide() {
        const nextIndex = (this.currentSlide + 1) % this.totalSlides;
        this.goToSlide(nextIndex);
    }

    prevSlide() {
        const prevIndex = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.goToSlide(prevIndex);
    }

    startAutoplay() {
        this.autoplayInterval = setInterval(() => {
            this.nextSlide();
        }, 2000);
    }

    stopAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
            this.autoplayInterval = null;
        }
    }
}

// Initialize carousel when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    const carousel = new SimpleCarousel(document.getElementById('heroCarousel'));
});

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

// Form submission
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you for your message! We will get back to you soon.');
    this.reset();
});

// Add scroll animation effects
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Apply animation to cards and sections
document.querySelectorAll('.card, .glass-card').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'all 0.6s ease-out';
    observer.observe(el);
});
</script>
<?php
include 'components/footer.php';
?>