<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 430px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input.form-control,
        select.form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Registration Form</h2>
    <form action="{{route('adminRegister')}}" method="POST">
       @csrf
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" class="form-control" id="name" name="name"  required placeholder="Full Name" value="{{old('name')}}"  >
     @error('name')
        <span class="text-danger"> {{$message}}</span>
     @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}" required>
       @error('email')
        <span class="text-danger"> {{$message}} </span>
       @enderror
        </div>


        <div class="form-group">
            <label for="user_type">User Type:</label>
            <select class="form-control" id="user_type" name="user_type" value="{{'user_type'}}" required>
            <option value="Admin">Admin</option>
            @error('user_type')
                <span class="text-danger"> {{$meesage}} </span>
            @enderror
            </select>
        </div>


        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        @error('password')
             <span class="text-danger"> {{$message}} </span>
        @enderror
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" class="form-control" id="confirm_password"  placeholder="Confirm Password" name="password_confirmation" required>
            @error('password_confirmation')
            <span class="text-danger"> {{$message}} </span>
       @enderror
        </div>



        <button type="submit" class="btn btn-primary btn-block">Register</button>
        If you already registered <a href="{{route('login')}}"> Click Here </a>

    </form>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
