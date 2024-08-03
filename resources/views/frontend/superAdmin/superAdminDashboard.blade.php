


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('dashboard/assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('dashboard/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('dashboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('dashboard/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('dashboard/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{url('dashboard/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{url('dashboard/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('dashboard/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('dashboard/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
@include('frontend.superAdmin.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('home')}}">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('jobProviders')}}">
          <i class="bi bi-question-circle"></i>
          <span>Job Providers</span>
        </a>
    </li>

<li>
        <a class="nav-link collapsed" href="{{route('jobseekersList')}}">
            <i class="bi bi-question-circle"></i>
            <span>JobSeekers</span>
          </a>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('currentJobs')}}">
              <i class="bi bi-question-circle"></i>
              <span>Current Jobs</span>
            </a>
        </li>


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-md-6">

                <!-- Job Seekers Card -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Job Seekers</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/totalSeekers.png') }}" class="bi bi-cart" alt="">
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $seekers }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Job Providers Card -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Job Providers</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/totalProviders.png') }}" class="bi bi-cart" alt="">
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $providers }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jobs Card -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Jobs</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/totalJobs.png') }}" class="bi bi-cart" alt="">
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $jobs }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div> <!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-md-6">


                    <!-- Applications Card -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Applications</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('images/totalApplications.webp') }}" class="bi bi-cart" alt="">
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $applications }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                <!-- Shortlisted Candidates Card -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Shortlisted Candidates</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/totalShortlist.png') }}" class="bi bi-cart" alt="">
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $shortListed }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Selected Candidates Card -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Selected Candidates</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/totalSelected.webp') }}" class="bi bi-cart" alt="">
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $selected }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Right side columns -->

        </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    {{-- <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div> --}}
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('dashboard/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{url('dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('dashboard/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{url('dashboard/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{url('dashboard/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{url('dashboard/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{url('dashboard/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{url('dashboard/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('dashboard/assets/js/main.js')}}"></script>

</body>

</html>
