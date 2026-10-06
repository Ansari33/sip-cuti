<?php

namespace App\Livewire\Inventory;
use App\Models\Inventories;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\WithPagination;

use Livewire\Component;

class Index extends Component
{

    use WithPagination;
    public $search = '';

    public function render()
    {
        $data = Inventories::where('nama','like','%'.$this->search.'%')->paginate(15);
        return view('livewire.inventory.index',['data' => $data]);
    }

    public function searchData(){
        $this->resetPage();
        
    }

    public function confirmDelete($nama)
    {
        LivewireAlert::title('Hapus Pembelian ' . $nama . '?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['nama' => $nama])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        $pegawai = Inventories::where('nama',$data['nama'])->first();
        $pegawai->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
