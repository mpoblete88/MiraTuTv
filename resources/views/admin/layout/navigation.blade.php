<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://image.flaticon.com/icons/png/128/138/138662.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $user->full_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Navegación</li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>
                @foreach($menu as $menu)
                <li class="treeview {{ \Route::is($menu->route) ? 'active': '' }}">
                    <a href="{{route($menu->route)}}">
                        <i class="{{$menu->icon}}"></i>
                        <span>{{ $menu->title }}</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    @if($menu->children->count() > 0)
                    <ul class="treeview-menu {{ \Route::is($menu->route) ? 'active': '' }}">
                        @foreach($menu->children as $menu)
                        <li><a href="{{route($menu->route)}}"><i class="{{ $menu->icon }}"></i> {{$menu->title}}</a></li>
                            @endforeach
                    </ul>
                        @endif
                </li>
                @endforeach



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
