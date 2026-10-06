<?php

namespace App\Livewire\Permintaan;

use Livewire\Component;
use App\Models\Permintaan;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        
         $data = Permintaan::with(['pegawai'])
        ->where(function ($query) { // This starts a grouped set of OR conditions
                $query->where('nomor', 'like', '%' . $this->search . '%')
                    ->orWhere('perihal', 'like', '%' . $this->search . '%');
            })
        ->orderBy('tanggal','desc')
        ->paginate(15);
        if (!(auth()->user()->hasRole('admin'))) {
            $data = Permintaan::with(['pegawai'])
            ->where('pengaju',auth()->user()->nip)
            ->where(function ($query) { // This starts a grouped set of OR conditions
                  $query->where('nomor', 'like', '%' . $this->search . '%')
                        ->orWhere('perihal', 'like', '%' . $this->search . '%');
              })
            ->orderBy('tanggal','desc')
            ->paginate(15);
        }    
        return view('livewire.permintaan.index', compact('data'));
    }

    public function searchData()
    {
        $this->resetPage();
    }

    public function confirmDelete($nomor)
    {
        LivewireAlert::title('Hapus Pengajuan ' . $nomor . '?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['nomor' => $nomor])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        $data = Permintaan::where('nomor', $data['nomor'])->first();
        $data->nomorSurat()->delete();
        $data->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
