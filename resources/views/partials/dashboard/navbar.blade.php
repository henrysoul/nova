<div class="navbar navbar-expand-md header-menu-one bg-light">
    <div class="nav-bar-header-one">
        <div class="header-logo">
            <a href="{{url('')}}" style="color:white">
                {{-- <img src="{{ asset('assets/images/logo.png') }}" alt="Nova" width="100px" height="40px" alt="logo"> --}}
                Nova
            </a>
        </div>
        <div class="toggle-button sidebar-toggle">
            <button type="button" class="item-link">
                <span class="btn-icon-wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
    </div>
    <div class="d-md-none mobile-nav-bar">
        <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse"
            data-target="#mobile-navbar" aria-expanded="false">
            <i class="far fa-arrow-alt-circle-down"></i>
        </button>
        <button type="button" class="navbar-toggler sidebar-toggle-mobile">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
        <ul class="navbar-nav">
            <li class="navbar-item header-search-bar">
                <div class="input-group stylish-input-group">
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="flaticon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                    {{-- <input type="text" class="form-control" placeholder="Find Something . . ."> --}}
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="navbar-item dropdown header-admin">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    <div class="admin-title">
                        <h5 class="item-title">{{ Auth::user()->name }}</h5>
                        <span>Admin</span>
                    </div>
                    <div class="admin-img">
                        <img src="{{ asset('dashboard/images/admin.jpg') }}" alt="Admin">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="item-header">
                        <h6 class="item-title">{{ Auth::user()->name }}</h6>
                    </div>
                    <div class="item-content">
                        <ul class="settings-list">
                            <li><a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="flaticon-turn-off"></i>Log Out</a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
