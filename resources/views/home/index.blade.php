@extends('frontbase.blade.php')

@section('title', 'front-end tamplte')

{{-- @section('sider') --}}

@parent
<!-- its perry important to add it to Add the next line of it  -->

<p>This is appended to the master sidebar.</p>
@endsection

@section('slider')
    @include('home.slider')

@endsection

@section('content')

{{-- <body>
    @include("home.header")

    @section

</body> --}}


