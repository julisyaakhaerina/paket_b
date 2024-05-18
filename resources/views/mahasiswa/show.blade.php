@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="{{route('mahasiswa.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Nim</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror"
                            name="nim" value="{{$mahasiswa->nim}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Kelas</label>
                        <input type="text" class="form-control @error('') is-invalid @enderror"
                            name="kelas" value="{{$mahasiswa->kelas}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Jk</label>
                        <input type="text" class="form-control @error('jk') is-invalid @enderror"
                            name="jk" value="{{$mahasiswa->jk}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror"
                            name="agama" value="{{$mahasiswa->agama}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                            name="alamat" value="{{$mahasiswa->alamat}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
