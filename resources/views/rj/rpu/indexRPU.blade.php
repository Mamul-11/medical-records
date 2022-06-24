@extends('layout.main')

@section('title','Rawat Jalan RPU')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Rawat Jalan RPU</li>
            <li class="breadcrumb-item active">Riwayat Rawat Jalan RPU</li>
        </ol>
@endsection


@section('content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Biodata Pasien</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h3>Biodata Pasien</h3>
                    <h5>No. Rekam Medis : <strong>{{ $pasien->no_rm }}</strong>
                </div>

                <div class="card-body table-responsive p-0" style="height: auto;">
                    <table class="table table-hover text-wrap table-striped" style="text-align: justify;">
                        <tbody>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->nik }}</strong></td>
                                <td>No. BPJS/KIS</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->no_kis ?? "-"}}</strong></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->nama }}</strong></td>
                                <td>Status BPJS/KIS</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->status_kis ?? "-"}}</strong></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->tgl_lahir }}</strong></td>
                                <td>Faskes Lainnya</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->faskes ?? "-"}}</strong></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->kelamin }}</strong>
                                </td>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->pekerjaan ?? "-"}}</strong></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->agama }}</strong></td>
                                <td>Penanggung Jawab (KK)</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->kk ?? "-"}}</strong></td>
                            </tr>
                            <tr>
                                <td>Pendidikan Terakhir</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->pendidikan }}</strong></td>
                                <td>No. Telepon</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->telp ?? "-"}}</strong></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><strong>{{ $pasien->alamat }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="header">
                    <h3>Data Tambahan Pasien</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body table-responsive p-0" style="height: auto;">
                            <table class="table table-hover text-wrap table-striped " style="text-align: justify;">
                                <tbody>
                                    <tr>
                                        <td>Penyakit yang Diderita Sendiri</td>
                                        <td>:</td>
                                        <td><strong>{{ $pasien->penyakit_sendiri ?? "-"}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Penyakit yang Diderita Turunan </td>
                                        <td>:</td>
                                        <td><strong>{{ $pasien->penyakit_keluarga ?? "-"}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Alergi</td>
                                        <td>:</td>
                                        <td><strong>{{ $pasien->alergi ?? "-"}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Riwayat Pengobatan Sebelumnya</td>
                                        <td>:</td>
                                        <td><strong>{{ $pasien->pengobatan ?? "-"}}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Register -->
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Peringatan!</h5>
            {{ session('success') }}
        </div>
        @endif
    <div class="card card-secondary card-outline">
        <div class="card-header">
            <h3 class="card-title">Riwayat Rawat Jalan</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex flex-row bd-highlight mb-3">
                <a href="{{ route('create_rpu', $pasien->no_rm) }}" class=" nav-link">
                    <button type="button" class="btn btn-primary">
                        <i class="nav-icon fas fa-notes-medical"></i> Tambah Riwayat
                    </button></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-lightblue">
                            <div class="card-header">
                                <button type="button" class="btn btn-dark btn-sm"><a href="/rawat_jalan/rpu/{{ $pasien->no_rm }}/index">Refresh</a></button>
                                <div class="card-tools">
                                    <form action="{{ url()->current()}}">
                                        <div class="input-group input-group-sm" style="width: 250px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search" value="{{ request('table_search') }}">
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
                                <table
                                    class="table table-head-fixed table-hover break-all full-width table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal pemeriksaan</th>
                                            <th>Poli rawat jalan</th>
                                            <th>Keluhan Pasien</th>
                                            <th>Petugas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: justify;">
                                        @foreach ($rajals as $no => $rajal)
                                        <tr>
                                            <td>{{ ++$no + ($rajals->currentPage()-1) * $rajals ->perPage() }}</td>
                                            <td>{{ $rajal->tgl_masuk ?? "-"}}</td>
                                            <td>{{ $rajal->poli->nama }}</td>
                                            <td>{{ $rajal->keluhan ?? "-"}}</td>
                                            <td>
                                                {{ $rajal->user1 ?? "-"}}<br>
                                                {{ $rajal->user2 ?? "-" }}<br>
                                                {{ $rajal->user3 ?? "-" }}
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <div class="btn">
                                                        <a href="#">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-icon btn-outline-info"
                                                                data-toggle="modal"
                                                                data-target="#staticBackdrop{{ $rajal -> id }}">
                                                                <i class="fas fa-eye"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="btn">
                                                        <a
                                                            href="{{ route('edit_rpu', ['id' => $rajal -> id, 'pasien_id' => $rajal -> pasien_id]) }}">
                                                            <button type="button"
                                                                class="btn btn-icon btn-outline-warning">
                                                                <i class="far fa-edit"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="btn">
                                                        <a href="#">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-danger{{ $rajal -> id }}">
                                                                <i class="nav-icon far fa-trash-alt"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal trash-->
                                        <div class="modal fade" id="modal-danger{{ $rajal -> id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-danger">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus data riwayat Rawat Jalan RPU</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="py-3 text-center">
                                                            <p class="heading mt-3">Apakah anda yakin ingin menghapus riwayat
                                                                tanggal "{{ $rajal->tgl_masuk}}" dengan keluhan "{{ $rajal->keluhan }}" ?</p> 
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <form action="{{ route('destroy_rpu', ['id' => $rajal -> id, 'pasien_id' => $rajal -> pasien_id]) }}"
                                                        method="post" class="d-inline">
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

                                        <!-- Modal Detail-->
                                        <div class="modal fade" id="staticBackdrop{{ $rajal -> id }}"
                                            data-backdrop="static" tabindex="-1" role="dialog"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                <div class="modal-content ">
                                                    <div class="modal-header bg-info">
                                                        <h3 class="modal-title">Detail Riwayat Ruang Gawat Darurat</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5>Tanggal Datang :
                                                                                <strong>{{ $rajal -> tgl_masuk }}</strong>
                                                                            </h5>
                                                                            <h5>Poli :
                                                                                <strong>{{ $rajal->poli->nama}}</strong>
                                                                            </h5>
                                                                            <h5>Jaminan :
                                                                                <strong>{{ $rajal -> jaminan ?? "-"}}</strong>
                                                                            </h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Keluhan :
                                                                                        </h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> keluhan ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Kode ICD-X :
                                                                                        </h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> kode ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Tekanan darah
                                                                                            :</h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> tekanan ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Laboratorium :
                                                                                        </h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> lab ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Berat Badan :
                                                                                        </h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> bb ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Rokok
                                                                                            :</h6>
                                                                                        <strong
                                                                                            class="col-12">{{ ($rajal->rokok == 0) ? 'Ya' : 'Tidak' ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Tinggi Badan
                                                                                            :</h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> tb ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Perawat pertama yang bertanggung jawab
                                                                                            :</h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> user1 ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Lingkar Perut
                                                                                            :</h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> lp ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Perawat kedua yang bertanggung jawab
                                                                                            :</h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> user2 ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Diagnosa :
                                                                                        </h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> diagnosa ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Perawat ketiga yang bertanggung jawab :
                                                                                        </h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> user3 ?? "-"}}
                                                                                        </strong>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <h6 class="col-12">Terapi :</h6>
                                                                                        <strong
                                                                                            class="col-12">{{ $rajal -> terapi ?? "-"}}
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
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                        Showing {{ $rajals->firstItem() }} to {{ $rajals->lastItem() }} of {{ $rajals->total() }} entries <br>
                        Pages : {{ $rajals->currentPage() }} <br>
                        Data Per Page : {{ $rajals->perPage() }} <br>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="d-flex justify-content-end dataTables_paginate paging_simple_numbers"
                        id="example2_paginate">
                        <ul class="pagination">
                            {{ $rajals->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->

</section>
@endsection
