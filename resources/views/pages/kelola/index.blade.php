@extends('layouts.main')

@section('main')
    <h1>Halaman kelola Absen</h1>

    {{-- mengatur buka absen --}}
    <form action="/kelola-absensi" method="post">
        @csrf
        <label for="tanggal">tanggal</label>
        <input type="date" name="tanggal" id="tanggal"> <br>

        <label for="check_in">Check in</label>
        <input type="time" name="check_in" id="check_in"> <br>

        <label for="check_out">Check_out</label>
        <input type="time" name="check_out" id="check_out"> <br>

        <button type="submit">Submit</button>

    </form>


    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Check_in</th>
                <th>Check_out</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelola_absensi as $kelola_absen)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kelola_absen->date }}</td>
                    <td>{{ $kelola_absen->check_in_time }}</td>
                    <td>{{ $kelola_absen->check_out_time }}</td>
                    <td>

                        <form action="/kelola-absensi/{{ $kelola_absen->id }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit">Delete</button>

                        </form>

                    </td>
                </tr>
            @endforeach

            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
        </tbody>
    </table>
@endsection
