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
            <h1>selected</h1>
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
                        <th>Job Description</th>
                        {{-- <th>Job Description</th>
                        <th>Job Requirement</th> --}}
                        <th>Company Name</th>
                        {{-- <th>Company Details</th> --}}
                        {{-- <th>Qualification</th> --}}
                        {{-- <th>Company Details</th> --}}
                        {{-- <th>Deadline</th> --}}
                        <th>Employment Type</th>
                        <th>Location</th>
                        <th>Salary</th>
                        <th>Selected Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($selectedRecord as $selected)
                        <tr>


              <td>{{$selected->id}} </td>
                            <td>{{ $selected->job->jobTitle }}</td>
                            {{-- <td>{{ $selected->job->id }}</td> --}}
                            <td>{{ $selected->job->jobDescription }}</td>
                            {{-- <td>{{ $selected->job->jobRequirements }}</td> --}}
                            <td>{{ $selected->job->companyName }}</td>
                            {{-- <td>{{ $selected->job->companyDetails }}</td> --}}
                            {{-- <td> {{$selected->job->qualification}} </td> --}}
                            {{-- <td>{{ $selected->job->vaccancies }}</td> --}}
                            {{-- <td>{{ $selected->job->selectedDeadline}}</td> --}}
                            <td>{{ $selected->job->employmentType }}</td>
                            <td>{{ $selected->job->location }}</td>
                            <td>{{ $selected->job->salary }}</td>
                            <td>
                                {{$selected->created_at->format('Y-m-d')}}
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h4>{{"selecteded in:"}} {{$count}}</h4>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (Optional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
