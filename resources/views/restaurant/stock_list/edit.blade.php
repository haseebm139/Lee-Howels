@extends('admin.layouts.master')
@section('title', 'Edit Stock')
@section('style')
@endsection

@section('body-section')
    <section class="input-validation dashboard-analytics">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('stock_list.update',$stockList->id) }}" novalidate
                                enctype="multipart/form-data" method="POST">
                                @method("PATCH")
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label>Item Name</label>
                                            <div class="controls">
                                                <input type="text" name="item" class="form-control" value="{{ $stockList->item }}"
                                                    data-validation-required-message="Item Name is required"
                                                    placeholder="Item Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="select2-theme form-control" name="category_id"
                                                id="select2-theme">
                                                @foreach ($categories as $item)
                                                    <option @if ($stockList->category->id == $item->id )
                                                        selected
                                                    @endif value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach



                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <div class="row">

                                                <div class="col-12">

                                                    <div class="d-inline-block mb-1"><label>CAL</label>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="touchspin"   name="cal"
                                                                    data-bts-step="0.05" data-bts-decimals="3"  value="{{ $stockList->cal??0 }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"> <label>Carbs</label>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="touchspin"   name="carbs"
                                                                    data-bts-step="0.05" data-bts-decimals="3"  value="{{ $stockList->carbs??0 }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"><label>Fat</label>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="touchspin"   name="fat"
                                                                    data-bts-step="0.05" data-bts-decimals="3"  value="{{ $stockList->fat??0 }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"><label>Protein</label>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="touchspin"   name="protein"
                                                                    data-bts-step="0.05" data-bts-decimals="3"  value="{{ $stockList->protein??0 }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-1 not-gram-input"><label>Cost</label>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="touchspin" value="{{ $stockList->item_cost??0 }}"
                                                                    name="item_cost" data-bts-step="5"
                                                                    data-bts-decimals="2">
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
                                                        <label>Cost Per 1000g</label>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg ">
                                                                <input type="text" class="touchspin"   name="cost_price_per_1000g"
                                                                    data-bts-step="0.05" data-bts-decimals="3" value="{{ $stockList->cost_price_per_1000g??0 }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"><label>Serving Size Buffet</label>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="touchspin"   name="serving_size_buffet_g"
                                                                    data-bts-step="0.05" data-bts-decimals="3"  value="{{ $stockList->serving_size_buffet_g??0 }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"><label>Cost Per Serving</label>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="touchspin"   name="cost_per_serving"
                                                                    data-bts-step="0.05" data-bts-decimals="3"  value="{{ $stockList->cost_per_serving??0 }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"> <label>Cost Per 1g</label>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="touchspin"   name="cost_per_1g"
                                                                    data-bts-step="0.05" data-bts-decimals="3"  value="{{ $stockList->cost_per_1g??0 }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block mb-1"> <label>Yield %</label>
                                                        <div class="controls">
                                                            <div class="input-group input-group-lg">
                                                                <input type="text" class="touchspin"   name="yield_percentage"
                                                                    data-bts-step="0.05" data-bts-decimals="3"  value="{{ $stockList->yield_percentage??0 }}">
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
                $('.not-gram-input').hide()
            }else{
                $("#showInputs").val(0)
                $('.not-gram-input').show()
            }
        }).trigger('change');
    </script>
@endsection
