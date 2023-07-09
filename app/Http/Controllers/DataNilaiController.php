<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Models\DataNilai;

class DataNilaiController extends Controller
{ 
    public function index() 
    { 
        $datanilai = DataNilai::with('siswa')->paginate(); 
 
        $return = [ 
            'datanilai', 
        ]; 
        return view('datanilai', compact($return)); 
    } 
 
    public function indexx() 
    { 
        $datanilai = DB::table('datanilai')->get(); 
        $return = [ 
            'datanilai', 
        ]; 
        return view('datanilai', compact($return)); 
    } 
    public function tambahdatanilai() 
    { 
        $datanilai = DB::table('datanilai')->get(); 
        $return = [ 
            'datanilai', 
        ]; 
        return view('datanilai-add', compact($return)); 
    } 
    public function addprosesdatanilai(Request $request) 
    { 
        $this->validate($request,[ 
            'siswa_id' => 'required', 
            'nilai_rapot' => 'required', 
            'nilai_hadir' => 'required', 
            'ekstrakulikuler' => 'required', 
            'organisasi' => 'required', 
            'tingkah_laku' => 'required', 
        ]); 
 
        $query = DB::table('datanilai')->insert([ 
            'siswa_id'=>$request->input('siswa_id'), 
            'nilai_rapot'=>$request->input('nilai_rapot'), 
            'nilai_hadir'=>$request->input('nilai_hadir'), 
            'ekstrakulikuler'=>$request->input('ekstrakulikuler'), 
            'organisasi' =>$request->input('organisasi'), 
            'tingkah_laku'=>$request->input('tingkah_laku'), 
 
        ]); 
 
        if($query){ 
 
            return back()->with('success', 'Data berhasil ditambahkan'); 
         }else{ 
            return back()->with('fail', 'Data gagal ditambahkan'); 
         } 
    } 
 
    public function editdatanilai($id) 
    { 
 
        $datanilai = DB::table('datanilai')->where('id',$id)->get();
        $getnama = DataNilai::with('siswa')->paginate(1);

        $return = [
            'datanilai',
            'getnama',
    ];
        return view('datanilai-edit', compact($return));
    } 

 
    public function editdatanilaiproses(Request $request) 
    { 
 
     DB::table('datanilai')->where('id',$request->id)->update([ 
            'siswa_id'=>$request->siswa_id, 
            'nilai_rapot'=>$request->nilai_rapot, 
            'nilai_hadir'=>$request->nilai_hadir, 
            'ekstrakulikuler'=>$request->ekstrakulikuler, 
            'organisasi'=>$request->organisasi, 
            'tingkah_laku'=>$request->tingkah_laku, 
 ]); 
 
     return redirect('/datanilai'); 
    } 
 
    public function hapusdatanilai($id) 
    { 
        DB::table('datanilai')->where('id',$id)->delete(); 
 
     return redirect('/datanilai'); 
    } 
 
};
