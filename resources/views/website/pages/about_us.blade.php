@extends('website.layouts.master')
@section('title', 'About us')
@section('style')
@endsection

@section('content')
    <div class="container-fluid about-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-4">
                    <h5 class="pt-5"><span class="product" style="color:#E7232B">About </span> <span style="color: black;"
                            class="header">Us</span></h5>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid fitgreek">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/website/images/aboutus.png')}}" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <h5 class="pt-5"><span style="color: #E7232B;" class="header">Fit </span> <span class="header"
                            style="color:#1E1E1E">Greek</span></h5>

                    <p>Lorem Ipsum is simply dummy text of the printing and typese tting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries,</p>
                    <button type="button" class="btn btn-lg">Read More</button>
                </div>
            </div>
        </div>
    </div>


    @include('website.includes.timer')

    <div class="container-fluid">
        <div class="container whatdonotbuy">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('assets/website/images/wedonnotbuy.png')}}" class="img-fluid">
                </div>

                <div class="col-md-6">
                <h5 class="pt-5"><span style="color: black; font-weight:400" class="headerfontsize">We do not Buy from the  </span> <span class="headerfontsize" style="color:#E7232B">Open Market</span></h5>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typese tting industry. Lorem Ipsum has been the industry's standard dummy text ever since the. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>

                        <div class="row">
                            <div class="col-12 col-sm-5 col-md-12 col-lg-5 mb-4 mb-lg-0">
                                <div class="d-flex">
                                    <div class="">
                                     <h5> <img src="{{ asset('assets/website/images/trustedpartner.png')}}" class="img-fluid"> Trusted Partner</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and.</p>
                                    </div>
                                </div>


                                <div class="d-flex">
                                    <div class="">
                                     <h5> <img src="{{ asset('assets/website/images/past-deliver.png')}}" class="img-fluid"> Trusted Partner</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-1   m-auto dividernone">
                                <img src="{{ asset('assets/website/images/divider.png')}}" class="img-fluid"  srcset="">
                            </div>


                            <div class="col-12 col-sm-5 col-md-12 col-lg-5 mb-4 mb-lg-0">
                                <div class="d-flex">
                                    <div class="">
                                     <h5> <img src="{{ asset('assets/website/images/shopping.png')}}" class="img-fluid"> Online Order</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and.</p>
                                    </div>
                                </div>


                                <div class="d-flex">
                                    <div class="">
                                     <h5> <img src="{{ asset('assets/website/images/call.png')}}" class="img-fluid"> 24/7 Service</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and.</p>
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
    </div>

    @include('website.includes.howitworks')
    @include('website.includes.iframe')
    @include('website.includes.footer')
@endsection

@section('script')
@endsection
