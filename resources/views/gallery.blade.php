@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')
    <h1>{{ $maintitle }}</h1>
    <h2 class="mt-5 text-center">Exhibition</h2>
    <div class="container-fluid col-12 mb-lg-5 text-center w-75">
        <div class="row">
            <div class="col">
                <img src="../images/exhibitions.jpeg" class="img-fluid m-3 h-100 w-100 rounded-2">
            </div>
            {{-- <div class="col-lg-4">
                <img src="../images/ucicf.png"  class="img-fluid m-3 h-100 w-100 rounded-2">
            </div>
            <div class="col-lg-4 mb-5">.
                <img src="../images/sincerelywarp.png"  class="img-fluid m-3 h-100 w-100 rounded-2">
            </div> --}}
        </div>
    </div>
    <h2 class="mt-5 text-center">Our Testimoni</h2>
    <!-- jumbotron -->
    <div class="jumbotron text-center p-lg-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/review1scroll.jpeg" class="w-75">
                </div>
                <div class="carousel-item">
                    <img src="../images/review2scroll.jpeg" class="w-75">
                </div>
                <div class="carousel-item">
                    <img src="../images/review3scroll.jpeg" class="w-75">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon dark bg-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- <div class="container-fluid col-12 mb-lg-5 text-center w-75">
        <div class="row">
            <div class="col-lg-6">
                <img src="../images/review1scroll.jpeg" class="img-fluid m-3 w-100 h-100 rounded-2">
            </div>
            <div class="col-lg-6">
                <img src="../images/review2scroll.jpeg"  class="img-fluid m-3 w-100 h-100 rounded-2">
            </div> --}}
            {{-- <div class="col-lg-4">.
                <img src="../images/review3.png"  class="img-fluid m-3 w-100 h-100 rounded-2">
            </div> --}}
        {{-- </div>
    </div> --}}
    
@endsection