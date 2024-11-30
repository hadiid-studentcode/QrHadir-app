@extends('layouts.main')



@section('content')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Manajemen</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manajemen Peserta</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col">
                <hr />
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#tambahPeserta">Tambah</button>
                        @if (isset($guests_NonQR))
                            <a class="btn btn-success" href="{{ url('/guests') }}">Kembali ke Guest</a>
                        @else
                            <a class="btn btn-info" href="{{ url('/guests/show/non-generate-qr') }}">Tampilkan Data Belum di
                                Generate QR Code</a>
                        @endif

                        <!-- Modal -->
                        <div class="modal fade" id="tambahPeserta" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                  <form action="{{ url('/guests') }}" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Peserta</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                         <div class="mb-3">
                                            <label for="nama_customer" class="form-label text-dark">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama"
                                                name="nama">

                                        </div>
                                          <div class="mb-3">
                                            <label for="pimpinan" class="form-label text-dark">Asal Pimpinan</label>
                                            <input type="text" class="form-control text-dark" id="pimpinan"
                                                name="pimpinan">
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Asal Pimpinan</th>
                                    <th scope="col">QR_Code</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (isset($guests_NonQR))
                                    @foreach ($guests_NonQR as $gnq)
                                        <tr>
                                            <td>{{ $gnq->id }}</td>
                                            <td>{{ $gnq->nama }}</td>
                                            <td>{{ $gnq->pimpinan }}</td>
                                            <td>{{ $gnq->qr_code }}</td>


                                            <td>

                                                <a class="btn btn-info" href="{{ url('/guests/' . $gnq->id) }}">Lihat</a>


                                                {{-- <form action="{{ url('/guests/' . $gs->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger">Hapus</button>

                                                </form> --}}


                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                @if (isset($guestsSearch))
                                    @foreach ($guestsSearch as $gs)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $gs->nama }}</td>
                                            <td>{{ $gs->pimpinan }}</td>
                                            <td>{{ $gs->qr_code }}</td>


                                            <td>

                                                <a class="btn btn-info" href="{{ url('/guests/' . $gs->id) }}">Lihat</a>


                                                {{-- <form action="{{ url('/guests/' . $gs->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger">Hapus</button>

                                                </form> --}}


                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    @if (isset($guests))
                                        @foreach ($guests as $guest)
                                            <tr>
                                                <td>{{ $guest->id }}</td>
                                                <td>{{ $guest->nama }}</td>
                                                <td>{{ $guest->pimpinan }}</td>
                                                <td>{{ $guest->qr_code }}</td>



                                                <td>

                                                    <a class="btn btn-info"
                                                        href="{{ url('/guests/' . $guest->id) }}">Lihat</a>


                                                    {{-- <form action="{{ url('/guests/' . $guest->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger">Hapus</button>

                                                </form> --}}


                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
        <!--end row-->
    </div>
@endsection
