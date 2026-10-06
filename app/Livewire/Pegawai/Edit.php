<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;
use App\Models\Pegawai;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $data;
    public $nama;
    public $nip;
    public $pangkat;
    public $jabatan;
    public $unit_kerja;
    public $gambar;

    public function render()
    {
        return view('livewire.pegawai.edit');
    }

    public function mount($id){
         $this->data = Pegawai::find($id);
         $this->nama = $this->data->nama;
         $this->nip = $this->data->nip;
         $this->pangkat = $this->data->pangkat_gol;
         $this->jabatan = $this->data->jabatan;
         $this->unit_kerja = $this->data->unit_kerja;
    }

    public function update(){
        $pegawai = Pegawai::find($this->data->id);
        $pegawai->nama = $this->nama;
        $pegawai->nip = $this->nip;
        $pegawai->pangkat_gol = $this->pangkat;
        $pegawai->jabatan = $this->jabatan;
        $pegawai->unit_kerja = $this->unit_kerja;
        $pegawai->save();

        LivewireAlert::title('Pegawai Berhasil Diupdate!')
            ->success()
            ->show();
        // session()->flash('success','Data Berhasil Diupdate!');
        return $this->redirect('/pegawai',navigate:true);
    }
}
