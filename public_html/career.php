<?php 
 include "components/header.php";
?>

<style>
        /* Career Page Specific Styles */
        .career-hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .career-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,0 1000,300 1000,1000 0,700"/></svg>');
            pointer-events: none;
        }

        .career-hero-title {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .career-hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        .career-stats-row {
            display: flex;
            gap: 2rem;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
        }

        .career-stat {
            text-align: center;
        }

        .career-stat .stat-number {
            display: block;
            font-size: 2.5rem;
            font-weight: 700;
            color: #fbbf24;
        }

        .career-stat .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .career-cta-btn {
            background: var(--gradient-secondary);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            color: white;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .career-cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
            color: white;
        }

        .floating-cards {
            position: relative;
            height: 400px;
        }

        .career-card {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 1.5rem;
            text-align: center;
            color: white;
            transition: all 0.3s ease;
            animation: float 3s ease-in-out infinite;
        }

        .career-card:hover {
            transform: translateY(-10px) scale(1.05);
            background: rgba(255, 255, 255, 0.2);
        }

        .career-card i {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        .career-card span {
            font-weight: 600;
        }

        .card-1 {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .card-2 {
            top: 10%;
            right: 20%;
            animation-delay: 0.5s;
        }

        .card-3 {
            bottom: 30%;
            left: 5%;
            animation-delay: 1s;
        }

        .card-4 {
            bottom: 20%;
            right: 10%;
            animation-delay: 1.5s;
        }

        /* Why Join Section */
        .why-join-section {
            padding: 6rem 0;
            background: var(--light-color);
        }

        .benefit-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
        }

        .benefit-card h4 {
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--dark-color);
        }

        .benefit-card p {
            color: #6b7280;
            line-height: 1.6;
        }

        /* Open Positions Section */
        .open-positions-section {
            padding: 6rem 0;
            background: white;
        }

        .job-filters {
            margin-bottom: 3rem;
            text-align: center;
        }

        .filter-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.75rem 1.5rem;
            border: 2px solid #e5e7eb;
            background: white;
            color: #6b7280;
            border-radius: 50px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover,
        .filter-btn.active {
            border-color: var(--primary-color);
            background: var(--primary-color);
            color: white;
        }

        .job-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s ease;
            height: 100%;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: var(--primary-color);
        }

        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .job-title {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .job-type {
            background: #dcfce7;
            color: #16a34a;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .job-location {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #6b7280;
            font-size: 0.9rem;
        }

        .job-description {
            margin-bottom: 1.5rem;
        }

        .job-description p {
            color: #6b7280;
            line-height: 1.6;
        }

        .job-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .skill-tag {
            background: #f3f4f6;
            color: #374151;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .job-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .job-salary {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary-color);
            font-weight: 600;
        }

        .apply-btn {
            background: var(--gradient-primary);
            border: none;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .apply-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }

        /* Application Process Section */
        .application-process-section {
            padding: 6rem 0;
            background: var(--light-color);
        }

        .process-step {
            text-align: center;
            position: relative;
            padding: 2rem;
        }

        .step-number {
            position: absolute;
            top: 0;
            right: 2rem;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .step-icon {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: var(--primary-color);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .process-step h4 {
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--dark-color);
        }

        .process-step p {
            color: #6b7280;
            line-height: 1.6;
        }

        /* CTA Section */
        .career-cta-section {
            padding: 6rem 0;
            background: var(--dark-color);
            color: white;
            text-align: center;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .cta-content p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2.5rem;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-buttons .btn {
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: var(--gradient-primary);
            border: none;
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.4);
            color: white;
        }

        .btn-outline-primary {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .btn-outline-primary:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }

        /* Animation utilities */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Job filtering */
        .job-item {
            transition: all 0.3s ease;
        }

        .job-item.hidden {
            display: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .career-hero-title {
                font-size: 2.5rem;
            }
            
            .career-stats-row {
                justify-content: center;
                gap: 1rem;
            }
            
            .floating-cards {
                height: 300px;
            }
            
            .career-card {
                padding: 1rem;
            }
            
            .card-1, .card-2 {
                top: 10%;
            }
            
            .card-3, .card-4 {
                bottom: 10%;
            }
            
            .job-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .job-footer {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .filter-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-btn {
                width: 200px;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .cta-buttons .btn {
                width: 250px;
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .career-hero-section {
                padding: 4rem 0;
            }
            
            .why-join-section,
            .open-positions-section,
            .application-process-section,
            .career-cta-section {
                padding: 4rem 0;
            }
            
            .benefit-card,
            .job-card {
                padding: 1.5rem;
            }
            
            .process-step {
                padding: 1rem;
            }
            
            .step-number {
                position: static;
                margin: 0 auto 1rem;
            }
        }


                /* Form Styling */
                .form-control {
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }

        /* Animation for form elements */
        .form-control, .form-select {
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 0.6s ease forwards;
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Stagger animation delays */
        .form-control:nth-child(1), .form-select:nth-child(1) { animation-delay: 0.1s; }
        .form-control:nth-child(2), .form-select:nth-child(2) { animation-delay: 0.2s; }
        .form-control:nth-child(3), .form-select:nth-child(3) { animation-delay: 0.3s; }

        /* File upload styling */
        input[type="file"] {
            padding: 12px !important;
        }

        input[type="file"]::-webkit-file-upload-button {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            margin-right: 10px;
            cursor: pointer;
        }

</style>

<!-- Career Hero Section -->
<section class="career-hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="career-hero-content fade-in">
                    <h1 class="career-hero-title">Join Our Team & Shape the Future</h1>
                    <p class="career-hero-subtitle">
                        Be part of a dynamic team that's revolutionizing the tech industry. 
                        We're looking for passionate individuals who want to make a real impact.
                    </p>
                    <div class="career-stats-row">
                        <div class="career-stat">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Team Members</span>
                        </div>
                        <div class="career-stat">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Open Positions</span>
                        </div>
                        <div class="career-stat">
                            <span class="stat-number">20+</span>
                            <span class="stat-label">Countries</span>
                        </div>
                    </div>
                    <a href="#open-positions" class="btn career-cta-btn">
                        <i class="ri-search-line"></i> View Open Positions
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="career-hero-image fade-in">
                    <div class="floating-cards">
                        <div class="career-card card-1">
                            <i class="ri-code-s-slash-line"></i>
                            <span>Development</span>
                        </div>
                        <div class="career-card card-2">
                            <i class="ri-line-chart-line"></i>
                            <span>Marketing</span>
                        </div>
                        <div class="career-card card-3">
                            <i class="ri-pen-nib-line"></i>
                            <span>Design</span>
                        </div>
                        <div class="career-card card-4">
                            <i class="ri-shield-check-line"></i>
                            <span>Security</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Open Positions Section -->
<section class="open-positions-section" id="open-positions">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title fade-in">Open Positions</h2>
                <p class="section-subtitle fade-in">
                    Find your perfect role and start your journey with us today.
                </p>
            </div>
        </div>
        
        <!-- Job Filters -->
        <div class="job-filters fade-in">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">All Positions</button>
                <button class="filter-btn" data-filter="development">Development</button>
                <button class="filter-btn" data-filter="design">Design</button>
                <button class="filter-btn" data-filter="marketing">Marketing</button>
                <button class="filter-btn" data-filter="management">Management</button>
            </div>
        </div>

        <!-- Job Listings -->
        <div class="job-listings">
            <div class="row g-4">
                <!-- Job 1 -->
                <div class="col-lg-6 job-item" data-category="development">
                    <div class="job-card fade-in">
                        <div class="job-header">
                            <div class="job-title-section">
                                <h4 class="job-title">Senior Full Stack Developer</h4>
                                <span class="job-type">Full-time</span>
                            </div>
                            <div class="job-location">
                                <i class="ri-map-pin-line"></i>
                                <span>Remote / Delhi</span>
                            </div>
                        </div>
                        <div class="job-description">
                            <p>We're looking for an experienced full-stack developer to join our core development team. You'll work on exciting projects using modern technologies.</p>
                        </div>
                        <div class="job-skills">
                            <span class="skill-tag">React</span>
                            <span class="skill-tag">Node.js</span>
                            <span class="skill-tag">MongoDB</span>
                            <span class="skill-tag">AWS</span>
                        </div>
                        <div class="job-footer">
                            <div class="job-salary">
                                <i class="ri-money-dollar-circle-line"></i>
                                <span>₹12-18 LPA</span>
                            </div>
                            <button class="apply-btn">
                                <i class="ri-send-plane-line"></i>
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="col-lg-6 job-item" data-category="design">
                    <div class="job-card fade-in">
                        <div class="job-header">
                            <div class="job-title-section">
                                <h4 class="job-title">UI/UX Designer</h4>
                                <span class="job-type">Full-time</span>
                            </div>
                            <div class="job-location">
                                <i class="ri-map-pin-line"></i>
                                <span>Delhi / Hybrid</span>
                            </div>
                        </div>
                        <div class="job-description">
                            <p>Join our design team to create beautiful, intuitive user experiences for our digital products and help shape the future of design.</p>
                        </div>
                        <div class="job-skills">
                            <span class="skill-tag">Figma</span>
                            <span class="skill-tag">Adobe XD</span>
                            <span class="skill-tag">Prototyping</span>
                            <span class="skill-tag">User Research</span>
                        </div>
                        <div class="job-footer">
                            <div class="job-salary">
                                <i class="ri-money-dollar-circle-line"></i>
                                <span>₹8-12 LPA</span>
                            </div>
                            <button class="apply-btn">
                                <i class="ri-send-plane-line"></i>
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="col-lg-6 job-item" data-category="marketing">
                    <div class="job-card fade-in">
                        <div class="job-header">
                            <div class="job-title-section">
                                <h4 class="job-title">Digital Marketing Manager</h4>
                                <span class="job-type">Full-time</span>
                            </div>
                            <div class="job-location">
                                <i class="ri-map-pin-line"></i>
                                <span>Delhi</span>
                            </div>
                        </div>
                        <div class="job-description">
                            <p>Lead our digital marketing efforts and drive growth through innovative marketing strategies and data-driven campaigns.</p>
                        </div>
                        <div class="job-skills">
                            <span class="skill-tag">SEO/SEM</span>
                            <span class="skill-tag">Google Ads</span>
                            <span class="skill-tag">Analytics</span>
                            <span class="skill-tag">Social Media</span>
                        </div>
                        <div class="job-footer">
                            <div class="job-salary">
                                <i class="ri-money-dollar-circle-line"></i>
                                <span>₹10-15 LPA</span>
                            </div>
                            <button class="apply-btn">
                                <i class="ri-send-plane-line"></i>
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Job 4 -->
                <div class="col-lg-6 job-item" data-category="development">
                    <div class="job-card fade-in">
                        <div class="job-header">
                            <div class="job-title-section">
                                <h4 class="job-title">Mobile App Developer</h4>
                                <span class="job-type">Full-time</span>
                            </div>
                            <div class="job-location">
                                <i class="ri-map-pin-line"></i>
                                <span>Remote</span>
                            </div>
                        </div>
                        <div class="job-description">
                            <p>Build amazing mobile applications that millions of users will love. Work with cutting-edge mobile technologies.</p>
                        </div>
                        <div class="job-skills">
                            <span class="skill-tag">React Native</span>
                            <span class="skill-tag">Flutter</span>
                            <span class="skill-tag">iOS</span>
                            <span class="skill-tag">Android</span>
                        </div>
                        <div class="job-footer">
                            <div class="job-salary">
                                <i class="ri-money-dollar-circle-line"></i>
                                <span>₹8-14 LPA</span>
                            </div>
                            <button class="apply-btn">
                                <i class="ri-send-plane-line"></i>
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Job 5 -->
                <div class="col-lg-6 job-item" data-category="management">
                    <div class="job-card fade-in">
                        <div class="job-header">
                            <div class="job-title-section">
                                <h4 class="job-title">Project Manager</h4>
                                <span class="job-type">Full-time</span>
                            </div>
                            <div class="job-location">
                                <i class="ri-map-pin-line"></i>
                                <span>Delhi / Hybrid</span>
                            </div>
                        </div>
                        <div class="job-description">
                            <p>Lead cross-functional teams to deliver high-quality projects on time and within budget. Drive project success from conception to completion.</p>
                        </div>
                        <div class="job-skills">
                            <span class="skill-tag">Agile</span>
                            <span class="skill-tag">Scrum</span>
                            <span class="skill-tag">Jira</span>
                            <span class="skill-tag">Leadership</span>
                        </div>
                        <div class="job-footer">
                            <div class="job-salary">
                                <i class="ri-money-dollar-circle-line"></i>
                                <span>₹15-22 LPA</span>
                            </div>
                            <button class="apply-btn">
                                <i class="ri-send-plane-line"></i>
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Job 6 -->
                <div class="col-lg-6 job-item" data-category="design">
                    <div class="job-card fade-in">
                        <div class="job-header">
                            <div class="job-title-section">
                                <h4 class="job-title">Graphic Designer</h4>
                                <span class="job-type">Part-time</span>
                            </div>
                            <div class="job-location">
                                <i class="ri-map-pin-line"></i>
                                <span>Remote</span>
                            </div>
                        </div>
                        <div class="job-description">
                            <p>Create stunning visual content for our brand, marketing campaigns, and digital products. Bring creativity to life.</p>
                        </div>
                        <div class="job-skills">
                            <span class="skill-tag">Photoshop</span>
                            <span class="skill-tag">Illustrator</span>
                            <span class="skill-tag">InDesign</span>
                            <span class="skill-tag">Branding</span>
                        </div>
                        <div class="job-footer">
                            <div class="job-salary">
                                <i class="ri-money-dollar-circle-line"></i>
                                <span>₹4-7 LPA</span>
                            </div>
                            <button class="apply-btn">
                                <i class="ri-send-plane-line"></i>
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Join Us Section -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Why Join GTCS?</h2>
            <p class="section-subtitle">Discover what makes GTCS a great place to build your career</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4">
                    <div class="service-icon development mx-auto mb-3">
                        <i class="ri-rocket-line"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Growth Opportunities</h5>
                    <p class="text-muted">Continuous learning and development programs to help you advance your career.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4">
                    <div class="service-icon marketing mx-auto mb-3">
                        <i class="ri-team-line"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Collaborative Culture</h5>
                    <p class="text-muted">Work with talented professionals in a supportive and inclusive environment.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4">
                    <div class="service-icon design mx-auto mb-3">
                        <i class="ri-scales-line"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Work-Life Balance</h5>
                    <p class="text-muted">Flexible working hours and remote work options to maintain healthy work-life balance.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4">
                    <div class="service-icon security mx-auto mb-3">
                        <i class="ri-gift-line"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Competitive Benefits</h5>
                    <p class="text-muted">Comprehensive benefits package including health insurance, paid time off, and more.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4">
                    <div class="service-icon development mx-auto mb-3">
                        <i class="ri-lightbulb-line"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Innovation Focus</h5>
                    <p class="text-muted">Work on cutting-edge projects and contribute to innovative solutions.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4">
                    <div class="service-icon marketing mx-auto mb-3">
                        <i class="ri-trophy-line"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Recognition Programs</h5>
                    <p class="text-muted">Regular recognition and rewards for outstanding performance and achievements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Career Form Section -->
<section class="py-5" style="background: var(--light-color);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg" style="border-radius: 20px;">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <h2 class="section-title mb-3">Apply for a Position</h2>
                            <p class="section-subtitle">Fill out the form below and we'll get back to you within 24 hours.</p>
                        </div>

                        <form id="careerForm" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <!-- Personal Information -->
                                <div class="col-md-6 mb-4 ">
                                    <label for="firstName" class="form-label fw-semibold">First Name *</label>
                                    <input type="text" class="form-control text-dark" id="firstName" name="firstName" required style="border-radius: 10px; padding: 12px;">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="lastName" class="form-label fw-semibold">Last Name *</label>
                                    <input type="text" class="form-control text-dark" id="lastName" name="lastName" required style="border-radius: 10px; padding: 12px;">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="email" class="form-label fw-semibold">Email Address *</label>
                                    <input type="email" class="form-control text-dark" id="email" name="email" required style="border-radius: 10px; padding: 12px;">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="phone" class="form-label fw-semibold">Phone Number *</label>
                                    <input type="tel" class="form-control text-dark" id="phone" name="phone" required style="border-radius: 10px; padding: 12px;">
                                </div>
                            </div>

                            <!-- Position Information -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="position" class="form-label fw-semibold">Position Applied For *</label>
                                    <select class="form-control text-dark" id="position" name="position" required style="border-radius: 10px; padding: 12px;">
                                        <option value="">Select Position</option>
                                        <option value="Web Developer">Web Developer</option>
                                        <option value="Mobile App Developer">Mobile App Developer</option>
                                        <option value="Game Developer">Game Developer</option>
                                        <option value="UI/UX Designer">UI/UX Designer</option>
                                        <option value="Digital Marketing Specialist">Digital Marketing Specialist</option>
                                        <option value="Cybersecurity Expert">Cybersecurity Expert</option>
                                        <option value="Database Administrator">Database Administrator</option>
                                        <option value="Project Manager">Project Manager</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="experience" class="form-label fw-semibold">Years of Experience *</label>
                                    <select class="form-control text-dark" id="experience" name="experience" required style="border-radius: 10px; padding: 12px;">
                                        <option value="">Select Experience</option>
                                        <option value="0-1">0-1 Years (Fresher)</option>
                                        <option value="1-3">1-3 Years</option>
                                        <option value="3-5">3-5 Years</option>
                                        <option value="5-10">5-10 Years</option>
                                        <option value="10+">10+ Years</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Skills and Portfolio -->
                            <div class="mb-4">
                                <label for="skills" class="form-label fw-semibold">Technical Skills *</label>
                                <textarea class="form-control text-dark" id="skills" name="skills" rows="3" placeholder="List your technical skills (e.g., JavaScript, Python, React, etc.)" required style="border-radius: 10px; padding: 12px;"></textarea>
                            </div>

                            <div class="row text-dark">
                                <div class="col-md-6 mb-4">
                                    <label for="portfolio" class="form-label fw-semibold">Portfolio/Website URL</label>
                                    <input type="url" class="form-control text-dark" id="portfolio" name="portfolio" placeholder="https://yourportfolio.com" style="border-radius: 10px; padding: 12px;">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="linkedin" class="form-label fw-semibold">LinkedIn Profile</label>
                                    <input type="url" class="form-control text-dark" id="linkedin" name="linkedin" placeholder="https://linkedin.com/in/yourprofile" style="border-radius: 10px; padding: 12px;">
                                </div>
                            </div>

                            <!-- Resume Upload -->
                            <div class="mb-4">
                                <label for="resume" class="form-label fw-semibold">Upload Resume *</label>
                                <input type="file" class="form-control text-dark" id="resume" name="resume" accept=".pdf,.doc,.docx" required style="border-radius: 10px; padding: 12px;">
                                <small class="text-muted">Accepted formats: PDF, DOC, DOCX (Max size: 5MB)</small>
                            </div>

                            <!-- Cover Letter -->
                            <div class="mb-4">
                                <label for="coverLetter" class="form-label fw-semibold">Cover Letter *</label>
                                <textarea class="form-control text-dark" id="coverLetter" name="coverLetter" rows="5" placeholder="Tell us why you want to work with GTCS and what makes you the perfect fit for this role..." required style="border-radius: 10px; padding: 12px;"></textarea>
                            </div>

                            <!-- Additional Information -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="availability" class="form-label fw-semibold">When can you start? *</label>
                                    <input type="date" class="form-control text-dark" id="availability" name="availability" required style="border-radius: 10px; padding: 12px;">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="salary" class="form-label fw-semibold">Expected Salary (Per Month)</label>
                                    <input type="number" class="form-control text-dark" id="salary" name="salary" placeholder="₹50,000" style="border-radius: 10px; padding: 12px;">
                                </div>
                            </div>

                            <!-- Work Preference -->
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Preferred Work Mode *</label>
                                <div class="mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="workMode" id="onsite" value="onsite" required>
                                        <label class="form-check-label" for="onsite">On-site</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="workMode" id="remote" value="remote" required>
                                        <label class="form-check-label" for="remote">Remote</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="workMode" id="hybrid" value="hybrid" required>
                                        <label class="form-check-label" for="hybrid">Hybrid</label>
                                    </div>
                                </div>
                            </div>

                            <!-- References -->
                            <div class="mb-4">
                                <label for="references" class="form-label fw-semibold">Professional References</label>
                                <textarea class="form-control text-dark" id="references" name="references" rows="3" placeholder="Please provide contact details of 2 professional references (Name, Position, Company, Phone, Email)" style="border-radius: 10px; padding: 12px;"></textarea>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Terms & Conditions</a> and <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Privacy Policy</a> *
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                                    <label class="form-check-label" for="newsletter">
                                        I would like to receive updates about career opportunities at GTCS
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg px-5 py-3" style="background: var(--gradient-primary); border: none; border-radius: 50px; color: white; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease;">
                                    <i class="ri-send-plane-line me-2"></i>Submit Application
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Process Section -->
<section class="application-process-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title fade-in">Our Hiring Process</h2>
                <p class="section-subtitle fade-in">
                    Simple, transparent, and designed to help you succeed.
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="process-step fade-in">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="ri-file-text-line"></i>
                    </div>
                    <h4>Apply Online</h4>
                    <p>Submit your application through our website with your resume and cover letter.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step fade-in">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="ri-phone-line"></i>
                    </div>
                    <h4>Initial Screening</h4>
                    <p>Quick phone call to discuss your background and the role requirements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step fade-in">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="ri-code-line"></i>
                    </div>
                    <h4>Technical Interview</h4>
                    <p>Showcase your skills through technical questions and practical exercises.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-step fade-in">
                    <div class="step-number">4</div>
                    <div class="step-icon">
                        <i class="ri-handshake-line"></i>
                    </div>
                    <h4>Final Interview</h4>
                    <p>Meet with the team and discuss how you'll contribute to our mission.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="career-cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="cta-content fade-in">
                    <h2>Ready to Start Your Journey?</h2>
                    <p>Don't see a perfect match? Send us your resume anyway! We're always looking for exceptional talent.</p>
                    <div class="cta-buttons">
                        <a href="#open-positions" class="btn btn-primary">Browse Jobs</a>
                        <a href="contact.php" class="btn btn-outline-primary">Send Resume</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fade in animation
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });

            // Job filtering
            const filterButtons = document.querySelectorAll('.filter-btn');
            const jobItems = document.querySelectorAll('.job-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    // Filter jobs
                    jobItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.classList.remove('hidden');
                            item.style.display = 'block';
                        } else {
                            item.classList.add('hidden');
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Apply button functionality
            document.querySelectorAll('.apply-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const jobTitle = this.closest('.job-card').querySelector('.job-title').textContent;
                    alert(`Thank you for your interest in the ${jobTitle} position! Please send your resume to careers@gtcs.com with the job title in the subject line.`);
                });
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
        });

       
        document.addEventListener('DOMContentLoaded', function() {
            // Form submission handling
            const form = document.getElementById('careerForm');
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic form validation
                if (validateForm()) {
                    // Show success message
                    showSuccessMessage();
                    
                    // Here you would typically submit the form data to your server
                    // For now, we'll just simulate a successful submission
                    setTimeout(() => {
                        form.reset();
                    }, 2000);
                }
            });
            
            function validateForm() {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.style.borderColor = '#ef4444';
                        isValid = false;
                    } else {
                        field.style.borderColor = '#22c55e';
                    }
                });
                
                // Validate file upload
                const resume = document.getElementById('resume');
                if (resume.files.length > 0) {
                    const file = resume.files[0];
                    const maxSize = 5 * 1024 * 1024; // 5MB
                    const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                    
                    if (file.size > maxSize) {
                        alert('Resume file size should be less than 5MB');
                        resume.style.borderColor = '#ef4444';
                        isValid = false;
                    } else if (!allowedTypes.includes(file.type)) {
                        alert('Please upload a PDF or DOC file for your resume');
                        resume.style.borderColor = '#ef4444';
                        isValid = false;
                    } else {
                        resume.style.borderColor = '#22c55e';
                    }
                }
                
                return isValid;
            }
            
            function showSuccessMessage() {
                const successAlert = document.createElement('div');
                successAlert.className = 'alert alert-success position-fixed top-0 start-50 translate-middle-x mt-3';
                successAlert.style.zIndex = '9999';
                successAlert.innerHTML = `
                    <div class="d-flex align-items-center">
                        <i class="ri-check-line me-2"></i>
                        <strong>Application Submitted Successfully!</strong> We'll get back to you within 24 hours.
                    </div>
                `;
                
                document.body.appendChild(successAlert);
                
                setTimeout(() => {
                    successAlert.remove();
                }, 5000);
            }
            
            // Real-time validation
            const inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (this.hasAttribute('required') && !this.value.trim()) {
                        this.style.borderColor = '#ef4444';
                    } else {
                        this.style.borderColor = '#22c55e';
                    }
                });
            });
        });

</script>

<?php 
 include "components/footer.php";
?>