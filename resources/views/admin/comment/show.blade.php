@extends('layouts.adminWindow')

@section('title', 'comment list'.$data->title)

@section('content')


    <!-- Layout wrapper -->
    <div class="card-header d-flex align-items-center justify-content-between">
        <div class="layout-wrapper">
            <!-- Blank page -->
            <div class="form-control">
                <table class="table table-bordered">
                    <a class="btn btn-danger" href="{{route('admin.place.edit',['id'=>$data->id ])}}" role="button" >Edit place</a>
                    <a class="btn btn-danger" href="{{route('admin.place.destroy',['id'=>$data->id ])}}" role="button" >Delete place</a>
                    <thead>
                    <tr>
                        <th style="width: 50px">Id</th>
                        <th>{{$data->id}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">Name & surname</th>
                        <th>{{$data->user->name}}</th>
                    </tr>


                    <tr>
                        <th style="width: 50px">place</th>
                        <th>{{$data->place->name}}</th>
                    </tr>


                    <tr>
                        <th style="width: 50px">subject</th>
                        <th>{{$data->subject}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">review</th>
                        <th>{{$data->review}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">IP number</th>
                        <th>{{$data->Ip}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">rate</th>
                        <th>{{$data->rate}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">Status</th>
                        <th>{{$data->status}}</th>
                    </tr>
                    <tr>
                        <th style="width: 50px">Created at</th>
                        <th>{{$data->created_at}}</th>
                    </tr>
                    <tr>
                        <th style="width: 50px">Updated at</th>
                        <th>{{$data->updated_at}}</th>
                    </tr>

                    <tr>
                        <th> Admin notes for comment</th>
                        <td>
                            <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                            @csrf
{{--                                <textarea cols="100" id="note" name=" note">{{$data->note}} </textarea>--}}
                                <select name="status">
                                    <option selected> {{$data->status}}</option>
                                    <option> True</option>
                                    <option> False</option>
                                </select>
                                <button type="submit" class="btn btn-primary"> update comment </button>
                            </form>
                        </td>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>


                        <!-- Blank page -->
                    </tr>
@endsection
