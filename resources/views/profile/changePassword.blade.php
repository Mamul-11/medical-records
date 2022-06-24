@extends('layout.main')

@section('title','Change Password')
@section('body-title')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
    <li class="breadcrumb-item active">Change Password</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Change Password</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Peringatan!</h5>
                {{ session('success') }}
            </div>
            @endif
            @if (session()->has('warning'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Peringatan!</h5>
                {{ session('warning') }}
            </div>
            @endif
            @if (session()->has('danger'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Peringatan!</h5>
                {{ session('danger') }}
            </div>
            @endif
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="/profile/{{ auth()->user()->nik }}/updatePassword" class="mb-5"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="oldpassword" class="form-label">Masukan Password Lama</label>
                                <input type="password"
                                    class="form-control form-control-border border-width-2 @error('oldpassword') is-invalid @enderror"
                                    name="oldpassword" id="oldpassword" placeholder="Masukan password lama">
                                <div class="text-danger">
                                    @error('oldpassword')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="newpassword" class="form-label">Password Baru</label>
                                <input type="password"
                                    class="form-control form-control-border border-width-2 @error('newpassword') is-invalid @enderror"
                                    name="newpassword" id="newpassword" placeholder="Masukan password baru">
                                <div class="text-danger">
                                    @error('newpassword')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password"
                                    class="form-control form-control-border border-width-2 @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" id="password_confirmation"
                                    placeholder="Masukan kembali password" value="{{ old('password_confirmation') }}">
                                <div class="text-danger">
                                    @error('password_confirmation')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>

</section>
@endsection
