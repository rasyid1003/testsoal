<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
class Siswa extends Model { 
    protected $primaryKey = 'nis'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 
    protected $fillable = ['nis', 'nama', 'alamat']; 
} 
