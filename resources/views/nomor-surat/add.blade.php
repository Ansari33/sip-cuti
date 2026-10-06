@section('title', __('Permintaan Baru'))
<x-layouts.app :title="__('Permintaan Baru')">
    <div class="card mb-1">
        <h5 class="card-header">Permintaan Nomor Surat</h5>
    </div>
    <div class="card p-4">
        
      <form method="POST" action="{{ route('permintaan.store') }}" wire:submit.prevent="submit">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nomor</label>
          <div class="col-md-10">
            <input name="nomor" class="form-control" type="text" value="Sneat" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Perihal</label>
          <div class="col-md-10">
            <input name="perihal" class="form-control" type="text" value="Search ..." id="html5-search-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal</label>
          <div class="col-md-10">
            <input name="tanggal" class="form-control" type="date"  id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Status</label>
          <div class="col-md-10">
              <select name="status" class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected>Pilihan Status</option>
                <option value="1">Mengajukan</option>
                <option value="2">Diproses</option>
                <option value="3">Berhasil</option>
                <option value="99">Ditolak</option>
              </select>
          </div>

        </div>
<!-- <div class="mb-4 row">
    <label for="html5-url-input" class="col-md-2 col-form-label">URL</label>
    <div class="col-md-10">
      <input class="form-control" type="url" value="https://themeselection.com" id="html5-url-input" />
    </div>
  </div>
  <div class="mb-4 row">
    <label for="html5-tel-input" class="col-md-2 col-form-label">Phone</label>
    <div class="col-md-10">
      <input class="form-control" type="tel" value="90-(164)-188-556" id="html5-tel-input" />
    </div>
  </div>
  <div class="mb-4 row">
    <label for="html5-password-input" class="col-md-2 col-form-label">Password</label>
    <div class="col-md-10">
      <input class="form-control" type="password" value="password" id="html5-password-input" />
    </div>
  </div>
  <div class="mb-4 row">
    <label for="html5-number-input" class="col-md-2 col-form-label">Number</label>
    <div class="col-md-10">
      <input class="form-control" type="number" value="18" id="html5-number-input" />
    </div>
  </div> -->
  
        <button type="submit" class="btn  me-2 btn-primary">Ajukan</button>
      </form>
    </div>
</x-layouts.app>
