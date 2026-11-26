@extends('layouts.app')

@section('content')
<div class="col-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Siswa</h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ url('pelajar/create') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nama">Name</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
                </div>

                <div class="mb-3">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" value="{{ old('kelas') }}">
                </div>

                <div class="mb-3">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ old('jurusan') }}">
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ url('panel/dashboard') }}" class="btn btn-secondary mt-2 mr-2">Kembali</a>
                    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
