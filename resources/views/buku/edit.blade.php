<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
</head>
<body>

    <form method="POST" action="{{ route('buku.update', $buku->id ) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
        <table>
            <tr>
                <td>Penulis</td>
                <td>:&nbsp;<input type="text" name="penulis" value="{{ $buku->penulis }}"/></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>:&nbsp;<input type="text" name="judul" value="{{ $buku->judul }}"/></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:&nbsp;<input type="text" name="kota" value="{{ $buku->kota }}"/></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>:&nbsp;<input type="text" name="penerbit" value="{{ $buku->penerbit }}"/></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:&nbsp;<input type="text" name="tahun" value="{{ $buku->tahun }}"/></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>

</body>
</html>