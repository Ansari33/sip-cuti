@section('title', __('Berita Baru'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Edit Data Berita {{ $this->tipe }}</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="update">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Judul Berita</label>
          <div class="col-md-10">
            <input name="nama" wire:model="judul" class="form-control" type="text" value="" id="html5-text-input" required/>
          </div>
        </div>
        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Jenis</label>
          <div class="col-md-10">
              <select name="status" wire:model.live="tipe" required class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option >Pilihan Jenis</option>
                <option value="Pusat" @if($tipe == 'Pusat') selected @endif>Pusat</option>
                <option value="Wilayah" @if($tipe == 'Wilayah') selected @endif>Wilayah</option>
                <option value="Daerah" @if($tipe == 'Daerah') selected @endif>Daerah</option>
              </select>
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Tanggal</label>
          <div class="col-md-10">
            <input name="nip" wire:model="tanggal" required class="form-control" type="date"  />
          </div>
        </div>
       
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">@if($tipe == 'Daerah') Isi @else Link @endif</label>
          
          <div class="col-md-10 ">
            @if($tipe == 'Daerah')
              <livewire:jodit-text-editor wire:model.live="isi" />
            @else  
              <input name="nip" wire:model="link"  class="form-control"   /> 
            @endif 
           <!-- Ini Update -->
          </div>
        </div>
       
        @if($tipe == 'Daerah')
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Gambar</label>
          <div class="col-md-10">
            <input name="file" wire:model="foto"  class="form-control" type="file"  />
          </div>
        </div>
        
        <button type="submit" class="btn me-2 btn-success" >Simpan</button>
        
        @else  
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Link Gambar</label>
          <div class="col-md-10">
            <input name="file" wire:model="link_gambar" class="form-control" type="text"  />
          </div>
        </div>
        <button type="submit" class="btn me-2 btn-success">Simpan</button>
        @endif
        
        
      </form>
    </div>
</div>




