

@foreach( $children as $subcategory)
<ul class="list-group">
    @if(count($subcategory->children))
    <li >{{$subcategory->title}}</li>
    <ul class="list-disc">
{{--        @include('home.categorytree', [ 'children' => $subcategory->children])--}}
    </ul>
    <hr>
    @else
    <li> <a href="{{route('categoryplace',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a> </li>
    @endif
</ul>
@endforeach
