<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{asset('index.html')}}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard.index')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('products.index') }}">
    <i class="fas fa-box"></i>
        <span>Products</span></a>
</li>

<!-- Divider -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('users.index')}}">
    <i class="fas fa-users"></i>
        <span>User</span></a>
</li>




</ul>