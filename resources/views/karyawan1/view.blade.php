@extends('/karyawan1/app')

@section('content')
@foreach($karyawan1 as $k)
    <h3>Detail Data {{ $k->Nama }}</h3>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIP</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="NIP" value="{{ $k->NIP }}"
            disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Nama" value="{{ $k->Nama }}"
            disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pangkat</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Pangkat"
            value="{{ $k->Pangkat }}" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gaji</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Gaji"
            value=" {{ number_format($k->Gaji, 0, ',', '.') }}" disabled>
    </div>
    @endforeach
@endsection
