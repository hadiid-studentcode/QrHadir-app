@extends('layouts.main')

@section('main')


    <div class="row">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
        <div class="col-md-4">


        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-avatar">
                    <div class="sqrcode" style="text-align: center;" ></div>
                    <div class="qrcode" style="text-align: center;padding: 50px;margin: 30px" onclick="download()"></div>

                </div>
                <div class="card-body">
                    <h6 class="card-category">{{ $guest->delegasi }}</h6>
                    <h4 class="card-title">{{ $guest->nama_lengkap }}</h4>
                    <p class="card-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In, ducimus tempora autem laudantium quod,
                        veritatis facere perferendis perspiciatis esse optio harum iste, consectetur exercitationem aliquid
                        ratione porro odio ipsa similique!
                    </p>
                    <a href="/guests" class="btn btn-primary btn-round">Kembali</a>

                </div>
            </div>
        </div>

        <div class="col-md-4">

        </div>
    </div>



    <script>
        // Script.js 
        // create a new QRCode instance 
        let qrcode = new QRCode(
            document.querySelector(".qrcode")
        );

        // Initial QR code generation 
        // with a default message 
        qrcode.makeCode("{{ $guest->link }}{{ $guest->qr_code }}");



        // Function to generate QR 
        // code based on user input 
    </script>
@endsection
