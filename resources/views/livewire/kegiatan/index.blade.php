@section('title', __('Kegiatan'))
<div>
    <div class="card">
      <div class="row">
        <div class="col-lg-8">
          <h5 class="card-header">Daftar Kegiatan</h5>
        </div>
        
        <div class="col-lg-3 mt-5">
          <input placeholser="cari..."  wire:model="search" class="form-control" wire:keydown="searchData"   />
        </div>
        <div class="col-lg-1 mt-5">
          <a class="btn btn-primary ml-4" href="{{ route('kegiatan.add') }}" wire:navigate>{{ __('Baru') }}</a>
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
              <th>Kegiatan</th>
              <th>Jadwal</th>
              <th>Facebook</th>
              <th>Instagram</th>
              <th>Berita</th>
              <th>Arsip</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($data as $perm => $p )
            <tr>
              <td>
                <i class="icon-base fab fa-angular text-danger me-4"></i>
                <span class="fw-medium">{{ $p->nama }}</span>
              </td>
              <td>{{ substr($p->jadwal,0,16)  }}</td>
              <td>
                <a href="{{ $p->facebook }}" target="_blank" class="btn btn-outline-info">
                    <i class="bx bx-news"></i>
                    <span class="fw-medium"></span>
                </a> 
              </td>
              <td>
                <a href="{{ $p->instagram }}" target="_blank" class="btn btn-outline-danger">
                    <i class="bx bx-news"></i>
                    <span class="fw-medium"></span>
                </a>
              </td>
              <td>
                <a href="{{ $p->berita }}" target="_blank" class="btn btn-outline-primary">
                    <i class=" bx bx-news"></i>
                    <span class="fw-medium"></span>
                </a>
              </td>
              <td>
                <a href="{{ $p->arsip }}" target="_blank" class="btn btn-outline-secondary">
                    <i class="bx bx-file"></i>
                    <span class="fw-medium"></span>
                </a>
              </td>
              <td><span class="badge @if($p->status == 'Belum') bg-label-warning 
                @elseif($p->status == 'Sudah') bg-label-success 
                @endif me-1">{{ $p->status }}</span></td>
              <td>
                <div class="dropdown">
                  <button
                    type="button"
                    class="btn p-0 dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown">
                    <i class="icon-base bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/kegiatan/edit/{{$p->id}}" wire:navigate
                      ><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a
                    >
                    <button class="dropdown-item" wire:click="confirmDelete('{{ $p->nama }}')"
                      ><i class="icon-base bx bx-trash me-1"></i>Delete</button
                    >
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
