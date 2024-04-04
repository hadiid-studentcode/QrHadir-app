@extends('layouts.main')

@section('main')
    <h1>Halaman kelola Absen tanggal {{ $date }} waktu {{ $first_time }} - {{ $last_time }}</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absensi as $absen)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $absen->nama_lengkap }}</td>
                    <td>{{ $absen->date }}</td>
                    <td>{{ $absen->time }}</td>
                    <td>{{ $absen->status }}</td>
                </tr>
            @endforeach


            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
        </tbody>
    </table>
@endsection
