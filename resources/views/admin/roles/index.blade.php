@extends('admin.layouts.master')
@section('title',"Role")

@section('style')
@endsection

@section('body-section')
    <br>
    <section id="dashboard-analytics">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="">

                        <div class="card">

                            <div class="card-body">


                                    <div class="">
                                        <div class=" d-flex align-items-center">
                                            <div class="section-description-content flex-grow-1">
                                                <!-- <h1>Roles List</h1> -->
                                            </div>
                                            <div class="section-description-actions">
                                                @can('role-create')
                                                    <a href="{{ route('roles.create') }}" class="btn btn-primary">Add New Role</a>
                                                @endcan

                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="card">
                                <div class="card-body">
                                <table id="datatable4" class="table table-striped dataex-html5-selectors"  role="grid" aria-describedby="datatable4_info">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Role Name</th>
                                                {{-- <th>Status</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($roles)
                                                @forelse ($roles as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->display_name }}</td>
                                                        {{-- <td>{{ $item->status }}</td> --}}




                                                        <td>
                                                            {{-- <a href="{{ route('roles.show', $item->id) }}" class=""><span
                                                                    class="material-icons-outlined" style="color: green">
                                                                    visibility
                                                                </span></a> --}}
                                                                @can('user-edit')
                                                            <a href="{{ route('roles.edit', $item->id) }}" class=""><span
                                                                    class="material-icons-outlined fa fa-edit">
                                                                    edit
                                                                </span></a>
                                                             @endcan   
                                                            {{-- <a href="{{ route('role.del', $item->id) }}" class="">
                                                                <span class="material-icons-outlined " style="color: red">
                                                                    delete
                                                                </span>
                                                            </a> --}}
                                                            {{-- <a class="btn btn-info"
                                                                href="{{ route('roles.show', $item->id) }}"><span
                                                                    class="action-edit"><i
                                                                        class="feather icon-eye"></i></span></a>
                                                            <a class="btn btn-primary"
                                                                href="{{ route('roles.edit', $item->id) }}"><span
                                                                    class="action-edit"><i
                                                                        class="feather icon-edit"></i></span></a>

                                                                        --}}
                                                            @can('role-delete')            
                                                            <form method="post"
                                                                action="{{ route('roles.destroy', $item->id) }}"
                                                                style="display:inline";>
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    onclick="return confirm('Are You Sure Want To Delete This..??')"
                                                                    class=" btn btn-default generalsetting_admin"><span
                                                                        class="action-delete" style="color:red"><i
                                                                            class="fa fa-trash"></i> delete</span></button> 
                                                            </form>
                                                           @endcan 
                                                           

                                                        </td>
                                                    </tr>
                                                @empty
                                                @endforelse
                                            @endisset

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection




@section('script')
@endsection
