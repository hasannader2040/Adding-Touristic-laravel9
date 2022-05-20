@extends('layouts.frontbase')

@section('title',$setting->title)
@section('descraption',$setting->descraption)
@section('keywords',$setting->keywords)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))


@section('slider')
    @include('home.slider')
@endsection
@section('content')




{{-- there are still some missing things and I have to finish them --}}









@endsection





