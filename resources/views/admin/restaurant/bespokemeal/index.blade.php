@extends('admin.layouts.master')
@section('title', 'Bespoke Meal')
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
                            <div>
                            </div>

                            <a class="btn btn-primary ag-grid-export-btn waves-effect waves-light"
                                href="{{ route('bespoke-meal.create') }}"> Create Stock</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Meal Type</th>
                                        <th>Cost Per 1000g</th>
                                        <th>Serving Size Buffet</th>
                                        <th>Cost Per Serving</th>
                                        <th>Cost Per 1g</th>
                                        <th>Yield %</th>
                                        <th>Cal</th>
                                        <th>Carbs</th>
                                        <th>Fat</th>
                                        <th>Protein</th>
                                        <th>Stock</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                @forelse ($data as $key => $item)

                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        @php
                                            $image = $item->image;

                                        @endphp
                                        {{-- <td><img class="profile-user-img img-fluid"
                                                src='{{ asset("$item->image") }}' width="50px"
                                                alt="User profile picture"></td> --}}
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->meal_type??'N/A' }}</td>
                                        <td>{{ numberFormate($item->cost_price_per_1000g,2) }}</td>
                                        <td>{{ numberFormate($item->serving_size_buffet_g,2)  }}</td>
                                        <td>{{ numberFormate($item->cost_per_serving,2) }}</td>
                                        <td>{{ numberFormate($item->cost_per_1g,2) }}</td>
                                        <td>{{ $item->yield_percentage }}</td>
                                        <td>{{ numberFormate($item->cal,2) }}</td>
                                        <td>{{ numberFormate($item->carbs,2) }}</td>
                                        <td>{{ numberFormate($item->fat,2) }}</td>
                                        <td>{{ numberFormate($item->protein,2) }}</td>
                                        <td style="{{ $item->stock < 5 ? 'color: red;' : '' }}">{{ numberFormate($item->stock, 2) }}</td>


                                        <td>
                                            <div class="form-group">
                                                <div
                                                    class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                    <input type="checkbox" class="custom-control-input switch-input"
                                                        id="{{ $item->id }}"
                                                        {{ $item->status == 1 ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="{{ $item->id }}"></label>
                                                </div>
                                            </div>
                                        </td>

                                        <td>

                                            <a class="btn btn-primary"
                                                href="{{ route('bespoke-meal.edit', $item->id) }}"><span
                                                    class="action-edit"><i class="feather icon-edit"></i></span></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <form method="post" action="{{ route('bespoke-meal.destroy', $item->id) }}"
                                                style="margin-top: -38px;margin-left: 150px";>
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    onclick="return confirm('Are You Sure Want To Delete This..??')"
                                                    class="btn btn-danger btn btn-default generalsetting_admin"><span
                                                        class="action-delete"><i
                                                            class="feather icon-trash"></i></span></button>
                                            </form>

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
                url: "{{ route('bespoke-meal.change.status') }}",
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
