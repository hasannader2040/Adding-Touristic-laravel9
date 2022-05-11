@extends('layouts.adminWindow')
@section('title', 'place Image Gallery')
@section('content')

    <!--  Blank page -->

    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> add place Image</h4>

            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">add place Image</h5>
                            <small class="text-muted float-end">it should be</small>
                        </div>
                        <div class="card-body">
                            <button  class="btn btn-primary btn-lg" href="{{route('admin.image.store'}}" type="button">Add place Image</button>
{{--    i am not able to check on it --}}
                            <div class="card">
                                <h5 class="card-header">place Image list </h5>
                                <div class="card-body">
                                    <div class="card">
                                        <h2 class="card-header">place Image list</h2>
                                        <div class="card-body">

                                            <h2> {{$place->title}}</h2>
                                            <form action="{{route('admin.category.store',['Pid'=>$place->id])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="from-group">
                                                    <label> parent category</label>
                                                    <select class="form-control" select2 name="parent_id" style="height:40px">
                                                        @foreach($images as $item)
                                                            <option value="{{$item->id}}">
                                                                {{--                                        @if($item->id == $data->parent_id) selected="selected" @endif>--}}
                                                                {{\App\Http\Controllers\AdminPanel\categoryController::getParentsTree($item,$item->title)}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <h1>add category</h1>
                                                    <label class="form-label" for="basic-default-fullname">title</label>
                                                    <input type="text" class="form-control" name="title" id="basic-default-fullname" placeholder="John Doe">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"  for="basic-default-company">description</label>
                                                    <input type="text" name="description" class="form-control" id="basic-default-company" placeholder="ACME Inc.">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-email">keywords</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" name="keywords" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2">
                                                        <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                                    </div>
                                                    <div class="form-text">You can use letters, numbers &amp; periods</div>
                                                </div>
                                                <div class="input-group">
                                                    <input type="file" name="image" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                    <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">Button</button>
                                                </div>
                                                {{--  to make select --}}
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>

                                                    <select name="status"  class="form-select form-controll" id="exampleFormControlSelect2" aria-label="Multiple select example">
                                                        <option selected="">status</option>
                                                        <option value="1">true</option>
                                                        <option value="2">false</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th> Title</th>
                                                <th> update </th>
                                                <th> image</th>

                                            </thead>

                                            <tbody>
                                            @foreach($data as $item)
                                                <tr>
                                                    <td> {{ $item->id }} </td>
                                                    <td> {{ $item->title }}</td>
                                                    <td> {{\App\Http\Controllers\AdminPanel\ImageController::getParentsTree($item,$item->title)}}</td>
                                                    <td> {{ $item->keywords }}</td>
{{--                                                    <td> {{ $item->description }}</td>--}}
                                                    <td>
                                                        @if($item->image)
                                                        <img src="{{Storage::url($item->image)}}"style="height: 40px"></td>
                                                    @endif
                                                     {{--   there is a problem here --}}

                                                    <td> {{ $item->status }} </td>

                                                    <td><a href={{route('admin.category.edit',['id'=>$item->id])}} class="btn-info">edit</a></td>
                                                    <td><a href={{route('admin.category.destroy',['id'=>$item->id])}} class="btn-danger"
                                                           onclick="return confirm('Are you sure you want to delete this item?')">delete</a></td>
                                                    <td><a href={{route('admin.category.show',['id'=>$item->id])}} class="btnbtn-success">show</a></td>
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
