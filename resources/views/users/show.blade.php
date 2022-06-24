@extends('layout.main')

@section('title','Data User')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
            <li class="breadcrumb-item active">Export Data User</li>
        </ol>
@endsection

@section('content')
<section class="content">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Peringatan!</h5>
        {{ session('success') }}
    </div>
    @endif

    <!-- Default box -->
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Export Data Users</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">Tabel Data Users</h3>
                        </div> --}}
                        {{-- <div class="p-2 bd-highlight">
                            <a href="/users/export" class=" nav-link" target="_blank">
                                <button type="button" class="btn btn-dark btn-sm">
                                    <i class="fas fa-download"></i> Export-Excel
                                </button>
                            </a>
                        </div> --}}
                        <div class="card-body table-responsive p-0" style="height: 400px;">
                            <table id="example1" class="table table-head-fixed table-hover break-all full-width table-striped">
                                <thead class="text-nowrap">
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>NIK</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: justify;">
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->nik }}</td>
                                        <td>{{ $user->level == 1 ? 'Perawat': 'Admin-RM'}}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if (auth()->user()->image)
                                            <img class="img-circle elevation-5" style="width:500;"
                                                src="{{ asset('storage/' .$user->image) }}"
                                                alt="{{ $user->image }}">
                                            @else
                                            <img class="img-circle elevation-2"
                                                src="{{ asset('template') }}/dist/img/user-medic.png"
                                                alt="User profile picture">
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- DataTables  & Plugins -->
{{-- <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    //   $('#example2').DataTable({
    //     "paging": true,
    //     "lengthChange": false,
    //     "searching": false,
    //     "ordering": true,
    //     "info": true,
    //     "autoWidth": false,
    //     "responsive": true,
    //   });
    });
  </script> --}}



@endsection
