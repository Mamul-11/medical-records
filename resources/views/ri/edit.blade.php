@extends('layout.main')

@section('title','Rawat Inap')
@section('body-title')
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/"><i class="nav-icon fas fa-home"></i></i>&nbsp;Home</a></li>
            <li class="breadcrumb-item active">Rawat Inap</li>
            <li class="breadcrumb-item active">Edit Riwayat Rawat Inap</li>
        </ol>
@endsection

@section('content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Edit Riwayat Rawat Inap</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool btn-default btn-sm"><a href="{{ url()->previous() }}">back</a></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('update_ranap', ['id' => $ranap -> id, 'pasien_id' => $ranap -> pasien_id]) }}" method="post" class="mb-5">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tgl_masuk">Tanggal masuk</label>
                                <div class="input-group">
                                    <input type="date" class="form-control form-control-border border-width-2 @error('tgl_masuk') is-invalid @enderror" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask inputmode="numeric" name="tgl_masuk"
                                        id="tgl_masuk" value="{{ old('tgl_masuk', $ranap->tgl_masuk) }}">
                                </div>
                                <div class="text-danger">
                                    @error('tgl_masuk')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tgl_keluar">Tanggal Keluar</label>
                                <div class="input-group">
                                    <input type="date" class="form-control form-control-border border-width-2 @error('tgl_keluar') is-invalid @enderror" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask inputmode="numeric" name="tgl_keluar"
                                        id="tgl_keluar" value="{{ old('tgl_keluar',$ranap->tgl_keluar) }}">
                                </div>
                                <div class="text-danger">
                                    @error('tgl_keluar')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jaminan">Jaminan pasien</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('jaminan') is-invalid @enderror"
                                    id="jaminan" name="jaminan" placeholder="Masukan jaminan darah pasien"
                                    value="{{ old('jaminan', $ranap->jaminan) }}" autofocus>
                                <div class="text-danger">
                                    @error('jaminan')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keluhan">Keluhan yang dirasakan pasien</label>
                                <textarea
                                    class="form-control form-control-border border-width-2  @error('keluhan') is-invalid @enderror"
                                    rows="3" placeholder="Masukan keluhan pasien" id="keluhan"
                                    name="keluhan">{{ old('keluhan', $ranap->keluhan) }}</textarea>
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
                                name="diagnosa">{{ old('diagnosa', $ranap->diagnosa) }}</textarea>
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
                                name="terapi">{{ old('terapi', $ranap->terapi) }}</textarea>
                                <div class="text-danger">
                                    @error('terapi')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ket">keterangan</label>
                                <select
                                    class="form-control form-control-border border-width-2 @error('ket') is-invalid @enderror"
                                    id="ket" name="ket">
                                    <option value="">Select your option</option>
                                    <option value="Sakit" {{ old('ket', $ranap->ket) == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                                    <option value="Meninggal" {{ old('ket',$ranap->ket) == 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
                                    <option value="Rujuk" {{ old('ket',$ranap->ket) == 'Rujuk' ? 'selected' : '' }}>Rujuk</option>
                                    <option value="Atas permintaan pasien" {{ old('ket',$ranap->ket) == 'Atas permintaan pasien' ? 'selected' : '' }}>Atas permintaan pasien</option>
                                </select>
                                <div class="text-danger">
                                    @error('ket')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya Perawatan (Rp)</label>
                                <input type="text"
                                    class="form-control form-control-border border-width-2 @error('biaya') is-invalid @enderror"
                                    id="biaya" name="biaya" value="{{ old('biaya',$ranap->biaya) }}" placeholder="Masukan nominal Pembayaran pasien">
                                <div class="text-danger">
                                    @error('biaya')
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
                                        @if(old('user1', $ranap->user1) == $user->nama)
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
                                        @if(old('user2', $ranap->user2) == $user->nama)
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
                                    @if(old('user3', $ranap->user3) == $user->nama)
                                    <option value="{{ $user->nama }}" selected>{{ $user->nama }}</option>
                                    @else
                                    <option value="{{ $user->nama }}">{{ $user->nama }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success swalDefaultSuccess">
                        Edit riwayat pasien
                    </button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</section>
@endsection