<!DOCTYPE html>
<html>
<head>
    <title>Buku</title>
</head>
<body>
 
    <h3>Data Buku</h3>

    <a href="/buku/export/">Export</a>

    <br/>
    <br/>
 
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Tahun Terbit</th>


        </tr>
        @foreach($buku as $a)
        <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->judul }}</td>
            <td>{{ $a->tahun_terbit }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
