@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')
<div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="lh-base fs-1">{{ $maintitle }} <br>Homemade  Oatmilk</h1> <br>
        <p class="lh-base">Ohmly Barn is made from simple,<br> natural oats. Plant-based, vegan- <br> 
          friendly, dairy and lactose-free</p> <br>
        <button type="button" class="btn btn-outline" style="background-color: #F2F5C8">Learn More</button>
    </div>
      <div class="col-lg-6">
        <div class="row">
            <div class="col">
                <img src="../images/Chocolalate.png">
            </div>
            <div class="col">
                <img src="../images/Vanilalala.png">
            </div>
        </div>
      </div>
    </div>
  </div>
  
    
@endsection
