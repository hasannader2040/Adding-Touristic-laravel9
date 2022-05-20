
    @extends('layouts.frontbase')

    @section('title',$setting->title)
    @section('descraption',$setting->descraption)
    @section('keywords',$setting->keywords)
    @section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))

    @section('contant')

        <div id="sticky-wrapper" class="sticky-wrapper" style="height: 135px;"><div class="header-wrapper" style="">
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
                                <div class="logo"> <a href="index.html"><img src="images/logo.png" alt=""> </a> </div>
                            </div>
                            <div class="col-xl-9 col-lg-10 col-md-9 col-sm-12 col-12">
                                <!-- navigations-->
                                <div class="navigation">
                                    <div id="navigation"><div id="menu-button">Menu</div>
                                        <ul>
                                            <li class="active"><a href="index.html">Home</a></li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="#">Tour Packages</a>
                                                <ul>
                                                    <li><a href="tour-list.html">Tour List</a></li>
                                                    <li><a href="tour-single.html">Tour Single</a></li>
                                                    <li><a href="tour-single-list.html">Tour List Single </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About</a></li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog-default.html">Blog Default</a></li>
                                                    <li><a href="blog-single.html">Blog Single</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="testimonials.html">Clients Reviews</a> </li>
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
                                            <li><a href="contact-us.html">Contact</a></li>
                                            <li><a href="template-feature.html">Template Feature</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.navigations-->
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>


    @endsection
