<?php

namespace App\Http\Controllers;

use App\Models\biaya;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BiayaController extends Controller
{
    public function index(){
        $data = biaya::get(); 
        return view('Administrator/biaya/biaya', compact('data'));
    }

    public function add(){
        return view('Administrator/biaya/addbiaya');
    }

    public function insertdata(Request $request){
        biaya::create($request->all());
        return redirect()->route('biaya')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = biaya::find($id);
        return view('Administrator/biaya/updatebiaya' , compact('data'));
    }

    public function alldata($id){
        $data = biaya::find($id);
        return view('Administrator/biaya/allbiaya' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = biaya::find($id);
        $data->update($request->all());
        return redirect()->route('biaya')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = biaya::find($id);
        $data->delete();
        return redirect()->route('biaya')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = biaya::all();
        $PDF = PDF::loadView('Administrator/biaya/reportbiaya', array('data' => $data));
        return $PDF->stream('data-biaya.pdf');
    }
}
