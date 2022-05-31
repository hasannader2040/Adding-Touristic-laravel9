
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="/assets/panel/"
      data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}

{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">--}}



    <title> @yield("title")</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('panel/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets')}}/panel/vendor/css/core.css"
          class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets')}}/panel/vendor/css/theme-default.css"
          class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets')}}/panel/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets')}}/panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{ asset('assets')}}/panel/vendor/libs/apex-charts/apex-charts.css" />

{{--    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>--}}

    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    @yield('script')

    <script href="{{ asset('assets') }}/panel/panel/vendor/js/helpers.js"></script>

    <script href="{{ asset('assets') }}/panel/vendor/js/config.js"></script>
    @yield("head")
</head>

<body>
@include("admin.header")


@section('sidebar')
    @include("admin.bar")
@show

@yield('content')

@include("admin.footer")
@yield('foot')


</body>

</html>

