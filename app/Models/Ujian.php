<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
class Ujian extends Model { 
    protected $primaryKey = 'id_ujian'; 
    protected $fillable = ['nama_ujian', 'id_matpel', 'tanggal']; 
    public function mataPelajaran() { return $this->belongsTo(MataPelajaran::class, 'id_matpel'); } 
} 
