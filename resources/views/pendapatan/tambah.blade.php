<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>

@extends('layout.bahagia')
@section('title', 'Tambah Data Pendapatan Pegawai')
@section('judulhalaman', 'Menambah Data Pendapatan Pegawai')
@section('konten')

	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		Nama Pegawai <input type="number" name="ID" required="required"> <br/>
		Bulan <input type="number" name="bulan" required="required"> <br/>
        Tahun <input type="number" name="tahun" required="required"> <br/>
		Gaji <input type="number" name="gaji" required="required"> <br/>
		Tunjangan <input type="number" name="tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
</body>
</html>
