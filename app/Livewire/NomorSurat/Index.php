<?php

namespace App\Livewire\NomorSurat;

use Livewire\Component;
use App\Models\NomorSurat;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        $data = NomorSurat::with(['pengajuan'])
        ->where('nomor', 'like', '%' . $this->search . '%')
        ->paginate(15);
        return view('livewire.nomor-surat.index',compact('data'));
    }

    public function searchData()
    {
        $this->resetPage();
    }
}
