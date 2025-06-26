<?php
 include 'components/header.php'; 
?>

<!-- Free Guide Hero Section -->
<section class="free-guide-hero">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="hero-content fade-in">
                    <h1 class="hero-title">Free Tech Consultation Guide</h1>
                    <p class="hero-subtitle">
                        Download our comprehensive guide to digital transformation and discover how technology can revolutionize your business operations.
                    </p>
                    <div class="guide-features">
                        <div class="feature-item">
                            <i class="ri-check-line"></i>
                            <span>50+ Pages of Expert Insights</span>
                        </div>
                        <div class="feature-item">
                            <i class="ri-check-line"></i>
                            <span>Step-by-step Implementation</span>
                        </div>
                        <div class="feature-item">
                            <i class="ri-check-line"></i>
                            <span>Real Case Studies</span>
                        </div>
                        <div class="feature-item">
                            <i class="ri-check-line"></i>
                            <span>Free Consultation Session</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="guide-form-container fade-in">
                    <div class="guide-form">
                        <div class="form-header">
                            <h3>Get Your Free Guide</h3>
                            <p>Fill out the form below to receive instant access</p>
                        </div>
                        <form id="guideForm" action="#" method="POST">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" id="fullName" name="fullName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="company">Company Name</label>
                                <input type="text" id="company" name="company" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="industry">Industry</label>
                                <select id="industry" name="industry" class="form-control">
                                    <option value="">Select your industry</option>
                                    <option value="technology">Technology</option>
                                    <option value="healthcare">Healthcare</option>
                                    <option value="finance">Finance</option>
                                    <option value="retail">Retail</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="education">Education</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="interests">Areas of Interest</label>
                                <div class="checkbox-group">
                                    <label class="checkbox-item">
                                        <input type="checkbox" name="interests[]" value="web-development">
                                        <span class="checkmark"></span>
                                        Web Development
                                    </label>
                                    <label class="checkbox-item">
                                        <input type="checkbox" name="interests[]" value="mobile-apps">
                                        <span class="checkmark"></span>
                                        Mobile Apps
                                    </label>
                                    <label class="checkbox-item">
                                        <input type="checkbox" name="interests[]" value="digital-marketing">
                                        <span class="checkmark"></span>
                                        Digital Marketing
                                    </label>
                                    <label class="checkbox-item">
                                        <input type="checkbox" name="interests[]" value="cybersecurity">
                                        <span class="checkmark"></span>
                                        Cybersecurity
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn-download">
                                <i class="ri-download-line"></i>
                                Free Guide
                            </button>
                            <p class="form-disclaimer">
                                By downloading this guide, you agree to receive occasional emails from GTCS. 
                                We respect your privacy and you can unsubscribe at any time.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Guide Preview Section -->
<section class="guide-preview">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">What's Inside the Guide</h2>
                <p class="section-subtitle">A comprehensive resource to help you navigate digital transformation</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="preview-card">
                    <div class="preview-icon">
                        <i class="ri-book-open-line"></i>
                    </div>
                    <h4>Chapter 1: Digital Foundation</h4>
                    <p>Understanding the basics of digital transformation and how it impacts modern businesses.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="preview-card">
                    <div class="preview-icon">
                        <i class="ri-settings-3-line"></i>
                    </div>
                    <h4>Chapter 2: Technology Stack</h4>
                    <p>Choosing the right technologies and tools for your specific business needs and goals.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="preview-card">
                    <div class="preview-icon">
                        <i class="ri-line-chart-line"></i>
                    </div>
                    <h4>Chapter 3: Implementation Strategy</h4>
                    <p>Step-by-step approach to implementing digital solutions without disrupting operations.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="preview-card">
                    <div class="preview-icon">
                        <i class="ri-shield-check-line"></i>
                    </div>
                    <h4>Chapter 4: Security & Compliance</h4>
                    <p>Ensuring your digital infrastructure is secure and meets industry standards.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="preview-card">
                    <div class="preview-icon">
                        <i class="ri-team-line"></i>
                    </div>
                    <h4>Chapter 5: Team Training</h4>
                    <p>Preparing your team for digital transformation and maximizing adoption rates.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="preview-card">
                    <div class="preview-icon">
                        <i class="ri-trophy-line"></i>
                    </div>
                    <h4>Chapter 6: Success Stories</h4>
                    <p>Real case studies from businesses that successfully transformed their operations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-white">What Our Clients Say</h2>
                <p class="section-subtitle text-white opacity-75">Hear from businesses that have transformed with our guidance</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"This guide provided invaluable insights that helped us streamline our digital transformation process. Highly recommended!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="ri-user-line"></i>
                        </div>
                        <div class="author-info">
                            <h5>Sarah Johnson</h5>
                            <span>CEO, TechStart Inc.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The step-by-step approach made it easy to implement changes without disrupting our existing operations."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="ri-user-line"></i>
                        </div>
                        <div class="author-info">
                            <h5>Michael Chen</h5>
                            <span>CTO, InnovateNow</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Excellent resource! The security chapter alone saved us thousands in potential vulnerabilities."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="ri-user-line"></i>
                        </div>
                        <div class="author-info">
                            <h5>Emily Rodriguez</h5>
                            <span>IT Director, SecureBase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Free Guide Specific Styles */
.free-guide-hero {
    background: var(--gradient-primary);
    padding: 6rem 0;
    position: relative;
    overflow: hidden;
}

.free-guide-hero::before {
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
    color: white;
    position: relative;
    z-index: 2;
}

.hero-title {
    font-size: clamp(2rem, 4vw, 3.5rem);
    font-weight: 700;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.2rem;
    opacity: 0.9;
    margin-bottom: 2rem;
    line-height: 1.6;
}

.guide-features {
    margin-top: 2rem;
}

.feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    font-size: 1.1rem;
}

.feature-item i {
    color: #10b981;
    font-size: 1.3rem;
    margin-right: 1rem;
    background: rgba(16, 185, 129, 0.2);
    padding: 0.5rem;
    border-radius: 50%;
}

.guide-form-container {
    position: relative;
    z-index: 2;
}

.guide-form {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 3rem;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.form-header {
    text-align: center;
    margin-bottom: 2rem;
}

.form-header h3 {
    color: var(--dark-color);
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.form-header p {
    color: #6b7280;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--dark-color);
}

.form-control {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid #e5e7eb;
    border-radius: 10px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
}

.form-control:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
}

.checkbox-group {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 0.5rem;
    margin-top: 0.5rem;
}

.checkbox-item {
    display: flex;
    align-items: center;
    cursor: pointer;
    padding: 0.5rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.checkbox-item:hover {
    background: rgba(99, 102, 241, 0.05);
}

.checkbox-item input[type="checkbox"] {
    margin-right: 0.5rem;
    transform: scale(1.2);
}

.btn-download {
    width: 100%;
    background: var(--gradient-secondary);
    border: none;
    padding: 1rem;
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.btn-download:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(245, 158, 11, 0.3);
}

.form-disclaimer {
    text-align: center;
    font-size: 0.9rem;
    color: #6b7280;
    margin-top: 1rem;
    line-height: 1.4;
}

/* Guide Preview Section */
.guide-preview {
    padding: 6rem 0;
    background: var(--light-color);
}

.preview-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    text-align: center;
    height: 100%;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.preview-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.preview-icon {
    width: 70px;
    height: 70px;
    background: var(--gradient-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 1.8rem;
    color: white;
}

.preview-card h4 {
    color: var(--dark-color);
    font-weight: 600;
    margin-bottom: 1rem;
}

.preview-card p {
    color: #6b7280;
    line-height: 1.6;
}

/* Testimonials Section */
.testimonials-section {
    padding: 6rem 0;
    background: var(--dark-color);
}

.testimonial-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 2rem;
    border: 1px solid rgba(255, 255, 255, 0.1);
    height: 100%;
}

.testimonial-content {
    margin-bottom: 1.5rem;
}

.testimonial-content p {
    color: white;
    font-style: italic;
    line-height: 1.6;
    font-size: 1.1rem;
}

.testimonial-author {
    display: flex;
    align-items: center;
}

.author-avatar {
    width: 50px;
    height: 50px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    font-size: 1.5rem;
    color: white;
}

.author-info h5 {
    color: white;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.author-info span {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .guide-form {
        padding: 2rem;
    }
    
    .checkbox-group {
        grid-template-columns: 1fr;
    }
    
    .free-guide-hero {
        padding: 4rem 0;
    }
    
    .hero-title {
        font-size: 2rem;
    }
}
</style>

<script>
// Form submission handler
document.getElementById('guideForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);
    
    // Simple validation
    if (!data.fullName || !data.email) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Simulate form submission
    const submitBtn = document.querySelector('.btn-download');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<i class="ri-loader-line"></i> Processing...';
    submitBtn.disabled = true;
    
    setTimeout(() => {
        // Simulate successful submission
        alert('Thank you! Your free guide has been sent to your email address.');
        
        // Reset form
        this.reset();
        
        // Reset button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // You can add actual form submission logic here
        // Example: fetch('/submit-guide-form', { method: 'POST', body: formData })
        
    }, 2000);
});

// Animation on scroll
function animateOnScroll() {
    const elements = document.querySelectorAll('.fade-in');
    
    elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < window.innerHeight - elementVisible) {
            element.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', animateOnScroll);
animateOnScroll(); // Run once on load
</script>

<?php
 include 'components/footer.php'; 
?>