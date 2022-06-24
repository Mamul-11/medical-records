@extends('layout.main')

@section('title', 'Ruang Gawat Darurat')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Ruang Gawat Darurat</li>
            <li class="breadcrumb-item active">Export Riwayat Ruang Gawat Darurat</li>
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
            <h3 class="card-title">Export Riwayat Ruang Gawat Darurat</h3>
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
                        <form action="{{ route('show_ragad') }}" method="GET">
                            <div class="card-header">
                                    <h5 class="card-title">Masukan tanggal masuk</h5>
                                </div>
                            <div class="input-group mb-5">
                                <input type="date" class="form-control" name="start_date" value="{{ request('start_date') }}">
                                <input type="date" class="form-control" name="end_date" value="{{ request('end_date') }}">
                                {{-- <button class="btn btn-primary btn-sm" type="submit">GET</button> --}}
                                <button type="submit" class="btn btn-primary btn-xs" style="width: 50px; heigth:50">cari</button>
                            </div>
                        </form>
                        <hr>
                        <div class="card-body table-responsive p-0" style="width: auto ; heigth: auto">
                            <table id="example1" class="table table-head-fixed table-hover text-nowrap table-striped table-bordered">
                                <thead class="text-nowrap">
                                    <tr>
                                        <th></th>
                                        <th>No</th>
                                        <th>Nama Pasien</th>
                                        <th>Nomor RM</th>
                                        <th>Tanggal lahir</th>
                                        <th>Tanggal masuk</th>
                                        <th>Jaminan</th>
                                        <th>Tekanan</th>
                                        <th>Berat Badan</th>
                                        <th>Keluhan</th>
                                        <th>Diagnosa</th>
                                        <th>Terapi</th>
                                        <th>Tindakan untuk pasien</th>
                                        <th>Kode IC-X</th>
                                        <th>Tindakan rujukan</th>
                                        <th>Rumah sakit rujukan</th>
                                        <th>Monitoring rujukan</th>
                                        <th>Perawat yang bertanggung jawab</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: justify;">
                                    @php $no = 1; @endphp
                                    @foreach ($ragads as $ragad)
                                    <tr>
                                        <td></td>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $ragad->pasien->nama}}</td>
                                        <td>{{ $ragad->pasien->no_rm }}</td>
                                        <td>{{ $ragad->pasien->tgl_lahir }}</td>
                                        <td>{{ $ragad->tgl_masuk }}</td>
                                        <td>{{ $ragad->jaminan }}</td>
                                        <td>{{ $ragad->tekanan }}</td>
                                        <td>{{ $ragad->bb }}</td>
                                        <td>{{ $ragad->keluhan }}</td>
                                        <td>{{ $ragad->diagnosa }}</td>
                                        <td>{{ $ragad->terapi }}</td>
                                        <td>{{ $ragad->tindakan }}</td>
                                        <td>{{ $ragad->ic}}</td>
                                        <td>{{ $ragad->rujuk}}</td>
                                        <td>{{ $ragad->rs_rujuk}}</td>
                                        <td>{{ $ragad->monitoring_rujuk}}</td>
                                        <td>{{ $ragad->user1 ?? "-"}}, {{ $ragad->user2 ?? "-"}}, {{ $ragad->user3 ?? "-"}}</td>
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
