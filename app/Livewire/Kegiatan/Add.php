<?php

namespace App\Livewire\Kegiatan;

use Livewire\Component;
use App\Models\Kegiatan;
use DB;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;


class Add extends Component
{
    public $nama;
    public $jadwal;
    public $facebook;
    public $instagram;
    public $berita;
    public $arsip;
    public $status;

    public function render()
    {
        return view('livewire.kegiatan.add');
    }

    public function submit()
    {
        DB::beginTransaction();
        try {

            Kegiatan::create([
                'nama'      => $this->nama,
                'jadwal'    => $this->jadwal,
                'facebook'  => $this->facebook,
                'instagram' => $this->instagram,
                'berita'    => $this->berita,
                'arsip'     => $this->arsip,
                'status'    => $this->status,
            ]);

            LivewireAlert::title('Kegiatan Berhasil Ditambahkan!')
            ->success()
            ->show();

            DB::commit();
            return $this->redirect('/kegiatan', navigate: true);
        } catch (\Excepion $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return $this->redirect('/kegiatan/add', navigate: true);
        }
    }
}
