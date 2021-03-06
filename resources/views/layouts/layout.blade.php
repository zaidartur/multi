<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/') }}/images/def/favicon.svg" />

    <link href="{{ asset('assets/') }}/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/') }}/js/plugins/newsticker/ticker.css">
    <style>
        .logo-src{
            height:23px;
            width:97px;
            background:url({{ asset("assets/") }}/images/logo.png);
        }
        .app-header.header-text-light .app-header__logo .logo-src {
            height: 23px;
            width: 97px;
            background: url({{ asset("assets/") }}/images/logo.png);
        }
        .app-header.header-text-dark .app-header__logo .logo-src {
            height: 23px;
            width: 97px;
            background: url({{ asset("assets/") }}/images/logo-inverse.png);
        }
        .app-main__inner {
            background-size: cover;
            background-image: url({{ asset("assets/") }}/images/white-brick.jpg);
        }
    </style>
</head>
<body class="brick">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow bg-midnight-bloom header-text-light">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left" style="width: 700px">
                    {{-- <h3 style="text-transform: uppercase">Ultimate App.</h3> --}}
                    <div class="ticker-container">
                        <ul style="color: white">
                            <div>
                                <li><span> Selamat Datang &nbsp;&nbsp;&nbsp;</span></li>
                            </div>
                            <div>
                                <li><span> {{ date_format(date_create(), 'l, d F Y') }} &nbsp;&nbsp;&nbsp;</span></li>
                            </div>
                            <div>
                                <li><span> Breaking News 3 </span></li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="{{ asset('assets/').'/images/users/'.$detail->detail_photo }}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <i class="fa fa-power-off"></i> &nbsp;Logout
                                            </button>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{ explode(' ', Auth::user()->name)[0]; }}
                                    </div>
                                    <div class="widget-subheading">
                                        {{ Auth::user()->email; }}
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">
                <div class="app-sidebar sidebar-shadow bg-heavy-rain sidebar-text-dark">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">

                        {{-- navbar-menu --}}
                        @include('layouts.nav')

                    </div>
                </div>
                <div class="app-main__outer">
                    <div class="app-main__inner">

                        {{-- main-content --}}
                        @yield('content')

                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            Footer
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/') }}/js/main.js"></script>
    <script type="text/javascript" src="{{ asset('assets/') }}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/') }}/js/plugins/newsticker/ticker.js"></script>
</body>
</html>
