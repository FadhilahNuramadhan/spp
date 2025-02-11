<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $primaryKey = 'id_pembayaran';

    protected $fillable = [
         'id_petugas','id_siswa', 'spp_bulan', 'jumlah_bayar'
    ];

 /**
   * Belongs To Pembayaran -> User (petugas)
   *
   * @return void
   */
    public function users()
    {
         return $this->belongsTo(User::class,'id_petugas', 'id_petugas');
    }

 /**
   * Has Many Pembayaran -> Siswa
   *
   * @return void
   */
    public function siswa()
    {
         return $this->belongsTo(Siswa::class,'id_siswa','id','nisn');
    }
}
