<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $primaryKey = 'nisn';

    protected $fillable = [
         'nisn', 'nis', 'nama', 'password' ,'id_kelas', 'no_telp', 'alamat', 'id_spp'
    ];

   /**
   * Belongs To Siswa -> Spp
   *
   * @return void
   */
    public function spp()
    {
         return $this->belongsTo(Spp::class,'id_spp','id_spp');
    }

   public function pembayaran(){
        return  $this->hasMany(Pembayaran::class,'id_spp');
   }

    public function kelas(){
        return  $this->belongsTo(Kelas::class,'id_kelas');
   }
}
