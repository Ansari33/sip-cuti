<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;
use App\Models\Pegawai;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        $data = Pegawai::where('nama','like','%'.$this->search.'%')->paginate(15);
        return view('livewire.pegawai.index',['data' => $data]);
    }

    public function searchData(){
        $this->resetPage();
        
    }

    public function confirmDelete($nama)
    {
        LivewireAlert::title('Hapus Pegawai ' . $nama . '?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['nama' => $nama])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        $pegawai = Pegawai::where('nama',$data['nama'])->first();
        $pegawai->user()->delete();
        $pegawai->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
