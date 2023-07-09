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

 
class UserController extends Controller
{    
    public function index(){

        return view ('user.index');
        
    }
    public function datasiswa()
    {
        $Siswa = Siswa::with('kelas')->paginate();

        $return = [
            'Siswa',
        ];
        return view('user.datasiswa', compact($return));
    }

    public function perhitunganspk()
    {
        return view('user.perhitunganspk',[
            'normalisasi' => Normalisasi::get(),
            'kriteria' => Kategori::get(),
            'hasil' => Hasil::get() 
        ]);
    }
    
}