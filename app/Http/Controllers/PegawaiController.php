<?php

namespace App\Http\Controllers;

use App\Models\LaporanKinerja;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PegawaiController extends Controller
{
    //    public function index() {
    //     $data = Pegawai::paginate(20);
    //     return view('pegawai.index',compact('data'));
    // }

    // public function add() {
    //     return view('pegawai.add');
    // }

    // public function store(Request $request) {

    //     Pegawai::insert([
    //         'nama' => $request->nama,
    //         'nip' => $request->nip,
    //         'pangkat_gol' => $request->pangkat_gol,
    //         'jabatan' => $request->jabatan,
    //         'unit_kerja' => $request->unit_kerja,

    //     ]);
    //     return redirect('/pegawai');
    // }

    // public function edit($id) {
    //     $data = Pegawai::find($id);
    //     return view('pegawai.edit',compact('data'));
    // }

    // public function update(Request $request) {
    // }

    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->user()->delete();
        $pegawai->delete();
        session()->flash('success', 'Data Berhasil Dihapus!');
        return redirect('/pegawai');
    }

    public function pdf($bulan,$tahun,$at)
    {
        $data = LaporanKinerja::where('nip', auth()->user()->nip)
            // ->where('bulan', $this->bulan)
            // ->where('tahun', $this->tahun)
            ->get();
        $pegawai = Pegawai::where('nip',auth()->user()->nip)->first();    
        $atasan = Pegawai::find($at); 
         $bulanStr = [
            "1" => 'JANUARI',
            "2" => 'FEBRUARI',
            "3" => 'MARET',
            "4" => 'APRIL',
            "5" => 'MEI',
            "6" => 'JUNI',
            "7" => 'JULI',
            "8" => 'AGUSTUS',
            "9" => 'SEPTEMBER',
            "10" => 'OKTOBER',
            "11" => 'NOVEMBER',
            "12" => 'DESEMBER',
        ];
        $pdf = Pdf::loadView('livewire.laporan-kinerja.pdf', [],
        ['bulan' => $bulan,'tahun' => $tahun,
        'pegawai' => $pegawai,'data'=>$data,
        'atasan' => $atasan, 'bulanStr' => $bulanStr 
        ]);
        return $pdf->stream('Laporan Kinerja.pdf');
    }
}
