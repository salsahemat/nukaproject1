@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')
<div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="lh-base fs-1">{{ $maintitle }} <br>Homemade  Oatmilk</h1> <br>
        <p class="lh-base fs-4">Ohmly  Barn  is  made  from  simple,<br> natural  oats.  Plant-based,  vegan- <br> 
          friendly,  dairy  and  lactose-free</p> <br>
          <a href="/about" class="btn btn-outline btn-lg" style="background-color: #F2F5C8">Learn More</a>
        {{-- <button  href="/about"  type="button" class="btn btn-outline btn-lg" style="background-color: #F2F5C8">Learn More</button> --}}
    </div>
      <div class="col-lg-6">
        <div class="row">
            <div class="col">
                <img src="../images/produkohmly.png">
                <h2 class="mt-0 fs-1">Why Us?</h2>
                <p class="mt-3 lh-base fs-4 mb-5">ohmly barn use natural sweetener <br> 
              (Stevia), crafted with premium <br>
               ingrediants and we use no artificial colors </p>

            </div>
        </div>
      </div>
    </div>
  </div>
  
    
@endsection
