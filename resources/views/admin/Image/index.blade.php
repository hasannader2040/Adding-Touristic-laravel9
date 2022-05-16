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

            <form action="{{route('admin.image.store' , ['Pid'=>$place->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-12 col-md-12 col-form-label"><b>Text</b></label>
                    <div class="col-sm-12 col-md-12">
                        <input class="form-control" type="text" name="title" >
                    </div>
                </div>
            <div class="form-group">
                <label>Custom file input</label>
                <div class="col-sm-12 col-md-12 col-form-label">
                    <input type="file" class="custom-file-input" name="image" id="image" >
                    <label class="custom-file-label"><b>Choose file</b></label>
                    <button class="col-sm-12 col-md-12 col-form-label" type="submit" class="btn btn-primary">Save Image</button>

                </div>
            </div>
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">

                        </div>

            </form>
{{--    i am not able to check on it --}}

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
                                                    <td>
                                                    @if($item->image)
                                                        <img src="{{Storage::url($item->image)}}"style="height: 40px"></td>
                                                    @endif
                                                     {{--   there is a problem here --}}

{{--                                                    <td> {{ $item->status }} </td>--}}

                                                    <td><a href={{route('admin.image.update',['Pid'=>$place->id,'id'=>$item->id])}} class="btn-info">update</a></td>
                                                    <td><a href={{route('admin.image.destroy',['Pid'=>$place->id,'id'=>$item->id])}} class="btn-danger"
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
