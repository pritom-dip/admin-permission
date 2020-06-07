@foreach($sideMenus as $sideMenu)

@if(!empty($sideMenu->allChildrenMenus))

<li class="treeview">
    <a href="#">
        <i class="fa fa-cogs"></i> <span>{{$sideMenu->name}}</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

    	@php
    	$count = count($sideMenu->allChildrenMenus);
    	for($i=0; $i < $count; $i++){
    	@endphp
    		<li class="@if(Route::currentRouteName() == $sideMenu->allChildrenMenus[$i]->route_name ) active menu-activated @endif">
	            <a href="{{route($sideMenu->allChildrenMenus[$i]->route_name)}}">{!! $sideMenu->allChildrenMenus[$i]->icon !!}{{$sideMenu->allChildrenMenus[$i]->name}}</a>
	        </li>
	        @php
    	}
        @endphp

    </ul>
</li>

@endif

@endforeach