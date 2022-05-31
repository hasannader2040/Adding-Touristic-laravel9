

@extends('layouts.frontbase')
@section('title', 'About us' .$setting->title)
@section('description',$setting->descraption)
@section('keywords',$setting->keywords)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))


    @section('content')



    @endsection
