{{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ route('backend') }}">Backend</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
        aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-dark nav-link px-7" type="submit">Logout</button>
            </form>
        </div>
    </div>
</header>
 --}}
<header>
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
            <div class="search-element">
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i
                        class="fas fa-bars"></i></a>
                {{-- @include('includes.topbar') --}}
            </div>
        </div>

        <a class="navbar-brand" style="margin-left: 20px;" href="#">
            <img src="/image/lambang-kota-payakumbuhremovebgpreview-1@2x.png" alt='logo' height='60'>
            E-Kelurahan Kota Payakumbuh
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{ asset('/') }}assets/img/avatar/avatar-1.png"
                            class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Admin</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>

                        <a href="#" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <form action="login">
                            @csrf
                            <a href="/logout" class="dropdown-item has-icon text-danger"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                <i class="fas fa-sign-out-alt">
                                </i> Logout
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
