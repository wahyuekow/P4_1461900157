<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Buku</title>
    <style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
    thead {
        background-color: #f2f2f2;
    }
    th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
            padding: 8px 16px ;
            text-decoration: none;
            }
    </style>
</head>
<body>
<div style="overflow-x:auto;">
    <a class="tambah" href=""> Tambah Data </a>
    <a href="/buku/export" target="_blank">Export Excel<a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Tahun Terbit</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $id=1; ?>
            @foreach ($buku as $a)
            <tr>
                <td>{{ $id++ }}</td>
                <td>{{ $a->judul }}</td>
                <td>{{ $a->tahun_terbit }}</td>
                <td>
                    <a href="">Edit</a>
                    |
                    <a href="">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</body>