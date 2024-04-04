@extends('layouts.main')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary" type="button">Tambah</button>
                <div class="card">

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
