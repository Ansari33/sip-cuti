<?php

namespace App\Livewire\Tugas;

use Livewire\Component;
use App\Models\Tugas;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use DB;

class Add extends Component
{
    public $kegiatan;

    public function render()
    {
        return view('livewire.tugas.add');
    }

    public function submit()
    {
        DB::beginTransaction();
        try {

            Tugas::create([
                'kegiatan'      => $this->kegiatan,
            ]);
            LivewireAlert::title('Laporan Berhasil Ditambah!')
                ->success()
                ->show();
            DB::commit();
            return $this->redirect('/tugas', navigate: true);
            
        } catch (\Excepion $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return $this->redirect('tugas/add', navigate: true);
        }
    }
}
