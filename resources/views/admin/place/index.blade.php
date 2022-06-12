@extends('layouts.adminbase')
@section('title', 'place list')
@section('content')


    {{-- this place should be for add place and for place list --}}

    <div class="layout-page">
        <div class="content-wrapper">
            <!-- Content -->
            <a href="/admin/place/create" class="btn btn-primary btn-lg">Add place </a>



            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> add place</h4>

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">add place</h5>
                                <small class="text-muted float-end">it should be as you want</small>
                            </div>
                            <div class="card-body">


                                <div class="card">
                                    <h5 class="card-header">place list </h5>
                                    <div class="card-body">
                                        <div class="card">
                                            <h2 class="card-header">place list</h2>
                                            {{-- to write about home place  <h3 a class="card-title" href="/admin/place"> --}}


                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5px">Id</th>
                                                        <th>title</th>
                                                        <th>keywords</th>
                                                        <th> description</th>
                                                        <th> image</th>
                                                        <th> image gallery</th>
                                                        <th> detail </th>
                                                        <th> city </th>
                                                        <th> country</th>
                                                        <th> location</th>

                                                        <th> status</th>
                                                </thead>

                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td> {{ $item->id }} </td>
                                                            <td> {{ $item->title }}</td>
                                                            {{-- the problem is here right now --}}
                                                            {{-- <td> {{\App\Http\Controllers\AdminPanel\categoryController::getParentsTree($item->category,$item->category->title)}}</td> --}}
                                                            <td> {{ $item->description }}</td>
                                                            <td>
                                                                @if ($item->image)
                                                                    <img src="{{ Storage::url($item->image) }}"
                                                                        style="height: 40px">
                                                            </td>
                                                    @endif
                                                    <td>
                                                        <a href='{{ route('admin.image.index', ['Pid' => $item->id]) }}'
                                                            class="btn-info"
                                                            onclick="return !window.open(this.href, '','top=50 left')">
                                                            <img src="{{ asset('assets/panel') }}/img/gallery.png"
                                                                style="height: 50px">
                                                        </a>
                                                    </td>
                                                    {{-- <td> <img src="{{ asset('assets/panel') }}/admin/img/gallery.jpg"> </td> --}}

                                                    {{-- there is a problem here --}}
                                                    <td> {!! $item->detail !!}</td>
                                                    <td> {{ $item->city }}</td>
                                                    <td> {{ $item->country }}</td>
                                                    <td> {{ $item->location }}</td>
                                                    <td> {{ $item->status }} </td>

                                                    <td><a href={{ route('admin.place.edit', ['id' => $item->id]) }}
                                                            class="btn-info">edit</a></td>
                                                    <td><a href={{ route('admin.place.destroy', ['id' => $item->id]) }}
                                                            class="btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this item?')">delete</a>
                                                    </td>
                                                    <td><a href={{ route('admin.place.show', ['id' => $item->id]) }}
                                                            class="btnbtn-success">show</a></td>
                                                    {{-- <button type="button" class="btn btn-primary">Primary</button> --}}

                                                    {{-- it needs to understand it much better --}}
                                                    {{-- //<button type="button">Success</button> --}}
                                                    </tr>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <!-- / Blank page -->
                                        @endsection
