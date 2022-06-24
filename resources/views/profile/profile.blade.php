@extends('layout.main')

@section('title','My Profile')
@section('body-title')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
    <li class="breadcrumb-item active">My Profile</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        @if (auth()->user()->image)
                        <img class="profile-user-img img-fluid img-circle" style="width:500;"
                            src="{{ asset('storage/' .auth()->user()->image) }}" alt="{{ auth()->user()->image }}">
                        @else
                        <img class="profile-user-img img-fluid img-circle"
                            src="{{ asset('template') }}/dist/img/user-medic.png" alt="User profile picture">
                        @endif
                    </div>

                    <h2 class="profile-username text-center">{{ (auth()->user()->nama) }}</h2>

                    <p class="text-muted text-center">
                        {{ (auth()->user()->level == 0) ? 'Admin Rekam Medis' : 'Perawat' }}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <h6>NIK</h6>
                            <strong>{{ auth()->user()->nik }}</strong>
                        </li>
                        <li class="list-group-item">
                            <h6>Email</h6>
                            <strong>{{ auth()->user()->email }}</strong>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Ubah
                                Biodata</a>
                        </li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-check"></i> Peringatan!</h5>
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form method="post" action="{{ $user->nik }}/update" class="mb-5"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="nama" class="form-label">Nama Lengkap</label>
                                                <input type="text"
                                                    class="form-control form-control-border border-width-2 @error('nama') is-invalid @enderror"
                                                    name="nama" id="nama" placeholder="Masukan nama lengkap Users"
                                                    value="{{ old('nama', auth()->user()->nama) }}">
                                                <div class="text-danger">
                                                    @error('nama')
                                                    {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text"
                                                    class="form-control form-control-border border-width-2 @error('nik') is-invalid @enderror"
                                                    name="nik" id="nik" placeholder="Masukan NIK users"
                                                    value="{{ old('nik', auth()->user()->nik) }}">
                                                <div class="text-danger">
                                                    @error('nik')
                                                    {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text"
                                                    class="form-control form-control-border border-width-2 @error('email') is-invalid @enderror"
                                                    name="email" id="email" placeholder="Masukan NIK users"
                                                    value="{{ old('email', auth()->user()->email) }}">
                                                <div class="text-danger">
                                                    @error('email')
                                                    {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="image" class="form-label">Foto User</label>
                                                <input type="hidden" name="oldImage" value="{{ $user->image }}">

                                                @if ($user->image)
                                                <img src="{{ asset('storage/' . $user->image) }}"
                                                    class="img-preview img-fluid mb-3 col-sm-5 d-block"
                                                    style="width: 250px">
                                                @else
                                                <img class="img-preview img-fluid mb-3 col-sm-5" style="width: 250px">
                                                @endif
                                                <div class="input-group">
                                                    <input class="custom-file @error('image') is-invalid @enderror"
                                                        type="file" id="image" name="image" onchange="previewImage()">
                                                </div>
                                                <div class="text-danger">
                                                    @error('image')
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
                        <!-- /.tab-pane -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.tab-pane -->
    </div>
</section>
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });

</script>
@endsection
