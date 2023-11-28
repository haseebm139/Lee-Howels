@extends('website.layouts.master')
@section('title', 'Home')
@section('style')
@endsection

@section('content')
    <div class="container-fluid hero">
        <div class="container hero">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h2>
                        <span class="banner" style="font-weight: 300;"> Nourishing </span> <br>With Hygienic Food
                    </h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typese tting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the.
                    </p>

                    <button type="button" class="btn btn-lg">Order Food</button>
                </div>
                <!-- <div class="col-md-12 col-lg-6"></div> -->
            </div>
        </div>
    </div>



    <div class="container-fluid about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/website/images/aboutus.png') }}" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <h1>
                        About <span style="color:#282828;font-weight: 300; font-family: poppins;">Us</span>

                    </h1>
                    <p id="lorim">Lorem Ipsum is simply dummy text of the printing and typese tting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the. Lorem Ipsum is simply dummy text
                        of the printing and typesetting industry. Lorem Ipsum has been the</p>


                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5">
                                <p id="lorim " class="lorim" style="margin-top:-15px">Lorem Ipsum is simply dummy text
                                    of the printing and typese tting industry. Lorem Ipsum.</p>

                            </div>

                            <div class="col-md-2 imagediv">
                                <img src="{{ asset('assets/website/images/Ellipse 49.png') }}" class="img-fluid ">
                            </div>

                            <div class="col-md-5">
                                <img src="{{ asset('assets/website/images/qrapp.png') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid discover ">

        <div class="row">
            <div class="col-md-12 col-lg-4">
                <h3>
                    <span style="color:#000"> Discover</span> <span style="font-weight: 400;">Our</span> <span
                        style="color: #E7232B;font-weight: 400;">Customized </span> <span
                        style="font-weight: 400;">Meals</span>
                </h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typese tting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the. Lorem Ipsum is simply.</p>
            </div>

            <div class="col-md-12 col-lg-8">


                <div class="tabs-to-dropdown ">
                    <div class="nav-wrapper d-flex align-items-center justify-content-center">
                        <ul class="nav nav-pills d-none d-md-flex " id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-company-tab" data-toggle="pill" href="#pills-company"
                                    role="tab" aria-controls="pills-company" aria-selected="true">View All</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-product-tab" data-toggle="pill" href="#pills-product"
                                    role="tab" aria-controls="pills-product" aria-selected="false">Convenience PLans</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-news-tab" data-toggle="pill" href="#pills-news" role="tab"
                                    aria-controls="pills-news" aria-selected="false">Vegetarian lifestyle</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Cleansing</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-locarb-tab" data-toggle="pill" href="#pills-locarbs"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Low Carbs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-company" role="tabpanel"
                            aria-labelledby="pills-company-tab">
                            <section class="ftco-section">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="featured-carousel owl-carousel">
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
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-2.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Fast</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-3.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Maintain</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-4.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Lunch</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-5.jpg') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Lorim</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="pills-product" role="tabpanel"
                            aria-labelledby="pills-product-tab">
                            <section class="ftco-section">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="featured-carousel owl-carousel">
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
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-2.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Fast</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-3.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Maintain</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-4.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Lunch</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-5.jpg') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Lorim</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
                            <section class="ftco-section">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="featured-carousel owl-carousel">
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
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-2.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Fast</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-3.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Maintain</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-4.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Lunch</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-5.jpg') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Lorim</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <section class="ftco-section">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="featured-carousel owl-carousel">
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
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-2.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Fast</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-3.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Maintain</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-4.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Lunch</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-5.jpg') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Lorim</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>


                        <div class="tab-pane fade" id="pills-locarbs" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <section class="ftco-section">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="featured-carousel owl-carousel">
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
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-2.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Fast</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-3.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Maintain</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-4.png') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Lunch</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="work">
                                                    <div class="img d-flex align-items-end justify-content-center"
                                                        style="background-image: url('{{ asset('assets/website/images/work-5.jpg') }}');">
                                                        <div class="text w-100 text-center">
                                                            <span class="cat">Lorim</span>
                                                            <h3><a href="#">Lorem Ipsum dolor</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>


    <section class="container-fluid iconbox mt-5">
        <div class="container padding">
            <div class="row ">
                <div class="col-12">
                    <h5 class="text-center"><span style="color: #E7232B;" class="header">Our</span> <span
                            class="product">Product</span></h5>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4 pt-5">

                    <div class="sec2parentdiv">
                        <div class="sec2row2col">
                            <div>
                                <img src="{{ asset('assets/website/images/icon1.png') }}" style=" width: 200px;"
                                    alt="" class="img-fluid" />
                            </div>
                            <div style="margin-left:10px">
                                <h5>100% Natural</h5>
                                <span id="span">Choose from select produce to start. Keep, add, or remove
                                    items.</span>
                            </div>
                        </div>
                        <!-------------second div-------------->
                        <div class="sec2row2col">
                            <div>
                                <img src="{{ asset('assets/website/images/icon2.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                            <div>
                                <h5>100% Natural</h5>
                                <span id="span">Eat local, consume local, closer to nature.</span>
                            </div>
                        </div>
                        <!-------------third div-------------->
                        <div class="sec2row2col">
                            <div>
                                <img src="{{ asset('assets/website/images/icon3.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                            <div>
                                <h5>Curated Products</h5>
                                <span id="span">Eat local, consume local, closer to nature.</span>
                            </div>
                        </div>
                        <!-------------forth div-------------->

                    </div>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('assets/website/images/ourproduc.png') }}" class="img-fluid" srcset="">
                </div>

                <div class="col-md-4 pt-5">

                    <div class="sec2parentdiv">
                        <div class="sec2row2col">
                            <div>
                                <img src="{{ asset('assets/website/images/icon1.png') }}" style=" width: 200px;"
                                    alt="" class="img-fluid" />
                            </div>
                            <div style="margin-left:10px">
                                <h5>100% Natural</h5>
                                <span id="span">Choose from select produce to start. Keep, add, or remove
                                    items.</span>
                            </div>
                        </div>
                        <!-------------second div-------------->
                        <div class="sec2row2col">
                            <div>
                                <img src="{{ asset('assets/website/images/icon2.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                            <div>
                                <h5>100% Natural</h5>
                                <span id="span">Eat local, consume local, closer to nature.</span>
                            </div>
                        </div>
                        <!-------------third div-------------->
                        <div class="sec2row2col">
                            <div>
                                <img src="{{ asset('assets/website/images/icon3.png') }}" alt=""
                                    class="img-fluid" />
                            </div>
                            <div>
                                <h5>Curated Products</h5>
                                <span id="span">Eat local, consume local, closer to nature.</span>
                            </div>
                        </div>
                        <!-------------forth div-------------->

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('website.includes.howitworks')

    <div class="container">
        <div class="row mt-n5">
            <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="blog-grid">
                    <div class="blog-grid-img position-relative"><img alt="img"
                            src="{{ asset('assets/website/images/post1 (3).png') }}"></div>
                    <div class="blog-grid-text p-4">
                        <h3 class="h5 mb-3"><a href="#!">Business tool for your customer</a></h3>
                        <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                        <div class="meta meta-style2">
                            <ul>
                                <li><a href="#!"><i class="fas fa-calendar-alt"></i> 10 Jul,
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>2022
                                    </a></li>
                                <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
                                <li><a href="#!"><i class="fas fa-comments"></i> 38</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="blog-grid">
                    <div class="blog-grid-img position-relative"><img alt="img"
                            src="{{ asset('assets/website/images/post1 (2).png') }}"></div>
                    <div class="blog-grid-text p-4">
                        <h3 class="h5 mb-3"><a href="#!">Growth your business strategy</a></h3>
                        <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                        <div class="meta meta-style2">
                            <ul>
                                <li><a href="#!"><i class="fas fa-calendar-alt"></i> 25 Jun,
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>2022
                                    </a></li>
                                <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
                                <li><a href="#!"><i class="fas fa-comments"></i> 68</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".6s"
                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="blog-grid">
                    <div class="blog-grid-img position-relative"><img alt="img"
                            src="{{ asset('assets/website/images/post1 (1).png') }}"></div>
                    <div class="blog-grid-text p-4">
                        <h3 class="h5 mb-3"><a href="#!">Business people success master plan</a></h3>
                        <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                        <div class="meta meta-style2">
                            <ul>
                                <li><a href="#!"><i class="fas fa-calendar-alt"></i> 16 May,
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>2022
                                    </a></li>
                                <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
                                <li><a href="#!"><i class="fas fa-comments"></i> 58</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-6 wow fadeInUp" data-wow-delay=".6s"
            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
            <div class="col-12">
                <div class="pagination text-small text-uppercase text-extra-dark-gray">
                    <ul class="mt-5">
                        <li><a href="#!"><i class="fas fa-long-arrow-alt-left me-1 d-none d-sm-inline-block"></i>
                                Prev</a></li>
                        <li class="active"><a href="#!">1</a></li>
                        <li><a href="#!">2</a></li>
                        <li><a href="#!">3</a></li>
                        <li><a href="#!">Next <i
                                    class="fas fa-long-arrow-alt-right ms-1 d-none d-sm-inline-block"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
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
