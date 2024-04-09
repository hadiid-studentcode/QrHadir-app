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
                        <h3 class="card-title">30 Orang

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
                        <h3 class="card-title">10 Orang</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
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
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">informasi Kehadiran</h4>
                        <p class="card-category">update pada absensi 12-12-2021, 12:00 - 13:00</p>
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
                                <tr>
                                    <td>1</td>
                                    <td>Putra Saputra</td>
                                    <td>12.10</td>
                                    <td>hadir</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
