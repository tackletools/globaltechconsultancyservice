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
            --gradient-orange: linear-gradient(135deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.4;
            overflow-x: hidden;
            font-size: 14px;
            color: var(--dark-color);
        }

        /* Hero Section */
        .hero-section {
            min-height: 65vh;
            background: var(--gradient-primary);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 1.5rem 0;
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
            font-size: clamp(1.6rem, 3vw, 2.2rem);
            font-weight: 600;
            color: white;
            margin-bottom: 0.8rem;
            line-height: 1.3;
        }
        
        .hero-subtitle {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 1.2rem;
            font-weight: 300;
        }
        
        .hero-cta {
            background: var(--gradient-secondary);
            border: none;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            border-radius: 25px;
            color: white;
            font-size: 0.85rem;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            margin-right: 0.8rem;
        }
        
        .hero-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
            color: white;
        }

        .hero-cta-secondary {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            border-radius: 25px;
            color: white;
            font-size: 0.85rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .hero-cta-secondary:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            color: white;
        }

        .hero-image {
            position: relative;
            z-index: 2;
        }
        
        .hero-image img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 25px rgba(0, 0, 0, 0.3));
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Services Overview */
        .services-overview {
            padding: 2rem 0;
            background: var(--light-color);
        }

        .section-title {
            font-size: 1.6rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 0.4rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-subtitle {
            text-align: center;
            color: #6b7280;
            font-size: 0.85rem;
            margin-bottom: 1.5rem;
        }

        .service-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: none;
            height: 100%;
            margin-bottom: 1rem;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }
        
        .service-icon {
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
        
        .service-icon.animation {
            background: var(--gradient-primary);
        }
        
        .service-icon.video {
            background: var(--gradient-secondary);
        }
        
        .service-icon.motion {
            background: var(--gradient-accent);
        }

        .service-icon.vfx {
            background: var(--gradient-orange);
        }
        
        .service-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.6rem;
            color: var(--dark-color);
        }
        
        .service-description {
            color: #6b7280;
            margin-bottom: 0.8rem;
            font-size: 0.85rem;
            line-height: 1.5;
        }

        /* Animation Types Section */
        .animation-types {
            padding: 2rem 0;
            background: white;
        }

        .type-card {
            background: linear-gradient(145deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
            border: 1px solid rgba(99, 102, 241, 0.1);
        }

        .type-card:hover {
            transform: translateY(-5px);
            background: linear-gradient(145deg, #ffffff 0%, #f1f5f9 100%);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.15);
        }

        .type-icon {
            font-size: 2.5rem;
            margin-bottom: 0.8rem;
            display: block;
        }

        .type-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark-color);
        }

        .type-description {
            font-size: 0.8rem;
            color: #6b7280;
            line-height: 1.4;
        }

        /* Process Section */
        .process-section {
            padding: 2rem 0;
            background: var(--light-color);
        }

        .process-step {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            position: relative;
            margin-bottom: 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .process-step:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .process-number {
            width: 40px;
            height: 40px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.8rem;
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .process-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark-color);
        }

        .process-description {
            font-size: 0.8rem;
            color: #6b7280;
            line-height: 1.4;
        }

        /* Portfolio Section */
        .portfolio-section {
            padding: 2rem 0;
            background: white;
        }

        .portfolio-item {
            background: var(--light-color);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }

        .portfolio-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }

        .portfolio-image {
            height: 180px;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }

        .portfolio-content {
            padding: 1rem;
        }

        .portfolio-title {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 0.4rem;
            color: var(--dark-color);
        }

        .portfolio-description {
            font-size: 0.8rem;
            color: #6b7280;
            line-height: 1.4;
        }

        .portfolio-tags {
            margin-top: 0.6rem;
        }

        .portfolio-tag {
            display: inline-block;
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary-color);
            padding: 0.2rem 0.6rem;
            border-radius: 15px;
            font-size: 0.7rem;
            margin-right: 0.3rem;
            margin-bottom: 0.3rem;
        }

        /* Tools Section */
        .tools-section {
            padding: 2rem 0;
            background: var(--light-color);
        }

        .tool-card {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .tool-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .tool-icon {
            font-size: 2rem;
            margin-bottom: 0.6rem;
            color: var(--primary-color);
        }

        .tool-name {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--dark-color);
        }

        /* Pricing Section */
        .pricing-section {
            padding: 2rem 0;
            background: white;
        }

        .pricing-card {
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
            position: relative;
        }

        .pricing-card.popular {
            border-color: var(--primary-color);
            transform: scale(1.02);
        }

        .pricing-card.popular::before {
            content: 'Most Popular';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary-color);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 15px;
            font-size: 0.7rem;
            font-weight: 600;
        }

        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }

        .pricing-card.popular:hover {
            transform: translateY(-5px) scale(1.02);
        }

        .pricing-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark-color);
        }

        .pricing-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.8rem;
        }

        .pricing-price span {
            font-size: 0.8rem;
            color: #6b7280;
            font-weight: 400;
        }

        .pricing-features {
            list-style: none;
            padding: 0;
            margin-bottom: 1rem;
        }

        .pricing-features li {
            padding: 0.3rem 0;
            font-size: 0.8rem;
            color: #6b7280;
        }

        .pricing-features li i {
            color: var(--primary-color);
            margin-right: 0.5rem;
        }

        .pricing-btn {
            background: var(--gradient-primary);
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 8px;
            color: white;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            width: 100%;
        }

        .pricing-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
        }

        /* CTA Section */
        .cta-section {
            padding: 2rem 0;
            background: var(--gradient-primary);
            color: white;
            text-align: center;
        }

        .cta-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 0.6rem;
        }

        .cta-description {
            font-size: 0.9rem;
            margin-bottom: 1.2rem;
            opacity: 0.9;
        }

        .cta-button {
            background: white;
            color: var(--primary-color);
            border: none;
            padding: 0.6rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            margin-right: 0.8rem;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
        }

        .cta-button-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
            padding: 0.6rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .cta-button-secondary:hover {
            background: white;
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                text-align: center;
                min-height: 50vh;
                padding: 1rem 0;
            }
            
            .service-card, .type-card, .process-step, .portfolio-item, .tool-card, .pricing-card {
                margin-bottom: 1rem;
            }
            
            .services-overview, .animation-types, .process-section, .portfolio-section, .tools-section, .pricing-section, .cta-section {
                padding: 1.5rem 0;
            }
            
            .section-title {
                font-size: 1.4rem;
            }
            
            .hero-title {
                font-size: 1.6rem;
            }

            .hero-cta, .hero-cta-secondary {
                display: inline-block;
                margin: 0.5rem 0;
                text-align: center;
            }

            .cta-button, .cta-button-secondary {
                display: block;
                margin: 0.5rem 0;
                width: 80%;
                margin-left: auto;
                margin-right: auto;
            }
        }

        /* Animation utilities */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">Professional Multimedia Animation Services</h1>
                        <p class="hero-subtitle">Transform your ideas into stunning visual experiences with our expert animation team. From 2D motion graphics to complex 3D animations.</p>
                        <div class="hero-buttons">
                            <button class="hero-cta">Start Your Project</button>
                            <a href="#portfolio" class="hero-cta-secondary">View Portfolio</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <div style="width: 100%; height: 300px; background: rgba(255,255,255,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem;">
                            <i class="ri-movie-2-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="services-overview">
        <div class="container">
            <h2 class="section-title">Our Animation Services</h2>
            <p class="section-subtitle">Comprehensive multimedia animation solutions for all your creative needs</p>
            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon animation">
                            <i class="ri-brush-line"></i>
                        </div>
                        <h3 class="service-title">2D Animation</h3>
                        <p class="service-description">Create engaging 2D animations for explainer videos, commercials, and educational content.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon video">
                            <i class="ri-brush-line"></i>
                        </div>
                        <h3 class="service-title">3D Animation</h3>
                        <p class="service-description">Professional 3D modeling and animation for product demos, architectural visualization, and more.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon motion">
                            <i class="ri-play-circle-line"></i>
                        </div>
                        <h3 class="service-title">Motion Graphics</h3>
                        <p class="service-description">Dynamic motion graphics for presentations, social media, and digital marketing campaigns.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon vfx">
                            <i class="ri-magic-line"></i>
                        </div>
                        <h3 class="service-title">VFX & Compositing</h3>
                        <p class="service-description">Advanced visual effects and compositing for films, commercials, and digital content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Animation Types -->
    <section class="animation-types">
        <div class="container">
            <h2 class="section-title">Animation Specializations</h2>
            <p class="section-subtitle">Explore our diverse range of animation styles and techniques</p>
            
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="type-card">
                        <div class="type-icon">🎬</div>
                        <h4 class="type-title">Explainer Videos</h4>
                        <p class="type-description">Simplify complex concepts</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="type-card">
                        <div class="type-icon">🎨</div>
                        <h4 class="type-title">Character Animation</h4>
                        <p class="type-description">Bring characters to life</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="type-card">
                        <div class="type-icon">📱</div>
                        <h4 class="type-title">App Animations</h4>
                        <p class="type-description">Smooth UI transitions</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="type-card">
                        <div class="type-icon">🏢</div>
                        <h4 class="type-title">Building Architectural</h4>
                        <p class="type-description">Building visualizations</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="type-card">
                        <div class="type-icon">📊</div>
                        <h4 class="type-title">Data Visualization</h4>
                        <p class="type-description">Animated infographics</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="type-card">
                        <div class="type-icon">🎮</div>
                        <h4 class="type-title">Game Resources</h4>
                        <p class="type-description">Interactive animations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="section-title">Our Animation Process</h2>
            <p class="section-subtitle">From concept to final delivery, we ensure quality at every step</p>
            
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="process-step">
                        <div class="process-number">1</div>
                        <h4 class="process-title">Concept</h4>
                        <p class="process-description">Understanding your needs</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="process-step">
                        <div class="process-number">2</div>
                        <h4 class="process-title">Storyboard</h4>
                        <p class="process-description">Crea ting detailed visual narrative</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="process-step">
                        <div class="process-number">3</div>
                        <h4 class="process-title">Design</h4>
                        <p class="process-description">Crafting visual elements and style</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="process-step">
                        <div class="process-number">4</div>
                        <h4 class="process-title">Animation</h4>
                        <p class="process-description">Bringing designs to life</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="process-step">
                        <div class="process-number">5</div>
                        <h4 class="process-title">Review</h4>
                        <p class="process-description">Client feedback and revisions</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="process-step">
                        <div class="process-number">6</div>
                        <h4 class="process-title">Delivery</h4>
                        <p class="process-description">Final output in required formats</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section" id="portfolio">
        <div class="container">
            <h2 class="section-title">Recent Projects</h2>
            <p class="section-subtitle">Showcasing our latest animation work across various industries</p>
            
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <i class="ri-play-circle-line"></i>
                        </div>
                        <div class="portfolio-content">
                            <h4 class="portfolio-title">Tech Startup Explainer</h4>
                            <p class="portfolio-description">2D animated explainer video for a fintech startup showcasing their app features.</p>
                            <div class="portfolio-tags">
                                <span class="portfolio-tag">2D Animation</span>
                                <span class="portfolio-tag">Explainer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image" style="background: var(--gradient-secondary);">
                            <i class="ri-3d-view"></i>
                        </div>
                        <div class="portfolio-content">
                            <h4 class="portfolio-title">Product Visualization</h4>
                            <p class="portfolio-description">3D product animation for an e-commerce brand showcasing furniture details.</p>
                            <div class="portfolio-tags">
                                <span class="portfolio-tag">3D Animation</span>
                                <span class="portfolio-tag">Product</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image" style="background: var(--gradient-secondary);">
                            <i class="ri-3d-view"></i>
                        </div>
                        <div class="portfolio-content">
                            <h4 class="portfolio-title">Data Visualization</h4>
                            <p class="portfolio-description">Animated infographics for a healthcare company's annual report.</p>
                            <div class="portfolio-tags">
                                <span class="portfolio-tag">3D Animation</span>
                                <span class="portfolio-tag">Data</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>            

<?php 
 include "components/footer.php";
?>