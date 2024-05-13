@extends('layouts.main')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambahAbsensi">Tambah</button>
                <div class="card">

                    <!-- Modal -->
                    <div class="modal fade" id="tambahAbsensi" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ url('/kelola-absensi') }}" method="post">

                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Kelola Absensi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label text-dark">Tanggal</label>
                                            <input type="date" class="form-control text-dark" id="tanggal"
                                                name="tanggal">

                                        </div>

                                        <div class="mb-3">
                                            <label for="checkin" class="form-label text-dark">Check in</label>
                                            <input type="time" class="form-control text-dark" id="check_in"
                                                name="check_in">
                                        </div>

                                        <div class="mb-3">
                                            <label for="check_out" class="form-label text-dark">Check Out</label>
                                            <input type="time" class="form-control text-dark" id="check_out"
                                                name="check_out">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Kelola Absensi</h4>
                    <p class="card-category">Manajemen Kelola Absensi untuk dibuka</p>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Check_in</th>
                                <th>Check_out</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach ($kelola_absensi as $kelola_absen)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $kelola_absen->date }}</td>
                                        <td>{{ $kelola_absen->check_in_time }}</td>
                                        <td>{{ $kelola_absen->check_out_time }}</td>
                                        <td>

                                            <form action="{{ url('/kelola-absensi/' . $kelola_absen->id) }}" method="post">

                                                @csrf
                                                @method('delete')

                                                <button class="btn btn-danger"  type="submit">Delete</button>
                                            </form>



                                            <a class="btn btn-info" href="{{ url('/kelola-absensi/' . $kelola_absen->id) }}">Views</a>



                                           


                                        </td>
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
