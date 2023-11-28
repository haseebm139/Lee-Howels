@extends('website.layouts.master')
@section('title', 'Meal Assessment')
@section('style')
@endsection

@section('content')
    {{-- @include('website.includes.timer') --}}
    <div class="container-fluid mental-assement-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('assets/website/images/mental-assement-removebg-preview.png')}}" class="img-fluid rounded mx-auto d-block">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center pb-5" style="color:black">QUESTIONS</h1>
                    <form class="row g-5">
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">What is your <strong>objective?</strong></label>
                            <select id="inputState" class="form-select">
                                <option selected>Gain Weight</option>
                                <option>LORIM</option>
                                <option>LORIM</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">How old are <strong>you?</strong></label>
                            <select id="inputState" class="form-select">
                                <option selected>14 or Younger</option>
                                <option>15 or Younger</option>
                                <option>16 or Younger</option>
                            </select>
                        </div>



                        <!-- <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div> -->
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">What is your <strong> gender? </strong></label>
                            <select id="inputState" class="form-select">
                                <option selected>Men</option>
                                <option>Women</option>

                            </select>
                        </div>


                        <div class="col-md-6">
                            <label for="inputState" class="form-label">What is your height & <strong> weight?
                                </strong></label>
                            <div id="columen">
                                <div class="mr-1">
                                    <input type="text" class="form-control " id="inputZip" placeholder="Height">
                                </div>
                                <div class="ml-1">
                                    <input type="text" class="form-control mr-1" id="inputZip" placeholder="Weight">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip" placeholder="Weight">
                    </div> -->


                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Which image best <strong> describes your body?
                                </strong></label>
                            <select id="inputState" class="form-select">
                                <option selected>Hourglass</option>
                                <option>Hourglass</option>

                            </select>
                        </div>



                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Are you <strong> pregnant or
                                    breastfeeding?</strong></label>
                            <select id="inputState" class="form-select">
                                <option selected>Yes, I am pregnant</option>
                                <option>Yes, I am pregnant</option>

                            </select>
                        </div>


                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Do you have any <strong> dietary requirements?
                                </strong></label>
                            <select id="inputState" class="form-select">
                                <option selected>I eat all food groups</option>
                                <option>I eat all food groups</option>

                            </select>
                        </div>



                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Do you suffer from any of the following <strong>
                                    medical conditions?</strong></label>
                            <select id="inputState" class="form-select">
                                <option selected>Non</option>
                                <option>Yes, I am pregnant</option>

                            </select>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="container fitness">
            <div class="row">
                <p class="text-center">How physically active are you?</p>
                <div class="col-md-2 d-md-none"></div>
                <div class="col-md-3 col-lg-3 pt-2 pb-2">
                    <div class="text-center" id="fitness">
                        <p style="font-size:15px">Fitness 3-5 Time a Week</p>
                        <img src="{{ asset('assets/website/images/fitness1.png')}}" class="img-fluid" alt="">
                    </div>

                </div>


                <div class="col-md-3 col-lg-3  pt-2 pb-2">
                    <div class="text-center" id="fitness">
                        <p style="font-size:15px">Fitness 3-5 Time a Week</p>
                        <img src="{{ asset('assets/website/images/fitness1.png')}}" class="img-fluid" alt="">
                    </div>

                </div>


                <div class="col-md-3 col-lg-3 pt-2 pb-2">

                    <div class="text-center" id="fitness">
                        <p style="font-size:15px">Fitness 3-5 Time a Week</p>
                        <img src="{{ asset('assets/website/images/fitness1.png')}}" class="img-fluid" alt="">
                    </div>

                </div>

                <div class="col-md-3 col-lg-3 pt-2 pb-2">
                    <div class="text-center" id="fitness">
                        <p style="font-size:15px">Fitness 3-5 Time a Week</p>
                        <img src="{{ asset('assets/website/images/fitness1.png')}}" class="img-fluid" alt="">
                    </div>

                </div>

                <div class="col-md-3 d-md-none"></div>
            </div>
        </div>
    </div>




    <div class="container-fluid fitness ">
        <div class="container fitness">
            <div class="row">
                <p class="text-center">How physically active are you?</p>
                <div class="col-md-2 d-md-none"></div>
                <div class="col-md-3 col-lg-3 pt-2 pb-2">


                </div>


                <div class="col-md-3 col-lg-3  pt-2 pb-2">
                    <div class="text-center" id="fitness">
                        <p style="font-size:15px">Request a personalized call</p>
                        <img src="{{ asset('assets/website/images/requestcall.png')}}" class="img-fluid" alt="">
                    </div>

                </div>


                <div class="col-md-3 col-lg-3 pt-2 pb-2">

                    <div class="text-center" id="fitness">
                        <p style="font-size:15px">Fitness 3-5 Time a Week</p>
                        <img src="{{ asset('assets/website/images/aii.png')}}" class="img-fluid" alt="">
                    </div>

                </div>

                <div class="col-md-3 col-lg-3 pt-2 pb-2">


                </div>

                <div class="col-md-3 d-md-none"></div>

            </div>
            <div class="d-grid col-4 mx-auto mt-4">
                <button type="button" class="btn btn-lg">Order Food</button>
            </div>
        </div>





    </div>




    <div class="container-fluid blogpost">

        <div class="container bootstrap snippets bootdey">
            <div class="row">
                <h3 class="text-center pb-3" style="font-weight:600">RESULTS</h3>
                <div class="col-md-4">
                    <a href="javascript:;" class="widget widget-image">
                        <div class="widget-image-cover">
                            <img src="{{ asset('assets/website/images/megaplan1.png')}}" class="img-fluid object-fit-cover">
                        </div>
                        <div class="widget-image-info">
                            <h5>Meal Plain 01 </h5>
                            <p>
                                Weekly
                            </p>

                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="javascript:;" class="widget widget-image">
                        <div class="widget-image-cover">
                            <img src="{{ asset('assets/website/images/megaplan1.png')}}" class="img-fluid object-fit-cover">
                        </div>
                        <div class="widget-image-info">
                            <h5>Meal Plain 01 </h5>
                            <p>
                                Weekly
                            </p>

                        </div>
                    </a>
                </div>



                <div class="col-md-4">
                    <a href="javascript:;" class="widget widget-image">
                        <div class="widget-image-cover">
                            <img src="{{ asset('assets/website/images/megaplan1.png')}}" class="img-fluid object-fit-cover">
                        </div>
                        <div class="widget-image-info">
                            <h5>Meal Plain 01 </h5>
                            <p>
                                Weekly
                            </p>

                        </div>
                    </a>
                </div>

            </div>
            <div class="d-grid col-sm-12 col-md-4 mx-auto mt-4">
                <button class="snip1258">DOWNLOAD<i class="fa-solid fa-download"></i></button>
            </div>
        </div>
    </div>

    <div class="faqsfooter">
        @include('website.includes.footer')
    </div>
@endsection

@section('script')
@endsection
