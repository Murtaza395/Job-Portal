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
        <h2>Job Update Form</h2>

        <!-- Job Post Form -->
        <form action="{{ route('editJob',['id'=>$id]) }}" method="post">
            @csrf

            <div class="row">
                <!-- Left Side (First Column) -->
                <div class="col-md-5">
                    <!-- Job Title -->
                    <div class="form-group">
                        <label for="jobTitle">Job Title:</label>
                        <input type="text" class="form-control" value="{{$post->jobTitle}}" id="jobTitle" name="jobTitle" required
                            placeholder="Enter the job title">
                    </div>

                    <!-- Company Name -->
                    <div class="form-group">
                        <label for="companyName">Company Name:</label>
                        <input type="text" class="form-control"  value="{{$post->companyName}}" id="companyName" name="companyName" required
                            placeholder="Enter the company name">
                    </div>


                    <div class="form-group">
                        <label for="companyDetails">Company Details:</label>
                        <textarea class="form-control"   id="companyDetails" name="companyDetails" rows="4" required
                            placeholder="List the job requirements">{{$post->companyDetails}}</textarea>
                    </div>

                    <!-- Job Description -->
                    <div class="form-group">
                        <label for="jobDescription">Job Description:</label>
                        <textarea class="form-control"  id="jobDescription" name="jobDescription" rows="4" required
                            placeholder="Describe the job">{{$post->jobDescription}}</textarea>
                    </div>

                    <!-- Job Requirements -->
                    <div class="form-group">
                        <label for="jobRequirements">Job Requirements:</label>
                        <textarea class="form-control" value="{{$post->jobRequirements}}" id="jobRequirements" name="jobRequirements" rows="4" required
                            placeholder="List the job requirements">{{$post->jobRequirements}}</textarea>
                    </div>

                </div>

                <!-- Right Side (Second Column) -->
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="vaccancies">Number of Vaccancies</label>
                        <input type="text"  value="{{$post->vaccancies}}" class="form-control" id="location" name="vaccancies" required
                            placeholder="Enter Number of Vaccancies">
                    </div>

                    <!-- Application Deadline -->
                    <div class="form-group">
                        <label for="applicationDeadline">Application Deadline:</label>
                        <input type="date"  value="{{$post->applicationDeadline}}" class="form-control" id="applicationDeadline" name="applicationDeadline"
                            required>
                    </div>

                    <!-- Employment Type -->

                    <div class="form-group">
                        <label for="qualification">Qualification:</label>
                        <input type="text" class="form-control" value={{$post->qualification}} id="qualification" name="qualification"
                            required>
                    </div>


                    <div class="form-group">
                        <label for="employmentType">Employment Type:</label>
                        <select class="form-control" id="employmentType" name="employmentType" required>
                            <option value="" disabled selected>Select employment type</option>
                            <option value="full_time" @php if($post->employmentType== 'full_time'){ echo  'selected'; }  @endphp >Full Time</option>
                            <option value="part_time" @php if($post->employmentType== 'part_time'){ echo  'selected'; }  @endphp >Part Time</option>
                            <option value="contract" @php if($post->employmentType== 'contract'){ echo  'selected'; }  @endphp>Contract</option>
                            <option value="temporary" @php if($post->employmentType== 'temporary'){ echo  'selected'; }  @endphp>Temporary</option>
                            <option value="internship" @php if($post->employmentType== 'internship'){ echo  'selected'; }  @endphp>Internship</option>
                        </select>
                    </div>

                    <!-- Location -->
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text"  value="{{$post->location}}" class="form-control" id="location" name="location" required
                            placeholder="Enter the job location">
                    </div>

                    <!-- Salary -->
                    <div class="form-group">
                        <label for="salary">Salary:</label>
                        <input type="text"  value="{{$post->salary}}" class="form-control" id="salary" name="salary"
                            placeholder="Enter the salary (optional)">
                    </div>
                    {{-- <!-- Upload Image -->
                    <div class="form-group">
                        <label for="jobImage">Upload Image:</label>
                        <input type="file" class="form-control-file" id="jobImage" name="jobImage">
                    </div> --}}
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Job</button>
        </form>

    </div>

    <!-- Bootstrap JS and Popper.js (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Your additional scripts if needed -->

</body>

</html>
