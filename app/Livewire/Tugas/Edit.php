<?php

namespace App\Livewire\Tugas;

use App\Models\Tugas;
use Livewire\Component;
use DB;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Edit extends Component
{

    public $data;
    public $kegiatan;

    public function render()
    {
        return view('livewire.tugas.edit');
    }

    public function mount($id){
        $this->data = Tugas::find($id);
        $this->kegiatan = $this->data->kegiatan;
    }

    public function update()
    {
        DB::beginTransaction();
        try {
            $data = Tugas::find($this->data->id);
            $data->kegiatan         = $this->kegiatan;
            $data->save();

            LivewireAlert::title('Tugas Berhasil Diupdate!')
                ->success()
                ->show();
            DB::commit();
            return $this->redirect('/tugas', navigate: true);
            
        } catch (\Excepion $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return $this->redirect('tugas/edit', navigate: true);
        }
    }
}
