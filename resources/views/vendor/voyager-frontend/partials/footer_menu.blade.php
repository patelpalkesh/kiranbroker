@foreach($items as $menu_item)
    @php ($hasChildren = count($menu_item->children) > 0)
	  <li>
        <a  class="nav-link" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
    </li>
@endforeach
