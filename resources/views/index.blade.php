@extends('layouts.app')
@section('content')
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
                            <h2 class="text-white mb-1" data-toggle="counter-up">27</h2>
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
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Cardiology</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Neurology</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{ asset('assets/img/carousel-3.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Pulmonary</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{ asset('assets/img/carousel/13.jpg') }}"
                            alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Pulmonary</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{ asset('assets/img/carousel/17.jpg') }}"
                            alt="">
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
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('assets/img/about-1.jpg') }}"
                            alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ asset('assets/img/about-2.jpg') }}"
                            alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">À propos</p>
                    <h1 class="mb-4">Qui sommes nous ?</h1>
                    <p class="mb-4 text-justify">
                        L’Association Monde Rural est une association apolitique, non confessionnelle
                        et à but non lucratif régi par la loi <span class="fw-bold">n 064-2015 CNT du 20 octobre
                            2015</span>. <br>
                        Elle a été enregistrée sous le numéro <span class="fw-bold">n 000000135701 du 17 mars 2017</span>.
                        <br>
                        Son siège social se trouve à Gourcy dans la province du Zondoma au Burkina Faso. <br>
                        Depuis 1996, elle œuvre auprès des populations rurales et intervient dans plusieurs domaines
                        d’activités à savoir:

                    </p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Les droits humains, la cohésion sociale, la
                        gouvernance locale et la décentralisation</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>La promotion de la femme et de l’enfant</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Les systèmes alimentaires durables</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Les axes transversaux : VIH sida, changement
                        climatique,
                        la prévention de l’extrémisme violent, le Do no Harm, LNOIB et la promotion du genre.</p>
                    @guest
                        <button class="btn btn-primary rounded-pill py-3 px-5 mt-3" data-bs-target="#adhesionForm"
                            data-bs-toggle="modal">Devenir Membre</button>
                    @endguest
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
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/ambf.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">

                        <p>
                            L’Association des Municipalités du Burkina Faso, elle travaille à contribuer au renforcement de
                            la décentralisation et à la promotion de la bonne gouvernance.
                        </p>
                        <h5 class="mb-1">AMBF</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/delen.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Delen</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/diakonia.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Diakonia</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/expertise.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Expertise France</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/care.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Care</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/chemonics.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Chemonics</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/creative.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">CREATIVE</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/fonaenf.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">FONAENF</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/hunger.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">The Hunger Project</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/idlo.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">IDLO</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/jatur.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">JATUR</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/mondial.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">PAM</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/fao.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">FAO</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/pnud.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">PNUD</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light mx-auto mb-4" src="{{ asset('assets/img/pt/proget.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Progettomondo.mlal</h5>
                        <!--span class="fst-italic">Profession</span-->
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/pt/semus.png') }}"
                        style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
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
                <h1>Nos domaines d'interventions</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="bi bi-people-fill text-primary fs-4"></i>
                        </div>
                        <p class="mb-4 fw-bold">Voir les actions de l'AMR en matière :</p>
                        <h4 class="mb-3">De la gouvernance locale, de la décentralisation et des droits humains (GovLoc)
                        </h4>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Lire plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-x-ray text-primary fs-4"></i>
                        </div>
                        <p class="mb-4 fw-bold">L'AMR oeuvre pour :</p>
                        <h4 class="mb-3">

                            Le genre et l’inclusion sociale (Santé communautaire – ANJE- / Empowerment des femmes,
                            entreprenariat des jeunes) (G.I.S.)
                        </h4>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Lire plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="bi bi-diamond-fill text-primary fs-4"></i>
                        </div>
                        <p class="mb-4 fw-bold">
                            Découvrir les actions de l' AMR pour les:
                        </p>
                        <h4 class="mb-3">
                            Les systèmes alimentaires durables (agroécologie, foncier, environnement et changements climatiques ;
            plaidoyer pour la nutrition et le WASH) (S.A.D.)
                        </h4>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Lire plus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="bi bi-disc-fill text-primary fs-4"></i>
                        </div>
                        <p class="mb-4 fw-bold">Comprendre les axes transversaux de l' AMR</p>
                        <h4 class="mb-3">
                            L’humanitaire, l’urgences et la cohésion sociale (Do No Harm, Leaving No One Behind) (H.U.CO.S.)
                        </h4>
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
                        <!--p class="d-inline-block border rounded-pill text-light py-1 px-4">Nos Valeurs</p-->
                        <h1 class="text-white mb-4">Nos valeurs</h1>
                        <p class="text-white mb-4 pb-2">
                            AMR travailler avec et aux côtés des populations burkinabé pour le respect et la protection de
                            leur dignité.
                        </p>
                        <div class="row g-4">
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="bi bi-briefcase-fill text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Travail</p>
                                        <h5 class="text-white mb-0">Professionnel</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Toujours</p>
                                        <h5 class="text-white mb-0">Engagé</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="bi bi-briefcase-fill text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Travail avec</p>
                                        <h5 class="text-white mb-0">Intégrité </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="fa fa-brain text-primary"></i>
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
                                                            <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/img/amr-action.jpg') }}" style="object-fit: cover;" alt="">
                                                        </div>
                                                    </div-->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="owl-carousel header-carousel" style="max-height: 500px;">
                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100"
                                src="{{ asset('assets/img/carousel/14.jpg') }}" style="object-fit: cover;"
                                alt="">
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100"
                                src="{{ asset('assets/img/carousel/4.jpg') }}" style="object-fit: cover;"
                                alt="">
                        </div>

                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100"
                                src="{{ asset('assets/img/carousel/6.jpg') }}" style="object-fit: cover;"
                                alt="">
                        </div>

                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100"
                                src="{{ asset('assets/img/carousel/8.jpg') }}" style="object-fit: cover;"
                                alt="">
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
                            <img class="img-fluid" src="{{ asset('assets/img/team-1.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-2">
                            <h5 class="fs-6">WANGRE Amadou</h5>
                            <p class="text-primary fw-bold">Coordonnateur <br> National</p>
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
                            <img class="img-fluid" src="{{ asset('assets/img/team-2.jpg') }}" alt="">
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
                            <img class="img-fluid" src="{{ asset('assets/img/team-3.jpg') }}" alt="">
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
                            <img class="img-fluid" src="{{ asset('assets/img/team-4.jpg') }}" alt="">
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
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/2.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Accompagner les groupes vulnérables en leur donnant les moyens d’expression citoyenne a été pour
                            moi une expérience riche d’émotions, mais aussi de fierté et d’espoir car un monde meilleur est
                            toujours possible !
                            WANGRE Amadou, Coordonnateur National AMR Burkina
                        </p>
                        <h5 class="mb-1">WANGRE Amadou</h5>
                        <span class="fst-italic">Coordonnateur National <br />Sociologue</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/1.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">WOROKUY David Seth</h5>
                        <span class="fst-italic">Directeur de Programme <br /> Juriste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/3.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">SABO / RAMDE W. Félicité</h5>
                        <span class="fst-italic">Directeur des Affaires Administratives et Financières
                            <br>Economiste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/4.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">SAVADOGO Hassane
                        </h5>
                        <span class="fst-italic"> Assistant Méthodologique <br>Administrateur Civil</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/5.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">BATIONO Mickael</h5>
                        <span class="fst-italic">Chargé de Suivi Evaluation – Capitalisation et Apprentissage
                            <br>Statisticien – Analyste Data</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/6.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">KABORE W Claude Bonaventure</h5>
                        <span class="fst-italic">Chargé de Suivi évaluation – Capitalisation et apprentissage
                            <br>Sociologue</span>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/7.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <P>
                            Je suis Aminata SAWADOGO, titulaire d’une licence option Gestion des Ressources Humaines.
                            A l’AMR, en tant qu’Assistante du Coordonnateur National, ma mission est de faciliter la tâche
                            de ce dernier par une meilleure organisation et gestion de son agenda. Au mieux de le suppléer
                            dans certaines actions et d’assurer un management participatif des ressources humaines à motiver
                            et permettre à l’AMR d’être une ONG internationale.

                        </P>
                        <h5 class="mb-1">SAWADOGO Aminata</h5>
                        <span class="fst-italic">Assistante de Coordination</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/43.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">OUEDRAOGO Rasmané</h5>
                        <span class="fst-italic">Chef Comptable</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/8.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">OUEDRAOGO Zoenaba</h5>
                        <span class="fst-italic">Comptable</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/9.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Je suis NEYA T Charlotte, Assistante Comptable à l'Association Monde Rural et chargée d'appuyer
                            la Directrice des affaires
                            administratives et financières dans la bonne gestion des activités selon le manuel de procédure
                            de la structure.
                            J'ai rejoint AMR pour mettre mon expertise à son profit et lui permettre d’être plus
                            opérationnelle.
                        </p>
                        <h5 class="mb-1">NEYA Téné Charlotte</h5>
                        <span class="fst-italic">Assistante Comptable</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/10.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Je suis Wendpuiré Julie Viviane YODA, Conseillère en Sciences et Techniques de l'Information et
                            de la Communication,
                            avec également une expérience en Journalisme. Mon engagement à participer activement aux
                            activités qui accompagneront
                            les collectivités territoriales dans la promotion de la participation citoyenne et de la
                            redevabilité, dans la transparence
                            de la gestion locale demeure le même que celui qui m'animait dès le premier contact avec l'AMR.
                            J'entends donc travailler à
                            implémenter les actions de communication pour une meilleure visibilité de l’AMR.
                        </p>
                        <h5 class="mb-1">YODA Wendpuire Julie Viviane</h5>
                        <span class="fst-italic">Communicatrice</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/11.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <P>
                            Je suis Idriss Fad Abasse GUIRO, Marketer et communicant.
                            Passionné de communication et de Marketing digital, je m’occupe de la communication digitale de
                            l’Association Monde Rural. A l’AMR, je veux mieux exercer ma passion.

                        </P>
                        <h5 class="mb-1">GUIRO Idriss Fad Abasse
                        </h5>
                        <span class="fst-italic">Communicateur Commuty Manager AMR </span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/12.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Je me nomme OUEDRAOGO W Paul, juriste et spécialiste en intermédiation sociale. Je possède une
                            expertise en sécurité alimentaire et protection des moyens d’existences des vulnérables.
                            J’ai rejoint l’AMR dans le seul souci de réaliser une ambition : contribuer à soulager la misère
                            des populations vulnérables et celles affectées par les différents chocs et l’extrême pauvreté.

                        </p>
                        <h5 class="mb-1">OUEDRAOGO W. Paul</h5>
                        <span class="fst-italic">Spécialiste en mobilisation sociale Chargé de Cohésion Sociale <br />
                            Juriste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/13.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Je suis OUEDRAOGO Ouahabou, géographe de formation et chargé de projet Gouvernance Locale à
                            l’AMR. Epousant la philosophie de l’AMR et convaincu que le développement réel viendrait de la
                            base, voilà ce qui m’a séduit et à choisir AMR pour apporter ma touche au bien-être des
                            populations rurales
                            Contribuer à faire de l’AMR l’une des meilleures structures en matière de promotion de la
                            gouvernance locale.

                        </p>
                        <h5 class="mb-1">OUEDRAOGO Ouahabou</h5>
                        <span class="fst-italic">Chargé projet Gouvernance Locale <br> Géographe – Gestionnaire de
                            projets</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/14.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <P>
                            Je suis KARAMBIRI Céline. Je suis sociologue de formation avec pour option Dynamique Locale. Je
                            suis experte en mobilisation communautaire.
                            J’ai rejoint l’AMR dans le but de mettre en pratique les connaissances acquises à la base
                            surtout dans le monde communautaire en matière de sensibilisation. Je suis en contact direct
                            avec le monde communautaire afin de leur apporter du soutien ce qui leur permettra d'opérer de
                            nouvelles connaissances en matière de santé.

                        </P>
                        <h5 class="mb-1">KARAMBIRI Céline</h5>
                        <span class="fst-italic">Superviseur Projet Santé Communautaire <br>Sociologue</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/15.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">KOANDA Bertille</h5>
                        <span class="fst-italic">Chargée R2G & Plaidoyer<br>Communicatrice</span>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/16.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Je suis ZOROME Arouna, Chef de mission Third-Party Monitoring (TPM). Je suis Ingénieur
                            Statisticien Environnementaliste.
                            Ma mission au sein de l’AMR est de coordonner l’ensemble des activités TPM et de répondre aux
                            différentes sollicitations de ma hiérarchie.
                            Le TPM au Burkina Faso étant une nouvelle démarche promue par notre partenaire le PAM,
                            j’ambitionne de faire de l’AMR, la référence TPM dans la sous région.
                        </p>
                        <h5 class="mb-1">ZOROME Arouna</h5>
                        <span class="fst-italic">Spécialiste en Suivi évaluation <br>Statisticien - Data analyste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/17.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Accompagner les femmes rurales pour leur autonomisation à travers l’accès aux crédit par la
                            facilitation des Associations villageoises d’épargne et de crédits à été une expérience très
                            riche et un sentiment de fierté pour moi, car les femmes arrivent a constituer de façon locale
                            leur fonds de crédit qui leurs permet d’accéder au crédits à des conditions souples pour
                            développer leurs moyens d’existences. SANOU Brigitte, Superviseur de programme AMR Burkina
                        </p>
                        <h5 class="mb-1">SANOU Brigitte</h5>
                        <span class="fst-italic">Superviseur mission AMR-PAM<br>Boucle du Mouhoun - Nord</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/18.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Être en contact permanent avec les communautés vulnérables et s’assurer que toute personne
                            vulnérable qui est bénéficiaire reçoit une assistance alimentaire en qualité et quantité qui lui
                            ai dû. Voici ceux à quoi je me suis attaché et qui me donnent une entière satisfaction
                            Nissoma Waouaga Abdel Marcelin ZONGO Superviseur de projet à AMR-BURKINA

                        </p>
                        <h5 class="mb-1">ZONGO Marcellin</h5>
                        <span class="fst-italic">Superviseur mission AMR-PAM<br>Sahel Burkina</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/19.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">SAVADOGO Mahamady</h5>
                        <span class="fst-italic">Superviseur mission AMR-PAM <br>Centre-Nord Burkina</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/20.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">RIBOU Sébastien</h5>
                        <span class="fst-italic">Superviseur mission AMR-PAM<br>Est Burkina</span>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/21.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Je suis OUEDRAOGO Hamed, j’ai un niveau de licence 2 en science économique et de gestion, mon
                            aventure dans le milieu humanitaire à débuter en 2021 dans une ONG comme animateur dans le
                            projet de résilience. Par la suite J’ai été chef de chantier dans le projet filet sociaux/BNS et
                            enfin j’ai été Promoteur dans projet « Amélioration du service eau, assainissement au profit de
                            la population du Liptako Gourma, commune de Dori ».
                            Pour moi travailler dans une structure comme l’AMR, en qualité de technicien intercommunal me
                            permettra de pouvoir œuvrer au profit des communautés en proie aux multiples vicissitudes de la
                            vie dans ce contexte d’insécurité grandissante.
                            Mes différentes expériences professionnelles, ma disponibilité, mon sens du devoir sont entre
                            autres des atouts que j’aimerais mettre à la disposition de la structure pour l’atteinte de ses
                            objectifs et parallèlement me permettre de mieux comprendre le monde humanitaire et d’apporter
                            de justes et idoines réponses.

                        </p>
                        <h5 class="mb-1">OUEDRAOGO Hamed</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/22.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <P>
                            Je suis Ouédraogo Cyr Wendwaoga, juriste. J’ai rejoint AMR parce qu’étant à la recherche de
                            nouvelles opportunités d’expression professionnelles qui me permettront de progresser de
                            valoriser et me mettre à profit mes expériences. En tant que technicien intercommunal, je serai
                            en contact permanent avec les communautés rurales que j’admire tant. Cette position me
                            facilitera d’œuvre à la notoriété de la structure et à l’atteinte des buts et objectifs.
                        </P>
                        <h5 class="mb-1">OUEDRAOGO Cyr Wendwaoga</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/23.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Je suis Ouédraogo Nazemsé Honoré, diplômé en science économique et de gestion, j’ai une
                            expérience dans le domaine humanitaire et une bonne
                            connaissance du milieu rural.
                            A AMR, je suis un agent terrain afin de l’accompagner dans l’atteinte de ses objectifs.
                        </p>
                        <h5 class="mb-1">OUEDRAOGO Nazemsé Honoré</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/24.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Je suis CONGO Natacha, technicienne intercommunale de l’Association Monde Rural, et je sers de
                            relais entre l’AMR et le monde communautaire
                            De contact facile, flexible et adaptative, j’ai rejoint l’AMR pour contribuer à l’épanouissement
                            du monde communautaire.
                            Mes ambitions pour l’organisation c’est de construire un monde meilleur, de paix avec les
                            approches et stratégies d’AMR pour l’atteinte de ses objectifs.
                        </p>
                        <h5 class="mb-1">CONGO Natacha</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/25.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">SAVADOGO Sayouba</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/26.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">OUEDRAOGO Saidou</h5>
                        <span class="fst-italic">Assistant de sécurité <br />Service d’appui</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/27.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">BANGRE Mahamoudou</h5>
                        <span class="fst-italic">Membre d’Honneur <br />Ancien Président</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/28.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Je suis François MANDZABA, Technicien Inter Communal à AMR.Je suis aux côtés des communautés,
                            rurales surtout pour des actions de sensibilisations
                            pour l'éveil des consciences afin de susciter un engagement de celles-ci dans la marche pour le
                            développement de leur communauté. Je participe à la
                            recherche de solutions et d'accompagnement pour répondre aux problèmes de ces communautés.
                            J'ai rejoint AMR car j'ai toujours voulu apporter ma contribution pour le bien être des
                            communautés rurales. AMR est un cadre idéal pour moi donc
                            de pouvoir accomplir ce rêve.
                        </p>
                        <h5 class="mb-1">MANDZABA François</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/29.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">SIENOU Adama</h5>
                        <span class="fst-italic">Technicien Inter Communal <br />Géographe</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/30.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">ZONGO Hamidou</h5>
                        <span class="fst-italic">Technicien Inter Communal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/31.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">OUEDRAOGO Inoussa</h5>
                        <span class="fst-italic">Assistant de sécurité <br />Service d’appui</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/32.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">SIGUE Adama</h5>
                        <span class="fst-italic">Agent de conduite <br />Service d’appui</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/33.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">SAMANDOULOUGOU Lockre Célestin</h5>
                        <span class="fst-italic">Président du Conseil d’Administration <br />Economiste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/34.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">OUMSAORE N Gaston</h5>
                        <span class="fst-italic">Président du Comité National de
                            Contrôle et de Vérification <br>Auditeur Comptable</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/35.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">BANGRE K André</h5>
                        <span class="fst-italic">Président du Comité National de
                            Plaidoyer et d’Orientation Stratégique <br />Economiste</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/44.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">OUEDRAOGO Faty</h5>
                        <span class="fst-italic">Femme de ménage
                            <br /> Service d’appui</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/36.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Je suis SAVADOGO Abdoulaye, sociologue de formation et membre fondateur de l'AMR
                            Je veux contribuer avec les autres membres de l'AMR à renforcer les capacités des populations
                            rurales pour qu'elles participent pleinement aux actions de développement.
                            En tant que directeur de la vie associative, je veille à ce que la mise en œuvre des projets et
                            programmes ne fasse pas oublier les activités régaliennes de l'association.
                            Pour AMR, je veux une structure capable de renforcer les capacités de toutes les communes du
                            Burkina Faso en particulier et de l’Afrique en général.

                        </p>
                        <h5 class="mb-1">SAVADOGO Abdoulaye</h5>
                        <span class="fst-italic">Directeur de la Vie Associative</span>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/37.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Kiemde Abdoul Aziz</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Zondoma <br> Spécialiste en éducation</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/38.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">BALOUM François</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Sanematenga <br>Spécialiste en
                            éducation</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/39.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">BAYILI Joseph</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Boulkiemdé <br>Spécialiste en éducation</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/40.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">BANDAOGO Roland Samy</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Boulgou <br>Spécialiste en éducation</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/41.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">LOMPO Alassane</h5>
                        <span class="fst-italic">Coordonnateur Provincial du Gourma <br>Spécialiste en éducation</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/membres/42.jpg') }}" style="width: 200px; height: 200px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Je suis Bazyomo Martial Richard, point focal de l’AMR a Réo dans la province du Sanguié.
                            Je suis animateur, collecteur de données également.
                            J’aime le travail sur le terrain, la vie en société et les interactions avec la communauté
                            rurale.

                        </p>
                        <h5 class="mb-1">BAZyOMO Martial Richard</h5>
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
                    <h1 class="mb-4">Besoin d'informations ? Alors contactez-nous</h1>

                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
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
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
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
                                    <input type="text" class="form-control border-0" placeholder="Nom et Prénom"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control border-0" placeholder="Téléphone"
                                        style="height: 55px;">
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
@endsection
