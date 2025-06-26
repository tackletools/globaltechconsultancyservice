<?php 
 include "components/header.php";
?>

<style>
    /* Contact Form Specific Styles */
    .contact-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 8rem 0 4rem;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,0 1000,300 1000,1000 0,700"/></svg>');
        pointer-events: none;
    }

    .contact-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .contact-hero h1 {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .contact-hero p {
        font-size: 1.2rem;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
    }

    .contact-main {
        padding: 6rem 0;
        background: #f8fafc;
    }

    .contact-form-container {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .contact-form-header {
        background: var(--gradient-primary);
        color: white;
        padding: 2.5rem;
        text-align: center;
    }

    .contact-form-header h2 {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .contact-form-header p {
        opacity: 0.9;
        font-size: 1.1rem;
    }

    .contact-form-body {
        padding: 3rem;
    }

    .form-group {
        margin-bottom: 2rem;
    }

    .form-label {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
        display: block;
        font-size: 0.95rem;
    }

    .form-control {
        width: 100%;
        padding: 0.875rem 1rem;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #fff;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    }

    .form-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
    }

    .form-control.textarea {
        min-height: 120px;
        resize: vertical;
    }

    .submit-btn {
        background: var(--gradient-primary);
        color: white;
        border: none;
        padding: 1rem 3rem;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 40px rgba(99, 102, 241, 0.4);
    }

    .contact-info-section {
        background: white;
        padding: 6rem 0;
    }

    .contact-info-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
    }

    .contact-info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .contact-info-icon {
        width: 70px;
        height: 70px;
        background: var(--gradient-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 1.5rem;
        color: white;
    }

    .contact-info-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
    }

    .contact-info-details {
        color: #6b7280;
        font-size: 1rem;
    }

    .required {
        color: #ef4444;
    }

    .checkbox-group {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
    }

    .checkbox-group input[type="checkbox"] {
        margin: 0;
        width: 18px;
        height: 18px;
        accent-color: var(--primary-color);
    }

    .checkbox-label {
        font-size: 0.9rem;
        color: #6b7280;
        line-height: 1.5;
    }

    .checkbox-label a {
        color: var(--primary-color);
        text-decoration: none;
    }

    .checkbox-label a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .contact-hero {
            padding: 6rem 0 3rem;
        }
        
        .contact-main {
            padding: 4rem 0;
        }
        
        .contact-form-body {
            padding: 2rem;
        }
        
        .contact-form-header {
            padding: 2rem;
        }
    }
</style>

<!-- Contact Hero Section -->
<section class="contact-hero">
    <div class="container">
        <div class="contact-hero-content">
            <h1>Request for Call</h1>
            <p>Get in touch with our expert consultants. We're here to help transform your business with cutting-edge technology solutions.</p>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form-container">
                    <div class="contact-form-header">
                        <h2>Let's Start Your Project</h2>
                        <p>Fill out the form below and our team will get back to you within 24 hours</p>
                    </div>
                    
                    <div class="contact-form-body">
                        <form action="process_contact.php" method="POST" id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName" class="form-label">First Name <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="firstName" name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastName" class="form-label">Last Name <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="lastName" name="last_name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="company" name="company">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="designation" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="designation" name="designation">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="service" class="form-label">Service Required <span class="required">*</span></label>
                                <select class="form-control form-select text-dark" id="service" name="service" required>
                                    <option value="">Select a service</option>
                                    <option value="website-development">Website Development</option>
                                    <option value="app-development">App Development</option>
                                    <option value="sensor-creation">Sensor Creation</option>
                                    <option value="digital-marketing">Digital Marketing</option>
                                    <option value="ecommerce">E-commerce Solutions</option>
                                    <option value="ui-ux-design">UI/UX Design</option>
                                    <option value="multimedia-animation">Multimedia Animation</option>
                                    <option value="database-management">Database Management</option>
                                    <option value="cyber-security">Cyber Security</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="budget" class="form-label">Project Budget</label>
                                <select class="form-control form-select text-dark" id="budget" name="budget">
                                    <option value="">Select budget range</option>
                                    <option value="10k-50k">₹20,000 - ₹50,000</option>
                                    <option value="50k-100k">₹50,000 - ₹1,00,000</option>
                                    <option value="100k-500k">₹1,00,000 - ₹5,00,000</option>
                                    <option value="500k-1m">₹5,00,000 - ₹10,00,000</option>
                                    <option value="above-1m">Above ₹10,00,000</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="timeline" class="form-label">Project Timeline</label>
                                <select class="form-control form-select text-dark" id="timeline" name="timeline">
                                    <option value="">Select timeline</option>
                                    <option value="urgent">Urgent (Within 1 week)</option>
                                    <option value="1-month">Within 1 month</option>
                                    <option value="1-3-months">1-3 months</option>
                                    <option value="3-6-months">3-6 months</option>
                                    <option value="6-plus-months">6+ months</option>
                                    <option value="flexible">Flexible</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message" class="form-label">Project Details <span class="required">*</span></label>
                                <textarea class="form-control textarea" id="message" name="message" placeholder="Please describe your project requirements, goals, and any specific features you need..." required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="referral" class="form-label">How did you hear about us?</label>
                                <select class="form-control form-select text-dark" id="referral" name="referral">
                                    <option value="">Select an option</option>
                                    <option value="google-search">Google Search</option>
                                    <option value="social-media">Social Media</option>
                                    <option value="referral">Referral from friend/colleague</option>
                                    <option value="linkedin">LinkedIn</option>
                                    <option value="advertisement">Online Advertisement</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="checkbox-group">
                                    <input type="checkbox" id="consent" name="consent" required>
                                    <label for="consent" class="checkbox-label">
                                        I agree to the <a href="#" target="_blank">Terms & Conditions</a> and <a href="#" target="_blank">Privacy Policy</a>. I consent to receive communications from GTCS regarding my inquiry. <span class="required">*</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="checkbox-group">
                                    <input type="checkbox" id="newsletter" name="newsletter">
                                    <label for="newsletter" class="checkbox-label">
                                        Subscribe to our newsletter to receive updates about new services, tech trends, and exclusive offers.
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="submit-btn">
                                <i class="ri-send-plane-line me-2"></i>
                                Send Request
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="contact-info-section">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle">Multiple ways to reach out to our expert team</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="ri-phone-line"></i>
                    </div>
                    <h3 class="contact-info-title">Call Us</h3>
                    <div class="contact-info-details">
                        <p>+91 98765 43210</p>
                        <p>+91 87654 32109</p>
                        <small>Mon-Fri 9AM-7PM IST</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="ri-mail-line"></i>
                    </div>
                    <h3 class="contact-info-title">Email Us</h3>
                    <div class="contact-info-details">
                        <p>info@gtcs.com</p>
                        <p>support@gtcs.com</p>
                        <small>24/7 Email Support</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="ri-map-pin-line"></i>
                    </div>
                    <h3 class="contact-info-title">Visit Us</h3>
                    <div class="contact-info-details">
                        <p>Sector 14, Gurugram</p>
                        <p>Haryana 122001, India</p>
                        <small>Office Hours: 9AM-6PM</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="ri-chat-3-line"></i>
                    </div>
                    <h3 class="contact-info-title">Live Chat</h3>
                    <div class="contact-info-details">
                        <p>Instant Support</p>
                        <p>Quick Responses</p>
                        <small>Available 24/7</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Simple form validation
    const requiredFields = this.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
            field.style.borderColor = '#ef4444';
        } else {
            field.style.borderColor = '#e2e8f0';
        }
    });
    
    if (isValid) {
        // Show success message
        alert('Thank you for your inquiry! We will get back to you within 24 hours.');
        // Here you would normally submit the form data
        // this.submit();
    } else {
        alert('Please fill in all required fields.');
    }
});

// Reset border color on input
document.querySelectorAll('.form-control').forEach(input => {
    input.addEventListener('input', function() {
        this.style.borderColor = '#e2e8f0';
    });
});
</script>

<?php 
 include "components/footer.php";
?>