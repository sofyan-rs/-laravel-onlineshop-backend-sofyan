<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">OlShop</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">OS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-house-chimney"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('user') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('user') }}"><i class="fas fa-user"></i> <span>Users</span></a>
            </li>
            <li class="{{ Request::is('category') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('category') }}"><i class="fas fa-bookmark"></i>
                    <span>Categories</span></a>
            </li>
            <li class="{{ Request::is('product') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('product') }}"><i class="fas fa-box-open"></i>
                    <span>Products</span></a>
            </li>
        </ul>
    </aside>
</div>
