@extends('layouts.main')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Halaman Kelola Absensi</h4>
                        <p class="card-category">{{ $date }}, {{ $first_time }} Wib s.d {{ $last_time }} Wib</p>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>

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

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
