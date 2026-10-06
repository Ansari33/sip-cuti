<?php

namespace App\Livewire\Inventory;

use App\Models\Inventories;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;


class Add extends Component
{
    public $nama;
    public $harga;
    public $tanggal_pembelian;
    public $pembeli;
    public $foto;
    public $nota;

    public function render()
    {
        return view('livewire.inventory.add');
    }

    public function submit(){
        Inventories::create([
            'nama'              => $this->nama,
            'harga'             => $this->harga,
            'tanggal_pembelian' => $this->tanggal_pembelian,
            'pembeli'           => $this->pembeli,
            'foto'              => '',
            'nota'              => '',
        ]);
        LivewireAlert::title('Data Berhasil Ditambahkan!')
                ->success()
                ->show();
        //session()->flash('success','Data Pegawai Berhasil Ditambah!');
        return $this->redirect('/inventories',navigate:true);
    }
}
