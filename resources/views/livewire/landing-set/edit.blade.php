@section('title', __('Edit Elemen'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Edit Elemen {{ $namaElemen }}</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="update">
        @csrf
        
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">File Konten</label>
          <div class="col-md-9">
            <input name="file" wire:model="elemen"  class="form-control" type="file"  />
          </div>
          
        </div>
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Preview</label>
          <div class="col-md-9">
            <img src="@if($namaElemen && !$elemen ) /gambar-file/{{ $namaFile }} @elseif($elemen) {{ $elemen->temporaryUrl() }} @endif" style="max-width: 100%; max-height: 500px;" alt="">
          </div>
        </div>
        <button type="submit" class="btn me-2 btn-success" >Simpan</button>
      </form>
    </div>
</div>

