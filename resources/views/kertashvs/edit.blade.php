@extends('layout.bahagia')
@section('title', 'Data Kertas HVS')
@section('judulhalaman', 'Melihat Data Kertas HVS')
@section('konten')
<div>
    <a href="/kertashvs" class="btn btn-primary btn-sm my-2 mb-3">Kembali</a>
</div>

@foreach ($kertashvs as $k)
    <form action="/kertashvs/update" method="post" class="table-responsive">
       {{ csrf_field() }}
    <div class="row mb-3">
    <div class="col-2">
    <label for="kode" class="form-label">Kode</label>
</div>
    <div class="col-5">
        <input type="text" class="form-control" name="kode" value="{{ $k->kodekertashvs }}" required>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
    <label for="merk" class="form-label">Merk</label>
</div>
    <div class="col-5">
        <input type="text" class="form-control" id="merk" name="merk" value="{{ $k->merkkertashvs }}" required>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
    <label for="stock" class="form-label">Stock</label>
</div>
    <div class="col-5">
        <input type="text" class="form-control" id="stock" name="stock" value="{{ $k->stockkertashvs }}" required>
</div>
</div>
<div class="row mb-3">
    <div class="col-2">
    <label for="tersedia" class="form-label">Tersedia</label>
</div>
    <div class="col-5">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="tersedia" id="tersedia" value="Y" @if ($k->tersedia === "Y" ) checked="checked" @endif>
            <label class="form-check-label" for="tersedia">
              Ya
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="tersedia" id="tidaktersedia" value="N" @if ($k->tersedia === "N") checked="checked" @endif>
            <label class="form-check-label" for="tidaktersedia">
              Tidak
            </label>
        </div>

        {{-- Simpan Data --}}

        <div> <input class="btn btn-success mt-3" type="submit" value="Simpan Data">
        </div>
</div>
</form>

@endforeach
@endsection
