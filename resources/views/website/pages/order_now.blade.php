@extends('website.layouts.master')
@section('title', 'Order Now')
@section('style')
    <style>
        tabs {
            border: none;
            margin-top: 15px;
        }

        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%;
        }

        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block;
        }

        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0;
        }

        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0;
        }

        .tab-content {
            overflow: hidden;
        }

        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
        }

        /* .card {
          margin-top: 50px;
          background: #eee;
          padding: 3em;
          line-height: 1.5em; } */

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .product-title,
        .price,
        .sizes,
        .colors {
            text-transform: UPPERCASE;
            font-weight: bold;
        }

        .checked,
        .price span {
            color: #ff9f1a;
        }

        .product-title {
            margin-bottom: 0px;
        }

        .rating,
        .product-description,
        .price,
        .vote,
        .sizes {
            margin-bottom: 15px;
        }

        .product-title {
            margin-top: 0;
        }

        .size {
            margin-right: 10px;
        }

        .size:first-of-type {
            margin-left: 40px;
        }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px;
        }

        .color:first-of-type {
            margin-left: 20px;
        }

        .add-to-cart,
        .like {
            background: #ff9f1a;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease;
        }

        .add-to-cart:hover,
        .like:hover {
            background: #b36800;
            color: #fff;
        }

        .not-available {
            text-align: center;
            line-height: 2em;
        }

        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff;
        }

        .orange {
            background: #ff9f1a;
        }

        .green {
            background: #85ad00;
        }

        .blue {
            background: #0076ad;
        }

        .tooltip-inner {
            padding: 1.3em;
        }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }

            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }

            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        /*# sourceMappingURL=style.css.map */
    </style>

@endsection

@section('content')



    <div class="container-fluid order">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h5 class="pt-5"><span class="product" style="color:#E7232B">Order </span> <span style="color: black;"
                            class="header">Now</span></h5>
                </div>
            </div>
        </div>
    </div>



    <div class="d-grid col-sm-11 col-md-4 mx-auto mt-4">
        <div class="container">

            <form role="search" id="form1">
                <input type="search" id="query1" name="q" placeholder="Search..."
                    aria-label="Search through site content">
                <button style="border:0px">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>
    <section>
        <div class="container py-5">
            <div class="row">
                <h5 id="h5">Related Food</h5>
                @foreach ($data['products'] as $item)

                <div class="col-sm-12 col-md-4 col-lg-3 mb-4 mb-lg-0 mt-5 mb-5">
                    <a href="{{ route('product.details') }}">
                        <div class="card1">
                            <div class="d-flex justify-content-between p-3 icon">

                                {{-- <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                    style="width: 35px; height: 35px;">
                                    <i class="fa-regular fa-heart" style="color:white"></i>
                                </div>

                                <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong mt-1"
                                    style="width: 35px; height: 35px; ">

                                    <i class="fa-regular fa-eye" style="color:white;"></i>
                                </div> --}}
                            </div>

                            @php
                                $img = $item->image??''
                            @endphp
                            <img src="{{ asset($img)}}" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                id="product" class="card-img-top" alt="products" />
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">{{ $item->category->name??'' }}</a></p>
                                    <p class="small text-danger">
                                        {{-- <s>$1099</s> --}}
                                    </p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{ $item->name??'' }}</h5>
                                    <h5 class="text-dark mb-0">${{ $item->price }}</h5>
                                </div>

                                <div class="d-flex justify-content-between mb-2">

                                    {{-- <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach


            </div>

            {{-- <div class="row mt-5 mb-5">
                <div class="col-sm-12 col-md-4 col-lg-3 mb-4 mb-lg-0">
                    <div class="card1">
                        <div class="d-flex justify-content-between p-3 icon">

                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                style="width: 35px; height: 35px;">
                                <i class="fa-regular fa-heart" style="color:white"></i>
                            </div>

                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong mt-1"
                                style="width: 35px; height: 35px; ">

                                <i class="fa-regular fa-eye" style="color:white;"></i>
                            </div>
                        </div>


                        <img src="{{ asset('assets/website/images/p1.png')}}" class="img-fluid" id="product" class="card-img-top"
                            alt="Laptop" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                <p class="small text-danger"><s>$1099</s></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">HP Notebook</h5>
                                <h5 class="text-dark mb-0">$999</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">

                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 mb-4 mb-md-0">
                    <div class="card1">
                        <div class="d-flex justify-content-between p-3 icon">

                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                style="width: 35px; height: 35px;">
                                <i class="fa-regular fa-heart" style="color:white"></i>
                            </div>

                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong mt-1"
                                style="width: 35px; height: 35px;">

                                <i class="fa-regular fa-eye" style="color:white"></i>
                            </div>
                        </div>
                        <img src="{{ asset('assets/website/images/p2.png')}}" class="img-fluid" id="product" class="card-img-top"
                            alt="Laptop" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                <p class="small text-danger"><s>$1199</s></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">HP Envy</h5>
                                <h5 class="text-dark mb-0">$1099</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">

                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 mb-4 mb-md-0">
                    <div class="card1">
                        <div class="d-flex justify-content-between p-3 icon">

                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                style="width: 35px; height: 35px;">
                                <i class="fa-regular fa-heart" style="color:white"></i>
                            </div>

                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong mt-1"
                                style="width: 35px; height: 35px;">

                                <i class="fa-regular fa-eye" style="color:white"></i>
                            </div>
                        </div>
                        <img src="{{ asset('assets/website/images/p3.png')}}" class="img-fluid" id="product" class="card-img-top"
                            alt="Gaming Laptop" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                <p class="small text-danger"><s>$1399</s></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Toshiba B77</h5>
                                <h5 class="text-dark mb-0">$1299</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-3 mb-4 mb-md-0">
                    <div class="card1">
                        <div class="d-flex justify-content-between p-3 icon">

                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                style="width: 35px; height: 35px;">
                                <i class="fa-regular fa-heart" style="color:white"></i>
                            </div>

                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong mt-1"
                                style="width: 35px; height: 35px;">

                                <i class="fa-regular fa-eye" style="color:white"></i>
                            </div>
                        </div>
                        <img src="{{ asset('assets/website/images/p4.png')}}" class="img-fluid" id="product" class="card-img-top"
                            alt="Gaming Laptop" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                <p class="small text-danger"><s>$1399</s></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Toshiba B77</h5>
                                <h5 class="text-dark mb-0">$1299</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">

                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
        </div>
    </section>









    <div class="faqsfooter">
        @include('website.includes.footer')

    </div>

@endsection

@section('script')


@endsection
