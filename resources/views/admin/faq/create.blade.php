@extends('layouts.adminbase')

@section('title', 'add category')

@section('content')

    <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

    <!-- Blank page -->
                <div class="card-body">
                    <form action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <h1>Add Question</h1>
                            <label class="form-label" for="basic-default-fullname">Question</label>
                            <input type="text" class="form-control" name="Question" id="Question" placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"  for="basic-default-company">answer</label>
                            <input type="text" name="answer" class="form-control" id="answer" placeholder="ACME Inc.">
{{--                            <label class="form-label"  for="basic-default-company">detail</label>--}}

                            <textarea type="text" name="answer" class="form-control" id="answer" >
                                    </textarea>
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

                        </div>

                        </div>
        </div>
    </div>
    </body>

{{--                        <div class="mb-3">--}}
{{--                            <label class="form-label" for="basic-default-email">keywords</label>--}}
{{--                            <div class="input-group input-group-merge">--}}
{{--                                <input type="text" name="keywords" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2">--}}
{{--                                <span class="input-group-text" id="basic-default-email2">@example.com</span>--}}
{{--                            </div>--}}

{{--                            another thing--}}


{{--                            <div class="form-text">You can use letters, numbers &amp; periods</div>--}}





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

                    @endsection


                            <!-- / Blank page -->
