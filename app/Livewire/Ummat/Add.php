<?php

namespace App\Livewire\Ummat;

use Livewire\Component;
use App\Models\Ummat;
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
        public $kepercayaan;
    
    public function render()
    {
        return view('livewire.ummat.add');
    }

    public function submit()
    {
        $this->validate([
            'kecamatan' => 'required',
            'islam' => 'required|numeric',
            'kristen' => 'required|numeric',
            'katolik' => 'required|numeric',
            'hindu' => 'required|numeric',
            'buddha' => 'required|numeric',
            'konghucu' => 'required|numeric',
            'kepercayaan' => 'required|numeric',
        ]);

        Ummat::create([
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

        return $this->redirect('/data/ummat', navigate: true);
    }
}
