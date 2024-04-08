@extends('layouts.main')

@section('main')
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-avatar">
                    <div id="qrcode-2"></div>
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
        var qrcode = new QRCode(document.getElementById("qrcode-2"), {
            text: "{{ $guest->qr_code }}",
            width: 400,
            height: 400,
            colorDark: "#000000",
        });

        function download() {

        }
    </script>
@endsection
