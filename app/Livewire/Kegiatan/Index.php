<?php

namespace App\Livewire\Kegiatan;

use Livewire\Component;
use App\Models\Kegiatan;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $kegiatan;

    public function render()
    {
        $data = Kegiatan::where('nama','like','%'.$this->search.'%')->paginate(15);
        $tabel = [
            'model' => Kegiatan::class,
            'columns'=> [
                // 'id' => '#',
                'nama' => 'Nama',
                'jadwal' => 'Jadwal',
                'facebook' => 'Facebook',
                'instagram' => 'Instagram',
                'arsip' => 'Arsip',
                // 'jadwal' => 'Jadwal',
            ]
        ];
        return view('livewire.kegiatan.index',compact('data'));
    }


    public function searchData(){
       $this->resetPage();
    }

     public function confirmDelete($nama)
    {
        LivewireAlert::title('Hapus Kegiatan ' . $nama . '?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['nama' => $nama])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        Kegiatan::where('nama',$data['nama'])->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
