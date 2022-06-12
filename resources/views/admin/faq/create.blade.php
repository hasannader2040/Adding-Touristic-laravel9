@extends('layouts.adminbase')

@section('title', 'add category')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection


@section('content')

    <body>
    <!-- Layout wrapper -->
    <div class="layout-page">
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">

                <!-- Blank page -->
                <div class="card-body">
                    <form action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="from-group">

                        <div class="mb-3">
                            <h1>add FAQ</h1>
                            <label class="form-label" for="basic-default-fullname">Question</label>
                            <input type="text" class="form-control" name="question" id="basic-default-fullname" placeholder="John Doe">
                        </div>

                                <label class="form-label"  for="basic-default-company">answer</label>
                                {{--                                    I will add a CKeditor 5 --}}
                                {{--                                    <div name="detail" id="editor">This is some sample content.</div>--}}

                                <textarea type="text" name="answer" class="form-control" id="answer" >
                                    </textarea>
{{--                            @section('script')--}}
                            <script>
                                //  let ClassicEditor;
                                ClassicEditor
                                    .create( document.querySelector( '#answer' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error(error);
                                    } );
                            </script>

{{--                            </div>--}}
                        </div>


{{--                            @endsection--}}

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

                    @endsection


                    <!-- / Blank page -->
