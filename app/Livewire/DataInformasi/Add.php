<?php

namespace App\Livewire\DataInformasi;

use Livewire\Component;
use App\Models\DataInformasi;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;



class Add extends Component
{
    public $nama;
    public $link;

    public function render()
    {
        return view('livewire.data-informasi.add');
    }

    public function submit(){
        DataInformasi::create([
            'nama' => $this->nama,
            'link' => $this->link
        ]);

        LivewireAlert::title('Data Berhasil Disimpan!')
            ->success()
            ->show();
        return $this->redirect('/data-informasi', navigate:true);
    }
}
