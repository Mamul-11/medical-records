@extends('layout.main')

@section('title','Daftar Pasien')
@section('body-title')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
    <li class="breadcrumb-item active">Layanan Puskesmas</li>
    <li class="breadcrumb-item active">Data Pasien Layanan Puskesmas</li>
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
            <div class="d-flex flex-row bd-highlight mb-2">
                <div class="p-2 bd-highlight">
                    <div class="btn-group">
                        <button type="button" class="btn btn-dark">
                            <i class="nav-icon fas fa-file-export"></i> EXPORT DATA
                        </button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                            data-toggle="dropdown" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu" style="">
                            <a href="/rawat_jalan/rpu/export" class="dropdown-item">
                                <button type="button" class="btn btn-outline-dark btn-sm">
                                    Rawat Jalan - RPU
                            </button>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/rawat_jalan/rgm/export" class="dropdown-item">
                                <button type="button" class="btn btn-outline-dark btn-sm">
                                    Rawat Jalan - RGM
                            </button>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/rawat_jalan/mtbs/export" class="dropdown-item">
                                <button type="button" class="btn btn-outline-dark btn-sm">
                                    Rawat Jalan - MTBS
                            </button>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/rawat_jalan/kia/export" class="dropdown-item">
                                <button type="button" class="btn btn-outline-dark btn-sm">
                                    Rawat Jalan - KIA
                            </button>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/rawat_inap/export" class="dropdown-item">
                                <button type="button" class="btn btn-outline-dark btn-sm">
                                    Rawat Inap
                                </button>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/ruang_gawat_darurat/export" class="dropdown-item">
                                <button type="button" class="btn btn-outline-dark btn-sm">
                                    Ruang Gawat Darurat
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <a href="/layanan/pasien">
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
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-primary">
                                                    <i class="nav-icon fas fa-wheelchair text-cyan"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-outline-primary dropdown-toggle dropdown-icon"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu" style="">
                                                    <a href="/rawat_jalan/rpu/{{ $pasien->no_rm }}/index"
                                                        class="dropdown-item">
                                                        <button type="button"
                                                            class="btn btn-icon btn-outline-secondary">
                                                            Rawat Jalan - RPU
                                                        </button>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="/rawat_jalan/rgm/{{ $pasien->no_rm }}/index"
                                                        class="dropdown-item">
                                                        <button type="button"
                                                            class="btn btn-icon btn-outline-secondary">
                                                            Rawat Jalan - RGM
                                                        </button>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="/rawat_jalan/mtbs/{{ $pasien->no_rm }}/index"
                                                        class="dropdown-item">
                                                        <button type="button"
                                                            class="btn btn-icon btn-outline-secondary">
                                                            Rawat Jalan - MTBS
                                                        </button>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="/rawat_jalan/kia/{{ $pasien->no_rm }}/index"
                                                        class="dropdown-item">
                                                        <button type="button"
                                                            class="btn btn-icon btn-outline-secondary">
                                                            Rawat Jalan - KIA
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <a href="/rawat_inap/{{ $pasien->no_rm }}/index">
                                                    <button type="button" class="btn btn-outline-primary">
                                                        <i class="nav-icon fas fa-bed text-teal"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="/ruang_gawat_darurat/{{ $pasien->no_rm }}/index">
                                                    <button type="button" class="btn btn-icon btn-outline-primary">
                                                        <i class="nav-icon fas fa-first-aid text-danger"></i>
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
                        Showing {{ $pasiens->firstItem() }} to {{ $pasiens->lastItem() }} of {{ $pasiens->total() }}
                        entries <br>
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
