<?php

namespace App\Livewire\Kegiatan;

use Livewire\Component;
use App\Models\Kegiatan;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;


class Edit extends Component
{
    public $data;
    public $nama;
    public $jadwal;
    public $facebook;
    public $instagram;
    public $arsip;
    public $status;

    public function render()
    {
        return view('livewire.kegiatan.edit');
    }

    public function mount($id){

        $this->data = Kegiatan::find($id);
        $this->nama = $this->data->nama;
        $this->jadwal = $this->data->jadwal;
        $this->facebook = $this->data->facebook;
        $this->instagram = $this->data->instagram;
        $this->arsip = $this->data->arsip;
        $this->status = $this->data->status;
    }

    public function update(){
        $data = Kegiatan::find($this->data->id);
        $data->nama = $this->nama;
        $data->jadwal = $this->jadwal;
        $data->facebook = $this->facebook;
        $data->instagram = $this->instagram;
        $data->arsip = $this->arsip;
        $data->status = $this->status;
        $data->save();
        LivewireAlert::title('Data Berhasil Diupdate!')
                    ->success()
                    ->show();
        //session()->flash('success','Kegiatan Diupdate!');
        return $this->redirect('/kegiatan', navigate:true);
    }
}
