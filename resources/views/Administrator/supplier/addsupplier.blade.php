@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Supplier</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Supplier</li>
        <li class="breadcrumb-item"><a href="{{ route('supplier') }}"></a>Data Supplier</li>
        <li class="breadcrumb-item active">Tambah Data Supplier</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertsupplier') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="alamat_supplier" class="form-label">Alamat Supplier</label>
            <input type="text" class="form-control" id="alamat_supplier" name="alamat_supplier" required>
          </div>
          <div class="col-12">
            <label for="telepon_supplier" class="form-label">Harga Beli</label>
            <input type="number" class="form-control" id="telepon_supplier" name="telepon_supplier" required> 
          </div>
          <div class="col-12">
            <label for="email_supplier" class="form-label">Email Supplier</label>
            <input type="text" class="form-control" id="email_supplier" name="email_supplier" required>
          </div>
          <div class="col-12">
            <label for="web_supplier" class="form-label">Website Supplier</label>
            <input type="text" class="form-control" id="web_supplier" name="web_supplier" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection