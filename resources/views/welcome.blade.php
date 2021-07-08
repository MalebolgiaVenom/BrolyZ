@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="Curriculum-CSS.css">

<title>Document</title>
</head>

<body>
  <div class="text-center" style=" display:flex; justify-content:center;">
    <img src="img/02.jpg" class="rounded-pill" alt="..." View width="400" View height="400">
    <p class="p-3 mb-2 bg-primary text-white text-wrap fw-bold" style="float: left; width: 45rem;">
      Mi Nombre es Jonathan Damian Amoros y soy un Estudiante de programacion. <br>
      Mi Nombre es Jonathan Damian Amoros y soy un Estudiante de programacion. <br>
      Mi Nombre es Jonathan Damian Amoros y soy un Estudiante de programacion. <br>
      Mi Nombre es Jonathan Damian Amoros y soy un Estudiante de programacion. <br>
      Mi Nombre es Jonathan Damian Amoros y soy un Estudiante de programacion. <br>
      Mi Nombre es Jonathan Damian Amoros y soy un Estudiante de programacion. <br>
    </p>
  </div>
  <div class="text-center" style="display:flex; justify-content:center;">
    <figure class="figure">
      <img src="img/01.jpg" class="figure-img img-fluid rounded" alt="..." width="1000" height="1000">
      <figcaption class="figure-caption p-3 mb-2 bg-primary text-white fw-bold text-wrap" style="width: 63rem;">
        Estudiante de HTML,CSS y JavaScript.<br>
        Ancioso de Aprender mas Idiomas<br>
        Mi Nombre es Jonathan Damian Amoros y soy un Estudiante de programacion. <br>
        Mi Nombre es Jonathan Damian Amoros y soy un Estudiante de programacion. <br>
        Mi Nombre es Jonathan Damian Amoros y soy un Estudiante de programacion. <br>
        Mi Nombre es Jonathan Damian Amoros y soy un Estudiante de programacion. <br>

      </figcaption>
    </figure>
  </div>
  <div class="text-center" style="display:flex; justify-content:center;">
    <div style="margin-left:15px">
      <img src="https://escuelafintech.com/wp-content/uploads/estudiar-programacion.jpg" class="img-thumbnail" alt="..." View width="300" View height="150">
      <div class="d-grid gap-2">
        <button class="btn btn-primary fw-bold" type="button">Programacion</button>
      </div>
    </div>
    <div style="margin-left:15px">
      <img src="https://escuelafintech.com/wp-content/uploads/estudiar-programacion.jpg" class="img-thumbnail" alt="..." width="300" height="150">
      <div class="d-grid gap-2">
        <button class="btn btn-primary fw-bold" type="button">Desarrollo Web</button>
      </div>
    </div>
    <div style="margin-left:15px">
      <img src="https://escuelafintech.com/wp-content/uploads/estudiar-programacion.jpg" class="img-thumbnail" alt="..." width="300" height="150">
      <div class="d-grid gap-2">
        <button class="btn btn-primary fw-bold" type="button">Anime</button>
      </div>
    </div>
    <div style="margin-left:15px">
      <img src="https://escuelafintech.com/wp-content/uploads/estudiar-programacion.jpg" class="img-thumbnail" alt="..." width="300" height="150">
      <div class="d-grid gap-2">
        <button class="btn btn-primary fw-bold" type="button">Video Games</button>
      </div>
    </div>
  </div>
  <br>


  <div class="social">
    <div style="display:flex; justify-content:center; ">
      <div style="margin-left:30px">
        <a href="https://wa.me/2291517207 "><img src="img/05.png" class="img-thumbnail" alt="..." width="75" height="75">
        </a>
      </div>
      <div style="margin-left:30px">
        <a href="https://m.me/Jonathan Amoros"><img src="img/06.png" class="img-thumbnail" alt="..." width="75" height="75">
        </a>
      </div class="btn btn-primary">
      <div style="margin-left:30px">
        <a href="https://twitter.com"><img src="img/08.png" class="img-thumbnail" alt="..." width="75" height="75">
        </a>
      </div>
      <div style="margin-left:30px">
        <a href="https://www.instagram.com"><img src="img/07.png" class="img-thumbnail" alt="..." width="75" height="75">
        </a>
      </div>
    </div>
  </div>
  </div>
  @endsection