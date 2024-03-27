<!-- General CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- CSS Libraries -->

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
<link rel="stylesheet" href="{{ asset('/') }}assets/css/components.css">
<link rel="stylesheet" href="{{ asset('assets/') }}/css/babeng.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a>Front Office Pages</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Pages</li>

            <li><a href="/dashboard-front" class="nav-link"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

            <li><a href="/user-masyarakat"><i class="fas fa-users"></i>
                    <span>Data User Masyarakat</span>
                </a>
            </li>
            <li><a href="/dashboard-permohonan"><i class="fas fa-folder-open"></i>
                    <span>Dashboard Permohonan</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="{{ route('monitoring') }}"class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-desktop"></i>
                    <span>Monitoring</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('monitoringskk') }}" class="nav-link"><i class="fa-solid fa-file-lines"></i>
                            <span>SKK</span></a></li>
                    <li><a href="{{ route('monitoringskd') }}" class="nav-link"><i class="fa-solid fa-file-lines"></i>
                            <span>SKD</span></a></li>
                    <li><a href="{{ route('monitoringskbm') }}" class="nav-link"><i class="fa-solid fa-file-lines"></i>
                            <span>SKBM</span></a></li>
                    <li><a href="{{ route('monitoringsku') }}" class="nav-link"><i class="fa-solid fa-file-lines"></i>
                            <span>SKU</span></a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>

<!-- General JS Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="{{ asset('assets/') }}/js/jquery.uploadPreview.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset('/') }}assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="{{ asset('/') }}assets/js/scripts.js"></script>
<script src="{{ asset('/') }}assets/js/custom.js"></script>

<!-- Page Specific JS File -->
