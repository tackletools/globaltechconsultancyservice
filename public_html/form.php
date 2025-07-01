<?php 
 include "components/header.php";
?>

    <style>
        :root {
            --primary-blue: #2C5F8B;
            --light-blue: #E8F4FD;
            --light-yellow: #FFF8E1;
            --light-gray: #F8F9FA;
            --dark-gray: #6C757D;
            --success-green: #28A745;
            /* --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            --gradient-primary: linear-gradient(135deg, #2C5F8B 0%, #4A90C2 100%);
            --gradient-secondary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --shadow-light: 0 4px 20px rgba(44, 95, 139, 0.1);
            --shadow-medium: 0 8px 30px rgba(44, 95, 139, 0.15);
            --shadow-heavy: 0 15px 40px rgba(44, 95, 139, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #ffffff;
        }

        /* Header Styles */
        .hero-section {
            background: var(--gradient-primary);
            min-height: 200px; /* Fixed height if you prefer */
            padding: 20px 0;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="0,0 1000,0 1000,100 0,50"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 2rem;
        }

        /* Card Styles */
        .card-modern {
            background: white;
            border-radius: 20px;
            box-shadow: var(--shadow-light);
            border: none;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card-modern:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .card-header-modern {
            background: var(--gradient-primary);
            color: white;
            padding: 2rem;
            border: none;
        }

        .card-body-modern {
            padding: 2.5rem;
        }

        /* Contact Info Styles */
        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: rgba(44, 95, 139, 0.05);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .contact-info-item:hover {
            background: rgba(44, 95, 139, 0.1);
            transform: translateX(5px);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.5rem;
            font-size: 1.5rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .contact-icon.address {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .contact-icon.phone {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .contact-icon.email {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .contact-icon.hours {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }

        .contact-info-content h5 {
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .contact-info-content p {
            color: var(--dark-gray);
            margin: 0;
            line-height: 1.5;
        }

        /* Form Styles */
        .form-modern .form-label {
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }

        .form-modern .form-control,
        .form-modern .form-select {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #fafafa;
        }

        .form-modern .form-control:focus,
        .form-modern .form-select:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(44, 95, 139, 0.15);
            background: white;
        }

        .btn-send {
            background: var(--gradient-primary);
            border: none;
            border-radius: 12px;
            padding: 1rem 2.5rem;
            font-weight: 600;
            font-size: 1.1rem;
            color: white;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-send:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
            color: white;
        }

        .btn-send::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.6s;
        }

        .btn-send:hover::before {
            left: 100%;
        }

        /* Map Section */
        .map-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-light);
            height: 450px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Animation */
        .fade-in {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-in-left {
            animation: slideInLeft 0.8s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .slide-in-right {
            animation: slideInRight 0.8s ease-out;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Success Message */
        .success-message {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            margin-bottom: 1rem;
            display: none;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .card-body-modern {
                padding: 1.5rem;
            }
            
            .contact-info-item {
                flex-direction: column;
                text-align: center;
            }
            
            .contact-icon {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center hero-content fade-in">
                    <h1 class="hero-title">Contact Us</h1>
                    <p class="hero-subtitle">Ready to find your dream property? Our expert team is here to help you every step of the way.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="py-5" style="margin-top: -5px; position: relative; z-index: 3;">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Information Card -->
                <div class="col-lg-5">
                    <div class="card-modern h-100 slide-in-left">
                        <div class="card-header-modern text-center">
                            <h3 class="mb-0">
                                <i class="fas fa-headset me-2"></i>
                                Get In Touch
                            </h3>
                        </div>
                        <div class="card-body-modern">
                            <div class="contact-info-item">
                                <div class="contact-icon address">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Our Address</h5>
                                    <p>123 Real Estate Plaza<br>Downtown City, State 12345<br>India</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon phone">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Phone Numbers</h5>
                                    <p>+91 98765 43210<br>+91 87654 32109</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon email">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Email Address</h5>
                                    <p>info@premiumrealestate.com<br>support@premiumrealestate.com</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon hours">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Working Hours</h5>
                                    <p>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat - Sun: 10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Card -->
                <div class="col-lg-7">
                    <div class="card-modern h-100 slide-in-right">
                        <div class="card-header-modern text-center">
                            <h3 class="mb-0">
                                <i class="fas fa-paper-plane me-2"></i>
                                Send Us a Message
                            </h3>
                        </div>
                        <div class="card-body-modern">
                            <div class="success-message" id="successMessage">
                                <i class="fas fa-check-circle me-2"></i>
                                Thank you for your message! We'll get back to you within 24 hours.
                            </div>
                            
                            <form id="contactForm" class="form-modern">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-user me-1"></i>Full Name *
                                        </label>
                                        <input type="text" class="form-control text-dark" name="name" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-envelope me-1"></i>Email Address *
                                        </label>
                                        <input type="email" class="form-control text-dark" name="email" placeholder="Enter your email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-phone me-1"></i>Phone Number
                                        </label>
                                        <input type="tel" class="form-control text-dark" name="phone" placeholder="Enter your phone number">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-building me-1"></i>Company Name
                                        </label>
                                        <input type="text" class="form-control text-dark" name="company" placeholder="Enter your company name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-briefcase me-1"></i>Designation
                                        </label>
                                        <input type="text" class="form-control text-dark" name="designation" placeholder="Enter your designation">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-bullhorn me-1"></i>How did you hear about us?
                                        </label>
                                        <select class="form-select text-dark" name="hear_about">
                                            <option value="">Select an option</option>
                                            <option value="google">Google Search</option>
                                            <option value="social_media">Social Media</option>
                                            <option value="referral">Friend/Colleague Referral</option>
                                            <option value="advertisement">Advertisement</option>
                                            <option value="website">Company Website</option>
                                            <option value="event">Trade Show/Event</option>
                                            <option value="email">Email Marketing</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-cogs me-1"></i>Position Applied For *
                                        </label>
                                        <select class="form-select" name="service_required" required>
                                            <option value="">Select Position</option>
                                            <option value="property_buying">Full Stack Developer</option>
                                            <option value="property_selling">UI/UX Designer</option>
                                            <option value="property_rental">Mobile App Developer (Android/iOS)</option>
                                            <option value="investment_consultation">Social Media Manager</option>
                                            <option value="property_management">Sales Executive</option>
                                            <option value="legal_assistance">Customer Support Representative</option>
                                            <option value="valuation">Project Manager</option>
                                            <option value="consultation">Digital Marketing Manager</option>
                                            <option value="consultation">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-rupee-sign me-1"></i>Years of Experience *
                                        </label>
                                        <select class="form-select" name="budget">
                                            <option value="">Select Experience</option>
                                            <option value="under_25">0-1 Years(Fresher)</option>
                                            <option value="25_50">1-2 Years</option>
                                            <option value="50_100">2-4 Years</option>
                                            <option value="100_250">4-6 Years</option>
                                            <option value="250_500">6-10 Years</option>
                                            <option value="above_500">10+ Years</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">
                                            <i class="fas fa-comment me-1"></i>Technical Skills *
                                        </label>
                                        <textarea class="form-control text-dark" name="message" rows="4" placeholder="Tell us more about your requirements and how we can help you..." required></textarea>
                                    </div>


                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-globe me-1"></i>Portfolio/Website URL
                                        </label>
                                        <input type="url" class="form-control text-dark" name="portfolio_url" placeholder="https://yourportfolio.com">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fab fa-linkedin me-1"></i>LinkedIn Profile
                                        </label>
                                        <input type="url" class="form-control text-dark" name="linkedin_profile" placeholder="https://linkedin.com/in/yourprofile">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-file-upload me-1"></i>Upload Resume
                                        </label>
                                        <input type="file" class="form-control text-dark" name="resume" accept=".pdf,.doc,.docx" style="padding: 0.5rem;">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-calendar-alt me-1"></i>When can you start? *
                                        </label>
                                        <select class="form-select" name="start_date" required>
                                            <option value="">Select availability</option>
                                            <option value="immediately">Immediately</option>
                                            <option value="1_week">Within 1 Week</option>
                                            <option value="2_weeks">Within 2 Weeks</option>
                                            <option value="1_month">Within 1 Month</option>
                                            <option value="2_months">Within 2 Months</option>
                                            <option value="3_months">Within 3 Months</option>
                                            <option value="negotiable">Negotiable</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-rupee-sign me-1"></i>Expected Salary (Per Month)
                                        </label>
                                        <select class="form-select" name="expected_salary">
                                            <option value="">Select salary range</option>
                                            <option value="under_25k">Under ₹25,000</option>
                                            <option value="25k_50k">₹25,000 - ₹50,000</option>
                                            <option value="50k_75k">₹50,000 - ₹75,000</option>
                                            <option value="75k_100k">₹75,000 - ₹1,00,000</option>
                                            <option value="100k_150k">₹1,00,000 - ₹1,50,000</option>
                                            <option value="150k_200k">₹1,50,000 - ₹2,00,000</option>
                                            <option value="200k_300k">₹2,00,000 - ₹3,00,000</option>
                                            <option value="above_300k">Above ₹3,00,000</option>
                                            <option value="negotiable">Negotiable</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-laptop-house me-1"></i>Preferred Work Mode *
                                        </label>
                                        <select class="form-select" name="work_mode" required>
                                            <option value="">Select work mode</option>
                                            <option value="remote">Remote</option>
                                            <option value="office">Office</option>
                                            <option value="hybrid">Hybrid</option>
                                            <option value="flexible">Flexible</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">
                                            <i class="fas fa-comment me-1"></i>Technical Skills *
                                        </label>
                                        <textarea class="form-control text-dark" name="message" rows="4" placeholder="Tell us more about your requirements and how we can help you..." required></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-send">
                                            <i class="fas fa-paper-plane me-2"></i>
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Form submission handler
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show success message
            const successMessage = document.getElementById('successMessage');
            successMessage.style.display = 'block';
            
            // Scroll to success message
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Reset form after a delay
            setTimeout(() => {
                this.reset();
                successMessage.style.display = 'none';
            }, 5000);
        });

        // Add loading animation to button on form submit
        const submitBtn = document.querySelector('.btn-send');
        const contactForm = document.getElementById('contactForm');
        
        contactForm.addEventListener('submit', function() {
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Message Sent!';
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="fas fa-paper-plane me-2"></i>Send Message';
                    submitBtn.disabled = false;
                }, 2000);
            }, 1000);
        });

        // Add smooth scrolling for better UX
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

<?php 
 include "components/footer.php";
?>