<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cetak</title>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

</head>

<body>


    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>delegasi</th>
                <th>QR Code</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guests as $guest)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->delegasi }}</td>
                    <td>{!! QrCode::size(256)->generate('{{ $guest->qr_code }}') !!}</td>
                </tr>
            @endforeach

            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
        </tbody>
    </table>

    <script>
        window.print();
    </script>


</body>

</html>
