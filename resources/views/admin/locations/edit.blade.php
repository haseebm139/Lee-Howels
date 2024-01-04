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
                                            <strong>Address</strong>
                                            <div class="controls">
                                                <input type="text" name="address" id="autocomplete"  class="form-control"
                                                    data-validation-required-message="This field is required"
                                                    placeholder="Address"  value="{{$location->address}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <strong>State</strong>
                                            <div class="controls">
                                                <input type="text" name="state" id="state" class="form-control"
                                                    data-validation-required-message="This field is required"
                                                    placeholder="State" value="{{$location->state}}">
                                            </div>
                                        </div>
                                        <input type="hidden" name="address" id="address"  value="{{$location->address}}">
                                        <input type="hidden" name="lat" id="lat"  value="{{$location->lat}}">
                                        <input type="hidden" name="long" id="long" value="{{$location->long}}">
                                        <div class="form-group">
                                            <strong>City</strong>
                                            <div class="controls">
                                                <input type="text" name="city" id="city" class="form-control" required
                                                    data-validation-required-message="This field is required"
                                                    placeholder="City" value="{{$location->city}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <strong>Zip Code</strong>
                                            <div class="controls">
                                                <input type="text" name="zip_code" id="postal_code" class="form-control" required
                                                    data-validation-required-message="This field is required"
                                                    placeholder="Zip codey" value="{{$location->zip_code}}">
                                            </div>
                                        </div>

                                        <!--<div class="form-group">-->
                                        <!--    <strong>House Address</strong>-->
                                        <!--    <div class="controls">-->
                                        <!--        <input type="text" name="house_address"-->
                                        <!--             class="form-control"-->
                                        <!--            data-validation-required-message="This field is required"-->
                                        <!--            placeholder="House address"  value="{{$location->house_address}}">-->
                                        <!--    </div>-->
                                        <!--</div>-->

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

@section('script')
    <!-- <script src="{{ asset('assets/js/countrystatecity.js?v2') }}"></script> -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=AIzaSyB2zcZWYTrnjovVYwCR9zwHJwVEtUEufJk&libraries=places"></script>
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

<script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {

            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();

                var postalCode = getComponent(place, 'postal_code');
                var state = getComponent(place, 'administrative_area_level_1');
                var city = getComponent(place, 'locality');
                var country = getComponent(place, 'country');
                $('#postal_code').val(postalCode);
                $('#state').val(state);
                $('#city').val(city);
                $('#country').val(country);
                $('#address').val(place.formatted_address);
                if (place.geometry) {
                    var latitude = place.geometry.location.lat();
                    var longitude = place.geometry.location.lng();

                    $('#long').val(latitude);
                   $('#lat').val(longitude);
                }

            });

            function getComponent(place, componentType) {
                for (var i = 0; i < place.address_components.length; i++) {
                    var component = place.address_components[i];
                    if (component.types.includes(componentType)) {
                        return component.long_name;
                    }
                }
                return '';
            }
        }
    </script>
@endsection
