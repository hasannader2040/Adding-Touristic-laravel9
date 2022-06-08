



{{--<div class="wrapper">--}}
    <!-- header-section-->
    <div class="header-wrapper">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-7 col-md-8 d-none d-xl-block d-sm-block">
                        <div class="top-header-content">
                            <ul class="list-none">
                                <li><i class="fa fa-envelope top-header-icon"></i>info@travel.com</li>
                                <li><i class="fa fa-phone top-header-icon"></i>+180-123-4567</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6 col-8 d-none d-block d-sm-block">
                        <div class="top-header-content">
                            <div class="top-social"> <a href="#" class="btn-social-icon"><i class="fa fa-facebook"></i></a> <a href="#" class="btn-social-icon"><i class="fa fa-twitter"></i></a> <a href="#" class="btn-social-icon"><i class="fa fa-linkedin"></i></a> <a href="#" class="btn-social-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="btn-social-icon"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">
                        <a href="#" class="search-icon" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-section-->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-12">
                        <div class="logo"> <a href="index.html"><img src="{{ asset('assets')}}/images/logo.png" alt=""> </a> </div>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-sm-12 col-12">

                    <!-- navigations-->
                    {{--   I have here my subcategory --}}
                    @php
                        $Pmaintcategoried = \App\Http\Controllers\HomeController::maincategorylist();
                    @endphp
                    <div id="navigation">
                        <ul>

                            {{--                                    start working at  about us and References--}}
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li ><a href="{{route('about')}}">about us</a></li>
                            <li ><a href="{{route('reference')}}">Reference</a></li>

                            <li class="has-sub"><a href="#">Categories</a>
                                @foreach($Pmaintcategoried as $item)
                                    <ul>
                                        @if(count($item->children))

                                            <li><a href="blog-default.html">just for test</a></li>

                                            @include('home.categorytree',['children' => $item->children])

                                        @endif
                                    </ul>
                            </li>
                            @endforeach
                            {{--                                            <a href="#" class="dropdown-menu" data-toggle="dropdown">{{$item->title}} </a>--}}
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li class="has-sub"><a href="#">Blog</a>
                                <ul>
                                    <li><a href="">places</a></li>
{{--                                    {{route('place', ['id' => $data->id])}}--}}
                                    <li><a href="blog-single.html">anything else </a></li>
                                </ul>


                            <li class="has-sub"><a href="#">Pages</a>
                                <ul>
                                    <li><a href="/reference">references</a> </li>
                                    <li><a href="tour-booking.html">Tour Booking</a> </li>
                                    <li><a href="tab.html">Tabs</a> </li>
                                    <li><a href="alerts.html">Alerts</a> </li>
                                    <li><a href="accordions.html">Accordions</a> </li>
                                    <li><a href="gallery.html">Gallery</a> </li>
                                    <li><a href="404-page.html">404 page</a> </li>
                                    <li><a href="call-to-action.html">Call To Actions</a></li>
                                    <li><a href="styleguide.html">styleguide</a> </li>
                                </ul>
                            </li>
                            {{--                                        <li> <a href="#">Pages</a>--}}
                            <li><a href="{{'contact'}}">Contact</a></li>
                            <li><a href="{{'Contact Form Messages '}}">Contact Form Messages </a></li>
                        </ul>
                    </div>
                    </div>
                    <!-- /.navigations-->


                    <div class="col-xl-9 col-lg-10 col-md-9 col-sm-12 col-12">


{{--                        -----------------for log in and out -----------------------}}
                        @auth()
                            <a href="/" class="btn btn-primary">{{Auth::user()->name}}</a>
                            <a href="/logoutUser" class="btn btn-primary btn-lg">Logout</a>
                        @endauth
                        @guest()
                            <a href="/loginUser" class="btn btn-primary btn-lg">Login</a>

                            <a href="/registerUser" class="btn btn-primary btn-lg">Register</a>
                            @endguest
                            </a>
{{--                            -----------------for log in and out -----------------------}}


                    </div>

{{--         I should make here  @include()--}}
                </div>
            </div>
        </div>

    <!-- /. header-section-->
</div>


