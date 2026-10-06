<?php

namespace App\Livewire\LaporanKinerja;

use Livewire\Component;
use App\Models\LaporanKinerja;
use App\Models\Tugas;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use DB;

class Add extends Component
{
    public $kegiatan;
    public $uraian_kegiatan;
    public $tanggal;
    public $volume;
    public $bulan;
    public $tahun;

    public function render()
    {
        $tugas = Tugas::select(['kegiatan'])->get();
        return view('livewire.laporan-kinerja.add',compact('tugas'));
    }

    public function mount()  {
        $this->bulan = intval(date('m'));
        $this->tahun = date('Y');
    }

    public function submit()
    {
        DB::beginTransaction();
        try {

            LaporanKinerja::create([
                'kegiatan'      => $this->kegiatan,
                'tanggal'    => $this->tanggal,
                'uraian_kegiatan'  => $this->uraian_kegiatan,
                'volume' => $this->volume,
                'bulan'    => $this->bulan,
                'tahun'     => $this->tahun,
                'nip'    => auth()->user()->nip,
            ]);
            LivewireAlert::title('Laporan Berhasil Dibuat!')
                ->success()
                ->show();
            DB::commit();
            return $this->redirect('/laporan-kinerja', navigate: true);
            
        } catch (\Excepion $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return $this->redirect('laporan-kinerja/add', navigate: true);
        }
    }
}
