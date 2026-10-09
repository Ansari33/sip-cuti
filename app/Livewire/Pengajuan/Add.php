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
       $pegawai = Pegawai::get(['nama','id']);
       # $cutis = JenisCuti::get(['jenis','id']);
       $cutis = [
        [
            'jenis' => 'Cuti Tahunan',
            'id'    => 'Cuti Tahunan',
            'batas' => 12
        ]
       ];
       $this->tahun = intval(date("Y"));
        return view('livewire.pengajuan.add',compact('pegawai','cutis'));
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

    public function submit(){
        $pegawai = Pegawai::where('nip',auth()->user()->nip)->first();
        $this->cekSisaCuti($this->jenis);
        Pengajuan::create([
            'nama'                  => $pegawai->nama,
            'nip'                   => $pegawai->nip,
            'pangkat_golongan'      => $pegawai->pangkat_gol,
            'jabatan'               => $pegawai->jabatan,
            'unit_kerja'            => $pegawai->unit_kerja,
            'jenis_cuti'            => $this->jenis,
            'lama_cuti'             => $this->jumlah,
            'tanggal_pengajuan'     => $this->tanggal_pengajuan,
            'tanggal_mulai'         => $this->tanggal_mulai,
            'tanggal_berakhir'      => $this->tanggal_berakhir,
            'alasan'                => $this->alasan,
            'tahun'                 => $this->tahun == null || $this->tahun == 0 ? intval(date("Y")) : $this->tahun ,
            'dokumen'               => $this->dokumen,
            'surat'                 => $this->surat,
            'status'                => 'Pengajuan' 
        ]);
        LivewireAlert::title('Pengajuan Berhasil Ditambahkan!')
                ->success()
                ->show();
        //session()->flash('success','Data Pegawai Berhasil Ditambah!');
        return $this->redirect('/cuti/pengajuan',navigate:true);
    }

    public function cekSisaCuti($jenis){
 
    $cutiTahunLalu = Pengajuan::where('nip',$this->pengaju)
        ->where('tahun',($this->tahun)-1)
        ->where('jenis_cuti', $this->jenis)->sum('lama_cuti');

        $sisaCutiTahunLalu = 12 - $cutiTahunLalu;
        $sisaCutiTahunLalu = $sisaCutiTahunLalu >= 6 ? 6 : $sisaCutiTahunLalu;

        $cutiTahunIni = Pengajuan::where('nip',$this->pengaju)
        ->where('tahun',($this->tahun))
        ->where('jenis_cuti', $this->jenis)->sum('lama_cuti');
        $sisaCutiTahunIni = 12 - $cutiTahunIni;

        $maksimalCuti = $sisaCutiTahunIni + $sisaCutiTahunLalu;

        if ($maksimalCuti <= 0) {
           LivewireAlert::title('Jumlah Pengajuan Cuti Telah Habis!')
                ->danger()
                ->show(); 
                return ;
        }
        if ($this->jumlah > $maksimalCuti) {
            LivewireAlert::title('Jumlah Pengajuan Cuti Lebih Dari Sisa Cuti!')
                ->danger()
                ->show(); 
                return ;
        }

        return true;
    }
}
