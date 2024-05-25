<?php

namespace App\Http\Controllers;

use App\Models\transaksipembelian;
use App\Models\supplier;
use App\Models\pegawai;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TransaksipembelianController extends Controller
{
    public function index(){
        $data = transaksipembelian::get(); 
        return view('Administrator/transaksipembelian/transaksipembelian', compact('data'));
    }

    public function add(){
        $data_supplier = supplier::get();
        $data_pegawai = pegawai::get();
        return view('Administrator/transaksipembelian/addtransaksipembelian', compact('data_supplier', 'data_pegawai'));
    }

    public function insertdata(Request $request){
        transaksipembelian::create($request->all());
        return redirect()->route('transaksipembelian')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = transaksipembelian::find($id);
        $data_supplier = supplier::get();
        $data_pegawai = pegawai::get();
        return view('Administrator/transaksipembelian/updatepembelian' , compact('data', 'data_supplier', 'data_pegawai'));
    }

    public function alldata($id){
        $data = transaksipembelian::find($id);
        $data_supplier = supplier::get();
        $data_pegawai = pegawai::get();
        return view('Administrator/transaksipembelian/allpembelian' , compact('data', 'data_supplier', 'data_pegawai'));
    }

    public function updatedata(Request $request, $id){
        $data = transaksipembelian::find($id);
        $data->update($request->all());
        return redirect()->route('transaksipembelian')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = transaksipembelian::find($id);
        $data->delete();
        return redirect()->route('transaksipembelian')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = transaksipembelian::all();
        $PDF = PDF::loadView('Administrator/transaksipembelian/reporttransaksi', array('data' => $data));
        return $PDF->stream('data-transaksipembelian.pdf');
    }
}