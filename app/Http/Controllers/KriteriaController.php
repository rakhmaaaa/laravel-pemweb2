<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = DB::table('kriteria')->get();
        $return = [
            'kriteria',
        ];
        return view('kriteria', compact($return));
    }
    public function tambahkriteria()
    {
        return view('kriteria-add');
    }
    public function addproseskriteria(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'bobot' => 'required',
            'atribute' => 'required',

        ]);

        $query = DB::table('kriteria')->insert([
            'nama'=>$request->input('nama'),
            'bobot' =>$request->input('bobot'),
            'atribute'=>$request->input('atribute'),
        ]);

        if($query){

            return back()->with('success', 'Data berhasil ditambahkan');
         }else{
            return back()->with('fail', 'Data gagal ditambahkan');
         }
    }

    public function editkriteria($id)
    {

        $Kriteria = DB::table('kriteria')->where('id',$id)->get();
        return view('kriteria-edit',['kriteria'=>$Kriteria]);
    }

    public function editkriteriaproses(Request $request)
    {

	    DB::table('kriteria')->where('id',$request->id)->update([
            'nama'=>$request->nama,
            'bobot'=>$request->bobot,
            'atribute'=>$request->atribute,
	]);

	    return redirect('/kriteria');
    }

    public function hapuskriteria($id)
    {
        DB::table('kriteria')->where('id',$id)->delete();

	    return redirect('/kriteria');
    }

};