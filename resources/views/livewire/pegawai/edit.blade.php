@section('title', __('Edit Data Pegawai'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Update Data Pegawai</h5>
        @if($gambar)<img src="{{ $gambar->temporaryUrl() }}" width="60px" alt=""> @endif
    </div>
    <div class="card p-4"> 
      <form  wire:submit.prevent="update">
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Foto</label>
          <div class="col-md-10">
            <input name="nama" wire:model="gambar" class="form-control" type="file"  />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nama</label>
          <div class="col-md-10">
            <input name="nama" wire:model="nama" class="form-control" type="text" value="{{ $data['nama'] }}" id="html5-text-input" />
          </div>
        </div>

        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">NIP</label>
          <div class="col-md-10">
            <input name="nip" wire:model="nip" class="form-control"  value="{{ $data['nip'] }}" id="html5-search-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Pangkat</label>
          <div class="col-md-10">
            <input class="form-control" wire:model="pangkat" type="text" value="{{$data['pangkat_gol']}}" id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Jabatan</label>
          <div class="col-md-10">
            <input class="form-control" type="text" wire:model="jabatan" value="{{ $data['jabatan'] }}" id="html5-url-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Unit Kerja</label>
          <div class="col-md-10">
            <input class="form-control" type="text" wire:model="unit_kerja" value="{{ $data['unit_kerja'] }}" id="html5-tel-input" />
          </div>
        </div>
       
        <button type="submit" class="btn  me-2 btn-warning">Update</button>
      </form>
    </div>
</div>
