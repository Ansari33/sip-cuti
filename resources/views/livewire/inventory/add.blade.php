@section('title', __('Permintaan Baru'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Tambah Data Inventori</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="submit">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nama</label>
          <div class="col-md-10">
            <input name="nama" wire:model="nama" class="form-control" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Harga</label>
          <div class="col-md-10">
            <input name="nip" wire:model="harga" class="form-control" type="number" value="" id="html5-search-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal Pembelian</label>
          <div class="col-md-10">
            <input name="pangkat_gol" wire:model="tanggal_pembelian" class="form-control" type="date" value="" id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Pembelian</label>
          <div class="col-md-10">
            <input name="jabatan" wire:model="pembeli" class="form-control" type="text" value=""  />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Foto Barang</label>
          <div class="col-md-10">
            <input name="unit_kerja" wire:model="foto" class="form-control" type="file" value="" id="html5-tel-input" />
          </div>
        </div>

        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Nota Barang</label>
          <div class="col-md-10">
            <input name="unit_kerja" wire:model="nota" class="form-control" type="file" value="" id="html5-tel-input" />
          </div>
        </div>
        
        <button type="submit" class="btn me-2 btn-success">Simpan</button>
      </form>
    </div>
</div>
