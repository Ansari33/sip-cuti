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
       $pegawai = Pegawai::get(['nama','id','nip']);
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
        $sisaCuti = 0;
        if($this->jenis == 'Cuti Tahunan'){
            
           $sisaCuti = $this->hitungSisaCutiTahunan();
           if($sisaCuti <= 0 ){
                $this->disabled = 1;
           }

           $this->info = ' Sisa Cuti Tersedia : '.$sisaCuti.' Sisa Tahunan  '
           .'Total Cuti Tahun Ini : '.$this->cekCutiTahunIni().' '
            .($this->tahun) -1 .' : '.$this->sisaCutiTahunLalu
            // .' Dipakai : '.$this->cutiTahunLalu
            . ' Sisa Cuti Tahunan '.date('Y').' : '. $this->sisaCutiTahunIni;

        }
    }

    public function hitungSisaCutiTahunan(){
        $sisaCuti = 0;
        $tahunLalu = ($this->tahun)-1;
        
        if($this->cekCutiDuaTahun() == 24){
            return $sisaCuti;
        }
    
        $cutiTahunIni = $this->cekCutiTahunIni();
        
        $sisaCutiTahunIni = 12 - $cutiTahunIni <= 0 ? 0 : 12 - $cutiTahunIni;
        $this->sisaCutiTahunIni = $sisaCutiTahunIni;
        $sisaCuti += $sisaCutiTahunIni;
        
        $sisaCutiTahunLalu = 0;
        $cutiTahunLalu = $this->cekCutiTahunLalu();

        if($cutiTahunLalu < 12){
            $sisaCutiTahunLalu = (12 - $cutiTahunLalu) >=6 ? 6 : 12 - $cutiTahunLalu;
            $maksimalCuti = 12 + $sisaCutiTahunLalu;
            $sisaCuti = $maksimalCuti - ($this->cekCutiTahunIni());
        }
        $this->maxCuti = $sisaCuti;
        return $sisaCuti;

    }

    public function cekCutiTahunLalu(){
        $tahunLalu = ($this->tahun) -1;
        $pengaju = auth()->user()->hasRole('admin') ?
        $this->pengaju:
        auth()->user()->nip;
        return Pengajuan::where('nip',$pengaju)
        ->where('tahun',$tahunLalu)
        ->where('jenis_cuti', $this->jenis)
        #->where('status','Disetujui')
        ->sum('lama_cuti');
    }

    public function cekCutiTahunIni(){
        $pengaju = auth()->user()->hasRole('admin') ?
        $this->pengaju:
        auth()->user()->nip;
        return Pengajuan::where('nip',$pengaju)
        ->where('tahun',date("Y"))
        ->where('jenis_cuti', $this->jenis)
        #->where('status','Disetujui')
        ->sum('lama_cuti');
    }

    public function cekCutiDuaTahun(){
        $tahunLalu = ($this->tahun) -1;
        $pengaju = auth()->user()->hasRole('admin') ?
        $this->pengaju:
        auth()->user()->nip;
        return Pengajuan::where('nip',$pengaju)
        ->whereIn('tahun',[$tahunLalu,date("Y")])
        ->where('jenis_cuti', $this->jenis)
        #->where('status','Disetujui')
        ->sum('lama_cuti');
    }

    public function submit(){
        $pegawai = auth()->user()->hasRole('admin') ? 
        Pegawai::where('nip', $this->pengaju)->first() : 
        Pegawai::where('nip', auth()->user()->nip)->first();

        if($this->cekSisaCuti($this->jenis)){
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
        LivewireAlert::title('Jumlah Pengajuan Cuti Lebih Dari Sisa Cuti!')
                ->warning()
                ->show(); 
                return ;
    }

    public function cekSisaCuti($jenis){

        if ($this->jumlah > $this->maxCuti) {
            return false;
        }
        return true;
    }
}
