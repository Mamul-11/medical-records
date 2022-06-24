<!-- Navbar -->
<nav class="main-header navbar nav-compact navbar-expand  navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item ">
            <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <strong><a href="/" class="nav-link">Home</a></strong>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link text-sm-center" data-widget="navbar-date" href="#" role="button">
                <strong id="tgl"></strong>&ensp;<strong id="clock"></strong>
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user user-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
                @if (auth()->user()->image)
                <img class="user-image elevation-2 position-center" style="width:500;"
                    src="{{ asset('storage/' .auth()->user()->image) }}" alt="{{ auth()->user()->image }}">
                @else
                <img class="user-image elevation-2 position-center"
                    src="{{ asset('template') }}/dist/img/user-medic.png" alt="User profile picture">
                @endif
                {{-- <img src="{{ asset ('template') }}/dist/img/user2-160x160.jpg" class="user-image elevation-2"
                alt="User Image" width="500"> --}}
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >
                <!-- User image -->
                <li class="user-header" style="background: url('{{ asset('template') }}/dist/img/photo1.jpg') center center; width: auto; height:auto">
                    
                        @if (auth()->user()->image)
                        <img class="img-circle elevation-2 mb-1" 
                            src="{{ asset('storage/' .auth()->user()->image) }}" alt="{{ auth()->user()->image }}">
                        @else
                        <img class="img-circle elevation-2 mb-1" src="{{ asset('template') }}/dist/img/user-medic.png"
                            alt="User profile picture">
                        @endif
                        {{-- <img src="{{ asset ('template') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-5"
                        alt="User Image"> --}}
                    <div class="widget-user-header mt-1">
                        <h5 class="widget-user-username text-right "><span class="bg-light">{{ Str::limit((auth()->user()->nama), 30); }}</span></h5>
                        <p class="widget-user-desc text-right ">
                        <small class="bg-light"><i class="nav-icon fas fa-user-md"></i>&ensp;<strong>{{ (auth()->user()->level == 0) ? 'Admin Rekam Medis' : 'Perawat' }}</strong></small>
                        </p>
                    </div>
                </li>

                <!-- Menu Footer-->
                <li class="user-body">
                    <div class="d-flex justify-content-start">
                        <a href="/profile/{{ auth()->user()->nik }}" class="nav-link" >
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <i class="nav-icon far fa-address-card"></i>&ensp;My Profile
                                </button>
                            </a>
                    </div>
                    <div class="d-flex justify-content-start">
                        <a href="/profile/{{ auth()->user()->nik }}/editPassword" class="nav-link" >
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <i class="nav-icon fas fa-user-lock"></i>&ensp;Change Password
                                </button>
                            </a>
                    </div>
                    <div class="d-flex justify-content-start">
                        <a href="/about" class="nav-link">
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <i class="nav-icon fas fa-exclamation-circle"></i>&ensp;About
                                </button>
                            </a>
                    </div>
                </li>
                <li class="user-footer">
                    <div class="dropdown-item" href="#">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-block btn-danger btn-sm" href="#"><i class="nav-icon fas fa-sign-out-alt"></i>&ensp;Log Out <span
                                    data-feather="log-out"></span></button>
                        </form>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
