@extends('layout.main')

@section('title','Data User')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
            <li class="breadcrumb-item active">Tambah Data User</li>
        </ol>
@endsection

@section('content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Tambah Data User</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" action="/users/store" class="mb-5" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('nama') is-invalid @enderror"
                                    name="nama" id="nama" placeholder="Masukan nama lengkap Users" autofocus
                                    value="{{ old('nama') }}">
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
                                    name="nik" id="nik" placeholder="Masukan NIK users" value="{{ old('nik') }}">
                                <div class="text-danger">
                                    @error('nik')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" class="form-label">
                                <label for="level">Jenis User</label>
                                <select
                                    class="form-control form-control-border border-width-2 @error('level') is-invalid @enderror"
                                    id="level" name="level">
                                    <option value="0" {{ old('level') == 0 ? 'selected' : '' }}>
                                        Admin Rekam Medis
                                    </option>
                                    <option value="1" {{ old('level') == 1 ? 'selected' : '' }}>Perawat
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Masukan NIK users" value="{{ old('email') }}">
                                <div class="text-danger">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password"
                                    class="form-control form-control-border border-width-2 @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="Masukan password users">
                                <div class="text-danger">
                                    @error('no_rm')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="form-label">Foto User</label>
                                <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5" style="width: 250px">
                                <div class="input-group">
                                    <input class="custom-file @error('image') is-invalid @enderror" type="file"
                                        id="image" name="image" onchange="previewImage()">
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
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
