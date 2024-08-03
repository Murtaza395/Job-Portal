<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Job Details</title>
</head>

<body>
    <!-- Header End -->

    <!-- Header End -->
    <!-- Job Detail Start -->
    <div class="py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gy-5 gx-4">
                <div class="col-lg-8">
                    <div class="mb-5 d-flex align-items-center">
                        {{-- <img class="flex-shrink-0 border rounded img-fluid" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;"> --}}
                        <div class=" text-start ps-4">
                            <h3 class="mb-3"> {{ $job->jobTitle }} </h3>
                            <span class="text-truncate me-3"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->location }} </span>
                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>,
                                {{ $job->employmentType }} </span>
                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>
                                ,{{ $job->salary }} </span>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h4 class="mb-3">Job description</h4>
                        <p> {{ $job->jobDescription }} </p>
                        <h4 class="mb-3">Requirements</h4>
                        <p> {{ $job->jobRequirements }} </p>
                        {{-- <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                            </ul> --}}
                        <h4 class="mb-3">Qualifications</h4>
                        <p>{{ $job->qualification }}</p>
                        {{-- <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                            </ul> --}}
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="p-5 mb-4 rounded bg-light wow slideInUp" data-wow-delay="0.1s">
                        <h4 class="mb-4">Job Summery</h4>
                        <p><i class="fa fa-angle-right text-primary me-2"></i>Published On:
                            {{ $job->created_at->format('d-m-Y') }} </p>
                        <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: {{ $job->vaccancies }} Position
                        </p>
                        <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: {{ $job->employmentType }}
                        </p>
                        <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: ${{ $job->salary }}</p>
                        <p><i class="fa fa-angle-right text-primary me-2"></i>Location: {{ $job->location }}</p>

                        @php
                            $applicationDeadline = $job->applicationDeadline;
                            //convert this string date to date form to print it in pak format
                            $deadline = new DateTime($applicationDeadline);
                        @endphp
                        <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Dead Line:
                            {{ $deadline->format('d-m-Y') }}</p>
                    </div>
                    <div class="p-5 rounded bg-light wow slideInUp" data-wow-delay="0.1s">
                        <h4 class="mb-4">Company Details</h4>
                        @foreach ($companyDetails as $companyDetail)
                        <p class="m-0">Name: {{ $companyDetail->name }} </p>
                        <p  class="m-0">Employees:{{ $companyDetail->employee_count }}  </p>
                        <p  class="m-0">Available Jobs:{{ $companyDetail->current_job_openings }} </p>
                        <p  class="m-0">Found:{{ $companyDetail->founded_year }} </p>
                        <p  class="m-0">Industry:{{ $companyDetail->industry }} </p>
                        <p  class="m-0">Location:{{ $companyDetail->location }} </p>
                        <p  class="m-0">Website:{{ $companyDetail->website }} </p>
                        <p  class="m-0">Contact Email:{{ $companyDetail->contact_email }} </p>
                        <p  class="m-0">Contact Number:{{ $companyDetail->contact_phone }} </p>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="">

            <div class="container">
                <form>
                    <div class="mt-1 row g-5">
                        <div class="col-12 ">
                            <a href="{{ route('apply', ['jobId' => $job->id, 'providerId' => $job->provider_id]) }}"
                                class="btn btn-primary" type="submit">Apply Now</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Job Detail End -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>
