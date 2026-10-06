@section('title', __('Data Baru'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Tambah Informasi Data </h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="submit">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nama Data</label>
          <div class="col-md-10">
            <input name="nama" wire:model="nama" class="form-control" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Link Arsip</label>
          <div class="col-md-10">
            <input  wire:model="link" class="form-control" type="text" value="" id="html5-tel-input" />
          </div>
        </div>
        
        <button type="submit" class="btn me-2 btn-success">Simpan</button>
      </form>
    </div>
</div>

