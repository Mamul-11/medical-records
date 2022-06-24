@extends('layout.main')

@section('title','Ruang Gawat Darurat')
@section('body-title')
<div class="row mb-2">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Ruang Gawat Darurat</li>
            <li class="breadcrumb-item active">Tambah Riwayat Ruang Gawat Darurat</li>
        </ol>
@endsection

@section('content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Tambah Riwayat Ruang Gawat Darurat</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool btn-default btn-sm"><a href="{{ url()->previous() }}">back</a></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('store_ragad', $no_rm) }}" method="post" class="mb-5">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tgl_masuk">Tanggal Masuk</label>
                                <div class="input-group">
                                    <input type="date" class="form-control form-control-border border-width-2 @error('tgl_masuk') is-invalid @enderror" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask inputmode="numeric" name="tgl_masuk"
                                        id="tgl_masuk" value="{{ old('tgl_masuk') }}" autofocus required>
                                </div>
                                <div class="text-danger">
                                    @error('tgl_masuk')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jaminan">Jaminan pasien</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('jaminan') is-invalid @enderror"
                                    id="jaminan" name="jaminan" placeholder="Masukan jaminan darah pasien"
                                    value="{{ old('jaminan') }}" required>
                                <div class="text-danger">
                                    @error('jaminan')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tekanan">Tekanan darah pasien</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('tekanan') is-invalid @enderror"
                                    id="tekanan" name="tekanan" placeholder="Masukan tekanan darah pasien"
                                    value="{{ old('tekanan') }}">
                                <div class="text-danger">
                                    @error('tekanan')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bb">Berat badan pasien</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('bb') is-invalid @enderror"
                                    id="bb" name="bb" value="{{ old('bb') }}" placeholder="Masukan berat badan pasien">
                                <div class="text-danger">
                                    @error('bb')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keluhan">Keluhan yang dirasakan pasien</label>
                                <textarea
                                    class="form-control form-control-border border-width-2  @error('keluhan') is-invalid @enderror"
                                    rows="3" placeholder="Masukan keluhan pasien" id="keluhan"
                                    name="keluhan" required>{{ old('keluhan') }}</textarea>
                                <div class="text-danger">
                                    @error('keluhan')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="diagnosa">Diagnosa pasien</label>
                                <textarea
                                class="form-control form-control-border border-width-2  @error('diagnosa') is-invalid @enderror"
                                rows="3" placeholder="Masukan diagnosa pasien" id="diagnosa"
                                name="diagnosa" >{{ old('diagnosa') }}</textarea>
                                <div class="text-danger">
                                    @error('diagnosa')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="terapi">Terapi untuk pasien</label>
                                <textarea
                                class="form-control form-control-border border-width-2  @error('terapi') is-invalid @enderror"
                                rows="3" placeholder="Masukan terapi pasien" id="terapi"
                                name="terapi">{{ old('terapi') }}</textarea>
                                <div class="text-danger">
                                    @error('terapi')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tindakan">Tindakan untuk pasien</label>
                                <select
                                    class="form-control form-control-border border-width-2 @error('tindakan') is-invalid @enderror"
                                    id="tindakan" name="tindakan" required>
                                    <option value="">Select your option</option>
                                    <option value="Ya" {{ old('tindakan') == 'Ya' ? 'selected' : '' }}>Ya</option>
                                    <option value="Tidak" {{ old('tindakan') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                </select>
                                <div class="text-danger">
                                    @error('tindakan')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ic">Informed consent</label>
                                <select
                                    class="form-control form-control-border border-width-2 @error('ic') is-invalid @enderror"
                                    name="ic" id="ic" required>
                                    <option value="">Select your option</option>
                                    <option value="Ya" {{ old('ic') == 'Ya' ? 'selected' : '' }}>Ya</option>
                                    <option value="Tidak" {{ old('ic') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                </select>
                                <div class="text-danger">
                                    @error('ic')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rujuk">Tindakan rujukan</label>
                                <select
                                    class="form-control form-control-border border-width-2 @error('rujuk') is-invalid @enderror"
                                    name="rujuk" id="rujuk" required>
                                    <option value="">Select your option</option>
                                    <option value="Ya" {{ old('rujuk') == 'Ya' ? 'selected' : '' }}>Ya</option>
                                    <option value="Tidak" {{ old('rujuk') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                </select>
                                <div class="text-danger">
                                    @error('rujuk')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rs_rujuk">Rumah sakit rujukan</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('rs_rujuk') is-invalid @enderror"
                                    id="rs_rujuk" name="rs_rujuk" placeholder="Masukan rumah sakit rujukan pasien"
                                    value="{{ old('rs_rujuk') }}">
                                <div class="text-danger">
                                    @error('rs_rujuk')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="monitoring_rujuk">Monitoring rujukan pasien</label>
                                <textarea
                                    class="form-control form-control-border border-width-2  @error('monitoring_rujuk') is-invalid @enderror"
                                    rows="3" placeholder="Masukan perkembangan pasien" id="monitoring_rujuk"
                                    name="monitoring_rujuk">{{ old('monitoring_rujuk') }}</textarea>
                                <div class="text-danger">
                                    @error('monitoring_rujuk')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class=" form-group">
                                <div class="form-group">
                                    <label for="user1">Perawat pertama yang bertanggung jawab</label>
                                    <select class="form-control select2bs4 select-success select2-hidden-accessible"
                                        style="width: 100%;" tabindex="-1" aria-hidden="true" name="user1" id="user1"
                                        required>
                                        <option value="">Select your option</option>
                                        @foreach ($users as $user)
                                        @if(old('user1') == $user->nama)
                                        <option value="{{ $user->nama }}" selected>{{ $user->nama }}</option>
                                        @else
                                        <option value="{{ $user->nama }}">{{ $user->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class=" form-group">
                                <div class="form-group">
                                    <label for="user2">Perawat kedua yang bertanggung jawab</label>
                                    <select class="form-control select2bs4 select-success select2-hidden-accessible"
                                        style="width: 100%;" tabindex="-1" aria-hidden="true" name="user2" id="user2">
                                        <option value="">Select your option</option>
                                        @foreach ($users as $user)
                                        @if(old('user2') == $user->nama)
                                        <option value="{{ $user->nama }}" selected>{{ $user->nama }}</option>
                                        @else
                                        <option value="{{ $user->nama }}">{{ $user->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user3">Perawat ketiga yang bertanggung jawab</label>
                                <select class="form-control select2bs4 select-success select2-hidden-accessible"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true" name="user3" id="user3">
                                    <option value="">Select your option</option>
                                    @foreach ($users as $user)
                                    @if(old('user3') == $user->nama)
                                    <option value="{{ $user->nama }}" selected>{{ $user->nama }}</option>
                                    @else
                                    <option value="{{ $user->nama }}">{{ $user->nama }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success swalDefaultSuccess">
                        Buat riwayat baru pasien
                    </button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</section>
@endsection
