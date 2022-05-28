@extends('layouts.adminbase')
@section('title', 'contact form messageList')
@section('content')


    {{--  this place should be for add place and for place list--}}

    <div class="layout-page">
        <div class="content-wrapper">
            <!-- Content -->
            {{--            <a href="/admin/place/create" class="btn btn-primary btn-lg">message list </a>--}}

            {{--{{ route('admin.place.create') }}--}}

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> message list </h4>

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">message list</h5>
                                <small class="text-muted float-end">it should be as you want</small>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    <h5 class="card-header">message list </h5>
                                    <div class="card-body">
                                        <div class="card">
                                            <h2 class="card-header">message list</h2>
                                            {{-- to write about home place  <h3 a class="card-title" href="/admin/place">--}}


                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th style="width: 5px">Id</th>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>phone number</th>
                                                    <th>subject</th>
                                                    <th>message</th>
                                                    <th>status</th>
                                                    <th style="width: 40px"> delete</th>
                                                    <th style="width: 40px"> status</th>
                                                {{--                                            there are delete and show--}}
                                                </thead>
                                                <tbody>
                                                @foreach($data as $item)
                                                    <tr>
                                                        <td> {{ $item->id }} </td>
                                                        <td>
                                                            {{--   <a href="{{route('admin.place.show')}}">--}}
                                                            {{--   {{ $item->product->title }} </a>--}}
                                                        </td>
                                                        <td> {{ $item->name }} </td>
                                                        <td> {{ $item->email }} </td>
                                                        <td> {{ $item->phone }}</td>
                                                        <td> {{ $item->subject }}</td>
                                                        <td> {{ $item->message }}</td>
                                                        <td> {{ $item->status }}</td>


                                                        <td><a href={{route('admin.message.show',['id'=>$item->id])}} class="btn-info"
                                                               onclick="return !window.open(this.href, '','top=50 left')" >show</a></td>
                                                        <td><a href={{route('admin.message.destroy',['id'=>$item->id])}} class="btn-danger"
                                                               onclick="return confirm('Are you sure you want to delete this item?')">delete</a></td>

                                                    </tr>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <!-- / Blank page -->
@endsection
