<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\NomorSuratController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataInformasiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LandingController;
use App\Models\Kecamatan;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Storage;



Route::get('/gambar-file/{filename}', function ($filename) {
    $path = 'gambar/' . $filename;
   // return Storage::exists($path) ? 'Ada' : 'Tidak Ditemukan';
    if (!Storage::exists($path)) abort(404);

    return response()->file(storage_path('app/private/' . $path));
});

Route::get('/', function () { return view('welcome');})->name('admin');
Route::middleware(['auth', 'verified'])->group(function () {
  Volt::route('dashboard', 'dashboard')->name('dashboard');
});

Route::middleware(['auth', 'verified'])->prefix('permintaan')->group(function () {
  Volt::route('/', 'permintaan.index')->name('permintaan');
  Volt::route('add', 'permintaan.add')->name('permintaan.add');
  Volt::route('edit/{id}', 'permintaan.edit')->name('permintaan.edit');
  Route::get('/delete/{id}', [PermintaanController::class, 'delete'])->name('permintaan.delete');    
});

Route::middleware(['auth', 'verified'])->prefix('pegawai')->group(function () {
    Volt::route('/', 'pegawai.index')->name('pegawai');
    Volt::route('add', 'pegawai.add')->name('pegawai.add');  
    Volt::route('edit/{id}', 'pegawai.edit')->name('pegawai.edit'); 
    Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');
    Volt::route('import', 'pegawai.import')->name('pegawai.import');      
});

Route::middleware(['auth', 'verified'])->prefix('nomor-surat')->group(function () {
    Volt::route('/', 'nomor-surat.index')->name('nomor-surat');
    //Route::get('/', [NomorSuratController::class, 'index'])->name('nomor-surat');
    Route::get('/add', [NomorSuratController::class, 'add'])->name('nomor-surat.add');  
    Route::post('/store', [NomorSuratController::class, 'store'])->name('nomor-surat.store');     
    Route::get('/edit/{id}', [NomorSuratController::class, 'edit'])->name('nomor-surat.edit');
    Route::patch('/update', [NomorSuratController::class, 'update'])->name('nomor-surat.update');
    Route::get('/delete/{id}', [NomorSuratController::class, 'delete'])->name('nomor-surat.delete');  
});

Route::middleware(['auth', 'verified'])->prefix('kegiatan')->group(function () {
  Volt::route('/', 'kegiatan.index')->name('kegiatan');
  Volt::route('add', 'kegiatan.add')->name('kegiatan.add');
  Volt::route('edit/{id}', 'kegiatan.edit')->name('kegiatan.edit');
  Route::get('/delete/{id}', [KegiatanController::class, 'delete'])->name('kegitatan.delete');
  Volt::route('/search', 'kegiatan.search')->name('kegiatan.search');    
});

Route::middleware(['auth', 'verified'])->prefix('laporan-kinerja')->group(function () {
  Volt::route('/', 'laporan-kinerja.index')->name('laporan-kinerja');
  Volt::route('add', 'laporan-kinerja.add')->name('laporan-kinerja.add');
  Volt::route('edit/{id}', 'laporan-kinerja.edit')->name('laporan-kinerja.edit');
  Volt::route('/search', 'laporan-kinerja.search')->name('laporan-kinerja.search'); 
  Route::get('/pdf/{b}/{t}/{a}', [PegawaiController::class, 'pdf'])->name('laporan-kinerja.pdf');
   
});

  Route::middleware(['auth', 'verified'])->prefix('publikasi')->group(function () {
      Route::prefix('konten')->group(function () {
        Volt::route('/', 'konten.index')->name('konten');
        Volt::route('add', 'konten.add')->name('konten.add');
        Volt::route('edit/{id}', 'konten.edit')->name('konten.edit');
        Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('konten.delete');    
    });

    Route::prefix('berita')->group(function () {
        Volt::route('/', 'berita.index')->name('berita');
        Volt::route('add', 'berita.add')->name('berita.add');
        Volt::route('edit/{id}', 'berita.edit')->name('berita.edit');
        Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('berita.delete');    
    });
    
  });


    Route::middleware(['auth', 'verified'])->prefix('cuti')->group(function () {
      Route::prefix('pengajuan')->group(function () {
        Volt::route('/', 'pengajuan.index')->name('pengajuan');
        Volt::route('add', 'pengajuan.add')->name('pengajuan.add');
        Volt::route('edit/{id}', 'pengajuan.edit')->name('pengajuan.edit');
        Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('pengajuan.delete');    
    });

    Route::prefix('jenis')->group(function () {
        Volt::route('/', 'jenis-cuti.index')->name('jenis-cuti');
        Volt::route('add', 'jenis-cuti.add')->name('jenis-cuti.add');
        Volt::route('edit/{id}', 'jenis-cuti.edit')->name('jenis-cuti.edit');
        Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('jenis-cuti.delete');    
    });
    
  });

  Route::prefix('landing-set')->group(function () {
      Volt::route('/', 'landing-set.index')->name('landing-set');
     // Volt::route('add', 'ummat.add')->name('ummat.add');
      Volt::route('edit/{id}', 'landing-set.edit')->name('landing-set.edit');
    //  Route::get('/delete/{id}', [DataInformasiController::class, 'deleteUmmat'])->name('ummat.delete');    
  });

  Route::middleware(['auth', 'verified'])->prefix('data')->group(function () {
      Route::prefix('ummat')->group(function () {
        Volt::route('/', 'ummat.index')->name('ummat');
        Volt::route('add', 'ummat.add')->name('ummat.add');
        Volt::route('edit/{id}', 'ummat.edit')->name('ummat.edit');
        Route::get('/delete/{id}', [DataInformasiController::class, 'deleteUmmat'])->name('ummat.delete');    
    });

    Route::prefix('rumah-ibadah')->group(function () {
        Volt::route('/', 'rumah-ibadah.index')->name('rumah-ibadah');
        Volt::route('add', 'rumah-ibadah.add')->name('rumah-ibadah.add');
        Volt::route('edit/{id}', 'rumah-ibadah.edit')->name('rumah-ibadah.edit');
        Route::get('/delete/{id}', [DataInformasiController::class, 'deleteRumahIbadah'])->name('rumah-ibadah.delete');    
    });

    Route::prefix('pendidikan')->group(function () {
        Volt::route('/', 'pendidikan.index')->name('pendidikan');
        Volt::route('add', 'pendidikan.add')->name('pendidikan.add');
        Volt::route('edit/{id}', 'pendidikan.edit')->name('pendidikan.edit');
        Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('pendidikan.delete');    
    });
    
  });


  Route::middleware(['auth', 'verified'])->prefix('zi')->group(function () {
      
    Volt::route('/', 'konten.index')->name('zi');
    // Volt::route('add', 'konten.add')->name('konten.add');
    // Volt::route('edit/{id}', 'konten.edit')->name('konten.edit');
    // Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('data-informasi.delete');    
   
    
  });



Route::middleware(['auth', 'verified'])->prefix('data-informasi')->group(function () {
  Volt::route('/', 'data-informasi.index')->name('data-informasi');
  Volt::route('add', 'data-informasi.add')->name('data-informasi.add');
  Volt::route('edit/{id}', 'data-informasi.edit')->name('data-informasi.edit');
  Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('data-informasi.delete');    
});

Route::middleware(['auth', 'verified'])->prefix('tugas')->group(function () {
  Volt::route('/', 'tugas.index')->name('tugas');
  Volt::route('add', 'tugas.add')->name('tugas.add');
  Volt::route('edit/{id}', 'tugas.edit')->name('tugas.edit');
//  Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('tugas.delete');    
});

Route::middleware(['auth', 'verified'])->prefix('inventories')->group(function () {
  Volt::route('/', 'inventory.index')->name('inventories');
  Volt::route('add', 'inventory.add')->name('inventories.add');
  Volt::route('edit/{id}', 'inventory.edit')->name('inventories.edit');
//  Route::get('/delete/{id}', [DataInformasiController::class, 'delete'])->name('tugas.delete');    
});

Route::middleware(['auth', 'verified'])->prefix('user')->group(function () {
  Route::get('/', [UserController::class, 'index'])->name('user');
  // Route::get('/add', [PegawaiController::class, 'add'])->name('nomor-surat.add');  
  // Route::post('/store', [PegawaiController::class, 'store'])->name('nomor-surat.store');     
  // Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('nomor-surat.edit');
  // Route::patch('/update', [PegawaiController::class, 'update'])->name('nomor-surat.update');
  // Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('nomor-surat.delete');
  Route::get('/setrole/{u}/{r}', [UserController::class, 'setRole'])->name('user.role');    
});

Route::middleware(['auth'])->group(function () {
  Route::redirect('settings', 'settings/profile');

  Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
  Volt::route('settings/password', 'settings.password')->name('settings.password');
});

Route::get('/migrate', function () {
  Artisan::call('cache:clear');
  Artisan::call('migrate');
});

Route::get('/link', function () {
  Artisan::call('storage:link');
  return 'success';
});

Route::get('/kecamatan', function () {
  return Kecamatan::get();
});


require __DIR__ . '/auth.php';
