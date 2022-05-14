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
    <link href={{ asset('assets') }}/"bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i"
        rel="stylesheet">
    <!-- owl-carousel -->
    <link href={{ asset('assets') }} "owl.carousel.css" rel="stylesheet">
    <link href={{ asset('assets') }} "owl.theme.default.css" rel="stylesheet">
    <!-- jquery ui  -->
    <link rel="stylesheet" type="text/css" href={{ asset('assets') }}/jquery-ui.css">
    <!-- FontAwesome CSS -->
    <link href={{ asset('assets') }} "font-awesome.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href={{ asset('assets') }}"style.css" rel="stylesheet">

    @yield("head")
</head>
<body>
    @include('home.header')
    @section('sidebar')
        @include('home.sidebar')
        @include('home.sidebar')
    @show


@section('slider')
@show

@yield('content')


@include('home.footer')
@yield('foot')
</body>

</html>
