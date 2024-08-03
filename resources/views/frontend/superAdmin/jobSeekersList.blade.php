<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        .table-container {
            margin-top: 20px;
        }

        .table-responsive {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        table {
            width: 100%;
            margin-bottom: 0;
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

    <div class="container table-container">
        <div class="table-actions">
            <h2>Job Seekers </h2>
            <h4>Active Job Seekrs: {{$count}}</h4>
            {{-- <button class="btn btn-primary">Add Item</button> --}}
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Created At</th>
                        <th>Action</th>
                        {{-- <th>Change Password</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobSeekersList as $jobProvider)
                        <br>

                        <tr>
                            <td>{{ $jobProvider->id }}</td>
                            <td>{{ $jobProvider->name }}</td>
                            <td>{{ $jobProvider->email }}</td>
                            <td> {{ $jobProvider->user_type }} </td>
                            <td> {{ $jobProvider->created_at->format('d-m-Y') }} </td>
                            <td>
                                <a href="{{ route('providerEditForm', ['id' => $jobProvider->id]) }}"
                                    class="btn btn-primary">Edit</a>
                                <a href="{{ route('deleteProvider', ['id' => $jobProvider->id]) }}"
                                    class="btn btn-danger">Delete</a>
                            </td>
                            <td>
                                {{-- <a href="{{ route('providerPasswordEditForm', ['id' => $jobProvider->id]) }}"
                                    class="btn btn-success">Edit Password</a> --}}
                            </td>
                        </tr>
                    @endforeach
                    <!-- Add more rows as needed -->
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
