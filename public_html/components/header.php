<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTCS - Global Tech Consultancy Services</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
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
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
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
        
/* Navbar Styles */
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            min-height: 80px;
        }

        /*.navbar-brand img {*/
        /*    margin-left: -10px ;*/
        /*}*/

        .navbar-nav .nav-link {
            font-weight: 500;
            color: var(--dark-color) !important;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 1rem !important;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 5px;
            left: 50%;
            background: var(--primary-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover::after {
            width: 80%;
        }
         .dropdown-menu {
            border: none;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-radius: 0;
            padding: 3rem 0;
            margin-top: 0;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            width: 100vw !important;
            max-width: none !important;
            left: 50% !important;
            right: auto !important;
            transform: translateX(-50%) !important;
            position: fixed !important;
            top: 80px !important;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
        }

        .dropdown-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .dropdown-group {
            padding: 1.5rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .dropdown-group:hover {
            background: rgba(99, 102, 241, 0.05);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .dropdown-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .dropdown-icon i {
            color: white;
            font-size: 1.5rem;
        }

        .dropdown-title {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 1rem;
            display: block;
            font-size: 1.1rem;
        }

        .dropdown-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .dropdown-list li {
            margin-bottom: 0.5rem;
        }

        .dropdown-link {
            color: #64748b;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: block;
            padding: 0.5rem;
            border-radius: 6px;
        }

        .dropdown-link:hover {
            color: var(--primary-color);
            background: rgba(99, 102, 241, 0.1);
            padding-left: 1rem;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .dropdown-arrow {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .dropdown:hover .dropdown-arrow {
            transform: rotate(180deg);
        }

        /* Free Guide Special Styling */
        .free-guide-link {
            background: var(--gradient-primary);
            color: white !important;
            border-radius: 25px;
            padding: 0.5rem 1.5rem !important;
            margin-left: 1rem;
        }

        .free-guide-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }

        .free-guide-link::after {
            display: none;
        }

        .free-guide-link i {
            margin-left: 0.5rem;
        }
        
        @media (max-width: 991px) {
        .navbar-collapse {
            position: fixed;
            top: 80px;
            left: -100%;
            width: 300px;
            height: calc(100vh - 80px);
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            transition: left 0.3s ease;
            z-index: 1000;
            padding: 2rem 1rem;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }
        
        .navbar-collapse.show {
            left: 0;
        }
        
        .navbar-nav {
            flex-direction: column;
            width: 100%;
        }
        
        .navbar-nav .nav-item {
            width: 100%;
            margin-bottom: 0.5rem;
        }
        
        .navbar-nav .nav-link {
            padding: 1rem !important;
            border-radius: 8px;
            margin: 0;
        }
        
        /* Overlay for mobile menu */
        .navbar-collapse.show::before {
            content: '';
            position: fixed;
            top: 80px;
            left: 300px;
            width: calc(100vw - 300px);
            height: calc(100vh - 80px);
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }
    }
        /* Mobile Responsive */
        @media (max-width: 991px) {
            .dropdown-menu {
                position: static !important;
                width: 100% !important;
                transform: none !important;
                opacity: 1;
                visibility: visible;
                box-shadow: none;
                background: #f8fafc;
                margin: 0.5rem 0;
                padding: 1rem;
                border-radius: 8px;
            }
            
            .dropdown-content {
                grid-template-columns: 1fr;
                gap: 1rem;
                padding: 0;
            }
            
            .dropdown-group {
                padding: 1rem;
                background: white;
                border-radius: 8px;
            }
            
            .free-guide-link {
                margin-left: 0;
                margin-top: 1rem;
                text-align: center;
                width: 100%;
            }
        }

        
        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
        }
        
        /*.hero-section::before {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    right: 0;*/
        /*    bottom: 0;*/
        /*    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,0 1000,300 1000,1000 0,700"/></svg>');*/
        /*    pointer-events: none;*/
        /*}*/
        
        /*.hero-content {*/
        /*    position: relative;*/
        /*    z-index: 2;*/
        /*}*/
        
        /*.hero-title {*/
        /*    font-size: clamp(2.5rem, 5vw, 4rem);*/
        /*    font-weight: 700;*/
        /*    color: white;*/
        /*    margin-bottom: 1.5rem;*/
        /*    line-height: 1.2;*/
        /*}*/
        
        /*.hero-subtitle {*/
        /*    font-size: 1.25rem;*/
        /*    color: rgba(255, 255, 255, 0.9);*/
        /*    margin-bottom: 2rem;*/
        /*    font-weight: 300;*/
        /*}*/
        
        /*.hero-cta {*/
        /*    background: var(--gradient-secondary);*/
        /*    border: none;*/
        /*    padding: 1rem 2.5rem;*/
        /*    font-weight: 600;*/
        /*    border-radius: 50px;*/
        /*    color: white;*/
        /*    font-size: 1.1rem;*/
        /*    transition: all 0.3s ease;*/
        /*    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);*/
        /*}*/
        
        /*.hero-cta:hover {*/
        /*    transform: translateY(-3px);*/
        /*    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);*/
        /*    color: white;*/
        /*}*/
        
        /*.hero-image {*/
        /*    position: relative;*/
        /*    z-index: 2;*/
        /*}*/
        
        /*.hero-image img {*/
        /*    max-width: 100%;*/
        /*    height: auto;*/
        /*    filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.3));*/
        /*    animation: float 3s ease-in-out infinite;*/
        /*}*/
        
        /*@keyframes float {*/
        /*    0%, 100% { transform: translateY(0px); }*/
        /*    50% { transform: translateY(-20px); }*/
        /*}*/
        
        /* Services Section */
        .services-section {
            padding: 6rem 0;
            background: var(--light-color);
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
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
            margin-bottom: 4rem;
        }
        
        .service-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: none;
            height: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin-bottom: 1.5rem;
        }
        
        .service-icon.development {
            background: var(--gradient-primary);
        }
        
        .service-icon.marketing {
            background: var(--gradient-secondary);
        }
        
        .service-icon.design {
            background: var(--gradient-accent);
        }
        
        .service-icon.security {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
        }
        
        .service-list {
            list-style: none;
            padding: 0;
        }
        
        .service-list li {
            padding: 0.5rem 0;
            color: #6b7280;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .service-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-weight: bold;
        }
        
        /* About Section */
        .about-section {
            padding: 6rem 0;
            background: white;
        }
        
        .about-stats {
            background: var(--gradient-primary);
            border-radius: 20px;
            padding: 3rem;
            color: white;
            text-align: center;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            display: block;
        }
        
        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* Contact Section */
        .contact-section {
            padding: 6rem 0;
            background: var(--dark-color);
            color: white;
        }
        
        .contact-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 3rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            color: white;
            padding: 0.75rem 1rem;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
            color: white;
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .contact-info {
            padding: 2rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        
        /* Footer */
        .footer {
            background: #000;
            color: white;
            padding: 3rem 0 1rem;
        }
        
        .footer-brand {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-link:hover {
            color: var(--primary-color);
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            margin-right: 0.5rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            transform: translateY(-3px);
            background: var(--primary-dark);
        }
        
        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            transform: translateY(-3px);
            background: var(--primary-dark);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                text-align: center;
            }
            
            .service-card {
                margin-bottom: 2rem;
            }
            
            .contact-form {
                padding: 2rem;
            }
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
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/sudhh.svg" alt="GTCS logo" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    
                    <!-- Solutions Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Solutions <i class="ri-arrow-down-s-line dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <div class="dropdown-content">
                                <div class="dropdown-group">
                                    <div class="dropdown-icon">
                                        <i class="ri-code-s-slash-line"></i>
                                    </div>
                                    <span class="dropdown-title">Development</span>
                                    <ul class="dropdown-list">
                                        <li><a href="webdev.php" class="dropdown-link">Website Development</a></li>
                                        <li><a href="appdev.php" class="dropdown-link">Apps Development</a></li>
                                        <li><a href="gamedev.php" class="dropdown-link">Game Development</a></li>
                                    </ul>
                                </div>

                                <div class="dropdown-group">
                                    <div class="dropdown-icon">
                                        <i class="ri-line-chart-line"></i>
                                    </div>
                                    <span class="dropdown-title">Advertisement & Research</span>
                                    <ul class="dropdown-list">
                                        <li><a href="dm.php" class="dropdown-link">Digital Marketing</a></li>
                                        <li><a href="ecommerce.php" class="dropdown-link">Ecommerce</a></li>
                                    </ul>
                                </div>

                                <div class="dropdown-group">
                                    <div class="dropdown-icon">
                                        <i class="ri-pen-nib-line"></i>
                                    </div>
                                    <span class="dropdown-title">Idea's & Designs</span>
                                    <ul class="dropdown-list">
                                        <li><a href="#" class="dropdown-link">UI/UX design</a></li>
                                        <li><a href="#" class="dropdown-link">Multimedia Animation</a></li>
                                    </ul>
                                </div>

                                <div class="dropdown-group">
                                    <div class="dropdown-icon">
                                        <i class="ri-fingerprint-line"></i>
                                    </div>
                                    <span class="dropdown-title">Secure & Maintainance</span>
                                    <ul class="dropdown-list">
                                        <li><a href="#" class="dropdown-link">Databases</a></li>
                                        <li><a href="#" class="dropdown-link">Cyber Security</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>

                    <!-- Company Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Company <i class="ri-arrow-down-s-line dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <div class="dropdown-content">
                                <div class="dropdown-group">
                                    <div class="dropdown-icon">
                                        <i class="ri-community-line"></i>
                                    </div>
                                    <span class="dropdown-title">About us</span>
                                    <ul class="dropdown-list">
                                        <li><a href="about.php" class="dropdown-link">About us</a></li>
                                        <li><a href="#" class="dropdown-link">Support</a></li>
                                        <li><a href="contact.php" class="dropdown-link">Contact us</a></li>
                                    </ul>
                                </div>

                                <div class="dropdown-group">
                                    <div class="dropdown-icon">
                                        <i class="ri-shield-line"></i>
                                    </div>
                                    <span class="dropdown-title">Safety & Quality</span>
                                    <ul class="dropdown-list">
                                        <li><a href="#" class="dropdown-link">Privacy Policy</a></li>
                                        <li><a href="#" class="dropdown-link">Cookie settings</a></li>
                                        <li><a href="#" class="dropdown-link">Terms & Conditions</a></li>
                                    </ul>
                                </div>

                                <div class="dropdown-group">
                                    <div class="dropdown-icon">
                                        <i class="ri-chat-smile-line"></i>
                                    </div>
                                    <span class="dropdown-title">Blogs & Update</span>
                                    <ul class="dropdown-list">
                                        <li><a href="blog.php" class="dropdown-link">Blogs</a></li>
                                        <li><a href="#" class="dropdown-link">Join Freelancer</a></li>
                                        <li><a href="#" class="dropdown-link">Referral Programs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="application.php">Application</a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="career.php">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link free-guide-link" href="freeGuide.php">
                            Free Guide<i class="ri-user-6-line"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <script>
// Handle mobile menu sliding
document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navbarToggler.addEventListener('click', function() {
        // Toggle is handled by Bootstrap, but we can add custom behavior here if needed
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!navbarCollapse.contains(e.target) && !navbarToggler.contains(e.target)) {
            if (navbarCollapse.classList.contains('show')) {
                navbarToggler.click(); // Trigger Bootstrap's toggle
            }
        }
    });
});
</script>
