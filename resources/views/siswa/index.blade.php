@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Data Siswa</h5>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary btn-sm">+ Tambah Siswa</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th width="150px" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($siswas as $siswa)
                <tr>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td class="text-center">
                        <form action="{{ route('siswa.destroy', $siswa->nis) }}" method="POST">
                            <a href="{{ route('siswa.edit', $siswa->nis) }}" class="btn btn-warning btn-sm">Edit</a>
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="4" class="text-center">Data siswa belum tersedia.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection