<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
class MataPelajaran extends Model { 
    protected $primaryKey = 'id_matpel'; 
    protected $fillable = ['nama_matpel']; 
} 
