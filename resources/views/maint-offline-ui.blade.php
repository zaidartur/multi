<!DOCTYPE html>
<html lang="en">
<head>
    <title>Site Down</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/') }}/images/def/favicon.svg" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('assets/') }}/fonts/font-awsome-pro/css/pro.min.css">
    <link rel="stylesheet" href="{{ asset('assets/') }}/fonts/feather.css">
    <link rel="stylesheet" href="{{ asset('assets/') }}/fonts/fontawesome.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/') }}/css/customizer.css">

</head>
<!-- [ offline-ui ] start -->
<div class="auth-wrapper offline">
    <div class="offline-wrapper">
        <img src="{{ asset('assets/') }}/images/def/sparcle-1.png" alt="User-Image" class="img-fluid s-img-1">
        <img src="{{ asset('assets/') }}/images/def/sparcle-2.png" alt="User-Image" class="img-fluid s-img-2">
        <div class="container off-main">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="text-center">
                        <div class="moon"></div>
                        <img src="{{ asset('assets/') }}/images/def/ship.svg" alt="" class="img-fluid boat-img">
                    </div>
                </div>
            </div>
            <div class="row m-0 justify-content-center off-content">
                <div class="col-sm-12 p-0">
                    <div class="text-center">
                        <h1 class="text-white text-uppercase">Offline</h1>
                        <h5 class="text-white font-weight-normal m-b-30">The site is temporarily down</h5>
                        <button class="btn btn-primary mb-4" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="feather icon-refresh-ccw mr-2"></i>Logout</button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                <div class="sark">
                    <img src="{{ asset('assets/') }}/images/def/sark.svg" alt="" class="img-fluid img-sark">
                    <div class="bubble"></div>
                </div>
            </div>
        </div>
        <svg width="100%" height="70%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
            <title>Wave</title>
            <defs></defs>
            <path id="feel-the-wave" d="" />
        </svg>
        <svg width="100%" height="70%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
            <title>Wave</title>
            <defs></defs>
            <path id="feel-the-wave-two" d="" />
        </svg>
    </div>
</div>
<!-- [ offline-ui ] end -->
<!-- Required Js -->
<script src="{{ asset('assets/') }}/js/vendor-all.min.js"></script>
<script src="{{ asset('assets/') }}/js/plugins/bootstrap.min.js"></script>
<script src="{{ asset('assets/') }}/js/pages/TweenMax.min.js"></script>
<script src="{{ asset('assets/') }}/js/pages/jquery.wavify.js"></script>
<div class="pct-customizer">
    <div href="#!" class="pct-c-btn">
        <button class="btn btn-light-danger" id="pct-toggler">
            <i data-feather="settings"></i>
        </button>
        <button class="btn btn-light-primary" data-toggle="tooltip" title="Document" data-placement="left">
            <i data-feather="book"></i>
        </button>
        <button class="btn btn-light-success" data-toggle="tooltip" title="Buy Now" data-placement="left">
            <i data-feather="shopping-bag"></i>
        </button>
        <button class="btn btn-light-info" data-toggle="tooltip" title="Support" data-placement="left">
            <i data-feather="headphones"></i>
        </button>
    </div>
    <div class="pct-c-content ">
        <div class="pct-header bg-primary">
            <h5 class="mb-0 text-white f-w-500">Nextro Customizer</h5>
        </div>
        <div class="pct-body">
            <h6 class="mt-2"><i data-feather="credit-card" class="mr-2"></i>Header settings</h6>
            <hr class="my-2">
            <div class="theme-color header-color">
                <a href="#!" class="" data-value="bg-default"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-primary"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
            </div>
            <h6 class="mt-4"><i data-feather="layout" class="mr-2"></i>Sidebar settings</h6>
            <hr class="my-2">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="cust-sidebar">
                <label class="custom-control-label f-w-600 pl-1" for="cust-sidebar">Light Sidebar</label>
            </div>
            <div class="custom-control custom-switch mt-2">
                <input type="checkbox" class="custom-control-input" id="cust-sidebrand">
                <label class="custom-control-label f-w-600 pl-1" for="cust-sidebrand">Color Brand</label>
            </div>
            <div class="theme-color brand-color d-none">
                <a href="#!" class="active" data-value="bg-primary"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
            </div>
        </div>
    </div>
</div>
<script>
    // header option
    $('#pct-toggler').on('click', function() {
        $('.pct-customizer').toggleClass('active');

    });
    // header option
    $('#cust-sidebrand').change(function() {
        if ($(this).is(":checked")) {
            $('.theme-color.brand-color').removeClass('d-none');
            $('.m-header').addClass('bg-dark');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
            $('.theme-color.brand-color').addClass('d-none');
        }
    });
    // Header Color
    $('.brand-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.m-header').removeClassPrefix('bg-');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
            $('.m-header').addClass(temp);
        }
    });
    // Header Color
    $('.header-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.pc-header').removeClassPrefix('bg-');
        } else {
            $('.pc-header').removeClassPrefix('bg-');
            $('.pc-header').addClass(temp);
        }
    });
    // sidebar option
    $('#cust-sidebar').change(function() {
        if ($(this).is(":checked")) {
            $('.pc-sidebar').addClass('light-sidebar');
            $('.pc-horizontal .topbar').addClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
        } else {
            $('.pc-sidebar').removeClass('light-sidebar');
            $('.pc-horizontal .topbar').removeClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
        }
    });
    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, it) {
            var classes = it.className.split(" ").map(function(item) {
                return item.indexOf(prefix) === 0 ? "" : item;
            });
            it.className = classes.join(" ");
        });
        return this;
    };
</script>

<script>
    $('#feel-the-wave').wavify({
        color: 'rgba(37, 54, 83, 0.93)',
        speed: .25
    });
    $('#feel-the-wave-two').wavify({
        color: 'rgba(37, 54, 83, .5)',
        speed: .35
    });
</script>
</body>
</html>
