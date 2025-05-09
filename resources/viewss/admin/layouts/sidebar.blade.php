<!-- resources/views/admin/layouts/sidebar.blade.php -->
<div class="sidebar bg-dark text-light vh-100">
    <div class="p-3">
        <h4 class="text-center">Admin Panel</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('categories.index') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('subcategories.index') }}">Subcategories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('materials.index') }}">Materials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('services.index') }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('blogs.index') }}">Blogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </div>
</div>
