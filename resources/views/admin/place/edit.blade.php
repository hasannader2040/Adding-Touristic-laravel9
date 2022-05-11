

@extends('layouts.adminbase')

@section('title', 'edit place'.@$data->title)

@section('content')


    <body>

                <!-- Blank page -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sfm-right">
                    <li class=breadcrumb-item"><a href="{{route('admin.index')}}">Home </a> </li>
                    <li class=breadcrumb-item">edit category </li>
                    </ol>
                </div>

                <div class="car
d-body">
                 <form action='{{route('admin.category.update',['id'=>$data->id])}}' method="post" enctype="multipart/form-data">
{{-- for the imeges  enctype="multipart/form-data" --}}
                        @csrf

                     <div class="from-group">
                         <label> parent category</label>
                         <select class="form-control"select2 name="category_id" style="height:40px">
                             @foreach($data as $item)
                                 <option value="{{$item->id}}"
                                         @if($item->id == $data->category_id) selected="selected" @endif>
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
    </body>
                <div class="content-backdrop fade"></div>

    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- / Layout wrapper -->

    <div class="buy-now">
        <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
           class="btn btn-danger btn-buy-now">Upgrade to Pro</a>

    </div>



    </body>
    @endsection
