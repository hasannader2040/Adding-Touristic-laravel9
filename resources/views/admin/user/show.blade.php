@extends('layouts.adminbase')

@section('title', 'User detail '.$data->title)

@section('content')


    <!-- Layout wrapper -->
    <div class="layout-page">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div class="layout-wrapper">
            <!-- Blank page -->
            <div class="form-control">
                <table class="table table-bordered">
{{--                    <a class="btn btn-danger" href="{{route('admin.user.edit',['id'=>$data->id ])}}" role="button" >Edit place</a>--}}
{{--                    <a class="btn btn-danger" href="{{route('admin.user.destroy',['id'=>$data->id ])}}" role="button" >Delete place</a>--}}
                    <thead>
                    <tr>
                        <th style="width: 50px">name</th>
                        <th>{{$data->name}}</th>
                    </tr>

                    <tr>
                        <th style="width: 50px">Email</th>
                        <th>{{$data->email}}</th>
                    </tr>
                    <tr>
                        <th style="width: 50px">Roles</th>
                        <th>
                            @foreach( $data->roles as $roule)
{{--                                its right without any problems --}}
                                {{$roule->name}}
                                <a href={{route('admin.user.destroyrole',['uid'=>$data->id ,'rid'=>$roule->id ])}} class="btn-danger"
                                   onclick="return confirm('Are you sure about deleting this?')">[x]</a>

                            @endforeach
{{--                            $roule id is the same recursive ($item) id--}}
                        </th>

                        <th> Add role to User : < </th>
                        <td>
                            <form role="form" action="{{route('admin.user.addrole',['id'=>@$data->id])}}" method="post">
                                @csrf
                                <select name="role_id">

                                        @foreach( $roles as $role)
                                        <option value="{{$role->id}}"->{{$role->name}} </option>
                                        @endforeach
                                </select>
                                <button type="submit"> add Role</button>
                            </form>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                    </tr>
                        <!-- Blank page -->

@endsection
