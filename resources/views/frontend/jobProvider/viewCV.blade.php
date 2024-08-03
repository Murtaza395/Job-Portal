<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Add this CSS to your stylesheet or in your HTML file */

.img-cv {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
    border: 1px solid #ddd; /* Optional: Add a border for better visibility */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow for better contrast */
}

    </style>
</head>
<body>
 <img src="{{asset($cv)}}" class="img-cv" alt="cv" >
</body>
</html>
