<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/Mahasiswa">Kembali</a>
    <h1>Form Tambah Data Mahasiswa</h1>

    <form method="post" action="/Mahasiswa/update/{{$mhs->id}}">
    @csrf
    Npm <input type="text" name="npm" required value="{{$mhs->npm}}"> <br/>
    Nama <input type="text" name="nama" required value="{{$mhs->nama}}"> <br/>
    Jurusan <input type="text" name="jurusan" required value="{{$mhs->jurusan}}"> <br/>

    <button type="submit">UPDATE</button>
</form>
</body>
</html>