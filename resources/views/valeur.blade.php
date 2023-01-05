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
                    <h1 class="mb-4">{{$datas['title']}}</h1>
                    <p class="mb-4">{!! $datas['content'] !!}</p>
                    <!--a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a-->
                    <p class="">
                        <img width="100%" src="{{secure_asset('assets/img/valeurs.png')}}" alt="">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection