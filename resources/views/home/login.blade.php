
    @extends('layouts.frontbase')
    @section('title', 'loginUser' )

    @section('content')


        <div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li> <a href="{{route('home')}}"> </a> </li>
                    <li class="active" > User Registration </li>
                </ul>
            </div>
        </div>

    {{--        the form of it --}}
    <div class="row">
        <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12">

            @include('auth.login')

        </div>
    </div>



    @endsection
