<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Login - {{ config('app.name') }}</title>
</head>

<body class="bg-lock-screen">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-lock-screen d-flex align-items-center justify-content-center">
            <div class="card shadow-none bg-transparent">
                <div class="card-body p-md-5 text-center">
                    <h2 class="text-white" id="time"></h2>
                    <h5 class="text-white" id="date"></h5>
                    <div class="">
                        <img src="{{ asset('assets/images/icons/user.png') }}" class="mt-5" width="120"
                            alt="" />
                    </div>
                    <p class="mt-2 text-white">Administrator</p>
                    <form action="{{ route('authenticate') }}" method="post">
                        @csrf
                        <div class="mb-3 mt-3">
                            <input type="hidden" class="form-control" name="username" placeholder="Username"
                                value="admin" />">
                            <input type="password" class="form-control" name="password" placeholder="Password" />
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-white">Login</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->

    <script>
        const time = document.getElementById('time');
        const dateElement = document.getElementById('date');

        setInterval(() => {
            const now = new Date();

            // Menampilkan waktu Indonesia
            const indonesiaTime = new Intl.DateTimeFormat('id-ID', {
                timeZone: 'Asia/Jakarta',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            }).format(now);

            // Menampilkan tanggal Indonesia
            const indonesiaDate = new Intl.DateTimeFormat('id-ID', {
                timeZone: 'Asia/Jakarta',
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: '2-digit'
            }).format(now);

            // Menampilkan waktu dan tanggal pada elemen yang sesuai
            time.innerHTML = `${indonesiaTime} WIB`;
            dateElement.innerHTML = `${indonesiaDate}`;
        }, 1000);
    </script>



</body>



</html>
