@extends('admin.layouts.master')

@section('style')
    <style type="text/css">

    </style>
@endsection

@section('body-section')
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card bg-analytics text-white">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <img src="{{ asset('app-assets/images/elements/decore-left.png') }}" class="img-left">
                            <img src="{{ asset('app-assets/images/elements/decore-right.png') }}" class="img-right">
                            <div class="avatar avatar-xl bg-primary shadow mt-0">
                                <div class="avatar-content">
                                    <i class="feather icon-award white font-large-1"></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-2 text-white">Welcome To {{ auth()->user()->roles[0]->display_name }}
                                    Dashboard</h1>
                                <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new
                                    badge in your profile.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">98</h2>
                        <p class="mb-0">Total Orders</p>
                    </div>
                    <div class="card-content">
                        <div id="subscribe-gain-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-warning p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-package text-warning font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                        <p class="mb-0">Completed Orders</p>
                    </div>
                    <div class="card-content">
                        <div id="orders-received-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">23</h2>
                        <p class="mb-0">Today Orders </p>
                    </div>
                    <div class="card-content">
                        <div id="today-total-order"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-warning p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-package text-warning font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                        <p class="mb-0">Pending Orders</p>
                    </div>
                    <div class="card-content">
                        <div id="pending-orders"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-warning p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-package text-warning font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                        <p class="mb-0">Delivery Orders</p>
                    </div>
                    <div class="card-content">
                        <div id="delivery-orders"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">

                <!-- Filled Pills Start -->
                <section id="filled-pills">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Orders List</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <ul class="nav nav-pills nav-fill">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-tab-fill" data-toggle="pill" href="#home-fill"
                                                    aria-expanded="true">Today Orders</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile-tab-fill" data-toggle="pill"
                                                    href="#profile-fill" aria-expanded="false">Future Orders</a>
                                            </li>

                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane" id="home-fill"
                                                aria-labelledby="home-tab-fill" aria-expanded="true">
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

                                                                    <td class="product-name">{{ $item->order_number }}</td>
                                                                    <td class="product-category">{{ $item->transaction_id }}
                                                                    </td>
                                                                    <td class="product-category">{{ $item->first_name }}
                                                                        {{ $item->last_name }}</td>
                                                                    <td class="product-category">{{ $item->total }}</td>
                                                                    <td class="product-category">

                                                                        <form method="POST"
                                                                            action="{{ route('order.change.status') }}">
                                                                            @csrf
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $item->id }}">

                                                                            <!-- Default option -->
                                                                            <select name="status"
                                                                                onchange="this.form.submit()"
                                                                                style="border: none;">
                                                                                <option value="{{ $item->status }}"
                                                                                    selected hidden>
                                                                                    {{ strtoupper($item->status) }}
                                                                                </option>

                                                                                <!-- Dropdown for selecting permissions -->
                                                                                @can('order-pending')
                                                                                    <option value="pending"
                                                                                        {{ $item->status == 'pending' ? 'selected' : '' }}>
                                                                                        PENDING</option>
                                                                                @endcan
                                                                                @can('order-accept')
                                                                                    <option value="accept"
                                                                                        {{ $item->status == 'accept' ? 'selected' : '' }}>
                                                                                        ACCEPT</option>
                                                                                @endcan
                                                                                @can('order-ready')
                                                                                    <option value="ready"
                                                                                        {{ $item->status == 'ready' ? 'selected' : '' }}>
                                                                                        READY</option>
                                                                                @endcan
                                                                                @can('order-cancel')
                                                                                    <option value="cancel"
                                                                                        {{ $item->status == 'cancel' ? 'selected' : '' }}>
                                                                                        CANCEL</option>
                                                                                @endcan
                                                                                @can('order-complete')
                                                                                    <option value="complete"
                                                                                        {{ $item->status == 'complete' ? 'selected' : '' }}>
                                                                                        COMPLETE</option>
                                                                                @endcan
                                                                                @can('order-route')
                                                                                    <option value="in-route"
                                                                                        {{ $item->status == 'in-route' ? 'selected' : '' }}>
                                                                                        IN ROUTE</option>
                                                                                @endcan
                                                                                @can('order-in-process')
                                                                                    <option value="in-process"
                                                                                        {{ $item->status == 'in-process' ? 'selected' : '' }}>
                                                                                        IN PROCESS
                                                                                    </option>
                                                                                @endcan

                                                                                <!-- Add other status options as needed -->
                                                                            </select>
                                                                        </form>



                                                                    </td>

                                                                    <td class="product-price">
                                                                        {{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y ') }}
                                                                    </td>
                                                                    <td class="product-action">
                                                                        <a class=""
                                                                            href="{{ route('orders.show', $item->id) }}"><span
                                                                                class=" "><i
                                                                                    class="feather icon-eye"></i></span></a>

                                                                    </td>
                                                                </tr>
                                                            @empty
                                                            @endforelse

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- DataTable ends -->
                                            </div>
                                            <div class="tab-pane active" id="profile-fill" role="tabpanel"
                                                aria-labelledby="profile-tab-fill" aria-expanded="false">
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

                                                                    <td class="product-name">{{ $item->order_number }}
                                                                    </td>
                                                                    <td class="product-category">
                                                                        {{ $item->transaction_id }}</td>
                                                                    <td class="product-category">{{ $item->first_name }}
                                                                        {{ $item->last_name }}</td>
                                                                    <td class="product-category">{{ $item->total }}</td>
                                                                    <td class="product-category">

                                                                        <form method="POST"
                                                                            action="{{ route('order.change.status') }}">
                                                                            @csrf
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $item->id }}">

                                                                            <!-- Default option -->
                                                                            <select name="status"
                                                                                onchange="this.form.submit()"
                                                                                style="border: none;">
                                                                                <option value="{{ $item->status }}"
                                                                                    selected hidden>
                                                                                    {{ strtoupper($item->status) }}
                                                                                </option>

                                                                                <!-- Dropdown for selecting permissions -->
                                                                                @can('order-pending')
                                                                                    <option value="pending"
                                                                                        {{ $item->status == 'pending' ? 'selected' : '' }}>
                                                                                        PENDING</option>
                                                                                @endcan
                                                                                @can('order-accept')
                                                                                    <option value="accept"
                                                                                        {{ $item->status == 'accept' ? 'selected' : '' }}>
                                                                                        ACCEPT</option>
                                                                                @endcan
                                                                                @can('order-ready')
                                                                                    <option value="ready"
                                                                                        {{ $item->status == 'ready' ? 'selected' : '' }}>
                                                                                        READY</option>
                                                                                @endcan
                                                                                @can('order-cancel')
                                                                                    <option value="cancel"
                                                                                        {{ $item->status == 'cancel' ? 'selected' : '' }}>
                                                                                        CANCEL</option>
                                                                                @endcan
                                                                                @can('order-complete')
                                                                                    <option value="complete"
                                                                                        {{ $item->status == 'complete' ? 'selected' : '' }}>
                                                                                        COMPLETE</option>
                                                                                @endcan
                                                                                @can('order-route')
                                                                                    <option value="in-route"
                                                                                        {{ $item->status == 'in-route' ? 'selected' : '' }}>
                                                                                        IN ROUTE</option>
                                                                                @endcan
                                                                                @can('order-in-process')
                                                                                    <option value="in-process"
                                                                                        {{ $item->status == 'in-process' ? 'selected' : '' }}>
                                                                                        IN PROCESS
                                                                                    </option>
                                                                                @endcan

                                                                                <!-- Add other status options as needed -->
                                                                            </select>
                                                                        </form>



                                                                    </td>

                                                                    <td class="product-price">
                                                                        {{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y ') }}
                                                                    </td>
                                                                    <td class="product-action">
                                                                        <a class=""
                                                                            href="{{ route('orders.show', $item->id) }}"><span
                                                                                class=" "><i
                                                                                    class="feather icon-eye"></i></span></a>

                                                                    </td>
                                                                </tr>
                                                            @empty
                                                            @endforelse

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- DataTable ends -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Filled Pills End -->
            </div>
        </div>


    </section>
@endsection




@section('script')
@endsection
