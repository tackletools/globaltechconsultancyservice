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
            --gradient-success: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%);
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
            font-size: 13px;
            background: #fafbfc;
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient-primary);
            padding: 60px 0 40px;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,0 1000,300 1000,1000 0,700"/></svg>');
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: clamp(1.8rem, 3vw, 2.2rem);
            font-weight: 700;
            color: white;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 25px;
            font-weight: 300;
        }

        .hero-stats {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .stat-item {
            text-align: center;
            color: white;
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            display: block;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.8rem;
            opacity: 0.9;
        }

        /* Section Styling */
        .section {
            padding: 40px 0;
        }

        .section-title {
            font-size: 1.6rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 8px;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            text-align: center;
            color: #6b7280;
            font-size: 0.85rem;
            margin-bottom: 30px;
        }

        /* Database Services Grid */
        .service-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
            height: 100%;
            margin-bottom: 20px;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            border-color: var(--primary-color);
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
            margin-bottom: 15px;
        }

        .service-icon.sql {
            background: var(--gradient-primary);
        }

        .service-icon.nosql {
            background: var(--gradient-secondary);
        }

        .service-icon.cloud {
            background: var(--gradient-accent);
        }

        .service-icon.analytics {
            background: var(--gradient-success);
        }

        .service-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .service-description {
            color: #6b7280;
            margin-bottom: 15px;
            font-size: 0.85rem;
            line-height: 1.5;
        }

        .service-features {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-features li {
            padding: 4px 0;
            color: #6b7280;
            position: relative;
            padding-left: 18px;
            font-size: 0.8rem;
        }

        .service-features li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-weight: bold;
            font-size: 0.9rem;
        }

        /* Technology Stack */
        .tech-stack {
            background: white;
            padding: 40px 0;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .tech-category {
            background: #f8fafc;
            border-radius: 12px;
            padding: 25px;
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .tech-category:hover {
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .tech-category h4 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .tech-category i {
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .tech-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tech-item {
            background: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            color: #374151;
            border: 1px solid #d1d5db;
            transition: all 0.3s ease;
        }

        .tech-item:hover {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        /* Database Solutions */
        .solutions-section {
            background: #f8fafc;
            padding: 40px 0;
        }

        .solution-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .solution-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .solution-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .solution-icon.design {
            background: var(--gradient-primary);
        }

        .solution-icon.migration {
            background: var(--gradient-secondary);
        }

        .solution-icon.optimization {
            background: var(--gradient-accent);
        }

        .solution-icon.security {
            background: var(--gradient-success);
        }

        .solution-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .solution-description {
            color: #6b7280;
            font-size: 0.85rem;
            line-height: 1.5;
        }

        /* Process Section */
        .process-section {
            background: white;
            padding: 40px 0;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .process-step {
            position: relative;
            padding: 25px;
            background: #f8fafc;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .process-step:hover {
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .step-number {
            position: absolute;
            top: -15px;
            left: 20px;
            width: 30px;
            height: 30px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .step-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark-color);
            margin-top: 10px;
        }

        .step-description {
            color: #6b7280;
            font-size: 0.85rem;
            line-height: 1.5;
        }
        /* Process Section */
        .process-icon {
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
        
        .process-icon.analysis { background: var(--gradient-primary); }
        .process-icon.design { background: var(--gradient-secondary); }
        .process-icon.development { background: var(--gradient-accent); }
        .process-icon.testing { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .process-icon.deployment { background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%); }
        .process-icon.maintenance { background: linear-gradient(135deg, #48cae4 0%, #0077b6 100%); }
        
        
        .process-number {
            position: absolute;
            top: -8px;
            right: -8px;
            width: 24px;
            height: 24px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .process-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .timeline-connector {
            position: relative;
        }
        
        .timeline-connector::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -15px;
            width: 30px;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-color), transparent);
            transform: translateY(-50%);
        }
        
        @media (max-width: 768px) {
           
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                padding: 40px 0 30px;
                text-align: center;
            }

            .hero-stats {
                justify-content: center;
                gap: 20px;
            }

            .section {
                padding: 30px 0;
            }

            .service-card,
            .solution-card,
            .pricing-card {
                margin-bottom: 15px;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .tech-grid {
                grid-template-columns: 1fr;
            }

             .timeline-connector::after {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 1.6rem;
            }

            .section-title {
                font-size: 1.4rem;
            }

            .service-card,
            .tech-category,
            .solution-card,
            .pricing-card {
                padding: 20px;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1 class="hero-title">Database Solutions & Management</h1>
                        <p class="hero-subtitle">Comprehensive database services from design to optimization. We help businesses build scalable, secure, and high-performance database systems that drive growth and efficiency.</p>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Databases Managed</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">99.9%</span>
                                <span class="stat-label">Uptime Guarantee</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">24/7</span>
                                <span class="stat-label">Support Available</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hero-image text-center">
                        <i class="ri-database-2-line" style="font-size: 8rem; color: rgba(255,255,255,0.3);"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Database Services -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Our Database Services</h2>
            <p class="section-subtitle">Comprehensive database solutions tailored to your business needs</p>
            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon sql">
                            <i class="ri-database-line"></i>
                        </div>
                        <h3 class="service-title">SQL Databases</h3>
                        <p class="service-description">Professional SQL database design, development, and management services for structured data.</p>
                        <ul class="service-features">
                            <li>MySQL Development</li>
                            <li>PostgreSQL Solutions</li>
                            <li>SQL Server Management</li>
                            <li>Oracle Database</li>
                            <li>Query Optimization</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon nosql">
                            <i class="ri-cloud-line"></i>
                        </div>
                        <h3 class="service-title">NoSQL Databases</h3>
                        <p class="service-description">Modern NoSQL database solutions for flexible, scalable data management.</p>
                        <ul class="service-features">
                            <li>MongoDB Development</li>
                            <li>Cassandra Solutions</li>
                            <li>Redis Implementation</li>
                            <li>DynamoDB Setup</li>
                            <li>Graph Databases</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon cloud">
                            <i class="ri-server-line"></i>
                        </div>
                        <h3 class="service-title">Cloud Databases</h3>
                        <p class="service-description">Cloud-native database solutions with high availability and scalability features.</p>
                        <ul class="service-features">
                            <li>AWS RDS & Aurora</li>
                            <li>Google Cloud SQL</li>
                            <li>Azure Database</li>
                            <li>Database Migration</li>
                            <li>Backup & Recovery</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon analytics">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <h3 class="service-title">Data Analytics</h3>
                        <p class="service-description">Advanced analytics and business intelligence solutions for data-driven decisions.</p>
                        <ul class="service-features">
                            <li>Data Warehousing</li>
                            <li>ETL Processes</li>
                            <li>Real-time Analytics</li>
                            <li>Reporting Solutions</li>
                            <li>Data Visualization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="tech-stack">
        <div class="container">
            <h2 class="section-title">Our Technology Stack</h2>
            <p class="section-subtitle">Cutting-edge technologies and tools we use for database solutions</p>
            
            <div class="tech-grid">
                <div class="tech-category">
                    <h4><i class="ri-database-line"></i> Relational Databases</h4>
                    <div class="tech-list">
                        <span class="tech-item">MySQL</span>
                        <span class="tech-item">PostgreSQL</span>
                        <span class="tech-item">SQL Server</span>
                        <span class="tech-item">Oracle</span>
                        <span class="tech-item">MariaDB</span>
                        <span class="tech-item">SQLite</span>
                    </div>
                </div>
                
                <div class="tech-category">
                    <h4><i class="ri-cloud-line"></i> NoSQL Databases</h4>
                    <div class="tech-list">
                        <span class="tech-item">MongoDB</span>
                        <span class="tech-item">Cassandra</span>
                        <span class="tech-item">Redis</span>
                        <span class="tech-item">DynamoDB</span>
                        <span class="tech-item">Neo4j</span>
                        <span class="tech-item">CouchDB</span>
                    </div>
                </div>
                
                <div class="tech-category">
                    <h4><i class="ri-server-line"></i> Cloud Platforms</h4>
                    <div class="tech-list">
                        <span class="tech-item">AWS RDS</span>
                        <span class="tech-item">Google Cloud SQL</span>
                        <span class="tech-item">Azure Database</span>
                        <span class="tech-item">Amazon Aurora</span>
                        <span class="tech-item">Firebase</span>
                        <span class="tech-item">Supabase</span>
                    </div>
                </div>
                
                <div class="tech-category">
                    <h4><i class="ri-tools-line"></i> Development Tools</h4>
                    <div class="tech-list">
                        <span class="tech-item">Docker</span>
                        <span class="tech-item">Kubernetes</span>
                        <span class="tech-item">Apache Kafka</span>
                        <span class="tech-item">Elasticsearch</span>
                        <span class="tech-item">Grafana</span>
                        <span class="tech-item">Prometheus</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Database Solutions -->
    <section class="solutions-section">
        <div class="container">
            <h2 class="section-title">Complete Database Solutions</h2>
            <p class="section-subtitle">End-to-end database services for every business requirement</p>
            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="solution-card">
                        <div class="solution-icon design">
                            <i class="ri-draft-line"></i>
                        </div>
                        <h3 class="solution-title">Database Design</h3>
                        <p class="solution-description">Custom database architecture and schema design optimized for your specific business scalability needs.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="solution-card">
                        <div class="solution-icon migration">
                            <i class="ri-shuffle-line"></i>
                        </div>
                        <h3 class="solution-title">Data Migration</h3>
                        <p class="solution-description">Seamless data migration services with zero downtime, ensuring data integrity and minimal business disruption.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="solution-card">
                        <div class="solution-icon optimization">
                            <i class="ri-speed-line"></i>
                        </div>
                        <h3 class="solution-title">Code Optimization</h3>
                        <p class="solution-description">Database tuning and optimization services to improve query performance and overall system efficiency.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="solution-card">
                        <div class="solution-icon security">
                            <i class="ri-shield-check-line"></i>
                        </div>
                        <h3 class="solution-title">Security & Backup</h3>
                        <p class="solution-description">Comprehensive security measures and automated backup solutions to protect your critical business data.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-4 bg-light">
        <div class="container-fluid px-3 px-md-4">
            <!-- Section Header -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-2">Database Development Process</h2>
                    <p class="text-muted mb-0" style="font-size: 0.85rem;">Our systematic approach to building robust and scalable database solutions</p>
                </div>
            </div>
            
            <!-- Process Steps -->
            <div class="row g-3 mb-4">
                <!-- Step 1: Analysis -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm process-card timeline-connector">
                        <div class="card-body p-3 text-center position-relative">
                            <div class="process-number">1</div>
                            <div class="process-icon analysis mx-auto">
                                <i class="ri-search-line"></i>
                            </div>
                            <h6 class="card-title mb-2" style="font-size: 0.9rem; font-weight: 600;">Requirements Analysis</h6>
                            <p class="card-text text-muted" style="font-size: 0.75rem; line-height: 1.4;">Gather business requirements and analyze data needs</p>
                        </div>
                    </div>
                </div>
                
                <!-- Step 2: Design -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm process-card timeline-connector">
                        <div class="card-body p-3 text-center position-relative">
                            <div class="process-number">2</div>
                            <div class="process-icon design mx-auto">
                                <i class="ri-pen-nib-line"></i>
                            </div>
                            <h6 class="card-title mb-2" style="font-size: 0.9rem; font-weight: 600;">Database Design</h6>
                            <p class="card-text text-muted" style="font-size: 0.75rem; line-height: 1.4;">Create ER diagrams and normalize data structure</p>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3: Development -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm process-card timeline-connector">
                        <div class="card-body p-3 text-center position-relative">
                            <div class="process-number">3</div>
                            <div class="process-icon development mx-auto">
                                <i class="ri-code-s-slash-line"></i>
                            </div>
                            <h6 class="card-title mb-2" style="font-size: 0.9rem; font-weight: 600;">Development</h6>
                            <p class="card-text text-muted" style="font-size: 0.75rem; line-height: 1.4;">Build tables, procedures, and optimize queries</p>
                        </div>
                    </div>
                </div>
                
                <!-- Step 4: Testing -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm process-card timeline-connector">
                        <div class="card-body p-3 text-center position-relative">
                            <div class="process-number">4</div>
                            <div class="process-icon testing mx-auto">
                                <i class="ri-bug-line"></i>
                            </div>
                            <h6 class="card-title mb-2" style="font-size: 0.9rem; font-weight: 600;">Testing</h6>
                            <p class="card-text text-muted" style="font-size: 0.75rem; line-height: 1.4;">Perform data validation and performance testing</p>
                        </div>
                    </div>
                </div>
                
                <!-- Step 5: Deployment -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm process-card timeline-connector">
                        <div class="card-body p-3 text-center position-relative">
                            <div class="process-number">5</div>
                            <div class="process-icon deployment mx-auto">
                                <i class="ri-rocket-line"></i>
                            </div>
                            <h6 class="card-title mb-2" style="font-size: 0.9rem; font-weight: 600;">Deployment</h6>
                            <p class="card-text text-muted" style="font-size: 0.75rem; line-height: 1.4;">Deploy to production with security measures</p>
                        </div>
                    </div>
                </div>
                
                <!-- Step 6: Maintenance -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm process-card">
                        <div class="card-body p-3 text-center position-relative">
                            <div class="process-number">6</div>
                            <div class="process-icon maintenance mx-auto">
                                <i class="ri-settings-line"></i>
                            </div>
                            <h6 class="card-title mb-2" style="font-size: 0.9rem; font-weight: 600;">Maintenance</h6>
                            <p class="card-text text-muted" style="font-size: 0.75rem; line-height: 1.4;">Ongoing support and performance monitoring</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        // Fade in animation on scroll
        function fadeInOnScroll() {
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        }
        
        window.addEventListener('scroll', fadeInOnScroll);
        fadeInOnScroll(); // Run on page load
        
        // Add hover effects
        document.querySelectorAll('.process-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '';
            });
        });
    </script>

<?php 
 include "components/footer.php";
?>