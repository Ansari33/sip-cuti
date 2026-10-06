
@section('title', __('Edit Kegiatan'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Edit Data Kegiatan</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="update">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nama Kegiatan</label>
          <div class="col-md-10">
            <input value="{{ $data['nama'] }}" wire:model="nama" class="form-control" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Jadwal</label>
          <div class="col-md-10">
            <input value="{{ $data['jadwal'] }}" wire:model="jadwal"  class="form-control" type="datetime-local"  />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Link Facebook</label>
          <div class="col-md-10">
            <input value="{{ $data['facebook'] }}" wire:model="facebook" class="form-control" type="text" value="" id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Link Instagram</label>
          <div class="col-md-10">
            <input value="{{ $data['instagram'] }}" wire:model="instagram" class="form-control" type="text" value=""  />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Link Arsip</label>
          <div class="col-md-10">
            <input value="{{ $data['arsip'] }}" wire:model="arsip" class="form-control" type="text" value="" id="html5-tel-input" />
          </div>
        </div>
        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Status</label>
          <div class="col-md-10">
              <select name="status" wire:model="status" class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option @if($data['status'] == 'Belum') selected @endif  value="Belum">Belum</option>
                <option @if($data['status'] == 'Sudah') selected @endif value="Sudah">Sudah</option>
              </select>
          </div>
        </div>
        
        <button type="submit" class="btn me-2 btn-success">Update</button>
      </form>
    </div>
</div>

