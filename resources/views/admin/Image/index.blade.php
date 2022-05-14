@extends('layouts.adminWindow')
@section('title', 'place Image Gallery')
@section('content')

    <!--  Blank page -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">/</span> add place Image</h4>
            {{-- it needs to correct it to uplode as a photo in the tablet  --}}

            {{--for uploading a file--}}


            <div class="input-group-append">
                <input type="file" class="form-control" id="inputGroupFile01" name="image">
                <label class="custum-file-lable" for="inputGroupFile01">choose file</label>
            </div>

            <div class="input-group-append">
                <input class="input-group-text" type="submit" value="upload" >
            </div>
        </div>

            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">

                        </div>
                        <div class="card-body">
                            <a href="{{ 'admin.Image.create' }}" class="btn btn-primary btn-lg">Add place Image</a>

{{--    i am not able to check on it --}}

                                            <h2> {{$place->title}}</h2>
                                            <form action="{{route('admin.image.store',['Pid'=>$place->id])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="from-group">
                                                    <label> parent category</label>
                                                    <select class="form-control" select2 name="parent_id" style="height:40px">
                                                        @if($images)
                                                            @foreach($images as $item)
                                                                <option value="{{$item->id}}">
                                                                    {{--                                        @if($item->id == $data->parent_id) selected="selected" @endif>--}}
                                                                    {{\App\Http\Controllers\AdminPanel\categoryController::getParentsTree($item,$item->title)}} </option>
                                                            @endforeach
                                                            @endif

                                                    </select>


                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th> Title</th>
                                                <th> update </th>
                                                <th> image</th>

                                            </thead>

                                            <tbody>
                                            @foreach($images as $item)
                                                <tr>
{{--                                                    the probelm is here--}}
                                                    <td> {{ $item->id }} </td>
                                                    <td> {{ $item->title }}</td>
                                                    <td> {{\App\Http\Controllers\AdminPanel\ImageController::getParentsTree($item,$item->title)}}</td>
{{--                                                    <td> {{ $item->keywords }}</td>--}}
{{--                                                    <td> {{ $item->description }}</td>--}}
                                                    <td>
                                                        @if($item->image)
                                                        <img src="{{Storage::url($item->image)}}"style="height: 40px"></td>
                                                    @endif
                                                     {{--   there is a problem here --}}

{{--                                                    <td> {{ $item->status }} </td>--}}

                                                    <td><a href={{route('admin.Image.update',['Pid'=>$place->id,'id'=>$item->id])}} class="btn-info">update</a></td>
                                                    <td><a href={{route('admin.Image.destroy',['Pid'=>$place->id,'id'=>$item->id])}} class="btn-danger"
                                                           onclick="return confirm('Are you sure you want to delete this item?')">delete</a></td>
                                                    {{--                                                    <button type="button" class="btn btn-primary">Primary</button>--}}

                                                    {{-- it needs to understand it much better --}}
                                                    {{-- //<button type="button">Success</button> --}}
                                                </tr>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <!-- / Blank page -->
@endsection
