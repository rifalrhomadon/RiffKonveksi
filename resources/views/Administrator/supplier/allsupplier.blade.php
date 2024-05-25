@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Supplier</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Supplier</li>
        <li class="breadcrumb-item"><a href="{{ route('supplier') }}"></a>Supplier</li>
        <li class="breadcrumb-item active">Detail Data Supplier</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allsupplier', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Barang</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
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
        </form>
      </div>
    </div>
@endsection