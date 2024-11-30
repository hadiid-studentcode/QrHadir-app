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
                            <div class="ms-auto text-white"><i class='bx bx-cart font-30'></i>
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
                            <div class="ms-auto text-white"><i class='bx bx-wallet font-30'></i>
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
                            <div class="ms-auto text-white"><i class='bx bx-bulb font-30'></i>
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
                        <h5 class="font-weight-bold mb-0">Recent Orders</h5>
                    </div>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-white radius-10">View More</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Customer</th>
                                <th>Product id</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               
                                <td>Nike Sports NK</td>
                                <td>Mitchell Daniel</td>
                                <td>#9668521</td>
                                <td>$99.85</td>
                                <td><a href="javaScript:;" class="btn btn-sm btn-success radius-30">Delivered</a>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    
@endpush
