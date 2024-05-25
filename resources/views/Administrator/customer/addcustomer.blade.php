@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Customer</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Customer</li>
        <li class="breadcrumb-item"><a href="{{ route('customer') }}"></a>Data Customer</li>
        <li class="breadcrumb-item active">Tambah Data Customer</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertcustomer') }}" method="POST">
        @csrf
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
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection