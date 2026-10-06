@section('title', __('Ummat Baru'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Tambah Data Rumah Ibadah</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="submit">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Kecamatan</label>
          <div class="col-md-10">
            <input name="nama" wire:model="kecamatan" class="form-control" type="text" value="" id="html5-text-input" />
          </div>
        </div>
       
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Mesjid</label>
          <div class="col-md-10">
            <input name="islam" wire:model="islam" class="form-control" type="number"  />
          </div>
        </div>

        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Gereja Kristen</label>
          <div class="col-md-10">
            <input name="kristen" wire:model="kristen" class="form-control" type="number"  />
          </div>
        </div>

        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Gereja Katolik</label>
          <div class="col-md-10">
            <input name="katolik" wire:model="katolik" class="form-control" type="number"  />
          </div>
        </div>  

        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Pura</label>
          <div class="col-md-10">
            <input name="hindu" wire:model="hindu" class="form-control" type="number"  />
          </div>    
        </div>

        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Wihara</label>
          <div class="col-md-10">
            <input name="buddha" wire:model="buddha" class="form-control" type="number"  />
          </div>
        </div>

        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Klenteng</label>
          <div class="col-md-10">
            <input name="konghucu" wire:model="konghucu" class="form-control" type="number"  />
          </div>
        </div>

        <button type="submit" class="btn me-2 btn-success"  >Simpan</button>
      </form>
    </div>
</div>

