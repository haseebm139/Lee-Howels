<!doctype html>
<html lang="en">

<head>
    <title>Fit Geeks|@yield('title')</title>
    <link rel="icon" href="{{ asset('assets/website/images/newlogo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/website/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/website/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    @yield('style')


</head>

<body>
    <div class="flag-login">
        <div class="flag">
            <li class="dropdown language-selector mt-2">
                Language:
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                    <img src="{{ asset('assets/website/images/eng.png') }}" class="img-fluid" id="flag" />
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/website/images/eng.png') }}" class="img-fluid" id="flagunder" />
                            <span>Deutsch</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <img src="{{ asset('assets/website/images/eng.png') }}" class="img-fluid" id="flagunder" />
                            <span>English</span>
                        </a>
                    </li>
                </ul>
            </li>

        </div>

        <div class="language">
            <li class="dropdown language-selector mt-2" id="lange">
                login :
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                    <img src="{{ asset('assets/website/images/login.png') }}" class="img-fluid ml-1" id="flaglogin" />
                </a>
                <ul class="dropdown-menu pull-right">
                    <li class="ml-1">
                        <a href="#">

                            <span>Sign Up</span>
                        </a>
                    </li>
                    <li class="active ml-1">
                        <a href="#">

                            <span>Registration</span>
                        </a>
                    </li>
                </ul>
            </li>

        </div>


    </div>


    <nav class="navbar navbar-expand-lg">

        <div class="pe-lg-0 ps-lg-5 container-fluid justify-content-between">
            <a class="navbar-brand " href="#" id="lgo">
                <img src="{{ asset('assets/website/images/newlogo.png') }}" height="100" alt="logo" class="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="nav_left d-lg-flex align-items-center">
                    <nav>
                        <div class="nav d-block d-lg-flex nav-tabs" id="nav-tab" role="tablist">

                            <button class="nav-link @if (Route::currentRouteName() == 'index') active @endif"> <a href="{{ route('index') }}" style="color:white">Home</a></button>
                            <button class="nav-link @if (Route::currentRouteName() == 'about_us') active @endif"><a href="{{ route('about_us') }}" style="color:white">About Us</a></button>
                            <button class="nav-link @if (Route::currentRouteName() == 'diet.plan') active @endif"> <a href="{{ route('diet.plan') }}" style="color:white">Diet
                                    Plans</a></button>
                            <button class="nav-link" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                                type="button" role="tab" aria-controls="courses" aria-selected="false"> <a
                                    href="{{ route('meal.assessment') }}" style="color:white">Meal Assessment </a></button>

                            <button class="nav-link @if (Route::currentRouteName() == 'faq') active @endif"> <a href="{{ route('faq') }}" style="color:white">FAQ</a></button>


                            <button class="nav-link @if (Route::currentRouteName() == 'order.now') active @endif"> <a href="{{ route('order.now') }}" style="color:white">Order Now
                                </a></button>


                            {{-- <button class="nav-link" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                                type="button" role="tab" aria-controls="courses"
                                aria-selected="false">Subscription</button>


                            <button class="nav-link" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                                type="button" role="tab" aria-controls="courses" aria-selected="false">Contact
                                Us</button> --}}
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    @yield('script')
