<?php

namespace App\Livewire\PengajuanCuti;

use Livewire\Component;
use App\Models\PengajuanCuti;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Index extends Component
{
   use WithPagination;
    public $search = '';

    public function render()
    {
        $data = PengajuanCuti::paginate(15);
        return view('livewire.pengajuan-cuti.index',['data' => $data]);
    }

    public function searchData(){
        $this->resetPage();
        
    }

    public function confirmDelete($id)
    {
        LivewireAlert::title('Hapus Pengajuan Cuti?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['id' => $id])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        $pegawai = PengajuanCuti::where('id',$data['id'])->first();
        $pegawai->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
