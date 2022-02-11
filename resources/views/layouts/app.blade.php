<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


  <style>
    .logo-styled {
      width: 150px;
    }
  </style>
  @php
      
  @endphp
  <link rel="stylesheet" href="{{asset('font/iconsmind-s/css/iconsminds.css')}}" />
  <link rel="stylesheet" href="{{asset('font/simple-line-icons/css/simple-line-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.rtl.only.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/fullcalendar.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/datatables.responsive.bootstrap4.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/select2.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/perfect-scrollbar.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/glide.core.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/bootstrap-stars.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/nouislider.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/bootstrap-datepicker3.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/vendor/component-custom-switch.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/main.css')}}" />
  </head>
  <body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <!-- <a class="btn btn-sm btn-outline-primary ml-3 d-none d-md-inline-block"
                href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a> -->
        </div>


        <div class="navbar-logo">
            <img class='logo-styled' src="{{asset('assets/logo.png')}}" alt="Logo">
        </div>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">0</span>
                    </button>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>
            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">ALESSANDRO AKIRA MOLIKAWA BATISTETI</span>
                    <span>
                        <img alt="Profile Picture" src="{{asset('img/profiles/l-1.jpg')}}" />
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li>
                        <a>
                            <i class="iconsminds-home"></i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="iconsminds-dollar-sign-2"></i>
                            <span>Conta Corrente</span> 
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="iconsminds-money-bag"></i>
                            <span>Depósitos</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="iconsminds-financial"></i>
                            <span>Pagamentos</span>
                        </a>
                    </li>
                    <li class="active">
                        <a>
                            <i class="iconsminds-sync"></i>
                            <span>Transferências</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/vendor/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('js/vendor/chartjs-plugin-datalabels.js')}}"></script>
    <script src="{{asset('js/vendor/moment.min.js')}}"></script>
    <script src="{{asset('js/vendor/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/vendor/progressbar.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('js/vendor/select2.full.js')}}"></script>
    <script src="{{asset('js/vendor/nouislider.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/vendor/Sortable.js')}}"></script>
    <script src="{{asset('js/vendor/mousetrap.min.js')}}"></script>
    <script src="{{asset('js/vendor/glide.min.js')}}"></script>
    <script src="{{asset('js/dore.script.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>