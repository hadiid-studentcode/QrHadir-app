@extends('layouts.main')

@push('styles')
@endpush

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col">
                <div class="card radius-10 overflow-hidden bg-gradient-cosmic">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Total Peserta</p>
                                <h5 class="mb-0 text-white">{{ $totalGuests }}</h5>
                            </div>
                            <div class="ms-auto text-white"><i class='bx bxs-user-detail font-30'></i>
                            </div>
                        </div>
                        <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 46%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden bg-gradient-burning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Total Hadir</p>
                                <h5 class="mb-0 text-white">{{ $totalHadir }}</h5>
                            </div>
                            <div class="ms-auto text-white"><i class='bx bx-user-check font-30'></i>
                            </div>
                        </div>
                        <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Total Tidak Hadir</p>
                                <h5 class="mb-0 text-white">24.5K</h5>
                            </div>
                            <div class="ms-auto text-white"><i class='bx bx-user-x font-30'></i>
                            </div>
                        </div>
                        <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 68%"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--end row-->





        <div class="card radius-10">
            <div class="card-header border-bottom-0 bg-transparent">
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="font-weight-bold mb-0">Absensi 12 Agustus 2024 , 13:00 s.d 14:00</h5>
                    </div>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-white radius-10">View More</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 align-middle" id="absensiTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Pimpinan</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>


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
