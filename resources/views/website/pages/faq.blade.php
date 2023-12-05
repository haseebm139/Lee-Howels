@extends('website.layouts.master')
@section('title', 'FAQ')
@section('style')
@endsection

@section('content')
    <div class="container-fluid order mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h5 class="pt-5"><span class="product" style="color:#E7232B">Frequently </span> <span
                            style="color: black;" class="header">Asked Questions</span></h5>
                </div>
            </div>
        </div>
    </div>
    <section class="faqs-section">
        <div class="container faqs">
            <div class="row ">
                <div class="col-md-12 col-lg-7">
                    <div class="card card-style1 border-0">
                        <div class="card-body p-4 p-md-5 p-xl-6">

                            <div id="accordion" class="accordion-style">
                                @foreach ($data as $key => $item)
                                    <div class="card mb-3">
                                        <div class="card-header" id="headingOne{{ $key }}">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne{{ $key }}" aria-expanded="true"
                                                    aria-controls="collapseOne{{ $key }}"><span
                                                        class="text-theme-secondary me-2"></span>
                                                    {!! $item->question !!}</button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne{{ $key }}"
                                            class="collapse @if ($key == 0) show @endif"
                                            aria-labelledby="headingOne{{ $key }}" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                {!! $item->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="card mb-3">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo"><span class="text-theme-secondary me-2"></span>
                                                Etiam lobortis massa eu nibh tempor elementum.</button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut
                                            tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu.
                                            Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate
                                            ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.

                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree"><span
                                                    class="text-theme-secondary me-2"></span> In elementum est a ante
                                                sodales iaculis.</button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut
                                            tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu.
                                            Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate
                                            ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.

                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour"><span class="text-theme-secondary me-2"></span>
                                                In elementum est a ante sodales iaculis.</button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut
                                            tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu.
                                            Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate
                                            ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive"><span class="text-theme-secondary me-2"></span>
                                                In elementum est a ante sodales iaculis.</button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                        data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut
                                            tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu.
                                            Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate
                                            ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.

                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <div class="faqsfooter">
        @include('website.includes.footer')
    </div>


@endsection

@section('script')


@endsection
