

@foreach( $children as $subcategory)
    @if(count($subcategory->children))
    <li class="has-sub">
        <span class="submenu-button"></span>
        <a href="#">{{$subcategory->title}}</a>
        <ul>
           @include('home.categorytree', [ 'children' => $subcategory->children])
        </ul>
    </li>
    <hr>
    @else
    <li>
        <a href="{{route('categoryplace',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
    </li>
    @endif

@endforeach
