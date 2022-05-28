@extends('layouts.frontbase')
@section('title', 'data->title')
@section('content')



        <!-- page-header -->
        <div class="tour-pageheader">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="tour-caption">
                            <h1 class="text-white tour-title">{{$data->title}}</h1>
                            <p class="tour-caption-text text-white">
                                <strong class="tour-rate">
                                    <del>{{$data->price}}</del>
                                    <ins>${{1499 - (1499 * 5 / 100 )}}</ins>
                                </strong>{{$data->description}}</p>
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
                @include('home.message')

                    </div>
                    <div class="included-section mb60">
                        <h3 class="mb30">details</h3>
                        <div class="row">
                            {!!$data->detail!!}
                        </div>

                    </div>

                    <div class="reviews-section mb60">
                        @foreach($reviews as $rs)

                        <h3 class="mb40">Customer Reviews</h3>
                        <div class="review-block">
                            <div class="review-img"><img src="{{ asset('assets/images')}}/user_img_1.jpg" alt="" class="rounded-circle"></div>
                            <div class="review-content">
                                <h5 class="title-bold d-inline">Jennifer Wirtz</h5>

                                <div class="star-rating">
{{--                                    <span><i class="fa fa-star" @if($rs>rate<1)></i></span>--}}
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <p>Vivamus velit ligula tempus id dui apretium imperdiet liguorbi sit amet pharetra leo. Integer tempus enim vel placerat consectetu ecenascula.</p>
                            </div>
                        </div>

                        @endforeach
                        <form action="{{route('storeComment')}}" method="post" >
                            @csrf
                        <div class="form-group">
                            <label for="place_id"></label>
                            <input type="hidden" class="form-control" name="place_id" value="{{$data->id}}">
                        </div>
                        <div class="form-group">
                            <label for="subject">Your Subject *</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="review">Your Review *</label>
                            <textarea type="text" class="form-control" name="review">
                                    </textarea>
                        </div>

                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                            <div class="rating">
        <span class="rating_stars">
            <i class="rating_stars--black" style="width: 100%"></i>
        </span>
                                <a href="#product-comments" class="rating_comments">69 Değerlendirme </a>
                            </div>

                        @auth()

                            <div class="form-control">
                                <input id="button" type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                @else
                                    <a href="/loginUser"  class="btn btn-primary px-3">For Submit Your Review, Please Login</a>
                                @endauth

                                </form>
                    </div>
                </div>
            </div>


                    </div>

                    <div  style="width: 100%;">

{{--                        <!-- form -->--}}
{{--                        <div class="widget-form">--}}
{{--                            <h3 class="text-white mb30"> write your feedback </h3>--}}

{{--                            <form--}}
{{--                                --}}{{--                                {{route('storecomment')}--}}
{{--                                action="{{route('place', ['id' => $data->id])}}" method="get"--}}
{{--                                enctype="multipart/form-data">--}}
{{--                                @csrf--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="control-label sr-only" for="select"></label>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="form-group">--}}

{{--                                            <label class="text-white mb30">keywords</label>--}}
{{--                                            <input type="text" class="form-control" id="keywords" placeholder="">--}}
{{--                                        </div>--}}

{{--                                        <div class="form-group">--}}
{{--                                            <label class="text-white mb30">description</label>--}}
{{--                                            <input type="text" class="form-control" id="description" placeholder="">--}}
{{--                                        </div>--}}

{{--                                        <div class="form-group">--}}
{{--                                            <label class="text-white mb30">company</label>--}}
{{--                                            <input type="text" class="form-control" id="company" placeholder="">--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">--}}


{{--                                </div>--}}
{{--                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">--}}
{{--                                    <button type="submit" name="singlebutton" class="btn btn-primary">submit your feedback</button>--}}
{{--                                </div>--}}

{{--                        </form>--}}
                        <!-- /.form -->
                    </div>
                    <!-- /.enguiry-form -->
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
                                    <button  type="submit">subscribe</button>
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
    <script>
        import DeleteTeamForm from "@/Pages/Teams/Partials/DeleteTeamForm";
        export default {
            components: {DeleteTeamForm}
        }
    </script>
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


