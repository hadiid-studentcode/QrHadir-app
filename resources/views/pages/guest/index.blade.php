@extends('layouts.main')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambahGuest">Tambah</button>
                <div class="card">

                    <!-- Modal -->
                    <div class="modal fade" id="tambahGuest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="/guests" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label text-dark">Nama Lengkap</label>
                                            <input type="text" class="form-control text-dark" id="nama"
                                                name="nama">

                                        </div>

                                        <div class="mb-3">
                                            <label for="delegasi" class="form-label text-dark">Delegasi</label>
                                            <input type="text" class="form-control text-dark" id="delegasi"
                                                name="delegasi">
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
                    <h4 class="card-title ">Data Tamu / Guest</h4>
                    <p class="card-category"> Data Tamu / Guest untuk didaftarkan absensi</p>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    No
                                </th>
                                <th>
                                    Nama Lengkap
                                </th>
                                <th>
                                    Delegasi
                                </th>
                                <th>
                                    Action
                                </th>

                            </thead>
                            <tbody>
                                @foreach ($guests as $guest)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $guest->nama_lengkap }}</td>
                                        <td>{{ $guest->delegasi }}</td>
                                        <td>

                                            <a class="btn btn-info" href="/guests/{{ $guest->id }}">Lihat</a>




                                            <form action="/guests/{{ $guest->id }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <button type="submit" class="btn btn-danger">Hapus</button>

                                            </form>


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
    </div>
@endsection
