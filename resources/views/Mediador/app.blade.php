<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   
    <title>Mediacion</title>
</head>
<body>
<!-- navigation header -->
<nav class="navbar" style="background-color: #B2D1FF">
    <div class="container justify-content-star">
        <a class="navbar-brand" href="#">
        <img src="{{ asset('images/pj-logo-azul.svg')}}" alt="Logo" width="200" height="100" >
        </a>

        <!-- links -->
        <ul class="nav justify-content-center>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">CASA DE JUSTICIA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CREACION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PLAN PILOTO</a>
          </li>
        </ul>
    </div>
    
</nav>
@yield ('content')




<footer class="text-center text-white fixed-bottom" style="background-color: #B2D1FF;">
  <!-- Grid container -->
  <div class="container p-1 text-black text-center">
     Area de Desarrollo de Sistemas - Interno 2535/38 - Copyright © 2023 
  </div>

  <!-- Copyright -->
  <div class="text-center p-2 text-black">
    Poder Judicial de Santiago del Estero
  </div>
 
</footer>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
