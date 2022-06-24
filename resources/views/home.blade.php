@extends('layout.main')

@section('title','Home')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
        </ol>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-success elevation-1"><i
                            class="nav-icon fas fa-user-injured"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Pasien</span>
                        <span class="info-box-number">{{ $pasiens->count(); }} Orang</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-cyan elevation-1"><i class="nav-icon fas fa-wheelchair"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Rawat Jalan</span>
                        <span class="info-box-number">{{ $rajals->count() }} Riwayat</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-teal elevation-1"><i class="nav-icon fas fa-bed"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Rawat Inap</span>
                        <span class="info-box-number">{{ $ranaps->count(); }} Riwayat</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="nav-icon fas fa-first-aid"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Rawat Gawat Darurat </span>
                        <span class="info-box-number">{{ $ragads->count(); }} Riwayat</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Kunjungan Pasien perBulan</h3>
                    </div>
                    <div class="card-body">
                        <span class="d-flex flex-column text-right">
                            <span class="text-muted">Pada Tahun <strong>{{now()->format('Y') }}</strong></span>
                        </span>
                        <canvas class="" id="myChart" width="auto" height="180px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://www.jsdelivr.com/package/npm/chart.js?path=dist"></script>
<script type="text/javascript">
    const ctx = document.getElementById('myChart');
    const janrajal = {{ $januarirajal->count() }};
    const febrajal = {{ $febuarirajal->count() }};
    const marrajal = {{ $maretrajal->count() }};
    const aprrajal = {{ $aprilrajal->count() }};
    const meirajal = {{ $meirajal->count() }};
    const junirajal = {{ $junirajal->count() }};
    const julirajal = {{ $julirajal->count() }};
    const agusrajal = {{ $agustusrajal->count() }};
    const septrajal = {{ $septemberrajal->count() }};
    const oktrajal = {{ $oktoberrajal->count() }};
    const novrajal = {{ $novemberrajal->count() }};
    const desrajal = {{ $desemberrajal->count() }};

    const janRanap = {{ $januariRanap->count() }};
    const febRanap = {{ $febuariRanap->count() }};
    const marRanap = {{ $maretRanap->count() }};
    const aprRanap = {{ $aprilRanap->count() }};
    const meiRanap = {{ $meiRanap->count() }};
    const juniRanap = {{ $juniRanap->count() }};
    const juliRanap = {{ $juliRanap->count() }};
    const agusRanap = {{ $agustusRanap->count() }};
    const septRanap = {{ $septemberRanap->count() }};
    const oktRanap = {{ $oktoberRanap->count() }};
    const novRanap = {{ $novemberRanap->count() }};
    const desRanap = {{ $desemberRanap->count() }};

    const janRagad = {{ $januariRagad->count() }};
    const febRagad = {{ $febuariRagad->count() }};
    const marRagad = {{ $maretRagad->count() }};
    const aprRagad = {{ $aprilRagad->count() }};
    const meiRagad = {{ $meiRagad->count() }};
    const juniRagad = {{ $juniRagad->count() }};
    const juliRagad = {{ $juliRagad->count() }};
    const agusRagad = {{ $agustusRagad->count() }};
    const septRagad = {{ $septemberRagad->count() }};
    const oktRagad = {{ $oktoberRagad->count() }};
    const novRagad = {{ $novemberRagad->count() }};
    const desRagad = {{ $desemberRagad->count() }};

    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                'Oktober', 'November', 'Desember'
            ],
            datasets: [{
                    label: 'Rawat Jalan',
                    backgroundColor: '#3c8dbc',
                    borderColor: '#3c8dbc',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [ janrajal, febrajal, marrajal, aprrajal, meirajal, junirajal, julirajal, agusrajal, septrajal, oktrajal, novrajal, desrajal ],
                    borderWidth: 1
                }, {
                    label: 'Rawat Inap',
                    backgroundColor: '#39cccc',
                    borderColor: '#39cccc',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [ janRanap, febRanap, marRanap, aprRanap,meiRanap, juniRanap, juliRanap, agusRanap, septRanap, oktRanap, novRanap, desRanap],
                    borderWidth: 1,
                }, {
                    label: 'Ruang Gawat Darurat',
                    backgroundColor: '#dc3545',
                    borderColor: '#dc3545',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [janRagad, febRagad, marRagad, aprRagad,meiRagad, juniRagad, juliRagad, agusRagad, septRagad, oktRagad, novRagad, desRagad],
                    borderWidth: 1
                }

            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

</script>
@endsection
