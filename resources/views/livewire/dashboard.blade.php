<?php

use Livewire\Volt\Component;
use App\Models\NomorSurat;
use RealRashid\SweetAlert\Facades\Alert;

new class extends Component {
    public $last = 0;
    public int $totalHari = 0;
    public int $totalBulan = 0;
    public int $totalTahun = 0;

    public function mount() 
    {
       
        $this->last = NomorSurat::whereYear('created_at',date('Y'))->max('nomor') ? : '0';
        $this->totalHari = NomorSurat::whereDate('created_at',date('Y-m-d'))->count();
        $this->totalBulan = NomorSurat::whereYear('created_at',date('Y'))->whereMonth('created_at',date('m'))->count();
        $this->totalTahun = NomorSurat::whereYear('created_at',date('Y'))->count();
       // $this->dispatchSelf('alert');
    } 

    #[On('showT')]
    function showT() {
         Alert::success('Success Title', 'Success Message');
    }
}; ?>

@section('title', __('Dashboard'))
<div class="row g-4">
  <div class="col-md" wire:click="showT">
    <div class="card text-bg-success">
      <div class="card-body">
        <h5 class="card-title text-white">{{ $last }}</h5>
        <p class="card-text">Nomor Terakhir</p>
        
      </div>
    </div>
    
  </div>
  
  <div class="col-md">
    <div class="card text-bg-primary">
      <div class="card-body">
        <h5 class="card-title text-white">{{ $totalHari }}</h5>
        <p class="card-text">Nomor Keluar Hari Ini</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card text-bg-info">
      <div class="card-body">
        <h5 class="card-title text-white">{{ $totalBulan }}</h5>
        <p class="card-text">Nomor Keluar Bulan Ini</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card text-bg-white">
      <div class="card-body">
        <h5 class="card-title text-black">{{ $totalTahun }}</h5>
        <p class="card-text">Total Keluar Tahun Ini</p>
      </div>
    </div>
  </div>
  
  <div class="col-lg-12 row gy-2">
<div class="col-md">
  <div class="card shadow-none bg-label-white">
    <div class="card-body text-black">
      <h5 class="card-title text-black">0</h5>
      <p class="card-text">
        Mengajukan Permintaan Nomor
      </p>
    </div>
  </div>
</div>

<div class="col-md">
  <div class="card shadow-none bg-label-secondary">
    <div class="card-body text-black">
      <h5 class="card-title text-black">0</h5>
      <p class="card-text">
        Pengajuan Diterima
      </p>
    </div>
  </div>
</div>
  </div>

</div>
<!-- <div class="row g-4">
    <div class="col-lg-4">
        <div class="overflow-hidden rounded border" style="aspect-ratio: 16/6;">
        <x-placeholder-pattern class="h-100 w-100" style="stroke: color-mix(in oklab, oklch(.21 .034 264.665) 20%, transparent);" />
        </div>
    </div>
    <div class="col-lg-4">
        <div class="overflow-hidden rounded border" style="aspect-ratio: 16/6;">
        <x-placeholder-pattern class="h-100 w-100" style="stroke: color-mix(in oklab, oklch(.21 .034 264.665) 20%, transparent);" />
        </div>
    </div>
    <div class="col-lg-4">
        <div class="overflow-hidden rounded border" style="aspect-ratio: 16/6;">
        <x-placeholder-pattern class="h-100 w-100" style="stroke: color-mix(in oklab, oklch(.21 .034 264.665) 20%, transparent);" />
        </div>
    </div>
    <div class="col-lg-12">
        <div class="overflow-hidden rounded border" style="aspect-ratio: 16/6;">
        <x-placeholder-pattern class="h-100 w-100" style="stroke: color-mix(in oklab, oklch(.21 .034 264.665) 20%, transparent);" />
        </div>
    </div>
</div> -->

