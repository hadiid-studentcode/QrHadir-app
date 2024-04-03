@extends('layouts.main')

@section('main')
    <h1>Halaman Guest/Tamu</h1>


    {{-- jadikan modal --}}
    <form action="/guests" method="post">
        @csrf

        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama"> <br>

        <label for="delegasi">Delegasi</label>
        <input type="text" name="delegasi" id="delegasi"> <br>

        <button type="submit">Submit</button>

    </form>


    <h1>Data Mahasiswa</h1>
    <a href="/cetak" target="_blank">Cetak</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Delegasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guests as $guest)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->delegasi }}</td>
                    <td>

                        <a href="/guests/{{ $guest->id }}">Lihat</a>




                        <form action="/guests/{{ $guest->id }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit">Hapus</button>

                        </form>


                    </td>
                </tr>
            @endforeach




            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
        </tbody>
    </table>
@endsection
