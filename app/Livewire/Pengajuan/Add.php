<?php

namespace App\Livewire\Pengajuan;

use App\Models\JenisCuti;
use App\Models\Pegawai;
use App\Models\Pengajuan;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Add extends Component
{
    public $pengaju;
    public $jenis;
    public $jumlah;
    public $tanggal_pengajuan;
    public $tanggal_mulai;
    public $tanggal_berakhir;
    public $alasan;
    public $tahun;

    public function render()
    {
        $pegawai = Pegawai::get(['nama','id']);
        $cutis = JenisCuti::get(['jenis','id']);
        return view('livewire.pengajuan-cuti.add',compact('pegawai','cutis'));
    }

    public function submit(){
        Pengajuan::create([
            'id_pegawai'            => $this->pengaju,
            'id_jenis_cuti'         => $this->jenis,
            'jumlah_hari'           => $this->jumlah,
            'tanggal_pengajuan'     => $this->tanggal_pengajuan,
            'tanggal_mulai'         => $this->tanggal_mulai,
            'tanggal_selesai'       => $this->tanggal_berakhir,
            'alasan'                => $this->alasan,
            'tahun'                 => $this->tahun,
            'status'                => 'Pengajuan' 
        ]);
        LivewireAlert::title('Pengajuan Berhasil Ditambahkan!')
                ->success()
                ->show();
        //session()->flash('success','Data Pegawai Berhasil Ditambah!');
        return $this->redirect('/cuti/pengajuan',navigate:true);
    }
}
