<?php

namespace App\Livewire\Inventory;

use App\Models\Inventories;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Edit extends Component
{

    public $nama;
    public $harga;
    public $tanggal_pembelian;
    public $pembeli;
    public $foto;
    public $nota;
    public $data;

    public function render()
    {
        return view('livewire.inventory.edit');
    }

    public function mount($id){
         $this->data = Inventories::find($id);
         $this->nama = $this->data->nama;
         $this->harga = $this->data->harga;
         $this->tanggal_pembelian = $this->data->tanggal_pembelian;
         $this->pembeli = $this->data->pembeli;
         $this->foto = $this->data->foto;
         $this->nota = $this->data->nota;
    }

    public function update(){
        $inventori = Inventories::find($this->data->id);
        $inventori->nama = $this->nama;
        $inventori->harga = $this->harga;
        $inventori->tanggal_pembelian = $this->tanggal_pembelian;
        $inventori->pembeli = $this->pembeli;
        $inventori->foto = $this->foto;
        $inventori->nota = $this->nota;
        $inventori->save();

        LivewireAlert::title('Data Berhasil Diupdate!')
            ->success()
            ->show();
        // session()->flash('success','Data Berhasil Diupdate!');
        return $this->redirect('/inventories',navigate:true);
    }
}
