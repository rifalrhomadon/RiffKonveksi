@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Transaksi Pembelian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Transaksi Pembelian</li>
        <li class="breadcrumb-item"><a href="{{ route('transaksipembelian') }}"></a>Transaksi Pembelian</li>
        <li class="breadcrumb-item active">Ubah Data Transaksi Pembelian</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatetransaksipembelian', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_supplier" class="form-label">ID Supplier</label>
              <select id="id_supplier" class="form-control" name="id_supplier" required>
                <option value="">-- Select --</option>
                  @foreach ($data_supplier as $row)
                    <option value="{{ $row->id }}">{{ $row->id }}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
          <label for="id_pegawai" class="form-label">Nama Pegawai</label>
            <select id="id_pegawai" class="form-control" name="id_pegawai" required>
              <option value="">-- Select --</option>
                @foreach ($data_pegawai as $row)
                  <option value="{{ $row->id }}">{{ $row->nama_pegawai }}</option>
                @endforeach
            </select>
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
            <div class="text-center">
              <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
              <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
            </div>
        </form>
      </div>
    </div>
@endsection