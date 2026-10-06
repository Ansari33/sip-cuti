@section('title', __('Users'))
<x-layouts.app :title="__('Dashboard')">
    <div class="card">
      <div class="row">
        <div class="col-lg-10">
          <h5 class="card-header">Daftar User</h5>
        </div>
        <div class="col-lg-1 mt-5">
          <!-- <a class="btn btn-primary ml-4" href="{{ route('permintaan.add') }}" wire:navigate>{{ __('Baru') }}</a> -->
        </div>
      </div>
      <div class="m-2">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <i class="icon-base bx bx-bell icon-xs me-2"></i>
    <div class="me-auto fw-medium">Bootstrap</div>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">Hello, world! This is a toast message.</div>
</div>
        @endif
    </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Level</th>
          <th>Actions</th>
          
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($data as $perm => $p )
        <tr>
          <td>
            <i class="icon-base fab fa-angular text-danger me-4"></i>
            <span class="fw-medium">{{ $p->name }}</span>
          </td>
          <td>
            <span class="badge {{ $p->hasRole('admin') ? 'bg-label-primary' : 'bg-label-success' }}  me-1">{{ $p->hasRole('admin') ? 'Admin' : 'Client' }}</span>
            
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
              <a class="dropdown-item" href="/user/setrole/{{$p->id}}/Admin"
                  ><i class="icon-base bx bx-key me-1"></i>Admin</a
                >
                <!-- <a class="dropdown-item" href="/permintaan/edit/{{$p->id}}"
                  ><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a
                > -->
                <!-- <a class="dropdown-item" wire:click="delete"
                  wire:confirm="Are you sure you want to delete this post?" 
                  href="/permintaan/delete/{{$p->id}}"
                  wire:navigate
                  ><i class="icon-base bx bx-trash me-1"></i>Delete</a
                > -->
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</x-layouts.app>
