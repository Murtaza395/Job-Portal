<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Input Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .form-container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }
  </style>
</head>
<body>
    @if (session('successMsg'))
            <div class="alert alert-success">
                {{ session('successMsg') }}
            </div>
        @endif
  <div class="container form-container">
    <h2 class="text-center">User Input Form</h2>

    <form method="post" action="{{route('editCareerProfile')}}" enctype="multipart/form-data">
   @csrf
        <div class="form-group">
        <label for="qualification">Qualification:</label>
        <input type="text" class="form-control" value="{{$profile->qualification}}" id="qualification" name="qualification" required>
      </div>

      <div class="form-group">
        <label for="skills">Skills:</label>
        <input type="text" class="form-control" value="{{$profile->skill}}" id="skills"  name="skill" required>
      </div>

      <div class="form-group">
        <label for="experience">Experience:</label>
        <input type="number" class="form-control" value="{{$profile->experience}}" id="experience" name="experience" required>
      </div>

      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" value="{{$profile->age}}" id="age" name="age" required>
      </div>

      <div class="form-group">
        @if($profile->cv)
<img src="{{asset($profile->cv)}}" alt="{{asset($profile->cv)}})" height="" width="20%"> <br>
        @endif
        <label for="cvImage">CV:</label>
        <input type="file" class="form-control-file mt-2" id="cvImage" name="cvImage" accept="image/*">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
