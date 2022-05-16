
{{--    <body>--}}
{{--    <!-- Layout wrapper -->--}}
{{--    <div class="layout-wrapper layout-content-navbar">--}}
{{--        <div class="layout-container">--}}


{{--    <!-- Blank page -->--}}
{{--                <div class="card-body">--}}
{{--                    <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">--}}

{{--                        @csrf--}}

{{--                        <div class="from-group">--}}
{{--                            <label> parent category</label>--}}
{{--                            <select class="form-control" select2 name="parent_id" style="height:40px">--}}
{{--                            @foreach($data as $item)--}}
{{--                                    <option value="{{$item->id}}">--}}

{{--                                    {{\App\Http\Controllers\AdminPanel\categoryController::getParentsTree($item,$item->title)}} </option>--}}
{{--                            @endforeach--}}
{{--                            </select>--}}

{{--                        </div>--}}
{{--                            <!-- / Blank page -->--}}
