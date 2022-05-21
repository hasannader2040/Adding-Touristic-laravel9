

@extends('layouts.adminbase')

@section('title', 'edit place'.@$data->title)

@section('head')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />


@section('content')




                <!-- Blank page -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sfm-right">
                    <li class=breadcrumb-item"><a href="{{route('admin.index')}}">Home </a> </li>
                    <li class=breadcrumb-item">edit category </li>
                    </ol>
                </div>

                <div class="car
d-body">
                 <form action='{{route('admin.place.update',['id'=>$data->id])}}' method="post" enctype="multipart/form-data">
{{-- for the imeges  enctype="multipart/form-data" --}}
                        @csrf

                     <div class="from-group">
                         <label> parent category</label>
                         <select class="form-control select2" name="category_id" style="height:40px">
                             @foreach($categories as $category)
                                 <option value="{{$category->id}}"
{{--                     there is a prblem here--}}
                                         @if($category->id == $data->category_id) selected="selected" @endif>
{{--                                     {{\App\Http\Controllers\AdminPanel\categoryController::getParentsTree($item,$item->title)}}--}}
                                     {{$category->title}}
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

                            <div class="mb-3">
                                <label class="form-label"  for="basic-default-company">detail</label>
                                <textarea type="text" name="detail" class="form-control" id="basic-default-company" >
                                    </textarea>
                            </div>
                            <div class="mb-3">

                                <div class="mb-3">
                                    <label class="form-label"  for="basic-default-company">city</label>
                                    <input type="text" name="city" class="form-control" id="basic-default-company" value="0">
                                </div>
                                <div class="mb-3">


                                    <div class="mb-3">
                                        <label class="form-label"  for="basic-default-company">country</label>
                                        <input type="text" name="country" class="form-control" id="basic-default-company" value="0">
                                    </div>
                                    <div class="mb-3">


                                        <div class="mb-3">
                                            <label class="form-label"  for="basic-default-company">price</label>
                                            <input type="number" name="price" class="form-control" id="basic-default-company" value="0">
                                        </div>
                                        <div class="mb-3">


                            <div class="form-group">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="content-backdrop fade"></div>

    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- / Layout wrapper -->
@section('foot')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>
        jQuery(function () {
            // summernote
            jQuery('.textarea').summernote()
        })
    </script>
@endsection


    <div class="buy-now">
        <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
           class="btn btn-danger btn-buy-now">Upgrade to Pro</a>

    </div>


    @endsection
