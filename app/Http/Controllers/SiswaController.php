<?php 
namespace App\Http\Controllers; 
use App\Models\Siswa; 
use Illuminate\Http\Request; 
class SiswaController extends Controller { 
    public function index() { 
        $siswas = Siswa::all(); 
        return view('siswa.index', compact('siswas')); 
    } 
    public function create() { return view('siswa.create'); } 
    public function store(Request $request) { 
        $request->validate(['nis' => 'required|unique:siswas,nis|max:20', 'nama' => 'required|max:50', 'alamat' => 'required|max:100']); 
        Siswa::create($request->all()); 
        return redirect()->route('siswa.index')->with('success', 'Data Siswa berhasil ditambahkan!'); 
    } 
    public function edit($nis) { 
        $siswa = Siswa::where('nis', $nis)->firstOrFail(); 
        return view('siswa.edit', compact('siswa')); 
    } 
    public function update(Request $request, $nis) { 
        $request->validate(['nama' => 'required|max:50', 'alamat' => 'required|max:100']); 
        Siswa::where('nis', $nis)->update(['nama' => $request->nama, 'alamat' => $request->alamat]); 
        return redirect()->route('siswa.index')->with('success', 'Data diperbarui!'); 
    } 
    public function destroy($nis) { 
        Siswa::where('nis', $nis)->delete(); 
        return redirect()->route('siswa.index')->with('success', 'Data dihapus!'); 
    } 
} 
