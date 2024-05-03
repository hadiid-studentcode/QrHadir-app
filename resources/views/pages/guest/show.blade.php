@extends('layouts.main')

@section('main')
    <div class="row">
            <script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
        <div class="col-md-4">

            
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-avatar">
                    <div id="canvas" style="text-align: center ; padding: 30px"></div>
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
        // qrCode.download({ name: "qr", extension: "png" });
    </script>
@endsection
