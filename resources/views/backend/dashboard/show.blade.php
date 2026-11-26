@extends('layouts.app')

@section('content')
<div class="col-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th width="220" class="bg-light">Nama</th>
                        <td>{{ $pelajars->nama }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">Kelas</th>
                        <td>{{ $pelajars->kelas }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">Jurusan</th>
                        <td>{{ $pelajars->jurusan }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">Created At</th>
                        <td>{{ $pelajars->created_at }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">Updated At</th>
                        <td>{{ $pelajars->updated_at }}</td>
                    </tr>
                </table>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ url('/panel/dashboard') }}" class="btn btn-secondary mt-2">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
