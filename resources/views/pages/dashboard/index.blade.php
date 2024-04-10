@extends('layouts.main')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">person</i>
                        </div>
                        <p class="card-category">Total Guest</p>
                        <h3 class="card-title">{{ $totalGuests }} Orang

                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">

                            <a href="/guests" class="warning-link">Get More Guests...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">done_outline</i>
                        </div>
                        <p class="card-category">Total hadir</p>
                        <h3 class="card-title">{{ $totalHadir }} Orang</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> update absensi {{ $date }}, {{ $time_first }}
                            -
                            {{ $time_last }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">disabled_by_default</i>
                        </div>
                        <p class="card-category">Total Tidak hadir</p>
                        <h3 class="card-title">10 Orang</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> update absensi {{ $date }},
                            {{ $time_first }} -
                            {{ $time_last }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Informasi Kehadiran</h4>
                        <p class="card-category">update absensi {{ $date }}, {{ $time_first }} -
                            {{ $time_last }}</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Waktu absen</th>
                                <th>status</th>
                            </thead>
                            <tbody>
                                @foreach ($absenBerdasarkanTanggalTerbaru as $absen)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $absen->nama_lengkap }}</td>
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
@endsection
