@section('title', __('Laporan kinerja'))
<div>
    <div class="card">
        <div class="row">
            <div class="col-lg-2">
                <h5 class="card-header">Laporan Kinerja</h5>
            </div>
            <div class="col-lg-2 mt-5">
                 <select name="pengaju" wire:model="atas" wire:change="searchData" require class="form-select "  aria-label="Default select example">
                    <option value="{{ null }}" selected>Pilih Atasan</option>
                    @foreach($atasan as $ats => $a)
                    <option value="{{ $a->id }}" >{{ $a->nama }}</option>
                    @endforeach
                </select>
                
            </div>
             <div class="col-lg-1 mt-5">
                 <select name="pengaju" wire:change="searchData" wire:model="bulan" require class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                    <option  selected>Bulan</option>
                    <option value="1" >Januari</option>
                    <option value="2" >Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5" >Mei</option>
                    <option value="6" >Juni</option>
                    <option value="7" >Juli</option>
                    <option value="8" >Agustus</option>
                    <option value="9" >September</option>
                    <option value="10" >Oktober</option>
                    <option value="11" >November</option>
                    <option value="12" >Desember</option>
                </select>
                
            </div>
             <div class="col-lg-1 mt-5">
                 <input placeholser="Tahun" wire:model="tahun" wire:keydown="searchData" class="form-control"  />
                
            </div>
            <div class="col-lg-3 mt-5">
                <a class="btn btn-danger text-white ml-4" wire:click="pdf">{{ __('PDF') }}</a>
                <button class="btn btn-success text-white ml-4"   wire:click="excel">{{ __('Excel') }}</button>
            </div>
            <div class="col-lg-2 mt-5">
                <input placeholder="cari..." wire:model="search" class="form-control" wire:model.live="selectedCity" wire:keydown="searchData" />
            </div>
            <div class="col-lg-1 mt-5">
                <a class="btn btn-primary ml-4" href="{{ route('laporan-kinerja.add') }}" wire:navigate>{{ __('Baru') }}</a>
            </div>
        </div>
        <div class="m-2">
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </div>


        <div class="table-responsive">

            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kegiatan</th>
                        <th>Uraian Kegiatan</th>
                        <th>Volume</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($data as $perm => $p )
                    <tr>
                        <td>{{ ($p->tanggal)  }}</td>
                        <td>{{ ($p->kegiatan)  }}</td>
                        <td>{{ ($p->uraian_kegiatan)  }}</td>
                        <td>{{ ($p->volume)  }}</td>
                        <td>{{ ($p->bulan)  }}</td>
                        <td>{{ ($p->tahun)  }}</td>
                        <td>
                            <div class="dropdown">
                                <button
                                    type="button"
                                    class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/laporan-kinerja/edit/{{$p->id}}" wire:navigate><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a>
                                    <buton class="dropdown-item"  wire:click="confirmDelete('{{ $p->kegiatan }}')"><i class="icon-base bx bx-trash me-1"></i>Delete</buton>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <nav aria-label="Page navigation " class="m-2">

            {{ $data->links() }}

        </nav>
    </div>
</div>