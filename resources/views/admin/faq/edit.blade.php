
@extends('layouts.adminbase')

@section('title', 'edit faq'.@$data->title)

@section('content')


<div class="layout-page">
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

    <!-- Blank page -->
    <nav aria-label="breadcrumb">
        <div class="col-sm-6">
        <ol class="breadcrumb float-sfm-right">
            <li class=breadcrumb-item"><a href="{{route('admin.index')}}">Home </a> </li>
{{--            <li class=breadcrumb-item">edit place </li>--}}
        </ol>
    </div>

    <div class="car d-body">
        <form action='{{route('admin.faq.update',['id'=>$data->id])}}' method="post" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">

                <h1> edit {{$data->title}}</h1>

                <div class="form-group row">

                    <label for="title" class="col-sm-12 col-md-12 col-form-label"><b>Text</b></label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="title" value="{{$data->question}}"question>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label"  for="basic-default-company">answer</label>
                    <textarea type="text" name="detail" class="form-control" id="editor" >
                                    {{$data->answer}}
                                    </textarea>
                </div>

                <div class="form-group">
                    <label><b>Custom file input</b></label>
                    <img src="{{ url("storage/" . $data->image) }}"  height="50">
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

    @section('foot')
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

        <script>
            jQuery(function () {
                // summernote
                // jQuery('.textarea').ckeditor()
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error(error);
                    } );
            })
        </script>
    @endsection


    <div class="buy-now">
        <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
           class="btn btn-danger btn-buy-now">Upgrade to Pro</a>

    </div>
    </nav>
</div>


@endsection
