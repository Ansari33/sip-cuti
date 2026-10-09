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
        $pegawai = collect(Pegawai::get(['nama','id','nip'])->toArray())->map(function($item) {
            return array_merge($item, [
                'selected' => $item['nip'] === $this->pengaju ? 'selected' : ''
            ]);
        });
      
         $cutis = [
        [
            'jenis' => 'Cuti Tahunan',
            'id'    => 'Cuti Tahunan',
            'batas' => 12,
            'selected' => 'Cuti Tahunan' === $this->jenis ? 'selected' : ''
        ]
       ];
        return view('livewire.pengajuan.edit',compact('pegawai','cutis'));
    }
    public function mount($id){
        $this->data     = Pengajuan::find($id);

        $pengaju = auth()->user()->hasRole('admin') ? 
        Pegawai::where('nip', $this->data->nip)->first() : 
        Pegawai::where('nip', auth()->user()->nip)->first();
         
         
         $this->pengaju  = $pengaju->nip;
         $this->jenis    = $this->data->jenis_cuti;
         $this->jumlah   = $this->data->lama_cuti;
         $this->tanggal_pengajuan    = $this->data->tanggal_pengajuan;
         $this->tanggal_mulai         = $this->data->tanggal_mulai;
         $this->tanggal_berakhir     = $this->data->tanggal_berakhir;
         $this->tahun    = $this->data->tahun;
         $this->alasan   = $this->data->alasan;
         $this->dokumen   = $this->data->dokumen;

         $this->cekJenisCuti();
         
    }

    public function update(){

    if($this->cekSisaCuti($this->jenis)){
        $pengajuan = Pengajuan::find($this->data->id);
        $pegawai = auth()->user()->hasRole('admin') ? 
        Pegawai::where('nip', $this->pengaju)->first() : 
        Pegawai::where('nip', auth()->user()->nip)->first();
        $pengajuan->nip                 = $pegawai->nip;
        $pengajuan->nama                = $pegawai->nama;
        $pengajuan->jenis_cuti          = $this->jenis;
        $pengajuan->lama_cuti           = $this->jumlah;
        $pengajuan->tanggal_pengajuan   = $this->tanggal_pengajuan;
        $pengajuan->tanggal_mulai       = $this->tanggal_mulai;
        $pengajuan->tanggal_berakhir    = $this->tanggal_berakhir;
        $pengajuan->tahun               = $this->tahun;
        $pengajuan->alasan              = $this->alasan;
        $pengajuan->dokumen             = $this->dokumen;
        $pengajuan->save();

        LivewireAlert::title('Pengajuan Cuti Berhasil Diupdate!')
            ->success()
            ->show();
        // session()->flash('success','Data Berhasil Diupdate!');
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

    public function cekJenisCuti(){
        $sisaCuti = 0;
        if($this->jenis == 'Cuti Tahunan'){
            
           $sisaCuti = $this->hitungSisaCutiTahunan();
           if($sisaCuti <= 0 ){
                $this->disabled = 1;
           }

           $this->info = 'Sisa Cuti Tersedia : '.$sisaCuti.' Sisa Tahunan  '
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
        ->whereNotIn('id',[$this->data->id])
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
        ->whereNotIn('id',[$this->data->id])
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
        ->whereNotIn('id',[$this->data->id])
        #->where('status','Disetujui')
        ->sum('lama_cuti');
    }

    public  function setujui(){
        $pengajuan = Pengajuan::find($this->data->id);
        $pengajuan->status = 'Disetujui';
        $pengajuan->save();
        LivewireAlert::title('Pengajuan Cuti Disetujui!')
            ->success()
            ->show();
        return $this->redirect('/cuti/pengajuan',navigate:true);
    }

    public  function tolak(){
        $pengajuan = Pengajuan::find($this->data->id);
        $pengajuan->status = 'Ditolak';
        $pengajuan->save();
        LivewireAlert::title('Pengajuan Cuti Ditolak!')
            ->warning()
            ->show();
        return $this->redirect('/cuti/pengajuan',navigate:true);
    }
}
