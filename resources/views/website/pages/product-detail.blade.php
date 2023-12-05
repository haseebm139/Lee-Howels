@extends('website.layouts.master')
@section('title', 'Product Details')
@section('style')
    <style>
        @media (min-width: 576px) {
            .rounded-nav {
                border-radius: 50rem !important;
            }
        }

        @media (min-width: 576px) {
            .rounded-nav .nav-link {
                border-radius: 50rem !important;
            }
        }

        /* With arrow tabs */

        .with-arrow .nav-link.active {
            position: relative;
        }

        .with-arrow .nav-link.active::after {
            content: '';
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 6px solid #2b90d9;
            position: absolute;
            bottom: -6px;
            left: 50%;
            transform: translateX(-50%);
            display: block;
        }

        /* lined tabs */

        .lined .nav-link {
            border: none;
            border-bottom: 3px solid transparent;
        }

        .lined .nav-link:hover {
            border: none;
            border-bottom: 3px solid transparent;
        }

        .lined .nav-link.active {
            background: none;
            color: #555;
            border-color: #2b90d9;
        }



        .nav-pills .nav-link {
            color: #555;
        }

        .text-uppercase {
            letter-spacing: 0.1em;
        }
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

    <input type="hidden" id="id" name="id" value="{{ $data['product']->id }}">
    <input type="hidden" id="name" name="name" value="{{ $data['product']->name }}">
    <input type="hidden" id="price" name="price" value="{{ $data['product']->price }}">
    <input type="hidden" id="image" name="image" value="{{ $data['product']->image }}">
    <div class="container cart pb-1 mt-5">
        <div class="card order">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                            @php
                                $image = $data['product']->image ?? '';
                            @endphp
                            <div class="tab-pane active" id="pic-1"><img src="{{ asset($image) }}" /></div>
                            {{-- <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div> --}}
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                        src="{{ asset($image) }}" /></a></li>
                            {{-- <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a>
                            </li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a>
                            </li>
                            <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a>
                            </li>
                            <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a>
                            </li> --}}
                        </ul>

                    </div>
                    <div class="details col-md-6 ">
                        <h3 class="product-title">{{ $data['product']->name ?? '' }}
                            {{-- <span class="badge badge-secondary">In
                                Stock</span> --}}
                        </h3>
                        <div class="rating">
                            <div class="stars">

                                {{-- <span class="sale-price"> <del> $48.00 </del> </span> --}}
                                <span class="sale-retal"> ${{ $data['product']->price ?? '' }} </span>
                                {{-- <span class="badge badge-danger ml-3">64% Off</span> --}}

                                <hr>

                            </div>

                            {{-- <div class="stars pt-3">
                                <div class="forflex">
                                    <div>
                                        <span class="brand">{{ $data['product']->category->name ?? '' }}</span>
                                        <span class="ml-3 mr-3">
                                            <img src="images/brand.png" class="img-fluid">

                                        </span>
                                    </div>

                                    <div>
                                        <span class="brand">Share Item :</span>
                                        <i class="fa-brands fa-square-x-twitter" style="font-size:25px"></i>
                                        <i class="fa-brands fa-facebook" style="font-size:25px"></i>
                                        <i class="fa-brands fa-pinterest" style="font-size:25px"></i>
                                        <i class="fa-brands fa-square-instagram mr-5" style="font-size:25px"></i>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia
                            sem sem! Repudiandae et! Massa . <a href="#" style="color:red;font-weight:600">Read
                                More</a></p> --}}

                        <div class="action">
                            <i class="fa-solid fa-circle-minus fa-2xl" onclick="decrementValue()"></i>
                            <span id="counter">1</span>
                            <i class="fa-solid fa-circle-plus fa-2xl" onclick="incrementValue()"></i>



                            {{-- <a href="{{ route('billing.information') }}"> <button class="add-to-cart btn btn-default ml-3"
                                    type="button">Add to Cart
                                    <i class="fa-solid fa-cart-shopping fa-2xl"></i></button></a> --}}
                            <a href="javascript:;"> <button class="add-to-cart btn btn-default ml-3" type="button">Add to
                                    Cart
                                    <i class="fa-solid fa-cart-shopping fa-2xl"></i></button></a>
                            {{-- <button class="like btn btn-default" type="button"><span
                                    class="fa fa-heart fa-2xl"></span></button> --}}

                            <p class="tag "> <strong> Category : </strong> {{ $data['product']->category->name ?? '' }}
                            </p>
                            {{-- <p class="tag "> <strong> Tag : </strong> Vegetables Healthy Chinese Cabbage Green Cabbage
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container order">
        <hr>
    </div> --}}

    {{-- <div class="container cart ">

        <div class="bg-white rounded ">
            <!-- Lined tabs-->
            <ul id="myTab2" role="tablist"
                class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
                <li class="nav-item flex-sm-fill">
                    <a id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2"
                        aria-selected="true"
                        class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Home</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2"
                        aria-selected="false" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0">Profile</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2"
                        aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0">Contact</a>
                </li>
            </ul>
            <div id="myTab2Content" class="tab-content">
                <div id="home2" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="leade font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.</p>
                            <ul class="list-group">
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <p> irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.</p>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <img src="images/video.png" class="img-fluid">
                            <div class="row mt-2 p-2" style="border: 2px solid #E6E6E6">
                                <div class="col-md-6 d-flex">
                                    <div class="">
                                        <h5> <img src="images/trustedpartner.png" class="img-fluid" style="width:auto">
                                            Trusted Partner</h5>
                                        <p>Lorem Ipsum is simply dummy text </p>
                                    </div>
                                </div>


                                <div class="col-md-6 d-flex">
                                    <div class="">
                                        <h5> <img src="images/trustedpartner.png" class="img-fluid" style="width:auto">
                                            Trusted Partner</h5>
                                        <p>Lorem Ipsum is simply dummy text </p>
                                    </div>
                                </div>
                            </div>


                        </div>




                    </div>
                </div>
                <div id="profile2" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="leade font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.</p>
                            <ul class="list-group">
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <p> irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.</p>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <img src="images/video.png" class="img-fluid">
                            <div class="row mt-2 p-2" style="border: 2px solid #E6E6E6">
                                <div class="col-md-6 d-flex">
                                    <div class="">
                                        <h5> <img src="images/trustedpartner.png" class="img-fluid" style="width:auto">
                                            Trusted Partner</h5>
                                        <p>Lorem Ipsum is simply dummy text </p>
                                    </div>
                                </div>


                                <div class="col-md-6 d-flex">
                                    <div class="">
                                        <h5> <img src="images/trustedpartner.png" class="img-fluid" style="width:auto">
                                            Trusted Partner</h5>
                                        <p>Lorem Ipsum is simply dummy text </p>
                                    </div>
                                </div>
                            </div>


                        </div>




                    </div>
                </div>
                <div id="contact2" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="leade font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.</p>
                            <ul class="list-group">
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <li class="align-items-center d-flex">
                                    <a class="btn text-white btn-floating m-1 me-3" style="background-color: #00B207;">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </a>
                                    <span> Porta ac consectetur ac </span>
                                </li>
                                <p> irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.</p>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <img src="images/video.png" class="img-fluid">
                            <div class="row mt-2 p-2" style="border: 2px solid #E6E6E6">
                                <div class="col-md-6 d-flex">
                                    <div class="">
                                        <h5> <img src="images/trustedpartner.png" class="img-fluid" style="width:auto">
                                            Trusted Partner</h5>
                                        <p>Lorem Ipsum is simply dummy text </p>
                                    </div>
                                </div>


                                <div class="col-md-6 d-flex">
                                    <div class="">
                                        <h5> <img src="images/trustedpartner.png" class="img-fluid" style="width:auto">
                                            Trusted Partner</h5>
                                        <p>Lorem Ipsum is simply dummy text </p>
                                    </div>
                                </div>
                            </div>


                        </div>




                    </div>
                </div>
            </div>
            <!-- End lined tabs -->
        </div>

    </div> --}}

    <div class="container order">
        <hr>
    </div>




    <section>
        <div class="container py-5">
            <div class="row">
                <h5 id="h5" class="text-center pb-5">Related Food</h5>
                @foreach ($data['product_all'] as $item)
                    <div class="col-sm-12 col-md-4 col-lg-3 mb-4 mb-lg-0">
                        <div class="card1">
                            <a href="{{ route('product.details', $item->id) }}">
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

                                @php
                                    $img = $item->image;
                                @endphp
                                <img src="{{ asset($img) }}" class="img-fluid" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" id="product" class="card-img-top" alt="Laptop" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="{{ route('product.details', $item->id) }}"
                                                class="text-muted">{{ $item->category->name ?? '' }}</a></p>
                                        <p class="small text-danger">
                                            {{-- <s>$1099</s> --}}
                                        </p>
                                    </div>
                                    <a href="{{ route('product.details', $item->id) }}" >
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0">{{ $item->name ?? '' }}</h5>
                                            <h5 class="text-dark mb-0">${{ $item->price }}</h5>
                                        </div>
                                    </a>

                                    {{-- <div class="d-flex justify-content-between mb-2">

                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-sm-12 col-md-4 col-lg-3 mb-4 mb-md-0">
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
                        <img src="images/p2.png" class="img-fluid" id="product" class="card-img-top"
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
                        <img src="images/p3.png" class="img-fluid" id="product" class="card-img-top"
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
                        <img src="images/p4.png" class="img-fluid" id="product" class="card-img-top"
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
                </div> --}}

            </div>


        </div>
    </section>
    <div class="faqsfooter">
        @include('website.includes.footer')

    </div>

@endsection

@section('script')
    <script>
        // Function to decrement the value
        function decrementValue() {
            var counterElement = document.getElementById('counter');
            var currentValue = parseInt(counterElement.innerText);

            // Ensure the value does not go below 1
            if (currentValue > 1) {
                counterElement.innerText = currentValue - 1;
            }
        }

        // Function to increment the value
        function incrementValue() {
            var counterElement = document.getElementById('counter');
            var currentValue = parseInt(counterElement.innerText);

            // Increment the value
            counterElement.innerText = currentValue + 1;
        }

        $('.add-to-cart').click(function(e) {

            var name = $('#name').val();
            var price = $('#price').val();
            var image = $('#image').val();
            var id = $('#id').val();
            var counterElement = document.getElementById('counter');
            var quantity = parseInt(counterElement.innerText);
            if (name && price && image && quantity >= 1) {

                $.ajax({
                    type: "POST",
                    url: "{{ route('add.cart') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id,
                        name: name,
                        price: price,
                        image: image,
                        quantity: quantity,

                    },
                    success: function(response) {
                        if (response.type == 'success') {

                            toastr.success(response.message);
                            window.location.href = "{{ route('billing.information') }}";
                        }

                        if (response.type == 'error') {

                            toastr.error(response.message);
                        }
                    }
                });
            }



        });
    </script>

@endsection
