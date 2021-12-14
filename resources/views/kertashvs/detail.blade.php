@extends('layout.bahagia')
@section('title', 'Detail Data Kertas HVS')
@section('judulhalaman', 'Melihat Detail Data Kertas HVS')
@section('konten')

<div>
    <a href="/kertashvs" class="btn btn-primary btn-sm my-2 mb-3">Kembali</a>
</div>

@foreach ($kertashvs as $k)
<div class="row mb-3">
    <div class="col-2">
        <label for="kode" class="form-label">Kode</label>
    </div>
    <div class="col-5">
        {{ $k->kodekertashvs }}
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="merk" class="form-label">Merk</label>
    </div>
    <div class="col-5">
        {{ $k->merkkertashvs }}
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="stock" class="form-label">Stock</label>
    </div>
    <div class="col-5">
        {{ $k->stockkertashvs }}
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="tersedia" class="form-label">Tersedia</label>
    </div>
    <div class="col-5">
        {{ $k->tersedia }}
    </div>
</div>




@endforeach
@endsection
