@extends('admin.layouts.master')
@section('title',"Meal Product")
@section('style')
@endsection

@section('body-section')
    <br>
    <section id="dashboard-analytics">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div></div>
                            @can('product-create')
                                <a class="btn btn-primary ag-grid-export-btn waves-effect waves-light" href="{{ route('product.create') }}"> Create Product</a>
                            @endcan
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Product Title</th>
                                        <th>Product Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                @forelse ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        @php
                                            $image = $item->image

                                        @endphp
                                        <td><img class="profile-user-img img-fluid"
                                                src='{{ asset("$item->image") }}' width="50px"
                                                alt="User profile picture"></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>


                                        <td>
                                            <div class="form-group">
                                                <div
                                                    class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                    <input type="checkbox" class="custom-control-input switch-input"
                                                        id="{{ $item->id }}" {{ $item->status == 1 ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="{{ $item->id }}"></label>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            {{-- <a class="btn btn-info" href="{{ route('product.show', $item->id) }}"><span
                                                    class="action-edit"><i class="feather icon-eye"></i></span></a> --}}
                                            @can('product-edit')        
                                            <a class="btn btn-primary" href="{{ route('product.edit', $item->id) }}"><span
                                                    class="action-edit"><i class="feather icon-edit"></i></span></a>
                                            @endcan        
                                            @can('product-delete')  
                                            <form method="post" action="{{ route('product.destroy', $item->id) }}"
                                                style="display:inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    onclick="return confirm('Are You Sure Want To Delete This..??')"
                                                    class="btn btn-danger btn btn-default generalsetting_admin"><span
                                                        class="action-delete"><i
                                                            class="feather icon-trash"></i></span></button>
                                            </form>
                                           @endcan 

                                        </td>
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
