@extends('layouts.adminbase')

@section('title', 'show category'.$data->title)

@section('content')


    <!-- Layout wrapper -->
    <div class="layout-page">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div class="layout-wrapper">
                <!-- Blank page -->

                <div class="form-control">
                    <table class="table table-bordered">
                        <a class="btn btn-danger" href="{{route('admin.category.edit',['id'=>$data->id ])}}" role="button" >Edit Category</a>
                        <a class="btn btn-danger" href="{{route('admin.category.destroy',['id'=>$data->id ])}}" role="button" >Delete Category</a>
                        <thead>
                        <tr>
                            <th style="width: 50px">question</th>
                            <th>{{$data->question}}</th>
                        </tr>
                        <tr>
                            <th style="width: 50px">answer</th>
                            <th>{{$data->answer}}</th>
                        </tr>

                        <tr>
                            <th style="width: 50px">image</th>
                            <th>{{$data->image}}</th>
                        </tr>

                        </thead>
                        <tbody>
                        <tr>
                            <!-- horizontal Basic Forms End -->

                <!-- Blank page -->





    <!-- Core JS -->

    </tr>
    @endsection
