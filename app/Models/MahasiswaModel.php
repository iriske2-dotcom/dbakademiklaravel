<?php 
 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Model; 
 
class MahasiswaModel extends Model 
{ 
    protected $table='mahasiswa'; 
    protected $primaryKey='nim'; 
    protected $fillable = ['nim', 'nama', 'jurusan']; 
   }