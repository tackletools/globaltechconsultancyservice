<?php 
 include "components/header.php";
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
            --gradient-marketing: linear-gradient(135deg, #ff6b6b 0%, #ffa500 100%);
        }
        
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 4px;
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient-marketing);
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
            color: white;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,0 1000,300 1000,1000 0,700"/></svg>');
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            display: block;
            color: white;
        }

        .stat-label {
            font-size: 1rem;
            opacity: 0.9;
            margin-top: 0.5rem;
        }

        /* Services Grid */
        .services-section {
            padding: 30px 0!important;
            background: var(--light-color);
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 1rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            text-align: center;
            color: #6b7280;
            font-size: 1.1rem;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .service-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: none;
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
            background: var(--gradient-marketing);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin-bottom: 1.5rem;
            background: var(--gradient-marketing);
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--dark-color);
        }

        .service-description {
            color: #6b7280;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .service-features {
            list-style: none;
            padding: 0;
        }

        .service-features li {
            padding: 0.5rem 0;
            color: #6b7280;
            position: relative;
            padding-left: 1.5rem;
        }

        .service-features li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-weight: bold;
        }

        /* Process Section */
        .process-section {
            padding: 40px 0;
            background: white;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .process-step {
            text-align: center;
            position: relative;
        }

        .process-step::after {
            content: '';
            position: absolute;
            top: 35px;
            left: calc(100% - 1rem);
            width: 2rem;
            height: 2px;
            background: var(--gradient-marketing);
            z-index: -1;
        }

        .process-step:last-child::after {
            display: none;
        }

        .process-number {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--gradient-marketing);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 1rem;
        }

        .process-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark-color);
        }

        .process-description {
            color: #6b7280;
            font-size: 0.95rem;
        }

        /* Pricing Section */
        .pricing-section {
            padding: 60px 0;
            background: var(--light-color);
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .pricing-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            text-align: center;
        }

        .pricing-card.featured {
            background: var(--gradient-marketing);
            color: white;
            transform: scale(1.05);
        }

        .pricing-card.featured .pricing-price {
            color: white;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .pricing-card.featured:hover {
            transform: scale(1.05) translateY(-10px);
        }

        .pricing-badge {
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--secondary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .pricing-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .pricing-price {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .pricing-period {
            color: #6b7280;
            margin-bottom: 2rem;
        }

        .pricing-features {
            list-style: none;
            padding: 0;
            margin-bottom: 2rem;
        }

        .pricing-features li {
            padding: 0.5rem 0;
            position: relative;
            padding-left: 1.5rem;
        }

        .pricing-features li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-weight: bold;
        }

        .pricing-card.featured .pricing-features li:before {
            color: white;
        }

        .pricing-btn {
            background: var(--gradient-primary);
            border: none;
            padding: 1rem 2rem;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
        }

        .pricing-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }

        .pricing-card.featured .pricing-btn {
            background: white;
            color: var(--primary-color);
        }

        /* CTA Section */
        .cta-section {
            padding: 60px 0;
            background: var(--gradient-primary);
            color: white;
            text-align: center;
        }

        .cta-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .cta-subtitle {
            font-size: 1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-btn {
            background: white;
            color: var(--primary-color);
            border: none;
            padding: 1rem 2.5rem;
            font-weight: 600;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin: 0 0.5rem;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .cta-btn.secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        /* Animation utilities */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease;
        }

        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s ease;
        }

        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-stats {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .service-grid {
                grid-template-columns: 1fr;
            }
            
            .process-steps {
                grid-template-columns: 1fr;
            }
            
            .process-step::after {
                display: none;
            }
            
            .pricing-grid {
                grid-template-columns: 1fr;
            }
            
            .pricing-card.featured {
                transform: none;
            }
        }
    </style>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content fade-in">
                        <h1 class="hero-title">Digital Marketing That Drives Results</h1>
                        <p class="hero-subtitle">Transform your business with data-driven digital marketing strategies. We help you reach the right audience, at the right time, with the right message.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <button class="btn cta-btn">Get Started Today</button>
                            <button class="btn cta-btn secondary">View Our Work</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-stats fade-in">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <p class="stat-label">Successful Campaigns</p>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">250%</span>
                            <p class="stat-label">Average ROI Increase</p>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50M+</span>
                            <p class="stat-label">Impressions Generated</p>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">98%</span>
                            <p class="stat-label">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="fade-in">
                <h2 class="section-title">Our Digital Marketing Services</h2>
                <p class="section-subtitle">Comprehensive digital marketing solutions tailored to your business needs and goals</p>
            </div>

            <div class="service-grid">
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="ri-search-line"></i>
                    </div>
                    <h3 class="service-title">Search Engine Optimization</h3>
                    <p class="service-description">Boost your organic visibility and drive qualified traffic with our proven SEO strategies.</p>
                    <ul class="service-features">
                        <li>Keyword Research & Analysis</li>
                        <li>On-Page & Technical SEO</li>
                        <li>Link Building & Content Strategy</li>
                        <li>Local SEO Optimization</li>
                    </ul>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="ri-advertisement-line"></i>
                    </div>
                    <h3 class="service-title">Pay-Per-Click Advertising</h3>
                    <p class="service-description">Maximize your ROI with targeted PPC campaigns across Google, Facebook, and other platforms.</p>
                    <ul class="service-features">
                        <li>Google Ads Management</li>
                        <li>Social Media Advertising</li>
                        <li>Display & Remarketing</li>
                        <li>Campaign Optimization</li>
                    </ul>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="ri-share-line"></i>
                    </div>
                    <h3 class="service-title">Social Media Marketing</h3>
                    <p class="service-description">Build your brand presence and engage with your audience across all major social platforms.</p>
                    <ul class="service-features">
                        <li>Content Creation & Curation</li>
                        <li>Community Management</li>
                        <li>Influencer Partnerships</li>
                        <li>Social Media Analytics</li>
                    </ul>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="ri-mail-line"></i>
                    </div>
                    <h3 class="service-title">Email Marketing</h3>
                    <p class="service-description">Nurture leads and retain customers with personalized email campaigns that convert.</p>
                    <ul class="service-features">
                        <li>Email Campaign Design</li>
                        <li>Marketing Automation</li>
                        <li>List Segmentation</li>
                        <li>Performance Tracking</li>
                    </ul>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="ri-article-line"></i>
                    </div>
                    <h3 class="service-title">Content Marketing</h3>
                    <p class="service-description">Create compelling content that educates, engages, and converts your target audience.</p>
                    <ul class="service-features">
                        <li>Content Strategy Development</li>
                        <li>Blog Writing & Management</li>
                        <li>Video Content Creation</li>
                        <li>Content Distribution</li>
                    </ul>
                </div>

                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="ri-bar-chart-line"></i>
                    </div>
                    <h3 class="service-title">Analytics & Reporting</h3>
                    <p class="service-description">Track, measure, and optimize your marketing performance with detailed analytics and insights.</p>
                    <ul class="service-features">
                        <li>Google Analytics Setup</li>
                        <li>Custom Dashboard Creation</li>
                        <li>Monthly Performance Reports</li>
                        <li>ROI Analysis & Optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="process-section">
        <div class="container">
            <div class="fade-in">
                <h2 class="section-title">Our Proven Process</h2>
                <p class="section-subtitle">A systematic approach to digital marketing success</p>
            </div>

            <div class="process-steps">
                <div class="process-step fade-in">
                    <div class="process-number">1</div>
                    <h4 class="process-title">Discovery & Strategy</h4>
                    <p class="process-description">We analyze your business, competition, and target audience to create a customized strategy.</p>
                </div>

                <div class="process-step fade-in">
                    <div class="process-number">2</div>
                    <h4 class="process-title">Implementation</h4>
                    <p class="process-description">Our team executes the strategy across all chosen channels with precision and attention to detail.</p>
                </div>

                <div class="process-step fade-in">
                    <div class="process-number">3</div>
                    <h4 class="process-title">Optimization</h4>
                    <p class="process-description">We continuously monitor performance and make data-driven optimizations to improve results.</p>
                </div>

                <div class="process-step fade-in">
                    <div class="process-number">4</div>
                    <h4 class="process-title">Reporting</h4>
                    <p class="process-description">Regular reports keep you informed about campaign performance and ROI achievements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing-section">
        <div class="container">
            <div class="fade-in">
                <h2 class="section-title">Choose Your Plan</h2>
                <p class="section-subtitle">Flexible pricing options to fit your business needs and budget</p>
            </div>

            <div class="pricing-grid">
                <div class="pricing-card fade-in">
                    <h3 class="pricing-title">Starter</h3>
                    <div class="pricing-price">₹9,999</div>
                    <p class="pricing-period">per month</p>
                    <ul class="pricing-features">
                        <li>SEO Optimization</li>
                        <li>Social Media Management</li>
                        <li>Basic Analytics</li>
                        <li>Monthly Reports</li>
                        <li>Email Support</li>
                    </ul>
                    <button class="pricing-btn">Get Started</button>
                </div>

                <div class="pricing-card featured fade-in">
                    <div class="pricing-badge">Most Popular</div>
                    <h3 class="pricing-title">Professional</h3>
                    <div class="pricing-price">₹14,999</div>
                    <p class="pricing-period">per month</p>
                    <ul class="pricing-features">
                        <li>Everything in Starter</li>
                        <li>PPC Campaign Management</li>
                        <li>Email Marketing</li>
                        <li>Content Creation</li>
                        <li>Advanced Analytics</li>
                        <li>Phone Support</li>
                    </ul>
                    <button class="pricing-btn">Get Started</button>
                </div>

                <div class="pricing-card fade-in">
                    <h3 class="pricing-title">Enterprise</h3>
                    <div class="pricing-price">₹24,999</div>
                    <p class="pricing-period">per month</p>
                    <ul class="pricing-features">
                        <li>Everything in Professional</li>
                        <li>Custom Strategy Development</li>
                        <li>Dedicated Account Manager</li>
                        <li>Weekly Strategy Calls</li>
                        <li>Priority Support</li>
                        <li>Custom Integrations</li>
                    </ul>
                    <button class="pricing-btn">Contact Us</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="fade-in">
                <h2 class="cta-title">Ready to Grow Your Business?</h2>
                <p class="cta-subtitle">Let's discuss how our digital marketing expertise can help you achieve your goals</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <button class="btn cta-btn">Start Your Project</button>
                    <button class="btn cta-btn secondary">Schedule a Call</button>
                </div>
            </div>
        </div>
    </section>

  
    
    <script>
        // Smooth scrolling for navigation links
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

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => {
            observer.observe(el);
        });
</script>

<?php 
 include "components/footer.php";
?>
