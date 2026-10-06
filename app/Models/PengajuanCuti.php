<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanCuti extends Model
{
    protected $guarded = [];
    //
     public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'id_pegawai','id');
    }

    public function jenisCuti()
    {
        return $this->belongsTo(JenisCuti::class,'id_cuti','id');
    }
}
