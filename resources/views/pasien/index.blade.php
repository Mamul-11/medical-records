@extends('layout.main')

@section('title','Data Pasien')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Data Pasien</li>
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
                    <a href="/pasiens/create" class="nav-link" >
                        <button type="button" class="btn btn-primary btn-sm">
                                <i class="fas fa-user-plus"></i> Tambah Pasien
                        </button>
                    </a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="/pasiens/export" class="nav-link">
                        <button type="button" class="btn btn-dark btn-sm">Export-Excel</button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <div class="d-flex justify-content-end bd-highlight">
                                <div class="p-2 bd-highlight">
                                    <button type="button" class="btn btn-dark btn-md"><a href="/pasiens">Refresh</a></button>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <form action="{{ url()->current() }}">
                                        <div class="input-group input-group">
                                            <input type="text" name="table_search" class="form-control form-control-md float-right"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default btn-md">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->              
                        <div class="card-body table-responsive p-0" style="height: 400px;">
                            <table
                                class="table table-head-fixed table-hover text-wrap table-striped table-bordered">
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
                                            <div class="row d-flex justify-content-start">
                                                <div class="btn">
                                                    <a href="#">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-icon btn-outline-info"
                                                            data-toggle="modal"
                                                            data-target="#staticBackdrop{{ $pasien -> no_rm }}">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="btn">
                                                    <a href="/pasiens/{{ $pasien->no_rm }}/edit">
                                                        <button type="button"
                                                            class="btn btn-icon btn-outline-warning">
                                                            <i class="nav-icon fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="btn">
                                                    <a href="#">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-outline-danger"
                                                            data-toggle="modal"
                                                            data-target="#modal-danger{{ $pasien -> id }}">
                                                            <i class="nav-icon far fa-trash-alt"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal trash-->
                                    <div class="modal fade" id="modal-danger{{ $pasien -> id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus data riwayat Ruang Gawat darurat
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="py-3 text-center">
                                                        <p class="heading mt-3">Apakah anda yakin ingin menghapus
                                                            data
                                                            pasien No. rekam medis "{{ $pasien->no_rm}}" dengan nama
                                                            "{{ $pasien->nama }}" ?</p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <form action="/pasiens/{{ $pasien->no_rm}}/delete" method="post"
                                                        class="d-inline">
                                                        @method('get')
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

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop{{ $pasien->no_rm }}"
                                        data-backdrop="static" tabindex="-1" role="dialog"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                                            role="document">
                                            <div class="modal-content ">
                                                <div class="modal-header bg-info">
                                                    <h3 class="modal-title">Detail Data Pasien</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h3><b>Biodata Pasien</b></h3>
                                                                        <h5>No. Rekam Medis&ensp;&nbsp;&nbsp;:
                                                                            <strong>{{ $pasien->no_rm }}</strong>
                                                                        </h5>
                                                                        <h5>NIK&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;:
                                                                            <strong>{{ $pasien->nik }}</strong>
                                                                        </h5>
                                                                        <h5>Nama Lengkap&ensp;&ensp;&ensp;&nbsp;:
                                                                            <strong>{{ $pasien->nama }}</strong>
                                                                        </h5>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Tanggal Lahir
                                                                                        :
                                                                                    </h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->tgl_lahir }}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12"> Faskes
                                                                                        Lainnya :
                                                                                    </h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->faskes ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Jenis Kelamin
                                                                                        :
                                                                                    </h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->kelamin == 1 ? 'Laki-laki': 'perempuan' }}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Pendidikan
                                                                                        Terakhir
                                                                                        :</h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->pendidikan ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Agama :
                                                                                    </h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->agama }}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Pekerjaan :
                                                                                    </h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->pekerjaan ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Alamat :</h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->alamat }}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Penanggung
                                                                                        Jawab
                                                                                        (KK)</h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->kk ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">No. BPJS/KIS
                                                                                        :
                                                                                    </h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->no_kis ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12"> No. Telepon
                                                                                        :
                                                                                    </h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->telp ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Status
                                                                                        BPJS/KIS :
                                                                                    </h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->status_kis ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="header mb-2">
                                                                            <h4><strong>Data Tambahan
                                                                                    Pasien</strong></h4>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Penyakit yang
                                                                                        Diderita Sendiri :</h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->penyakit_sendiri ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Penyakit yang
                                                                                        Diderita Turunan :</h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->penyakit_keluarga ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Alergi :</h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->alergi ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <h6 class="col-12">Riwayat
                                                                                        Pengobatan
                                                                                        Sebelumnya :</h6>
                                                                                    <strong
                                                                                        class="col-12">{{ $pasien->pengobatan ?? "-"}}
                                                                                    </strong>
                                                                                </div>
                                                                            </div>
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
