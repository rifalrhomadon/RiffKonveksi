<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\TransaksipembelianController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('/layout/template'); // Replace 'dashboard' with your actual view name
});

Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

//route barang

Route::get('/barang', [BarangController::class, 'index'])->name('barang');

Route::get('/barang/addbarang', [BarangController::class, 'add'])->name('addbarang');

Route::post('/barang/addbarang', [BarangController::class, 'insertdata'])->name('insertbarang');
    
Route::get('/barang/updatebarang/{id}', [BarangController::class, 'readdata'])->name('readbarang');

Route::get('/barang/allbarang/{id}', [BarangController::class, 'alldata'])->name('allbarang');
    
Route::post('/barang/updatebarang/{id}', [BarangController::class, 'updatedata'])->name('updatebarang');
    
Route::get('/barang/{id}', [BarangController::class, 'deletedata'])->name('deletebarang');

Route::get('/pdf-barang', [BarangController::class, 'exportpdf'])->name('pdfbarang');

//route supplier

Route::get('/supplier', [supplierController::class, 'index'])->name('supplier');

Route::get('/supplier/addsupplier', [supplierController::class, 'add'])->name('addsupplier');

Route::post('/supplier/addsupplier', [supplierController::class, 'insertdata'])->name('insertsupplier');
    
Route::get('/supplier/updatesupplier/{id}', [supplierController::class, 'readdata'])->name('readsupplier');

Route::get('/supplier/allsupplier/{id}', [supplierController::class, 'alldata'])->name('allsupplier');
    
Route::post('/supplier/updatesupplier/{id}', [supplierController::class, 'updatedata'])->name('updatesupplier');
    
Route::get('/supplier/{id}', [supplierController::class, 'deletedata'])->name('deletesupplier');

Route::get('/pdf-supplier', [supplierController::class, 'exportpdf'])->name('pdfsupplier');

//route customer

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');

Route::get('/customer/addcustomer', [CustomerController::class, 'add'])->name('addcustomer');

Route::post('/customer/addcustomer', [CustomerController::class, 'insertdata'])->name('insertcustomer');
    
Route::get('/customer/updatecustomer/{id}', [CustomerController::class, 'readdata'])->name('readcustomer');

Route::get('/customer/allcustomer/{id}', [CustomerController::class, 'alldata'])->name('allcustomer');
    
Route::post('/customer/updatecustomer/{id}', [CustomerController::class, 'updatedata'])->name('updatecustomer');
    
Route::get('/customer/{id}', [CustomerController::class, 'deletedata'])->name('deletecustomer');

Route::get('/pdf-customer', [CustomerController::class, 'exportpdf'])->name('pdfcustomer');

//route biaya

Route::get('/biaya', [BiayaController::class, 'index'])->name('biaya');

Route::get('/biaya/addbiaya', [BiayaController::class, 'add'])->name('addbiaya');

Route::post('/biaya/addbiaya', [BiayaController::class, 'insertdata'])->name('insertbiaya');
    
Route::get('/biaya/updatebiaya/{id}', [BiayaController::class, 'readdata'])->name('readbiaya');

Route::get('/biaya/allbiaya/{id}', [BiayaController::class, 'alldata'])->name('allbiaya');
    
Route::post('/biaya/updatebiaya/{id}', [BiayaController::class, 'updatedata'])->name('updatebiaya');
    
Route::get('/biaya/{id}', [BiayaController::class, 'deletedata'])->name('deletebiaya');

Route::get('/pdf-biaya', [BiayaController::class, 'exportpdf'])->name('pdfbiaya');

//route pegawai

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');

Route::get('/pegawai/addpegawai', [PegawaiController::class, 'add'])->name('addpegawai');

Route::post('/pegawai/addpegawai', [PegawaiController::class, 'insertdata'])->name('insertpegawai');
    
Route::get('/pegawai/updatepegawai/{id}', [PegawaiController::class, 'readdata'])->name('readpegawai');

Route::get('/pegawai/allpegawai/{id}', [PegawaiController::class, 'alldata'])->name('allpegawai');
    
Route::post('/pegawai/updatepegawai/{id}', [PegawaiController::class, 'updatedata'])->name('updatepegawai');
    
Route::get('/pegawai/{id}', [PegawaiController::class, 'deletedata'])->name('deletepegawai');

Route::get('/pdf-pegawai', [PegawaiController::class, 'exportpdf'])->name('pdfpegawai');

//route transaksipembelian

Route::get('/transaksipembelian', [TransaksipembelianController::class, 'index'])->name('transaksipembelian');

Route::get('/transaksipembelian/addtransaksipembelian', [TransaksipembelianController::class, 'add'])->name('addtransaksipembelian');

Route::post('/transaksipembelian/addtransaksipembelian', [TransaksipembelianController::class, 'insertdata'])->name('inserttransaksipembelian');
    
Route::get('/transaksipembelian/updatetransaksipembelian/{id}', [TransaksipembelianController::class, 'readdata'])->name('readtransaksipembelian');

Route::get('/transaksipembelian/alltransaksipembelian/{id}', [TransaksipembelianController::class, 'alldata'])->name('alltransaksipembelian');
    
Route::post('/transaksipembelian/updatetransaksipembelian/{id}', [TransaksipembelianController::class, 'updatedata'])->name('updatetransaksipembelian');
    
Route::get('/transaksipembelian/{id}', [TransaksipembelianController::class, 'deletedata'])->name('deletetransaksipembelian');

Route::get('/pdf-transaksipembelian', [TransaksipembelianController::class, 'exportpdf'])->name('pdftransaksipembelian');

//route pegawai

Route::get('/outlet', [OutletController::class, 'index'])->name('outlet');

Route::get('/outlet/addoutlet', [OutletController::class, 'add'])->name('addoutlet');

Route::post('/outlet/addoutlet', [OutletController::class, 'insertdata'])->name('insertoutlet');
    
Route::get('/outlet/updateoutlet/{id}', [OutletController::class, 'readdata'])->name('readoutlet');

Route::get('/outlet/alloutlet/{id}', [OutletController::class, 'alldata'])->name('alloutlet');
    
Route::post('/outlet/updateoutlet/{id}', [OutletController::class, 'updatedata'])->name('updateoutlet');
    
Route::get('/outlet/{id}', [OutletController::class, 'deletedata'])->name('deleteoutlet');

Route::get('/pdf-outlet', [OutletController::class, 'exportpdf'])->name('pdfoutlet');