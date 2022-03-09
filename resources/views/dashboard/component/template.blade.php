<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Zenix - Crypto Admin Dashboard" />
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard" />
	<meta property="og:description" content="Zenix - Crypto Admin Dashboard" />
	<meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/images/favicon.png')}}">
	<link href="{{asset('/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    @livewireStyles

</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wraper">
        @yield('content')
        @livewireScripts
        @yield('javascript')
    </div>
</body>

</html>