
@extends('layouts.frontbase')

@section('title', 'Frequently asked questions' .$setting->title)
@section('description',$setting->descraption)
@section('keywords',$setting->keywords)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))
@section('head')
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">--}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')


    <div class="row">
        <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12">
            {{ $setting->aboutus }}
            {{--            // it should pass the data from setting for about us--}}

            <div class="section-title">
                <h2>Frequently asked questions</h2>
                <p>there is a lot of things</p>
            </div>

            <div class="contact-block">
                <!-- contact-form -->
                <div id="accordion">
                    <h1>Frequently asked questions</h1>
                    <div class="container-fluid pt-5">
                        @foreach($datalist as $rs)
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
                                            <h5> {!! $rs->question !!} </h5>
                                        </button>
                                    </div>
                                    <div id="faq1" class="collapse" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            {!! $rs->answer !!}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

                        <!-- contact-form -->
                </div>










@endsection
