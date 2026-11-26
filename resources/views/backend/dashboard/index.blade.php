@extends('layouts.app')

@section('content')
<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-list"></i> List Siswa
            </h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <a href="{{ url("pelajar/create") }}" class="btn btn-primary mb-2">Tambah</a>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success')}}
                </div>
            @endif
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th class="text-center" width="300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelajars as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td class="text-center">
                                <a href="{{ url('pelajar/'.$item->id) }}" class="btn btn-secondary">Detail</a>
                                <a href="{{ url('pelajar/'.$item->id.'/edit') }}" class="btn btn-success">Edit</a>
                                <button class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Hapus</button>

                                <form id="delete-form" action="{{ url('pelajar/'. $item->id) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
