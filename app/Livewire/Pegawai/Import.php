<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;
use WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PegawaiImport;
use Livewire\Features\SupportFileUploads\WithFileUploads as SupportFileUploadsWithFileUploads;
use Livewire\WithFileUploads as LivewireWithFileUploads;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Import extends Component
{
    use LivewireWithFileUploads;
    use SupportFileUploadsWithFileUploads;
    public $fileImport;

    public function render()
    {
        return view('livewire.pegawai.import');
    }

    public function import(){
       // $array = Excel::toArray(new PegawaiImport, $this->fileImport);
       LivewireAlert::title('Mengupload File!')
            ->success()
            ->show();
       if($this->fileImport){
        LivewireAlert::title('Pegawai Berhasil Diupdate!')
            ->success()
            ->show();
            return  Excel::import(new PegawaiImport, $this->fileImport);
       }
       
    }
}
