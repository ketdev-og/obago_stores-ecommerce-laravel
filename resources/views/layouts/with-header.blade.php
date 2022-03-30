<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    {{-- hambugger --}}
    <link rel="stylesheet" href="{{ asset('/nav/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/marquee/css/marquee.css') }}">

    {{-- mega menu link --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('mega_menu/css/reset.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mega_menu/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mega_menu/css/ionicon.min.css') }}">

    {{-- Ludus --}}
    <link rel="stylesheet" href="{{ asset('ludus/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('ludus/css/utility.css') }}">
    <link rel="stylesheet" href="{{ asset('ludus/css/app.css') }}">


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/obagz/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/obagz/media.css') }}">

    <title>@yield('title')</title>
</head>

<body>
    {{-- nav --}}

    <div class="nav_container">
        <header>
            <div class="head">
                <ul>
                    <li><a href="">Sell with us</a></li>
                    <li></li>
                    <li><a href="">Call us</a></li>
                </ul>
            </div>
        </header>

        <section class="title_bar">
            <div class="row d-flex">
                <div class="col-2">
                    <div class="logo flex">
                        <a href="{{ route('obagz') }}">
                            <img src="{{ asset('obagz-images/logo.jpg') }}" alt="Obagz">
                        </a>
                    </div>
                </div>
                <div class="col" style="display: flex; justify-content:center; align-items:center">
                    <div class="k-container">
                        <input type="text" id="box" placeholder="Search anything..." class="search__box">
                        <i class="bi bi-search search__icon"></i>
                    </div>
                </div>
                @if (Auth::guard('admin')->check())

                    <div class="col-3">

                        <div class="obagz_attention flex">
                            @if (Auth::guard('admin')->user()->is_verified != 0)
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-bell"></i>
                                    <div class="ob-indicators"></div>
                                </div>
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-suit-heart"></i>
                                    <div class="ob-indicators"></div>
                                </div>
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-cart3"></i>
                                    <div class="ob-indicators"></div>
                                </div>
                            @endif
                            @if (Auth::guard('admin')->user()->is_verified == 0)
                            <div class="v-btn">
                                <a href="{{route('user.reVerify')}}">Verify email</a>
                            </div>
                        @endif
                            <div style="transform: translateY(0.1rem); position:relative;" onclick="dropDown()">
                                <i class="bi bi-person-check-fill dropbtn"></i>
                                <div id="myDropdown" class="ob-dropdown-content">
                                    <a href="#home" style="font-weight: lighter" class="dropdown-item">
                                        <span style="margin-right: 0.5rem"><i class="bi bi-person-fill"
                                                style="font-size: 1rem"></i></span>
                                        {{ Auth::guard('admin')->user()->name }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();"
                                        style="font-weight: lighter">
                                        <span style="margin-right: 0.5rem"><i class="bi bi-arrow-left-square-fill"
                                                style="font-size: 1rem"></i></span> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>


                @endif

                @if (Auth::check())
                    <div class="col-3">
                        <div class="obagz_attention flex">
                            @if (Auth::user()->is_verified != 0)
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-bell"></i>
                                    <div class="ob-indicators"></div>
                                </div>
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-suit-heart"></i>
                                    <div class="ob-indicators"></div>
                                </div>
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-cart3"></i>
                                    <div class="ob-indicators"></div>
                                </div>
                            @endif
                            @if (Auth::user()->is_verified == 0)
                                <div class="v-btn">
                                    <a href="{{route('user.reVerify')}}">Verify email</a>
                                </div>
                            @endif
                            <div style="transform: translateY(0.1rem); position:relative;" onclick="dropDown()">
                                <i class="bi bi-person-check-fill dropbtn"></i>
                                <div id="myDropdown" class="ob-dropdown-content">
                                    <a href="#home" style="font-weight: lighter" class="dropdown-item">
                                        <span style="margin-right: 0.5rem"><i class="bi bi-person-fill"
                                                style="font-size: 1rem"></i></span>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();"
                                        style="font-weight: lighter">
                                        <span style="margin-right: 0.5rem"><i class="bi bi-arrow-left-square-fill"
                                                style="font-size: 1rem"></i></span> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>


                @endif


                @guest('admin')
                    @guest
                        <div class="col-3 o_to_right">
                            <div><a href="{{ route('user.login') }}">Sign In</a></div>
                        </div>
                    @endguest
                @endguest
            </div>
        </section>

        {{-- media display title bar --}}
        <div class="media_title_bar">
            <section>
                <div class="row" style="padding: 0.6rem 0">
                    <div class="col-6">
                        <aside class="sidebar">
                            <div class="toggle">
                                <a href="#" class="burger js-menu-toggle" data-toggle="collapse"
                                    data-target="#main-navbar">
                                    <span></span>
                                </a>
                            </div>
                            <div class="side-inner">

                                <div class="profile">
                                    <h3 class="name">Debby Williams</h3>
                                </div>

                                <div class="nav-menu">
                                    <ul>
                                        <li class="active"><a href="#"><span
                                                    class="icon-home mr-3"></span>Home</a></li>
                                        <li><a href="#"><span class="icon-search2 mr-3"></span>Categoreis</a></li>
                                        <li><a href="#"><span class="icon-notifications mr-3"></span>Sell with Us</a>
                                        </li>
                                        <li><a href="#"><span class="icon-location-arrow mr-3"></span>Contact Us</a>
                                        </li>
                                        <li><a href="#"><span class="icon-pie-chart mr-3"></span>Profile</a></li>
                                        <li><a href="#"><span class="icon-sign-out mr-3"></span>Sign out</a></li>
                                    </ul>
                                </div>
                            </div>

                        </aside>
                    </div>
                    @auth
                        <div class="col-6">
                            <div class="obagz_attention">
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-bell"></i>
                                    <div></div>
                                </div>
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-suit-heart"></i>
                                    <div></div>
                                </div>
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-cart3"></i>
                                    <div></div>
                                </div>
                            </div>
                        </div>

                    @endauth
                    @auth('admin')
                        <div class="col-6">
                            <div class="obagz_attention">
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-bell"></i>
                                    <div></div>
                                </div>
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-suit-heart"></i>
                                    <div></div>
                                </div>
                                <div style="transform: translateY(0.1rem)">
                                    <i class="bi bi-cart3"></i>
                                    <div></div>
                                </div>
                            </div>
                        </div>

                    @endauth
                    @guest
                        <div class="col-6 signIn">
                            <div><a href="">Sign In</a></div>
                        </div>
                    @endguest
                    <div class="row o_search" style="margin-top: 0.3rem">
                        <div class="col" style="display: flex; justify-content:center; align-items:center">
                            <div class="k-container">
                                <input type="text" id="box" placeholder="Search anything..." class="search__box">
                                <i class="bi bi-search search__icon"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        {{-- mega menu --}}
        <header class="header mega_header" style="margin-top: 0.5rem">
            <div class="container">
                <div class="wrapper">
                    <!-- Section: Navbar Menu -->
                    <div class="header-item-center">

                        <nav class="menu">
                            <ul class="menu-section">

                                <li class="menu-item-has-children">
                                    <a href="#">Mobile & More</a>
                                    <div class="menu-subs menu-mega menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Men's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Kid's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Women's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Health & Beauty</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Home & Lifestyle</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <img src="./asset/image-5.jpg" class="responsive" alt="Shop Product">
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Men</i></a>
                                    <div class="menu-subs menu-mega menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Men's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Kid's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Women's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Health & Beauty</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Home & Lifestyle</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <img src="./asset/image-5.jpg" class="responsive" alt="Shop Product">
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Women</i></a>
                                    <div class="menu-subs menu-mega menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Men's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Kid's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Women's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Health & Beauty</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Home & Lifestyle</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <img src="./asset/image-5.jpg" class="responsive" alt="Shop Product">
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Home & Kitchen</i></a>
                                    <div class="menu-subs menu-mega menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Men's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Kid's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Women's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Health & Beauty</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Home & Lifestyle</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <img src="./asset/image-5.jpg" class="responsive" alt="Shop Product">
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Sports</i></a>
                                    <div class="menu-subs menu-mega menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Men's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Kid's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Women's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Health & Beauty</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Home & Lifestyle</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <img src="./asset/image-5.jpg" class="responsive" alt="Shop Product">
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Appliances</i></a>
                                    <div class="menu-subs menu-mega menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Men's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Kid's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Women's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Health & Beauty</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Home & Lifestyle</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <img src="./asset/image-5.jpg" class="responsive" alt="Shop Product">
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Offers</i></a>
                                    <div class="menu-subs menu-mega menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Men's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Kid's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Women's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Health & Beauty</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Home & Lifestyle</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <img src="./asset/image-5.jpg" class="responsive" alt="Shop Product">
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>

    @yield('content')

    {{-- footer --}}
    <section>
        <footer>
            <p>Band of Trust</p>
            {{-- motto --}}
            <div class="motto">
                <div class="mt-details">
                    <div class="mt-logo">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="mt-text">
                        <p>Great Selection</p>
                    </div>
                </div>
                <div class="mt-details">
                    <div class="mt-logo">
                        <i class="bi bi-cash"></i>
                    </div>
                    <div class="mt-text">
                        <p>Low Price</p>
                    </div>
                </div>
                <div class="mt-details">
                    <div class="mt-logo">
                        <i class="bi bi-speedometer2"></i>
                    </div>
                    <div class="mt-text">
                        <p>Speedy Delivery</p>
                    </div>
                </div>
            </div>
            {{-- quick links --}}
            <div class="ql-container">
                <div class="ql-each">
                    <p>Shopper Central</p>
                    <ul>
                        <li><a href="http://">Easy Returns & Replacement</a></li>
                        <li><a href="http://">Sign In/Register</a></li>
                        <li><a href="http://">Our Policies</a></li>
                        <li><a href="http://">CluesBucks</a></li>
                        <li><a href="http://">Payment Options</a></li>
                    </ul>
                </div>
                <div class="ql-each">
                    <p><a href="">About Us</a></p>
                    <ul>
                        <li><a href="http://">Band of Trust</a></li>
                        <li><a href="http://">History</a></li>
                        <li><a href="http://">Awards</a></li>
                    </ul>
                </div>
                <div class="ql-each">
                    <p>Contact Us</p>
                    <ul>
                        <li><a href="http://">Merchant Support</a></li>
                        <li><a href="http://">Bulk Orders</a></li>
                        <li><a href="http://">Press</a></li>
                    </ul>
                </div>
            </div>
            {{-- social contacs --}}
            <div class="sc-container">
                <div class="sc-media">
                    <div>
                        <p>Keep In Touch</p>
                    </div>
                    <div>
                        <span><a href=""><i class="bi bi-twitter"></i></a></span>
                        <span><a href=""><i class="bi bi-instagram"></i></a></span>
                        <span><a href=""><i class="bi bi-facebook"></i></a></span>
                        <span><a href=""><i class="bi bi-youtube"></i></a></span>
                        <span><a href=""><i class="bi bi-linkedin"></i></a></span>
                    </div>
                </div>
                <div class="sc-payments">
                    <div>
                        <p>100% Trusted Secured payment</p>
                    </div>
                    <div>
                        <div class="pay-model">
                            <img src="{{ asset('obagz-images/master card.png') }}" alt="">
                        </div>
                        <div class="pay-model">
                            <img src="{{ asset('obagz-images/visa.png') }}" alt="">
                        </div>
                        <div class="pay-model">
                            <img src="{{ asset('obagz-images/verve.png') }}" alt="">
                        </div>
                        <div class="pay-model">
                            <img src="{{ asset('obagz-images/flutterwave.png') }}" alt="">
                        </div>
                        <div class="pay-model">
                            <img src="{{ asset('obagz-images/opay.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            {{-- copy right --}}
            <div class="cr-container">
                <div>
                    <p>Copyright © 2011-2021 Clues Network Pvt. Ltd. </p>
                </div>
                <div class="cr-logo">
                    <img src="{{ asset('obagz-images/logo.jpg') }}" alt="">
                </div>

            </div>
        </footer>
    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('ludus/js/vendor.js') }}"></script>
    <script src="{{ asset('ludus/js/jquery.shopnav.js') }}"></script>
    <script src="{{ asset('ludus/js/app.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('nav/js/main.js') }}"></script>
    <script src="{{ asset('js/obagz/app.js') }}"></script>
    <script src="{{ asset('marquee/js/marquee.js') }}"></script>
    <script src="{{ asset('marquee/marquee.js') }}"></script>

</body>

</html>
