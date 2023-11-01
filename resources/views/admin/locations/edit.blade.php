@extends('admin.layouts.master')

@section('header-script')
@endsection

@section('body-section')
    <section class="input-validation dashboard-analytics">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('locations.update',$location->id) }}" novalidate
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>State</label>
                                            <div class="controls">
                                                <input type="text" name="state" class="form-control"
                                                    data-validation-required-message="This field is required"
                                                    placeholder="State" value="{{$location->state}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <div class="controls">
                                                <input type="text" name="city" class="form-control" required
                                                    data-validation-required-message="This field is required"
                                                    placeholder="City" value="{{$location->city}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <div class="controls">
                                                <input type="text" name="zip_code" class="form-control" required
                                                    data-validation-required-message="This field is required"
                                                    placeholder="Zip codey" value="{{$location->zip_code}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <div class="controls">
                                                <input type="text" name="address" class="form-control"
                                                    data-validation-required-message="This field is required"
                                                    placeholder="Address"  value="{{$location->address}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>House Address</label>
                                            <div class="controls">
                                                <input type="text" name="house_address"
                                                     class="form-control"
                                                    data-validation-required-message="This field is required"
                                                    placeholder="House address"  value="{{$location->house_address}}">
                                            </div>
                                        </div>
                                       
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('footer-section')
@endsection

@section('footer-script')
    <!-- <script src="{{ asset('assets/js/countrystatecity.js?v2') }}"></script> -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDMzBtl2TKTecLe_NEmSup5U-nkj93Ch7o"></script>
    <link rel="stylesheet" href="{{ asset('app-assets/css/toastr.min.css') }}" />

    <script src="{{ asset('app-assets/js/waitMe.js') }}"></script>
    <script src="{{ asset('app-assets/js/toastr.min.js') }}"></script>

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
@endsection
