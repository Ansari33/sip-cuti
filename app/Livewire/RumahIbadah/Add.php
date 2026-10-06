<?php

namespace App\Livewire\RumahIbadah;

use Livewire\Component;
use App\Models\RumahIbadah;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;



class Add extends Component
{

        public $kecamatan;
        public $islam;
        public $kristen;
        public $katolik;    
        public $hindu;
        public $buddha;
        public $konghucu;
        public $kepercayaan = 0;
    
    public function render()
    {
        return view('livewire.rumah-ibadah.add');
    }

    public function submit()
    {
        try {
             $this->validate([
            'kecamatan' => 'required',
            'islam' => 'required|numeric',
            'kristen' => 'required|numeric',
            'katolik' => 'required|numeric',
            'hindu' => 'required|numeric',
            'buddha' => 'required|numeric',
            'konghucu' => 'required|numeric',
           // 'kepercayaan' => 'required|numeric',
        ]);

        RumahIbadah::create([
            'kecamatan' => $this->kecamatan,
            'islam' => $this->islam,
            'kristen' => $this->kristen,
            'katolik' => $this->katolik,
            'hindu' => $this->hindu,
            'buddha' => $this->buddha,
            'konghucu' => $this->konghucu,
            'kepercayaan' => $this->kepercayaan,
        ]);

        LivewireAlert::title('Data Berhasil Disimpan!')
            ->success()
            ->show();

        return $this->redirect('/publikasi/konten', navigate: true);
        } catch (\Exception $th) {
            LivewireAlert::title('Gagal Menyimpan Data!')
                ->text($th->getMessage())
                ->error()
                ->show();
        }
       
    }
}
