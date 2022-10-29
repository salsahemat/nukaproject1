@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')
    <h1 class="text-center">{{ $maintitle }}</h1>

    @foreach ($products as $product)
        <div class="card mb-3" style="max-width: 540px;margin-inline: 5% 10%;
            writing-mode: horizontal-tb;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset("images/{$product['image_name']}") }}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">Ingredients: {{ $product['Ingredients'] }}</p>
                        <div class="d-flex">
                            <a href="/showproduct/{{ $product['id'] }}" class="btn btn-warning">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
