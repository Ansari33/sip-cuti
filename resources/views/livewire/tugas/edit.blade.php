@section('title', __('Edit Tugas '))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Edit Tugas Kerja </h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="update">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Kegiatan</label>
          <div class="col-md-10">
            <input name="nama" wire:model="kegiatan" class="form-control" type="text"  />
          </div>
        </div>
        
        <button type="submit" class="btn me-2 btn-success">Simpan</button>
      </form>
    </div>
</div>

