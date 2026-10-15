<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
class Peserta extends Model { 
    protected $fillable = ['id_ujian', 'nis', 'nilai', 'status_lulus']; 
    public function siswa() { return $this->belongsTo(Siswa::class, 'nis', 'nis'); } 
    public function ujian() { return $this->belongsTo(Ujian::class, 'id_ujian'); } 
} 
