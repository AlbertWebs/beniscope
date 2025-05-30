<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}
                {{-- @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item') --}}
            </ul>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="{{ route('services.index') }}" class="nav-link"><i class="fas fa-concierge-bell"></i> Services</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link"><i class="fas fa-list"></i> Construction Categories</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('subcategories.index') }}" class="nav-link"><i class="fas fa-layer-group"></i> Construction Subcategories</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('materials.index') }}" class="nav-link"><i class="fas fa-cubes"></i> Construction Materials</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.index') }}" class="nav-link"><i class="fas fa-newspaper"></i> Blogs</a>
                </li>
            </ul>
        </nav>
    </div>

</aside>
