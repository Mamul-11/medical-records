@extends('layout.main')

@section('title','403 Forbidden')

@section('content')
<section class="content">
    <div class="error-page">
        <h2 class="headline text-warning"> 403</h2>

        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page Forbidden.</h3>

            <p>
                Kami tidak dapat membuka halaman yang Anda cari.
                Sementara itu, Anda mungkin bisa <a href="/">kembali ke dashboard</a>
            </p>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
</section>
@endsection
