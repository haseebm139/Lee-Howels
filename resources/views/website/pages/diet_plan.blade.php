@extends('website.layouts.master')
@section('title', 'Diet Plan')
@section('style')
@endsection

@section('content')
    <div class="container-fluid about-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="pt-5"><span class="product" style="color:#E7232B">Diet </span> <span style="color: black;"
                            class="header">Plans</span></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid diet-plan-discover">

        <div class="container">




            <div class="row">

                <h3 class="text-center" id="discover_diet">
                    <span style="color:#000"> Discover</span> <span style="font-weight: 400;">Our</span> <span
                        style="color: #E7232B;font-weight: 400;">Customized </span> <span
                        style="font-weight: 400;">Meals</span>
                </h3>
                <p class="text-center" id="discover_diet">Lorem Ipsum is simply dummy text of the printing and typese tting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the. Lorem Ipsum is simply.

                </p>

                <div class="col">
                    <div class="tabs-to-dropdown">
                        <div class="nav-wrapper d-flex align-items-center justify-content-center">
                            <ul class="nav nav-pills d-none d-md-flex" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-company-tab" data-toggle="pill"
                                        href="#pills-company" role="tab" aria-controls="pills-company"
                                        aria-selected="true">View All</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-product-tab" data-toggle="pill" href="#pills-product"
                                        role="tab" aria-controls="pills-product" aria-selected="false">Convenience
                                        PLans</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-news-tab" data-toggle="pill" href="#pills-news"
                                        role="tab" aria-controls="pills-news" aria-selected="false">Vegetarian
                                        lifestyle</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                        role="tab" aria-controls="pills-contact" aria-selected="false">Cleansing</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-lowcarbs-tab" data-toggle="pill" href="#pills-lowcarbs"
                                        role="tab" aria-controls="pills-lowcarbs" aria-selected="false">Low Carbs</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-company" role="tabpanel"
                                aria-labelledby="pills-company-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                        </div>
                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                        </div>


                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-product" role="tabpanel"
                                aria-labelledby="pills-product-tab">
                                <div class="tab-pane fade show active" id="pills-company" role="tabpanel"
                                    aria-labelledby="pills-company-tab">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                                <div class="item">
                                                    <div class="work">
                                                        <div class="img d-flex align-items-end justify-content-center"
                                                            style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                            <div class="text w-100 text-center">
                                                                <span class="cat ">MOM</span>
                                                                <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                                <div class="item">
                                                    <div class="work">
                                                        <div class="img d-flex align-items-end justify-content-center"
                                                            style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                            <div class="text w-100 text-center">
                                                                <span class="cat ">MOM</span>
                                                                <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                                <div class="item">
                                                    <div class="work">
                                                        <div class="img d-flex align-items-end justify-content-center"
                                                            style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                            <div class="text w-100 text-center">
                                                                <span class="cat ">MOM</span>
                                                                <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                                <div class="item">
                                                    <div class="work">
                                                        <div class="img d-flex align-items-end justify-content-center"
                                                            style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                            <div class="text w-100 text-center">
                                                                <span class="cat ">MOM</span>
                                                                <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                                <div class="item">
                                                    <div class="work">
                                                        <div class="img d-flex align-items-end justify-content-center"
                                                            style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                            <div class="text w-100 text-center">
                                                                <span class="cat ">MOM</span>
                                                                <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                                <div class="item">
                                                    <div class="work">
                                                        <div class="img d-flex align-items-end justify-content-center"
                                                            style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                            <div class="text w-100 text-center">
                                                                <span class="cat ">MOM</span>
                                                                <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                                <div class="item">
                                                    <div class="work">
                                                        <div class="img d-flex align-items-end justify-content-center"
                                                            style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                            <div class="text w-100 text-center">
                                                                <span class="cat ">MOM</span>
                                                                <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                                <div class="item">
                                                    <div class="work">
                                                        <div class="img d-flex align-items-end justify-content-center"
                                                            style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                            <div class="text w-100 text-center">
                                                                <span class="cat ">MOM</span>
                                                                <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            </div>
                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                                <div class="item">
                                                    <div class="work">
                                                        <div class="img d-flex align-items-end justify-content-center"
                                                            style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                            <div class="text w-100 text-center">
                                                                <span class="cat ">MOM</span>
                                                                <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                                <div class="item">
                                                    <div class="work">
                                                        <div class="img d-flex align-items-end justify-content-center"
                                                            style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                            <div class="text w-100 text-center">
                                                                <span class="cat ">MOM</span>
                                                                <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                        </div>
                                        <div class="col-md-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                        </div>


                                    </div>

                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3  pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 col-lg-4 pt-4 pb-4">
                                        </div>
                                        <div class="col-md-4 col-lg-3 col-lg-4 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 col-lg-4 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                        </div>


                                    </div>

                                </div>
                            </div>




                            <div class="tab-pane fade" id="pills-lowcarbs" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3  pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3  pt-4 pb-4">
                                        </div>
                                        <div class="col-md-4 col-lg-3  pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3  pt-4 pb-4">
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-1.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat ">MOM</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-lg-3 pt-4 pb-4">
                                        </div>



                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    @include('website.includes.timer')
    <div id="howitworksss">
        @include('website.includes.howitworks')

    </div>
    @include('website.includes.iframe')



    @include('website.includes.footer')
@endsection

@section('script')
    <script>
        const $tabsToDropdown = $(".tabs-to-dropdown");

        function generateDropdownMarkup(container) {
            const $navWrapper = container.find(".nav-wrapper");
            const $navPills = container.find(".nav-pills");
            const firstTextLink = $navPills.find("li:first-child a").text();
            const $items = $navPills.find("li");
            const markup = `
        <div class="dropdown d-md-none">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ${firstTextLink}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            ${generateDropdownLinksMarkup($items)}
          </div>
        </div>
      `;
            $navWrapper.prepend(markup);
        }

        function generateDropdownLinksMarkup(items) {
            let markup = "";
            items.each(function() {
                const textLink = $(this).find("a").text();
                markup += `<a class="dropdown-item" href="#">${textLink}</a>`;
            });

            return markup;
        }

        function showDropdownHandler(e) {
            // works also
            //const $this = $(this);
            const $this = $(e.target);
            const $dropdownToggle = $this.find(".dropdown-toggle");
            const dropdownToggleText = $dropdownToggle.text().trim();
            const $dropdownMenuLinks = $this.find(".dropdown-menu a");
            const dNoneClass = "d-none";
            $dropdownMenuLinks.each(function() {
                const $this = $(this);
                if ($this.text() == dropdownToggleText) {
                    $this.addClass(dNoneClass);
                } else {
                    $this.removeClass(dNoneClass);
                }
            });
        }

        function clickHandler(e) {
            e.preventDefault();
            const $this = $(this);
            const index = $this.index();
            const text = $this.text();
            $this.closest(".dropdown").find(".dropdown-toggle").text(`${text}`);
            $this
                .closest($tabsToDropdown)
                .find(`.nav-pills li:eq(${index}) a`)
                .tab("show");
        }

        function shownTabsHandler(e) {
            // works also
            //const $this = $(this);
            const $this = $(e.target);
            const index = $this.parent().index();
            const $parent = $this.closest($tabsToDropdown);
            const $targetDropdownLink = $parent.find(".dropdown-menu a").eq(index);
            const targetDropdownLinkText = $targetDropdownLink.text();
            $parent.find(".dropdown-toggle").text(targetDropdownLinkText);
        }

        $tabsToDropdown.each(function() {
            const $this = $(this);
            const $pills = $this.find('a[data-toggle="pill"]');

            generateDropdownMarkup($this);

            const $dropdown = $this.find(".dropdown");
            const $dropdownLinks = $this.find(".dropdown-menu a");

            $dropdown.on("show.bs.dropdown", showDropdownHandler);
            $dropdownLinks.on("click", clickHandler);
            $pills.on("shown.bs.tab", shownTabsHandler);
        });
    </script>
@endsection
