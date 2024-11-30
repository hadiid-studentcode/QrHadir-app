@extends('layouts.main')



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





       
    </div>
@endsection
