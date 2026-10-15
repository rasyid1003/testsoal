@extends('layouts.app') 
@section('content') 
<div class="card shadow-sm"> 
    <div class="card-header bg-white"><h5 class="mb-0">Edit Data Siswa</h5></div> 
    <div class="card-body"> 
        <form action="{{ route('siswa.update', $siswa->nis) }}" method="POST"> 
            @csrf @method('PUT') 
            <div class="mb-3"><label>NIS</label><input type="text" class="form-control" value="{{ $siswa->nis }}" readonly disabled></div> 
            <div class="mb-3"><label>Nama Lengkap</label><input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required></div> 
            <div class="mb-3"><label>Alamat</label><textarea name="alamat" class="form-control" rows="3" required>{{ $siswa->alamat }}</textarea></div> 
            <button type="submit" class="btn btn-primary">Update Data</button> 
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a> 
        </form> 
    </div> 
</div> 
@endsection 
