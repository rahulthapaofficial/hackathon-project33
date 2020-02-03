<div class="main-header">
    <div class="logo">
        <img src="{{ asset('public/dashboard/img/profile.png') }}" alt="" style="border-radius: 100%">
    </div>
    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="d-flex align-items-center">
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <i class="search-icon text-muted i-Magnifi-Glass1"></i>
        </div>
    </div>
    <div style="margin: auto"></div>
    <div class="header-part-right">
        <!-- Full screen toggle -->
        <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
        <!-- Notificaiton -->
        <div class="dropdown">
            <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="badge badge-primary" style="color: #663399; background: #fff">3</span>
                <i class="fa fa-bell fa-2x header-icon text-white"></i>
            </div>
        </div>
        
        <div class="dropdown">
            <div class="user col align-self-end">
                <img src="{{ asset('public/dashboard/img/profile.png') }}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        <i class="i-Lock-User mr-1"></i> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </div>
                    <a class="dropdown-item">Account settings</a>
                    <a class="dropdown-item">Billing history</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> Sign out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>