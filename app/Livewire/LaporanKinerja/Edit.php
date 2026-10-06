<?php

namespace App\Livewire\LaporanKinerja;

use App\Models\LaporanKinerja;
use App\Models\Tugas;
use Livewire\Component;
use DB;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Edit extends Component
{
    public $data;
    public $kegiatan;
    public $uraian_kegiatan;
    public $tanggal;
    public $volume;
    public $bulan;
    public $tahun;
    public $tugas;

    public function render()
    {
        return view('livewire.laporan-kinerja.edit');
    }

    public function mount($id) {
        $this->data = LaporanKinerja::find($id);
        $this->kegiatan = $this->data->kegiatan;
        $this->uraian_kegiatan = $this->data->uraian_kegiatan;
        $this->tanggal = $this->data->tanggal;
        $this->volume = $this->data->volume;
        $this->bulan = $this->data->bulan;
        $this->tahun = $this->data->tahun;

        $this->tugas = Tugas::select(['kegiatan'])->get();
    }

    public function update()
    {
        DB::beginTransaction();
        try {
            $data = LaporanKinerja::find($this->data->id);
            $data->kegiatan         = $this->kegiatan;
            $data->uraian_kegiatan  = $this->uraian_kegiatan;
            $data->tanggal          = $this->tanggal;
            $data->volume           = $this->volume;
            $data->bulan            = $this->bulan;
            $data->tahun            = $this->tahun;
            $data->save();

            LivewireAlert::title('Laporan Berhasil Diupdate!')
                ->success()
                ->show();
            DB::commit();
            return $this->redirect('/laporan-kinerja', navigate: true);
            
        } catch (\Excepion $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return $this->redirect('laporan-kinerja/edit', navigate: true);
        }
    }
}
