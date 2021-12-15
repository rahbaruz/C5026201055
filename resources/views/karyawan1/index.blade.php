@extends('/karyawan1/app')

@section('content')
    <h3>Daftar Semua Karyawan</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Pangkat</th>
                <th scope="col">Gaji</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan1 as $k)
                <tr>
                    <th scope="row">
                        {{ $loop->iteration }}
                    </th>
                    <td>
                        {{ $k->NIP }}
                    </td>
                    <td>
                        {{ $k->Nama }}
                    </td>
                    <td>
                        {{ $k->Pangkat }}
                    </td>
                    <td>
                        {{ number_format($k->Gaji, 0, ',', '.') }}
                    </td>
                    <td>
                        <a href="/karyawan1/view/{{ $k->NIP }}">View</a>
                        |
                        <a href="/karyawan1/edit/{{ $k->NIP }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $karyawan1->links() }}

@endsection
