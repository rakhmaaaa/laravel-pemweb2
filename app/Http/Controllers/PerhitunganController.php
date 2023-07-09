<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Kategori;
use App\Models\Normalisasi;
use App\Models\Hasil;

class PerhitunganController extends Controller
{
    public function perhitungansaw()
    {
        return view('perhitungan',[
            'normalisasi' => Normalisasi::with('siswa')->get(),
            'kriteria' => Kategori::get(),
            'hasil' => Hasil::with('siswa')->get()
        ]);
    }
}

