@extends('layouts.adminWindow')

@section('title', 'show messages : ')

@section('content')


    <!-- Layout wrapper -->
    <div class="card-header d-flex align-items-center justify-content-between">
        <div class="layout-wrapper">
            <!-- Blank page -->
            <div class="form-control">
                <table class="table table-bordered">
{{--                    <a class="btn btn-danger" href="{{route('admin.message.destroy',[$data->id ])}}" role="button" >Delete place</a>--}}
                    <thead>
                    <tr>
                        <th style="width: 50px">Id</th>
                        <th>{{$data->id}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">Name & surname</th>
                        <th>{{$data->name}}</th>
                    </tr>


                    <tr>
                        <th style="width: 50px">phone</th>
                        <th>{{$data->phone}}</th>
                    </tr>


                    <tr>
                        <th style="width: 50px">email</th>
                        <th>{{$data->email}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">subject</th>
                        <th>{{$data->subject}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">messages</th>
                        <th>{{$data->message}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">IP number</th>
                        <th>{{$data->Ip}}</th>
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

                                 <th style="width: 50px">admin Note</th>
                        <th>

{{--                            <textarea  clos="20" id='note' name="note">{{$data->note}} </textarea>--}}

                            <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                                @csrf
{{--                                {{dd($data)}}--}}
{{--                                {{exit()}}--}}
                                <textarea cols="100" id='note' name="note">{{$data->note}} </textarea>
{{--                                <div class="card-footer">--}}
                                <button type="submit" class="btn-primary"> Update note </button>
{{--                                </div>--}}
                            </form>

                        </th>

{{--                    <tr>--}}
{{--                        <th> Admin notes for comment</th>--}}
{{--                        <td>--}}
{{--                            <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">--}}
{{--                            @csrf--}}
{{--                                <textarea cols="100" id="note" name=" note">{{$data->note}} </textarea>--}}
{{--                                <select name="status">--}}
{{--                                    <option selected> {{$data->status}}</option>--}}
{{--                                    <option> True</option>--}}
{{--                                    <option> False</option>--}}
{{--                                </select>--}}
{{--                                <button type="submit" class="btn btn-primary"> update comment </button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}

                    </thead>


                    <tbody>
                    <tr>


                        <!-- Blank page -->
                    </tr>
@endsection
