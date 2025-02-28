@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Actualités</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 mx-auto wow fadeIn p-0" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded align-self-end img-max-h"
                            src="{{ asset($actualite->image) }}" alt="">
                    </div>
                    <div class="py-4">
                        <div class="d-flex fs-14 mb-3">
                            <span class="me-auto">Publier le : {{$actualite->date}}</span>
                            <span>Auteur : {{$actualite->user()->first()->nom." ".$actualite->user()->first()->prenom}}</span>
                        </div>
                        <span class="fw-bold fs-20">
                            {{$actualite->titre}}
                        </span>
                        <p>
                            {!! $actualite->description !!}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--div class="container-xxl pb-5">
        <div class="container">
            <div class="row my-3">
                <div class="col-12 p-0 m-0">
                    <p class="d-inline-block border rounded-pill py-1 px-4">
                        Droits Humains, cohésion sociale, décentralisation et gouvernance locale
                    </p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn p-0" data-wow-delay="0.1s">
                    @foreach ([1, 2, 3] as $item)
                        <div class="d-flex mb-3">
                            <img class="img-carre rounded me-2" src="{{ asset('assets/img/about-1.jpg') }}" alt="">

                            <div>
                                <span class="fw-bold">Titre de l'actualité</span>
                                <p class="text-container">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat architecto beatae iure
                                    sint
                                    accusantium. Sed ullam eveniet doloremque tempore consequatur sint...
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    @foreach ([1, 2, 3] as $item)
                        <div class="d-flex mb-3">
                            <img class="img-carre rounded me-2" src="{{ asset('assets/img/about-1.jpg') }}" alt="">

                            <div>
                                <span class="fw-bold">Titre de l'actualité</span>
                                <p class="text-container">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat architecto beatae iure
                                    sint
                                    accusantium. Sed ullam eveniet doloremque tempore consequatur sint...
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex">
                        <a class="ms-auto" href="#">Voir toutes les actualités<i
                                class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



    <div class="container-fluid mt-3 bg-primary text-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn p-0" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded align-self-end img-max-h" src="{{ asset('assets/img/about-1.jpg') }}"
                            alt="">
                    </div>
                    <div class="py-2">
                        <a href="#" class="fw-bold text-white">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus tempora veritatis,
                            tenetur exercitationem doloremque modi molestiae soluta minima natus, corporis vero nemo est
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">

                    <p class="d-inline-block border rounded-pill py-1 px-4">Systèmes alimentaires durables</p>
                    @foreach ([1, 2, 3] as $item)
                        <div class="d-flex mb-3">
                            <img class="img-carre rounded me-2" src="{{ asset('assets/img/about-1.jpg') }}" alt="">

                            <div>
                                <span class="fw-bold">Titre de l'actualité</span>
                                <p class="text-container">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat architecto beatae iure
                                    sint
                                    accusantium. Sed ullam eveniet doloremque tempore consequatur sint...
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex">
                        <a class="ms-auto text-white" href="#">Voir toutes les actualités<i
                                class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row mt-3">
                <div class="col-12 p-0 m-0">
                    <p class="d-inline-block border rounded-pill py-1 px-4">
                        Axes Transversaux
                    </p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn p-0" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/about-1.jpg') }}" alt=""><br />
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus tempora
                                veritatis,
                            </span>
                        </div>
                        <div class="col">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/about-1.jpg') }}" alt=""><br />
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus tempora
                                veritatis,
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">

                    @foreach ([1, 2, 3] as $item)
                        <div class="d-flex mb-3">
                            <img class="img-carre rounded me-2" src="{{ asset('assets/img/about-1.jpg') }}"
                                alt="">

                            <div>
                                <span class="fw-bold">Titre de l'actualité</span>
                                <p class="text-container">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat architecto beatae iure
                                    sint
                                    accusantium. Sed ullam eveniet doloremque tempore consequatur sint...
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex">
                        <a class="ms-auto" href="#">Voir toutes les actualités<i
                                class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row my-3">
                <div class="col-12 p-0 m-0">
                    <p class="d-inline-block border rounded-pill py-1 px-4">
                        La promotion de l’autonomisation politique et économique de la femme et du jeune et la santé de
                        l’enfant
                    </p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 wow fadeIn p-0" data-wow-delay="0.1s">
                    <div class="row row-cols-md-4">
                        @foreach ([1, 2, 3, 1, 4, 4, 4, 4] as $item)
                            <div class="col mb-4">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/about-1.jpg') }}"
                                    alt=""><br />
                                <span class="fw-bold">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus tempora
                                    veritatis,
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div-->
@endsection
