@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Barang</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Barang</li>
        <li class="breadcrumb-item"><a href="{{ route('barang') }}"></a>Data Barang</li>
        <li class="breadcrumb-item active">Tambah Data Barang</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertbarang') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
          </div>
          <div class="col-12">
            <label for="harga_beli" class="form-label">Harga Beli</label>
            <input type="number" class="form-control" id="harga_beli" name="harga_beli" required> 
          </div>
          <div class="col-12">
            <label for="harga_jual" class="form-label">Harga Jual</label>
            <input type="number" class="form-control" id="harga_jual" name="harga_jual" required> 
          </div>
          <div class="col-12">
            <label for="stok" class="form-label">Stok Barang</label>
            <input type="number" class="form-control" id="stok" name="stok" required> 
          </div>
          <div class="col-12">
            <label for="kategori" class="form-label">Kategori Barang</label>
            <input type="text" class="form-control" id="kategori" name="kategori" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection