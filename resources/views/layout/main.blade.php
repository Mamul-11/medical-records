<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RMPks1SPH | @yield('title')</title>

    @include('partials.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed" >
    <div class="wrapper">

        <!-- Preloader -->
        @include('partials.preloader')

        <!-- Navbar -->
        @include('partials.nav')
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->
        @include('partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            @yield('body-title')
                        </div><!-- /.col -->
                    </div>
                    
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.content-wrapper -->
            </section>
        </div>
        <!-- footer -->
        @include('partials.footer')
        <!-- /footer -->


    </div>
    <!-- ./wrapper -->

    <!-- script -->
    @include('partials.script')
</body>
</html>
