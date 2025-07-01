<?php
include 'components/header.php';
?>

<!-- Game Development Section - Include after header.php -->
<style>
    :root {
        --gaming-primary: #ff6b6b;
        --gaming-secondary: #4ecdc4;
        --gaming-accent: #45b7d1;
        --gaming-dark: #0a0a0a;
        --gaming-purple: #8b5cf6;
        --gradient-gaming: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 50%, #45b7d1 100%);
        --gradient-neon: linear-gradient(135deg, #00f5ff 0%, #ff00ff 50%, #ffff00 100%);
        --gradient-cyber: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
    }

    /* Game Development Hero Section */
    .game-dev-hero {
        min-height: 80vh;
        background: var(--gradient-cyber);
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        color: white;
        padding: 2rem 0;
    }

    .game-dev-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 80%, rgba(139, 92, 246, 0.3) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(255, 107, 107, 0.3) 0%, transparent 50%),
            radial-gradient(circle at 40% 40%, rgba(78, 205, 196, 0.2) 0%, transparent 50%);
        animation: glow 8s ease-in-out infinite alternate;
    }

    .game-dev-hero::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.3"/><circle cx="75" cy="75" r="1" fill="%2300f5ff" opacity="0.4"/><circle cx="50" cy="10" r="1" fill="%23ff00ff" opacity="0.2"/></svg>') repeat;
        animation: stars 20s linear infinite;
    }

    @keyframes glow {
        0% { opacity: 0.5; }
        100% { opacity: 1; }
    }

    @keyframes stars {
        0% { transform: translateY(0px); }
        100% { transform: translateY(-100px); }
    }

    .game-hero-content {
        position: relative;
        z-index: 3;
    }

    .game-hero-title {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 900;
        background: var(--gradient-neon);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
        animation: titleGlow 3s ease-in-out infinite alternate;
    }

    @keyframes titleGlow {
        0% { filter: brightness(1); }
        100% { filter: brightness(1.2); }
    }

    .game-hero-subtitle {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 1.5rem;
        font-weight: 400;
        line-height: 1.5;
    }

    .game-cta-buttons {
        display: flex;
        gap: 0.8rem;
        flex-wrap: wrap;
    }

    .game-cta-primary {
        background: var(--gradient-gaming);
        border: none;
        padding: 0.8rem 2rem;
        font-weight: 600;
        border-radius: 50px;
        color: white;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
        position: relative;
        overflow: hidden;
    }

    .game-cta-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .game-cta-primary:hover::before {
        left: 100%;
    }

    .game-cta-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 35px rgba(255, 107, 107, 0.4);
        color: white;
    }

    .game-cta-secondary {
        background: transparent;
        border: 2px solid rgba(255, 255, 255, 0.3);
        padding: 0.8rem 2rem;
        font-weight: 600;
        border-radius: 50px;
        color: white;
        font-size: 1rem;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .game-cta-secondary:hover {
        border-color: var(--gaming-accent);
        background: rgba(69, 183, 209, 0.1);
        transform: translateY(-2px);
        color: white;
    }

    /* Game Services Section */
    .game-services {
        padding: 3rem 0;
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }

    .game-section-title {
        font-size: 2.5rem;
        font-weight: 800;
        text-align: center;
        margin-bottom: 0.8rem;
        background: var(--gradient-gaming);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .game-section-subtitle {
        text-align: center;
        color: #64748b;
        font-size: 1rem;
        margin-bottom: 2.5rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.5;
    }

    .game-service-card {
        background: white;
        border-radius: 15px;
        padding: 1.8rem;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: none;
        height: 100%;
        position: relative;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }

    .game-service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--gradient-gaming);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .game-service-card:hover::before {
        transform: scaleX(1);
    }

    .game-service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    }

    .game-service-icon {
        width: 60px;
        height: 60px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: white;
        margin-bottom: 1rem;
        position: relative;
    }

    .game-service-icon.mobile-games {
        background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
    }

    .game-service-icon.web-games {
        background: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
    }

    .game-service-icon.vr-ar {
        background: linear-gradient(135deg, #8b5cf6 0%, #a78bfa 100%);
    }

    .game-service-icon.unity {
        background: linear-gradient(135deg, #45b7d1 0%, #96ceb4 100%);
    }

    .game-service-icon.multiplayer {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }

    .game-service-icon.analytics {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }

    .game-service-title {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 0.8rem;
        color: var(--dark-color);
    }

    .game-service-description {
        color: #64748b;
        margin-bottom: 1rem;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    .game-feature-list {
        list-style: none;
        padding: 0;
    }

    .game-feature-list li {
        padding: 0.3rem 0;
        color: #64748b;
        position: relative;
        padding-left: 1.5rem;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .game-feature-list li:before {
        content: '🎮';
        position: absolute;
        left: 0;
        font-size: 1rem;
    }

    /* Game Portfolio Section */
    .game-portfolio {
        padding: 3rem 0;
        background: var(--gaming-dark);
        color: white;
    }

    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .portfolio-item {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        position: relative;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .portfolio-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(255, 107, 107, 0.2);
    }

    .portfolio-image {
        height: 160px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        position: relative;
        overflow: hidden;
    }

    .portfolio-image::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.3);
    }

    .portfolio-content {
        padding: 1.5rem;
    }

    .portfolio-title {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 0.3rem;
        color: white;
    }

    .portfolio-category {
        color: var(--gaming-secondary);
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .portfolio-description {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 1rem;
        line-height: 1.5;
        font-size: 0.9rem;
    }

    .portfolio-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 0.4rem;
    }

    .tech-tag {
        background: rgba(255, 255, 255, 0.1);
        padding: 0.2rem 0.6rem;
        border-radius: 12px;
        font-size: 0.75rem;
        color: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Gaming Technologies Section */
    .gaming-tech {
        padding: 3rem 0;
        background: white;
    }

    .tech-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .tech-item {
        text-align: center;
        padding: 1.5rem;
        border-radius: 12px;
        transition: all 0.3s ease;
        background: #f8fafc;
        border: 2px solid transparent;
    }

    .tech-item:hover {
        transform: translateY(-5px);
        border-color: var(--gaming-primary);
        background: white;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .tech-icon {
        font-size: 2.5rem;
        margin-bottom: 0.8rem;
        display: block;
    }

    .tech-name {
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 0.3rem;
        font-size: 1rem;
    }

    .tech-description {
        color: #64748b;
        font-size: 0.85rem;
    }

    /* Contact CTA Section */
    .game-contact-cta {
        padding: 3rem 0;
        background: var(--gradient-gaming);
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .game-contact-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,0 1000,300 1000,1000 0,700"/></svg>');
        pointer-events: none;
    }

    .cta-content {
        position: relative;
        z-index: 2;
    }

    .cta-title {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 0.8rem;
    }

    .cta-subtitle {
        font-size: 1rem;
        margin-bottom: 1.5rem;
        opacity: 0.9;
    }

    .cta-button {
        background: white;
        color: var(--gaming-primary);
        border: none;
        padding: 0.8rem 2rem;
        font-weight: 700;
        border-radius: 50px;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
        color: var(--gaming-primary);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .portfolio-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
        .tech-grid {
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        }
    }

    @media (max-width: 992px) {
        .game-dev-hero {
            min-height: 70vh;
        }
        .game-hero-title {
            font-size: 2.8rem;
        }
        .game-section-title {
            font-size: 2.2rem;
        }
        .portfolio-grid {
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .game-dev-hero {
            min-height: 60vh;
            padding: 1.5rem 0;
        }
        .game-hero-title {
            font-size: 2.5rem;
            margin-bottom: 0.8rem;
        }
        .game-hero-subtitle {
            font-size: 1rem;
            margin-bottom: 1.2rem;
        }
        .game-cta-buttons {
            justify-content: flex-start;
            gap: 0.6rem;
        }
        .game-cta-primary,
        .game-cta-secondary {
            padding: 0.7rem 1.5rem;
            font-size: 0.9rem;
        }
        .game-services,
        .game-portfolio,
        .gaming-tech,
        .game-contact-cta {
            padding: 2.5rem 0;
        }
        .game-section-title {
            font-size: 2rem;
            margin-bottom: 0.6rem;
        }
        .game-section-subtitle {
            font-size: 0.95rem;
            margin-bottom: 2rem;
        }
        .portfolio-grid {
            grid-template-columns: 1fr;
            gap: 1.2rem;
        }
        .tech-grid {
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 1.2rem;
        }
        .game-service-card {
            padding: 1.5rem;
            margin-bottom: 1.2rem;
        }
        .portfolio-image {
            height: 140px;
        }
        .tech-item {
            padding: 1.2rem;
        }
        .cta-title {
            font-size: 1.8rem;
        }
        .cta-subtitle {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 576px) {
        .game-dev-hero {
            min-height: 50vh;
            padding: 1rem 0;
        }
        .game-hero-title {
            font-size: 2.2rem;
        }
        .game-hero-subtitle {
            font-size: 0.95rem;
        }
        .game-services,
        .game-portfolio,
        .gaming-tech,
        .game-contact-cta {
            padding: 2rem 0;
        }
        .game-section-title {
            font-size: 1.8rem;
        }
        .game-section-subtitle {
            font-size: 0.9rem;
            margin-bottom: 1.8rem;
        }
        .portfolio-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        .tech-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }
        .game-service-card {
            padding: 1.2rem;
            margin-bottom: 1rem;
        }
        .game-service-icon {
            width: 50px;
            height: 50px;
            font-size: 1.8rem;
        }
        .game-service-title {
            font-size: 1.2rem;
        }
        .portfolio-image {
            height: 120px;
            font-size: 2rem;
        }
        .portfolio-content {
            padding: 1.2rem;
        }
        .tech-item {
            padding: 1rem;
        }
        .tech-icon {
            font-size: 2rem;
        }
        .cta-title {
            font-size: 1.6rem;
        }
        .cta-button {
            padding: 0.7rem 1.8rem;
            font-size: 0.95rem;
        }
    }

    @media (max-width: 360px) {
        .game-hero-title {
            font-size: 2rem;
        }
        .game-section-title {
            font-size: 1.6rem;
        }
        .tech-grid {
            grid-template-columns: 1fr;
        }
        .game-cta-primary,
        .game-cta-secondary {
            width: 100%;
            text-align: center;
        }
    }
</style>

<!-- Game Development Hero Section -->
<section class="game-dev-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="game-hero-content">
                    <h1 class="game-hero-title">Game Development</h1>
                    <p class="game-hero-subtitle">Create immersive gaming experiences with cutting-edge technology. From mobile games to VR adventures, we bring your vision to life.</p>
                    <div class="game-cta-buttons">
                        <a href="#contact" class="btn game-cta-primary">Start Your Game Project</a>
                        <a href="#portfolio" class="btn game-cta-secondary">View Our Games</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <div style="width: 100%; max-width: 350px; height: 250px; background: rgba(255,255,255,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                        <i class="ri-gamepad-line" style="font-size: 3.5rem; color: rgba(255,255,255,0.8);"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Game Services Section -->
<section class="game-services">
    <div class="container">
        <h2 class="game-section-title">Our Game Development Services</h2>
        <p class="game-section-subtitle">From concept to launch, we provide comprehensive game development solutions across all platforms and genres.</p>
        
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="game-service-card">
                    <div class="game-service-icon mobile-games">
                        <i class="ri-smartphone-line"></i>
                    </div>
                    <h3 class="game-service-title">Mobile Game Development</h3>
                    <p class="game-service-description">Create engaging mobile games for iOS and Android platforms with optimized performance and intuitive controls.</p>
                    <ul class="game-feature-list">
                        <li>Cross-platform compatibility</li>
                        <li>In-app purchases integration</li>
                        <li>Social media connectivity</li>
                        <li>Performance optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="game-service-card">
                    <div class="game-service-icon web-games">
                        <i class="ri-global-line"></i>
                    </div>
                    <h3 class="game-service-title">Web-Based Games</h3>
                    <p class="game-service-description">Browser-based games using HTML5, WebGL, and modern web technologies for instant accessibility.</p>
                    <ul class="game-feature-list">
                        <li>HTML5 & WebGL development</li>
                        <li>Progressive Web Apps</li>
                        <li>Multiplayer functionality</li>
                        <li>Cross-browser compatibility</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="game-service-card">
                    <div class="game-service-icon vr-ar">
                        <i class="ri-glasses-line"></i>
                    </div>
                    <h3 class="game-service-title">VR/AR Games</h3>
                    <p class="game-service-description">Immersive virtual and augmented reality experiences that push the boundaries of interactive entertainment.</p>
                    <ul class="game-feature-list">
                        <li>VR headset compatibility</li>
                        <li>AR mobile integration</li>
                        <li>Motion tracking systems</li>
                        <li>Immersive storytelling</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="game-service-card">
                    <div class="game-service-icon unity">
                        <i class="ri-stack-line"></i>
                    </div>
                    <h3 class="game-service-title">Unity Development</h3>
                    <p class="game-service-description">Professional Unity game development for 2D and 3D games across multiple platforms.</p>
                    <ul class="game-feature-list">
                        <li>2D & 3D game development</li>
                        <li>Custom shader programming</li>
                        <li>Physics simulation</li>
                        <li>Asset optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="game-service-card">
                    <div class="game-service-icon multiplayer">
                        <i class="ri-team-line"></i>
                    </div>
                    <h3 class="game-service-title">Multiplayer Games</h3>
                    <p class="game-service-description">Real-time multiplayer gaming experiences with robust networking and server infrastructure.</p>
                    <ul class="game-feature-list">
                        <li>Real-time networking</li>
                        <li>Dedicated servers</li>
                        <li>Matchmaking systems</li>
                        <li>Anti-cheat protection</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="game-service-card">
                    <div class="game-service-icon analytics">
                        <i class="ri-bar-chart-line"></i>
                    </div>
                    <h3 class="game-service-title">Game Analytics</h3>
                    <p class="game-service-description">Comprehensive analytics and monetization strategies to maximize your game's success.</p>
                    <ul class="game-feature-list">
                        <li>Player behavior tracking</li>
                        <li>Revenue optimization</li>
                        <li>A/B testing framework</li>
                        <li>Performance monitoring</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Game Portfolio Section -->
<section class="game-portfolio" id="portfolio">
    <div class="container">
        <h2 class="game-section-title" style="color: white;">Our Gaming Portfolio</h2>
        <p class="game-section-subtitle" style="color: rgba(255,255,255,0.8);">Explore our diverse collection of games across different genres and platforms.</p>
        
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <div class="portfolio-image">
                    <i class="ri-sword-line"></i>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">Action RPG</div>
                    <h3 class="portfolio-title">Epic Quest Adventure</h3>
                    <p class="portfolio-description">A fantasy RPG with stunning visuals, engaging storyline, and dynamic combat system.</p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">Unity</span>
                        <span class="tech-tag">C#</span>
                        <span class="tech-tag">Multiplayer</span>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-item">
                <div class="portfolio-image">
                    <i class="ri-rocket-line"></i>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">Space Shooter</div>
                    <h3 class="portfolio-title">Galaxy Defender</h3>
                    <p class="portfolio-description">Fast-paced space shooter with procedural generation and upgrade systems.</p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">HTML5</span>
                        <span class="tech-tag">WebGL</span>
                        <span class="tech-tag">JavaScript</span>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-item">
                <div class="portfolio-image">
                    <i class="ri-puzzle-line"></i>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-category">Puzzle Game</div>
                    <h3 class="portfolio-title">Mind Bender</h3>
                    <p class="portfolio-description">Challenging puzzle game with innovative mechanics and beautiful minimalist design.</p>
                    <div class="portfolio-tech">
                        <span class="tech-tag">React Native</span>
                        <span class="tech-tag">Redux</span>
                        <span class="tech-tag">Cross-platform</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gaming Technologies Section -->
<section class="gaming-tech">
    <div class="container">
        <h2 class="game-section-title">Technologies We Use</h2>
        <p class="game-section-subtitle">We leverage the latest gaming technologies and engines to create exceptional experiences.</p>
        
        <div class="tech-grid">
            <div class="tech-item">
                <span class="tech-icon">🎮</span>
                <h4 class="tech-name">Unity 3D</h4>
                <p class="tech-description">Cross-platform game engine</p>
            </div>
            <div class="tech-item">
                <span class="tech-icon">🔥</span>
                <h4 class="tech-name">Unreal Engine</h4>
                <p class="tech-description">High-fidelity game development</p>
            </div>
            <div class="tech-item">
                <span class="tech-icon">📱</span>
                <h4 class="tech-name">React Native</h4>
                <p class="tech-description">Cross-platform mobile games</p>
            </div>
            <div class="tech-item">
                <span class="tech-icon">🌐</span>
                <h4 class="tech-name">WebGL</h4>
                <p class="tech-description">Browser-based 3D graphics</p>
            </div>
            <div class="tech-item">
                <span class="tech-icon">🥽</span>
                <h4 class="tech-name">AR Core</h4>
                <p class="tech-description">Augmented reality experiences</p>
            </div>
            <div class="tech-item">
                <span class="tech-icon">⚡</span>
                <h4 class="tech-name">Node.js</h4>
                <p class="tech-description">Backend & multiplayer servers</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="game-contact-cta">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Create Your Dream Game?</h2>
            <p class="cta-subtitle">Let's bring your gaming vision to life with our expert development team.</p>
            <a href="#contact" class="btn cta-button">Start Your Project Today</a>
        </div>
    </div>
</section>

<?php
include 'components/footer.php';
?>