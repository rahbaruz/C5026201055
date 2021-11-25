<!DOCTYPE html>
<html>
<head>
	<title>Tugas Tabel CRUD - Pendapatan</title>
</head>
<body>

	<h2>5026201055-Rahbar Uzma Taswirul Afkar</h2>
	<h3>Tabel CRUD - Pendapatan</h3>

	<a href="/pendapatan/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Jumlah Gaji</th>
			<th>Jumlah Tunjangan</th>
            <th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
			<td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
