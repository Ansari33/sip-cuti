@section('title', __('Elemen Landing Page'))
<div>
    <div class="card">
      <div class="row">
        <div class="col-lg-8">
          <h5 class="card-header">Daftar Elemen</h5>
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
              <th>Elemen</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($data as $perm => $p )
            <tr>
              <td>
                <i class="icon-base fab fa-angular text-danger me-4"></i>
                <span class="fw-medium">{{ $p->elemen }}</span>
              </td>
             <td>
                <div class="dropdown">
                  <button
                    type="button"
                    class="btn p-0 dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown">
                    <i class="icon-base bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/landing-set/edit/{{$p->id}}" wire:navigate
                      ><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a
                    >
                    
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
      </div>

    </div>
</div>
