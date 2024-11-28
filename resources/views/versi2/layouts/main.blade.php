<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor3">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="versi2/assets/images/favicon-32x32.png" type="image/png" />
	@include('versi2.layouts.styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
	<title>{{ config('app.name') }}</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
	@include('versi2.layouts.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
	@include('versi2.layouts.headers')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			@yield('content')
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2024. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	
	@include('versi2.layouts.scripts')
</body>

</html>