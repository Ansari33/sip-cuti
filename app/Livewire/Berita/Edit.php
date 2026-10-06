<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use DB;

class Edit extends Component
{
    use WithFileUploads;
    public $judul, $foto, $tanggal, $isi, $id, $nama_gambar, $tipe, $link, $link_gambar; 

    public function render()
    {
        return view('livewire.berita.edit');
    }

    public function mount($id)
    {
        $berita = Berita::findOrFail($id);
        $this->judul = $berita->judul;
        $this->nama_gambar = $berita->gambar;
        $this->tanggal = $berita->tanggal;
        $this->isi = $berita->isi;
        $this->id = $berita->id;
        $this->tipe = $berita->tipe;
        $this->link = $berita->link;
        $this->link_gambar = $berita->link_gambar;
    }

    public function update()
    {
        $this->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'isi' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $konten = Berita::findOrFail($this->id);
            $konten->judul = $this->judul;
            $konten->tanggal = $this->tanggal;
            $konten->isi = $this->isi;
            $konten->tipe = $this->tipe;
            $konten->link = $this->link;
            $konten->link_gambar = $this->link_gambar;
            $konten->save();

            ($this->foto) ?
            ($this->foto)->storePubliclyAs('/gambar', $this->nama_gambar) : 
            null;
            LivewireAlert::title('Berita Berhasil Diupdate!')
            ->success()
            ->show();    

            DB::commit();
        
            return $this->redirect('/publikasi/berita', navigate: true);  
        } catch (\Exception $e) {
            DB::rollback();
            LivewireAlert::title('Gagal!')
            ->text($e->getMessage())
            ->warning()
            ->show();
            session()->flash('error', $e->getMessage());
            return redirect()->route('berita.edit', ['id' => $this->id]);
        }

        
    }
}
