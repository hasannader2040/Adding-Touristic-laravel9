@extends('layouts.frontbase')
@section('title', 'data->title')
@section('content')

    <div class="wrapper">
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
                            <div class="logo"> <a href="index.html"><img src="{{ asset('assets/images')}}/logo.png" alt=""> </a> </div>
                        </div>
                        <div class="col-xl-9 col-lg-10 col-md-9 col-sm-12 col-12">
                            <!-- navigations-->
                            <div class="navigation">
                                <div id="navigation">
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li class="has-sub"><a href="#">Tour Packages</a>
                                            <ul>
                                                <li><a href="tour-list.html">Tour List</a></li>
                                                <li><a href="tour-single.html">Tour Single</a></li>
                                                <li><a href="tour-single-list.html">Tour List Single </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="has-sub"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog-default.html">Blog Default</a></li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="#">Pages</a>
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
        </div>
        <!-- /. header-section-->
        <!-- page-header -->
        <div class="tour-pageheader">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="tour-caption">
                            <h1 class="text-white tour-title">Singapore</h1>
                            <p class="tour-caption-text text-white">
                                <strong class="tour-rate">
                                    <span style="text-decoration: overline;">$1499</span>
                                    <span>${{1499 - (1499 * 5 / 100 )}}</span>
                                </strong>( 3 nights | 4 days )</p>
                            <a href="#" class="btn btn-primary mb10">Book Your Tour</a>
                            <a href="#" class="btn btn-white mb10">view map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-header-->

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">

{{--                        <div class="highlights-section mb60">--}}
{{--                            <h3>Highlights</h3>--}}
{{--                            <p>Nullam eget nisi urnaed mauris purus elementumat mollis acgravida utlacusulla ut velit id metus pellentesque elementumonec dignissim lorem estet egestas lectus pharetra auctorulla facilisi enean sed scelerisque urnaeu feugiat maurisuspendisse non sodales erat. </p>--}}
{{--                            <ul class="angle list-none title-bold mb40">--}}
{{--                                <li>Guided Singapore city tour</li>--}}
{{--                                <li>Sentosa ice land with wings of times show</li>--}}
{{--                                <li>Maritime musuem</li>--}}
{{--                                <li>Sea Aquarium</li>--}}
{{--                                <li>Full day universal Studio + meal coupon</li>--}}
{{--                            </ul>--}}
{{--                            <h4 class="mb30">Singapore Highlights</h4>--}}
{{--                            <div class="slide-thumb-gallery">--}}

{{--                                <div class="owl-carousel" data-slider-id="1">--}}
{{--                                    <div><img src="{{ asset('assets/images')}}/slide_big_1.jpg" alt="" class="img-fluid"></div>--}}
{{--                                    <div><img src="{{ asset('assets/images')}}/slide_big_2.jpg" alt="" class="img-fluid"></div>--}}
{{--                                    <div><img src="{{ asset('assets/images')}}/slide_big_3.jpg" alt="" class="img-fluid"></div>--}}
{{--                                    <div><img src="{{ asset('assets/images')}}/slide_big_4.jpg" alt="" class="img-fluid"></div>--}}
{{--                                </div>--}}
{{--                                <div class="owl-thumbs" data-slider-id="1">--}}
{{--                                    <button class="owl-thumb-item"><img src="{{ asset('assets/images')}}/slide_small_1.jpg" alt="" class="img-fluid"></button>--}}
{{--                                    <button class="owl-thumb-item"><img src="{{ asset('assets/images')}}/slide_small_2.jpg" alt="" class="img-fluid"></button>--}}
{{--                                    <button class="owl-thumb-item"><img src="{{ asset('assets/images')}}/slide_small_3.jpg" alt="" class="img-fluid"></button>--}}
{{--                                    <button class="owl-thumb-item"><img src="{{ asset('assets/images')}}/slide_small_4.jpg" alt="" class="img-fluid"></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="journey-section mb60">

                            </div>
{{--                            <div class="well-bg-block">--}}
{{--                                <h4 class="journey-day-title">Day 2 : Sentosa Iceland</h4>--}}
{{--                                <ul class="angle list-none">--}}
{{--                                    <li>Phasellus eget euismod nisinon cursus quamed vitae ipsum augue--}}
{{--                                    <li>Vestibulum rutrum atnuquis pretiuamus sed felisat leo</li>--}}
{{--                                    <li>Fusce in maximus risusat mollis arcutiam consmassa vulputate</li>--}}
{{--                                    <li>Morbi laciniorci venenatis anteiulis consequaorbi sitame</li>--}}
{{--                                    <li>Duis egestas turpis consectetur pulvinar eleifterdum et malesuada</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="well-bg-block">--}}
{{--                                <h4 class="journey-day-title">Day 3 : Sunway Lagoon</h4>--}}
{{--                                <ul class="angle list-none">--}}
{{--                                    <li>Fusce in maximus risusat mollis arcutiam consmassa vulputate</li>--}}
{{--                                    <li>Vestibulum rutrum atnuquis pretiuamus sed felisat leo</li>--}}
{{--                                    <li>Phasellus eget euismod nisinon cursus quamed vitae ipsum augue</li>--}}
{{--                                    <li>Duis egestas turpis consecinar eleifterdum et malesuada</li>--}}
{{--                                    <li>Morbi laciniorci venenatis anteiulis consequaorbi sitame</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                        <div class="included-section mb60">
                            <h3 class="mb30">details</h3>
                            <div class="row">
                                {!!$data->detail!!}
{{--                                {{$data->detail}}--}}


{{--                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}
{{--                                    <ul class="arrow list-none">--}}
{{--                                        <li>Fusce in mais arcutiam consmassa vulputate</li>--}}
{{--                                        <li>Vestibulum rutrutiuamus sed felisat leo</li>--}}
{{--                                        <li>Eget euismod ns quamed vitae ipsum augue</li>--}}
{{--                                        <li>Destas turpis consect malesuada</li>--}}
{{--                                        <li>Laciniorci venenatis anteiulisrbi sitame</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}
{{--                                    <ul class="arrow list-none">--}}
{{--                                        <li>Eget euismod ns quamed vitae ipsum augue</li>--}}
{{--                                        <li>Vestibulum rutrutiuamus sed felisat leo</li>--}}
{{--                                        <li>Fusce in mais arcutiam consmassa vulputate</li>--}}
{{--                                        <li>Destas turpis consect malesuada</li>--}}
{{--                                        <li>Laciniorci venenatis anteiulisrbi sitame</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="reviews-section mb60">
                            <h3 class="mb40">Customer Reviews</h3>
                            <div class="review-block">
                                <div class="review-img"><img src="{{ asset('assets/images')}}/user_img_1.jpg" alt="" class="rounded-circle"></div>
                                <div class="review-content">
                                    <h5 class="title-bold d-inline">Jennifer Wirtz</h5>
                                    <div class="star-rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                    <p>Vivamus velit ligula tempus id dui apretium imperdiet liguorbi sit amet pharetra leo. Integer tempus enim vel placerat consectetu ecenascula.</p>
                                </div>
                            </div>
                            <div class="review-block">
                                <div class="review-img"><img src="{{ asset('assets/images')}}/user_img_2.jpg" alt="" class="rounded-circle"></div>
                                <div class="review-content">
                                    <h5 class="title-bold d-inline">Maria Hershberger</h5>
                                    <div class="star-rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                    <p>Eempus id dui apretium imperdiet ligorbi sitamet pharetra leonteger tempus enimvel placerat consectaecenas vehicula.</p>
                                </div>
                            </div>
                            <div class="review-block">
                                <div class="review-img"><img src="{{ asset('assets/images')}}/user_img_3.jpg" alt="" class="rounded-circle"></div>
                                <div class="review-content">
                                    <h5 class="title-bold d-inline">Della Betty</h5>
                                    <div class="star-rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                    <p>Nullam orci exegestaset finibus amolestie ut nisuspendisse mollisleo sedcongue iaculis eratneque consectetur nisiquis feugia.</p>
                                </div>
                            </div>
                        </div>

                    <div  style="width: 100%;">

                        <!-- form -->
                        <div class="widget-form">
                            <h3 class="text-white mb30"> write your feedback </h3>

                            <form
                     action="{{route('place', ['id' => $data->id])}}" method="get"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="select"></label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <div class="form-group">

                                                <label class="text-white mb30">keywords</label>
                                                <input type="text" class="form-control" id="keywords" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label class="text-white mb30">description</label>
                                                <input type="text" class="form-control" id="description" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label class="text-white mb30">company</label>
                                                <input type="text" class="form-control" id="company" placeholder="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="submit" name="singlebutton" class="btn btn-primary">submit your feedback</button>
                                    </div>
                                </div>
                            </form>
                            <!-- /.form -->
                        </div>
                        <!-- /.enguiry-form -->
                        <div id="contact-map" class="widget-map"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light similar-package">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-title">
                            <h2>Similar Packages</h2>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <!-- destination-section -->
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="{{ asset('assets/images')}}/destination_1.jpg" alt="">
                                <a href="#" class="desti-title">Singapore</a>
                                <div class="overlay">
                                </div>
                                <div class="text">
                                    <h3 class="mb20 text-white">Singapore</h3>
                                    <ul class="angle list-none">
                                        <li>4 Nights / 3 days</li>
                                        <li>3 Star hotel</li>
                                        <li>Breakfast and Dinner</li>
                                    </ul>
                                    <p class="price">$1599</p>
                                    <a href="#" class="btn-link">Go for Singapore <i class="fa fa-angle-right"></i></a></div>
                            </div>
                        </div>
                        <!-- /.destination-section -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <!-- destination-section -->
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="{{ asset('assets/images')}}/destination_2.jpg" alt="">
                                <a href="#" class="desti-title">Thailand</a>
                                <div class="overlay">
                                </div>
                                <div class="text">
                                    <h3 class="mb20 text-white">Thailand</h3>
                                    <ul class="angle list-none">
                                        <li>5 Nights / 4 days</li>
                                        <li>3 Star hotel</li>
                                        <li>Breakfast and Dinner</li>
                                    </ul>
                                    <p class="price">$2599</p>
                                    <a href="#" class="btn-link">Go for Thailand <i class="fa fa-angle-right"></i></a></div>
                            </div>
                        </div>
                        <!-- /.destination-section -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <!-- destination-section -->
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="{{ asset('assets/images')}}/destination_3.jpg" alt="">
                                <a href="#" class="desti-title">Vietnam</a>
                                <div class="overlay">
                                </div>
                                <div class="text">
                                    <h3 class="mb20 text-white">Vietnam</h3>
                                    <ul class="angle list-none">
                                        <li>6 Nights / 5 days</li>
                                        <li>3 Star hotel</li>
                                        <li>Breakfast and Dinner</li>
                                    </ul>
                                    <p class="price">$4599</p>
                                    <a href="#" class="btn-link">Go for Vietnam <i class="fa fa-angle-right"></i></a></div>
                            </div>
                        </div>
                        <!-- /.destination-section -->
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter -->
        <div class="newsletter-wrapper newsletter-overlay" style="background: url(images/newsletter_wrapper.jpg) no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 offset-md-5 col-md-6 col-sm-12 col-12">
                        <div class="newsletter-block">
                            <h1 class="newsletter-title">Join The Newsletter</h1>
                            <p class="mb30">Subscribe the newsletter and get update for discounts on tours.</p>
                            <form>
                                <div class="input-group add-on">
                                    <input class="form-control" placeholder="email address here" type="text">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary newsletter-btn" type="submit">subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.newsletter -->
{{--        <!-- footer -->--}}
{{--        <div class="footer">--}}
{{--            <div class="container">--}}
{{--                <div class="row ">--}}
{{--                    <!-- footer-logo -->--}}
{{--                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">--}}
{{--                        <div class="ft-img"><img src="{{ asset('assets/images')}}/ft_logo.png" alt=""></div>--}}
{{--                    </div>--}}
{{--                    <!-- /.footer-logo -->--}}
{{--                    <!-- footer-links -->--}}
{{--                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">--}}
{{--                        <div class="footer-widget ">--}}
{{--                            <h3 class="footer-title ">Quick Links</h3>--}}
{{--                            <ul class="angle list-none">--}}
{{--                                <li><a href="# ">Home</a></li>--}}
{{--                                <li><a href="# ">Tour</a></li>--}}
{{--                                <li><a href="# ">Blog</a></li>--}}
{{--                                <li><a href="# ">Customer Reviews</a></li>--}}
{{--                                <li><a href="# ">Contact</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.footer-links -->--}}
{{--                    <!-- footer-tours -->--}}
{{--                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">--}}
{{--                        <div class="footer-widget ">--}}
{{--                            <h3 class="footer-title ">Tour Packages</h3>--}}
{{--                            <ul class="angle list-none">--}}
{{--                                <li><a href="# ">International Tour</a>--}}
{{--                                <li><a href="# ">Domestic Tour</a></li>--}}
{{--                                <li><a href="# ">Adventure Tour</a></li>--}}
{{--                                <li><a href="# ">Business Tour</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.footer-Tours -->--}}
                    <!-- footer-post -->
{{--                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">--}}
{{--                        <div class="footer-widget">--}}
{{--                            <h3 class="footer-title">Contact Info</h3>--}}
{{--                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-map-marker"></i></span> <span class="ft-contact-text">3927 Birch StreetEl Paso, TX 79930 </span></div>--}}
{{--                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-phone "></i></span> <span class="ft-contact-text">+180-123-4567</span></div>--}}
{{--                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-envelope "></i></span> <span class="ft-contact-text">info@travel.com</span></div>--}}
{{--                            <div class="social-icon "> <a href="# " class="btn-social-icon "><i class="fa fa-facebook "></i></a> <a href="# " class="btn-social-icon "><i class="fa fa-twitter "></i></a> <a href="# " class="btn-social-icon "><i class="fa fa-linkedin "></i></a> <a href="# " class="btn-social-icon "><i class="fa fa-google-plus "></i></a> </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.footer-post -->--}}
                </div>
                <!-- tiny-footer -->
            </div>
            <div class="tiny-footer ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                    </div>
                    <!-- /. tiny-footer -->
                </div>
            </div>
        </div>


        <!-- /.footer -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form>
                                        <div class="search-form">
                                            <input type="text" class="form-control" placeholder="Find here">
                                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">close</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Modal -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('assets/js')}}/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('assets/js')}}/bootstrap.min.js"></script>
        <script src="{{ asset('assets/js')}}/menumaker.js"></script>
        <script src="{{ asset('assets/js')}}/jquery.sticky.js"></script>
        <script src="{{ asset('assets/js')}}/sticky-header.js"></script>
        <!-- owl-thumb JavaScript -->
        <script src="{{ asset('assets/js')}}/owl.carousel.min.js"></script>
        <script src="{{ asset('assets/js')}}/owl.carousel2.thumbs.min.js"></script>
        <script src="{{ asset('assets/js')}}/thumb.js"></script>
        <script src="{{ asset('assets/js')}}/jquery-ui.js"></script>
        <script src="{{ asset('assets/js')}}/date.js"></script>
        <script src="{{ asset('assets/js')}}/return-to-top.js"></script>


        <script>
            function initMap() {
                var uluru = {
                    lat: 23.094197,
                    lng: 72.558148
                };
                var map = new google.maps.Map(document.getElementById('contact-map'), {
                    zoom: 14,
                    center: uluru,
                    scrollwheel: false
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    icon: 'images/map_marker.png'

                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZib4Lvp0g1L8eskVBFJ0SEbnENB6cJ-g&amp;callback=initMap">
        </script>
    </div>

@endsection


