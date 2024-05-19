 <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
     <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
     <div class="logo"><a href="/dashboard" class="simple-text logo-normal">
             {{ config('app.name') }}
         </a></div>
     <div class="sidebar-wrapper">
         <ul class="nav">
             <li class="nav-item {{ $active == 'dashboard' ? 'active' : '' }}  ">
                 <a class="nav-link" href="{{ url('/dashboard') }}">
                     <i class="material-icons">dashboard</i>
                     <p>Dashboard</p>
                 </a>
             </li>
             <li class="nav-item {{ $active == 'guests' ? 'active' : '' }} ">
                 <a class="nav-link" href="{{ url('/guests') }}">
                     <i class="material-icons">person</i>
                     <p>Manajemen Guests</p>
                 </a>
             </li>
             <li class="nav-item {{ $active == 'kelola' ? 'active' : '' }} ">


                 <a class="nav-link" href="{{ url('/kelola-absensi') }}">
                     <i class="material-icons">content_paste</i>
                     <p>Kelola Absensi</p>
                 </a>
             </li>
        

             <li class="nav-item {{ $active == 'laporan' ? 'active' : '' }} ">
                 <a class="nav-link" href="https://qr-attendify.vercel.app/" target="_blank">
                     <i class="material-icons">radio_button_checked</i>
                     <p>QR Code Scanner</p>
                 </a>
             </li>

              <li class="nav-item {{ $active == 'logout' ? 'active' : '' }} ">
                 <a class="nav-link" href="/logout">
                     <i class="material-icons">logout</i>
                     <p>Logout</p>
                 </a>
             </li>
         </ul>
     </div>
 </div>
