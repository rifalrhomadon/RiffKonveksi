<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\supplier;
use App\Models\customer;
use App\Models\biaya;
use App\Models\outlet;
use App\Models\invoice;
use App\Models\transaksipembelian;
use App\Models\transaksipenjualan;
use App\Models\detailtransaksipembelian;
use App\Models\detailtransaksipenjualan;
use App\Models\kasbank;
use App\Models\bukubesar;
use App\Models\penggunaa;
use App\Models\pengeluaran;
use App\Models\pegawai;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function dashboard()
    {
        $data_barang = barang::get()->count();
        $data_supplier = supplier::get()->count();
        $data_customer = customer::get()->count();
        $data_biaya = biaya::get()->count();
        $data_outlet = outlet::get()->count();
        $data_invoice = invoice::get()->count();
        $data_transaksipembelian = transaksipembelian::get()->count();
        $data_transaksipenjualan = transaksipenjualan::get()->count();
        $data_detailtransaksipembelian = detailtransaksipembelian::get()->count();
        $data_detailtransaksipenjualan = detailtransaksipenjualan::get()->count();
        $data_transaksipembelian = transaksipembelian::get()->count();
        $data_kasbank = kasbank::get()->count();
        $data_bukubesar = bukubesar::get()->count();
        $data_pengguna = penggunaa::get()->count();
        $data_pengeluaran = pengeluaran::get()->count();
        $data_pegawai = pegawai::get()->count();
        return view('dashboard', compact( 'data_barang', 'data_supplier', 'data_customer', 'data_biaya', 'data_outlet', 'data_invoice', 'data_transaksipembelian', 'data_transaksipenjualan', 'data_detailtransaksipembelian', 'data_detailtransaksipenjualan', 'data_kasbank', 'data_bukubesar', 'data_pengguna', 'data_pengeluaran', 'data_pegawai'));
    }
}
