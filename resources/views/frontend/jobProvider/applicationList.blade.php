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
            <h2>My Jobs</h2>
            <a href="{{route('jobPostForm')}}" class="btn btn-primary">Add Job</a>
        </div>

        @if (session('successMessage'))
            <div class="alert alert-success">
                {{ session('successMessage') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Job Title</th>
                        <th>Require Qualification</th>
                        <th>Employment Type</th>
                        <th>Deadline</th>
                        <th>Applications</th>
                        <th>ShortList</th>
                        <th>Final Interview List</th>
                        <th>Selected</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                        <tr>
                            <td>{{ $job->id }}</td>
                            <td>{{ $job->jobTitle }}</td>
                            <td> {{$job->qualification}} </td>
                            <td>{{ $job->employmentType }}</td>
                            <td>{{ $job->applicationDeadline}}</td>
                            <td>
                                <a href="{{ route('appliedCandidate', ['jobId' => $job->id]) }}" class="btn btn-success" style="flex: 1; margin-left: 5px;">Applications</a>
                            </td>
                            <td>
                                <a href="{{ route('shortListed', ['jobId' => $job->id]) }}" class="btn btn-success" style="flex: 1; margin-left: 5px;">Shortlisted </a>
                            </td>
                        <td>
                            <a href="{{ route('finalInterviewList', ['jobId' => $job->id]) }}" class="btn btn-success" style="flex: 1; margin-left: 5px;">Final Interview List </a>
                        </td>
                        <td>
                            <a href="{{ route('selected', ['jobId' => $job->id]) }}" class="btn btn-success" style="flex: 1; margin-left: 5px;">Selected</a>
                        </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (Optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
