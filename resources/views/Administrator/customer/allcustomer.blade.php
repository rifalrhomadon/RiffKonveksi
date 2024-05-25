@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Barang</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Barang</li>
        <li class="breadcrumb-item"><a href="{{ route('barang') }}"></a>Barang</li>
        <li class="breadcrumb-item active">Detail Data Barang</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allbarang', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Barang</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="nama_customer" class="form-label">Nama Customer</label>
            <input type="text" class="form-control" id="nama_customer" name="nama_customer" required>
          </div>
          <div class="col-12">
            <label for="alamat_customer" class="form-label">Alamat Customer</label>
            <input type="text" class="form-control" id="alamat_customer" name="alamat_customer" required>
          </div>
          <div class="col-12">
            <label for="telepon_customer" class="form-label">Telepon Customer</label>
            <input type="number" class="form-control" id="telepon_customer" name="telepon_customer" required> 
          </div>
          <div class="col-12">
            <label for="email_customer" class="form-label">Email Customer</label>
            <input type="text" class="form-control" id="email_customer" name="email_customer" required>
          </div>
        </form>
      </div>
    </div>
@endsection