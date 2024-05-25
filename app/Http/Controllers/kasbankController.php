<?php

namespace App\Http\Controllers;

use App\Models\kasbank;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KasbankController extends Controller
{
    public function index(){
        $data = kasbank::get(); 
        return view('Administrator/kasbank/kasbank', compact('data'));
    }

    public function add(){
        return view('Administrator/kasbank/addkasbank');
    }

    public function insertdata(Request $request){
        kasbank::create($request->all());
        return redirect()->route('kasbank')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = kasbank::find($id);
        return view('Administrator/kasbank/updatekasbank' , compact('data'));
    }

    public function alldata($id){
        $data = kasbank::find($id);
        return view('Administrator/kasbank/allkasbank' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = kasbank::find($id);
        $data->update($request->all());
        return redirect()->route('kasbank')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = kasbank::find($id);
        $data->delete();
        return redirect()->route('kasbank')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = kasbank::all();
        $PDF = PDF::loadView('Administrator/kasbank/reportkasbank', array('data' => $data));
        return $PDF->stream('data-kasbank.pdf');
    }
}
