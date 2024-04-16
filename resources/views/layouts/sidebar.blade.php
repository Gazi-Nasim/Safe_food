{{--@php
$usr = Auth::guard('admin')->user();
dd($usr);
@endphp--}}

<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="image">
            <img src="{{asset('assets/dist/img/user_1.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info flex justify-between h-16">
            {{--<div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->name }}
            </button>

            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                        {{ __('Profile') }}
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>

    </div>--}}
    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
</div>
</div>

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        {{--@if(auth()->user()->user_type=='admin')--}}
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('admin.users.index')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Admin</p>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="{{route('admin.roles.index')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Roles</p>
            </a>
        </li>

        {{--@if ($usr->can('role.create') || $usr->can('role.view') || $usr->can('role.edit') || $usr->can('role.delete'))--}}
        <li class="nav-item">
            <a href="javascript:void(0)" aria-expanded="true">
                <i class="fa fa-tasks"></i>
                <span> Roles & Permissions </span>
            </a>
            <ul class="">
                {{--@if ($usr->can('role.view'))--}}
                <li class=""><a href="{{ route('admin.roles.index') }}">All Roles</a></li>
                {{--@endif--}}
                {{--@if ($usr->can('role.create'))--}}
                <li class="{{ Route::is('admin.roles.create')  ? 'active' : '' }}"><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                {{--@endif--}}
            </ul>
        </li>
        {{--@endif--}}
        {{--@endif--}}
        {{--@if(auth()->user()->user_type=='marchant')--}}
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('profile.edit') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>{{ __('Profile') }}</p>
            </a>
        </li>

        {{--@endif--}}
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>