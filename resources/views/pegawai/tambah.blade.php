<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

    @extends('layout.bahagia')

    @section('title', 'Tambah Data Pegawai')
    @section('judulhalaman', 'Tambah Pegawai')

    @section('konten')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

    @endsection
</body>
</html>
