<?php

namespace App\Livewire\Tugas;

use App\Models\Tugas;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    public $search ='';
    
    public function render()
    {
        $data = Tugas::where('kegiatan','like','%'.$this->search.'%')->paginate(15);
        return view('livewire.tugas.index',compact('data'));
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
        Tugas::where('kegiatan',$data['nama'])->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
