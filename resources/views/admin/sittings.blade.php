@extends('layouts.adminbase')
@section('title', 'sittings ')
@section('content')

    @include('admin.sidebar')

{{--    <form  action="{{route('admin.setting.update')}}" method="post" >--}}
{{--        <div class="form-group">--}}

{{--    <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--        <a class="navbar-brand" href="#  ">General</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">--}}
{{--            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="#  ">Smtp Email <span class="sr-only">(current)</span></a>--}}
{{--                </li>--}}


{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">social Media</a>--}}
{{--                </li>--}}


{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled" href="#">about us</a>--}}
{{--                </li>--}}


{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled" href="#">contact page</a>--}}
{{--                </li>--}}


{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled" href="#">References</a>--}}
{{--                </li>--}}


{{--            </ul>--}}
{{--            <form class="form-inline my-2 my-lg-0">--}}
{{--                <input class="form-control mr-sm-2" type="search" placeholder="Search">--}}
{{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </nav>--}}

    <div id="London" class="city">
        <h2>London</h2>
        <p>London is the capital of England.</p>
    </div>

    <div id="Paris" class="city" style="display:none">
        <h2>Paris</h2>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="city" style="display:none">
        <h2>Tokyo</h2>
        <p>Tokyo is the capital of Japan.</p>
    </div>


    <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button" onclick="openCity('London')">London</button>
        <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Paris</button>
        <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Tokyo</button>
    </div>

    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }

    </script>


                        <form  action="{{route('admin.setting.update')}}" method="post" >
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="project title">
                                <small id="Title" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">keywords</label>
                                <input type="text" class="form-control" id="keywords" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">description</label>
                                <input type="text" class="form-control" id="description" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">company</label>
                                <input type="text" class="form-control" id="company" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="Email" class="form-control" id="email" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">SMTPserver</label>
                                <input type="text" class="form-control" id="SMTPserver" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">SMTP password</label>
                                <input type="password" class="form-control" id="SMTPpassword" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">SMTP facebook</label>
                                <input type="text" class="form-control" id="SMTPfacebook" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">SMTP instrgram</label>
                                <input type="text" class="form-control" id="SMTPinstrgram" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">SMTP twitter</label>
                                <input type="text" class="form-control" id="SMTPtwitter" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">SMTP youtube</label>
                                <input type="text" class="form-control" id="SMTPyoutube" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">about us</label>
                                <input type="text" class="form-control" id="aboutus" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">contact</label>
                                <input type="text" class="form-control" id="contact" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">references</label>
                                <input type="text" class="form-control" id="references" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">icon</label>
                                <input type="text" class="form-control" id="icon" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">status</label>
                                <input type="text" class="form-control" id="status" placeholder="text">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">SMTPserver</label>
                                <input type="text" class="form-control" id="SMTPserver" placeholder="text">
                            </div>



                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">send </button>
                        </form>

@endsection
