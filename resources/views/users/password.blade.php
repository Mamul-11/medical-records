@extends('layout.main')

@section('title','Edit Data User')

@section('content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Ubah Password</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="/users/{{ $user->nik }}/changePassword" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password"
                                    class="form-control form-control-border border-width-2 @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="Ubah password users"
                                    value="{{ old('password') }}" >
                                <div class="text-danger">
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="form-label">password_confirmation</label>
                                <input type="password_confirmation"
                                    class="form-control form-control-border border-width-2 @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" id="password_confirmation" placeholder="Ubah password_confirmation users"
                                    value="{{ old('password_confirmation') }}" >
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
