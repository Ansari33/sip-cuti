<?php

use Livewire\Volt\Component;
use App\Models\Pengajuan;
use RealRashid\SweetAlert\Facades\Alert;

new class extends Component {
    public $pengajuan = 0;
    public int $ditolak = 0;
    public int $diterima = 0;
    public int $total = 0;

    public function mount() 
    {
       $pengajuans = auth()->user()->hasRole('admin') ?
        Pengajuan::select(['status'])->get() :
        Pengajuan::select(['status','nip'])->where('nip',auth()->user()->nip)->get();
       
       $this->pengajuan = $pengajuans->where('status','Pengajuan')->count();
       $this->diterima = $pengajuans->where('status','Disetujui')->count();
       $this->ditolak = $pengajuans->where('status','Ditolak')->count();
       $this->total = $pengajuans->count();

    } 

    #[On('showT')]
    function showT() {
         Alert::success('Success Title', 'Success Message');
    }
}; ?>

@section('title', __('Dashboard'))
<div class="row g-4">
  <div class="col-md" wire:click="showT">
    <div class="card text-bg-warning">
      <div class="card-body">
        <h5 class="card-title text-white">{{ $pengajuan }}</h5>
        <p class="card-text">Pengajuan</p>
        
      </div>
    </div>
    
  </div>
  
  <div class="col-md">
    <div class="card text-bg-danger">
      <div class="card-body">
        <h5 class="card-title text-white">{{ $ditolak }}</h5>
        <p class="card-text">Ditolak</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card text-bg-success">
      <div class="card-body">
        <h5 class="card-title text-white">{{ $diterima }}</h5>
        <p class="card-text">Diterima</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card text-bg-info">
      <div class="card-body">
        <h5 class="card-title text-white">{{ $total }}</h5>
        <p class="card-text">Total Pengajuan</p>
      </div>
    </div>
  </div>
  
{{--    
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
--}}  

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

