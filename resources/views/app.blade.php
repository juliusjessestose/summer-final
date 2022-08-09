<!DOCTYPE html>
<html>
  <head>
    <title>Recipes App</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    @vite('resources/css/app.css') 
    @inertiaHead 

    <style>
      body{
        background-image: url('./img/background-1.png');
        background-color: #676;
        background-repeat: no-repeat;
        background-position: top center;
        background-size: 100%;
        background-attachment: fixed;
      }
    </style>
  </head>
    @inertia
    @vite('resources/js/app.js') 
  </body>
</html>