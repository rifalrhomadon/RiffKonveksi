<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CustomerController extends Controller
{
    public function index(){
        $data = customer::get(); 
        return view('Administrator/customer/customer', compact('data'));
    }

    public function add(){
        return view('Administrator/customer/addcustomer');
    }

    public function insertdata(Request $request){
        customer::create($request->all());
        return redirect()->route('customer')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = customer::find($id);
        return view('Administrator/customer/updatecustomer' , compact('data'));
    }

    public function alldata($id){
        $data = customer::find($id);
        return view('Administrator/customer/allcustomer' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = customer::find($id);
        $data->update($request->all());
        return redirect()->route('customer')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = customer::find($id);
        $data->delete();
        return redirect()->route('customer')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = customer::all();
        $PDF = PDF::loadView('Administrator/customer/reportcustomer', array('data' => $data));
        return $PDF->stream('data-customer.pdf');
    }
}
