<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tambah</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
</head>
<body>
    <form method="POST" action="{{ route('buku.store') }}">
    {{ csrf_field() }}
        <table>
            <tr>
                <td>Penulis</td>
                <td>:&nbsp;<input type="text" name="penulis" id="penulis"/></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>:&nbsp;<input type="text" name="judul" id="judul"/></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:&nbsp;<input type="text" name="kota" id="kota"/></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>:&nbsp;<input type="text" name="penerbit" id="penerbit"/></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:&nbsp;<input type="text" name="tahun" id="tahun"/></td>
            </tr>
        </table>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>