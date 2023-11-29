@extends('admin.layouts.master')
@section('title', 'Edit Bespoke meal')
@section('style')
@endsection

@section('body-section')
    <section class="input-validation dashboard-analytics">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('bespoke-meal.update',$stockList->id) }}" novalidate
                                enctype="multipart/form-data" method="POST">
                                @method("PATCH")
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <strong>Item Name</strong>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" value="{{ $stockList->name }}"
                                                    data-validation-required-message="Item Name is required"
                                                    placeholder="Item Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <strong>Meal Type</strong>
                                            <select class="select2-theme form-control" name="meal_type"
                                                id="select2-theme">

                                                <option >Select Meal Type</option>
                                                <option value="base" @if ($stockList->meal_type == 'base') selected @endif>Base</option>
                                                <option value="protein" @if ($stockList->meal_type == 'protein') selected @endif >Protein</option>
                                                <option value="vegetable" @if ($stockList->meal_type == 'vegetable') selected @endif>Vegetable</option>
                                                <option value="topping_extra" @if ($stockList->meal_type == 'topping_extra') selected @endif>Topping_extra</option>



                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <strong>Stock Available</strong>
                                                    <div class="controls">
                                                        <input type="text" name="stock" class="form-control" value="{{ $stockList->stock }}"
                                                            data-validation-required-message="Stock is required"
                                                            placeholder="Stock Available">
                                                    </div>
                                                </div>


                                        <div class="form-group">
                                            <div class="row">

                                                <div class="col-12">

                                                    <div class="d-inline-block mb-1"><strong>CAL</strong>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" value="0.00" name="cal"
                                                                    data-bts-step="0.05" data-bts-decimals="3"
                                                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"> <strong>Carbs</strong>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" value="0.00" name="carbs"
                                                                    data-bts-step="0.05" data-bts-decimals="3"
                                                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"><strong>Fat</strong>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" value="0.00" name="fat"
                                                                    data-bts-step="0.05" data-bts-decimals="2"
                                                                    data-bts-max="1000"
                                                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"><strong>Protein</strong>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" value="0.00" name="protein"
                                                                    data-bts-step="0.05" data-bts-decimals="3"
                                                                    data-bts-max="1000"
                                                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-inline-block mb-1 not-gram-input"><strong>Cost</strong>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" value="0.00" name="item_cost" id="item_cost"
                                                                    data-bts-step="5" data-bts-decimals="2"
                                                                    data-bts-max="1000"
                                                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;">
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="1" id="showInputs">
                                                    <span class="vs-checkbox vs-checkbox-lg">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Show Gram in Field</span>
                                                </div>
                                            </fieldset>

                                            <div class="row gram-input">
                                                <div class="col-12">
                                                    <div class="d-inline-block mb-1">
                                                        <strong>Cost Per 1000g</strong>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg ">
                                                                <input type="number" value="1.00"
                                                                    name="cost_price_per_1000g" data-bts-step="0.05"
                                                                    data-bts-decimals="2" data-bts-max="1000"
                                                                    data-bts-min="1" id="cost_price_per_1000g"
                                                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"><strong>Serving Size Buffet</strong>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="number" value="1.00" data-bts-min="1"
                                                                    name="serving_size_buffet_g" id="serving_size_buffet_g" data-bts-step="0.05"
                                                                    data-bts-decimals="3"
                                                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"><strong>Cost Per Serving</strong>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="number" value="1.00" data-bts-min="1"
                                                                    name="cost_per_serving"  id="cost_per_serving"  data-bts-step="0.05"
                                                                    data-bts-decimals="3"
                                                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1">
                                                        <strong>Cost Per 1g</strong>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input id="cost_per_1g" type="number" value="1.00"
                                                                      name="cost_per_1g"
                                                                      style="border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="d-inline-block mb-1"> <strong>Yield %</strong>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="number" value="1.00" data-bts-min="1"
                                                                    name="yield_percentage" data-bts-step="0.05"
                                                                    data-bts-decimals="3" data-bts-max="100"
                                                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
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




@section('script')
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

        $('#showInputs').on('change', function() {
            $('.gram-input').toggle(this.checked);
            if ($("#showInputs").val() == 0) {
                $("#showInputs").val(1)
                //$('.not-gram-input').hide()
            }else{
                $("#showInputs").val(0)
              //  $('.not-gram-input').show()
            }
        }).trigger('change');
    </script>
      <script>
        function calculatePricePerOneGram() {
            var cost_price_per_1000g = $('#cost_price_per_1000g').val();
            var cal_cost_per_1g = cost_price_per_1000g / 1000;
            $('#cost_per_1g').val(cal_cost_per_1g.toFixed(3));
        }

        function calculateCost() {
            var serving_size_buffet_g = $('#serving_size_buffet_g').val();
            var cost_per_serving = $('#cost_per_serving').val();
            var result = serving_size_buffet_g * cost_per_serving;
            $('#item_cost').val(result);
        }

        $(document).ready(function() {
            calculateCost();

            $('#cost_price_per_1000g').keyup(function(e) {
                calculatePricePerOneGram();
            });

            $('#serving_size_buffet_g, #cost_per_serving').keyup(function(e) {
                calculateCost();
            });

            $('#showInputs').on('change', function() {
                $('.gram-input').toggle(this.checked);
                if ($("#showInputs").val() == 0) {
                    $("#showInputs").val(1)
                    $('.not-gram-input').hide()
                } else {
                    $("#showInputs").val(0)
                    $('.not-gram-input').show()
                }
            }).trigger('change');
        });
    </script>

@endsection
