<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>AMR - Association Monde Rural</title>
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
    <link href="{{secure_asset("assets/css/sb-admin-2.css")}}" rel="stylesheet">
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
        <a href="{{route('index')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
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
                <a href="{{route('index')}}" class="nav-item nav-link active">Accueil</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Présentation</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0 bg-light">
                        <a href="{{route('visions')}}" class="dropdown-item">Visions</a>
                        <a href="{{route('valeurs')}}" class="dropdown-item">Valeurs</a>
                        <a href="{{route('missions')}}" class="dropdown-item">Missions</a>
                        <a href="{{route('objectifs')}}" class="dropdown-item">Objectifs</a>
                        <a href="{{route('organisation')}}" class="dropdown-item">Organisation</a>
                        <a href="{{route('membres')}}" class="dropdown-item">Les membres</a>
                        <a href="{{route('equipes')}}" class="dropdown-item">Equipe opérationnelle</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Thématiques</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0 bg-light">
                        <a href="feature.html" class="dropdown-item">Droits Humains, cohésion sociale, décentralisation et gouvernance locale</a>
                        <a href="team.html" class="dropdown-item">La promotion de l’autonomisation politique et économique de la femme et du jeune et la santé de l’enfant</a>
                        <a href="appointment.html" class="dropdown-item">Systèmes alimentaires durables</a>
                        <a href="testimonial.html" class="dropdown-item">Axes Transversaux</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{route('apropos')}}" class="nav-item nav-link">À propos</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                        @guest
                            @if (Route::has('login'))
                            <a href="{{route('login')}}" class="nav-item nav-link">Connexion</a>
                            @endif

                            @if (Route::has('register'))
                                <!--a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a-->
                            @endif
                        @else
                            <a href="{{route('home')}}" class="nav-item nav-link">Compte</a>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nom ." ".Auth::user()->prenom  }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end bg-light" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Déconnection
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </div>
            @guest
            <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Devenir Membre<i class="fa fa-arrow-right ms-3"></i></a>
            @endguest
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-2 col-md-6">
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
                        <button type="button" class="btn btn-primary  mt-2 me-2">Souscrire</button>
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