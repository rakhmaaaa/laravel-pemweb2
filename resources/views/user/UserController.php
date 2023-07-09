<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Siswa;


 
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
    
}