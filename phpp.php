<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Conf Bs As</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="TpIntegrador.css">


</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

      <a class="navbar-brand" href="#">
        <img src="codoacodo.png" alt="Logo" width="80" height="50" class="d-inline-block align-text-mid">
        Conf Bs As
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">La conferencia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Los oradores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">El lugar y la fecha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ticket.html">Conviértete en orador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ticket.html"><span style="color:rgb(4, 169, 4)">Comprar tickets</span> </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="registro.html"><span style="color:rgb(4, 169, 4)">Registrarse</span> </a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <div id="carouseltp1" class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img id="imagen1" src="ba1.jpg" height="700" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="imagen1" src="ba2.jpg" height="700" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="imagen1" src="ba3.jpg" height="700" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  </div>
  <div id="textoSobreCarrusel" class="container-sm">
    <h1>Conf Bs As</h1>
    <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
    <button type="button" href="ticket.html" class="btn btn-outline-light btn-lg">Quiero ser orador</button>
    <a type="button" href="ticket.html" class="btn btn-success btn-lg  ">Comprar tickets</a>
  </div>
  <br>

  <div id="TextoPresentativo">
    <p class="card-text"><small class="text-muted">CONOCE A LOS</small>
    <h1>ORADORES</h1>
    </p>
  </div>

  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="steve.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <span class="badge bg-warning text-dark">JavaScript</span>
            <span class="badge bg-info text-white"> React </span>
            <h4 class="card-title">Steve Jobs</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="bill.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <span class="badge bg-warning text-dark">JavaScript</span>
            <span class="badge bg-info text-white"> React </span>
            <h4 class="card-title">Bill Gates</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="ada.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <span class="badge bg-secondary text-white">Negocios</span>
            <span class="badge bg-danger text-white"> Startups </span>
            <h4 class="card-title">Steve Jobs</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>

  <div class="card mb-3">
    <div class="row g-1">
      <div class="col-md-6">
        <img src="honolulu.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-6">
        <div id="cardText" class="card-body bg-dark bg-success p-2" class="card mb-3" style="--bs-bg-opacity: .9;">
          <h5 class="card-title text-white">Bs As - Octubre</h5>
          <br>
          <p class="card-text text-white"> Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos. Honolulu es la más sureña de entre las principales cuidades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600 km² de superficie).</p>
          <button type="button" class="btn btn-outline-light ">Conocé más</button>

        </div>
      </div>
    </div>
  </div>

  <div id="TextoPresentativo">
    <p class="card-text"><small class="text-muted">CONVIÉRTETE EN UN</small>
    <h1>ORADOR</h1>
    </p>
    <h5>Anótate como orador para dar una <u class="dotted">charla ignite</u>. Cuéntanos de qué quieres hablar!</h5>
  </div>

  <div id="form" class="container-sm">
    <div class="d-grid gap-3">

      <form>
        <div class="row g-5">
          <div class="col">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
          </div>
          <div class="col">
            <input type="password" class="form-control" placeholder="Enter password">
          </div>
        </div>
      </form>

      <div class="mb-3">
        <textarea type="email" class="form-control" id="exampleFormControlTextarea1" style=font-size:25px; placeholder="Sobre qué quieres hablar?" rows="3"></textarea>
        <small class="text-muted">Recuerda incluir un título para tu charla</small>
      </div>
      <div class="d-grid gap-2">
        <button class="btn text-white" style="background-color:rgb(144, 210, 63)" type="button">Enviar</button>
      </div>
    </div>
    <br>

  </div>


  <div class="container-fluid" style="background-color:rgb(44, 74, 106)">
    <footer class="y-4 my-3">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3 ">
        <li class="nav-item"><a href="#" class="nav-link mx-4 text-white col-md-auto ">Preguntas <br> Frecuentes </a></li>
        <li class="nav-item"><a href="#" class="nav-link mx-4 text-white col-md-auto">Contáctanos</a></li>
        <li class="nav-item"><a href="#" class="nav-link mx-4 text-white">Prensa</a></li>
        <li class="nav-item"><a href="#" class="nav-link mx-4 text-white">Conferencias</a></li>
        <li class="nav-item"><a href="#" class="nav-link mx-4 text-white">Términos y <br> condiciones</a></li>
        <li class="nav-item"><a href="#" class="nav-link mx-4 text-white">Privacidad</a></li>
        <li class="nav-item"><a href="#" class="nav-link mx-4 text-white">Estudiantes</a></li>
      </ul>
    </footer>
  </div>
</body>

</html>