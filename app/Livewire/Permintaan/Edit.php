<?php

namespace App\Livewire\Permintaan;

use Livewire\Component;
use App\Models\Permintaan;
use App\Models\NomorSurat;
use DB;
use Request;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Edit extends Component
{
    public $data = [];
    public $nomor = '';
    public $perihal = '';
    public $tanggal = '';
    public $pengaju = '';
    public $status = '';
    public $kode ='';
    public $ruangan ='';

    public function render()
    {
        return view('livewire.permintaan.edit');
    }

    public function mount($id)
    {
        $this->data = Permintaan::find($id);
        $this->nomor = $this->data->nomor;
        $this->perihal = $this->data->perihal;
        $this->tanggal = $this->data->tanggal;
        $this->pengaju = $this->data->pengaju;
        $this->status = $this->data->status;
        $this->kode   = explode('(nomor)',$this->nomor)[0];
        $this->ruangan   = count(explode('(nomor)',$this->nomor)) > 1 ? explode('(nomor)',$this->nomor)[1] : '';
    }

    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            $result = Permintaan::find($this->data->id);
            $result->perihal = $this->perihal;
            $result->pengaju = $this->pengaju;
            $result->status = $this->status;
            $result->nomor = $this->kode.'(nomor)'.$this->ruangan;
            if ($this->status == 'Diterima') {
                if (!$this->cekNomorPengajuan($this->data->id)) {
                    $this->generateNomor($this->data->id);
                }
            }
            $result->save();
            DB::commit();
            LivewireAlert::title('Data Berhasil Diupdate!')
                ->success()
                ->show();
            return $this->redirect('/permintaan', navigate: true);
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return $this->redirect('/permintaan');
        }
    }

    public function generateNomor($pengajuan)
    {
        $last = NomorSurat::whereYear('created_at', date('Y'))->max('nomor');
        $lastNomor = $last != 0 ? $last : 0;

        $data = NomorSurat::create([
            'pengajuan_id' => $pengajuan,
            'nomor'         => intval($lastNomor) + 1
        ]);

        return $data;
    }

    public function cekNomorPengajuan($pengajuan)
    {
        return NomorSurat::where('pengajuan_id', $pengajuan)->first();
    }
}
