<?php
include 'components/header.php';
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Services</title>
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-dark: #4f46e5;
            --secondary-color: #f59e0b;
            --accent-color: #06b6d4;
            --dark-color: #0f172a;
            --light-color: #f8fafc;
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-web: linear-gradient(135deg, #00d4aa 0%, #00d4aa 100%);
            --gradient-development: linear-gradient(135deg, #667eea 0%, #4338ca 100%);
        }
        
        .section-spacing {
            padding: 1.5rem 0;
        }
        
        .hero-web {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            position: relative;
            overflow: hidden;
            padding: 2rem 0;
        }
        
        .hero-web::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><circle fill="%23ffffff05" cx="200" cy="200" r="100"/><circle fill="%23ffffff03" cx="800" cy="400" r="150"/><circle fill="%23ffffff05" cx="400" cy="700" r="80"/></svg>');
            pointer-events: none;
        }
        
        .web-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient-development);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.3rem;
            margin-bottom: 0.8rem;
        }
        
        .service-card-web {
            background: white;
            border-radius: 12px;
            padding: 1.2rem;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        
        .service-card-web:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            border-color: var(--primary-color);
        }
        
        .tech-card {
            background: linear-gradient(135deg, #00d4aa20 0%, #4338ca20 100%);
            border: 1px solid #00d4aa30;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 0.8rem;
            transition: all 0.3s ease;
        }
        
        .tech-card:hover {
            background: linear-gradient(135deg, #00d4aa30 0%, #4338ca30 100%);
            transform: translateX(4px);
        }
        
        .feature-highlight {
            background: linear-gradient(135deg, #667eea20 0%, #764ba220 100%);
            border: 1px solid #667eea30;
            border-radius: 8px;
            padding: 0.8rem;
            margin-bottom: 0.6rem;
        }
        
        .stats-counter {
            background: var(--gradient-primary);
            color: white;
            border-radius: 12px;
            padding: 1.2rem;
            text-align: center;
            height: 100%;
        }
        
        .process-step {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            border: 1px solid #e2e8f0;
            position: relative;
            height: 100%;
        }
        
        .step-number {
            width: 30px;
            height: 30px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 12px;
            margin: 0 auto 0.8rem;
        }
        
        .pricing-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            border: 2px solid #e2e8f0;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .pricing-card.featured {
            border-color: var(--primary-color);
            transform: scale(1.02);
        }
        
        .pricing-card:hover {
            border-color: var(--primary-color);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.15);
        }
        
        .feature-list li {
            font-size: 12px;
            padding: 0.2rem 0;
            color: #64748b;
        }
        
        .feature-list li i {
            color: var(--primary-color);
            margin-right: 0.4rem;
            font-size: 10px;
        }
        
        .bg-web-dark {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }
        
        .text-gradient {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .btn-web {
            background: var(--gradient-development);
            border: none;
            color: white;
            padding: 0.5rem 1.2rem;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-web:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(103, 126, 234, 0.4);
            color: white;
        }
        
        .btn-outline-web {
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
            padding: 0.5rem 1.2rem;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-outline-web:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-1px);
        }
        
        .industry-card {
            transition: all 0.3s ease;
            background: white;
            border: 1px solid #e2e8f0;
        }
        
        .industry-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        @media (max-width: 768px) {
            .section-spacing {
                padding: 1rem 0;
            }
            
            .hero-web {
                padding: 1.5rem 0;
            }
            
            .web-icon {
                margin-top: 25px;
            }
            
            .service-card-web {
                padding: 1rem;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-web">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-white">
                        <h1 class="display-6 fw-bold mb-2">Web Development Services</h1>
                        <p class="lead mb-3 fs-6">Build powerful, responsive websites and web applications with cutting-edge technologies. From concept to deployment, we bring your digital vision to life.</p>
                        <div class="d-flex gap-2 flex-wrap">
                            <button class="btn btn-web">Start Your Project</button>
                            <button class="btn btn-outline-light btn-sm">Free Consultation</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="web-icon mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="ri-code-s-slash-line"></i>
                    </div>
                    <h4 class="text-white mb-2">Full-Stack Development</h4>
                    <p class="text-white-50 small">Modern, scalable web solutions built for performance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Web Development Services -->
    <section class="section-spacing bg-light">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h2 class="h4 fw-bold text-gradient mb-1">Our Development Services</h2>
                    <p class="text-muted small">Complete web solutions from frontend to backend</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-web">
                        <div class="web-icon">
                            <i class="ri-layout-line"></i>
                        </div>
                        <h5 class="h6 fw-bold mb-2">Frontend Development</h5>
                        <p class="small text-muted mb-2">Create stunning, responsive user interfaces with modern frameworks and technologies.</p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="ri-check-line"></i>React & Next.js Development</li>
                            <li><i class="ri-check-line"></i>Vue.js & Nuxt.js Applications</li>
                            <li><i class="ri-check-line"></i>Responsive Design & CSS</li>
                            <li><i class="ri-check-line"></i>Interactive UI Components</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-web">
                        <div class="web-icon">
                            <i class="ri-server-line"></i>
                        </div>
                        <h5 class="h6 fw-bold mb-2">Backend Development</h5>
                        <p class="small text-muted mb-2">Robust server-side solutions with scalable architecture and secure APIs.</p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="ri-check-line"></i>Node.js & Express.js</li>
                            <li><i class="ri-check-line"></i>Python & Django/Flask</li>
                            <li><i class="ri-check-line"></i>RESTful API Development</li>
                            <li><i class="ri-check-line"></i>Database Design & Management</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-web">
                        <div class="web-icon">
                            <i class="ri-smartphone-line"></i>
                        </div>
                        <h5 class="h6 fw-bold mb-2">Mobile-First Design</h5>
                        <p class="small text-muted mb-2">Responsive websites that work perfectly on all devices and screen sizes.</p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="ri-check-line"></i>Mobile-First Approach</li>
                            <li><i class="ri-check-line"></i>Progressive Web Apps</li>
                            <li><i class="ri-check-line"></i>Cross-Browser Compatibility</li>
                            <li><i class="ri-check-line"></i>Touch-Friendly Interfaces</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-web">
                        <div class="web-icon">
                            <i class="ri-shopping-cart-line"></i>
                        </div>
                        <h5 class="h6 fw-bold mb-2">E-commerce Solutions</h5>
                        <p class="small text-muted mb-2">Complete online store development with payment integration and inventory management.</p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="ri-check-line"></i>Custom E-commerce Platforms</li>
                            <li><i class="ri-check-line"></i>Payment Gateway Integration</li>
                            <li><i class="ri-check-line"></i>Inventory Management</li>
                            <li><i class="ri-check-line"></i>Shopping Cart & Checkout</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-web">
                        <div class="web-icon">
                            <i class="ri-article-line"></i>
                        </div>
                        <h5 class="h6 fw-bold mb-2">CMS Development</h5>
                        <p class="small text-muted mb-2">Content management systems that make it easy to update and manage your website.</p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="ri-check-line"></i>WordPress Development</li>
                            <li><i class="ri-check-line"></i>Custom CMS Solutions</li>
                            <li><i class="ri-check-line"></i>Content Strategy & SEO</li>
                            <li><i class="ri-check-line"></i>User-Friendly Admin Panels</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-web">
                        <div class="web-icon">
                            <i class="ri-speed-line"></i>
                        </div>
                        <h5 class="h6 fw-bold mb-2">Performance Optimization</h5>
                        <p class="small text-muted mb-2">Speed up your website with advanced optimization techniques and best practices.</p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="ri-check-line"></i>Page Speed Optimization</li>
                            <li><i class="ri-check-line"></i>Image & Asset Compression</li>
                            <li><i class="ri-check-line"></i>CDN Implementation</li>
                            <li><i class="ri-check-line"></i>SEO Optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies We Use -->
    <section class="section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="h4 fw-bold mb-2">Technologies We Master</h3>
                    <p class="text-muted small mb-3">Cutting-edge tools and frameworks for modern web development</p>
                    
                    <div class="tech-card">
                        <div class="d-flex align-items-start">
                            <i class="ri-reactjs-line text-primary me-2 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1 small">Frontend Frameworks</h6>
                                <p class="small text-muted mb-0">React, Vue.js, Angular, Next.js, Nuxt.js for dynamic user interfaces.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tech-card">
                        <div class="d-flex align-items-start">
                            <i class="ri-database-2-line text-primary me-2 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1 small">Backend Technologies</h6>
                                <p class="small text-muted mb-0">Node.js, Python, PHP, Java with robust database solutions.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tech-card">
                        <div class="d-flex align-items-start">
                            <i class="ri-cloud-line text-primary me-2 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1 small">Cloud & DevOps</h6>
                                <p class="small text-muted mb-0">AWS, Google Cloud, Docker, CI/CD pipelines for scalable deployment.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tech-card">
                        <div class="d-flex align-items-start">
                            <i class="ri-palette-line text-primary me-2 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1 small">Design & UX</h6>
                                <p class="small text-muted mb-0">Modern CSS frameworks, animation libraries, and user experience design.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <h3 class="h4 fw-bold mb-2">Why Choose Our Development</h3>
                    <p class="text-muted small mb-3">Professional approach to web development with proven results</p>
                    
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="feature-highlight">
                                <i class="ri-rocket-line text-primary mb-1"></i>
                                <h6 class="fw-bold small mb-1">Fast Development</h6>
                                <p class="small text-muted mb-0">Agile development process with quick turnaround times.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-highlight">
                                <i class="ri-shield-check-line text-primary mb-1"></i>
                                <h6 class="fw-bold small mb-1">Secure Code</h6>
                                <p class="small text-muted mb-0">Security-first approach with best practices implementation.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-highlight">
                                <i class="ri-expand-diagonal-line text-primary mb-1"></i>
                                <h6 class="fw-bold small mb-1">Scalable Architecture</h6>
                                <p class="small text-muted mb-0">Built to grow with your business needs and traffic.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-highlight">
                                <i class="ri-customer-service-line text-primary mb-1"></i>
                                <h6 class="fw-bold small mb-1">24/7 Support</h6>
                                <p class="small text-muted mb-0">Ongoing maintenance and technical support services.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-highlight">
                                <i class="ri-search-eye-line text-primary mb-1"></i>
                                <h6 class="fw-bold small mb-1">SEO Optimized</h6>
                                <p class="small text-muted mb-0">Built-in SEO best practices for better search rankings.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-highlight">
                                <i class="ri-git-branch-line text-primary mb-1"></i>
                                <h6 class="fw-bold small mb-1">Version Control</h6>
                                <p class="small text-muted mb-0">Professional Git workflow and code management.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Stats -->
    <section class="section-spacing bg-light">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-counter">
                        <h3 class="h2 fw-bold mb-1">200+</h3>
                        <p class="small mb-0">Projects Completed</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-counter">
                        <h3 class="h2 fw-bold mb-1">98%</h3>
                        <p class="small mb-0">Client Satisfaction</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-counter">
                        <h3 class="h2 fw-bold mb-1">5+</h3>
                        <p class="small mb-0">Years Experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-counter">
                        <h3 class="h2 fw-bold mb-1">24/7</h3>
                        <p class="small mb-0">Support Available</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Process -->
    <section class="section-spacing">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h2 class="h4 fw-bold text-gradient mb-1">Our Development Process</h2>
                    <p class="text-muted small">Systematic approach to building exceptional web solutions</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <h6 class="fw-bold small mb-2">Discovery</h6>
                        <p class="small text-muted">Understanding your requirements, goals, and target audience for optimal solutions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <h6 class="fw-bold small mb-2">Design</h6>
                        <p class="small text-muted">Creating wireframes, mockups, and user experience design for your project.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <h6 class="fw-bold small mb-2">Development</h6>
                        <p class="small text-muted">Building your website with clean, efficient code and modern technologies.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <h6 class="fw-bold small mb-2">Launch</h6>
                        <p class="small text-muted">Testing, deployment, and ongoing support to ensure optimal performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Plans -->
    <section class="section-spacing bg-light">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h2 class="h4 fw-bold text-gradient mb-1">Development Packages</h2>
                    <p class="text-muted small">Choose the perfect solution for your web development needs</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <h5 class="h6 fw-bold mb-2">Starter Website</h5>
                        <div class="h3 fw-bold text-primary mb-2">$1,299<span class="small text-muted">/project</span></div>
                        <p class="small text-muted mb-3">Perfect for small businesses and personal websites</p>
                        <ul class="list-unstyled feature-list mb-3">
                            <li><i class="ri-check-line"></i>Up to 5 Custom Pages</li>
                            <li><i class="ri-check-line"></i>Responsive Design</li>
                            <li><i class="ri-check-line"></i>Basic SEO Setup</li>
                            <li><i class="ri-check-line"></i>Contact Form Integration</li>
                            <li><i class="ri-check-line"></i>3 Months Free Support</li>
                        </ul>
                        <button class="btn btn-outline-web w-100">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-card featured">
                        <div class="badge bg-primary mb-2 small">Most Popular</div>
                        <h5 class="h6 fw-bold mb-2">Business Website</h5>
                        <div class="h3 fw-bold text-primary mb-2">$2,999<span class="small text-muted">/project</span></div>
                        <p class="small text-muted mb-3">Comprehensive solution for growing businesses</p>
                        <ul class="list-unstyled feature-list mb-3">
                            <li><i class="ri-check-line"></i>Up to 15 Custom Pages</li>
                            <li><i class="ri-check-line"></i>Advanced Responsive Design</li>
                            <li><i class="ri-check-line"></i>CMS Integration</li>
                            <li><i class="ri-check-line"></i>E-commerce Functionality</li>
                            <li><i class="ri-check-line"></i>SEO Optimization</li>
                            <li><i class="ri-check-line"></i>6 Months Support</li>
                        </ul>
                        <button class="btn btn-web w-100">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <h5 class="h6 fw-bold mb-2">Enterprise Solution</h5>
                        <div class="h3 fw-bold text-primary mb-2">$5,999<span class="small text-muted">/project</span></div>
                        <p class="small text-muted mb-3">Custom web applications for large organizations</p>
                        <ul class="list-unstyled feature-list mb-3">
                            <li><i class="ri-check-line"></i>Unlimited Custom Pages</li>
                            <li><i class="ri-check-line"></i>Custom Web Applications</li>
                            <li><i class="ri-check-line"></i>API Development</li>
                            <li><i class="ri-check-line"></i>Database Design</li>
                            <li><i class="ri-check-line"></i>Performance Optimization</li>
                            <li><i class="ri-check-line"></i>12 Months Support</li>
                        </ul>
                        <button class="btn btn-outline-web w-100">Contact Sales</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve -->
    <section class="section-spacing">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="h4 fw-bold text-gradient mb-2">Industries We Serve</h2>
                    <p class="text-muted small">Custom web solutions for diverse business sectors</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-hospital-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Healthcare</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-bank-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Finance</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-graduation-cap-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Education</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-government-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Government</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-shopping-cart-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Retail</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-building-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Corporate</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-car-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Automotive</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-restaurant-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Hospitality</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-truck-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Logistics</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-home-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Residential</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-ancient-gate-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Manufacturing</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="industry-card p-3 rounded">
                        <i class="ri-server-line h4 text-primary mb-2"></i>
                        <p class="small fw-medium mb-0">Technology</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'components/footer.php';
?>
