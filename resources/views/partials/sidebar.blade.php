<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-mini-xs sidebar-dark-olive elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link justify-content-sm-center">
        <img src="{{ asset('template') }}/dist/img/logoPKS.ico" class="brand-image img-responsive"
            style="opacity: .8">
        <span class="brand-text font-weight">
            Rekam Medis<br>
            <strong>Puskesmas Sumpiuh 1</strong>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-5 pb-3 mb-3 d-flex">
            <div class="image">
                @if (auth()->user()->image)
                <img class="img-circle elevation-2"
                    src="{{ asset('storage/' .auth()->user()->image) }}" alt="{{ auth()->user()->image }}">
                @else
                <img class="img-circle elevation-"
                    src="{{ asset('template') }}/dist/img/user-medic.png" alt="User profile picture">
                @endif
                {{-- <img src="{{ asset('template') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image"> --}}
            </div>
            <div class="info">
                <span href="#" class="d-block text-light 0">{{ Str::limit((auth()->user()->nama), 18)}}</span>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-header">HOME</li>
                <li class="nav-item">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-home"></i></i>
                        <p>Home</p>
                    </a>
                </li>

                @can('admin')
                <li class="nav-header">Pasien</li>
                <li class="nav-item ">
                    <a href="/pasiens" class="nav-link {{ Request::is('pasiens*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-user-injured text-lime"></i>
                        <p>Data Pasien</p>
                    </a>
                </li>
                @endcan

                <li class="nav-header">PELAYANAN PUSKESMAS</li>
                <li class="nav-item">
                    <a href="/layanan/pasien" class="nav-link {{ Request::is('layanan*') ? 'active' : ''}} || {{ Request::is('rawat_jalan/rpu*') ? 'active' : ''}} || {{ Request::is('rawat_jalan/rgm*') ? 'active' : ''}}|| {{ Request::is('rawat_jalan/mtbs*') ? 'active' : ''}} || {{ Request::is('rawat_jalan/kia*') ? 'active' : ''}} || {{ Request::is('ruang_gawat_darurat*') ? 'active' : ''}} || {{ Request::is('rawat_inap*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-laptop-medical"></i>
                        <p>Layanan</p>
                    </a>
                </li>
                {{-- <li class="nav-item {{ (request()->is('rawat_jalan/rpu*')) ||  (request()->is('rawat_jalan/rgm*')) ||  (request()->is('rawat_jalan/mtbs*')) ||  (request()->is('rawat_jalan/kia*'))  ? 'active menu-open' : '' }}">
                    <a href="/rawat_jalan" class="nav-link {{ (request()->is('rawat_jalan/rpu*')) ||  (request()->is('rawat_jalan/rgm*')) ||  (request()->is('rawat_jalan/mtbs*')) ||  (request()->is('rawat_jalan/kia*'))  ? 'active' : '' }}">
                        <i class="nav-icon fas fa-wheelchair text-cyan"></i>
                        <p>
                            Rawat Jalan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/rawat_jalan/rpu" class="nav-link {{ Request::is('rawat_jalan/rpu*') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>RPU</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/rawat_jalan/rgm" class="nav-link {{ Request::is('rawat_jalan/rgm*') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon "></i>
                                <p>RGM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/rawat_jalan/mtbs" class="nav-link {{ Request::is('rawat_jalan/mtbs*') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>MTBS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/rawat_jalan/kia" class="nav-link {{ Request::is('rawat_jalan/kia*') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>KIA</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/rawat_inap" class="nav-link {{ Request::is('rawat_inap*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-bed text-teal"></i>
                        <p>Rawat Inap</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/ruang_gawat_darurat" class="nav-link {{ Request::is('ruang_gawat_darurat*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-first-aid text-danger"></i>
                        <p>
                            Ruang Gawat Darurat
                        </p>
                    </a>
                </li> --}}
                @can('admin', User::class)
                <li class="nav-header">AKUN</li>
                <li class="nav-item">
                    <a href="/users" class="nav-link {{ Request::is('users*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-user-md text-warning"></i>
                        <p>
                            Data Users
                        </p>
                    </a>
                </li>
                @endcan
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
