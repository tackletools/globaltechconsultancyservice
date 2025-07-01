
    <style>
        :root {
            --gtcs-primary-blue: #1e3a8a;
            --gtcs-secondary-blue: #3b82f6;
            --gtcs-accent-blue: #60a5fa;
            --gtcs-light-blue: #dbeafe;
            --gtcs-dark-blue: #1e40af;
            --gtcs-gray-50: #f9fafb;
            --gtcs-gray-100: #f3f4f6;
            --gtcs-gray-200: #e5e7eb;
            --gtcs-gray-300: #d1d5db;
            --gtcs-gray-400: #9ca3af;
            --gtcs-gray-500: #6b7280;
            --gtcs-gray-600: #4b5563;
            --gtcs-gray-700: #374151;
            --gtcs-gray-800: #1f2937;
            --gtcs-gray-900: #111827;
            --gtcs-white: #ffffff;
            --gtcs-gradient-primary: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            --gtcs-gradient-secondary: linear-gradient(135deg, #3b82f6 0%, #60a5fa 100%);
            --gtcs-shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --gtcs-shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --gtcs-shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --gtcs-shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* GTCS Footer Base Styles */
        .gtcs-footer-wrapper {
            background: var(--gtcs-gray-900);
            color: var(--gtcs-gray-300);
            position: relative;
            overflow: hidden;
        }

        .gtcs-footer-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gtcs-gradient-primary);
        }

        .gtcs-footer-content {
            padding: 4rem 0 2rem;
            position: relative;
        }

        .gtcs-footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .gtcs-footer-grid {
            display: grid;
            grid-template-columns: 1fr 200px 200px 200px 200px;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        /* Company Brand Section */
        .gtcs-brand-section {
            margin-bottom: 2rem;
        }

        .gtcs-company-logo {
            font-size: 2rem;
            font-weight: 800;
            background: var(--gtcs-gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            display: inline-block;
        }

        .gtcs-company-tagline {
            font-size: 1.1rem;
            color: var(--gtcs-gray-400);
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        .gtcs-company-description {
            color: var(--gtcs-gray-500);
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        /* Footer Section Headers */
        .gtcs-section-block {
            margin-bottom: 2rem;
        }

        .gtcs-section-header {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--gtcs-white);
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .gtcs-section-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--gtcs-gradient-primary);
            border-radius: 2px;
        }

        /* Navigation Links */
        .gtcs-nav-list {
            list-style: none;
            padding: 0;
        }

        .gtcs-nav-list li {
            margin-bottom: 0.8rem;
        }

        .gtcs-nav-link {
            color: var(--gtcs-gray-400);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .gtcs-nav-link:hover {
            color: var(--gtcs-accent-blue);
            transform: translateX(5px);
        }

        .gtcs-nav-link i {
            font-size: 0.9rem;
            width: 16px;
        }

        /* Contact Information Styles */
        .gtcs-contact-card {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .gtcs-contact-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-2px);
        }

        .gtcs-contact-icon-wrapper {
            width: 40px;
            height: 40px;
            background: var(--gtcs-gradient-primary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .gtcs-contact-details h6 {
            color: var(--gtcs-white);
            font-weight: 600;
            margin-bottom: 0.3rem;
            font-size: 0.95rem;
        }

        .gtcs-contact-details p {
            color: var(--gtcs-gray-400);
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* Social Media Section */
        .gtcs-social-section {
            margin-top: 2rem;
        }

        .gtcs-social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .gtcs-social-icon {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gtcs-gray-400);
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .gtcs-social-icon:hover {
            background: var(--gtcs-accent-blue);
            color: white;
            transform: translateY(-3px);
            box-shadow: var(--gtcs-shadow-md);
        }

        .gtcs-social-icon.gtcs-facebook:hover { background: #1877f2; }
        .gtcs-social-icon.gtcs-twitter:hover { background: #1da1f2; }
        .gtcs-social-icon.gtcs-linkedin:hover { background: #0077b5; }
        .gtcs-social-icon.gtcs-instagram:hover { background: #e4405f; }
        .gtcs-social-icon.gtcs-youtube:hover { background: #ff0000; }

        /* Technology Certifications */
        .gtcs-tech-certifications {
            margin-top: 3rem;
            padding: 2rem 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .gtcs-cert-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            margin-top: 1.5rem;
            flex-wrap: wrap;
        }

        .gtcs-cert-badge {
            background: rgba(255, 255, 255, 0.05);
            padding: 1.2rem 1.5rem;
            border-radius: 12px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            flex: 1;
            min-width: 120px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .gtcs-cert-badge:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
            box-shadow: var(--gtcs-shadow-md);
        }

        .gtcs-cert-icon {
            font-size: 2rem;
            color: var(--gtcs-accent-blue);
            margin-bottom: 0.5rem;
        }

        .gtcs-cert-label {
            font-size: 0.85rem;
            color: var(--gtcs-gray-400);
            font-weight: 600;
        }

        /* Footer Bottom Section */
        .gtcs-footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem 0;
            background: rgba(0, 0, 0, 0.3);
        }

        .gtcs-bottom-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .gtcs-copyright-text {
            color: var(--gtcs-gray-500);
            font-size: 0.9rem;
        }

        .gtcs-legal-nav {
            display: flex;
            gap: 2rem;
        }

        .gtcs-legal-nav a {
            color: var(--gtcs-gray-500);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .gtcs-legal-nav a:hover {
            color: var(--gtcs-accent-blue);
        }

        /* Animation Classes */
        .gtcs-animate-up {
            opacity: 0;
            transform: translateY(30px);
            animation: gtcsFadeInUp 0.8s ease forwards;
        }

        @keyframes gtcsFadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gtcs-section-block:nth-child(1) { animation-delay: 0.1s; }
        .gtcs-section-block:nth-child(2) { animation-delay: 0.2s; }
        .gtcs-section-block:nth-child(3) { animation-delay: 0.3s; }
        .gtcs-section-block:nth-child(4) { animation-delay: 0.4s; }
        .gtcs-section-block:nth-child(5) { animation-delay: 0.5s; }

        /* Responsive Design */
        @media (max-width: 768px) {
            .gtcs-footer-content {
                padding: 3rem 0 1.5rem;
            }

            .gtcs-footer-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .gtcs-brand-section {
                text-align: center;
                margin-bottom: 2rem;
            }

            .gtcs-company-logo {
                font-size: 1.8rem;
            }

            .gtcs-social-icons {
                justify-content: center;
            }

            .gtcs-bottom-content {
                flex-direction: column;
                text-align: center;
            }

            .gtcs-legal-nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .gtcs-cert-row {
                /*flex-direction: column;*/
                /*gap: 1rem;*/
                 flex-wrap: wrap;
                justify-content: center;
            }

            .gtcs-cert-badge {
                min-width: 100%;
            }
        }

        @media (max-width: 992px) {
            .gtcs-cert-row {
                justify-content: center;
            }
            
            .gtcs-cert-badge {
                flex: 0 1 calc(25% - 1rem);
                min-width: 100px;
            }
        }
    </style>

    <!-- GTCS Footer Component -->
    <footer class="gtcs-footer-wrapper">
        <div class="gtcs-footer-content">
            <div class="gtcs-footer-container">
                <div class="gtcs-footer-grid">
                    <!-- Company Information -->
                    <div class="gtcs-section-block gtcs-animate-up">
                        <div class="gtcs-brand-section">
                            <div class="gtcs-company-logo">
                                Global Tech Consultancy Service
                            </div>
                            <p class="gtcs-company-tagline">Innovative IT Solutions Provider</p>
                            <p class="gtcs-company-description">
                                Leading the digital transformation with cutting-edge development services, 
                                AI solutions, and comprehensive testing services. Your trusted technology partner 
                                for scalable business solutions.
                            </p>
                        </div>
                        
                        <!-- Social Media Links -->
                        <div class="gtcs-social-section">
                            <h6 class="gtcs-section-header">Follow Us</h6>
                            <div class="gtcs-social-icons">
                                <a href="https://www.facebook.com/profile.php?id=61573614062355" class="gtcs-social-icon gtcs-facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://x.com/GTCS3104841" class="gtcs-social-icon gtcs-twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/global-tech-consultancy-service-gtcs-90037b342/" class="gtcs-social-icon gtcs-linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.instagram.com/globaltechconsultancy/?hl=en" class="gtcs-social-icon gtcs-instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.youtube.com/@Globaltechconsultancyservice" class="gtcs-social-icon gtcs-youtube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Development Services -->
                    <div class="gtcs-section-block gtcs-animate-up">
                        <h6 class="gtcs-section-header">Development Services</h6>
                        <ul class="gtcs-nav-list">
                            <li><a href="./appdevelopment.php" class="gtcs-nav-link"><i class="fab fa-html5"></i> Mobile App Development</a></li>
                            <li><a href="./webdevelopment.php" class="gtcs-nav-link"><i class="fas fa-server"></i> Website Development</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fab fa-apple"></i> CRM Solutions</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fab fa-android"></i> ERP Solutions</a></li>
                            <li><a href="./ecommerce.php" class="gtcs-nav-link"><i class="fas fa-link"></i> E-Commerce Solutions</a></li>
                            <li><a href="./digitalmarketing.php" class="gtcs-nav-link"><i class="fas fa-brain"></i> Digital Marketing</a></li>
                            <li><a href="./digitalmarketing.php" class="gtcs-nav-link"><i class="fas fa-gem"></i> Performance Marketing</a></li>
                            <li><a href="./cybersecurity.php" class="gtcs-nav-link"><i class="fas fa-lock"></i> Cybersecurity</a></li>
                        </ul>
                    </div>

                    <!-- Testing & QA Services -->
                    <div class="gtcs-section-block gtcs-animate-up">
                        <h6 class="gtcs-section-header">Testing & QA</h6>
                        <ul class="gtcs-nav-list">
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-bug"></i> QA Outsourcing</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-globe"></i> Offshore QA</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-cloud"></i> SaaS Testing</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-robot"></i> AI Testing Services</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-mobile-alt"></i> Mobile Testing</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-desktop"></i> Web Testing</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-shield-alt"></i> Security Testing</a></li>
                        </ul>
                    </div>

                    <!-- Specialized Solutions -->
                    <div class="gtcs-section-block gtcs-animate-up">
                        <h6 class="gtcs-section-header">Specialized Solutions</h6>
                        <ul class="gtcs-nav-list">
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-shopping-cart"></i> Retail Development</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-users"></i> Enterprise Solutions</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-chart-line"></i> Business Analytics</a></li>
                            <li><a href="#" class="gtcs-nav-link"><i class="fas fa-cogs"></i> DevOps Services</a></li>
                            <li><a href="./database.php" class="gtcs-nav-link"><i class="fas fa-database"></i> Database Management</a></li>
                            <li><a href="./cybersecurity.php" class="gtcs-nav-link"><i class="fas fa-lock"></i> Cybersecurity</a></li>
                            <li><a href="./uiux.php" class="gtcs-nav-link"><i class="fas fa-palette"></i> UI/UX Design</a></li>
                        </ul>
                    </div>

                    <!-- Company Links -->
                    <div class="gtcs-section-block gtcs-animate-up">
                        <h6 class="gtcs-section-header">Company</h6>
                        <ul class="gtcs-nav-list">
                            <li><a href="index.php" class="gtcs-nav-link"><i class="fas fa-home"></i> Home</a></li>
                            <li><a href="about.php" class="gtcs-nav-link"><i class="fas fa-users"></i> About Us</a></li>
                            <li><a href="contact.php" class="gtcs-nav-link"><i class="fas fa-envelope"></i> Contact Us</a></li>
                            <li><a href="joinFreelancer.php" class="gtcs-nav-link"><i class="fas fa-user-plus"></i> Join Freelancer</a></li>
                            <li><a href="career.php" class="gtcs-nav-link"><i class="fas fa-briefcase"></i> Career</a></li>
                            <li><a href="blog.php" class="gtcs-nav-link"><i class="fas fa-blog"></i> Blog</a></li>
                            <li><a href="support.php" class="gtcs-nav-link"><i class="fas fa-life-ring"></i> Support</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Technology Stack & Certifications - Now in Row Layout -->
                <div class="gtcs-tech-certifications gtcs-animate-up">
                    <h6 class="gtcs-section-header">Technologies & Certifications</h6>
                    <div class="gtcs-cert-row">
                        <div class="gtcs-cert-badge">
                            <div class="gtcs-cert-icon">
                                <i class="fab fa-react"></i>
                            </div>
                            <div class="gtcs-cert-label">React Expert</div>
                        </div>
                        <div class="gtcs-cert-badge">
                            <div class="gtcs-cert-icon">
                                <i class="fab fa-node-js"></i>
                            </div>
                            <div class="gtcs-cert-label">Node.js Expert</div>
                        </div>
                        <div class="gtcs-cert-badge">
                            <div class="gtcs-cert-icon">
                                <i class="fab fa-python"></i>
                            </div>
                            <div class="gtcs-cert-label">Python Master</div>
                        </div>
                        <div class="gtcs-cert-badge">
                            <div class="gtcs-cert-icon">
                                <i class="fab fa-aws"></i>
                            </div>
                            <div class="gtcs-cert-label">AWS Certified</div>
                        </div>
                        <div class="gtcs-cert-badge">
                            <div class="gtcs-cert-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="gtcs-cert-label">ISO Certified</div>
                        </div>
                        <div class="gtcs-cert-badge">
                            <div class="gtcs-cert-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="gtcs-cert-label">5 Star Rating</div>
                        </div>
                        <div class="gtcs-cert-badge">
                            <div class="gtcs-cert-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="gtcs-cert-label">Trusted Partner</div>
                        </div>
                        <div class="gtcs-cert-badge">
                            <div class="gtcs-cert-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="gtcs-cert-label">Industry Leader</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="gtcs-footer-bottom">
            <div class="gtcs-footer-container">
                <div class="gtcs-bottom-content">
                    <div class="gtcs-copyright-text">
                        <p>&copy; 2024 GTCS Software. All rights reserved. | Designed with <i class="fas fa-heart" style="color: #e74c3c;"></i> by GTCS Team</p>
                    </div>
                    <div class="gtcs-legal-nav">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Cookie Policy</a>
                        <a href="#">Sitemap</a>
                        <a href="#">Disclaimer</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Intersection Observer for animations
        const gtcsObserverOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const gtcsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, gtcsObserverOptions);

        // Observe all animated elements
        document.querySelectorAll('.gtcs-animate-up').forEach(el => {
            gtcsObserver.observe(el);
        });

        // Social media hover effects
        document.querySelectorAll('.gtcs-social-icon').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.1)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-3px) scale(1)';
            });
        });

        // Service links hover effect
        document.querySelectorAll('.gtcs-nav-link').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.paddingLeft = '1rem';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.paddingLeft = '0';
            });
        });

        // Certification badges hover effect
        document.querySelectorAll('.gtcs-cert-badge').forEach(badge => {
            badge.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.05)';
            });
            
            badge.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-2px) scale(1)';
            });
        });

        console.log('🚀 Global Tech Consultancy Service Footer Component Loaded Successfully!');
    </script>