<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{
    public $search = '';
    public $berita;
    use WithPagination;
    public function render()
    {
        $data = Berita::where('judul','like','%'.$this->search.'%')->paginate(15);
        return view('livewire.berita.index', compact('data'));
    }

    public function searchData(){
       $this->resetPage();
    }

     public function confirmDelete($nama)
    {
        LivewireAlert::title('Hapus Berita ' . $nama . '?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['judul' => $nama])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        Berita::where('judul',$data['judul'])->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
