@extends('layouts.adminbase')

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        #myTabContent div[class="tab-pane fade"]{
            display: none !important;
        }
    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js" > </script>
@endsection

{{--@section('head')--}}
{{--      <script  src=""   > </script>--}}
{{--@endsection--}}

@section('title', 'sittings ')
@include('admin.sidebar')

@section('content')


{{--    the beginning of the code of that thing --}}

    <div class="layout-page" style="margin-left: 150px; margin-bottom: 150px;">
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container " style="justify-content: center; flex-direction: column;">

{{--                <div class="col-xl-6">--}}
{{--                    <h6 class="text-muted">Basic</h6>--}}
{{--                    <div class="nav-align-top mb-4">--}}
{{--                        <ul class="nav nav-tabs" role="tablist">--}}
{{--                            <li class="nav-item">--}}
{{--                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false">--}}
{{--                                    Home--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">--}}
{{--                                    Profile--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="true">--}}
{{--                                    Messages--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#trial" aria-controls="trial" aria-selected="true">--}}
{{--                                    Trials--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <div class="tab-content">--}}
{{--                            <div class="tab-pane fade" id="navs-top-home" role="tabpanel">--}}
{{--                                <p>--}}
{{--                                    Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps--}}
{{--                                    powder. Bear claw candy topping.--}}
{{--                                </p>--}}
{{--                                <p class="mb-0">--}}
{{--                                    Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon--}}
{{--                                    jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow--}}
{{--                                    jujubes sweet.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">--}}
{{--                                <p>--}}
{{--                                    Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice--}}
{{--                                    cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream--}}
{{--                                    cheesecake fruitcake.--}}
{{--                                </p>--}}
{{--                                <p class="mb-0">--}}
{{--                                    Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah--}}
{{--                                    cotton candy liquorice caramels.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade active show" id="navs-top-messages" role="tabpanel">--}}
{{--                                <p>--}}
{{--                                    Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies--}}
{{--                                    cupcake gummi bears cake chocolate.--}}
{{--                                </p>--}}
{{--                                <p class="mb-0">--}}
{{--                                    Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet--}}
{{--                                    roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly--}}
{{--                                    jelly-o tart brownie jelly.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade active show" id="trial" role="tabpanel">--}}
{{--                                <p>--}}
{{--                                    Trial 1--}}
{{--                                </p>--}}
{{--                                <p class="mb-0">--}}
{{--                                    Trial 2--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}



                <section class="au-breadcrumb2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Setting</li>
                                        </ul>
                                    </div>
                                    <form class="au-form-icon--sm" action="" method="post">
                                        <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                        <button class="au-btn--submit2" type="submit">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="welcome p-t-10 mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="title-4">Settings
                                </h1>
                                <hr>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- PAGE CONTENT-->
                <!-- Tabs-->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                role="tab" aria-controls="home-tab-pane" aria-selected="true">Main
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second-tab-pane" type="button"
                                role="tab" aria-controls="second-tab-pane" aria-selected="false">More Details
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third-tab-pane" type="button"
                                role="tab" aria-controls="third-tab-pane" aria-selected="false">Social Media
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="forth-tab" data-bs-toggle="tab" data-bs-target="#forth-tab-pane" type="button"
                                role="tab" aria-controls="forth-tab-pane" aria-selected="false">About Us
                        </button>

{{--                        <script>--}}

{{--                            ClassicEditor--}}
{{--                                .create( document.querySelector( '#contact-text' )--}}

{{--                                )--}}
{{--                                .then( editor => {--}}
{{--                                    console.log( editor );--}}
{{--                                } )--}}
{{--                                .catch( error => {--}}
{{--                                    console.error(error);--}}
{{--                                } );--}}
{{--                        </script>--}}



                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="fifth-tab" data-bs-toggle="tab" data-bs-target="#fifth-tab-pane" type="button"
                                role="tab" aria-controls="fifth-tab-pane" aria-selected="false">Contact
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sixth-tab" data-bs-toggle="tab" data-bs-target="#sixth-tab-pane" type="button"
                                role="tab" aria-controls="sixth-tab-pane" aria-selected="false">References
                        </button>
                    </li>

                </ul>


                <div class="pl-3 pt-5" >
                    <form class="form-horizontal" action="{{route('admin.setting.update')}}" method="post">
                        @csrf
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="set-general">
                            <!--            first tab content-->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                                     tabindex="0">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="title" class=" form-control-label">Title</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="title" name="title" placeholder="Title" class="form-control"
                                                   value="{{$data->title}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="keywords" class=" form-control-label">Keywords</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="keywords" value="{{$data->keywords}}" name="keywords"
                                                   placeholder="Keywords"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="description" class=" form-control-label">Description</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            class="col-12 col-md-9"
                                            <input type="text" id="description" value="{{$data->description}}" name="description"
                                                   placeholder="Description" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="company" class=" form-control-label">Company</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="company" value="{{$data->company}}" name="company"
                                                   placeholder="Company"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="address" class=" form-control-label">Address</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="address" value="{{$data->address}}" name="address"
                                                   placeholder="Address"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="phone" class=" form-control-label">Phone</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="phone" name="phone" value="{{$data->phone}}" placeholder="Phone"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email" class=" form-control-label">E-mail</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="email" name="email" value="{{$data->email}}" placeholder="E-mail"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="fax" class=" form-control-label">Fax</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="fax" name="fax" value="{{$data->fax}}" placeholder="Fax"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="icon-input" class=" form-control-label">Icon</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="icon-input" value="{{$data->icon}}" name="icon"
                                                   class="form-control-file">
                                        </div>
                                    </div>

                                </div>

                                <!--second tab content-->
                                <div class="tab-pane fade" id="second-tab-pane" role="tabpanel" aria-labelledby="second-tab"
                                     tabindex="0">


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="smtpserver" class="form-control-label">Smtp Server</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="smtpserver" value="{{$data->smtpserver}}" name="smtpserver"
                                                   placeholder="Smtp Server" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="smtpemail" class="form-control-label">Smtp E-mail</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="smtpemail" value="{{$data->smtpemail}}" name="smtpemail"
                                                   placeholder="Smtp Server" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="smtppassword" class="form-control-label">Smtp Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="smtppassword" value="{{$data->password}}" name="smtppassword"
                                                   placeholder="Smtp Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="smtpport" class="form-control-label">Smtp Port</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="smtpport" value="{{$data->smtpsupport}}" name="smtpport"
                                                   placeholder="Smtp Port" class="form-control">
                                        </div>
                                    </div>


                                </div>


                                <!--third tab content-->
                                <div class="tab-pane fade" id="third-tab-pane" role="tabpanel" aria-labelledby="third-tab"
                                     tabindex="0">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="facebook" class="form-control-label">Facebook</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="facebook" value="{{$data->facebook}}" name="facebook"
                                                   placeholder="Facebook"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="instagram" class="form-control-label">Instagram</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="instagram" value="{{$data->instagram}}" name="instagram"
                                                   placeholder="Instagram" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="twitter" class="form-control-label">Twitter</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="twitter" value="{{$data->twitter}}" name="twitter"
                                                   placeholder="Twitter"
                                                   class="form-control">
                                        </div>
                                    </div>

                                </div>


                                <!--forth tab content-->
                                <div class="tab-pane fade" id="forth-tab-pane" role="tabpanel" aria-labelledby="forth-tab"
                                     tabindex="0">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="about-text" class="form-control-label">About us</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="aboutus" rows="2" id="about-text" class="form-control border p-2">{{$data->aboutus}}</textarea>

                                            <script>

                                                ClassicEditor
                                                    .create( document.querySelector( '#about-text' )

                                                    )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error(error);
                                                    } );
                                            </script>

                                        </div>

                                    </div>

                                </div>

                                <!--forth tab content-->
                                <div class="tab-pane fade" id="fifth-tab-pane" role="tabpanel" aria-labelledby="fifth-tab"
                                     tabindex="0">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="contact-text" class="form-control-label">Contact</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="contact" rows="2" id="contact-text" class="form-control border p-2" >{{$data->contact}}</textarea>

                                            <script>

                                                ClassicEditor
                                                    .create( document.querySelector( '#contact-text' )

                                                    )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error(error);
                                                    } );
                                            </script>

                                        </div>
                                    </div>
                                </div>

                                <!--forth tab content-->
                                <div class="tab-pane fade" id="sixth-tab-pane" role="tabpanel" aria-labelledby="sixth-tab"
                                     tabindex="0">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="references-text" class="form-control-label">References</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="references" rows="2" id="references-text" class="form-control border p-2" >{{$data->references}}</textarea>
                                        </div>

                                        <script>

                                            ClassicEditor
                                                .create( document.querySelector( '#references-text' )

                                                )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error(error);
                                                } );
                                        </script>


                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-lg">
                                                <i class="fa fa-dot-circle-o"></i> Update
                                            </button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>


    {{--the end of the code of that thing --}}




    {{--

@endsection
