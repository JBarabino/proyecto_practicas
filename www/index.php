<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Hoy No Cocino</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/1d3a9bf79c.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
<!-- Header -->
<header class="container">

<!-- Nav -->
  <?php include "includes/nav.html"; ?>
<!-- Nav -->

<!-- Conexión BBDD -->
<?php
  include "includes/conect_bbdd.php";
?>
<!-- Conexión BBDD -->

<!-- Form -->
<form class="form-inline" method="POST">
  <div class="form-group">
    <label for="name"></label>
    <input type="text" name="name" id="name" class="form-control" value="<?= isset($_POST['name'])?$_POST['name']:""; ?>" placeholder="Nombre" aria-describedby="helpId">
    <label for="localidad"></label>
      <select class="custom-select" name="localidad" id="localidad">
        <option selected value="">Localidad</option>
        <option value="Inca" <?= $localidad == "Inca" ? 'selected' : ""; ?>>Inca</option>
        <option value="Palma" <?= $localidad == "Palma" ? 'selected' : ""; ?>>Palma</option>
        <option value="Manacor" <?= $localidad == "Manacor" ? 'selected' : ""; ?>>Manacor</option>
      </select>
    <label for="tipo"></label>
      <select class="custom-select" name="tipo" id="tipo">
        <option selected value="">Tipo</option>
        <option value="Mallorquina" <?= $tipo == "Mallorquina" ? 'selected' : ""; ?>>Mallorquina</option>
        <option value="Italiana" <?= $tipo == "Italiana" ? 'selected' : ""; ?>>Italiana</option>
        <option value="India" <?= $tipo == "India" ? 'selected' : ""; ?>>India</option>
        <option value="Americana" <?= $tipo == "Americana" ? 'selected' : ""; ?>>Americana</option>
        <option value="Tapas" <?= $tipo == "Tapas" ? 'selected' : ""; ?>>Tapas</option>
        <option value="Japonesa" <?= $tipo == "Japonesa" ? 'selected' : ""; ?>>Japonesa</option>
      </select>
    <label for="precio"></label>
      <select class="custom-select" name="precio" id="precio">
        <option selected  value="">Precio </option>
        <option value="1" <?= $precio == 1 ? 'selected' : ""; ?>>1€</option>
        <option value="2" <?= $precio == 2 ? 'selected' : ""; ?>>2€</option>
        <option value="3" <?= $precio == 3 ? 'selected' : ""; ?>>3€</option>
        <option value="4" <?= $precio == 4 ? 'selected' : ""; ?>>4€</option>
        <option value="5" <?= $precio == 5 ? 'selected' : ""; ?>>5€</option>
      </select>
    <button name="button" id="button" type="submit" class="btn btn-primary">Buscar</button>
  </div>
</form>
<!-- Form -->

<!-- Logo -->
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <img
          src="img/HoyNoCocino.png"
          alt="imagen_logo"
          width="260"
        />
      </div>
    </div>
  </div>
<!-- Logo -->

<!-- Título -->
  <div class="container text-center">
    <h1>Hoy No Cocino</h1>
  </div>
<!-- Título -->

</header>
<!-- Header -->  

<!-- Main -->

<main class="container my-5">

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
    
    <?php while($value = $result->fetch_array(MYSQLI_ASSOC)){ ?>

    <!-- Card -->
    <div class="col mb-4">
      <div class="card">
        <img class="card-img-top h-100" src="img/<?= $value['name'] ?>.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?= $value['name'] ?> </h5>
          <p class="card-text">prueba prueba pruebaprueba prueba pruebaprueba</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?= $value['name'] ?></li>
          <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> <?= $value['localidad'] ?></li>
          <li class="list-group-item"><i class="fas fa-utensils"></i> <?= $value['tipo'] ?></li>
          <li class="list-group-item"><i class="fas fa-euro-sign"></i> <?= $value['precio'] ?></li>
          <li class="list-group-item"><i class="fas fa-star"></i> <?= $value['valor'] ?></li>
          <li class="list-group-item"><i class="fas fa-phone-square-alt"></i> <?= $value['telefono'] ?></li>
        </ul>
          <div class="card-body">
            <a href="includes/<?= $value['name'] ?>.php" class="card-link">Ve al restaurante</a>
          </div>
      </div>
    </div>
    <!-- Card -->

    <?php }
    // Close and free result
    $result->close();

    mysqli_close($conn);

    ?>
</div>
    <!-- Footer -->
    <footer class="page-footer font-small">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#"> HoyNoCocino.com</a>
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>