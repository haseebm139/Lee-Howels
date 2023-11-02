@extends('admin.layouts.master')
@section('title',"Orders")
@section('style')
@endsection

@section('body-section')
    <br>
    <section id="dashboard-analytics">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                       
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>OrderNo</th>
                                        <th>Txt Id</th>
                                        <th>Customer Name</th>
                                        
                                        <th>Total</th>
                                        <th>Status</th>
                                        @can('order-show')
                                        <th>Action</th>
                                        @endcan
                                    </tr>
                                </thead>

                                @forelse ($orders as $key => $item)
                                    <tr>
                                        <td>{{ $item->order_number }}</td>
                                        <td>{{ $item->transaction_id }}</td>
                                        <td>{{ $item->users->name??null }} {{ $item->users->last_name??null }}</td>
                                        <td>{{ $item->total }}</td>


                                        <td>{{$item->status}}</td>
                                        @can('order-show')
                                        <td>
                                             <a class="btn btn-info" href="{{ route('orders.show', $item->id) }}"><span
                                                    class="action-edit"><i class="feather icon-eye"></i></span></a> 
                                                 
                                        </td>
                                        @endcan
                                    </tr>
                                @empty
                                @endforelse
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




@section('script')
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
                url: "{{ route('product.change.status') }}",
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
