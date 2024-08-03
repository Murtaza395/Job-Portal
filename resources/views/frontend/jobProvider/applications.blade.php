<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My applications</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
            <h2>Received applications</h2>
        </div>

        @if (session('successMsg'))
            <div class="alert alert-success successMsg">
                {{ session('successMsg') }}
            </div>
        @endif
        @if (session('errorMsg'))
        <div class="alert alert-danger errorMsg">
            {{ session('errorMsg') }}
        </div>
    @endif
        <script>
            // Add a script to hide the alert after 3 seconds (adjust as needed)
$(document).ready(function () {
            setTimeout(function() {
                $('.successMsg').fadeOut('slow');
            }, 2000);
            setTimeout(function() {
                $('.errorMsg').fadeOut('slow');
            }, 2000);
        })

        </script>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Candidate Name</th>
                        <th>Qualification</th>
                        <th>Skills</th>
                        <th>Experience</th>
                        <th>Age</th>
                        <th>CV</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $application)
                        <tr>

                            {{-- <td>{{ $application->id }}</td> --}}
                            {{-- <td>{{ $application->job->id }}</td> --}}
                            <td>{{ $application->job->jobTitle }}</td>
                            {{-- <td>{{ $application->user->id }}</td> --}}
                            <td>{{ $application->user->name }}</td>
                            <td> {{$application->seekerDetails->qualification}} </td>
                            <td> {{$application->seekerDetails->skill}} </td>
                            <td> {{$application->seekerDetails->experience}} </td>
                            <td> {{$application->seekerDetails->age}} </td>
                            <td>
                                <a href="{{route('viewCV',['detailsId'=>$application->seekerDetails->id])}}" class="btn btn-success">View CV</a>
                                 </td>

                            <td> <a href="{{route('shortList',['appId'=> $application->id])}}" class="btn btn-primary">ShortList</a> </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (Optional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
