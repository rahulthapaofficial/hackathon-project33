<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item" id="dashboardManage"><a class="nav-item-hold" href="#"><i
                        class="fa fa-dashboard fa-3x"></i><span class="nav-text">Dashboard</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" id="roleManage"><a class="nav-item-hold" href="{{ route('roles.index') }}"><i
                        class="fa fa-user-md fa-3x"></i><span class="nav-text">Roles</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" id="userManage">
                <a class="nav-item-hold" href="{{ route('users.index') }}"><i class="fa fa-user fa-3x"></i><span
                        class="nav-text">Users</span></a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>