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
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Tamu / Guest</h5>
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
                                            <label for="perusahaan" class="form-label text-dark">Perusahaan</label>
                                            <input type="text" class="form-control text-dark" id="perusahaan"
                                                name="perusahaan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label text-dark">Alamat</label>
                                            <input type="text" class="form-control text-dark" id="alamat"
                                                name="alamat">
                                        </div>
                                        <div class="mb-3">
                                            <label for="kotaasal" class="form-label text-dark">Kota Asal</label>
                                            <input type="text" class="form-control text-dark" id="kotaasal"
                                                name="kotaasal">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nohpwa" class="form-label text-dark">No HP/Wa</label>
                                            <input type="text" class="form-control text-dark" id="nohpwa"
                                                name="nohpwa">
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

                @foreach (['success', 'error'] as $msg)
                    @if (session($msg))
                        <div class="alert alert-{{ $msg == 'success' ? 'success' : 'danger' }}" role="alert">
                            {{ session($msg) }}
                        </div>
                    @endif
                @endforeach

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead class=" text-primary">
                                <th>
                                    No
                                </th>
                                <th>
                                    Nama Lengkap
                                </th>
                                <th>
                                    Perusahaan
                                </th>
                                <th>
                                    Alamat
                                </th>
                                <th>Kota Asal</th>
                                <th>No HP/WA</th>
                                <th>
                                    Action
                                </th>

                            </thead>
                            <tbody>
                                @foreach ($guests as $guest)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $guest->nama_lengkap }}</td>
                                        <td>{{ $guest->perusahaan }}</td>
                                        <td>{{ $guest->alamat }}</td>
                                        <td>{{ $guest->kota_asal }}</td>
                                        <td>{{ $guest->no_hp_wa }}</td>

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

                            
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>

                       
                       
                    </div>
                </div>
            </div>
        </div>

    </div>





    
@endsection
