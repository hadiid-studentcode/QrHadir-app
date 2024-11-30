@extends('layouts.main')



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
                        <li class="breadcrumb-item active" aria-current="page">Absensi</li>

                    </ol>
                </nav>
            </div>

        </div>
        <div class="card">

            <div class="card-body">
                <a class="btn btn-primary"
                    href="{{ url('/kelola-absensi/show/export-excel/' . $date . '/' . $first_time . '/' . $last_time) }}"
                    target="_blank">Cetak</a>

                <a class="btn btn-primary" href="{{ url('/kelola-absensi') }}">Kembali</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Halaman Kelola Absensi</h4>
                <p class="card-category">{{ $date }}, {{ $first_time }} Wib s.d {{ $last_time }} Wib
                </p>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {{-- <table class="table">
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
                                            <td>{{ $absen->nama_customer }}</td>
                                            <td>{{ $absen->date }}</td>
                                            <td>{{ $absen->time }}</td>
                                            <td>{{ $absen->status }}</td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table> --}}
                    <table id="absensiTable" class="table">
                        <thead class="text-primary">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Pimpinan</th>
                                <th>Tanggal</th>
                                <th>waktu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Absensi Akan Dimuat Di Sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        // Fungsi untuk mendapatkan data absensi
        function getDataAbsensi() {
            axios.get('/api/absensi/' + '{{ $id_kelolaAbsensi }}') // Ganti dengan endpoint yang sesuai
                .then(function(response) {
                    // Menangani data yang diterima
                    const data = response.data;

                    // Menghapus isi tabel sebelumnya
                    const tbody = document.querySelector("#absensiTable tbody");
                    tbody.innerHTML = '';

                    // Looping untuk menambahkan baris ke tabel
                    data.forEach(function(absensi) {
                        const tr = document.createElement('tr');
                        tr.innerHTML = `
                            <td>${absensi.id}</td>
                            <td>${absensi.nama}</td>
                              <td>${absensi.pimpinan}</td>
                            <td>${absensi.date}</td>
                             <td>${absensi.time}</td>
                            <td>${absensi.status}</td>
                        `;
                        tbody.appendChild(tr);
                    });
                })
                .catch(function(error) {
                    console.log('Terjadi kesalahan:', error);
                });
        }

        // Panggil fungsi getDataAbsensi setiap 5 detik untuk memperbarui data
        setInterval(getDataAbsensi, 5000);

        // Panggil pertama kali untuk menampilkan data saat halaman dimuat
        getDataAbsensi();
    </script>
@endpush
