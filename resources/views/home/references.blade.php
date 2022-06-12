
    @extends('layouts.frontbase')

    @section('title', 'references' .$setting->title)
    @section('description',$setting->descraption)
    @section('keywords',$setting->keywords)
    @section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))

    @section('content')



    {{--        the form of it --}}
    <div class="row">
        <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12">
{{--          <li> <a href="{{route('home.reference')}}" > Home </a> </li>--}}
          <li> <a href="/" > Home </a> </li>
            <li class="active"> references </li>
            <div class="section-title">
                {!! $setting->references !!}
            </div>
        </div>
    </div>


    @endsection
