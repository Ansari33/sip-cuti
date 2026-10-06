<?php

namespace App\Livewire\PengajuanCuti;

use App\Models\PengajuanCuti;
use App\Models\Pegawai;
use App\Models\JenisCuti;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Edit extends Component
{
    public $data;
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
        $pegawai = collect(Pegawai::get(['nama','id'])->toArray())->map(function($item) {
            return array_merge($item, [
                'selected' => $item['id'] === $this->pengaju ? 'selected' : ''
            ]);
        });
       
        $cutis = collect(JenisCuti::get(['jenis','id'])->toArray())->map(function($item) {
            return array_merge($item, [
                'selected' => $item['id'] === $this->jenis ? 'selected' : ''
            ]);
        });
        return view('livewire.pengajuan-cuti.edit',compact('pegawai','cutis'));
    }
    public function mount($id){
         $this->data = PengajuanCuti::find($id);
         $this->pengaju = $this->data->id_pegawai;
         $this->jenis = $this->data->id_jenis_cuti;
         $this->jumlah = $this->data->jumlah_hari;
         $this->tanggal_pengajuan = $this->data->tanggal_pengajuan;
         $this->tanggal_mulai = $this->data->tanggal_mulai;
         $this->tanggal_berakhir = $this->data->tanggal_selesai;
         $this->tahun = $this->data->tahun;
         $this->alasan = $this->data->alasan;
    }

    public function update(){
        $pegawai = PengajuanCuti::find($this->data->id);
        $pegawai->id_pegawai        = $this->pengaju;
        $pegawai->id_jenis_cuti     = $this->jenis;
        $pegawai->jumlah_hari       = $this->jumlah;
        $pegawai->tanggal_pengajuan = $this->tanggal_pengajuan;
        $pegawai->tanggal_mulai     = $this->tanggal_mulai;
        $pegawai->tanggal_selesai   = $this->tanggal_berakhir;
        $pegawai->tahun             = $this->tahun;
        $pegawai->alasan            = $this->alasan;
        $pegawai->save();

        LivewireAlert::title('Pengajuan Cuti Berhasil Diupdate!')
            ->success()
            ->show();
        // session()->flash('success','Data Berhasil Diupdate!');
        return $this->redirect('/cuti/pengajuan',navigate:true);
    }
}
