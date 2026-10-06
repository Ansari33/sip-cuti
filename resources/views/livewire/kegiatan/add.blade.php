@section('title', __('Kegiatan Baru'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Tambah Data Kegiatan</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="submit">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nama Kegiatan</label>
          <div class="col-md-10">
            <input name="nama" wire:model="nama" class="form-control" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Jadwal</label>
          <div class="col-md-10">
            <input name="nip" wire:model="jadwal"  class="form-control" type="datetime-local"  />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Link Facebook</label>
          <div class="col-md-10">
            <input name="pangkat_gol" wire:model="facebook" class="form-control" type="text" value="" id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Link Instagram</label>
          <div class="col-md-10">
            <input name="jabatan" wire:model="instagram" class="form-control" type="text"  />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Link Berita</label>
          <div class="col-md-10">
            <input name="jabatan" wire:model="berita" class="form-control" type="text"   />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Link Arsip</label>
          <div class="col-md-10">
            <input name="unit_kerja" wire:model="arsip" class="form-control" type="text" value="" id="html5-tel-input" />
          </div>
        </div>
        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Status</label>
          <div class="col-md-10">
              <select wire:model="status" class="form-select"  aria-label="Default select example">
                <option selected >Pilih Status</option>
                <option  value="Belum">Belum</option>
                <option value="Sudah">Sudah</option>
              </select>
          </div>
        </div>
        
        <button type="submit" class="btn me-2 btn-success">Simpan</button>
      </form>
    </div>
</div>

