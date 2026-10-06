<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permintaan;
use App\Models\NomorSurat;
use App\Models\Pegawai;
use Session;
use Auth;
use DB;


class PermintaanController extends Controller
{

    public function delete($id) {
        $data = Permintaan::find($id);
        $data->nomorSurat()->delete();
        $data->delete();
        session()->flash('success', 'Pengajuan Berhasil Terhapus!');
        return redirect('/permintaan');
    }
   
}
