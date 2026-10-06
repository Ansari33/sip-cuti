<div>
    <div class="card mb-1">
        <h5 class="card-header">Ubah Permintaan Nomor Surat</h5>
    </div>
    <div class="card p-4">
      <div class="m-2">
          @if (session()->has('error'))
              <div class="alert alert-success">
                  {{ session('error') }}
              </div>
          @endif
      </div>
      <form method="POST"  wire:submit.prevent="update">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nomor</label>
          <div class="col-md-3">
            <input name="nomor" wire:model="kode" class="form-control" type="text"  />
          </div>
          <div class="col-md-7">
            <input name="nomor" wire:model="ruangan" class="form-control" type="text"  />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Pengaju</label>
          <div class="col-md-10">
            <input  class="form-control" type="text" value="{{ $data['pegawai']['nama'] }}" id="html5-text-input" disabled/>
            <input name="pengaju" wire:model="pengaju" class="form-control" type="hidden" value="{{ $data['pengaju'] }}" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Perihal</label>
          <div class="col-md-10">
            <input wire:model="perihal"  class="form-control" type="text" value="{{ $data['perihal'] }}" id="html5-text-input" />          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal  </label>
          <div class="col-md-10">
            <input name="tanggal" wire:model="tanggal" class="form-control" type="date" value="{{ ($data['tanggal']) }}"  id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">File</label>
          <div class="col-md-9">
            <input name="tanggal" wire:model="file" require class="form-control" type="file" />
          </div>
          <div class="col-md-1">
            <a class="btn btn-outline-info mt-1" href="http://" target="_blank" rel="noopener noreferrer">
              <i class='bx  bx-file'  ></i> 
            </a>
          </div>
        </div>
        @if(auth()->user()->hasRole('admin'))
        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Status</label>
            <div class="col-md-10">
                <select name="status" wire:model="status" class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                  <option @if($data["status"] == 'Mengajukan') selected @endif value="Mengajukan">Mengajukan</option>
                  <option @if($data["status"] == 'Diterima') selected @endif value="Diterima">Terima</option>
                  <option @if($data["status"] == 'Ditolak') selected @endif value="Ditolak">Tolak</option>
                </select>
            </div>
          </div>
        @endif
        <button type="submit" class="btn  me-2 btn-success">Simpan</button>
      </form>
    </div>
</div>
