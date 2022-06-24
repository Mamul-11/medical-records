@extends('layout.main')

@section('title','Rawat Jalan MTBS')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Rawat Jalan MTBS</li>
            <li class="breadcrumb-item active">Export Riwayat Rawat Jalan MTBS</li>
        </ol>
@endsection

@section('content')
<section class="content">
    <!-- Default box -->
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Export Riwayat Rawat Jalan MTBS</h3>
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
                        <form action="{{ route('show_mtbs') }}" method="GET">
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
                        <div class="card-body table-responsive p-0" style="width: auto;">
                            <table id="example1" class="table table-head-fixed table-hover text-nowrap table-striped table-bordered">
                                <thead class="text-nowrap">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pasien</th>
                                        <th>Nomor RM</th>
                                        <th>Tanggal lahir</th>
                                        <th>Poli</th>
                                        <th>Tanggal masuk</th>
                                        <th>Jaminan</th>
                                        <th>Tekanan</th>
                                        <th>Berat badan</th>
                                        <th>Tinggi badan</th>
                                        <th>Lingkar perut</th>
                                        <th>Keluhan</th>
                                        <th>Diagnosa</th>
                                        <th>Terapi</th>
                                        <th>Kode ICD-X</th>
                                        <th>lab</th>
                                        <th>Rokok</th>
                                        <th>Perawat yang bertanggung jawab</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: justify;">
                                    @php $no = 1; @endphp
                                    @foreach ($rajals as $rajal)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $rajal->pasien->nama}}</td>
                                        <td>{{ $rajal->pasien->no_rm }}</td>
                                        <td>{{ $rajal->pasien->tgl_lahir }}</td>
                                        <td>{{ $rajal->poli->nama }}</td>
                                        <td>{{ $rajal->tgl_masuk }}</td>
                                        <td>{{ $rajal->jaminan }}</td>
                                        <td>{{ $rajal->tekanan }}</td>
                                        <td>{{ $rajal->bb }}</td>
                                        <td>{{ $rajal->tb }}</td>
                                        <td>{{ $rajal->lp }}</td>
                                        <td>{{ $rajal->keluhan }}</td>
                                        <td>{{ $rajal->diagnosa }}</td>
                                        <td>{{ $rajal->terapi }}</td>
                                        <td>{{ $rajal->kode }}</td>
                                        <td>{{ $rajal->lab}}</td>
                                        <td>{{ $rajal->rokok}}</td>
                                        <td>{{ $rajal->user1 ?? "-"}}, {{ $rajal->user2 ?? "-"}}, {{ $rajal->user3 ?? "-"}}</td>
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

</section>

<!-- DataTables  & Plugins -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": true, "paging":false, "searching": false, "info": false, "ordering": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        });
</script>



@endsection
