<?php

namespace App\Livewire\Pengajuan;

use Livewire\Component;
use App\Models\Pengajuan;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Index extends Component
{
   use WithPagination;
    public $search = '';

    public function render()
    {
        $data = auth()->user()->hasRole('admin') ?
         Pengajuan::paginate(15) :
         Pengajuan::where('nip',auth()->user()->nip)->paginate(15)
         ;

        return view('livewire.pengajuan.index',['data' => $data]);
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
        $pegawai = Pengajuan::where('id',$data['id'])->first();
        $pegawai->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
