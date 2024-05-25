@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Outlet</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Outlet</li>
        <li class="breadcrumb-item"><a href="{{ route('outlet') }}"></a>Data Outlet</li>
        <li class="breadcrumb-item active">Tambah Data Outlet</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertcustomer') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_outlet" class="form-label">Nama Outlet</label>
            <input type="text" class="form-control" id="nama_outlet" name="nama_outlet" required>
          </div>
          <div class="col-12">
            <label for="alamat_outlet" class="form-label">Alamat Outlet</label>
            <input type="text" class="form-control" id="alamat_outlet" name="alamat_outlet" required>
          </div>
          <div class="col-12">
            <label for="email_outlet" class="form-label">Email Outlet</label>
            <input type="text" class="form-control" id="email_outlet" name="email_outlet" required> 
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection