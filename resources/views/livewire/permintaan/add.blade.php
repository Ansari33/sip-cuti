@section('title', __('Permintaan Baru'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Permintaan Nomor Surat</h5>
        <!-- <button type="button" class="btn  me-2 btn-primary" wire:click="brod" >Lempar </button> -->
    </div>
    <div class="card p-4"> 
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif 
      <form wire:submit.prevent="submit">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nomor</label>
          <div class="col-md-3">
            <input  name="kode" wire:model="kode" class="form-control" type="text" placeholder="Kode(B-)" />
          </div>
          <div class="col-md-7">
            <input  name="ruangan" wire:model="ruangan" class="form-control" type="text" placeholder="Ruangan(/K.K/00/)" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Perihal</label>
          <div class="col-md-10">
            <input name="perihal" wire:model="perihal" require class="form-control" placeholder="Perihal" type="text" value="" id="html5-search-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal</label>
          <div class="col-md-10">
            <input name="tanggal" wire:model="tanggal" require class="form-control" type="date"  id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">File</label>
          <div class="col-md-10">
            <input name="tanggal" wire:model="file" require class="form-control" type="file" />
          </div>
        </div>
        @if(auth()->user()->hasRole('admin'))
        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Pengaju</label>
          <div class="col-md-10">
              <select name="pengaju" wire:model="pengaju" require class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected>Pilihan Pengaju</option>
                @foreach($pegawai as $pgw => $pg)
                <option value="{{ $pg->nip }}">{{ $pg->nama }}</option>
                @endforeach
              </select>
          </div>
        </div>

        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Status</label>
          <div class="col-md-10">
              <select name="status" wire:model="status" require class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected>Pilihan Status</option>
                <option value="Mengajukan">Mengajukan</option>
                <option value="Diterima">Berhasil</option>
                <option value="Ditolak">Ditolak</option>
              </select>
          </div>
        </div>
        @endif

  
        <button type="submit" class="btn  me-2 btn-primary" >Ajukan </button>
      </form>
      
    </div>
</div>
