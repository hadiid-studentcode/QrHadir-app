@extends('versi2.layouts.main')

@push('styles')
     <script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
@endpush

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
                         <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>

        </div>

        <div class="row">
           
        <div class="col-md-4">

            
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-avatar">
                    <div id="canvas" style="text-align: center ; padding: 30px"></div>
                </div>
                <div class="card-body">
                    <h6 class="card-category">{{ $guest->pimpinan }}</h6>
                    <h4 class="card-title">{{ $guest->nama }}-{{ $guest->pimpinan }}</h4>
                    <p class="card-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In, ducimus tempora autem laudantium quod,
                        veritatis facere perferendis perspiciatis esse optio harum iste, consectetur exercitationem aliquid
                        ratione porro odio ipsa similique!
                    </p>
                    <a href="{{ url()->previous() }}" class="btn btn-primary btn-round">Kembali</a>
                    <button class="btn btn-primary btn-round" id="download" >Download</button>

                </div>
            </div>
        </div>

        <div class="col-md-4">

        </div>
    </div>


</div>
@endsection

@push('scripts')
   
  <script type="text/javascript">
        const qrCode = new QRCodeStyling({
            width: 200,
            height: 200,
            type: "png",
            data: "{{ $guest->link }}{{ $guest->qr_code }}",
            image: "",
            dotsOptions: {
                color: "#000000",
                type: "rounded",
            },
            backgroundOptions: {
                color: "#ffffff",

                
            },
            imageOptions: {
                crossOrigin: "anonymous",
                margin: 10
            }
        });

        qrCode.append(document.getElementById("canvas"));
        const download = document.getElementById('download');
        download.addEventListener('click',function test(){
        qrCode.download({ name: "{{ $nama }}_{{ $pimpinan }}", extension: "png" });
        })
    </script> 
@endpush
