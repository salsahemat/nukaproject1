@extends('Layout.app')

@section('container')
    <div class="about-us-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <div class="img-head pe-0" style="background-color: #F2F5C8">
                        <img src="../images/gandum.jpeg" width="100%"/>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="text-head fs-3 mt-5">What is Ohmly Barn?</h2>
                    <div class="break-small mb-2"></div>
                    <p class="text-para mt-3">
                        Ohmlybarn is a business that was founded in late 2021
                        with the aim of being an alternative to cow's milk
                        for those who are lactose intolerant, allergic and support a vegan lifestyle. Ohmlybarn has a
                        Zerowaste and refill concept to reduce the use of plastic waste.
                    </p>
                    <div class="row">
                        <div class="col-12 col-md-4 mb-2 mb-md-6">
                            <div class="box mt-3 d-flex justify-content-center align-item-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-cloud-sun-fill text-center" viewBox="0 0 16 16">
                                    <path
                                        d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z" />
                                    <path
                                        d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129zm4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377zM14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                </svg>
                                <h4 class="mb-0 mt-3 pb-3">100% NATURAL</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-2 mb-md-6">
                            <div class="box mt-3 d-flex justify-content-center align-item-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-recycle me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z" />
                                </svg>
                                <h4 class="mb-0 mt-3 pb-3">ZERO WASTE</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-2 mb-md-6">
                            <div class="box mt-3 d-flex justify-content-center align-item-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-tree-fill me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5z" />
                                </svg>
                                <h4 class="mb-0 mt-3 pb-3">VEGAN FRIENDLY</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="container">
        <div class="row">
            <h1 class="text-center">{{ $maintitle }}</h1> <br>
            <p class="lh-lg text-center">Ohmly Barn is a dairy brand that has the <br> acronym (O)at (H)ome(m)ade(ly) (Barn).
                <br>
                We provide the best gluten free food <br> withlactose intolerance.
            </p>

        </div>
        <div class="row">
            <div class="col">
                <img src="../images/achieve.png">
            </div>
            <div class="row">
                <div class="col-lg-2 d-flex justify-content-center align-item-center">
                 
                </div>
                <div class="col-lg-2 d-flex justify-content-center align-item-center">
                 
                </div>
                <div class="col-lg-2 d-flex justify-content-center align-item-center">
                    <a href="https://instagram.com/ohmly.barn?igshid=YmMyMTA2M2Y=" target="_blank">
                        <!-- direct to new tab -->
                        <img src="../images/instagram(1).svg" style="width: 50px; height: 50px;" class="">
                    </a>
                </div>
                <div class="col-lg-2 d-flex justify-content-center align-item-center">
                    <a href="https://api.whatsapp.com/send/?phone=6281314729716&text&type=phone_number&app_absent=0"
                        target="_blank">
                        <img src="../images/whatsapp.svg" style="width: 50px; height: 50px;" class="">
                    </a>
                </div>
                <div class="col-lg-2 d-flex justify-content-center align-item-center">
                   
                </div>
                <div class="col-lg-2 d-flex justify-content-center align-item-center">
                 
                </div>
            </div>
        </div>
    </div>
    </div> --}}
    {{-- <div class="container">
        <div class="row">
            <h1 class="text-center">{{ $maintitle }}</h1> <br>
            <p class="lh-lg text-center">
                Ohmlybarn is a business that was founded in late 2021 <br>
                 with the aim of being an alternative to cow's milk <br>
                  for those who are lactose intolerant, allergic and support a vegan lifestyle. <br>
                   Ohmlybarn has a Zerowaste and refill concept to reduce the use of plastic waste.
            </p>
            <div class="col-12 col-lg-6 mb-4">
                <div class="img-head">
                    <img src="../images/achieve.png" class="w-50">
                </div>
            </div> 
        </div>
    </div> --}}
@endsection
