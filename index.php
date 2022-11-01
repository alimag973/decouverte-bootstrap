<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey into Bootstrap classes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Discovering Bootstrap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Photos</a></li>
            <li><a class="dropdown-item" href="#">Articles</a></li>
            <li><a class="dropdown-item" href="#">Projects</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main class="flex-grow-1 d-flex flex-column justify-content-around p-3">
    <h1 class="text-center">Journey into Bootstrap classes</h1>
    <div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col"> 
    <div class="card" style="width: 18rem;">
  <img src="/assets/lake.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Visit Components lake</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read more</a>
  </div>
</div>
</div>
<div class="col">
<div class="card" style="width: 18rem;">
  <img src="/assets/cascade.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Facing Cascade Style Sheet</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read more</a>
  </div>
</div>
</div>
<div class="col">
<div class="card" style="width: 18rem;">
  <img src="/assets/river.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Contemplate Form Inputs river</h5>
    <p class="card-text">Some quick example text to build on the card title.</p>
    <a href="#" class="btn btn-primary">Read more</a>
  </div>
</div>
</div>
<div class="col">
<div class="card" style="width: 18rem;">
  <img src="/assets/lanscape.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Enjoy Responsive Layout Land</h5>
    <p class="card-text">Some quick example text to build on the card title.</p>
    <a href="#" class="btn btn-primary">Read more</a>
  </div>
</div>
</div>

<footer class=" p-1 text-white bg-primary mt-auto text-center fixed-bottom w-100">
<div class="text-center bg-light text-dark p-3">
  <h2> The css frameworks are very useful </h2>
  <p>Learning them comes with practice</p>
</div>

	© 2022 wilders / images @pexel
	
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>