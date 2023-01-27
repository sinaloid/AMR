@extends('layouts.app')
@section('content')



<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{$datas['title']}}</h1>

    </div>
</div>
<!-- Page Header End -->


<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <i class="bi {{$datas['class']}} display-1 text-primary"></i>
                <!--h1 class="display-1">{{$datas['title']}}</h1-->
                <h1 class="mb-5">Equipe opérationnelle</h1>
                <p class="mb-4">{!! $datas['content'] !!}</p>
                <!--a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a-->
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/2.jpg')}}" alt="">
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
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/1.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">WOROKUY David Seth</h5>
                        <p class="text-primary fw-bold">Directeur de Programme</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/3.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">SABO / RAMDE W. Félicité</h5>
                        <p class="text-primary fw-bold">Directeur des Affaires Administratives et Financières</p>
                        <div class="team-social text-center m-0">
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
                        <img class="img-fluid" src="{{asset('assets/img/membres/4.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">SAVADOGO Hassane</h5>
                        <p class="text-primary fw-bold">
                            Assistant Méthodologique
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/5.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">BATIONO Mickael</h5>
                        <p class="text-primary fw-bold">Chargé de Suivi Evaluation Capitalisation et Apprentissage</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/6.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">KABORE W Claude Bonaventure</h5>
                        <p class="text-primary fw-bold">Chargé de Suivi évaluation Capitalisation et Apprentissage</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/7.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">SAWADOGO Aminata</h5>
                        <p class="text-primary fw-bold">Assistante de Coordination</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/43.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUEDRAOGO Rasmané</h5>
                        <p class="text-primary fw-bold">Chef Comptable</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/8.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUEDRAOGO Zoenaba</h5>
                        <p class="text-primary fw-bold">Comptable</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/9.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">NEYA Téné Charlotte</h5>
                        <p class="text-primary fw-bold">Assistante Comptable</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/10.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">YODA Wendpuire Julie Viviane</h5>
                        <p class="text-primary fw-bold">Communicatrice</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/11.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">GUIRO Idriss Fad Abasse</h5>
                        <p class="text-primary fw-bold">Communicateur
                            Commuty Manager AMR</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/12.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUEDRAOGO W. Paul</h5>
                        <p class="text-primary fw-bold">Spécialiste en mobilisation sociale
                            Chargé de Cohésion Sociale</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/13.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUEDRAOGO Ouahabou</h5>
                        <p class="text-primary fw-bold">Gestionnaire de projets
                            Chargé Projet Gouvernance Locale</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/14.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">KARAMBIRI Céline</h5>
                        <p class="text-primary fw-bold">Superviseur Projet Santé Communautaire</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/15.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">KOANDA Bertille</h5>
                        <p class="text-primary fw-bold">Chargée R2G & Plaidoyer</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/16.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">ZOROME Arouna</h5>
                        <p class="text-primary fw-bold">Spécialiste en Suivi évaluation </p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/17.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">SANOU Brigitte</h5>
                        <p class="text-primary fw-bold">Superviseur mission AMR-PAM
                            Boucle du Mouhoun - Nord </p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/18.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">ZONGO Marcellin</h5>
                        <p class="text-primary fw-bold">Superviseur mission AMR-PAM
                            Sahel Burkina</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/19.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">SAVADOGO Mahamady</h5>
                        <p class="text-primary fw-bold">Superviseur mission AMR-PAM
                            Centre-Nord Burkina</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/20.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">RIBOU Sébastien</h5>
                        <p class="text-primary fw-bold">Superviseur mission AMR-PAM
                            Est Burkina</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/21.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUEDRAOGO Hamed</h5>
                        <p class="text-primary fw-bold">Technicien Inter Communal</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/22.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUEDRAOGO Cyr Wendwaoga</h5>
                        <p class="text-primary fw-bold">Technicien Inter Communal</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/23.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUEDRAOGO Nazemsé Honoré</h5>
                        <p class="text-primary fw-bold">Technicien Inter Communal</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/24.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">CONGO Natacha</h5>
                        <p class="text-primary fw-bold">Technicien Inter Communal</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/25.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">SAVADOGO Sayouba</h5>
                        <p class="text-primary fw-bold">Technicien Inter Communal</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/28.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">MANDZABA François</h5>
                        <p class="text-primary fw-bold">Technicien Inter Communal</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/29.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">SIENOU Adama</h5>
                        <p class="text-primary fw-bold">Technicien Inter Communal</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/30.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">ZONGO Hamidou</h5>
                        <p class="text-primary fw-bold">Technicien Inter Communal</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/32.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">SIGUE Adama</h5>
                        <p class="text-primary fw-bold">Agent de conduite
                            Service d’appui</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/31.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUEDRAOGO Inoussa</h5>
                        <p class="text-primary fw-bold">Assistant de sécurité
                            Service d’appui</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/26.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUEDRAOGO Saidou</h5>
                        <p class="text-primary fw-bold">Assistant de sécurité
                            Service d’appui</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/44.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUEDRAOGO Faty</h5>
                        <p class="text-primary fw-bold">Femme de ménage
                            Service d’appui</p>
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
<!-- 404 End -->
@endsection