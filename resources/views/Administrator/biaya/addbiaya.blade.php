@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Biaya</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Biaya</li>
        <li class="breadcrumb-item"><a href="{{ route('barang') }}"></a>Data Biaya</li>
        <li class="breadcrumb-item active">Tambah Data Biaya</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertbiaya') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="kategori_biaya" class="form-label">Kategori Biaya</label>
            <input type="text" class="form-control" id="kategori_biaya" name="kategori_biaya" required>
          </div>
          <div class="col-12">
            <label for="jumlah_biaya" class="form-label">Jumlah Biaya</label>
            <input type="number" class="form-control" id="jumlah_biaya" name="jumlah_biaya" required> 
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection