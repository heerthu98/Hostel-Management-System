<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hostel Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ URL::asset("assets/vendor/animate.css/animate.min.css") }}  rel="stylesheet">
  <link href={{ URL::asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}  rel="stylesheet">
  <link href={{ URL::asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }}  rel="stylesheet">
  <link href={{ URL::asset("assets/vendor/boxicons/css/boxicons.min.css") }}  rel="stylesheet">
  <link href={{ URL::asset("assets/vendor/glightbox/css/glightbox.min.css") }}  rel="stylesheet">
  <link href={{ URL::asset("assets/vendor/swiper/swiper-bundle.min.css") }}  rel="stylesheet">

  <!--  CSS File -->
  <link href={{ URL::asset("assets/css/style.css") }}  rel="stylesheet">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        @include('layouts.header')
    </header>
    <!-- End Header -->

    <main id="main" >
      
        <!-- ======= Breadcrumbs ======= -->
        <!--section class="breadcrumbs">
          <div class="container">
            <div class="d-flex justify-content-between align-items-center">
              <h2></h2>
              <ol>
                <li><a href="/">Home</a></li>
                <li></li>
              </ol>
            </div>
    
          </div>
        </section-->
        <!-- End Breadcrumbs -->
    
        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('layouts.footer')
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{ URL::asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
  <script src={{ URL::asset("assets/vendor/glightbox/js/glightbox.min.js") }}></script>
  <script src={{ URL::asset("assets/vendor/isotope-layout/isotope.pkgd.min.js") }}></script>
  <script src={{ URL::asset("assets/vendor/swiper/swiper-bundle.min.js") }}></script>
  <script src={{ URL::asset("assets/vendor/php-email-form/validate.js") }}></script>

  <!--  Main JS File -->
  <script src={{ URL::asset("assets/js/main.js") }}></script>
</body>

</html>