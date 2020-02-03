<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item" id="dashboardManage"><a class="nav-item-hold" href="{{ url('/dashboard') }}"><i
                        class="fa fa-dashboard fa-3x"></i><span class="nav-text">Dashboard</span></a>
                <div class="triangle"></div>
            </li>
            @can('view-role')
            <li class="nav-item" id="roleManage"><a class="nav-item-hold" href="{{ route('roles.index') }}"><i
                        class="fa fa-user-md fa-3x"></i><span class="nav-text">Roles</span></a>
                <div class="triangle"></div>
            </li>
            @endcan
            @can('view-user')
            <li class="nav-item" id="userManage">
                <a class="nav-item-hold" href="{{ route('users.index') }}"><i class="fa fa-user fa-3x"></i><span
                        class="nav-text">Users</span></a>
                <div class="triangle"></div>
            </li>
            @endcan
            @can('view-company')
            <li class="nav-item" id="companyManage">
                <a class="nav-item-hold" href="{{ route('companies.index') }}"><i class="fa fa-building-o fa-3x"
                        aria-hidden="true"></i><span class="nav-text">Companies</span></a>
                <div class="triangle"></div>
            </li>
            @endcan
            @can('view-vehicle')
            <li class="nav-item" id="vehicleManage">
                <a class="nav-item-hold" href="{{ route('vehicles.index') }}"><i class="fa fa-truck fa-3x"
                        aria-hidden="true"></i><span class="nav-text">Vehicles</span></a>
                <div class="triangle"></div>
            </li>
            @endcan
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>