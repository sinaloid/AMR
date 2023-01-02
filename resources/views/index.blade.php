<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{secure_asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{secure_asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{secure_asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Changement...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, Gourcy, BURKINA FASO</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Lun - Ven : 07H30 - 17H30 et Sam : 08H00 - 10H30</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>(226) 73-88-59-09 / 67-36-78-27</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a href="https://facebook.com/profile.php?id=100071054985790" class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn fixed-top" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary">
                <img class="me-" height="48px" src="{{secure_asset('assets/img/logo.png')}}" alt="AMR">
                <span class="d-inline-block align-middle">AMR</span>
            </h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Accueil</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Présentation</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="team.html" class="dropdown-item">Visions</a>
                        <a href="feature.html" class="dropdown-item">Valeurs</a>
                        <a href="feature.html" class="dropdown-item">Missions</a>
                        <a href="feature.html" class="dropdown-item">Objectifs</a>
                        <a href="feature.html" class="dropdown-item">Organisation</a>
                        <a href="testimonial.html" class="dropdown-item">Les membres</a>
                        <a href="appointment.html" class="dropdown-item">Equipe opérationnelle</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Thématiques</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Droits, cohésion, décentralisation et gouvernance locale</a>
                        <a href="team.html" class="dropdown-item">promotion, politique, économique, santé </a>
                        <a href="appointment.html" class="dropdown-item">Systèmes alimentaires durables</a>
                        <a href="testimonial.html" class="dropdown-item">Axes Transversaux</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="about.html" class="nav-item nav-link">À propos</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="service.html" class="nav-item nav-link">Connexion</a>

            </div>
            <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Devenir Membre<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-4">Association Monde Rural</h1>
                <p class="text-center text-white fw-bold mb-3">L’A.M.R., pour un monde 
                    Juste, Equitable et Meilleur !
                    </p>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">26</h2>
                            <p class="text-light mb-0">Ans d'existence</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                            <p class="text-light mb-0">Membres</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">1235</h2>
                            <p class="text-light mb-0">Réalisations</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel" autoplay="false"
                >
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{secure_asset('assets/img/carousel-1.jpg')}}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Cardiology</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{secure_asset('assets/img/carousel-2.jpg')}}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Neurology</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{secure_asset('assets/img/carousel-3.jpg')}}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Pulmonary</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{secure_asset('assets/img/carousel/13.jpg')}}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Pulmonary</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{secure_asset('assets/img/carousel/17.jpg')}}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Pulmonary</h1-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{secure_asset('assets/img/about-1.jpg')}}" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{secure_asset('assets/img/about-2.jpg')}}" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">À propos</p>
                    <h1 class="mb-4">Qui sommes-nous ?</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Qualité ipsum sit. Aliq</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Qualité ipsum sit. Aliq</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Qualité ipsum sit. Aliq</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Devenir Membre</a>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Partners Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Nos Partenaires Techniques et Financiers</p>
                <h1>Ils nous font confiance</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/ambf.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">AMBF</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/delen.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Delen</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/diakonia.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Diakonia</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/expertise.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Expertise France</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/care.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Care</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/chemonics.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Chemonics</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/creative.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">CREATIVE</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/fonaenf.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">FONAENF</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/hunger.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">The Hunger Project</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/idlo.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">IDLO</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/jatur.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">JATUR</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/mondial.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">PAM</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/fao.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">FAO</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/pnud.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">PNUD</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light mx-auto mb-4" src="{{secure_asset('assets/img/pt/proget.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Progettomondo.mlal</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{secure_asset('assets/img/pt/semus.png')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SEMUS</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Parteners End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Thématiques</p>
                <h1>Domaines d'interventions</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="bi bi-people-fill text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Droits Humains, cohésion sociale, décentralisation et gouvernance locale</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Lire plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-x-ray text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">La promotion de l’autonomisation politique et économique de la femme et du jeune et la santé de l’enfant</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Lire plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="bi bi-diamond-fill text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Systèmes alimentaires durables</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Lire plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="bi bi-disc-fill text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Axe transversaux : l’environnement durable et le changement climatique</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Lire plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-brain text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Axe transversaux : le genre, la santé communautaire,
                        </h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Lire plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Axe transversaux : le Leaving no one behind (LNOB)
                        </h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Lire plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Nos Valeur</p>
                        <h1 class="text-white mb-4">Comment sommes-nous ?</h1>
                        <p class="text-white mb-4 pb-2">
                            AMR travailler avec et aux côtés des populations burkinabé pour le respect et la protection de leur dignité.
                        </p>
                        <div class="row g-4">
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Travail</p>
                                        <h5 class="text-white mb-0">Professionnel</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Qualité</p>
                                        <h5 class="text-white mb-0">Engagement</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Association</p>
                                        <h5 class="text-white mb-0">Ambitieuse </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Esprit</p>
                                        <h5 class="text-white mb-0">Innovant & Dynamique</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{secure_asset('assets/img/amr-action.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div-->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="owl-carousel header-carousel" style="max-height: 600px;">
                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100" src="{{secure_asset('assets/img/carousel/1.jpg')}}" style="object-fit: cover;" alt="">
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100" src="{{secure_asset('assets/img/carousel/3.jpg')}}" style="object-fit: cover;" alt="">
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100" src="{{secure_asset('assets/img/carousel/4.jpg')}}" style="object-fit: cover;" alt="">
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100" src="{{secure_asset('assets/img/carousel/14.jpg')}}" style="object-fit: cover;" alt="">
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100" src="{{secure_asset('assets/img/carousel/6.jpg')}}" style="object-fit: cover;" alt="">
                        </div>
                
                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100" src="{{secure_asset('assets/img/carousel/8.jpg')}}" style="object-fit: cover;" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Membres</p>
                <h1>Les membres de l'AMR</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{secure_asset('assets/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-2">
                            <h5 class="fs-6">WANGRE Amadou</h5>
                            <p class="text-primary fw-bold">Coordonnateur National</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{secure_asset('assets/img/team-2.jpg')}}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-2">
                            <h5 class="fs-6">SAMANDOULOUGOU Lockre Célestin</h5>
                            <p class="text-primary fw-bold">Président du Conseil <br> d’Administration</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{secure_asset('assets/img/team-3.jpg')}}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-2">
                            <h5 class="fs-6">Kiemde Abdoul Aziz</h5>
                            <p class="text-primary fw-bold">
                                Coordonnateur Provincial du Zondoma
                            </p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{secure_asset('assets/img/team-4.jpg')}}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-2">
                            <h5 class="fs-6">LOMPO Alassane</h5>
                            <p class="text-primary fw-bold">Coordonnateur Provincial du Gourma</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/2.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">WANGRE Amadou</h5>
                        <span class="fst-italic">Coordonnateur National <br/>Sociologue</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/1.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">WOROKUY David Seth</h5>
                        <span class="fst-italic">Directeur de Programme <br /> Juriste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/3.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SABO / RAMDE W. Félicité</h5>
                        <span class="fst-italic">Directeur des Affaires Administratives et Financières <br>Economiste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/4.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SAVADOGO Hassane
                            </h5>
                        <span class="fst-italic"> Assistant Méthodologique <br>Administrateur Civil</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/5.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">BATIONO Mickael</h5>
                        <span class="fst-italic">Chargé de Suivi Evaluation – Capitalisation et Apprentissage <br>Statisticien – Analyste Data</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/6.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">KABORE W Claude Bonaventure</h5>
                        <span class="fst-italic">Chargé de Suivi évaluation – Capitalisation et apprentissage <br>Sociologue</span>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/7.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SAWADOGO Aminata</h5>
                        <span class="fst-italic">Assistante de Coordination</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/43.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUEDRAOGO Rasmané</h5>
                        <span class="fst-italic">Chef Comptable</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/8.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUEDRAOGO Zoenaba</h5>
                        <span class="fst-italic">Comptable</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/9.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">NEYA Téné Charlotte</h5>
                        <span class="fst-italic">Assistante Comptable</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/10.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">YODA Wendpuire Julie Viviane</h5>
                        <span class="fst-italic">Communicatrice</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/11.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">GUIRO Idriss Fad Abasse
                            </h5>
                        <span class="fst-italic">Communicateur Commuty Manager AMR </span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/12.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUEDRAOGO W. Paul</h5>
                        <span class="fst-italic">Spécialiste en mobilisation sociale Chargé de Cohésion Sociale <br /> Juriste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/13.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUEDRAOGO Ouahabou</h5>
                        <span class="fst-italic">Chargé projet Gouvernance Locale <br> Géographe – Gestionnaire de projets</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/14.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">KARAMBIRI Céline</h5>
                        <span class="fst-italic">Superviseur Projet Santé Communautaire <br>Sociologue</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/15.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">KOANDA Bertille</h5>
                        <span class="fst-italic">Chargée R2G & Plaidoyer<br>Communicatrice</span>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/16.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">ZOROME Arouna</h5>
                        <span class="fst-italic">Spécialiste en Suivi évaluation <br>Statisticien - Data analyste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/17.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SANOU Brigitte</h5>
                        <span class="fst-italic">Superviseur mission AMR-PAM<br>Boucle du Mouhoun - Nord</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/18.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">ZONGO Marcellin</h5>
                        <span class="fst-italic">Superviseur mission AMR-PAM<br>Sahel Burkina</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/19.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SAVADOGO Mahamady</h5>
                        <span class="fst-italic">Superviseur mission AMR-PAM <br>Centre-Nord Burkina</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/20.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">RIBOU Sébastien</h5>
                        <span class="fst-italic">Superviseur mission AMR-PAM<br>Est Burkina</span>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/21.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUEDRAOGO Hamed</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/22.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUEDRAOGO Cyr Wendwaoga</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/23.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUEDRAOGO Nazemsé Honoré</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/24.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">CONGO Natacha</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/25.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SAVADOGO Sayouba</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/26.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUEDRAOGO Saidou</h5>
                        <span class="fst-italic">Assistant de sécurité <br />Service d’appui</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/27.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">BANGRE Mahamoudou</h5>
                        <span class="fst-italic">Membre d’Honneur <br />Ancien Président</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/28.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">MANDZABA François</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/29.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SIENOU Adama</h5>
                        <span class="fst-italic">Technicien Inter Communal <br />Géographe</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/30.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">ZONGO Hamidou</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/31.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUEDRAOGO Inoussa</h5>
                        <span class="fst-italic">Assistant de sécurité <br />Service d’appui</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/32.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SIGUE Adama</h5>
                        <span class="fst-italic">Agent de conduite <br />Service d’appui</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/33.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SAMANDOULOUGOU Lockre Célestin</h5>
                        <span class="fst-italic">Président du Conseil d’Administration <br />Economiste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/34.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUMSAORE N Gaston</h5>
                        <span class="fst-italic">Président du Comité National de 
                            Contrôle et de Vérification <br >Auditeur Comptable</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/35.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">BANGRE K André</h5>
                        <span class="fst-italic">Président du Comité National de 
                            Plaidoyer et d’Orientation Stratégique <br />Economiste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/44.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">OUEDRAOGO Faty</h5>
                        <span class="fst-italic">Femme de ménage
                            <br /> Service d’appui</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/36.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">SAVADOGO Abdoulaye</h5>
                        <span class="fst-italic">Directeur de la Vie Associative</span>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/37.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Kiemde Abdoul Aziz</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Zondoma <br > Spécialiste en éducation</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/38.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">BALOUM François</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Sanematenga <br >Spécialiste en éducation</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/39.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">BAYILI Joseph</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Boulkiemdé <br >Spécialiste en éducation</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/40.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">BANDAOGO Roland Samy</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Boulgou <br >Spécialiste en éducation</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/41.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">LOMPO Alassane</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Gourma <br>Spécialiste en éducation</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{secure_asset('assets/img/membres/42.jpg')}}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">BAZIOMO Martial Richard</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Sanguié <br>Spécialiste en éducation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Contacts</p>
                    <h1 class="mb-4">Besoin d'informations ? Alors constatez-nous</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Appelez-nous maintenant</p>
                            <h5 class="mb-0">+226 73-88-59-09 / 67-36-78-27</h5>
                            <h5 class="mb-0">+226 70-84-01-89 / 67-36-76-51</h5>
                            <h5 class="mb-0">+226 03-16-02-04</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Envoyez-nous un mail maintenant</p>
                            <h5 class="mb-0">info@amrbf.org</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Nom et Prénom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control border-0" placeholder="Téléphone" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" placeholder="Entrer votre commentaire"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <!--div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Membres</p>
                <h1>Les membres de l'AMR</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Patient Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Patient Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Patient Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Addresse</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>BP 20, Gourcy, Burkina Faso</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+226 73-88-59-09 / 67-36-78-27</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@amrbf.org</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Thématiques</h5>
                    <a class="btn btn-link" href="">Droits, cohésion, décentralisation et gouvernance locale</a>
                    <a class="btn btn-link" href="">promotion, politique, économique, santé</a>
                    <a class="btn btn-link" href="">Systèmes alimentaires durables</a>
                    <a class="btn btn-link" href="">Axes Transversaux</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Liens rapides</h5>
                    <a class="btn btn-link" href="">Présentation</a>
                    <a class="btn btn-link" href="">Nos Actions</a>
                    <a class="btn btn-link" href="">Contacts</a>
                    <a class="btn btn-link" href="">À propos</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Abonnez-vous pour ne rien manquer des actualités de l'AMR</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Souscrire</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">AMR</a>, Tous Droits Réservés.
                    </div>
                    <!--div class="col-md-6 text-center text-md-end">
                        Designed By <a class="border-bottom" href="#">Sinaloid</a>
                    </div-->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{secure_asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{secure_asset('assets/js/main.js')}}"></script>
</body>

</html>