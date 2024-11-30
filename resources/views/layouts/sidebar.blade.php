	<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">{{ config('app.name') }}</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li class="nav-item {{ $active == 'dashboard' ? 'active' : '' }}  ">
					<a href="{{ url('/dashboard') }}">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				
				</li>
				
				<li class="menu-label">Manajemen</li>
                <li class="nav-item {{ $active == 'guests' ? 'active' : '' }} ">
					<a href="{{ url('/guests') }}" >
						<div class="parent-icon"><i class='bx bx-spa' ></i>
						</div>
						<div class="menu-title">Manajemen Peserta</div>
					</a>
				
				</li>
				
				
				<li class="menu-label">Kelola</li>
				<li class="nav-item {{ $active == 'kelola' ? 'active' : '' }} ">
					<a href="{{ url('/kelola-absensi') }}">
						<div class="parent-icon"><i class='bx bx-hourglass' ></i>
						</div>
						<div class="menu-title">Absensi</div>
					</a>
				
				</li>
				<li>
					<a href="{{ route('absen.index') }}">
						<div class="parent-icon"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">QR Code Scanner</div>
					</a>
				
				</li>
				
				
			</ul>
			<!--end navigation-->
		</div>