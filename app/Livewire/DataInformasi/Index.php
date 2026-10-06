<?php

namespace App\Livewire\DataInformasi;

use Livewire\Component;
use App\Models\DataInformasi;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = ''; 

    public function render()
    {
        $data = DataInformasi::where('nama','like','%'.$this->search.'%')->paginate(15);
        return view('livewire.data-informasi.index',compact('data'));
    }

    public function searchData(){
        $this->resetPage();
    }

    public function confirmDelete($nomor)
    {
        LivewireAlert::title('Hapus ' . $nomor . '?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['nomor' => $nomor])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        $data = DataInformasi::where('nama', $data['nomor'])->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
