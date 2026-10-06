<?php

namespace App\Livewire\Konten;

use Livewire\Component;
use App\Models\Konten;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{
    public $search = '';
    public $konten;

    use WithPagination;
    public function render()
    {
        $data = Konten::where('judul','like','%'.$this->search.'%')->paginate(15);
        return view('livewire.konten.index', compact('data'));
    }

    public function searchData(){
       $this->resetPage();
    }

     public function confirmDelete($nama)
    {
        LivewireAlert::title('Hapus Konten ' . $nama . '?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['judul' => $nama])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        Konten::where('judul',$data['judul'])->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
