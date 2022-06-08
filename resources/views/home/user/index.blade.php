
@extends('layouts.frontbase')

@section('title', 'User Panel' )

@section('content')

    {{--        the form of it --}}
    <div class="section">

        <div class="container">

    <div class="row">
        @include('home.user.usermenu')
        <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12">
{{--           <h1> user profile </h1>--}}

            <div class="section-title">
{{--                @include('profile.show')--}}

                <h2>User profile</h2>

            </div>



            <div class="contact-block">
                <!-- contact-form -->

            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
