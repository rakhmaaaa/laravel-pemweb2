<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Siswa::with('kelas')->paginate();

        $return = [
            'alternatif',
        ];
        return view('alternatif', compact($return));
    }
    public function tambahalternatif()
    {
        return view('alternatif-add');
    }
    public function addprosesalternatif(Request $request)
    {
        $this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'kelas_id' => 'required',
            'alamat' => 'required',
        ]);

        $query = DB::table('siswa')->insert([
            'nis'=>$request->input('nis'),
            'nama'=>$request->input('nama'),
            'jenis_kelamin'=>$request->input('jenis_kelamin'),
            'agama'=>$request->input('agama'),
            'kelas_id'=>$request->input('kelas_id'),
            'alamat'=>$request->input('alamat'),

        ]);

        if($query){

            return back()->with('success', 'Data berhasil ditambahkan');
         }else{
            return back()->with('fail', 'Data gagal ditambahkan');
         }
    }

    public function editalternatif($id)
    {

        $alternatif = DB::table('siswa')->where('id',$id)->get();
        $getdata = Siswa::with('kelas')->paginate(1);

        $return = [
            'alternatif',
            'getdata',
        ];
        return view('alternatif-edit', compact($return));
    }

    public function editalternatifproses(Request $request)
    {

	    DB::table('siswa')->where('id',$request->id)->update([
            'nis'=>$request->nis,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'kelas_id'=>$request->kelas_id,
            'alamat'=>$request->alamat,
	]);

	    return redirect('/alternatif');
    }

    public function hapusalternatif($id)
    {
        DB::table('siswa')->where('id',$id)->delete();

	    return redirect('/alternatif');
    }

};