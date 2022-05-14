@extends('layouts.adminbase')

@section('title', 'add place')

    @section('head')
        <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    @endsection

@section('content')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">



    <!-- Blank page -->
                <div class="card-body">
                    <form action="{{route('admin.place.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label> parent category</label>
                            <select class="form-control select2"  name="category_id" style="height:40px" >

                            @foreach($data as $item)
                                    <option value="{{$item->id}}">
                                    {{\App\Http\Controllers\AdminPanel\categoryController::getParentsTree($item,$item->title)}} </option>
                            @endforeach
                            </select>

                        </div>


                        <div class="mb-3">
                            <h1>add place</h1>
                            <label class="form-label" for="basic-default-fullname">title</label>
                            <input type="text" class="form-control" name="title" id="basic-default-fullname" value="0" placeholder="John Doe">
                        </div>

                        <div class="mb-3">
                            <label class="form-label"  for="basic-default-company">description</label>
                            <input type="text" name="description" class="form-control" id="basic-default-company" value="0">
                        </div>
                        <div class="mb-3">

                            <div class="input-group">
                                <input type="file" name="image" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                <button name="image" class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">Button</button>
                            </div>

                                <div class="mb-3">
                                    <label class="form-label"  for="basic-default-company">detail</label>
{{--                                    I will add a CKeditor 5 --}}


                                    <textarea type="text" name="detail" class="form-control" id="detail" >
                                    </textarea>
                                    <script>
                                      //  let ClassicEditor;
                                        ClassicEditor
                                            .create( document.querySelector( '#detail' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error(error);
                                            } );
                                    </script>

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
                                            <label class="form-label"  for="basic-default-company">locatıon</label>
                                            <input type="text" name="country" class="form-control" id="basic-default-company" value="0">
                                        </div>
                                        <div class="mb-3">

{{--                            <label class="form-label" for="basic-default-email">keywords</label>--}}
{{--                            <div class="input-group input-group-merge">--}}
{{--                                <input type="text" name="keywords" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2">--}}
{{--                                <span class="input-group-text" id="basic-default-email2">@example.com</span>--}}
{{--                            </div>--}}


                            <div class="form-text">You can use letters, numbers &amp; periods</div>
                        </div>

                        {{--  to make select --}}
                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>

                            <select name="status" class="form-select form-controll" id="exampleFormControlSelect2" aria-label="Multiple select example" >
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

    </div>
                    @endsection


                            <!-- / Blank page -->

