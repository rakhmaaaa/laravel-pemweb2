<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(){
        $kelas = DB::table('kelas')->get();
            $return = [
                'kelas',
            ];
        return view('kelas', compact($return));
    }

    public function tambahkelas()
    {
        return view('kelas-add');
    }
    public function addproseskelas(Request $request)
    {
        $this->validate($request,[
            'nama_kelas' => 'required',
        ]);

        $query = DB::table('kelas')->insert([
            'nama_kelas'=>$request->input('nama_kelas'),
        ]);

        if($query){

            return back()->with('success', 'Data berhasil ditambahkan');
         }else{
            return back()->with('fail', 'Data gagal ditambahkan');
         }
    }

    public function editkelas($id)
    {

        $kelas = DB::table('kelas')->where('id',$id)->get();
        return view('kelas-edit',['kelas'=>$kelas]);
    }

    public function editkelasproses(Request $request)
    {

	    DB::table('kelas')->where('id',$request->id)->update([
            'nama_kelas'=>$request->nama_kelas,
	]);

	    return redirect('/kelas');
    }

    public function hapuskelas($id)
    {
        DB::table('kelas')->where('id',$id)->delete();

	    return redirect('/kelas');
    }


}
