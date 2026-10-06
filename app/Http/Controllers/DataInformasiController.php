<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataInformasi;
use App\Models\Ummat;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class DataInformasiController extends Controller
{
    public function delete($id) {
        $data = DataInformasi::find($id);
        $data->delete();
        session()->flash('success', 'Data Berhasil Terhapus!');
        return redirect('/data-informasi');
    }

    public function deleteUmmat($kecamatan) {
       Ummat::where('kecamatan', $kecamatan)->delete();
       LivewireAlert::title('Data Berhasil Dihapus!')
            ->success()
            ->show();
    }
}
