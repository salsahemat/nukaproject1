@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')
    <h1 class="text-center">{{ $maintitle }}</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            @foreach ($products as $product)
                <div class="col-auto col-md-3 mx-auto mx-md-0">
                    <div class="card my-2" style="width: 15rem">
                        <img src="{{ asset("images/{$product['image_name']}") }}" class="card-img">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">Ingredients: {{ $product['Ingredients'] }}</p>
                            <div class="d-flex">
                                <a href="/showproduct/{{ $product['id'] }}" class="btn btn-warning">Learn More</a>
                                    {{-- <button href="/showproduct/{{ $product['id'] }}"></button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> 
    </div>
    </div>
@endsection
