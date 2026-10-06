<?php

namespace App\Imports;

use App\Models\Pegawai;
use Maatwebsite\Excel\Concerns\ToModel;

class PegawaiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pegawai([
            //
            'nama' => $row[1],
            'nip' => $row[2],
            'pangkat_gol' => $row[3],
            'jabatan' => $row[4],
            'unit_kerja' => $row[5],
        ]);
    }
}
