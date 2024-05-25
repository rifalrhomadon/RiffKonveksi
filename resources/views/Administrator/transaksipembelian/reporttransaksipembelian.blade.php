<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Pembelian</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }
        h1 {
            text-align: center;
        }
        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: #0d47a1;
            color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Transaksi Pembelian</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>ID Supplier</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Pembelian</th>
                <th>Total Pembelian</th>
                <th>Diskon</th>
                <th>Pajak</th>
                <th>Metode Pembelian</th>
                <th>Status Pembelian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->id_supplier}}</td>
                    <td>{{ $row->nama_pegawai}}</td>
                    <td>{{ $row->tanggal_pembelian}}</td>
                    <td>{{ $row->total_pembelian}}</td>
                    <td>{{ $row->diskon}}</td>
                    <td>{{ $row->pajak}}</td>
                    <td>{{ $row->metode_pembelian}}</td>
                    <td>{{ $row->status_pembelian}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>