@extends('layouts.adminbase')
@section('title', 'comment & reviews list')
@section('content')


    {{--  this place should be for add place and for place list--}}

    <div class="layout-page">
        <div class="content-wrapper">
            <!-- Content -->
            <a href="/admin/place/create" class="btn btn-primary btn-lg">comment list </a>

            {{--{{ route('admin.place.create') }}--}}

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> comment list </h4>

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">comment list</h5>
                                <small class="text-muted float-end">it should be as you want</small>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    <h5 class="card-header">comment list </h5>
                                    <div class="card-body">
                                        <div class="card">
                                            <h2 class="card-header">comment list</h2>
                                            {{-- to write about home place  <h3 a class="card-title" href="/admin/place">--}}


                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th style="width: 5px">Id</th>
                                                    <th>Name</th>
{{--                                                    <th>place</th>--}}
                                                    <th> subject</th>
                                                    <th> Review</th>
                                                    <th> Rate</th>
                                                    <th> status</th>
                                                {{--                                            there are delete and show--}}
                                                </thead>

                                                <tbody>
                                                @foreach($data as $item)
                                                    <tr>
                                                        <td> {{ $item->id }} </td>
                                                        <td>
                                                            <a href="{{route('admin.place.show',['id'=>$item->user->id])}}">
                                                                {{ $item->place->title }} </a>
                                                        </td>
                                                        {{--       there is a relationship bettwen comment and place--}}
                                                        <td> {{ $item->user->name }} </td>
                                                        <td> {{ $item->subject }}</td>
                                                        <td> {{ $item->review }}</td>
                                                        <td> {{ $item->rate }}</td>
                                                        <td>
                                                            <a href="{{route('admin.image.index',['Pid'=>$item->id])}}" class="btn-info"
                                                               onclick="return !window.open(this.href, '','top=50 left')">
                                                                <img src="{{ asset('assets/panel') }}/img/gallery.png" style="height: 50px">
                                                            </a>
                                                        </td>

                                                        <td><a href={{route('admin.comment.show',['id'=>$item->id])}} class="btn-info"
                                                               onclick="return !window.open(this.href, '','top=50 left')" >show</a></td>
                                                        <td><a href={{route('admin.comment.destroy',['id'=>$item->id])}} class="btn-danger"
                                                               onclick="return confirm('Are you sure you want to delete this item?')">delete</a></td>

                                                    </tr>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <!-- / Blank page -->
@endsection
