@extends('layouts.adminbase')
@section('title', 'user list')
@section('content')


    {{--  this place should be for add place and for place list--}}

    <div class="layout-page">
        <div class="content-wrapper">
            <!-- Content -->
            <a href="{{ 'create' }}" class="btn btn-primary btn-lg">Add user </a>



            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> add user</h4>

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">add user</h5>
                                <small class="text-muted float-end">it should be as you want</small>
                            </div>
                            <div class="card-body">


                                <div class="card">
                                    <h5 class="card-header">user list </h5>
                                    <div class="card-body">
                                        <div class="card">
                                            <h2 class="card-header">user list</h2>
                                            {{-- to write about home place  <h3 a class="card-title" href="/admin/place">--}}


                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th style="width: 5px">Id</th>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>Role</th>
                                                    <th>status</th>
                                                    <th style="width: 5px"> show</th>
                                                    <th style="width: 5px"> delete</th>
                                                </thead>

                                                <tbody>
                                                @foreach($data as $item)
                                                    <tr>
                                                        <td> {{ $item->id }} </td>
                                                        <td> {{ $item->name }}</td>
                                                        <td> {{ $item->email }}</td>
                                                        <td>
{{--                                                            I have a problem in this --}}
                                                            @foreach( $data->roles as $roule)
                                                                {{$roule->name}}
                                                            @endforeach
                                                        </td>
                                                        @endforeach
                                                        {{--            only when you log in you  can let them work--}}

                                                        <a href='{{route('admin.user.show',['id'=>$item->id])}}' class="btn-info"
                                                           onclick="return !window.open(this.href, '','top=50 left')">
                                                        </a>
                                                        {{--                                                    <td> <img src="{{ asset('assets/panel') }}/admin/img/gallery.jpg"> </td>--}}

                                                        <td><a href={{route('admin.user.edit',['id'=>$item->id])}} class="btn-info">edit</a></td>
                                                        <td><a href={{route('admin.user.destroy',['id'=>$item->id])}} class="btn-danger"
                                                               onclick="return confirm('Are you sure you want to delete this item?')">delete</a></td>
                                                        <td><a href={{route('admin.user.show',['id'=>$item->id])}} class="btnbtn-success">show</a></td>
                                                        {{-- <button type="button" class="btn btn-primary">Primary</button>--}}

                                                        {{-- it needs to understand it much better --}}
                                                        {{-- //<button type="button">Success</button> --}}
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- / Blank page -->
@endsection
