@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Pegawai</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pegawai</li>
        <li class="breadcrumb-item"><a href="{{ route('pegawai') }}"></a>Data Pegawai</li>
        <li class="breadcrumb-item active">Tambah Data Pegawai</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertpegawai') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
          </div>
          <div class="col-12">
            <label for="jabatan_pegawai" class="form-label">Jabatan Pegawai</label>
            <input type="text" class="form-control" id="jabatan_pegawai" name="jabatan_pegawai" required>
          </div>
          <div class="col-12">
            <label for="alamat_pegawai" class="form-label">Alamat Pegawai</label>
            <input type="text" class="form-control" id="alamat_pegawai" name="alamat_pegawai" required>
          </div>
          <div class="col-12">
            <label for="telepon_pegawai" class="form-label">Telepon Pegawai</label>
            <input type="number" class="form-control" id="telepon_pegawai" name="telepon_pegawai" required>
          </div>
          <div class="col-12">
            <label for="email_pegawai" class="form-label">Email Pegawai</label>
            <input type="text" class="form-control" id="email_pegawai" name="email_pegawai" required> 
          </div>
          <div class="col-12">
            <label for="gaji_pegawai" class="form-label">Gaji Pegawai</label>
            <input type="number" class="form-control" id="gaji_pegawai" name="gaji_pegawai" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection