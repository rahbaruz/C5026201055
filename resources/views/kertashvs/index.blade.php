@extends('layout.bahagia')
@section('title', 'Data Kertas HVS')
@section('judulhalaman', 'Melihat Data Kertas HVS')
@section('konten')

<div class="container">
    <div class="row">
        <div class="col-3">
        <a href="/kertashvs/tambah"> + Tambah Kertas HVS</a>
        </div>
        <div class="col-5">
        </div>
        <div class="col-4">
            <form action="/kertashvs/cari" method="GET">
                <div class="input-group-sm">
                    <input type="text" class="form-control" name="cari" placeholder="Cari Merk Kertas HVS ->" value="{{old('cari')}}">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>

<table border="1" class="table-hover table-bordered table-dark align-left">
    <tr class="text-center table-primary">
        <th>Kode</th>
        <th>Merk</th>
        <th>Stock</th>
        <th>Tersedia</th>
        <th width = "40%"> Opsi </th>
    </tr>
    @foreach($kertashvs as $k)
    <tr>
        <td>{{ $k->kodekertashvs }}</td>
        <td>{{ $k->merkkertashvs }}</td>
        <td>{{ $k->stockkertashvs }}</td>
        <td>{{ $k->tersedia }}</td>
        <td class="text-center">
            <a href="/kertashvs/detail/{{ $k->kodekertashvs }}">Detail</a>
            |
            <a href="/kertashvs/edit/{{ $k->kodekertashvs }}">Edit</a>
            |
            <a href="/kertashvs/hapus/{{ $k->kodekertashvs }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $kertashvs->links() }}

@endsection
</body>
</html>
