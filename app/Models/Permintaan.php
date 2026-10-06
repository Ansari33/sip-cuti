<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    protected $guarded =[];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'pengaju','nip');
    }

    public function nomorSurat()
    {
        return $this->hasOne(NomorSurat::class,'pengajuan_id');
    }
}
