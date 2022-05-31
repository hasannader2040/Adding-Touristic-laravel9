@extends('layouts.adminbase')

@section('title', 'show place'.$data->title)

@section('content')



    <!-- Layout wrapper -->
    <div class="layout-page">
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
                        <th style="width: 50px">place</th>
                        <th>
{{--                            {{$data}}--}}
{{--                            {{exit()}}--}}
                            {{\App\Http\Controllers\AdminPanel\categoryController::getParentsTree($category, $category->title)}}
                        </th>

                        {{--  <th>{{$data->place_id}}</th>--}}
{{--                     I can use both of them because I have a relationship between place and place--}}
                    </tr>

                    <tr>
                        <th style="width: 50px">Title</th>
                        <th>{{$data->title}}</th>
                    </tr>
                    <tr>
                        <th style="width: 50px">keywords</th>
                        <th>{{$data->keywords}}</th>
                    </tr>
                    {{--          you can modifay from here--}}
                    <tr>
                        <th style="width: 50px">description</th>
                        <th>{{$data->description}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">image</th>
                        <td>
                            @if($data->image)
                                <img src="{{Storage::url($data->image)}}"style="height: 40px">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 50px">detail</th>
                        <th>{!!$data->detail!!}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">city</th>
                        <th>{{$data->city}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">country</th>
                        <th>{{$data->country}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">location</th>
                        <th>{{$data->location}}</th>
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

                    </thead>
                    <tbody>
                    <tr>


                        <!-- Blank page -->
                    </tr>
@endsection
