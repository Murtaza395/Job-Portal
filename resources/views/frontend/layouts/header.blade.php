<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">


    {{-- job listing --}}
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/price_rangs.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">


    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <style>
        body {

            margin: 0;
            padding: 0;
        }

        #font {
            color: red;
        }
    </style>
</head>
<!-- Navbar Start -->

<body>
    <div class="p-0 bg-white ">
        <!-- Spinner Start -->
        <div id="spinner"
            class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <nav class="p-0 bg-white shadow navbar navbar-expand-lg navbar-light sticky-top">
            <a href="index.html" class="px-4 py-0 text-center navbar-brand d-flex align-items-center px-lg-5">
                <h1 class="m-0 text-primary">JobEntry</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="p-4 navbar-nav ms-auto p-lg-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('jobList') }}" class=" nav-item nav-link">Jobs</a>
                    <a href="{{ route('aboutUs') }}" class="nav-item nav-link">About Us</a>
                    <a href="{{ route('contact') }}" class=" nav-item nav-link">Contact Us</a>

                    {{-- <div class="nav-item dropdown"> --}}
                    {{-- <div class="m-0 dropdown-menu rounded-0">
                            <a href="{{ route('jobList') }}" class="dropdown-item">Job List</a>
                            <a href="{{ route('jobDetails') }}" class="dropdown-item">Job Detail</a>
                        </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="m-0 dropdown-menu rounded-0">
                            <a href="{{ route('jobCategory') }}" class="dropdown-item">Job Category</a>
                            <a href="{{ route('testinomial') }}" class="dropdown-item">Testimonial</a>
                            <a href="{{ route('notFound') }}" class="dropdown-item">404</a>
                        </div>
                    </div> --}}

@auth


@if (auth()->user()->user_type=='jobSeeker')
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                        <div class="m-0 dropdown-menu rounded-0">
                            <a href="{{ route('careerProfileForm') }}" class="dropdown-item">Career Profile</a>
                            <a href="{{ route('showCareerProfile') }}" class="dropdown-item">Show Career Profile</a>
                        </div>
                    </div>
@endif


@if (auth()->user()->user_type=='admin')
                    <a href="{{ route('superAdminDashboard') }}" class="nav-item nav-link">Dashboard</a>
@endif

@if (auth()->user()->user_type=='jobProvider')
<a href="{{ route('jobProviderDashboard') }}" class="nav-item nav-link">Dashboard</a>
@endif
@if (auth()->user()->user_type=='jobSeeker')
         <a href="{{ route('jobSeekerDashboard') }}" class="nav-item nav-link">Dashboard</a>
@endif
@endauth
                    {{-- <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a> --}}
                    {{-- <a href="" class="mr-1 text-center btn bg-success" style="margin-top: 1%;">Post</a> --}}
                    {{-- <a href="{{ route('adminRegisterForm') }}" class="mr-1 text-center btn bg-info"
                        style="margin-top: 1%;">Admin register</a> --}}
                    @guest
                        <a href="{{ route('register') }}" class="mr-1 text-center btn bg-info"
                            style="margin-top: 1%;">Sign Up</a>
                        <a href="{{ route('login') }}" class="mb-1 mr-1 text-center btn bg-info"
                            style="margin-top: 1%;">Login</a>
                    @endguest
                    @auth
                    <a href="{{ route('logout') }}" class="mb-1 mr-1 text-center btn bg-info"
                        style="margin-top: 1%;">Logout</a>
                        @endauth

                </div>
            </div>
        </nav>
