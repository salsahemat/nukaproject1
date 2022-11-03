@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')
    <h1 class="text-center">{{ $maintitle }}</h1>
    <h2>Exhibition</h2>
    <div class="container-fluid col-12 mb-lg-5 text-center w-75">
        <div class="row">
            <div class="col-lg-4">
                <img src="../images/royal.png" class="img-fluid m-3 h-100 w-100 rounded-2">
            </div>
            <div class="col-lg-4">
                <img src="../images/ucicf.png"  class="img-fluid m-3 h-100 w-100 rounded-2">
            </div>
            <div class="col-lg-4 mb-5">.
                <img src="../images/sincerelywarp.png"  class="img-fluid m-3 h-100 w-100 rounded-2">
            </div>
        </div>
    </div>
    <h2 class="mt-5">Testimoni</h2>
    <div class="container-fluid col-12 mb-lg-5 text-center w-75">
        <div class="row">
            <div class="col-lg-4">
                <img src="../images/testimoni1.png" class="img-fluid m-3 w-75 h-75 rounded-2">
            </div>
            <div class="col-lg-4">
                <img src="../images/testimoni2.png"  class="img-fluid m-3 w-75 h-75 rounded-2">
            </div>
            <div class="col-lg-4">.
                <img src="../images/testimoni3.png"  class="img-fluid m-3 w-75 h-75 rounded-2">
            </div>
        </div>
    </div>
@endsection