<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;
use App\Models\Pegawai;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;


class Add extends Component
{
    public $nama;
    public $nip;
    public $pangkat;
    public $jabatan;
    public $unit_kerja;

    public function render()
    {
        return view('livewire.pegawai.add');
    }

    public function submit(){
        Pegawai::create([
            'nama'       => $this->nama,
            'nip'        => $this->nip,
            'pangkat_gol' => $this->pangkat,
            'jabatan'    => $this->jabatan,
            'unit_kerja' => $this->unit_kerja,
        ]);
        LivewireAlert::title('Pegawai Berhasil Ditambahkan!')
                ->success()
                ->show();
        //session()->flash('success','Data Pegawai Berhasil Ditambah!');
        return $this->redirect('/pegawai',navigate:true);
    }
}
