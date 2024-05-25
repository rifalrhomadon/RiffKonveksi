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
          <<div class="col-12">
            <label for="kategori_biaya" class="form-label">Kategori Biaya</label>
            <input type="text" class="form-control" id="kategori_biaya" name="kategori_biaya" required>
          </div>
          <div class="col-12">
            <label for="jumlah_biaya" class="form-label">Jumlah Biaya</label>
            <input type="number" class="form-control" id="jumlah_biaya" name="jumlah_biaya" required> 
          </div>
        </form>
      </div>
    </div>
@endsection