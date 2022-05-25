@extends('layouts.adminbase')
@section('title', 'sittings ')
@include('admin.sidebar')

@section('content')
<!--
    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
            <h5 class="h4 text-blue mb-20">Settings</h5>
            <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                <div class="tab">
                    @csrf
                    <form class="tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link text-blue active" data-toggle="tab" href="#general" role="tab" aria-selected="true">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#stmp" role="tab" aria-selected="true">StmpEmail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#about" role="tab" aria-selected="true">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#reference" role="tab" aria-selected="false">Reference</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#contact" role="tab" aria-selected="false">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#social" role="tab" aria-selected="false">Social</a>
                            </li>
                        </ul>




                        <div class="tab-content">
                            <div class="tab-pane fade" id="stmp" role="tabpanel">
                                <div class="pd-20">


                                    <div class="form-group">
                                        <label for="smtpserver" class="col-sm-12 col-md-12 col-form-label"><b>smtpserver</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="smtpserver" value="{{$data->smtpserver}}" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="smtpemail" class="col-sm-12 col-md-12 col-form-label"><b>smtpemail</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="smtpemail" value="{{$data->smtpemail}}" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="smtppassword" class="col-sm-12 col-md-12 col-form-label"><b>smtppassword</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="password" name="smtppassword" value="{{$data->smtppassword}}" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="smtpport" class="col-sm-12 col-md-12 col-form-label"><b>smtpport</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="number" name="smtpport" value="{{$data->smtpport}}" >
                                        </div>
                                    </div>


                                </div>
                            </div>


                            <div class="tab-pane fade" id="reference" role="tabpanel">
                                <div class="pd-20">

                                    <div class="form-group">
                                        <label for="references" >Reference</label>
                                        <textarea class="form-control" name="references" >{{$data->references}}</textarea>

                                    </div>

                                </div>
                            </div>


                            <div class="tab-pane fade" id="about" role="tabpanel">
                                <div class="pd-20">

                                    <div class="form-group">
                                        <label for="aboutus" >{{$data->aboutus}}</label>
                                        <textarea class="form-control" name="aboutus" ></textarea>

                                    </div>

                                </div>
                            </div>



                            <div class="tab-pane fade" id="contact" role="tabpanel">
                                <div class="pd-20">

                                    <div class="form-group">
                                        <label for="contact" >Contact Us</label>
                                        <textarea class="form-control" name="contact">{{$data->contact}}</textarea>

                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade active show" id="general" role="tabpanel">
                                <div class="pd-20">
                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-group">
                                    <div class="form-group row">
                                        <label id="title" class="col-sm-12 col-md-12 col-form-label"><b>title</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="title" value="{{$data->title}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keywords" class="col-sm-12 col-md-12 col-form-label"><b>keywords</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-12 col-md-12 col-form-label"><b>description</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="description" value="{{$data->description}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="company" class="col-sm-12 col-md-12 col-form-label"><b>company</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="company" value="{{$data->company}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-12 col-md-12 col-form-label"><b>address</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="address" value="{{$data->address}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-12 col-md-12 col-form-label"><b>Phone</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="number" name="phone" value="{{$data->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fax" class="col-sm-12 col-md-12 col-form-label"><b>Fax</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="number" name="fax" value="{{$data->fax}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-12 col-md-12 col-form-label"><b>Email</b></label>
                                        <div class="col-sm-12 col-md-12">
                                            <input class="form-control" type="text" name="email" value="{{$data->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Custom file input</label>
                                        <div class="custom-file"  >
                                            <input type="file" class="custom-file-input"  name="icon">
                                            <label class="custom-file-label"  ><b>{{$data->icon}}</b></label>
                                        </div>
                                    </div>
                                    <div

                                    <label for="status" class="col-sm-12 col-md-12"><b>Status</b></label>
                                    <select id="status" name="status" class="form-control" placeholder="status" required>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>

                                </div>
                            </div>
                        </div>





                        <div class="tab-pane fade" id="social" role="tabpanel">
                            <div class="pd-20">

                                <div class="form-group">
                                    <label for="youtube" class="col-sm-12 col-md-12 col-form-label"><b>YouTube</b></label>
                                    <div class="col-sm-12 col-md-12">
                                        <input class="form-control" type="text" name="youtube" value="{{$data->youtube}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="instagram" class="col-sm-12 col-md-12 col-form-label"><b>instagram</b></label>
                                    <div class="col-sm-12 col-md-12">
                                        <input class="form-control" type="text" name="instagram" value="{{$data->instagram}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="twitter" class="col-sm-12 col-md-12 col-form-label"><b>twitter</b></label>
                                    <div class="col-sm-12 col-md-12">
                                        <input class="form-control" type="text" name="twitter" value="{{$data->twitter}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="facebook" class="col-sm-12 col-md-12 col-form-label"><b>facebook</b></label>
                                    <div class="col-sm-12 col-md-12">
                                        <input class="form-control" type="text" name="facebook" value="{{$data->twitter}}">
                                    </div>
                                </div>

                            </div>
                        </div>

                </div>
                <button type="submit" class="btn btn-primary">Submit Data</button>

            </form>
        </div>
    </div>
    </form>
    </div>
    </form>
            -->

    </div>

{{--    @section('head')--}}
{{--        <style>--}}
{{--            #myTabContent div[class="tab-pane fade"]{--}}
{{--                display: none !important;--}}
{{--            }--}}
{{--        </style>--}}
{{--    @endsection--}}

{{--    @section('title','Settings')--}}

{{--    @section('content')--}}

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
        <div class="page-content--bgf7" style="background-color: #E5E5E5;">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item active show">
                                <a class="nav-link" id="set-general" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Smtp E-mail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="set-social" data-toggle="tab" href="#social-content" role="tab" aria-controls="social-content" aria-selected="true">Social Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="set-about" data-toggle="tab" href="#about-content" role="tab" aria-controls="about-content" aria-selected="true">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="set-content" data-toggle="tab" href="#contact-content" role="tab" aria-controls="contact-content" aria-selected="true">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="set-refernces" data-toggle="tab" href="#references-content" role="tab" aria-controls="references-content" aria-selected="true">References</a>
                            </li>
                        </ul>
                        <div class="tab-content pl-3 pt-5" id="myTabContent">
                            <form class="form-horizontal" action="{{route('admin.setting.update')}}" method="post">
                                @csrf
                                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="set-general">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="title" class=" form-control-label">Title</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="title" name="title" placeholder="Title" class="form-control" value="{{$data->title}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="keywords" class=" form-control-label">Keywords</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="keywords" value="{{$data->keywords}}" name="keywords" placeholder="Keywords" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="description" class=" form-control-label">Description</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="description" value="{{$data->description}}" name="description" placeholder="Description" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="company" class=" form-control-label">Company</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="company" value="{{$data->company}}" name="company" placeholder="Company" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="address" class=" form-control-label">Address</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="address" value="{{$data->address}}" name="address" placeholder="Address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="phone" class=" form-control-label">Phone</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="phone" name="phone" value="{{$data->phone}}" placeholder="Phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email" class=" form-control-label">E-mail</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="email" name="email" value="{{$data->email}}" placeholder="E-mail" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="fax" class=" form-control-label">Fax</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="fax" name="fax" value="{{$data->fax}}" placeholder="Fax" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="icon" class=" form-control-label">Icon</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="icon-input" value="{{$data->icon}}" name="icon" class="form-control-file">
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="smtpserver" class="form-control-label">Smtp Server</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="smtpserver" value="{{$data->smtpserver}}" name="smtpserver" placeholder="Smtp Server" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="smtpemail" class="form-control-label">Smtp E-mail</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="smtpemail" value="{{$data->smtpemail}}" name="smtpemail" placeholder="Smtp Server" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="smtppassword" class="form-control-label">Smtp Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="smtppassword" value="{{$data->password}}" name="smtppassword" placeholder="Smtp Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="smtpport" class="form-control-label">Smtp Port</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="smtpport" value="{{$data->smtpsupport}}" name="smtpport" placeholder="Smtp Port" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="social-content" role="tabpanel" aria-labelledby="set-social">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="facebook" class="form-control-label">Facebook</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="facebook" value="{{$data->facebook}}" name="facebook" placeholder="Facebook" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="instagram" class="form-control-label">Instagram</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="instagram" value="{{$data->instagram}}" name="instagram" placeholder="Instagram" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="twitter" class="form-control-label">Twitter</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="twitter" value="{{$data->twitter}}" name="twitter" placeholder="Twitter" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="about-content" role="tabpanel" aria-labelledby="set-about">
                                    <textarea name="aboutus" rows="5" id="about-text" class="border p-2" style="width: 100%; display: none;">{{$data->aboutus}}</textarea>
                                </div>

                                <div class="tab-pane fade" id="contact-content" role="tabpanel" aria-labelledby="set-content">
                                    <textarea name="contact" rows="5" id="contact-text" class="border p-2" style="width: 100%; display: none;">{{$data->contact}}</textarea>

                                </div>

                                <div class="tab-pane fade" id="references-content" role="tabpanel" aria-labelledby="set-refernces">
                                    <textarea name="references" rows="5" id="references-text" class="border p-2" style="width: 100%; display: none;">{{$data->references}}</textarea>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fa fa-dot-circle-o"></i> Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--  I have to add the editor --}}


{{--    <div class="w3-bar w3-black">--}}
{{--     /   <h1> Settings </h1>--}}
{{--        <button class="w3-bar-item w3-button" onclick="openCity('London')">general</button>--}}
{{--        <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Smtp Email</button>--}}
{{--        <button class="w3-bar-item w3-button" onclick="openCity('social_Media')">social Media</button>--}}
{{--        <button class="w3-bar-item w3-button" onclick="openCity('aboutUs')">about us</button>--}}
{{--        <button class="w3-bar-item w3-button" onclick="openCity('contact_page')">contact page</button>--}}
{{--        <button class="w3-bar-item w3-button" onclick="openCity('References')">References</button>--}}

{{--    </div>--}}

{{--    <div id="London" class="city">--}}
{{--        <div id="London" class="city" style="display:none">--}}

{{--        <!--        here is the main tab content-->--}}
{{--        <form action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Title</label>--}}
{{--                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="project title">--}}
{{--                <small id="Title" class="form-text text-muted"></small>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">keywords</label>--}}
{{--                <input type="text" class="form-control" id="keywords" placeholder="">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">description</label>--}}
{{--                <input type="text" class="form-control" id="description" placeholder="">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">company</label>--}}
{{--                <input type="text" class="form-control" id="company" placeholder="">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">Address</label>--}}
{{--                <input type="text" class="form-control" id="Address" placeholder="">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">phone</label>--}}
{{--                <input type="text" class="form-control" id="phone" placeholder="">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">Email</label>--}}
{{--                <input type="Email" class="form-control" id="email" placeholder="">--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--    <div id="Paris" class="city" style="display:none">--}}

{{--        and here is NOTHER CONTENT--}}

{{--        <form action="{{route('admin.setting.update')}}" method="post">--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">SMTPserver</label>--}}
{{--                <input type="text" class="form-control" id="SMTPserver" placeholder="text">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">SMTP password</label>--}}
{{--                <input type="password" class="form-control" id="SMTPpassword" placeholder="text">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">SMTP facebook</label>--}}
{{--                <input type="text" class="form-control" id="SMTPfacebook" placeholder="text">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">SMTP instrgram</label>--}}
{{--                <input type="text" class="form-control" id="SMTPinstrgram" placeholder="text">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">SMTP twitter</label>--}}
{{--                <input type="text" class="form-control" id="SMTPtwitter" placeholder="text">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">SMTP youtube</label>--}}
{{--                <input type="text" class="form-control" id="SMTPyoutube" placeholder="text">--}}
{{--            </div>--}}

{{--            <button type="submit" class="btn btn-primary">update setting </button>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--    <div id="social_Media" class="city" style="display:none">--}}

{{--    </div>--}}


{{--    <div id="aboutUs" class="city" style="display:none">--}}

{{--        <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>--}}

{{--        <div id="editor">This is some sample content.</div>--}}
{{--        <script>--}}
{{--            ClassicEditor--}}
{{--                .create( document.querySelector( '#editor' ) )--}}
{{--                .then( editor => {--}}
{{--                    console.log( editor );--}}
{{--                } )--}}
{{--                .catch( error => {--}}
{{--                    console.error( error );--}}
{{--                } );--}}
{{--        </script>--}}

{{--        <form action="{{route('admin.setting.update')}}" method="post">--}}
{{--            @csrf--}}
{{--            <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>--}}
{{--            <div id="editor">This is some sample content.</div>--}}
{{--            <script>--}}
{{--                ClassicEditor--}}
{{--                    .create( document.querySelector( '#editor' )--}}
{{--                   );--}}
{{--            </script>--}}
{{--        <button type="submit" class="btn btn-primary">update setting </button>--}}
{{--        </form>--}}

{{--        --}}{{--        another thing for connatiing--}}
{{--        <script>--}}
{{--            function openCity(cityName) {--}}
{{--                var i;--}}
{{--                var x = document.getElementsByClassName("city");--}}
{{--                for (i = 0; i < x.length; i++) {--}}
{{--                    x[i].style.display = "none";--}}
{{--                }--}}
{{--                document.getElementById(cityName).style.display = "block";--}}
{{--            }--}}

{{--        </script>--}}
{{--    </div>--}}


{{--    <div id="contact_page" class="city" style="display:none">--}}



{{--    </div>--}}


{{--    <div id="References" class="city" style="display:none">--}}



{{--    </div>--}}




@endsection
