@section('title', __('Laporan Kinerja Baru'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Detail Kinerja</h5>
    </div>
    <div class="card p-4">
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif 
      <form wire:submit.prevent="submit">
        @csrf
        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Kegiatan</label>
          <div class="col-md-10">
              <select  wire:model="kegiatan" require class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected>Pilihan Kegiatan</option>
                @foreach($tugas as $tgs => $tg)
                <option value="{{ $tg->kegiatan }}">{{ $tg->kegiatan }}</option>
                @endforeach
              </select>
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Uraian Kegiatan</label>
          <div class="col-md-10">
            <input  name="nomor" wire:model="uraian_kegiatan" class="form-control" type="text"  id="html5-text-input" />
          </div>
        </div>
        
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal</label>
          <div class="col-md-10">
            <input name="tanggal" wire:model="tanggal" require class="form-control" type="date"  id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Volume</label>
          <div class="col-md-10">
            <input  wire:model="volume" require class="form-control" placeholder="Perihal"  />
          </div>
        </div>
        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Bulan</label>
          <div class="col-md-10">
              <select name="pengaju" wire:model="bulan" require class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected>Pilihan Bulan</option>
                <option value="1" >Januari</option>
                <option value="2" >Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5" >Mei</option>
                <option value="6" >Juni</option>
                <option value="7" >Juli</option>
                <option value="8" >Agustus</option>
                <option value="9" >September</option>
                <option value="10" >Oktober</option>
                <option value="11" >November</option>
                <option value="12" >Desember</option>
              </select>
          </div>
        </div>
       <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Tahun</label>
          <div class="col-md-10">
            <input  wire:model="tahun" require class="form-control"   type="number"  />
          </div>
        </div>
        <button type="submit" class="btn  me-2 btn-primary" >Simpan </button>
      </form>
      
    </div>
</div>
