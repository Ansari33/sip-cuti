<?php

namespace App\Exports;

use App\Models\Pengajuan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PengajuanExport implements FromCollection, WithHeadings
{
    public $bulan;
    public $tahun;

    public function __construct()
    {
       # $this->bulan = $bulan;
        #$this->tahun = $tahun;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        if(auth()->user()->hasRole('admin')){
        return 
        Pengajuan::select(['nama','nip','jenis_cuti','tanggal_pengajuan','tanggal_mulai','tanggal_berakhir'])
        ->get(); 
        }
        return Pengajuan::select(['nama','nip','jenis_cuti','tanggal_pengajuan','tanggal_mulai','tanggal_berakhir'])
        ->where('nip',auth()->user()->nip)
        ->get();
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Nip',
            'Jenis Cuti',
            'Tanggal Pengajuan',
            'Tanggal Mulai',
            'Tanggal Berakhir'
        ];
    }
}
