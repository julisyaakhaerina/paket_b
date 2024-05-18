@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="{{route('mahasiswa.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
                <div class="card-body">
                    <div class="table-reponsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nim</th>
                                    <th>Kelas</th>
                                    <th>Jk</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                                @foreach ($mahasiswa as $item)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$item->nim}}</td>
                                    <td>{{$item->kelas}}</td>
                                    <td>{{$item->jk}}</td>
                                    <td>{{$item->agama}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td align="center"><img src="{{asset('/images/buku/'.$item->cover)}}"
                                            style="width: 100px;" alt="">
                                    </td>
                                    <td>
                                        <form action="{{route('mahasiswa.destroy',$item->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('mahasiswa.edit',$item->id)}}" class="btn btn-sm btn-success">
                                                Edit
                                            </a>
                                            <a href="{{route('mahasiswa.show',$item->id)}}" class="btn btn-sm btn-warning">
                                                Show
                                            </a>

                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
