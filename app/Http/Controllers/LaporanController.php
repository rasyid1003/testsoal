<?php 
namespace App\Http\Controllers; 
use App\Models\Ujian; 
use App\Models\Peserta; 
use Illuminate\Http\Request; 
class LaporanController extends Controller { 
    public function ujianByTanggal(Request $request) { 
        $tanggal = $request->query('tanggal', '2023-10-10'); 
        return response()->json(Ujian::whereDate('tanggal', $tanggal)->get()); 
    } 
    public function siswaLulus() { 
        $jumlahLulus = Peserta::where('status_lulus', 'Lulus')->distinct('nis')->count('nis'); 
        return response()->json(['jumlah_lulus' => $jumlahLulus]); 
    } 
    public function siswaGagal() { 
        $dataGagal = Peserta::with(['siswa', 'ujian.mataPelajaran'])->where('status_lulus', 'Gagal')->get()->map(function ($peserta) { 
            return ['Siswa' => $peserta->siswa->nama, 'Gagal_Di_Matpel' => $peserta->ujian->mataPelajaran->nama_matpel]; 
        }); 
        return response()->json($dataGagal); 
    } 
} 
