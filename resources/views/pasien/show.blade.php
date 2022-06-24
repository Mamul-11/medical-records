@extends('layout.main')

@section('title','Data Pasien')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Data Pasien</li>
            <li class="breadcrumb-item active">Export Data Pasien</li>
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
            <h3 class="card-title">Export Data Pasien</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool btn-default btn-sm"><a href="{{ url()->previous() }}">back</a></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0" style="width: auto ; heigth: auto">
                            <table id="example1" class="table table-head-fixed table-hover text-nowrap table-striped table-bordered">
                                <thead class="text-nowrap">
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nomor rekam medis</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>BPJS</th>
                                        <th>Faskes</th>
                                        <th>Pendidikan terakhir</th>
                                        <th>Pekerjaan</th>
                                        <th>Penanggung jawab (KK)</th>
                                        <th>Nomor telepon</th>
                                        <th>Penyakit yang diderita sendiri</th>
                                        <th>Penyakit yang diderita keturunan</th>
                                        <th>Alergi</th>
                                        <th>Riwayat pengobatan</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: justify;">
                                    @php $no = 1; @endphp
                                    @foreach ($pasiens as $pasien)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $pasien->nik}}</td>
                                        <td>{{ $pasien->no_rm}}</td>
                                        <td>{{ $pasien->nama }}</td>
                                        <td>{{ $pasien->tgl_lahir }}</td>
                                        <td>{{ $pasien->kelamin }}</td>
                                        <td>{{ $pasien->agama }}</td>
                                        <td>{{ $pasien->alamat }}</td>
                                        <td>{{ $pasien->no_kis ?? "-"}}/{{ $pasien->status_kis ?? "-"}}</td>
                                        <td>{{ $pasien->faskes }}</td>
                                        <td>{{ $pasien->pendidikan}}</td>
                                        <td>{{ $pasien->pekerjaan}}</td>
                                        <td>{{ $pasien->kk}}</td>
                                        <td>{{ $pasien->telp}}</td>
                                        <td>{{ $pasien->penyakit_sendiri}}</td>
                                        <td>{{ $pasien->penyakit_keluarga}}</td>
                                        <td>{{ $pasien->alergi}}</td>
                                        <td>{{ $pasien->pengobatan}}</td>
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
    </div>
    <!-- /.card -->
<!-- DataTables  & Plugins -->

</section>




@endsection
