@extends('layout.main')

@section('title','Rawat Jalan MTBS')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Rawat Jalan MTBS</li>
            <li class="breadcrumb-item active">Data Pasien Rawat Jalan MTBS</li>
        </ol>
@endsection

@section('content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Data Pasien</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row bd-highlight">
                <a href="/rawat_jalan/mtbs/export" class=" nav-link">
                    <button type="button" class="btn btn-dark btn-sm">
                        <i class="nav-icon fas fa-file-export"></i> Export data
                </button>
                </a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <button type="button" class="btn btn-dark btn-sm"><a href="/rawat_jalan/mtbs">Refresh</a></button>
                            <div class="card-tools">
                                <form action="{{ url()->current() }}">
                                    <div class="input-group input-group-sm" style="width: 250px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
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
                            <table class="table table-head-fixed table-hover text-wrap table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No.RM</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Riwayat Pasien</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pasiens as $no => $pasien)
                                    <tr>
                                        <td>{{ ++$no + ($pasiens->currentPage()-1) * $pasiens ->perPage() }}</td>
                                        <td>{{ $pasien->no_rm }}</td>
                                        <td>{{ $pasien->nik }}</td>
                                        <td>{{ $pasien->nama }}</td>
                                        <td>
                                            <div class="btn">
                                                <a href="/rawat_jalan/mtbs/{{ $pasien->no_rm }}/index">
                                                    <button type="button"
                                                        class="btn btn-icon btn-outline-primary">
                                                        <i class="nav-icon fas fa-notes-medical"></i>
                                                    </button>
                                                </a>
                                            </div>
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
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                        Showing {{ $pasiens->firstItem() }} to {{ $pasiens->lastItem() }} of {{ $pasiens->total() }} entries <br>
                        Pages : {{ $pasiens->currentPage() }} <br>
                        Data Per Page : {{ $pasiens->perPage() }} <br>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="d-flex justify-content-end dataTables_paginate paging_simple_numbers"
                        id="example2_paginate">
                        <ul class="pagination">
                            {{ $pasiens->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
