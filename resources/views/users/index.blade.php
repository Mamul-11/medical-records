@extends('layout.main')

@section('title','Data User')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
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
            <h3 class="card-title">Data Users</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex flex-row bd-highlight">
                <a href="/users/create" class=" nav-link">
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Tambah User
                    </button>
                </a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <a href="/users">
                                <button type="button" class="btn btn-dark btn-sm">Refresh</button>
                            </a>
                            <div class="card-tools">
                                <form action="{{ url()->current() }}">
                                    <div class="input-group input-group-sm" style="width: 250px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search" value="{{ request('table_search') }}">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 400px;">
                            <table class="table table-head-fixed table-hover break-all full-width table-striped">
                                <thead class="text-nowrap">
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: justify;">
                                    @foreach ($users as $no => $user)
                                    <tr>
                                        <td>{{ ++$no + ($users->currentPage()-1) * $users ->perPage() }}</td>
                                        <td>{{ $user->nik }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->level == 1 ? 'Perawat': 'Admin-RM'}}</td>
                                        <td>
                                            <div class="row d-flex justify-content-start">
                                                <div class="btn">
                                                    <button type="button" class="btn btn-icon btn-outline-info"
                                                        data-toggle="modal"
                                                        data-target="#staticBackdrop{{ $user -> id }}">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                                <div class="btn">
                                                    <a href="/users/{{ $user->nik }}/edit">
                                                        <button type="button" class="btn btn-icon btn-outline-warning">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                {{-- <div class="btn">
                                                    <a href="/users/{{ $user->nik }}/password">
                                                        <button type="button" class="btn btn-icon btn-outline-warning">
                                                            <i class="fas fa-user-lock"></i>
                                                        </button>
                                                    </a>
                                                </div> --}}
                                                <div class="btn">
                                                    <a href="#">
                                                        <button type="button" class="btn btn-outline-warning" data-toggle="modal"
                                                            data-target="#modal-warning{{ $user->id }}">
                                                            <i class="nav-icon fas fa-user-lock"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="btn">
                                                    <a href="#">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-outline-danger"
                                                            data-toggle="modal"
                                                            data-target="#modal-danger{{ $user->id }}">
                                                            <i class="nav-icon far fa-trash-alt"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal password-->
                                    <div class="modal fade" id="modal-warning{{ $user -> id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-warning">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ganti password user</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="py-3 text-center">
                                                        <p>
                                                            <strong>Apakah anda ingin mengganti password user dengan nama "{{ $user->nama }}" dengan NIK "{{ $user->nik }}" ke default&hellip;?
                                                            </strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                        <form method="post" action="/users/{{ $user->nik }}/password"
                                                            class="d-inline">
                                                            @csrf
                                                            <button type="submit" class="btn btn-dark">
                                                                Ubah Password
                                                            </button>
                                                        </form>
                                                    
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- Modal trash-->
                                    <div class="modal fade" id="modal-danger{{ $user -> id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus data riwayat Ruang Gawat darurat</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="py-3 text-center">
                                                        <p><strong>Apakah anda yakin ingin menghapus
                                                            user nama
                                                            "{{ $user->nama }}" dengan NIK "{{ $user->nik}}" &hellip;?</strong></p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <form action="/users/{{ $user->nik}}/delete" method="get"
                                                        class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-dark">
                                                            Hapus data
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- Modal detail-->
                                    <div class="modal fade" id="staticBackdrop{{ $user -> id }}" data-backdrop="static"
                                        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xs"
                                            role="document">
                                            <div class="modal-content ">
                                                <div class="modal-header bg-info">
                                                    <h3 class="modal-title">Detail Profile User</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5>Profile</h5>
                                                                        <div class="text-center">
                                                                            @if ($user->image)
                                                                            <img class="profile-user-img img-fluid img-circle"
                                                                                style="width:150px;"
                                                                                src="{{ asset('storage/' .$user->image) }}"
                                                                                alt="{{ $user->image }}">
                                                                            @else
                                                                            <img class="profile-user-img img-fluid img-circle"
                                                                                src="{{ asset('template') }}/dist/img/user-medic.png"
                                                                                alt="User profile picture">
                                                                            @endif

                                                                        </div>

                                                                        <h3 class="profile-username text-center">
                                                                            {{ $user->nama }}</h3>

                                                                        <p class="text-muted text-center">
                                                                            {{ ($user->level == 0) ?'Admin Rekam Medis' : 'Perawat' }}
                                                                        </p>

                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="card card-navy card-outline">
                                                                            <div class="card-body box-profile">
                                                                                <ul
                                                                                    class="list-group list-group-unbordered mb-3">
                                                                                    <li class="list-group-item">
                                                                                        <b>Nik</b>
                                                                                        <span
                                                                                            class="float-right">{{ $user->nik }}</span>
                                                                                    </li>
                                                                                    <li class="list-group-item">
                                                                                        <b>Email</b>
                                                                                        <span
                                                                                            class="float-right">{{ $user->email }}</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                        Showing {{ $users->firstItem()  }} to {{ $users->lastItem() }} of {{ $users->total() }}
                        entries <br>
                        Pages : {{ $users->currentPage() }} <br>
                        Data Per Page : {{ $users->perPage() }} <br>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="d-flex justify-content-end dataTables_paginate paging_simple_numbers"
                        id="example2_paginate">
                        <ul class="pagination">
                            {{ $users->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- DataTables  & Plugins -->



@endsection
