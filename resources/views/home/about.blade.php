
    @extends('layouts.frontbase')

    @section('title', 'About us' .$setting->title)
    @section('description',$setting->descraption)
    @section('keywords',$setting->keywords)
    @section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))

    @section('content')

    {{--        the form of it --}}
    <div class="row">
        <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12">
{{--            {!! $setting->aboutus !!}--}}
            {!! $setting->aboutus !!}
{{--            // it should pass the data from setting for about us--}}

            <div class="section-title">
                <h2>About us !</h2>
                <p>If you have any questions or comments please complete the form below.We'd love to hear from you!</p>
            </div>

            <div class="contact-block">
                <!-- contact-form -->
                <form action="{{route('about')}}"  method="get" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="control-label" for="name">Name</label>
                                <input id="name" type="text" placeholder="Your Name" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="control-label" for="email"> Email</label>
                                <input id="email" type="text" placeholder="Your Email Address" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="control-label" for="phone"> Phone</label>
                                <input id="phone" type="text" placeholder="Your Contact Number" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="control-label" for="subject">Subject </label>
                                <input id="subject" type="text" placeholder="Your Subject" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="control-label" for="textarea">Messages</label>
                                <textarea class="form-control" id="textarea" name="textarea" rows="4" placeholder="Your Messages"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            <button type="submit" name="singlebutton" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <!-- contact-form -->
            </div>
        </div>
    </div>


    @endsection
