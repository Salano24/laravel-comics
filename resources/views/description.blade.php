@extends('layout.app')

@section('content')
<section class="banner_blue">
</section>
<section class="about">
    <div class="container">
        <img class="img-active" src="{{$tumblers[0]['thumb']}}" alt="">
        <div class="row">
            <div class="col-7">
                <div class="my_card p-5 fs-5">
                    <h2 class="fw-bold">{{$tumblers[0]['title']}}</h2>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-8">
                             <div class="d-flex justify-content-around border border-dark bg-success">
                                <span class="fw-bold text-white ">U.S. Price {{$tumblers[0]['price']}}</span>
                                <span class="fw-bold text-white">AVAILABLE</span>
                             </div>
                            </div>
                            <div class="col-4 bg-success d-flex justify-content-center border border-dark">
                                <span class="fw-bold text-white ">Check Availbility</span>
                            </div>
                        </div>
                    </div>
                    <p>{{$tumblers[0]['description']}}</p>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>


@endsection