<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Dashboard Dark Edition by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    @include('layouts.styles')

</head>

<body class="dark-edition">
    <div class="wrapper ">
        @include('layouts.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('layouts.navbar')
            <!-- End Navbar -->
            <div class="content">
                @yield('main')
            </div>
            @include('layouts.footer')

        </div>
    </div>

    @include('layouts.scripts')
</body>

</html>
