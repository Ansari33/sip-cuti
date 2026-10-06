<?php

namespace App\Exports;

use App\Models\LaporanKinerja;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LaporanKinerjaExport implements FromCollection, WithHeadings
{
    public $bulan;
    public $tahun;

    public function __construct(int $bulan,int $tahun)
    {
        $this->bulan = $bulan;
        $this->tahun = $tahun;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LaporanKinerja::select(['tanggal','kegiatan','uraian_kegiatan','volume'])
        ->where('bulan',$this->bulan)
        ->where('tahun',$this->tahun)
        ->where('nip',auth()->user()->nip)
        ->get();
    }

    public function headings(): array
    {
        return [
            'Tanggal',
            'Kegiatan',
            'Uraian Kegiatan',
            'Volume'
        ];
    }
}
