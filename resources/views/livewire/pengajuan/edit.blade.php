@section('title', __('Edit Cuti'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Edit Data Cuti</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="update">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nama</label>
          <div class="col-md-10">
            <select name="pengaju" wire:model="pengaju" require class="form-select " aria-label="Default select example">
                <option >Pilihan Pengaju</option>
                @foreach($pegawai as $pgw => $pg)
                <option   value="{{ $pg['id'] }}" {{ $pg['selected'] }}>{{ $pg['nama'] }}</option>
                @endforeach
              </select>
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Jenis Cuti</label>
          <div class="col-md-10">
            <select name="pengaju" wire:model="jenis" require class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option >Pilihan Cuti</option>
                @foreach($cutis as $cts => $ct)
                <option value="{{ $ct['id'] }}" {{ $ct['selected'] }}>{{ $ct['jenis'] }}</option>
                @endforeach
              </select>
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Lama Cuti</label>
          <div class="col-md-10">
            <input name="unit_kerja" wire:model="jumlah" class="form-control" type="number" value="" id="html5-tel-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal Pengajuan</label>
          <div class="col-md-10">
            <input name="pangkat_gol" wire:model="tanggal_pengajuan" class="form-control" type="date" value="" id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal Mulai</label>
          <div class="col-md-10">
            <input name="pangkat_gol" wire:model="tanggal_mulai" class="form-control" type="date" value="" id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Tanggal Berakhir</label>
          <div class="col-md-10">
            <input name="jabatan" wire:model="tanggal_berakhir" class="form-control" type="date" value=""  />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Alasan</label>
          <div class="col-md-10">
            <input name="unit_kerja" wire:model="alasan" class="form-control" type="text" value="" id="html5-tel-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Tahun</label>
          <div class="col-md-10">
            <input name="unit_kerja" wire:model="tahun" class="form-control" type="number" value="" id="html5-tel-input" />
          </div>
        </div>
        
        <button type="submit" class="btn me-2 btn-warning">Update</button>
      </form>
    </div>
</div>
