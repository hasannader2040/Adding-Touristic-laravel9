@extends('layouts.adminbase')
@section('title', 'category list')
@section('content')

    <!--  Blank page -->

    <!-- Layout container -->
    <div class="layout-page">
        <!-- Navbar -->


        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> add category</h4>

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">add category</h5>
                                <small class="text-muted float-end">it should be</small>
                            </div>
                            <div class="card-body">
                                <a href="/admin/category/create" class="btn btn-primary btn-lg">Add category</a>

                                {{--    i am not able to check on it --}}
                                <div class="card">
                                    <h5 class="card-header">category list </h5>
                                    <div class="card-body">
                                        <div class="card">
                                            <h2 class="card-header">category list</h2>
                                            {{-- to write about home place  <h3 a class="card-title" href="/admin/category">--}}


                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>parent</th>
                                                    <th> title</th>
                                                    <th> keywords</th>
                                                    {{--                                                <th> description</th>--}}
                                                    <th> image</th>
                                                    <th> status</th>
                                                    <th>edit</th>
                                                    <th>delete</th>
                                                    <th>show</th>
                                                </thead>

                                                <tbody>
                                                @foreach($data as $item)
                                                    <tr>
                                                        <td> {{ $item->id }} </td>
                                                        <td> {{ $item->parent_id }} </td>
                                                        <td> {{\App\Http\Controllers\AdminPanel\categoryController::getParentsTree($item,$item->title)}}</td>
                                                        <td> {{ $item->keywords }}</td>
                                                        {{--                                                    <td> {{ $item->description }}</td>--}}
                                                        <td>
                                                            @if($item->images)
                                                                <img src="{{Storage::url($item->image)}}"
                                                                     style="height: 40px">
                                                            @endif
                                                        </td>

                                                        {{--   there is a problem here --}}

                                                        <td> {{ $item->status }} </td>

                                                        <td>
                                                            <a href={{route('admin.category.edit',['id'=>$item->id])}} class="btn-info">edit</a>
                                                        </td>
                                                        <td>
                                                            <a href={{route('admin.category.destroy',['id'=>$item->id])}} class="btn-danger"
                                                               onclick="return confirm('Are you sure you want to delete this item?')">delete</a>
                                                        </td>
                                                        <td>
                                                            <a href={{route('admin.category.show',['id'=>$item->id])}} class="btnbtn-success">show</a>
                                                        </td>
                                                        {{--                                                    <button type="button" class="btn btn-primary">Primary</button>--}}

                                                        {{-- it needs to understand it much better --}}
                                                        {{-- //<button type="button">Success</button> --}}
                                                    </tr>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                        <!-- / Blank page -->

@endsection
