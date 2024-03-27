<header>
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
            <div class="search-element">
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                {{-- @include('includes.topbar') --}}
            </div>
        </div>

        <a class="navbar-brand" style="margin-left: 20px;" href="#">
            <img src="/image/logo_pyk.png" alt='logo' height='60'>
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
                        <div class="d-sm-none d-lg-inline-block">Front Office</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">                        

                        <a href="/setting-front" class="dropdown-item has-icon">
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
