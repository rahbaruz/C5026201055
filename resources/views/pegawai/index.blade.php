<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

    @extends('layout.bahagia')

    @section('title', 'Data Pegawai')
    @section('judulhalaman', 'Data Pegawai')

    @section('konten')

	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <div class="col-4">
        <form action="/pegawai/cari" method="GET">
            <div class="input-group-sm">
                <input type="text" class="form-control" name="cari" placeholder="Cari Nama/Alamat Pegawai ->" value="{{old('cari')}}">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}

</body>
</html>

@endsection
