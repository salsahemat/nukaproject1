@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')
    <h1 class="text-center">{{ $maintitle }}</h1>
    <div class="row">
        @foreach ($products as $product)
            <section class="col-lg-6 mt-5">
                <div class="card m-auto">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset("images/{$product['image_name']}") }}" class="img-fluid rounded-start">
                            <h5 class="card-title text-center">{{ $product['name'] }}</h5>

                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">Ingredients: {{ $product['Ingredients'] }}</p>
                                <p class="card-text">Description: {{ $product['Description'] }}</p>
                                <p class="card-text">{{ $product['Expired Date'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection
