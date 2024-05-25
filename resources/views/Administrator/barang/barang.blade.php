@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Data Barang</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Barang</li>
    </ol>
    </nav>
</div><!-- End Page Title -->
{{-- Alert Success Add --}}
    @if (session()->has('primary'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('primary') }}
        </div>
    @endif
{{-- Alert Success Update --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
{{-- Alert Success Delete --}}
    @if (session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('danger') }}
        </div>
    @endif
<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="buttons">
        <a href="{{ route('addbarang') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('pdfbarang') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
                <div class="card-body table-responsive">
                    <table class='table datatable table-striped table-bordered' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Stok</th>
                                <th>kategori</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                            @foreach ($data as $item=>$row)
                            <tr>
                                    <td style="text-align: center;">{{ $item+1 }}</td>
                                    <td>{{ $row->nama_barang}}</td>
                                    <td>{{ $row->harga_beli }}</td>
                                    <td>{{ $row->harga_jual }}</td>
                                    <td>{{ $row->stok }}</td>
                                    <td>{{ $row->kategori }}</td>
                                    <td>
                                        <a href="{{ route('allbarang', $row->id) }}" class="btn icon btn-primary" data-bs-target="{{ $row->id }}"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('readbarang', $row->id) }}" class="btn icon btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('deletebarang', $row->id) }}" class="btn icon btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash-alt"></i></i></a>
                                    </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="5"><p class="text text-center">No results found.</p></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection