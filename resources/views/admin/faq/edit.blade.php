@extends('admin.layouts.master')
@section('title', 'Edit FAQs')
@section('style')
@endsection

@section('body-section')
    <section class="input-validation dashboard-analytics">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('faq.update',$faq->id) }}" novalidate
                                enctype="multipart/form-data" method="POST">
                                @method("PATCH")
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label>Question</label>
                                            <div class="controls">
                                                <input type="text" name="question" class="form-control" value="{{ $faq->question }}"
                                                    data-validation-required-message="question is required"
                                                    placeholder="Question">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label>Answer</label>
                                                    <div class="controls">
                                                        <input type="text" id="editor"  name="answer" class="form-control editor" value="{{ $faq->answer }}"
                                                            data-validation-required-message="Answer is required"
                                                            placeholder="Answer">
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
