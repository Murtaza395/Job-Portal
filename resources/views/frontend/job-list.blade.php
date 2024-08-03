 @extends('frontend.layouts.main')
 @section('main-content')
     <div class="py-5 mb-5 bg-dark page-header">
         <div class="container pt-5 pb-4 my-5">
             <h1 class="mb-3 text-white display-3 animated slideInDown">Job List</h1>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb text-uppercase">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item"><a href="#">Pages</a></li>
                     <li class="text-white breadcrumb-item active" aria-current="page">Job List</li>
                 </ol>
             </nav>
         </div>
     </div>
     <!-- Header End -->
     <!-- Job List Area Start -->
     <div class="job-listing-area pt-120 pb-120">
         <div class="container">
             <div class="row">
                 <!-- Left content -->
                 <div class="col-xl-3 col-lg-3 col-md-4">
                     <div class="row">
                         <div class="col-12">
                             <div class="small-section-tittle2 mb-45">
                                 <div class="ion"> <svg xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                                         <path fill-rule="evenodd" fill="rgb(27, 207, 107)"
                                             d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z" />
                                     </svg>
                                 </div>
                                 <h4>Filter Jobs</h4>
                             </div>
                         </div>
                     </div>
                     <!-- Job Category Listing start -->
                     <form action="{{route('filter')}}" method="post">
                     @csrf
                     <div class="job-category-listing mb-50">
                         <!-- single one -->
                         <div class="single-listing">
                             <div class="small-section-tittle2">
                                 <h4>Job Category</h4>
                             </div>
                             <!-- Select job items start -->
                             <div class="select-job-items2">
                                 <select name="post">
                                     <option value="">All Category</option>
                                     <option value="Developer">Developer</option>
                                     <option value="Software Developer">Software Developer</option>
                                     <option value="Engineer">Engineer</option>
                                     <option value="Marketing Specialist">Marketing Specialist</option>
                                 </select>
                             </div>
                             <!--  Select job items End-->
                             <!-- select-Categories start -->
                             <div class="select-Categories pt-80 pb-50">
                                 <div class="small-section-tittle2">
                                     <h4>Job Type</h4>
                                 </div>
                                 <label class="container">Full Time
                                    <input type="radio" name="job_type" value="full_time">
                                     <span class="checkmark"></span>
                                 </label>
                                 <label class="container">Part Time
                                    <input type="radio" name="job_type" value="part_time">
                                     <span class="checkmark"></span>
                                 </label>
                                 <label class="container">Remote
                                  <input type="radio" name="job_type" value="remote">   <span class="checkmark"></span>
                                 </label>
                                 <label class="container">Freelance
                                    <input type="radio" name="job_type" value="freelance">
                                     <span class="checkmark"></span>
                                 </label>
                             </div>
                             <!-- select-Categories End -->
                         </div>
                         <!-- single two -->
                         <div class="single-listing">
                             <div class="small-section-tittle2">
                                 <h4>Job Location</h4>
                             </div>
                             <!-- Select job items start -->
                                <div class="select-job-items2">
                                 <select name="location">
                                     <option value="">Anywhere</option>
                                     <option value="usa">USA</option>
                                     <option value="china">China</option>
                                     <option value="pakistan">Pakistan</option>
                                     <option value="germany">Germany</option>
                                 </select>
                             </div>

                             <!--  Select job items End-->
                             <!-- select-Categories start -->
                             {{-- <div class="select-Categories pt-80 pb-50">
                                 <div class="small-section-tittle2">
                                     <h4>Experience</h4>
                                 </div>
                                 <label class="container">1-2 Years
                                    <input type="radio" name="experience" value="1-2">
                                    <span class="checkmark"></span>
                                 </label>
                                 <label class="container">2-3 Years
                                    <input type="radio" name="experience" value="1-2">
                                    <span class="checkmark"></span>
                                 </label>
                                 <label class="container">3-6 Years
                                    <input type="radio" name="experience" value="1-2">
                                    <span class="checkmark"></span>
                                 </label>
                                 <label class="container">6-more..
                                    <input type="radio" name="experience" value="1-2">
                                    <span class="checkmark"></span>
                                 </label>
                             </div> --}}
                             <!-- select-Categories End -->
                         </div>
                         <!-- single three -->
                         <div class="single-listing">
                             <!-- select-Categories start -->
                            {{-- <div class="select-Categories pb-50">
                                 <div class="small-section-tittle2">
                                     <h4>Posted Within</h4>
                                 </div>
                                 <label class="container">Any
                                    <input type="radio" name="upload" value="0">

                                     <span class="checkmark"></span>
                                 </label>
                                 <label class="container">Today
                                    <input type="radio" name="upload" value="0">

                                     <span class="checkmark"></span>
                                 </label>
                                 <label class="container">Last 2 days
                                    <input type="radio" name="upload" value="2">

                                     <span class="checkmark"></span>
                                 </label>
                                 <label class="container">Last 3 days
                                    <input type="radio" name="upload" value="3">

                                     <span class="checkmark"></span>
                                 </label>
                                 <label class="container">Last 5 days
                                    <input type="radio" name="upload" value="5">

                                     <span class="checkmark"></span>
                                 </label>
                                 <label class="container">Last 10 days
                                    <input type="radio" name="upload" value="10">

                                     <span class="checkmark"></span>
                                 </label>
                             </div>

 --}}




                             <!-- select-Categories End -->
                         </div>
                         {{-- <input type="button" id="filterButton" value="filter"> --}}
                         <input type="submit" value="Filter">
                        </form>

                         <div class="single-listing">
                             <!-- Range Slider Start -->
                             {{-- <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                 <div class="small-section-tittle2">
                                     <h4>Filter Jobs</h4>
                                 </div>
                                 <div class="widgets_inner">
                                     <div class="range_item">
                                         <!-- <div id="slider-range"></div> -->
                                         <input type="text" class="js-range-slider" value="" />
                                         <div class="d-flex align-items-center">
                                             <div class="price_text">
                                                 <p>Price :</p>
                                             </div>
                                             <div class="price_value d-flex justify-content-center">
                                                 <input type="text" class="js-input-from" id="amount" readonly />
                                                 <span>to</span>
                                                 <input type="text" class="js-input-to" id="amount" readonly />
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </aside> --}}
                             <!-- Range Slider End -->
                         </div>
                     </div>
                     <!-- Job Category Listing End -->
                 </div>
                 <!-- Right content -->
                 <div class="col-xl-9 col-lg-9 col-md-8">
                     <!-- Featured_job_start -->
                     <section class="featured-job-area">
                         <div class="container">
                             <!-- Count of Job list Start -->
                             <div class="row">
                                 <div class="col-lg-12">
                                     <div class="count-job mb-35">
                                         <span>{{$totalJobs}} Total Available Jobs</span>
                                         <!-- Select job items start -->
                                         {{-- <div class="select-job-items">
                                             <span>Sort by</span>
                                             <select name="select">
                                                 <option value="">None</option>
                                                 <option value="">job list</option>
                                                 <option value="">job list</option>
                                                 <option value="">job list</option>
                                             </select>
                                         </div> --}}
                                         <!--  Select job items End-->
                                     </div>
                                 </div>
                             </div>
                             <!-- Count of Job list End -->

                             @if (session('successMsg'))
                                 <div class="alert alert-success">
                                     {{ session('successMsg') }}
                                 </div>

                                 <script>
                                     // Add a script to hide the alert after 3 seconds (adjust as needed)
                                     setTimeout(function() {
                                         $('.alert').fadeOut('slow');
                                     }, 3000);
                                 </script>
                             @endif


                             @if (session('failMsg'))
                             <div class="alert alert-danger">
                                 {{ session('failMsg') }}
                             </div>

                             <script>
                                 // Add a script to hide the alert after 3 seconds (adjust as needed)
                                 setTimeout(function() {
                                     $('.alert').fadeOut('slow');
                                 }, 5000);
                             </script>
                         @endif


                         @if (session('profileMsg'))
                         <div class="alert alert-danger">
                             {{ session('profileMsg') }}
                         </div>

                         <script>
                             // Add a script to hide the alert after 3 seconds (adjust as needed)
                             setTimeout(function() {
                                 $('.alert').fadeOut('slow');
                             }, 5000);
                         </script>
                     @endif




                             <!-- single-job-content -->
                             <div id="results">
                             @foreach ($jobs as $job)
                                 <div class="single-job-items mb-30 row">
                                     <div class="job-items col-md-9">
                                         <div class="job-tittle job-tittle2">
                                             <a href="#">
                                                 <h4>{{ $job->jobTitle }}</h4>
                                             </a>
                                             <ul>
                                                 <li><i class="fas fa-building"></i>{{ $job->companyName }} </li>
                                                 <li><i class="fas fa-map-marker-alt"></i> {{ $job->location }} </li>
                                                 <li><i class="fas fa-dollar-sign"></i> {{ $job->salary }} </li>
                                                 <li><i class="fas fa-chair"></i>{{ $job->vaccancies }} Seats</li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="items-link f-right col-md-3">
                                         <a href="{{ route('jobDetails', ['id' => $job->id]) }}"
                                             class="text-white bg-primary">Details</a>
                                         <a href="{{ route('apply', ['jobId' => $job->id, 'providerId' => $job->provider_id]) }}"
                                             class="text-white bg-success">Apply</a>

                                     </div>
                                 </div>
                             @endforeach
                            </div>
                         </div>
                     </section>
                     <!-- Featured_job_end -->
                 </div>
             </div>
         </div>
     </div>
     <!-- Job List Area End -->

     <!-- Jobs Start -->
     {{-- <div class="py-5 ">
            <div class="container">
                <h1 class="mb-5 text-center wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="text-center tab-class wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="mb-5 nav nav-pills d-inline-flex justify-content-center border-bottom">
                        <li class="nav-item">
                            <a class="pb-3 mx-3 d-flex align-items-center text-start ms-0 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mb-0 mt-n1">Featured</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="pb-3 mx-3 d-flex align-items-center text-start" data-bs-toggle="pill" href="#tab-2">
                                <h6 class="mb-0 mt-n1">Full Time</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="pb-3 mx-3 d-flex align-items-center text-start me-0" data-bs-toggle="pill" href="#tab-3">
                                <h6 class="mb-0 mt-n1">Part Time</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="p-0 tab-pane fade show active">
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Product Designer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Creative Director</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <a class="px-5 py-3 btn btn-primary" href="">Browse More Jobs</a>
                        </div>
                        <div id="tab-2" class="p-0 tab-pane fade show">
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Product Designer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Creative Director</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <a class="px-5 py-3 btn btn-primary" href="">Browse More Jobs</a>
                        </div>
                        <div id="tab-3" class="p-0 tab-pane fade show">
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Product Designer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Creative Director</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 mb-4 job-item">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="mb-3 d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <a class="px-5 py-3 btn btn-primary" href="">Browse More Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}



        <script>
            $(document).ready(function() {
                $('#filterButton').click(function() {
                    var postData = {
                        _token: '{{ csrf_token() }}', // Add CSRF token
                        jobType: $('input[name="job_type"]:checked').val(),
                        location: $('select[name="location"]').val(),
                        category: $('select[name="post"]').val()
                    };

                    $.ajax({
                        type: 'POST',
                        url: '{{ route("filterJobs") }}', // Replace with your route name
                        data: postData,
                        success: function(response) {
                            // Handle the filtered results here
                            console.log(response);
                            $("#results").html(response);
                            // Update your UI with the filtered results
                        },
                        error: function(xhr, status, error) {
                            // Handle errors here
                            console.error(error);
                        }
                    });
                });
            });
            </script>
     <!-- Jobs End -->
 @endsection
