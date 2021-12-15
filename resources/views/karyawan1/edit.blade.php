@extends('/karyawan1/app')

@section('content')

@foreach($karyawan1 as $k)
    <h3>Ubah Data Karyawan {{ $k->Nama }}</h3>
    <form action="/karyawan1/update" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIP</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="NIP"
                value="{{ $k->NIP }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="Nama"
                value="{{ $k->Nama }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pangkat</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="Pangkat"
                value="{{ $k->Pangkat }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Gaji</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="Gaji"
                value="{{ $k->Gaji }}">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
    @endforeach
@endsection
