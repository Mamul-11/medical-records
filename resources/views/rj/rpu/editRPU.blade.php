@extends('layout.main')

@section('title','Rawat Jalan RPU')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Rawat Jalan RPU</li>
            <li class="breadcrumb-item active">Edit Riwayat Rawat Jalan RPU</li>
        </ol>
@endsection

@section('content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Edit Riwayat Rawat Jalan RPU</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('update_rpu', ['id' => $rajal -> id, 'pasien_id' => $rajal -> pasien_id]) }}" method="post" class="mb-5">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tgl_masuk">Tanggal masuk</label>
                                <div class="input-group">
                                    <input type="date" class="form-control form-control-border border-width-2 @error('tgl_masuk') is-invalid @enderror" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask inputmode="numeric" name="tgl_masuk"
                                        id="tgl_masuk" value="{{ old('tgl_masuk', $rajal->tgl_masuk) }}">
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
                                    value="{{ old('jaminan', $rajal->jaminan) }}" autofocus>
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
                                    value="{{ old('tekanan', $rajal->tekanan) }}">
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
                                    id="bb" name="bb" value="{{ old('bb', $rajal->bb) }}" placeholder="Masukan berat badan pasien">
                                <div class="text-danger">
                                    @error('bb')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tb">Tinggi badan pasien</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('tb') is-invalid @enderror"
                                    id="tb" name="tb" value="{{ old('tb', $rajal->tb) }}" placeholder="Masukan tinggi badan pasien">
                                <div class="text-danger">
                                    @error('tb')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lp">Lingkar perut pasien</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('lp') is-invalid @enderror"
                                    id="lp" name="lp" value="{{ old('lp', $rajal->lp) }}" placeholder="Masukan lingkar perut pasien">
                                <div class="text-danger">
                                    @error('lp')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keluhan">Keluhan yang dirasakan pasien</label>
                                <textarea
                                    class="form-control form-control-border border-width-2  @error('keluhan') is-invalid @enderror"
                                    rows="3" placeholder="Masukan keluhan pasien" id="keluhan"
                                    name="keluhan">{{ old('keluhan', $rajal->keluhan) }}</textarea>
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
                                name="diagnosa" required>{{ old('diagnosa', $rajal->diagnosa) }}</textarea>
                                <div class="text-danger">
                                    @error('diagnosa')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="terapi">Terapi untuk pasien</label>
                                <textarea
                                class="form-control form-control-border border-width-2  @error('terapi') is-invalid @enderror"
                                rows="3" placeholder="Masukan terapi pasien" id="terapi"
                                name="terapi" required>{{ old('terapi', $rajal->terapi) }}</textarea>
                                <div class="text-danger">
                                    @error('terapi')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kode">Kode ICD-X</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('kode') is-invalid @enderror"
                                    id="kode" name="kode" value="{{ old('kode', $rajal->kode) }}" placeholder="Masukan kode icd-x">
                                <div class="text-danger">
                                    @error('kode')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lab">Hasil lab pasien</label>
                                <textarea
                                class="form-control form-control-border border-width-2  @error('lab') is-invalid @enderror"
                                rows="3" placeholder="Masukan hasil lab pasien" id="lab"
                                name="lab">{{ old('lab') }}</textarea>
                                <div class="text-danger">
                                    @error('lab', $rajal->lab)
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rokok">Status Rokok</label>
                                <select
                                    class="form-control form-control-border border-width-2 @error('rokok') is-invalid @enderror"
                                    name="rokok" id="rokok">
                                    <option value="">Select your option</option>
                                    <option value="Ya" {{ old('rokok', $rajal->rokok) == 'Ya' ? 'selected' : '' }}>Ya</option>
                                    <option value="Tidak" {{ old('rokok', $rajal->rokok) == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                </select>
                                <div class="text-danger">
                                    @error('rokok')
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
                                        @if(old('user1', $rajal->user1) == $user->nama)
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
                                        @if(old('user2', $rajal->user2) == $user->nama)
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
                                    @if(old('user3', $rajal->user3) == $user->nama)
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
                        Update Riwayat RPU Pasien
                    </button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</section>
@endsection


