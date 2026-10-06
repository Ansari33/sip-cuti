<?php

namespace App\Livewire\DataInformasi;

use Livewire\Component;
use App\Models\DataInformasi;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;


class Edit extends Component
{
    public $data;
    public $nama;
    public $link;

    public function render()
    {
        return view('livewire.data-informasi.edit');
    }

    public function mount($id){
        $this->data = DataInformasi::find($id);
        $this->nama = $this->data->nama;
        $this->link = $this->data->link;
    }

    public function update(){
        $data = DataInformasi::find($this->data->id);
        $data->nama = $this->nama;
        $data->link = $this->link;
        $data->save();
        LivewireAlert::title('Data Berhasil Diupdate!')
            ->success()
            ->show();
        return $this->redirect('/data-informasi', navigate:true);
    }
}
