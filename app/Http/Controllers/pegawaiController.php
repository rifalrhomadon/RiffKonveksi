<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PegawaiController extends Controller
{
    public function index(){
        $data = pegawai::get(); 
        return view('Administrator/pegawai/pegawai', compact('data'));
    }

    public function add(){
        return view('Administrator/pegawai/addpegawai');
    }

    public function insertdata(Request $request){


    $request->validate([
        'nama_pegawai' => 'required',
        'jabatan_pegawai' => 'required',
        'alamat_pegawai' => 'required', 
        'telepon_pegawai' => 'required',
        'email_pegawai' => 'required',
        'gaji_pegawai' => 'required',
    ]);

    $data = pegawai::create([
        'nama_pegawai' => $request->nama_pegawai,
        'jabatan_pegawai' => $request->jabatan_pegawai,
        'alamat_pegawai' => $request->alamat_pegawai,
        'telepon_pegawai' => $request->telepon_pegawai,
        'email_pegawai' => $request->email_pegawai,
        'gaji_pegawai' => $request->gaji_pegawai,
    ]);
        return redirect()->route('pegawai')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = pegawai::find($id);
        return view('Administrator/pegawai/updatepegawai' , compact('data'));
    }

    public function alldata($id){
        $data = pegawai::find($id);
        return view('Administrator/pegawai/allpegawai' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = pegawai::find($id);
        $request->validate([
            'nama_pegawai' => 'required',
            'jabatan_pegawai' => 'required',
            'alamat_pegawai' => 'required', 
            'telepon_pegawai' => 'required',
            'email_pegawai' => 'required',
            'gaji_pegawai' => 'required',
        ]);
    
        $data = pegawai::update([
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan_pegawai' => $request->jabatan_pegawai,
            'alamat_pegawai' => $request->alamat_pegawai,
            'telepon_pegawai' => $request->telepon_pegawai,
            'email_pegawai' => $request->email_pegawai,
            'gaji_pegawai' => $request->gaji_pegawai,
        ]);
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = pegawai::all();
        $PDF = PDF::loadView('Administrator/pegawai/reportpegawai', array('data' => $data));
        return $PDF->stream('data-pegawai.pdf');
    }
}
