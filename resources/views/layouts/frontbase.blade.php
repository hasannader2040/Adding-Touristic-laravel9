<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    {{-- its for defanging --}}
    <title> @yield("title")</title>


    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>  Traveler Agency </title>
    <!-- Bootstrap -->
    <link href="{{ asset('assets')}}/css/bootstrap.min.css"rel="stylesheet" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i"
        rel="stylesheet"
    />
    <!-- owl-carousel -->
    <link href="{{ asset('assets')}}/css/owl.carousel.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/owl.theme.default.css" rel="stylesheet" />
    <!-- jquery ui  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/css/jquery-ui.css" />
    <!-- FontAwesome CSS -->
    <link href="{{ asset('assets')}}/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Style CSS -->
    <link href="{{ asset('assets')}}/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

{{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--    <![endif]-->--}}

    @yield("head")
</head>
<body>
    @include('home.header')
    @section('sidebar')
        @include('home.sidebar')
    @show


@section('slider')
@show

@yield('content')


@include('home.footer')
@yield('foot')
</body>

</html>
