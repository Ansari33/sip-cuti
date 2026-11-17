<?php

namespace App\Livewire\Pengajuan;

use Livewire\Component;
use App\Models\Pengajuan;
use App\Models\Pegawai;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use App\Exports\PengajuanExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class Index extends Component
{
   use WithPagination;
    public $search = '';

    public function render()
    {
        $data = auth()->user()->hasRole('admin') ?
         Pengajuan::where('nama','like','%'.$this->search.'%')->paginate(15) :
         Pengajuan::where('nip',auth()->user()->nip)->paginate(15)
         ;

        return view('livewire.pengajuan.index',['data' => $data]);
    }

    public function searchData(){
        $this->resetPage();
        
    }

    public function confirmDelete($id)
    {
        LivewireAlert::title('Hapus Pengajuan Cuti?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['id' => $id])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        $pegawai = Pengajuan::where('id',$data['id'])->first();
        $pegawai->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }

    public function exportExcel(){
        return Excel::download(new PengajuanExport ,'ExportPengajuan'.date('Ymdhis').'.xlsx');
    }

    public function exportPdf()
    {
        $data = Pengajuan::get();
        $pegawai = Pegawai::find(1); 
        $pdf = Pdf::loadView('livewire.pengajuan.pdf', [],
        [
            'pegawai' => $pegawai,
            'data'=>$data,
        ]);
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'DaftarPengajuanCuti.pdf');
    }

    
}
