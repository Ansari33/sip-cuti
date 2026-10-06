@section('title', __('Data Ummat'))
<div>
    <div class="card">
      <div class="row">
        <div class="col-lg-8">
          <h5 class="card-header">Data Ummat</h5>
        </div>
        
        <div class="col-lg-3 mt-5">
          <input placeholser="cari..."  wire:model="search" class="form-control" wire:keydown="searchData"   />
        </div>
        <div class="col-lg-1 mt-5">
          <a class="btn btn-primary ml-4" href="{{ route('ummat.add') }}" wire:navigate>{{ __('Baru') }}</a>
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
              <th>Kecamatan</th>
              <th>Islam</th>
              <th>Kristen</th>
              <th>Katolik</th>
              <th>Hindu</th>
              <th>Buddha</th>
              <th>Konghucu</th>
              <th>Kepercayaan</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($data as $perm => $p )
            <tr>
              <td>
                <i class="icon-base fab fa-angular text-danger me-4"></i>
                <span class="fw-medium">{{ $p->kecamatan }}</span>
              </td>
              <td>{{ $p->islam }}</td>
              <td>{{ $p->kristen }}</td>
              <td>{{ $p->katolik }}</td>
              <td>{{ $p->hindu }}</td>
              <td>{{ $p->buddha }}</td>
              <td>{{ $p->konghucu }}</td>
              <td>{{ $p->kepercayaan }}</td>
              <td>
                <div class="dropdown">
                  <button
                    type="button"
                    class="btn p-0 dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown">
                    <i class="icon-base bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/data/ummat/edit/{{$p->id}}" wire:navigate
                      ><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a
                    >
                    <button class="dropdown-item" wire:click="confirmDelete('{{ $p->kecamatan }}')"
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

      

    </nav>
    </div>
</div>
