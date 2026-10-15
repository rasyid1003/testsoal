<?php 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\LaporanController; 
use App\Http\Controllers\SiswaController; 
Route::get('/', function () { return redirect()->route('siswa.index'); }); 
Route::resource('siswa', SiswaController::class)->parameters(['siswa' => 'nis']); 
Route::get('/ujian-tanggal', [LaporanController::class, 'ujianByTanggal']); 
Route::get('/siswa-lulus', [LaporanController::class, 'siswaLulus']); 
Route::get('/siswa-gagal', [LaporanController::class, 'siswaGagal']); 
