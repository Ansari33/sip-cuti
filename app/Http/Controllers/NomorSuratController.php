<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NomorSurat;

class NomorSuratController extends Controller
{
    public function index() {
        $data = NomorSurat::with(['pengajuan'])->get();
        return view('nomor-surat.index',compact('data'));
    }
}
