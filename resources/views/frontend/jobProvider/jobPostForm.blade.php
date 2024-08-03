<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Post Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Your additional CSS styles if needed -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            width: 100%;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="5" viewBox="0 0 12 5"><path d="M6 5L0 0l12 0z"/></svg>') no-repeat right 12px center;
            padding-right: 30px;
            width: 100%;
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .row {
            justify-content: space-between;
        }

        @media (max-width: 767px) {
            .row {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div class="container">
     @if(session('successMessage'))
     <div class="alert alert-success d-flex justify-content-between align-items-center">
        {{ session('successMessage') }}
        <div class="d-flex">
            <a href="{{ route('jobPostForm') }}" class="btn btn-primary btn-sm mr-2">Post Next Job</a>
            <a href="{{ route('jobProviderDashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
        </div>
    </div>
        @else
        <h2>Job Post Form</h2>

        <!-- Job Post Form -->
        <form action="{{ route('jobPost') }}" method="post">
            @csrf
            <div class="row">
                <!-- Left Side (First Column) -->
                <div class="col-md-5">
                    <!-- Job Title -->
                    <div class="form-group">
                        <label for="jobTitle">Job Title:</label>
                        <input type="text" class="form-control @error('jobTitle') is-invalid @enderror" id="jobTitle" name="jobTitle"  value="{{old('jobTitle')}}"
                        required  placeholder="Enter the job title">

                            @error('jobTitle')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Company Name -->
                    <div class="form-group">
                        <label for="companyName">Company Name:</label>
                        <input type="text" class="form-control @error('companyName') is-invalid @enderror" id="companyName" name="companyName"
                        required value="{{old('companyName')}}"    placeholder="Enter the company name" >
                            @error('companyName')
                            <span class="invalid-feedback" role="alert">
                                {{$message }}
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="companyDetails">Company Details:</label>
                        <textarea class="form-control @error('companyDetails') is-invalid @enderror"
                        required  id="jobRequirements" name="companyDetails" rows="4"
                            placeholder="Company Details">{{old('companyDetails')}}</textarea>
                            @error('companyDetails')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Job Description -->
                    <div class="form-group">
                        <label for="jobDescription">Job Description:</label>
                        <textarea class="form-control @error('jobDescription') is-invalid @enderror"
                        required id="jobDescription" name="jobDescription" rows="4"
                          placeholder="Describe the job">{{old('jobDescription')}}</textarea>
                            @error('jobDescription')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Job Requirements -->
                    <div class="form-group">
                        <label for="jobRequirements">Job Requirements:</label>
                        <textarea class="form-control @error('jobRequirements') is-invalid @enderror"
                        required id="jobRequirements" name="jobRequirements" rows="4"
                          placeholder="List the job requirements">{{old('jobRequirements')}}</textarea>
                            @error('jobRequirements')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                </div>

                <!-- Right Side (Second Column) -->



                <div class="col-md-5">
                    <div class="form-group">
                        <label for="vaccancies">Number of Vaccancies</label>
                        <input type="text" class="form-control @error('vaccancies') is-invalid @enderror"
                        required id="vaccancies" name="vaccancies"
                        value="{{old('vaccancies')}}"   placeholder="Enter Number of Vaccancies">
                            @error('vaccancies')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Application Deadline -->
                    <div class="form-group">
                        <label for="qualification">Qualification:</label>
                        <input type="text" class="form-control @error('qualification') is-invalid @enderror"
                        required id="qualification" name="qualification"
                        value="{{old('qualification')}}"  >
                            @error('qualification')
                            <span class="invalid-feedback " role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="applicationDeadline">Application Deadline:</label>
                        <input type="date" class="form-control @error('applicationDeadline') is-invalid @enderror"
                        required id="applicationDeadline" name="applicationDeadline"
                        value="{{old('applicationDeadline')}}"  >
                            @error('applicationDeadline')
                            <span class="invalid-feedback " role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Employment Type -->
                    <div class="form-group">
                        <label for="employmentType">Employment Type:</label>
                        <select class="form-control @error('employmentType') is-invalid @enderror" required id="employmentType" name="employmentType" >
                            <option value="" disabled selected>Select employment type</option>
                            <option value="full_time">Full Time</option>
                            <option value="part_time">Part Time</option>
                            <option value="contract">Contract</option>
                            <option value="temporary">Temporary</option>
                            <option value="internship">Internship</option>
                        </select>
                        @error('employmentType')
                        <span class="invalid-feedback " role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    </div>

                    <!-- Location -->
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control  @error('location') is-invalid @enderror" id="location" name="location"
                      required  value="{{old('location')}}" placeholder="Enter the job location">
                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Salary -->
                    <div class="form-group">
                        <label for="salary">Salary:</label>
                        <input type="text" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary"
                       required value="{{old('salary')}}"   placeholder="Enter the salary (optional)">
                            @error('salary')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    {{-- <!-- Upload Image -->
                    <div class="form-group">
                        <label for="jobImage">Upload Image:</label>
                        <input type="file" class="form-control-file" id="jobImage" name="jobImage">
                    </div> --}}
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Post Job</button>
        </form>
        @endif
    </div>

    <!-- Bootstrap JS and Popper.js (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Your additional scripts if needed -->

</body>

</html>
