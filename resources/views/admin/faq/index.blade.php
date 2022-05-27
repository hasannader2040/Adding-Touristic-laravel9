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
                            <h5 class="mb-0">FAQ</h5>
                            <small class="text-muted float-end">it should be</small>
                        </div>
                        <div class="card-body">
                            <a href="{{route('faq')}}" class="btn btn-primary btn-lg">Add Question</a>
{{--                            <a href="{{route('admin.faq.create')}}" class="btn btn-primary btn-lg">Add Question</a>--}}

                            {{--    i am not able to check on it --}}
                            <div class="card">
                                <h5 class="card-header">FAQ list </h5>
                                <div class="card-body">
                                    <div class="card">
                                        <h2 class="card-header">FAQ list</h2>
                                        {{-- to write about home place  <h3 a class="card-title" href="/admin/category">--}}


                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th> Question</th>
                                                <th> answer</th>
                                                <th> status</th>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $item)
                                                <tr>
                                                    <td> {{ $item->id }} </td>
                                                    <td> {{ $item->Question }}</td>
                                                    <td> {{ $item->answer }}</td>
                                                    <td> {{ $item->status }} </td>

                                                    <td><a href={{route('admin.faq.edit',['id'=>$item->id])}} class="btn-info">edit</a></td>
                                                    <td><a href={{route('admin.faq.destroy',['id'=>$item->id])}} class="btn-danger"
                                                           onclick="return confirm('Are you sure you want to delete this item?')">delete</a></td>
                                                    <td><a href={{route('admin.faq.show',['id'=>$item->id])}} class="btnbtn-success">show</a></td>
                                                </tr>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                        <!-- / Blank page -->



@endsection
