<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> @yield('title')-Ernzospace High School</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('test/css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <style>
        nav svg{
            height: 20px;
        }
    </style>
    <body class="sb-nav-fixed">
        <!--The Navbar Section start here-->
        @include('navbar')
        <!--Navbar Section ends here-->
        <div id="layoutSidenav">
        <!--Left Hand Sidebar start here-->
        @include('sidebar')
        <!---Left hand sidebar ends here-->
            <div id="layoutSidenav_content">
            <!--Maincontent start here-->
                @yield('content');
                <!--Main content ends here-->
                <!--Footer section starts here-->
                @include('footer')
                <!--Footer section ends here-->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('test/js/scripts.js')  }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('test/assets/demo/chart-area-demo.js')  }} "></script>
        <script src="{{asset('test/assets/demo/chart-bar-demo.js')  }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('test/js/datatables-simple-demo.js')  }} "></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>

