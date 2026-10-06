<?php

namespace App\Livewire\Ummat;

use Livewire\Component;
use App\Models\Ummat;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{
  
    public $search = '';
    public $ummat;

    use WithPagination;
    public function render()
    {
        $data = Ummat::where('kecamatan','like','%'.$this->search.'%')->get();
        return view('livewire.ummat.index', compact('data'));
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
        Ummat::where('kecamatan',$data['kecamatan'])->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
