<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Dashboard @yield('title') </title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="icon" href="{{ asset('assets/website/images/newlogo.png') }}">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/website/images/newlogo.png') }}"> --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/tether.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/tour/tour.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/toastr.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">


    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <style>
        .dt-buttons {
            display: none;
        }
    </style>
    <!-- END: Custom CSS-->
    @yield('style')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

{{-- Dark Color --}}
{{-- <body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout"> --}}

{{-- Light Color --}}
 
<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static"
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">



                    </div>
                    <ul class="nav navbar-nav float-right">


                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                @php $profile = auth()->user()->profile??null; @endphp
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name text-bold-600">{{ auth()->user()->first_name }}
                                        {{ auth()->user()->last_name }}</span><span
                                        class="user-status">Available</span></div><span><img class="round"
                                        src='{{ asset("$profile") }}' alt="avatar"
                                        height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="{{ route('admin.profile') }}"><i class="feather icon-user"></i> Edit
                                    Profile</a>
                                {{-- <a class="dropdown-item" href="app-email.html"><i
                                        class="feather icon-mail"></i> My
                                    Inbox</a>
                                    <a class="dropdown-item" href="app-todo.html"><i
                                        class="feather icon-check-square"></i> Task</a><a class="dropdown-item"
                                    href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a> --}}
                                <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="{{ route('logout') }}"><i class="feather icon-power"></i>
                                    Logout</a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span
                        class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Fit Geeks</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item @if (Route::currentRouteName() == 'admin.dashboard') active @endif"><a
                        href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i><span
                            class="menu-title" data-i18n="Dashboard">Dashboard</span></a>

                </li>
                @can(['user-list','staff-list'])
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                            data-i18n="User">User Management</span></a>
                    <ul class="menu-content">
                        @can('user-list')
                        <li class="@if (Route::currentRouteName() == 'users.index') active @endif"><a
                                href="{{ route('users.index') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="List">User List</span></a>
                        </li>
                        @endcan
                        @can('staff-list')
                        <li class="@if (Route::currentRouteName() == 'staff') active @endif"><a
                                href="{{ route('staff') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="View">Staff List</span></a>
                        </li>
                        @endcan

                    </ul>
                </li>
                 @endcan
                @can('role-list')
                    <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                                data-i18n="User">Roles Management</span></a>
                        <ul class="menu-content">
                            @can('role-list')
                            <li class="@if (Route::currentRouteName() == 'roles.index') active @endif"><a
                                    href="{{ route('roles.index') }}"><i class="feather icon-circle"></i><span
                                        class="menu-item" data-i18n="List">List</span></a>
                            </li>
                            @endcan
                            @can('role-create')
                            <li class="@if (Route::currentRouteName() == 'roles.create') active @endif"><a
                                    href="{{ route('roles.create') }}"><i class="feather icon-circle"></i><span
                                        class="menu-item" data-i18n="View">Create New Role</span></a>
                            </li>
                            @endcan

                        </ul>
                    </li>
                @endcan
                {{-- <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                            data-i18n="User">User Pattern</span></a>
                    <ul class="menu-content">
                        <li class="@if (Route::currentRouteName() == 'userspattern.index') active @endif"><a
                                href="{{ route('userspattern.index') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li class="@if (Route::currentRouteName() == 'userspattern.create') active @endif"><a
                                href="{{ route('userspattern.create') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="View">Create User</span></a>
                        </li>

                    </ul>
                </li> --}}
                @can('location-address-list')
                <li class="@if (Route::currentRouteName() == 'locations.index') active @endif nav-item"><a
                        href="{{ route('locations.index') }}"><i class="feather icon-info"></i><span
                            class="menu-title" data-i18n="User">Location Address</span></a>

                </li>
                @endcan

                @can('meal-list')
                <li class="@if (Route::currentRouteName() == 'category.index') active @endif nav-item"><a
                        href="{{ route('category.index') }}"><i class="feather icon-package"></i><span
                            class="menu-title" data-i18n="User">Meal Category</span></a>

                </li>
                @endcan

                @can('product-list')
                <li class="@if (Route::currentRouteName() == 'product.index') active @endif nav-item"><a
                        href="{{ route('product.index') }}"><i class="feather icon-layers"></i><span
                            class="menu-title" data-i18n="User">Meal Product</span></a>

                </li>
                @endcan

                @can('stock-list')
                <!--<li class="@if (Route::currentRouteName() == 'stock_list.index' || Route::currentRouteName() == 'stock_list.create') active @endif nav-item"><a-->
                <!--    href="{{ route('stock_list.index') }}"><i class="feather icon-layers"></i><span-->
                <!--        class="menu-title" data-i18n="User">Stock List</span></a>-->

                <!--</li>-->
                @endcan

                @can('order-list')
                <li class="@if (Route::currentRouteName() == 'orders.index' || Route::currentRouteName() == 'orders.show') active @endif nav-item"><a
                    href="{{ route('orders.index') }}"><i class="feather icon-layers"></i><span
                        class="menu-title" data-i18n="User">Order List</span></a>

                </li>
                @can('stock-list')
                <li class="@if (Route::currentRouteName() == 'bespoke-meal.index' || Route::currentRouteName() == 'bespoke-meal.create') active @endif nav-item"><a
                    href="{{ route('bespoke-meal.index') }}"><i class="feather icon-layers"></i><span
                        class="menu-title" data-i18n="User">Bespoke Meal</span></a>

                </li>
                @endcan

                @endcan
                @can('stock-list')
                <li class="@if (Route::currentRouteName() == 'faq.index' || Route::currentRouteName() == 'faq.create') active @endif nav-item"><a
                    href="{{ route('faq.index') }}"><i class="feather icon-layers"></i><span
                        class="menu-title" data-i18n="User">FAQ</span></a>

                </li>
                @endcan

                {{-- <li class="nav-item    @if (Route::currentRouteName() == 'items-menu.index') open @endif"><a href="#"><i
                            class="feather icon-menu "></i><span class="menu-title" data-i18n="User">Item
                            Menu</span></a>
                    <ul class="menu-content">
                        <li class="@if (Route::currentRouteName() == 'items-menu.index') active @endif"><a
                                href="{{ route('items-menu.index') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="List">List</span></a>
                        </li>


                    </ul>
                </li> --}}


            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->


                @yield('body-section')
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span
                class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; {{ date('Y')}}<a
                    class="text-bold-800 grey darken-2" href="#!" target="_blank">Lee-Howels,</a>All rights
                Reserved</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/polyfill.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/tether.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/shepherd.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>

    <script src="{{ asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css') }}">
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/extensions/toastr.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/extensions/sweet-alerts.js') }}"></script>
    <script src="{{ asset('app-assets/js/waitMe.js') }}"></script>
    {{-- <script src="{{asset('app-assets/js/toastr.min.js')}}"></script> --}}
    <script src="{{ asset('app-assets/js/scripts/pages/app-user.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/number-input.min.js') }}"></script>
    <script src="{{ asset('app-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        var type = "{{ Session::get('type') }}";

        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;

        }
    </script>

    <!-- END: Page JS-->



    @yield('script')

    <script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
    <script>
        $('.editor').each(function(e) {
            CKEDITOR.replace(this.id, {
                allowedContent: true,
                toolbar: 'Full',
                enterMode: CKEDITOR.ENTER_BR,
                shiftEnterMode: CKEDITOR.ENTER_P,
            });
        });
        var firebaseConfig = {
            apiKey: "AIzaSyChiQJD1jN3i_ptzs2ahvyqCKzlOyvVvTU",
            authDomain: "slashpoint-ad2c4.firebaseapp.com",
            projectId: "slashpoint-ad2c4",
            storageBucket: "slashpoint-ad2c4.appspot.com",
            messagingSenderId: "126847266254",
            appId: "1:126847266254:web:a26b2f61a8186488140f9f",
            measurementId: "G-3R7S2ZV7RZ"
        };

        firebase.initializeApp(firebaseConfig);
        const messaging = firebase.messaging();
        initFirebaseMessagingRegistration();

        function initFirebaseMessagingRegistration() {

            messaging
                .requestPermission()
                .then(function() {
                    return messaging.getToken()
                })
                .then(function(token) {


                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: '{{ route('save.token') }}',
                        type: 'POST',
                        data: {
                            token: token
                        },
                        // dataType: 'JSON',
                        success: function(response) {
                            console.log(response)

                            // alert('Token saved successfully.');
                        },
                        error: function(err) {
                            console.log('User Chat Token Error' + err);
                        },
                    });

                }).catch(function(err) {
                    console.log('User Chat Token Error' + err);
                });
        }

        messaging.onMessage(function(payload) {
            const noteTitle = payload.notification.title;
            const noteOptions = {
                body: payload.notification.body,
                icon: payload.notification.icon,
            };
            new Notification(noteTitle, noteOptions);
        });
    </script>

</body>
<!-- END: Body-->

</html>
