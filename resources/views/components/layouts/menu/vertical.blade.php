<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ url('/') }}" class="app-brand-link"><x-app-logo /></a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('dashboard') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-home"></i>{{ __('Dashboard') }}</a>
    </li>
    <!-- Settings -->
    <li class="menu-item {{ (request()->is('permintaan*') or request()->is('nomor-surat*')) ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-book"></i>
        <div class="text-truncate">{{ __('Nomor Surat') }}</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('permintaan*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('permintaan') }}" wire:navigate>{{ __('Permintaan') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('nomor-surat*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('nomor-surat') }}" wire:navigate>{{ __('Nomor Terbit') }}</a>
        </li>
      </ul>
    </li>
    <!-- <li class="menu-item {{ request()->is('permintaan*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('permintaan') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-book"></i>{{ __('Permintaan') }}</a>
    </li>
    <li class="menu-item {{ request()->is('nomor-surat*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('nomor-surat') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-book-open"></i>{{ __('Nomor Surat') }}</a>
    </li> -->
    <!-- <li class="menu-item {{ request()->is('pegawai*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('pegawai') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-user"></i>{{ __('Pegawai') }}</a>
    </li> -->
    <li class="menu-item {{ request()->is('kegiatan*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('kegiatan') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-calendar"></i>{{ __('Kegiatan') }}</a>
    </li>

    <!-- <li class="menu-item {{ request()->is('data-informasi*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('data-informasi') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-file"></i>{{ __('Data & Informasi') }}</a>
    </li> -->

    <li class="menu-item {{ (request()->is('publikasi*') or request()->is('publikasi*')) ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-news"></i>
        <div class="text-truncate">{{ __('Publikasi') }}</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('konten*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('konten') }}" wire:navigate>{{ __('Konten') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('berita*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('berita') }}" wire:navigate>{{ __('Berita') }}</a>
        </li>
      </ul>
    </li>

    <li class="menu-item {{ (request()->is('data*') or request()->is('data*')) ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-chart"></i>
        <div class="text-truncate">{{ __('Data') }}</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('ummat*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('ummat') }}" wire:navigate>{{ __('Keagamaan') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('rumah-ibadah*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('rumah-ibadah') }}" wire:navigate>{{ __('Rumah Ibadah') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('pendidikan*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('pendidikan') }}" wire:navigate>{{ __('Pendidikan') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('pegawai*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('pegawai') }}" wire:navigate>{{ __('Pegawai') }}</a>
        </li>
      </ul>
    </li>

    <!-- <li class="menu-item {{ (request()->is('zi*') or request()->is('zi*')) ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-shield"></i>
        <div class="text-truncate">{{ __('Zona Integritas') }}</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('laporan-kinerja*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('laporan-kinerja') }}" wire:navigate>{{ __('Keagamaan') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('tugas*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('tugas') }}" wire:navigate>{{ __('Pendidikan') }}</a>
        </li>
      </ul>
    </li> -->

     <li class="menu-item {{ request()->is('zi*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('zi') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-shield"></i>{{ __('Zona Integritas') }}</a>
      </li>

      <li class="menu-item {{ request()->is('landing-set*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('landing-set') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-pen"></i>{{ __('Landing Set') }}</a>
      </li>

    <li class="menu-item {{ (request()->is('laporan-kinerja*') or request()->is('tugas*')) ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-check-double"></i>
        <div class="text-truncate">{{ __('Kinerja') }}</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('laporan-kinerja*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('laporan-kinerja') }}" wire:navigate>{{ __('Laporan') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('tugas*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('tugas') }}" wire:navigate>{{ __('Tugas') }}</a>
        </li>
      </ul>
    </li>

    <li class="menu-item {{ (request()->is('cuti*') ) ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-x-circle"></i>
        <div class="text-truncate">{{ __('Cuti') }}</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('pengajuan-cuti*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('pengajuan-cuti') }}" wire:navigate>{{ __('Pengajuan') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('jenis-cuti*') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('jenis-cuti') }}" wire:navigate>{{ __('Jenis Cuti') }}</a>
        </li>
      </ul>
    </li>

    <!-- <li class="menu-item {{ request()->is('laporan-kinerja*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('laporan-kinerja') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-check-double"></i>{{ __('Laporan Kinerja') }}</a>
    </li>

    <li class="menu-item {{ request()->is('tugas*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('tugas') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-list-ul"></i>{{ __('Tugas Kegiatan') }}</a>
    </li> -->

    <li class="menu-item {{ request()->is('inventories*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('inventories') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-box"></i>{{ __('Belanja Inventori') }}</a>
    </li>
    
    @if(auth()->user()->hasRole('admin'))
    <li class="menu-item {{ request()->is('user*') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('user') }}" wire:navigate> <i class="menu-icon tf-icons bx bx-lock"></i>{{ __('User') }}</a>
    </li>
    @endif
    <!-- Settings -->
    <li class="menu-item {{ request()->is('settings/*') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-cog"></i>
        <div class="text-truncate">{{ __('Settings') }}</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('settings.profile') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('settings.profile') }}" wire:navigate>{{ __('Profile') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('settings.password') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('settings.password') }}" wire:navigate>{{ __('Password') }}</a>
        </li>
      </ul>
    </li>
  </ul>
</aside>
<!-- / Menu -->

<script>
  // Toggle the 'open' class when the menu-toggle is clicked
  document.querySelectorAll('.menu-toggle').forEach(function(menuToggle) {
    menuToggle.addEventListener('click', function() {
      const menuItem = menuToggle.closest('.menu-item');
      // Toggle the 'open' class on the clicked menu-item
      menuItem.classList.toggle('open');
    });
  });
</script>
