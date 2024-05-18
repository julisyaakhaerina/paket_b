@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Mahasiwa
                    <a href="{{route('mahasiswa.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label for="">Nim</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror"
                                name="nim" value="{{$nim->nim}}">
                            @error('nim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Kelas</label>
                            <input type="text" class="form-control @error('kelas') is-invalid @enderror"
                            name="kelas" value="{{$kelas->kelas}}">
                            @error('kelas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Jk</label>
                            <input type="text" class="form-control @error('jk') is-invalid @enderror"
                            name="jk" value="{{$jk->jk}}">
                            @error('jk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Agama</label>
                            <input type="text" class="form-control @error('agama') is-invalid @enderror"
                            name="agama" value="{{$agama->agama}}">
                            @error('agama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                            name="alamat" value="{{$alamat->alamat}}">
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
