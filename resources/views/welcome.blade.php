@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="Curriculum-CSS.css">

<title>Document</title>
</head>

<body>
  <div style="background-image: url('img/00.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #def;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>

          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <form>
      <div class="mb-3" style="border-radius: 5px; background-color: #def;">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" class="redondeado" value="">
        <label for="exampleInputEmail1" class="form-label">Contraseña</label>
        <input type="text" class="redondeado" value="">
      </div>
    </form>

    <div>
      <div class="background-nav py-5">
        <div class="text-center" style="">
          <img src="img/02.jpg" class="rounded-pill" alt="..." View width="400" View height="400">

          <div class="text-center mb-3">
            <img src="img/01.jpg" class="" alt="..." View width="1500" View height="450">
          </div>
        </div>
        <br>
        <br>
        <div class="text-center" style="display:flex; justify-content:center;">
          <div style="margin-left:15px">
            <img src="https://escuelafintech.com/wp-content/uploads/estudiar-programacion.jpg" class="img-thumbnail" alt="..." View width="300" View height="150">
            <p>Desarrollo Web</p>
          </div>
          <div style="margin-left:15px">
            <img src="https://escuelafintech.com/wp-content/uploads/estudiar-programacion.jpg" class="img-thumbnail" alt="..." width="300" height="150">
            <p>Programacion</p>
          </div>
          <div style="margin-left:15px">
            <img src="https://escuelafintech.com/wp-content/uploads/estudiar-programacion.jpg" class="img-thumbnail" alt="..." width="300" height="150">
            <p>Anime</p>
          </div>
          <div style="margin-left:15px">
            <img src="https://escuelafintech.com/wp-content/uploads/estudiar-programacion.jpg" class="img-thumbnail" alt="..." width="300" height="150">
            <p>Video Juegos</p>
          </div>
        </div>

        <div class="mb-3" style="background-color: #def;">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-8" style="background-color: #def;">
          <label for="exampleFormControlTextarea1" class="form-label">Deja tu Duda o Comentario</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="social">
          <div style="display:flex; justify-content:center; ">
            <div style="margin-left:30px">
              <a href="https://wa.me/2291517207 "><img src="img/05.png" class="img-thumbnail" alt="..." width="75" height="75">
                <p>Whatsapp</p>
              </a>
            </div>
            <div style="margin-left:30px">
              <a href="https://m.me/Jonathan Amoros"><img src="img/06.png" class="img-thumbnail" alt="..." width="75" height="75">
                <p>Facebook</p>
              </a>
            </div>
            <div style="margin-left:30px">
              <a href="https://twitter.com"><img src="img/08.png" class="img-thumbnail" alt="..." width="75" height="75">
                <p>Twitter</p>
              </a>
            </div>
            <div style="margin-left:30px">
              <a href="https://www.instagram.com"><img src="img/07.png" class="img-thumbnail" alt="..." width="75" height="75">
                <p>Instagram</p>
              </a>
            </div>
          </div>
        </div>
      </div>
      @endsection