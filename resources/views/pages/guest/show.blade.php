<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

</head>

<body>

    <div id="qrcode-2"></div>

    <h3>Nama Lengkap : {{ $guest->name }}</h3>
    <h3>Delegasi : {{ $guest->delegasi }} </h3>

    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode-2"), {
            text: "{{ $guest->qr_code }}",
            width: 500,
            height: 500,
        });
    </script>


</body>

</html>
