<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Adminka</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('assetsAdmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assetsAdmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assetsAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/sadTest.js')}}"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <!-- Sidebar -->
         <x-admin-sidebar></x-admin-sidebar>
        <!-- End of Sidebar -->
       

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <x-admin-topbar></x-admin-topbar> 
                <!-- End of Topbar -->
                </nav>
                <!-- Begin Page Content -->
                @yield('content')
                
               

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <x-admin-footer></x-admin-footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

      <!-- Custom styles for this template -->
      <link href="{{asset('assetsAdmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{asset('assetsAdmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  
    <!-- Core plugin JavaScript-->
    <script src="{{asset('assetsAdmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assetsAdmin/js/sb-admin-2.min.js')}}"></script>
 
  


    

</body>

</html>