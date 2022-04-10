<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title> @yield("title")</title>


    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->

    {{-- I have to see what are the file that I have to change them in the 7 video in the 26 minutes --}}

    <link href="panel/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="panel/css/sb-admin-2.min.css" rel="stylesheet">

    @yield("head")

</head>

<body id="page-top">

    @include('admin.header')


    {{-- @section('sidebar')
    @include('admin.sidebar')
    @include('admin.sidebar') --}}

    <div class="container">
        @yield('content')
    </div>

    @include('admin.footer')

    {{-- @yield('foot') --}}

</body>

</html>
