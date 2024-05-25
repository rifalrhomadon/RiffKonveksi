<?php

namespace App\Http\Controllers;

use App\Models\outlet;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OutletController extends Controller
{
    public function index(){
        $data = outlet::get(); 
        return view('Administrator/outlet/outlet', compact('data'));
    }

    public function add(){
        return view('Administrator/outlet/addoutlet');
    }

    public function insertdata(Request $request){
        outlet::create($request->all());
        return redirect()->route('outlet')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = outlet::find($id);
        return view('Administrator/outlet/updateoutlet' , compact('data'));
    }

    public function alldata($id){
        $data = outlet::find($id);
        return view('Administrator/outlet/alloutlet' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = outlet::find($id);
        $data->update($request->all());
        return redirect()->route('outlet')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = outlet::find($id);
        $data->delete();
        return redirect()->route('outlet')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = outlet::all();
        $PDF = PDF::loadView('Administrator/outlet/reportoutlet', array('data' => $data));
        return $PDF->stream('data-outlet.pdf');
    }
}
