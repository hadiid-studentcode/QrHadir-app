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
                            <form action="{{ url('/guests') }}" method="post">
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
                                            <label for="nama_customer" class="form-label text-dark">Nama Lengkap</label>
                                            <input type="text" class="form-control text-dark" id="nama_customer"
                                                name="nama_customer">

                                        </div>

                                        <div class="mb-3">
                                            <label for="kota" class="form-label text-dark">Kota</label>
                                            <input type="text" class="form-control text-dark" id="kota"
                                                name="kota">
                                        </div>
                                        <div class="mb-3">
                                            <label for="segmen" class="form-label text-dark">Segmen</label>
                                            <input type="text" class="form-control text-dark" id="segmen"
                                                name="segmen">
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
                                    Nama Customer
                                </th>
                                <th>
                                    Kota
                                </th>
                                <th>
                                    Segmen
                                </th>
                        
                                <th>
                                    Action
                                </th>

                            </thead>
                            <tbody>
                                @foreach ($guests as $guest)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $guest->nama_customer }}</td>
                                        <td>{{ $guest->kota }}</td>
                                        <td>{{ $guest->segmen }}</td>
                                       

                                        <td>

                                            <a class="btn btn-info" href="{{ url('/guests/' . $guest->id) }}">Lihat</a>


                                            <form action="{{ url('/guests/' . $guest->id) }}" method="post">
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
