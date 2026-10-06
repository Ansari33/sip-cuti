<?php

namespace App\Livewire\RumahIbadah;

use App\Models\RumahIbadah;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{
  
    public $search = '';
    public $rumahIbadah;

    use WithPagination;
    public function render()
    {
        $data = RumahIbadah::where('kecamatan','like','%'.$this->search.'%')->get();
        return view('livewire.rumah-ibadah.index', compact('data'));
    }

    public function searchData(){
       $this->resetPage();
    }

     public function confirmDelete($nama)
    {
        LivewireAlert::title('Hapus Data ' . $nama . '?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['kecamatan' => $nama])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        RumahIbadah::where('kecamatan',$data['kecamatan'])->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
