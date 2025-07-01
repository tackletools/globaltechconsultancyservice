<?php 
 include "components/header.php";
?>

    <style>
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

        /* Simple Hero Section - Fixed */
        .hero-section {
            margin: -150px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 120px 0 80px 0;
            text-align: center;
            position: relative;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-section p {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.9);
            margin: 0 auto;
            max-width: 600px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        /* Card Styles */
        .card-modern {
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(44, 95, 139, 0.1);
            border: none;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(44, 95, 139, 0.15);
        }

        .card-header-modern {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border: none;
        }

        .card-body-modern {
            padding: 40px;
        }

        /* Contact Info Styles */
        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding: 20px;
            background: rgba(102, 126, 234, 0.05);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .contact-info-item:hover {
            background: rgba(102, 126, 234, 0.1);
            transform: translateX(5px);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 24px;
            color: white;
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
            color: #2C5F8B;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .contact-info-content p {
            color: #6C757D;
            margin: 0;
            line-height: 1.5;
        }

        /* Form Styles */
        .form-modern .form-label {
            font-weight: 600;
            color: #2C5F8B;
            margin-bottom: 8px;
        }

        .form-modern .form-control,
        .form-modern .form-select {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 12px 16px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #fafafa;
        }

        .form-modern .form-control:focus,
        .form-modern .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
            background: white;
        }

        .btn-send {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 15px 40px;
            font-weight: 600;
            font-size: 18px;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-send:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(102, 126, 234, 0.3);
            color: white;
        }

        /* Success Message */
        .success-message {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            display: none;
        }

        /* Main Content */
        .main-content {
            /*margin-top: -50px;*/
            position: relative;
            z-index: 10;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0 60px 0;
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section p {
                font-size: 1.1rem;
                padding: 0 20px;
            }
            
            .card-body-modern {
                padding: 25px;
            }
            
            .contact-info-item {
                flex-direction: column;
                text-align: center;
            }
            
            .contact-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }

        @media (max-width: 576px) {
            .hero-section h1 {
                font-size: 2rem;
            }
            
            .hero-section p {
                font-size: 1rem;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section mb-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact Us</h1>
                    <p>Ready to find your dream property? Our expert team is here to help you every step of the way.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="py-5 main-content">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Information Card -->
                <div class="col-lg-6">
                    <div class="card-modern h-100">
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
                                    <p>Radhe Krishan Bhawan, 1st Floor, In Front CGR Complex <br> Block C2 Near Arjan Metro Station, India Delhi,110047, India</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon phone">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Phone Numbers</h5>
                                    <p>+91 8920442794<br>+91 8187948451</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon email">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Email Address</h5>
                                    <p>info@globaltechconsultancyservice.com</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-icon hours">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Working Hours</h5>
                                    <p>Mon - Fri: 10:00 AM - 7:00 PM<br>Sat - Sun: 10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Card -->
                <div class="col-lg-6">
                    <div class="card-modern h-100">
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
                                        <select class="form-select" name="hear_about">
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
                                            <i class="fas fa-cogs me-1"></i>Service Required *
                                        </label>
                                        <select class="form-select" name="service_required" required>
                                            <option value="">Choose a service</option>
                                            <option value="website_development">Website Development</option>
                                            <option value="app_development">Apps Development</option>
                                            <option value="game_development">Game Development</option>
                                            <option value="digital_marketing">Digital Marketing</option>
                                            <option value="ecommerce">Ecommerce</option>
                                            <option value="ui_ux_design">UI/UX design</option>
                                            <option value="multimedia_animation">Multimedia Animation</option>
                                            <option value="databases">Databases</option>
                                            <option value="cyber_security">Cyber Security</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <i class="fas fa-rupee-sign me-1"></i>Project Budget
                                        </label>
                                        <select class="form-select" name="budget">
                                            <option value="">Select budget range</option>
                                            <option value="under_50k">Under ₹50 Thousand</option>
                                            <option value="50k_1l">₹50 Thousand - ₹1 Lakh</option>
                                            <option value="1l_1.5l">₹1 Lakh - ₹1.5 Lakh</option>
                                            <option value="1.5l_2l">₹1.5 Lakh - ₹2 Lakh</option>
                                            <option value="2.5l_5l">₹2.5 Lakh - ₹5 Lakh</option>
                                            <option value="above_5l">Above ₹5 Lakh</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">
                                            <i class="fas fa-comment me-1"></i>Your Message *
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
    </script>

<?php 
 include "components/footer.php";
?>