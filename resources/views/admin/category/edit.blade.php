
@extends('layouts.adminbase')

@section('title', 'edit place'.@$data->title)

@section('content')


    <div class="layout-page" style="margin-left: 200px; margin-bottom: 200px;">
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container " style="justify-content: center; flex-direction: column;">

    <!-- Blank page -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sfm-right">
            <li class=breadcrumb-item"><a href="{{route('admin.index')}}">Home </a> </li>
            <li class=breadcrumb-item">edit place </li>
        </ol>
    </div>

    <div class="car d-body">
        <form action='{{route('admin.category.update',['id'=>$data->id])}}' method="post" enctype="multipart/form-data">
            {{-- for the imeges  enctype="multipart/form-data" --}}
            @csrf

            <div class="from-group">
                <label> parent category</label>
                <select class="form-control"select2 name="parent_id" style="height:40px">
                    <option value="0" selected="selected"> main place</option>
                    @foreach($datalist as $item)
                        <option value="{{$item->id}}"
                                @if($item->id == $data->parent_id) selected="selected" @endif>
                            {{\App\Http\Controllers\AdminPanel\categoryController::getParentsTree($item,$item->title)}}
                        </option>
                    @endforeach
                </select>

            </div>

            <div class="mb-3">
                <h1> edit {{$data->title}}</h1>
                <div class="form-group row">
                    <label for="title" class="col-sm-12 col-md-12 col-form-label"><b>Text</b></label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="title" value="{{$data->title}}"title>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-12 col-md-12 col-form-label"><b>description</b></label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="description" value="{{$data->description}}"description>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keywords" class="col-sm-12 col-md-12 col-form-label"><b>keywords</b></label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}"keywords>

                    </div>
                </div>


                <div class="form-group">
{{--                    <img src="{{ url("storage/" . $data->image) }}" alt="{{$data->title}}" height="50">--}}
                    <label><b>Custom file input</b></label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label"><b>Choose file</b></label>
                    </div>
                </div>

            </div>
            <div>
                <label for="status"  class="col-sm-12 col-md-12"><b>Status</b></label>
                <select id="status" name="status" class="form-control" placeholder="status" required>
                    <option selected>{{$data->status}}</option>
                    <option>True</option>
                    <option>False</option>
                </select>

                <button type="submit" class="btn btn-primary">Edit Data</button>

            </div>
        </form>
    </div>

    <div class="content-backdrop fade"></div>

    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- / Layout wrapper -->

    <div class="buy-now">
        <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
           class="btn btn-danger btn-buy-now">Upgrade to Pro</a>

    </div>

@endsection
