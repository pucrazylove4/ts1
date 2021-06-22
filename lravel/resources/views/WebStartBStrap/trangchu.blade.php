{{-- Extends web --}}
@extends('WebStartBStrap.master');




{{-- Yield $ secction --}}
@section('Protfolio')
    <div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="{{URL::asset('resources/vendor/assets/img/portfolio/cabin.png')}}" alt="..." />
        </div>
    </div>
@endsection

@section('Protfolio2')
    <div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="{{URL::asset('resources/vendor/assets/img/portfolio/cake.png')}}" alt="..." />
        </div>
    </div>
@endsection
@section('Protfolio3')
    <div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="{{URL::asset('resources/vendor/assets/img/portfolio/circus.png')}}" alt="..." />
        </div>
    </div>
@endsection
@section('Protfolio4')
    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="{{URL::asset('resources/vendor/assets/img/portfolio/game.png')}}" alt="..." />
        </div>
    </div>
@endsection
@section('Protfolio5')
    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="{{URL::asset('resources/vendor/assets/img/portfolio/safe.png')}}" alt="..." />
        </div>
    </div>
@endsection
@section('Protfolio6')
    <div class="col-md-6 col-lg-4">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="{{URL::asset('resources/vendor/assets/img/portfolio/submarine.png')}}" alt="..." />
        </div>
    </div>
@endsection
