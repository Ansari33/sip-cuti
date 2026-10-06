<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NomorSurat extends Model
{
    //
    protected $fillable = ['nomor','pengajuan_id']; 

    public function pengajuan()
    {
        return $this->belongsTo(Permintaan::class,'pengajuan_id','id');
    }
}
