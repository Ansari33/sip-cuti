@section('title', __('Edit Cuti '))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Edit Data Cuti</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="update">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Pegawai</label>
          <div class="col-md-10">
            @if(auth()->user()->hasRole('admin'))
            <select  name="pengaju" wire:model="pengaju" require class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected>Pilihan Pengaju</option>
                @foreach($pegawai as $pgw => $pg)
                <option value="{{ $pg['nip'] }}">{{ $pg['nama'] }}</option>
                @endforeach
              </select>
            @else
              <input   class="form-control" value="{{ auth()->user()->nip.' - '.auth()->user()->name }}" id="html5-tel-input" />
            @endif  
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Jenis Cuti</label>
          <div class="col-md-10">
            <select wire:change="cekJenisCuti"  wire:model="jenis" require class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected>Pilihan Cuti</option>
                @foreach($cutis as $cts => $ct)
                <option {{ $ct['selected'] }}  value="{{ $ct['id'] }}">{{ $ct['jenis'] }}</option>
                @endforeach
              </select>
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Lama Cuti</label>
          <div class="col-md-10">
            <input name="unit_kerja" wire:model="jumlah" class="form-control" type="number"  required />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal Pengajuan</label>
          <div class="col-md-10">
            <input name="pangkat_gol" wire:model="tanggal_pengajuan" class="form-control" type="date" value="" id="html5-email-input" required />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal Mulai</label>
          <div class="col-md-10">
            <input name="pangkat_gol" wire:model="tanggal_mulai" class="form-control" type="date" value="" id="html5-email-input" required />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Tanggal Berakhir</label>
          <div class="col-md-10">
            <input name="jabatan" wire:model="tanggal_berakhir" class="form-control" type="date" value="" required />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Alasan</label>
          <div class="col-md-10">
            <input name="unit_kerja" wire:model="alasan" class="form-control" type="text" value="" id="html5-tel-input" required />
          </div>
        </div>
        @if(auth()->user()->hasRole('admin'))
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Tahun</label>
          <div class="col-md-10">
            <input name="unit_kerja" wire:model="tahun" class="form-control" type="number" value="" id="html5-tel-input" />
          </div>
        </div>
        @else
        <input  wire:model="tahun" class="form-control" type="hidden"  />
        @endif
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Link dokumen</label>
          <div class="col-md-9">
            <input  wire:model="dokumen" class="form-control"  required  />
          </div>
          <div class="col-md-1">
            <a href="{{ $dokumen }}" target="_blank" class=" btn btn-secondary"><i class="bx bx-file"></i></a>
          </div>
          
        </div>
        @if(auth()->user()->hasRole('admin'))
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Catatan</label>
          <div class="col-md-10">
            <input  wire:model="catatan" class="form-control"  required  />
          </div>
        </div>
        @endif
        @if($status == 'Ditolak' && !auth()->user()->hasRole('admin'))
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Catatan</label>
          <div class="col-md-10">
            <input name="unit_kerja" disabled wire:model="catatan" class="form-control"  required  />
          </div>
        </div>
        @endif
        <div class="mb-4 row">
          <div class="col-md-1">
            <button type="submit" @if($disabled == 1) disabled @endif class="btn me-2 btn-warning">Update</button>
          </div>
          @if(auth()->user()->hasRole('admin'))
          <div class="col-md-1">
            <button type="button" wire:click="setujui"class="btn me-2 btn-success">Setujui</button>
          </div>
          <div class="col-md-1">
            <button type="button" wire:click="tolak"  class="btn me-2 btn-danger">Tolak</button>
          </div>
          @endif
          
          <div class="col-md-9">
            <span class="text-warning"> {{ $info }} </span>
          </div>
        </div>
        
      </form>
    </div>
</div>
