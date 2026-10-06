<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\Konten;
use App\Models\LandingSet;
use App\Models\Ummat;
use App\Models\RumahIbadah;

class LandingController extends Controller
{
    //

    public function beranda()
    {
        $konten = Konten::latest()->take(6)->get();
        $berita = Berita::latest()->take(5)->get();
        $landing = LandingSet::all()->pluck('file','elemen')->toArray();
        return view('landing.beranda', compact('konten', 'berita', 'landing'));
    }

    public function sejarah()
    {
        return view('landing.sejarah');
    }

    public function visiMisi()
    {
        return view('landing.visi-misi');
    }

    public function tugasFungsi()
    {
        return view('landing.tugas-fungsi');
    }

    public function unitKerja()
    {
        return view('landing.unit-kerja');
    }

    public function berita()
    {
        $berita = Berita::paginate(8);
        return view('landing.berita',compact('berita'));
    }

    public function bacaBerita($judul)
    {
        $recent = Berita::latest()->take(4)->get();
        $berita = Berita::where('judul', $judul)->first();
        return view('landing.baca', compact('berita', 'recent'));
    }
    

    public function dataKeagamaan()
        {
            $data = Ummat::get();
            $ibadah = RumahIbadah::get();
            return view('landing.data-keagamaan', compact('data', 'ibadah'));
        }

    public function dataPendidikan()
        {
            return view('landing.data-pendidikan');
        }   

    public function manajemenPerubahan()
        {
            return view('landing.manajemen-perubahan');
        }
        
}
