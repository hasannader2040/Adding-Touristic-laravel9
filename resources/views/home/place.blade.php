@extends('layouts.frontbase')
@section('title', 'data->title')
@section('content')



        <!-- page-header -->
        <div class="baackground-img">
            <img src="{{Storage::URL($data->image)}}">
            <div class="container" style="margin-top: -442px;">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="tour-caption">
                            <h1 class="text-white tour-title">{{$data->title}}</h1>
                            <p class="tour-caption-text text-white">
{{--                                <strong class="tour-rate">--}}
{{--                                    <del>{{$data->price}}</del>--}}
{{--                                    <ins>${{1499 - (1499 * 5 / 100 )}}</ins>--}}
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
            @include('home.message')
            <div class="container">
                <div class="">
                    <div class="included-section">
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
                                <h5 class="title-bold d-inline">{{$rs->user->name}}</h5>

                                <div class="star-rating">
{{--                                    <span><i class="fa fa-star" @if($rs>rate<1)></i></span>--}}
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <p>{{$rs->review}}</p>
                            </div>commend
                        </div>

                        @endforeach


                        <form action="{{route('storeComment')}}" method="post" >
                            @csrf
                        <div class="form-group" style="width: 100%;">
                            <label for="place_id"></label>
                            <input type="hidden" class="form-control" name="place_id" value="{{$data->id}}">
                            it has a relationship
                        </div>
                        <div class="form-group" style="width: 100%;">
                            <label for="subject">Your Subject *</label>
                            <input type="text" class="form-control" name="subject" style="width: 100%;">
                        </div>
                        <div class="form-group">
                            <label for="review">Your Review *</label>
                            <textarea type="text" class="form-control" name="review">
                                    </textarea>
                        </div>

                            <div class="rate starrating risingstar d-flex justify-content-center flex-row-reverse" >
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text"></label>
                            </div>
                            <div class="rating">
        <span class="rating_stars">
            <i class="rating_stars--black" style="width: 100%"></i>
        </span>
                                <a href="#product-comments" class="rating_comments"> </a>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlSelect2" class="form-label"></label>

                                <select name="status" class="form-select form-controll" id="exampleFormControlSelect2" aria-label="Multiple select example" >
                                    <option selected="">status</option>
                                    <option value="1">true</option>
                                    <option value="2">false</option>
                                </select>
                            </div>

                        @auth()


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
{{--                            <form  action="{{route('storeComment')}}" method="get" enctype="multipart/form-data">--}}
{{--                                                                         {{route('place', ['id' => $data->id])}}--}}
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

{{--                                            <label class="text-white mb30">your subject</label>--}}
{{--                                            <input type="text" class="form-control"  name="subject" id="subject" placeholder="">--}}
{{--                                        </div>--}}

{{--                                        <div class="form-group">--}}
{{--                                        <label for="place_id"></label>--}}
{{--                                        <input type="hidden" class="form-control" name="place_id" value="{{$data->id}}">--}}
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
{{--                        <!-- /.form -->--}}

                    </div>
                    <!-- /.enguiry-form -->


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
{{--                                    I should make them dynamic--}}
                                    <li>


                                    </li>
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


