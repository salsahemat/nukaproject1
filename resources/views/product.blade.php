@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')
    <h1 class="text-center">{{ $maintitle }}</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/Vanilalala.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                @foreach ($products as $index => $product)
                <h5 class="card-title">{{ $product['name'] }}</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  
            @endforeach
            </div>
          </div>
        </div>
      </div>
@endsection
