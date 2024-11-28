@extends('versi2.layouts.main')



@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Kelola Absensi</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Kelola</li>
                    </ol>
                </nav>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <hr />
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#tambahAbsensi">Tambah</button>


                        <!-- Modal -->
                        <div class="modal fade" id="tambahAbsensi" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ url('/kelola-absensi') }}" method="post">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Peserta</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table mb-0" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Start_time</th>
                                    <th scope="col">End_time</th>
                                    <th scope="col">Action</th>
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

                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                 <form action="{{ url('/kelola-absensi/' . $kelola_absen->id) }}" method="post">

                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                 </form>
                                                <a href="{{ url('/kelola-absensi/' . $kelola_absen->id) }}" type="button" class="btn btn-info">Views</a>
                                            </div>

                                           



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
