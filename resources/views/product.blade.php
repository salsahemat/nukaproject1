@extends('Layout.app')
<!--sebagai layout website!-->

@section('container')
    <div class="d-flex justify-content-center align-item-center">
        <img src="../images/gabung.png" width="500rem">
    </div>
    <h1 class="text-center">{{ $maintitle }}</h1>
    <div class="row">
        @foreach ($products as $product)
            <section class="col-lg-6 mt-5">
                <div class="card m-auto shadow rounded mb-5">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset("images/{$product['image_name']}") }}" class="img-fluid rounded-start">
                            <h5 class="card-title text-center">{{ $product['name'] }}</h5>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text"> Ingredients: <br> {{ $product['Ingredients'] }}</p>
                                <p class="card-text">Description: <br> {{ $product['Description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <div class="container-fluid col-12 mb-lg-5 text-center w-75">
            <h1 class="mt-5 fs-1" style="font-size: 100px">The Instructions</h1>
            <div class="row">
                <div class="col-lg-3">
                    <img src="../images/1.png" class="img-fluid m-3 h-100 w-100 rounded-2">
                </div>
                <div class="col-lg-3">
                    <img src="../images/2.png" class="img-fluid m-3 h-100 w-100 rounded-2">
                </div>
                <div class="col-lg-3">.
                    <img src="../images/3.png" class="img-fluid m-3 h-100 w-100 rounded-2">
                </div>
                <div class="col-lg-3">.
                    <img src="../images/4.png" class="img-fluid m-3 h-100 w-100 rounded-2">
                </div>
            </div>
        </div>
        {{-- <div class="card-group mt-5">
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-tree " viewBox="0 0 16 16">
                    <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z"/>
                  </svg>
              <div class="card-body">
                <h5 class="card-title">Vegan Friendly</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div> --}}
    </div>
@endsection
