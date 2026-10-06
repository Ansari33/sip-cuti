@section('title', __('Edit Permintaan'))
<x-layouts.app :title="__('Edit Permintaan')">
    <div class="card mb-1">
        <h5 class="card-header">Permintaan Nomor Surat</h5>
    </div>
    <div class="card p-4">
        
      <form method="POST" action="{{ route('permintaan.update') }}" wire:submit.prevent="submit">
        @csrf
        <input name="id" class="form-control" type="hidden" value="{{ $data['id'] }}"  />
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nomor</label>
          <div class="col-md-10">
            <input name="nomor" class="form-control" type="text" value="{{ $data['nomor'] }}" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Pengaju</label>
          <div class="col-md-10">
            <input  class="form-control" type="text" value="{{ $data['pegawai']['nama'] }}" id="html5-text-input" />
            <input name="pengaju" class="form-control" type="hidden" value="{{ $data['pengaju'] }}" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Perihal</label>
          <div class="col-md-10">
            <input name="perihal" class="form-control" type="search" value="{{ $data['perihal'] }}" id="html5-search-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal  </label>
          <div class="col-md-10">
            <input name="tanggal" class="form-control" type="date" value="{{ ($data['tanggal']) }}"  id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Status</label>
            <div class="col-md-10">
                <select name="status" class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                  <option @if($data["status"] == 'Mengajukan') selected @endif value="Mengajukan">Mengajukan</option>
                  <option @if($data["status"] == 'Diterima') selected @endif value="Diterima">Terima</option>
                  <option @if($data["status"] == 'Ditolak') selected @endif value="Ditolak">Tolak</option>
                </select>
            </div>

          </div>
        
        <button type="submit" class="btn  me-2 btn-success">Simpan</button>
      </form>
    </div>
</x-layouts.app>
