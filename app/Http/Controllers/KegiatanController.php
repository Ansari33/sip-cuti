<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function delete($id) {
        $data = Kegiatan::find($id);
        $data->delete();
        session()->flash('success', 'Kegiatan Berhasil Terhapus!');
        return redirect('/kegiatan');
    }
}
