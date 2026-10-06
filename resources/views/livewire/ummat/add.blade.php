@section('title', __('Ummat Baru'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Tambah Data Ummat</h5>
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
          <label for="html5-email-input" class="col-md-2 col-form-label">Ummat Islam</label>
          <div class="col-md-10">
            <input name="islam" wire:model="islam" class="form-control" type="number"  />
          </div>
        </div>

        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Ummat Kristen</label>
          <div class="col-md-10">
            <input name="kristen" wire:model="kristen" class="form-control" type="number"  />
          </div>
        </div>

        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Ummat Katolik</label>
          <div class="col-md-10">
            <input name="katolik" wire:model="katolik" class="form-control" type="number"  />
          </div>
        </div>  

        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Ummat Hindu</label>
          <div class="col-md-10">
            <input name="hindu" wire:model="hindu" class="form-control" type="number"  />
          </div>    
        </div>

        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Ummat Buddha</label>
          <div class="col-md-10">
            <input name="buddha" wire:model="buddha" class="form-control" type="number"  />
          </div>
        </div>

        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Ummat Konghucu</label>
          <div class="col-md-10">
            <input name="konghucu" wire:model="konghucu" class="form-control" type="number"  />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Ummat Kepercayaan</label>
          <div class="col-md-10">
            <input name="kepercayaan" wire:model="kepercayaan" class="form-control" type="number"  />
          </div>
        </div>

        
        
        <button type="submit" class="btn me-2 btn-success"  >Simpan</button>
      </form>
    </div>
</div>

