@extends('admin.layouts.master')
@section('title', 'Orders')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/data-list-view.css') }}">
@endsection

@section('body-section')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Orders View</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('orders.index') }}">Order</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Data list view starts -->
            <section id="data-list-view" class="data-list-view-header">
                <div class="action-btns d-none">
                    <div class="btn-dropdown mr-1 mb-1">
                        <div class="btn-group dropdown actions-dropodown">

                        </div>
                    </div>
                </div>

                <!-- DataTable starts -->
                <div class="table-responsive">
                    <table class="table data-list-view">
                        <thead>

                            <tr>

                                <th>ORDER NUMBER</th>
                                <th>TRANSACTION ID</th>
                                <th>Customer NAME</th>
                                <th>TOTAL</th>
                                <th>STATUS</th>
                                <th>Date</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $key => $item)

                            <tr>

                                <td class="product-name">{{$item->order_number}}</td>
                                <td class="product-category">{{$item->transaction_id}}</td>
                                <td class="product-category">{{$item->first_name}} {{$item->last_name}}</td>
                                <td class="product-category">{{$item->total}}</td>
                                <td class="product-category">
          
                <form method="POST" action="{{ route('order.change.status') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                  <select name="status" onchange="this.form.submit()" style="border: none;">
    <option value="pending" {{ $item->status == 'pending' ? 'selected' : '' }}>PENDING</option>
    <option value="accept" {{ $item->status == 'accept' ? 'selected' : '' }}>ACCEPT</option>
    <option value="ready" {{ $item->status == 'ready' ? 'selected' : '' }}>READY</option>
    <!-- Add other status options as needed -->
</select>
                </form>
          
            
        </td>

                                <td class="product-price">{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y ') }} </td>
                                <td class="product-action">
                                    <a class="" href="{{route('orders.show',$item->id)}}"><span class=" "><i
                                                class="feather icon-eye"></i></span></a>

                                </td>
                            </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- DataTable ends -->

                <!-- add new sidebar starts -->
                <div class="add-new-data-sidebar">
                    <div class="overlay-bg"></div>
                    <div class="add-new-data">
                        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                            <div>
                                <h4 class="text-uppercase">List View Data</h4>
                            </div>
                            <div class="hide-data-sidebar">
                                <i class="feather icon-x"></i>
                            </div>
                        </div>
                        <div class="data-items pb-3">
                            <div class="data-fields px-2 mt-3">
                                <div class="row">
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-name">Name</label>
                                        <input type="text" class="form-control" id="data-name">
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-category"> Category </label>
                                        <select class="form-control" id="data-category">
                                            <option>Audio</option>
                                            <option>Computers</option>
                                            <option>Fitness</option>
                                            <option>Appliance</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-status">Order Status</label>
                                        <select class="form-control" id="data-status">
                                            <option>Pending</option>
                                            <option>Canceled</option>
                                            <option>Delivered</option>
                                            <option>On Hold</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-price">Price</label>
                                        <input type="text" class="form-control" id="data-price">
                                    </div>
                                    <div class="col-sm-12 data-field-col data-list-upload">
                                        <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                            <div class="dz-message">Upload Image</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                            <div class="add-data-btn">
                                <button class="btn btn-primary">Add Data</button>
                            </div>
                            <div class="cancel-data-btn">
                                <button class="btn btn-outline-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- add new sidebar ends -->
            </section>
            <!-- Data list view end -->

        </div>
    </div>
    </div>
    <!-- END: Content-->


@endsection




@section('script')
    <script src="{{ asset('app-assets/js/scripts/ui/data-list-view.js') }}"></script>
    <script>
        $(function() {
            $(".example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": []
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}

        $(".switch-input").change(function() {

            if (this.checked)
                var status = 1;
            else
                var status = 0;
            $.ajax({
                url: "{{ route('order.change.status') }}",
                type: 'GET',
                /*dataType: 'json',*/
                data: {
                    'id': this.id,
                    'status': status
                },
                success: function(response) {
                    if (response) {
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(error) {
                    toastr.error("Some error occured!");
                }
            });
        });
    </script>
@endsection
