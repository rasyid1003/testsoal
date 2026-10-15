@extends('layouts.app') 
@section('content') 
<div class="card shadow-sm"> 
    <div class="card-header bg-white"><h5 class="mb-0">Tambah Data Siswa</h5></div> 
    <div class="card-body"> 
        <form action="{{ route('siswa.store') }}" method="POST"> 
            @csrf 
            <div class="mb-3"><label>NIS (Maks 20)</label><input type="text" name="nis" class="form-control" required></div> 
            <div class="mb-3"><label>Nama Lengkap</label><input type="text" name="nama" class="form-control" required></div> 
            <div class="mb-3"><label>Alamat</label><textarea name="alamat" class="form-control" rows="3" required></textarea></div> 
            <button type="submit" class="btn btn-success">Simpan Data</button> 
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a> 
        </form> 
    </div> 
</div> 
@endsection 
