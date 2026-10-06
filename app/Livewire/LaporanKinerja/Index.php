<?php

namespace App\Livewire\LaporanKinerja;

use Livewire\Component;
use App\Models\LaporanKinerja;
use App\Models\Pegawai;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use App\Exports\LaporanKinerjaExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $atas;
    public $bulan;
    public $tahun;
   // public $atasan;

    public function render()
    {
        $data = LaporanKinerja::where('uraian_kegiatan','like','%'.$this->search.'%');
        if ($this->bulan != null) {
            $data = $data->where('bulan',$this->bulan);
        }
        if ($this->tahun != null) {
            $data = $data->where('tahun',$this->tahun);
        }
        //->where('tahun',$this->tahun)
        $data = $data->where('nip',auth()->user()->nip)->paginate(15);
        $atasan = Pegawai::select(['id','nama'])->whereNotIn('pangkat_gol',['V','IX'])->get();
        return view('livewire.laporan-kinerja.index',compact('data','atasan'));
    }

    public function mount() {
        $this->bulan = intval(date('m'));
        $this->tahun = date('Y');        
    }

    public function searchData(){
        $this->resetPage();
        
    }

    public function confirmDelete($nama)
    {
        LivewireAlert::title('Hapus Kinerja ' . $nama . '?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['nama' => $nama])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        LaporanKinerja::where('kegiatan',$data['nama'])->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }

    public function excel(){
        $data = LaporanKinerja::where('nip',auth()->user()->nip)
        ->where('bulan',$this->bulan)
        ->where('tahun',$this->tahun)
        ->get()->pluck(['tanggal','kegiatan','uraian_kegiatan']);
        $parameter = ['bulan' => $this->bulan];
       // dd($data);
        return Excel::download(new LaporanKinerjaExport($this->bulan,$this->tahun), 'laporan kinerja.xlsx');
    }

    public function pdf() {
         if ($this->bulan == null or $this->bulan == null or $this->atas == null ) {
           LivewireAlert::title('Parameter Belum Lengkap!')
            ->warning()
            ->show();
            return ;
        }
              $this->js("
            window.open('/laporan-kinerja/pdf/$this->bulan/$this->tahun/$this->atas', '_blank').focus();
            "); 
        
    }

}
