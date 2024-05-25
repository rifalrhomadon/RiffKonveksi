<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>

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
    <h1>Data Pegawai</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>Nama Pegawai</th>
                <th>Jabatan Pegawai</th>
                <th>Alamat Pegawai</th>
                <th>Telepon Pegawai</th>
                <th>Email Pegawai</th>
                <th>Gaji Pegawai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->nama_pegawai }}</td>
                    <td>{{ $row->jabatan_pegawai }}</td>
                    <td>{{ $row->alamat_pegawai }}</td>
                    <td>{{ $row->telepon_pegawai }}</td>
                    <td>{{ $row->email_pegawai }}</td>
                    <td>{{ $row->gaji_pegawai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>