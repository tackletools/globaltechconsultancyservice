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
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            padding-top: 80px;
        }
        
        .hero-gradient {
            background: var(--gradient-primary);
        }
        
        .text-gradient {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .design-card {
            transition: all 0.3s ease;
            border: none;
            background: white;
        }
        
        .design-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }
        
        .process-step {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .process-step:hover {
            transform: translateY(-5px);
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            margin: 0 auto 1rem;
        }
        
        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            transition: all 0.3s ease;
        }
        
        .portfolio-item:hover {
            transform: scale(1.05);
        }
        
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(99, 102, 241, 0.9), rgba(245, 158, 11, 0.9));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin: 0 auto 1.5rem;
        }
        
        .icon-web { background: var(--gradient-primary); }
        .icon-mobile { background: var(--gradient-secondary); }
        .icon-brand { background: var(--gradient-accent); }
        .icon-proto { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        
        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: none;
            height: 100%;
        }
        
        .star-rating {
            color: #fbbf24;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }
        
        .cta-section {
            background: var(--gradient-primary);
            border-radius: 25px;
            margin: 4rem 0;
        }
        
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }
            
            .hero-section p {
                font-size: 1rem;
            }
        }
    </style>
    
    <!-- Hero Section -->
    <section class="hero-gradient text-white py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-4">Exceptional UI/UX Design Services</h1>
                    <p class="lead mb-4">Transform your digital presence with stunning, user-centered designs that drive engagement and conversions. We create experiences that users love and businesses trust.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-light btn-lg px-4 py-3 rounded-pill fw-semibold">
                            <i class="ri-phone-line me-2"></i>Get Free Consultation
                        </button>
                        <button class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill fw-semibold">
                            <i class="ri-play-circle-line me-2"></i>View Our Work
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="bg-white bg-opacity-10 rounded-4 p-4 backdrop-blur">
                            <i class="ri-palette-line display-1 text-white mb-3"></i>
                            <h4 class="text-white mb-3">Design Excellence</h4>
                            <p class="text-white-50">Creating digital experiences that matter</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-gradient mb-4">Our Design Services</h2>
                    <p class="lead text-muted">From concept to completion, we deliver comprehensive design solutions that elevate your brand and engage your audience.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="design-card card h-100 text-center p-4 rounded-4 shadow-sm">
                        <div class="service-icon icon-web mx-auto">
                            <i class="ri-computer-line"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Web Design</h4>
                        <p class="text-muted mb-4">Responsive, modern websites that convert visitors into customers with stunning visual appeal.</p>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>Responsive Design</li>
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>User Experience Focus</li>
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>SEO Optimized</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="design-card card h-100 text-center p-4 rounded-4 shadow-sm">
                        <div class="service-icon icon-mobile mx-auto">
                            <i class="ri-smartphone-line"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Mobile App Design</h4>
                        <p class="text-muted mb-4">Intuitive mobile interfaces that provide seamless user experiences across all devices.</p>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>iOS & Android</li>
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>Native Feel</li>
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>Performance Focused</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="design-card card h-100 text-center p-4 rounded-4 shadow-sm">
                        <div class="service-icon icon-brand mx-auto">
                            <i class="ri-brush-line"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Brand Identity</h4>
                        <p class="text-muted mb-4">Complete brand identity solutions including logos, color schemes, and brand guidelines.</p>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>Logo Design</li>
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>Brand Guidelines</li>
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>Marketing Materials</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="design-card card h-100 text-center p-4 rounded-4 shadow-sm">
                        <div class="service-icon icon-proto mx-auto">
                            <i class="ri-layout-line"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Prototyping</h4>
                        <p class="text-muted mb-4">Interactive prototypes that bring your ideas to life before development begins.</p>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>Interactive Prototypes</li>
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>User Testing</li>
                            <li class="mb-2"><i class="ri-check-line text-primary me-2"></i>Wireframing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Process -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-gradient mb-4">Our Design Process</h2>
                    <p class="lead text-muted">A proven methodology that ensures exceptional results every time.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="process-step text-center">
                        <div class="step-number">1</div>
                        <h5 class="fw-bold mb-2">Research</h5>
                        <p class="text-muted small">Understanding your audience and market</p>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="process-step text-center">
                        <div class="step-number">2</div>
                        <h5 class="fw-bold mb-2">Strategy</h5>
                        <p class="text-muted small">Planning the user experience journey</p>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="process-step text-center">
                        <div class="step-number">3</div>
                        <h5 class="fw-bold mb-2">Wireframe</h5>
                        <p class="text-muted small">Creating the structural blueprint</p>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="process-step text-center">
                        <div class="step-number">4</div>
                        <h5 class="fw-bold mb-2">Design</h5>
                        <p class="text-muted small">Visual design and interactions</p>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="process-step text-center">
                        <div class="step-number">5</div>
                        <h5 class="fw-bold mb-2">Prototype</h5>
                        <p class="text-muted small">Interactive testing and refinement</p>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="process-step text-center">
                        <div class="step-number">6</div>
                        <h5 class="fw-bold mb-2">Launch</h5>
                        <p class="text-muted small">Final delivery and support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Showcase -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-gradient mb-4">Featured Projects</h2>
                    <p class="lead text-muted">Explore our latest design work and see how we transform ideas into stunning digital experiences.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item shadow rounded-4 overflow-hidden">
                        <div style="height: 250px; background: linear-gradient(45deg, #667eea, #764ba2); display: flex; align-items: center; justify-content: center;">
                            <i class="ri-shopping-cart-2-line text-white" style="font-size: 3rem;"></i>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h5 class="fw-bold">E-commerce Platform</h5>
                                <p class="mb-3">Complete redesign for better conversions</p>
                                <button class="btn btn-light btn-sm rounded-pill">View Project</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item shadow rounded-4 overflow-hidden">
                        <div style="height: 250px; background: linear-gradient(45deg, #f093fb, #f5576c); display: flex; align-items: center; justify-content: center;">
                            <i class="ri-smartphone-line text-white" style="font-size: 3rem;"></i>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h5 class="fw-bold">Mobile Banking App</h5>
                                <p class="mb-3">Secure and intuitive financial interface</p>
                                <button class="btn btn-light btn-sm rounded-pill">View Project</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item shadow rounded-4 overflow-hidden">
                        <div style="height: 250px; background: linear-gradient(45deg, #4facfe, #00f2fe); display: flex; align-items: center; justify-content: center;">
                            <i class="ri-heart-pulse-line text-white" style="font-size: 3rem;"></i>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h5 class="fw-bold">Healthcare Dashboard</h5>
                                <p class="mb-3">Patient management system redesign</p>
                                <button class="btn btn-light btn-sm rounded-pill">View Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-gradient mb-4">What Our Clients Say</h2>
                    <p class="lead text-muted">Don't just take our word for it - hear from our satisfied clients.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="star-rating mb-3">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p class="mb-4">"GTCS transformed our website completely. The new design increased our conversion rate by 150% and user engagement is through the roof!"</p>
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="ri-user-line text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Sarah Johnson</h6>
                                <small class="text-muted">CEO, TechStart Inc.</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="star-rating mb-3">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p class="mb-4">"The mobile app design exceeded our expectations. The user experience is flawless and our customers love the new interface."</p>
                        <div class="d-flex align-items-center">
                            <div class="bg-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="ri-user-line text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Mike Chen</h6>
                                <small class="text-muted">Product Manager, FinanceApp</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="star-rating mb-3">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p class="mb-4">"Professional team with incredible attention to detail. They delivered exactly what we envisioned and more."</p>
                        <div class="d-flex align-items-center">
                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="ri-user-line text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Emily Rodriguez</h6>
                                <small class="text-muted">Marketing Director, RetailCorp</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="p-4">
                        <div class="display-4 fw-bold text-primary mb-2">250+</div>
                        <h5 class="fw-semibold mb-2">Projects Completed</h5>
                        <p class="text-muted small">Successful designs delivered</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="p-4">
                        <div class="display-4 fw-bold text-success mb-2">98%</div>
                        <h5 class="fw-semibold mb-2">Client Satisfaction</h5>
                        <p class="text-muted small">Happy clients worldwide</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="p-4">
                        <div class="display-4 fw-bold text-warning mb-2">15+</div>
                        <h5 class="fw-semibold mb-2">Awards Won</h5>
                        <p class="text-muted small">Industry recognition</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="p-4">
                        <div class="display-4 fw-bold text-info mb-2">24/7</div>
                        <h5 class="fw-semibold mb-2">Support Available</h5>
                        <p class="text-muted small">Always here to help</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="cta-section text-white text-center p-5">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="display-5 fw-bold mb-4">Ready to Transform Your Digital Presence?</h2>
                        <p class="lead mb-4">Let's discuss your project and create something amazing together. Get your free consultation today.</p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <button class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-semibold">
                                <i class="ri-phone-line me-2"></i>Start Your Project
                            </button>
                            <button class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-semibold">
                                <i class="ri-calendar-line me-2"></i>Schedule a Call
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <script>
        // Add smooth scrolling and animations
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            });

            // Observe all cards
            document.querySelectorAll('.design-card, .testimonial-card, .process-step').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'all 0.6s ease';
                observer.observe(card);
            });
        });
    </script>