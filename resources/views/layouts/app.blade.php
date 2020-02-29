<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Raps Loundry</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('staradmin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('staradmin//assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('staradmin//assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('staradmin//assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="#">Raps Loundry</a>
          <a class="navbar-brand brand-logo-mini" href="#"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          
          <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{asset('staradmin/assets/images/faces/face8.jpg')}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset('staradmin/assets/images/faces/face8.jpg')}}" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->username }}</p>
                  <p class="font-weight-light">{{ Auth::user()->role }}</p>
                </div>
                <a class="dropdown-item">My Profile<i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{asset('staradmin/assets/images/faces/face8.jpg')}}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->username }}</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/transaksi')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Transaksi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/detail')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Detail</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/member')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Member</span>
              </a>
            </li>

            @if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Owner')
            <li class="nav-item">
              <a class="nav-link" href="{{url('/paket')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Paket</span>
              </a>
            </li>
            @endif

            @if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Owner')
            <li class="nav-item">
              <a class="nav-link" href="{{url('/user')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">User</span>
              </a>
            </li>
            @endif

            @if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Owner')
            <li class="nav-item">
              <a class="nav-link" href="{{url('/outlet')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Outlet</span>
              </a>
            </li>
            @endif
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card">
              
              <div class="card-body">
            @yield('content')
                
            </div> 
            </div>
            
                  
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 <a href="http://instagram/raps20_/" target="_blank">Raps20_</a>. All rights reserved.</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('staradmin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('staradmin/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('staradmin/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('staradmin/assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('staradmin/assets/js/demo_1/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
  </body>
</html>