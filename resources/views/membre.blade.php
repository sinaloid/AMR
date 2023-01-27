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
                <h1 class="mb-5">Les membres de l'AMR</h1>
                <p class="mb-4">{!! $datas['content'] !!}</p>
                <!--a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a-->
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/35.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">BANGRE K André</h5>
                        <p class="text-primary fw-bold">Président du Comité National de 
                            Plaidoyer et d’Orientation Stratégique</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/34.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">OUMSAORE N Gaston</h5>
                        <p class="text-primary fw-bold">Président du Comité National de 
                            Contrôle et de Vérification </p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/33.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">SAMANDOULOUGOU Lockre Célestin</h5>
                        <p class="text-primary fw-bold">Président du Conseil <br> d’Administration</p>
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
                        <img class="img-fluid" src="{{asset('assets/img/membres/37.jpg')}}" alt="">
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/41.jpg')}}" alt="">
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
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/38.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">BALOUM François</h5>
                        <p class="text-primary fw-bold">Coordonnateur Provincial du Sanematenga</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/39.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">BAYILI Joseph</h5>
                        <p class="text-primary fw-bold">Coordonnateur Provincial du Boulkiemdé</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/42.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">BAZIOMO Martial Richard</h5>
                        <p class="text-primary fw-bold">Coordonnateur Provincial du Sanguié</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/40.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">BANDAOGO Roland Samy</h5>
                        <p class="text-primary fw-bold">Coordonnateur Provincial du Boulgou</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/27.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">BANGRE Mahamoudou</h5>
                        <p class="text-primary fw-bold">Ancien Président <br>
                            Membre d’Honneur</p>
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
                        <img width="100%" class="img-fluid" src="{{asset('assets/img/membres/36.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-2">
                        <h5 class="fs-6">SAVADOGO Abdoulaye</h5>
                        <p class="text-primary fw-bold">Directeur de la Vie Associative</p>
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