<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p> <strong> User Name : </strong> {{$mailData['name']}} </p>
    <p> <strong>User Email : </strong> {{$mailData['email']}} </p>
    <p> <strong>Subject : </strong> {{$mailData['subject']}} </p>
 <p> <strong>Message : </strong> {{$mailData['message']}} </p>

</body>
</html>
