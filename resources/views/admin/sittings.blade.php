@extends('layouts.adminbase')

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        #myTabContent div[class="tab-pane fade"]{
            display: none !important;
        }
    </style>

@endsection

@section('title', 'sittings ')
@include('admin.sidebar')

@section('content')


{{--    <div class="nav-align-top mb-4" style="margin-left:500px; z-index:500000">--}}
{{--        <ul class="nav nav-tabs" role="tablist">--}}
{{--            <li class="nav-item">--}}
{{--                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">--}}
{{--                    Home--}}
{{--                </button>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">--}}
{{--                    Profile--}}
{{--                </button>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="false">--}}
{{--                    Messages--}}
{{--                </button>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <div class="tab-content">--}}
{{--            <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">--}}
{{--                <p>--}}
{{--                    Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps--}}
{{--                    powder. Bear claw candy topping.--}}
{{--                </p>--}}
{{--                <p class="mb-0">--}}
{{--                    Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon--}}
{{--                    jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow--}}
{{--                    jujubes sweet.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">--}}
{{--                <p>--}}
{{--                    Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice--}}
{{--                    cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream--}}
{{--                    cheesecake fruitcake.--}}
{{--                </p>--}}
{{--                <p class="mb-0">--}}
{{--                    Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah--}}
{{--                    cotton candy liquorice caramels.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">--}}
{{--                <p>--}}
{{--                    Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies--}}
{{--                    cupcake gummi bears cake chocolate.--}}
{{--                </p>--}}
{{--                <p class="mb-0">--}}
{{--                    Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet--}}
{{--                    roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly--}}
{{--                    jelly-o tart brownie jelly.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    the beginning of the code of that thing --}}

    <div class="layout-page">
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container " style="justify-content: center;">

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




    {{--        <section class="au-breadcrumb2">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-md-12">--}}
    {{--                        <div class="au-breadcrumb-content">--}}
    {{--                            <div class="au-breadcrumb-left">--}}
    {{--                                <span class="au-breadcrumb-span">You are here:</span>--}}
    {{--                                <ul class="list-unstyled list-inline au-breadcrumb__list">--}}
    {{--                                    <li class="list-inline-item active">--}}
    {{--                                        <a href="#">Home</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="list-inline-item seprate">--}}
    {{--                                        <span>/</span>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="list-inline-item">Setting</li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                            <form class="au-form-icon--sm" action="" method="post">--}}
    {{--                                <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">--}}
    {{--                                <button class="au-btn--submit2" type="submit">--}}
    {{--                                    <i class="zmdi zmdi-search"></i>--}}
    {{--                                </button>--}}
    {{--                            </form>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}

    {{--        <section class="welcome p-t-10 mb-5">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-md-12">--}}

    {{--                        <h1 class="title-4">Settings--}}
    {{--                        </h1>--}}
    {{--                        <hr>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}

    {{--        <!-- PAGE CONTENT-->--}}
    {{--        <div class="page-content--bgf7" style="background-color: #E5E5E5;">--}}
    {{--            <div class="container">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
    {{--                            <li class="nav-item active show">--}}
    {{--                                <a class="nav-link" id="set-general" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">General</a>--}}
    {{--                            </li>--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Smtp E-mail</a>--}}
    {{--                            </li>--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" id="set-social" data-toggle="tab" href="#social-content" role="tab" aria-controls="social-content" aria-selected="true">Social Media</a>--}}
    {{--                            </li>--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" id="set-about" data-toggle="tab" href="#about-content" role="tab" aria-controls="about-content" aria-selected="true">About us</a>--}}
    {{--                            </li>--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" id="set-content" data-toggle="tab" href="#contact-content" role="tab" aria-controls="contact-content" aria-selected="true">Contact Us</a>--}}
    {{--                            </li>--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" id="set-refernces" data-toggle="tab" href="#references-content" role="tab" aria-controls="references-content" aria-selected="true">References</a>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                        <div class="tab-content pl-3 pt-5" id="myTabContent">--}}
    {{--                            <form class="form-horizontal" action="{{route('admin.setting.update')}}" method="post">--}}
    {{--                                @csrf--}}
    {{--                                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="set-general">--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="title" class=" form-control-label">Title</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="title" name="title" placeholder="Title" class="form-control" value="{{$data->title}}">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="keywords" class=" form-control-label">Keywords</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="keywords" value="{{$data->keywords}}" name="keywords" placeholder="Keywords" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="description" class=" form-control-label">Description</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="description" value="{{$data->description}}" name="description" placeholder="Description" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="company" class=" form-control-label">Company</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="company" value="{{$data->company}}" name="company" placeholder="Company" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="address" class=" form-control-label">Address</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="address" value="{{$data->address}}" name="address" placeholder="Address" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="phone" class=" form-control-label">Phone</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="phone" name="phone" value="{{$data->phone}}" placeholder="Phone" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="email" class=" form-control-label">E-mail</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="email" name="email" value="{{$data->email}}" placeholder="E-mail" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="fax" class=" form-control-label">Fax</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="fax" name="fax" value="{{$data->fax}}" placeholder="Fax" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="icon" class=" form-control-label">Icon</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="file" id="icon-input" value="{{$data->icon}}" name="icon" class="form-control-file">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="smtpserver" class="form-control-label">Smtp Server</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="smtpserver" value="{{$data->smtpserver}}" name="smtpserver" placeholder="Smtp Server" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="smtpemail" class="form-control-label">Smtp E-mail</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="smtpemail" value="{{$data->smtpemail}}" name="smtpemail" placeholder="Smtp Server" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="smtppassword" class="form-control-label">Smtp Password</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="smtppassword" value="{{$data->password}}" name="smtppassword" placeholder="Smtp Password" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="smtpport" class="form-control-label">Smtp Port</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="smtpport" value="{{$data->smtpsupport}}" name="smtpport" placeholder="Smtp Port" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="tab-pane fade" id="social-content" role="tabpanel" aria-labelledby="set-social">--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="facebook" class="form-control-label">Facebook</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="facebook" value="{{$data->facebook}}" name="facebook" placeholder="Facebook" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="instagram" class="form-control-label">Instagram</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="instagram" value="{{$data->instagram}}" name="instagram" placeholder="Instagram" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row form-group">--}}
    {{--                                        <div class="col col-md-3">--}}
    {{--                                            <label for="twitter" class="form-control-label">Twitter</label>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-12 col-md-9">--}}
    {{--                                            <input type="text" id="twitter" value="{{$data->twitter}}" name="twitter" placeholder="Twitter" class="form-control">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="tab-pane fade" id="about-content" role="tabpanel" aria-labelledby="set-about">--}}
    {{--                                    <textarea name="aboutus" rows="5" id="about-text" class="border p-2" style="width: 100%; display: none;">{{$data->aboutus}}</textarea>--}}
    {{--                                </div>--}}

    {{--                                <div class="tab-pane fade" id="contact-content" role="tabpanel" aria-labelledby="set-content">--}}
    {{--                                    <textarea name="contact" rows="5" id="contact-text" class="border p-2" style="width: 100%; display: none;">{{$data->contact}}</textarea>--}}

    {{--                                </div>--}}

    {{--                                <div class="tab-pane fade" id="references-content" role="tabpanel" aria-labelledby="set-refernces">--}}
    {{--                                    <textarea name="references" rows="5" id="references-text" class="border p-2" style="width: 100%; display: none;">{{$data->references}}</textarea>--}}
    {{--                                </div>--}}

    {{--                                <div class="card-footer">--}}
    {{--                                    <button type="submit" class="btn btn-primary btn-lg">--}}
    {{--                                        <i class="fa fa-dot-circle-o"></i> Update--}}
    {{--                                    </button>--}}
    {{--                                </div>--}}
    {{--                            </form>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--  I have to add the editor --}}



{{--   ............................................................................... --}}
{{--    <div class="layout-page">--}}
{{--        <div class="layout-wrapper layout-content-navbar">--}}
{{--            <div class="layout-container">--}}

{{--                <div class="w3-bar w3-black">--}}
{{--                    <button class="w3-bar-item w3-button" onclick="openCity('London')">London</button>--}}
{{--                    <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Paris</button>--}}
{{--                    <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Tokyo</button>--}}
{{--                    <button class="w3-bar-item w3-button" onclick="openCity('aboutUs')">about us</button>--}}
{{--                    <button class="w3-bar-item w3-button" onclick="openCity('contact_page')">contact page</button>--}}
{{--                    <button class="w3-bar-item w3-button" onclick="openCity('References')">References</button>--}}
{{--                </div>--}}

{{--                <div id="London" class="w3-container city">--}}
{{--                    <h2>London</h2>--}}
{{--                    <p>London is the capital city of England.</p>--}}
{{--                </div>--}}

{{--                <div id="Paris" class="w3-container city" style="display:none">--}}
{{--                    <h2>Paris</h2>--}}
{{--                    <p>Paris is the capital of France.</p>--}}
{{--                </div>--}}

{{--                <div id="Tokyo" class="w3-container city" style="display:none">--}}
{{--                    <h2>Tokyo</h2>--}}
{{--                    <p>Tokyo is the capital of Japan.</p>--}}
{{--                </div>--}}

{{--                <script>--}}
{{--                    function openCity(cityName) {--}}
{{--                        var i;--}}
{{--                        var x = document.getElementsByClassName("city");--}}
{{--                        for (i = 0; i < x.length; i++) {--}}
{{--                            x[i].style.display = "none";--}}
{{--                        }--}}
{{--                        document.getElementById(cityName).style.display = "block";--}}
{{--                    }--}}
{{--                </script>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    {{--   ............................................................................... --}}



    {{--   first of old my code --}}

{{--            <!-- Layout wrapper -->--}}
{{--                <div class="layout-page">--}}
{{--                    <div class="layout-wrapper layout-content-navbar">--}}
{{--                        <div class="layout-container">--}}

{{--        <div class="w3-bar w3-black">--}}
{{--            <h1> Settings </h1>--}}
{{--            <button class="w3-bar-item w3-button" onclick="openCity('London')">general</button>--}}
{{--            <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Smtp Email</button>--}}
{{--            <button class="w3-bar-item w3-button" onclick="openCity('social_Media')">social Media</button>--}}
{{--            <button class="w3-bar-item w3-button" onclick="openCity('aboutUs')">about us</button>--}}
{{--            <button class="w3-bar-item w3-button" onclick="openCity('contact_page')">contact page</button>--}}
{{--            <button class="w3-bar-item w3-button" onclick="openCity('References')">References</button>--}}

{{--        </div>--}}

{{--        <div id="London" class="city">--}}
{{--            <div id="London" class="city" style="display:none">--}}

{{--            <!--        here is the main tab content-->--}}
{{--            <form action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Title</label>--}}
{{--                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="project title">--}}
{{--                    <small id="Title" class="form-text text-muted"></small>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">keywords</label>--}}
{{--                    <input type="text" class="form-control" id="keywords" placeholder="">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">description</label>--}}
{{--                    <input type="text" class="form-control" id="description" placeholder="">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">company</label>--}}
{{--                    <input type="text" class="form-control" id="company" placeholder="">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">Address</label>--}}
{{--                    <input type="text" class="form-control" id="Address" placeholder="">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">phone</label>--}}
{{--                    <input type="text" class="form-control" id="phone" placeholder="">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">Email</label>--}}
{{--                    <input type="Email" class="form-control" id="email" placeholder="">--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}

{{--        <div id="Paris" class="city" style="display:none">--}}

{{--            and here is NOTHER CONTENT--}}

{{--            <form action="{{route('admin.setting.update')}}" method="post">--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">SMTPserver</label>--}}
{{--                    <input type="text" class="form-control" id="SMTPserver" placeholder="text">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">SMTP password</label>--}}
{{--                    <input type="password" class="form-control" id="SMTPpassword" placeholder="text">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">SMTP facebook</label>--}}
{{--                    <input type="text" class="form-control" id="SMTPfacebook" placeholder="text">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">SMTP instrgram</label>--}}
{{--                    <input type="text" class="form-control" id="SMTPinstrgram" placeholder="text">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">SMTP twitter</label>--}}
{{--                    <input type="text" class="form-control" id="SMTPtwitter" placeholder="text">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">SMTP youtube</label>--}}
{{--                    <input type="text" class="form-control" id="SMTPyoutube" placeholder="text">--}}
{{--                </div>--}}

{{--                <button type="submit" class="btn btn-primary">update setting </button>--}}
{{--            </form>--}}
{{--        </div>--}}

{{--        <div id="social_Media" class="city" style="display:none">--}}

{{--        </div>--}}


{{--        <div id="aboutUs" class="city" style="display:none">--}}

{{--            <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>--}}

{{--            <div id="editor">This is some sample content.</div>--}}
{{--            <script>--}}
{{--                ClassicEditor--}}
{{--                    .create( document.querySelector( '#editor' ) )--}}
{{--                    .then( editor => {--}}
{{--                        console.log( editor );--}}
{{--                    } )--}}
{{--                    .catch( error => {--}}
{{--                        console.error( error );--}}
{{--                    } );--}}
{{--            </script>--}}

{{--            <form action="{{route('admin.setting.update')}}" method="post">--}}
{{--                @csrf--}}
{{--                <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>--}}
{{--                <div id="editor">This is some sample content.</div>--}}
{{--                <script>--}}
{{--                    ClassicEditor--}}
{{--                        .create( document.querySelector( '#editor' )--}}
{{--                       );--}}
{{--                </script>--}}
{{--            <button type="submit" class="btn btn-primary">update setting </button>--}}
{{--            </form>--}}

{{--                    another thing for connatiing--}}
{{--            <script>--}}
{{--                function openCity(cityName) {--}}
{{--                    var i;--}}
{{--                    var x = document.getElementsByClassName("city");--}}
{{--                    for (i = 0; i < x.length; i++) {--}}
{{--                        x[i].style.display = "none";--}}
{{--                    }--}}
{{--                    document.getElementById(cityName).style.display = "block";--}}
{{--                }--}}

{{--            </script>--}}
{{--        </div>--}}


{{--        <div id="contact_page" class="city" style="display:none">--}}



{{--        </div>--}}


{{--        <div id="References" class="city" style="display:none">--}}



{{--        </div>--}}
{{--        </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


    {{--   the end of old my code --}}

    {{--...................................................................--}}
    {{--    <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">--}}
    {{--        <div class="container-fluid">--}}
    {{--            <a class="navbar-brand" href="javascript:void(0)">Navbar</a>--}}
    {{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-2" aria-controls="navbar-ex-2" aria-expanded="false" aria-label="Toggle navigation">--}}
    {{--                <span class="navbar-toggler-icon"></span>--}}
    {{--            </button>--}}
    {{--            <div class="collapse navbar-collapse" id="navbar-ex-2">--}}
    {{--                <div class="navbar-nav me-auto">--}}
    {{--                    <a class="nav-item nav-link active" href="javascript:void(0)">Home</a>--}}
    {{--                    <a class="nav-item nav-link" href="javascript:void(0)">About</a>--}}
    {{--                    <a class="nav-item nav-link" href="javascript:void(0)">Contact</a>--}}
    {{--                </div>--}}

    {{--                <span class="navbar-text">Marshmallow brownie lemon drops cheesecake.</span>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}
    {{--...................................................................--}}





    {{--    <!-- Layout wrapper -->--}}
    {{--        <div class="layout-page">--}}
    {{--            <div class="layout-wrapper layout-content-navbar">--}}
    {{--                <div class="layout-container">--}}

    {{--    <div class="col-lg-6">--}}
    {{--        <small class="text-light fw-semibold">Horizontal</small>--}}
    {{--        <div class="demo-inline-spacing mt-3">--}}
    {{--            <div class="list-group list-group-horizontal-md text-md-center">--}}
    {{--                <a class="list-group-item list-group-item-action" id="home-list-item" data-bs-toggle="list" href="#horizontal-home">Home</a>--}}
    {{--                <a class="list-group-item list-group-item-action" id="profile-list-item" data-bs-toggle="list" href="#horizontal-profile">Profile</a>--}}
    {{--                <a class="list-group-item list-group-item-action active" id="messages-list-item" data-bs-toggle="list" href="#horizontal-messages">Messages</a>--}}
    {{--                <a class="list-group-item list-group-item-action" id="settings-list-item" data-bs-toggle="list" href="#horizontal-settings">Settings</a>--}}
    {{--            </div>--}}
    {{--            <div class="tab-content px-0 mt-0">--}}
    {{--                <div class="tab-pane fade" id="horizontal-home">--}}
    {{--                    Donut sugar plum sweet roll biscuit. Cake oat cake gummi bears. Tart wafer wafer halvah--}}
    {{--                    gummi bears cheesecake. Topping croissant cake sweet roll. Dessert fruitcake gingerbread--}}
    {{--                    halvah marshmallow pudding bear claw cheesecake. Bonbon dragée cookie gummies. Pudding--}}
    {{--                    marzipan liquorice. Sugar plum dragée cupcake cupcake cake dessert chocolate bar. Pastry--}}
    {{--                    lollipop lemon drops lollipop halvah croissant. Pastry sweet gingerbread lemon drops topping--}}
    {{--                    ice cream.--}}
    {{--                </div>--}}
    {{--                <div class="tab-pane fade" id="horizontal-profile">--}}
    {{--                    Muffin lemon drops chocolate chupa chups jelly beans dessert jelly-o. Soufflé gummies--}}
    {{--                    gummies. Ice cream powder marshmallow cotton candy oat cake wafer. Marshmallow gingerbread--}}
    {{--                    tootsie roll. Chocolate cake bonbon jelly beans lollipop jelly beans halvah marzipan danish--}}
    {{--                    pie. Oat cake chocolate cake pudding bear claw liquorice gingerbread icing sugar plum--}}
    {{--                    brownie. Toffee cookie apple pie cheesecake bear claw sugar plum wafer gummi bears--}}
    {{--                    fruitcake.--}}
    {{--                </div>--}}
    {{--                <div class="tab-pane fade active show" id="horizontal-messages">--}}
    {{--                    Ice cream dessert candy sugar plum croissant cupcake tart pie apple pie. Pastry chocolate--}}
    {{--                    chupa chups tiramisu. Tiramisu cookie oat cake. Pudding brownie bonbon. Pie carrot cake--}}
    {{--                    chocolate macaroon. Halvah jelly jelly beans cake macaroon jelly-o. Danish pastry dessert--}}
    {{--                    gingerbread powder halvah. Muffin bonbon fruitcake dragée sweet sesame snaps oat cake--}}
    {{--                    marshmallow cheesecake. Cupcake donut sweet bonbon cheesecake soufflé chocolate bar.--}}
    {{--                </div>--}}
    {{--                <div class="tab-pane fade" id="horizontal-settings">--}}
    {{--                    Marzipan cake oat cake. Marshmallow pie chocolate. Liquorice oat cake donut halvah jelly-o.--}}
    {{--                    Jelly-o muffin macaroon cake gingerbread candy cupcake. Cake lollipop lollipop jelly brownie--}}
    {{--                    cake topping chocolate. Pie oat cake jelly. Lemon drops halvah jelly cookie bonbon cake--}}
    {{--                    cupcake ice cream. Donut tart bonbon sweet roll soufflé gummies biscuit. Wafer toffee--}}
    {{--                    topping jelly beans icing pie apple pie toffee pudding. Tiramisu powder macaroon tiramisu--}}
    {{--                    cake halvah.--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}


@endsection
