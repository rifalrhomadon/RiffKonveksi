<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use App\Models\transaksipembelian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function index(){
        $data = invoice::get(); 
        return view('Administrator/invoice/invoice', compact('data'));
    }

    public function add(){
        $datatransaksipembelian = transaksipembelian::get();
        return view('Administrator/invoice/addinvoice', compact('datatransaksipembelian'));
    }

    public function insertdata(Request $request){
        invoice::create($request->all());
        return redirect()->route('invoice')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = invoice::find($id);
        $datatransaksipembelian = transaksipembelian::get();
        return view('Administrator/invoice/updateinvoice' , compact('data', 'datatransaksipembelian'));
    }

    public function alldata($id){
        $data = invoice::find($id);
        $datatransaksipembelian = transaksipembelian::get();
        return view('Administrator/invoice/allinvoice' , compact('data', 'datatransaksipembelian'));
    }

    public function updatedata(Request $request, $id){
        $data = invoice::find($id);
        $data->update($request->all());
        return redirect()->route('invoice')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = invoice::find($id);
        $data->delete();
        return redirect()->route('invoice')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = invoice::all();
        $PDF = PDF::loadView('Administrator/invoice/reportinvoice', array('data' => $data));
        return $PDF->stream('data-invoice.pdf');
    }
}