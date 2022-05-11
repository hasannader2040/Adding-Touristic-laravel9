
    <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

    <!-- Blank page -->
                <div class="card-body">
                    <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="from-group">
                            <label> parent category</label>
                            <select class="form-control" select2 name="parent_id" style="height:40px">
                            @foreach($data as $item)
                                    <option value="{{$item->id}}">
{{--                                        @if($item->id == $data->parent_id) selected="selected" @endif>--}}
                                    {{\App\Http\Controllers\AdminPanel\categoryController::getParentsTree($item,$item->title)}} </option>
                            @endforeach
                            </select>

                        </div>


                        <div class="mb-3">
                            <h1>add category</h1>
                            <label class="form-label" for="basic-default-fullname">title</label>
                            <input type="text" class="form-control" name="title" id="basic-default-fullname" placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"  for="basic-default-company">description</label>
                            <input type="text" name="description" class="form-control" id="basic-default-company" placeholder="ACME Inc.">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">keywords</label>
                            <div class="input-group input-group-merge">
                                <input type="text" name="keywords" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2">
                                <span class="input-group-text" id="basic-default-email2">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers &amp; periods</div>
                        </div>

                        <div class="input-group">
                            <input type="file" name="image" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">Button</button>
                        </div>

                        {{--  to make select --}}
                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>

                            <select name="status"  class="form-select form-controll" id="exampleFormControlSelect2" aria-label="Multiple select example">
                                <option selected="">status</option>
                                <option value="1">true</option>
                                <option value="2">false</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>

                </div>
        </div>
    </div>
                            <!-- / Blank page -->
