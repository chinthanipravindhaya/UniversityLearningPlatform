<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>University Learning Platform</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #e9f2ff, #f7faff);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      background-color: #fff !important;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .hero-section { 
        padding: 20px 0; 
    }
    .hero-title { 
        font-size: 2.8rem; 
        font-weight: 700; 
        color: #0d47a1; 
    }
    .btn-primary { 
        background-color: #0d47a1; 
        border-color: #0d47a1; 
    }
    .btn-primary:hover { 
        background-color: #09367a; 
        border-color: #09367a; 
    }
    footer {
            background-color: #fff;
            padding: 15px 0;
            font-size: 0.9rem;
            color: #666;
            border-top: 1px solid #e9ecef;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
                <span class="fw-semibold text-primary">University Learning Platform</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('login')}}" class="btn btn-primary me-2">Login</a></li>
                <li class="nav-item"><a href="{{route('register')}}" class="btn btn-outline-primary">Register</a></li>
                </ul>
            </div>
    </div>
  </nav>

  <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-5 mb-lg-0">
                    <h1 class="hero-title mb-4">Empowering Students Through <span class="text-primary">Digital Learning</span></h1>
                    <p class="hero-text mb-4">
                        Access your courses, collaborate with peers, and achieve your academic goals all in one platform built for your university.
                    </p>
                    <div>
                        <a href="{{route('login')}}" class="btn btn-primary btn-lg me-3">Login</a>
                        <a href="{{route('register')}}" class="btn btn-outline-primary btn-lg">Register</a>
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/learning_illustion.png') }}" alt="Learning Illustration" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-4 text-primary">Why Choose Our Platform?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <img src="{{ asset('images/icon_courses.png') }}" alt="icon_courses" width="60" class="mb-3">
                        <h5 class="fw-semibold mb-2">Access Courses Anytime</h5>
                        <p class="text-muted mb-0">Study at your own pace with 24/7 access to course materials and resources.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <img src="{{ asset('images/icon_collaboration.png') }}" alt="icon_collaboration" width="60" class="mb-3">
                        <h5 class="fw-semibold mb-2">Collaborate Seamlessly</h5>
                        <p class="text-muted mb-0">Engage in discussions, group projects, and peer reviews easily online.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <img src="{{ asset('images/icon_progress.png') }}" alt="icon_progress" width="60" class="mb-3">
                        <h5 class="fw-semibold mb-2">Track Your Progress</h5>
                        <p class="text-muted mb-0">Monitor grades, attendance, and achievements in real time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <footer class="text-center">
    <div class="container">
            <p>© {{date('Y')}} University Learning Platform. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
