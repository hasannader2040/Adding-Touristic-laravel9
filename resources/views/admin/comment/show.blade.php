@extends('layouts.adminWindow')

{{--{{dd($data)}}--}}
{{--{{exit()}}--}}

@section('title', 'comment list')

@section('content')


    <!-- Layout wrapper -->
    <div class="card-header d-flex align-items-center justify-content-between">
        <div class="layout-wrapper">
            <!-- Blank page -->
            <div class="form-control">
                <table class="table table-bordered">
{{--                    <a class="btn btn-danger" href="{{route('admin.comment.edit',['id'=>$data->id ])}}" role="button" >Edit comment</a>--}}
{{--                    <a class="btn btn-danger" href="{{route('admin.comment.destroy',['id'=>$data->id ])}}" role="button" >Delete comment</a>--}}
                    <thead>
                    <tr>

                        {{-- dd($user->name)--}}
                        {{-- exit()--}}
                        <th style="width: 50px">Id</th>
                        <th>{{$comment->id}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">Name & surname</th>
                        <th>{{$user->name}}</th>
{{--                        ->user--}}
                    </tr>


                    <tr>
                        <th style="width: 50px">subject</th>
                        <th>{{$comment->subject}}</th>
                    </tr>


                    <tr>
                        <th style="width: 50px">review</th>
                        <th>{{$comment->review}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">IP number</th>
                        <th>{{$comment->Ip}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">rate</th>
                        <th>{{$comment->rate}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">Status</th>
                        <th>{{$comment->status}}</th>
                    </tr>
                    <tr>
                        <th style="width: 50px">Created at</th>
                        <th>{{$comment->created_at}}</th>
                    </tr>
                    <tr>
                        <th style="width: 50px">Updated at</th>
                        <th>{{$comment->updated_at}}</th>
                    </tr>

                    <tr>
                        <th> Admin notes for comment</th>
                        <td>
                            <form role="form" action="{{route('admin.comment.update',['id'=>$comment->id])}}" method="post">
                            @csrf
{{--                                <textarea cols="100" id="note" name=" note">{{$data->note}} </textarea>--}}
                                <select name="status">
                                    <option selected> {{$comment->status}}</option>
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
