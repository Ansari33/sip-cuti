@section('title', __('Import Pegawai'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Import Data Pegawai</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="import">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">File Excel</label>
          <div class="col-md-10">
            <input name="fileImport" wire:model="fileImport" class="form-control" type="file" value="" id="html5-text-input" />
            <div wire:loading wire:target="fileImport">Uploading...</div>
           / <div wire:succes wire:target="fileImport">Succes</div>
          </div>
        </div>
        
        
        <button type="submit" class="btn me-2 btn-success">Upload</button>
      </form>
    </div>
</div>
