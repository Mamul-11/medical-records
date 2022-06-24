@extends('layout.main')

@section('title','Data Pasien')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Data Pasien</li>
            <li class="breadcrumb-item active">Tambah Pasien</li>
        </ol>
@endsection

@section('content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Tambah Pasien</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool btn-default btn-sm"><a href="{{ url()->previous() }}">back</a></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="/pasiens/store" method="post"  class="mb-5">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="no_rm">No. RM</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('no_rm') is-invalid @enderror" id="no_rm" readonly name="no_rm" value=" {{ $no_rm }}">
                                    <div class="text-danger">
                                        @error('no_rm')
                                            {{ $message }}
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}" placeholder="Masukan nomer NIK pasien" autofocus required>
                                    <div class="text-danger">
                                        @error('nik')
                                            {{ $message }}
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukan nama lengkap pasien" required>
                                <div class="text-danger">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <div class="input-group">
                                    <input type="date" class="form-control form-control-border border-width-2 @error('tgl_lahir') is-invalid @enderror" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask inputmode="numeric" name="tgl_lahir"
                                        id="tgl_lahir" value="{{ old('tgl_lahir') }}" required>
                                </div>
                                <div class="text-danger">
                                    @error('tgl_lahir')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kelamin">Jenis Kelamin</label>
                                <select class="form-control form-control-border border-width-2 @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin" required>
                                    <option value="">Select your option</option>
                                    <option value="Laki-laki"{{ old('kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan"{{ old('kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                <div class="text-danger">
                                    @error('agama')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <select class="form-control form-control-border border-width-2 @error('agama') is-invalid @enderror" id="agama" name="agama" required>
                                    <option value="">Select your option</option>
                                    <option value="Islam"{{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen Protestan"{{ old('agama') == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan</option>
                                    <option value="Kristen Katolik"{{ old('agama') == 'Kristen Katolik' ? 'selected' : '' }}>Kristen Katolik</option>
                                    <option value="Hindu"{{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Budha"{{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                                    <option value="Khonghucu"{{ old('agama') == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                                    <option value="Lainnya"{{ old('agama') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option> 
                                </select>
                                <div class="text-danger">
                                    @error('agama')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control form-control-border border-width-2  @error('alamat') is-invalid @enderror" rows="3" placeholder="Masukan alamat pasien" id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
                                <div class="text-danger">
                                    @error('alamat')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="no_kis">No. KIS/BPJS</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('no_kis') is-invalid @enderror" placeholder="Masukan nomer bpjs/kis pasien" id="no_kis" name="no_kis" value="{{ old('no_kis') }}">
                                <div class="text-danger">
                                    @error('no_kis')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status_kis">Jenis BPJS Kesehatan</label>
                                <select class="form-control form-control-border border-width-2 @error('status_kis') is-invalid @enderror" id="status_kis" name="status_kis">
                                    <option value="">Select your option</option>
                                    <option value="PBI"{{ old('status_kis') == 'PBI' ? 'selected' : '' }}>PBI</option>
                                    <option value="Non-PBI"{{ old('status_kis') == 'Non-PBI' ? 'selected' : '' }}>Non-PBI</option>
                                </select>
                                <div class="text-danger">
                                    @error('status_kis')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="faskes">Faskes</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('faskes') is-invalid @enderror" id="faskes" name="faskes" placeholder="Masukan faskes lainya" value="{{ old('faskes') }}">
                                <div class="text-danger">
                                    @error('faskes')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan Terakhir</label>
                                <select class="form-control form-control-border border-width-2 @error('pendidikan') is-invalid @enderror" name="pendidikan" id="pendidikan" value="{{ old('pendidikan') }}">
                                    <option value="">Select your option</option>
                                    <option value="SD"{{ old('pendidikan') == 'SD' ? 'selected' : '' }}>SD</option>
                                    <option value="SMP"{{ old('pendidikan') == 'SMP' ? 'selected' : '' }}>SMP</option>
                                    <option value="SMA"{{ old('pendidikan') == 'SMA' ? 'selected' : '' }}>SMA</option>
                                    <option value="D1"{{ old('pendidikan') == 'D1' ? 'selected' : '' }}>D1</option>
                                    <option value="D3"{{ old('pendidikan') == 'D3' ? 'selected' : '' }}>D3</option>
                                    <option value="S1/D4"{{ old('pendidikan') == 'S1/D4' ? 'selected' : '' }}>S1/D4</option>
                                    <option value="S2"{{ old('pendidikan') == 'S2' ? 'selected' : '' }}>S2</option>
                                    <option value="S3"{{ old('pendidikan') == 'S3' ? 'selected' : '' }}>S3</option>

                                </select>
                                <div class="text-danger">
                                    @error('pendidikan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" placeholder="Masukan pekerjaan pasien" value="{{ old('pekerjaan') }}">
                                <div class="text-danger">
                                    @error('pekerjaan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kk">Penanggung Jawab (KK)</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('kk') is-invalid @enderror" id="kk" name="kk" placeholder="Masukan nama penanggung jawab pasien" value="{{ old('kk') }}">
                                <div class="text-danger">
                                    @error('kk')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telp">No Telp</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('telp') is-invalid @enderror" id="telp" name="telp" placeholder="Masukan nomer telpon pasien" value="{{ old('telp') }}">
                                <div class="text-danger">
                                    @error('telp')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h4>Riwayat Penyakit sebelumnya</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="penyakit_sendiri">Penyakit yang diderita sendiri</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('penyakit_sendiri') is-invalid @enderror" id="penyakit_sendiri" name="penyakit_sendiri" value="{{ old('penyakit_sendiri') }}"
                                    placeholder="Masukan riwayat penyakit">
                                    @error('penyakit_sendiri')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="penyakit_keluarga">Penyakit yang diderita keturunan</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('penyakit_keluarga') is-invalid @enderror" id="penyakit_keluarga" name="penyakit_keluarga" value="{{ old('penyakit_keluarga') }}"
                                    placeholder="Masukan riwayat penyakit">
                                    @error('penyakit_keluarga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="alergi">Alergi</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('alergi') is-invalid @enderror" id="alergi" name="alergi" value="{{ old('alergi') }}"
                                    placeholder="Masukan nomer rekam medis">
                                    @error('alergi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="pengobatan">Riwayat pengobatannya</label>
                                <input type="text" class="form-control form-control-border border-width-2 @error('pengobatan') is-invalid @enderror" id="pengobatan" name="pengobatan" value="{{ old('pengobatan') }}"
                                    placeholder="Masukan nomer rekam medis">
                                    @error('pengobatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success swalDefaultSuccess">
                        Buat data baru pasien
                    </button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</section>
@endsection
