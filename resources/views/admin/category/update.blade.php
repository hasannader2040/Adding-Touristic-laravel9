@extends('layouts.adminbase')

@section('title', 'edit category'.@$data->title)

@section('content')

    <body>
                <!-- Blank page -->
                <div class="card-body">
{{--                    <form action="admin/create/update/{{$data->title}}" method="post">--}}
{{--                    <form action="{{route('admin.create.store')}}" method="post">--}}
                    <form action={{route('admin_create_update,[$data->title]')}} method="get">
                        @csrf
                        <div class="mb-3">
                           <h1> edit {{$data->title}}</h1>
                            <label class="form-label" for="basic-default-fullname">title</label>
                            <input type="text" class="form-control" name="title" id="basic-default-fullname" value="{{$data->title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">description</label>
                            <input type="text" class="form-control" id="basic-default-company" value="{{$data->description}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">keywords</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-default-email" class="form-control" value="{{$data->keywords}}" aria-label="john.doe" aria-describedby="basic-default-email2">
                                <span class="input-group-text" id="basic-default-email2">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers &amp; periods</div>
                        </div>

                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">Button</button>
                        </div>

                        {{--  to make select --}}
                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>
                            <select multiple="" class="form-select" id="exampleFormControlSelect2" aria-label="Multiple select example">
                                <option selected="">status</option>
                                <option value="1">true</option>
                                <option value="2">false</option>
                                <option value="3" selected >{{$data->status}}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">save or update data I have to make sure</button>
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
