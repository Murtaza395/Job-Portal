<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Jobs</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>


        .table-container {
            margin-top: 20px;
            width:100%;
        }

        .table-responsive {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width:100%;

            overflow: hidden;
        }

        table {
            width: 90%;
            margin: auto;
            background-color: #ffffff;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        tbody tr:hover {
            background-color: #f8f9fa;
        }

        .table-actions {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #ffffff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #ffffff;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>

    <div class="container-fluid table-container">
        <div class="table-actions">
            <h1>Shortlist</h1>
        </div>


@if(session('successMsg'))
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
        <div>
            <h3> Candidate Information</h3>
          Candidate ID: {{$user->id}} <br>
          Candidate Name:   {{$user->name}}
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Job Title</th>
                        <th>Job Id</th>
                        {{-- <th>Job Description</th>
                        <th>Job Requirement</th> --}}
                        <th>Company Name</th>
                        {{-- <th>Company Details</th> --}}
                        {{-- <th>Qualification</th> --}}
                        <th>Vacancies</th>
                        {{-- <th>Deadline</th> --}}
                        <th>Employment Type</th>
                        <th>Location</th>
                        <th>Salary</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shortListed as $shortList)
                        <tr>


              <td>{{$shortList->id}} </td>
                            <td>{{ $shortList->job->jobTitle }}</td>
                            <td>{{ $shortList->job->id }}</td>
                            {{-- <td>{{ $shortList->job->jobDescription }}</td> --}}
                            {{-- <td>{{ $shortList->job->jobRequirements }}</td> --}}
                            <td>{{ $shortList->job->companyName }}</td>
                            {{-- <td>{{ $shortList->job->companyDetails }}</td> --}}
                            {{-- <td> {{$shortList->job->qualification}} </td> --}}
                            <td>{{ $shortList->job->vaccancies }}</td>
                            {{-- <td>{{ $shortList->job->shortListDeadline}}</td> --}}
                            <td>{{ $shortList->job->employmentType }}</td>
                            <td>{{ $shortList->job->location }}</td>
                            <td>{{ $shortList->job->salary }}</td>
                            <td>
                                {{-- <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="mt-1 btn btn-danger">Delete</a> --}}

                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h4>{{"Shortlisted in:"}} {{$count}} </h4>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (Optional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
