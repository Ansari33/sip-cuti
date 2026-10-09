<?php

namespace App\Livewire\Pengajuan;

use App\Models\Pengajuan;
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
    public $tahun ;
    public $dokumen ='-';
    public $surat ='-';
    public $disabled = 0;
    public $info;
    public $sisaCutiTahunIni;
    public $sisaCutiTahunLalu;
    public $maxCuti;
    


    public function render()
    {
        $pegawai = collect(Pegawai::get(['nama','id'])->toArray())->map(function($item) {
            return array_merge($item, [
                'selected' => $item['id'] === $this->pengaju ? 'selected' : ''
            ]);
        });
       
        // $cutis = collect(JenisCuti::get(['jenis','id'])->toArray())->map(function($item) {
        //     return array_merge($item, [
        //         'selected' => $item['id'] === $this->jenis ? 'selected' : ''
        //     ]);
        // });
         $cutis = [
        [
            'jenis' => 'Cuti Tahunan',
            'id'    => 'Cuti Tahunan',
            'batas' => 12
        ]
       ];
        return view('livewire.pengajuan.edit',compact('pegawai','cutis'));
    }
    public function mount($id){
         $this->data = Pengajuan::find($id);
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
        $pegawai = Pengajuan::find($this->data->id);
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

    public function cekJenisCuti(){
        // LivewireAlert::title($this->jenis)
        //         ->success()
        //         ->show();
        if($this->jenis == 'Cuti Tahunan'){
            
           $this->maxCuti = $this->hitungSisaCutiTahunan();
           $this->info = 'Sisa Cuti Maksimal : '.$this->maxCuti.' Sisa Tahunan Anda Cuti Anda Tahun '.($this->tahun) -1 .' : '.$this->sisaCutiTahunLalu. ' Sisa Cuti Tahun '.date('Y').' : '. $this->sisaCutiTahunIni;

           if($this->maxCuti <= 0 || $this->jumlah > $this->maxCuti){
                $this->disabled = 1;
           }


        }
    }

    public function hitungSisaCutiTahunan(){
        $tahunLalu = ($this->tahun)-1;
            $cutiTahunLalu = Pengajuan::where('nip',auth()->user()->nip)
            ->where('tahun',$tahunLalu)
            ->where('jenis_cuti', $this->jenis)
            #->get();
            ->sum('lama_cuti');

            $cutiTahunIni = Pengajuan::where('nip',auth()->user()->nip)
            ->where('tahun',$this->tahun)
            ->where('jenis_cuti', $this->jenis)
            ->sum('lama_cuti');

            
            $sisaCutiTahunLalu = 12 - $cutiTahunLalu >= 6 ? 6 : 12 - $cutiTahunLalu;
            $this->$sisaCutiTahunLalu = $sisaCutiTahunLalu;
            $sisaCutiTahunIni = 12 - $cutiTahunIni ;
            $this->$sisaCutiTahunIni = $sisaCutiTahunIni;
           return $sisaCuti = $sisaCutiTahunIni + $sisaCutiTahunLalu;
    }
}
