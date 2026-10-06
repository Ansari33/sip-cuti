<?php

namespace App\Livewire\LandingSet;

use Livewire\Component;
use App\Models\LandingSet;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Edit extends Component
{
    use WithFileUploads;

    public $namaFile;
    public $elemen;
    public $namaElemen;
    public $id;

    public function render()
    {
        return view('livewire.landing-set.edit');
    }

    public function mount($id)
    {
        // Fetch the data for the given ID and populate the component's properties
        $landingSet = LandingSet::findOrFail($id);
        $this->namaFile = $landingSet->file;
        $this->elemen = null;
        $this->namaElemen = $landingSet->elemen;
        $this->id = $id;


    }

    public function update()
    {
       

        $landingSet = LandingSet::findOrFail($this->id);
        
        if ($this->elemen) {
           ($this->elemen)->storePubliclyAs('/gambar', $this->namaElemen . '.' . $this->elemen->extension());
           $this->namaFile = $this->namaElemen . '.' . $this->elemen->extension();
        }

        // $namaFile = $landingSet->file ? $this->namaElemen . '.' . $this->elemen->extension() : $this->namaElemen;
        // ($this->elemen) ?
        //  : 
        // null;
        LivewireAlert::title('Elemen Berhasil Diupdate!')
        ->success()
        ->show(); 
        $landingSet->file = $this->namaFile;
        $landingSet->save();

        return $this->redirect('/landing-set', navigate: true); 
    }
}
