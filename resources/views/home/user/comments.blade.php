
@extends('layouts.frontbase')

@section('title', 'Comment & reviews of the User' )

@section('content')

    {{--        the form of it --}}
    <div class="section">

        <div class="container">

    <div class="row">
        @include('home.user.usermenu')
        <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12">

            <div class="section-title">

                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 5px">Id</th>
                        <th>Name</th>
                        {{--                                                    <th>place</th>--}}
                        <th> subject</th>
                        <th> Review</th>
                        <th> Rate</th>
{{--                        <th> status</th>--}}
                        <th> delete</th>
                    {{--                                            there are delete and show--}}
                    </thead>

                    <tbody>
                    @foreach($comments as $item)
                        <tr>
                            <td> {{ $item->id }} </td>

                                   there is a relationship bettwen comment and place
                            <td> {{ $item->user->name }} </td>
                            <td> {{ $item->subject }}</td>
                            <td> {{ $item->review }}</td>
                            <td> {{ $item->rate }}</td>


{{--                            <td>--}}
{{--                                <a href="{{route('image.index',['Pid'=>$item->id])}}" class="btn-info"--}}
{{--                                   onclick="return !window.open(this.href, '','top=50 left')">--}}
{{--                                    <img src="{{ asset('assets/panel') }}/img/gallery.png" style="height: 50px">--}}
{{--                                </a>--}}
{{--                            </td>--}}


                            <td><a href={{route('userpanel.reviewdestroy',['id'=>$item->id])}} class="btn-danger"
                                   onclick="return confirm('Are you sure you want to delete this item?')">delete</a></td>

                        </tr>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="contact-block">
                <!-- contact-form -->

            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
