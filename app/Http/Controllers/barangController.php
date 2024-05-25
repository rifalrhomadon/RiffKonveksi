<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BarangController extends Controller
{
    public function index(){
        $data = barang::get(); 
        return view('Administrator/barang/barang', compact('data'));
    }

    public function add(){
        return view('Administrator/barang/addbarang');
    }

    public function insertdata(Request $request){
        barang::create($request->all());
        return redirect()->route('barang')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = barang::find($id);
        return view('Administrator/barang/updatebarang' , compact('data'));
    }

    public function alldata($id){
        $data = barang::find($id);
        return view('Administrator/barang/allbarang' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = barang::find($id);
        $data->update($request->all());
        return redirect()->route('barang')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = barang::find($id);
        $data->delete();
        return redirect()->route('barang')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = barang::all();
        $PDF = PDF::loadView('Administrator/barang/reportbarang', array('data' => $data));
        return $PDF->stream('data-barang.pdf');
    }
}