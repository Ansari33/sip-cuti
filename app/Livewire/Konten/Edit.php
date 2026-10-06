<?php

namespace App\Livewire\Konten;

use Livewire\Component;
use App\Models\Konten;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use DB;

class Edit extends Component
{
    use WithFileUploads;
    public $judul, $foto, $tanggal, $deskripsi, $id, $nama_file; 

    public function render()
    {
        return view('livewire.konten.edit');
    }

    public function mount($id)
    {
        $konten = \App\Models\Konten::findOrFail($id);
        $this->judul = $konten->judul;
        $this->nama_file = $konten->file;
        $this->tanggal = $konten->tanggal;
        $this->deskripsi = $konten->deskripsi;
        $this->id = $konten->id;
    }

    public function update()
    {
        $this->validate([
            'judul' => 'required',
           // 'foto' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $konten = \App\Models\Konten::findOrFail($this->id);
            $konten->judul = $this->judul;
            $konten->file = $this->nama_file;
            $konten->tanggal = $this->tanggal;
            $konten->deskripsi = $this->deskripsi;
            $konten->save();

            ($this->foto) ?
            ($this->foto)->storePubliclyAs('/gambar', $this->nama_file) : 
            null;
            LivewireAlert::title('Konten Berhasil Diupdate!')
            ->success()
            ->show();    

            DB::commit();
        
            return $this->redirect('/publikasi/konten', navigate: true);   
        } catch (\Exception $e) {
            DB::rollback();
            LivewireAlert::title('Gagal!')
            ->text($e->getMessage())
            ->warning()
            ->show();
            session()->flash('error', $e->getMessage());
           // return $this->redirect('/publikasi/konten/edit/' . $this->id, navigate: true);
        }

        
    }
}
