<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - </title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .login-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        .login-form {
            padding: 2rem;
        }
        
        .form-control {
            border: none;
            border-bottom: 2px solid #e9ecef;
            border-radius: 0;
            padding: 0.75rem 0;
            background: transparent;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-bottom-color: #667eea;
            box-shadow: none;
            background: transparent;
        }
        
        .btn-login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        .form-floating label {
            color: #6c757d;
        }
        
        .alert {
            border: none;
            border-radius: 10px;
        }
        
        .company-logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #667eea;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-container">
                    <div class="login-header">
                        <div class="company-logo">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h2 class="mb-0">Global Tech Consultancy Service</h2>
                        <p class="mb-0">Sales CRM System</p>
                    </div>
                    
                    <div class="login-form">
                        <?php if (isset($_SESSION['login_error'])): ?>
                            <div class="alert alert-danger">
                                <?php 
                                    echo $_SESSION['login_error']; 
                                    unset($_SESSION['login_error']);
                                ?>
                            </div>
                        <?php endif; ?>

                        
                        <form method="POST" action="auth/login.php">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" 
                                       placeholder="name@example.com" required >
                                <label for="email">
                                    <i class="fas fa-envelope me-2"></i>Email Address
                                </label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" 
                                       placeholder="Password" required>
                                <label for="password">
                                    <i class="fas fa-lock me-2"></i>Password
                                </label>
                            </div>
                            
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="remember_me" name="remember_me">
                                <label class="form-check-label" for="remember_me">
                                    Remember me for 30 days
                                </label>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-login">
                                    <i class="fas fa-sign-in-alt me-2"></i>
                                    Login
                                </button>
                            </div>
                        </form>
                        
                        <div class="text-center mt-4">
                            <small class="text-muted">
                                Forgot your password? Contact administrator.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
        
        // Add floating label animation
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-floating input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });
        });
    </script>
</body>
</html>