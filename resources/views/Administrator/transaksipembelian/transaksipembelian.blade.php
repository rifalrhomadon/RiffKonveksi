@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Data Transaksi Pembelian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Transaksi Pembelian</li>
        <li class="breadcrumb-item active">Transaksi Pembelian</li>
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
        <a href="{{ route('addtransaksipembelian') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('pdftransaksipembelian') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
                <div class="card-body table-responsive">
                    <table class='table datatable table-striped table-bordered' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Supplier</th>
                                <th>Nama Pegawai</th>
                                <th>Tanggal Pembelian</th>
                                <th>Total Pembelian</th>
                                <th>Diskon</th>
                                <th>Pajak</th>
                                <th>Metode Pembelian</th>
                                <th>Status Pembelian</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                            @foreach ($data as $item=>$row)
                            <tr>
                                    <td style="text-align: center;">{{ $item+1 }}</td>
                                    <td>{{ $row->id_supplier}}</td>
                                    <td>{{ $row->nama_pegawai}}</td>
                                    <td>{{ $row->tanggal_pembelian}}</td>
                                    <td>{{ $row->total_pembelian}}</td>
                                    <td>{{ $row->diskon}}</td>
                                    <td>{{ $row->pajak}}</td>
                                    <td>{{ $row->metode_pembelian}}</td>
                                    <td>{{ $row->status_pembelian}}</td>
                                    <td>
                                        <a href="{{ route('alltransaksipembelian', $row->id) }}" class="btn icon btn-primary" data-bs-target="{{ $row->id }}"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('readtransaksipembelian', $row->id) }}" class="btn icon btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('deletetransaksipembelian', $row->id) }}" class="btn icon btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash-alt"></i></i></a>
                                    </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="8"><p class="text text-center">No results found.</p></td>
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