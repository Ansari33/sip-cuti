<?php

namespace App\Livewire\Konten;

use Livewire\Component;
use App\Models\Konten;  
use DB;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage; 

class Add extends Component
{
    use WithFileUploads;
    
    public $judul;
    public $tanggal;
    public $deskripsi;
    public $foto;

    public function render()
    {
        return view('livewire.konten.add');
    }

    public function submit()
    {

        DB::beginTransaction();
        try {
            $gambar = str()->random(20);
            ($this->foto) ?
            ($this->foto)->storePubliclyAs('/gambar', $gambar . '.' . ($this->foto)->extension()) : 
            null;

            Konten::create([
                'judul'      => $this->judul,
                'tanggal'    => $this->tanggal,
                'deskripsi'  => $this->deskripsi,
                'file'       => $gambar . '.' . ($this->foto)->extension(),
            ]);

            LivewireAlert::title('Konten Berhasil Ditambahkan!')
            ->success()
            ->show();

            DB::commit();
            return $this->redirect('/publikasi/konten', navigate: true);
        } catch (\Exception $e) {
            DB::rollBack();
            LivewireAlert::title('Gagal!')
            ->text($e->getMessage())
            ->warning()
            ->show();
            session()->flash('error', $e->getMessage());
            return $this->redirect('/publikasi/konten/add', navigate: true);
        }
    }
}
