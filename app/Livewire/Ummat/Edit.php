<?php

namespace App\Livewire\Ummat;

use Livewire\Component;
use App\Models\Ummat;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Edit extends Component
{

        public $kecamatan;
        public $islam;
        public $kristen;
        public $katolik;    
        public $hindu;
        public $buddha;
        public $konghucu;
        public $kepercayaan;
        public $id;

    public function render()
    {
        return view('livewire.ummat.edit');
    }

    public function mount($id)
    {
        $data = Ummat::findOrFail($id);
        $this->kecamatan = $data->kecamatan;
        $this->islam = $data->islam;
        $this->kristen = $data->kristen;
        $this->katolik = $data->katolik;
        $this->hindu = $data->hindu;
        $this->buddha = $data->buddha;
        $this->konghucu = $data->konghucu;
        $this->kepercayaan = $data->kepercayaan;
        $this->id = $id;
    }

    public function update()
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

        $data = Ummat::findOrFail($this->id);
        $data->update([
            'kecamatan' => $this->kecamatan,
            'islam' => $this->islam,
            'kristen' => $this->kristen,
            'katolik' => $this->katolik,
            'hindu' => $this->hindu,
            'buddha' => $this->buddha,
            'konghucu' => $this->konghucu,
            'kepercayaan' => $this->kepercayaan,
        ]);

        LivewireAlert::title('Data Berhasil Diupdate!')
            ->success()
            ->show();

        return $this->redirect('/data/ummat', navigate: true);
    }
}
