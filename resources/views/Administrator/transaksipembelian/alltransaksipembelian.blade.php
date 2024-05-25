@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Transaksi Pembelian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Transaksi Pembelian</li>
        <li class="breadcrumb-item"><a href="{{ route('transaksipembelian') }}"></a>Transaksi Pembelian</li>
        <li class="breadcrumb-item active">Detail Data Transaksi Pembelian</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('alltransaksipembelian', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Transaksi Pembelian</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="id_supplier" class="form-label">ID Supplier</label>
            <input type="text" class="form-control" id="id_supplier" name="id_supplier" value="{{ $data->id_tiket_futsal }}" readonly>
          </div>
          <div class="col-12">
            <label for="id_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value="{{ $data->pengguna->nama_pengguna }}" readonly>
          </div>
          <div class="col-12">
          <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label>
          <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian" required>
        </div>
          <div class="col-12">
            <label for="total_pembelian" class="form-label">Total Pembelian</label>
            <input type="number" class="form-control" id="total_pembelian" name="total_pembelian" required>
          </div>
          <div class="col-12">
            <label for="diskon" class="form-label">Diskon</label>
            <input type="number" class="form-control" id="diskon" name="diskon" required>
          </div>
          <div class="col-12">
            <label for="pajak" class="form-label">Pajak</label>
            <input type="number" class="form-control" id="pajak" name="pajak" required>
          </div>
          <div class="col-12">
          <label for="metode_pembelian" class="form-label">Metode Pembelian</label>
          <input type="text" class="form-control" id="metode_pembelian" name="metode_pembelian" required>
        </div>
        <div class="col-12">
          <label for="status_pembelian" class="form-label">Status Pembelian</label>
          <input type="text" class="form-control" id="status_pembelian" name="status_pembelian" required>
        </div>
        </form>
      </div>
    </div>
@endsection