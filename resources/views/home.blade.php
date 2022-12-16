@extends('layout.app')

@section('content')
<section class="my_grid">
    <div class="container position-relative">
        <div class="my_btn">CURRENT SERIES</div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3   row-cols-lg-4 row-cols-xxl-6 g-3 py-4">

            @foreach ($tumblers as $tumbler)
            <div class="col">
                <div class="my_card text-center">
                    <div class="image_card text-center">
                        <img src="{{$tumbler['thumb']}}" :alt="title">
                    </div>
                    <h6 class="mt-3">{{$tumbler['series']}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection