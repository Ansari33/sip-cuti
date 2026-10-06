<?php

namespace App\Livewire\Permintaan;

use App\Events\PengajuanNomor;
use Livewire\Component;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use DB;
use App\Models\Permintaan;
use App\Models\NomorSurat;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Auth;
use Spatie\Permission\Models\Role;

class Add extends Component
{
    use WithFileUploads;

    public  $nomor = '';
    public $perihal = '';
    public $tanggal = '';
    public $pengaju = '';
    public $status = '';

    public $kode = '';
    public $ruangan = '';
    public $file;
    public function render()
    {
        $pegawai = Pegawai::select(['nama', 'nip'])->get();
        return view('livewire.permintaan.add', compact('pegawai'));
    }

    public function submit(Request $request)
    {
        $data = [];
        $pengaju = auth()->user()->hasRole('admin') ? $this->pengaju : Auth::user()->nip;
        $status = auth()->user()->hasRole('admin') ? $this->status : 'Mengajukan';
        // Toaster::success('User created!'); //

        $this->nomor = $this->kode.'(nomor)'.$this->ruangan;
        try {
            DB::beginTransaction();
            $data = Permintaan::create([
                'nomor'   => $this->nomor,
                'perihal' => $this->perihal,
                'tanggal' => $this->tanggal,
                'pengaju' => $pengaju,
                'status'  => $status

            ]);
            if ($status == 'Diterima') {
                if (!$this->cekNomorPengajuan($data->id)) {
                    $this->generateNomor($data->id);
                }
            }
            // $this->file->store('photos',);
            DB::commit();
            LivewireAlert::title('Pengajuan Berhasil Dibuat!')
                ->success()
                ->show();
            event(new PengajuanNomor(auth()->user()->name.' Mengajukan Permintaan Nomor'));  
            //session()->flash('success', 'Pengajuan Berhasil Dibuat');
            return $this->redirectIntended(route('permintaan', absolute: false), navigate: true);
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return $this->redirect('/permintaan/add', navigate: true);
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

    public function brod() {
        event(new PengajuanNomor(auth()->user()->name.' Mengajukan Permintaan Nomor'));
    }

    // #[On('post-created')]
    // public function showT()
    // {
    //     Alert::success('Success Title', 'Success Message');
    // }
}
