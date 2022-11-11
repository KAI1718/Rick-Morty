<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temporadas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg encabezado">
      <div class="container-fluid">
        <img src="imagenes/iconrick.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
        <a class="navbar-brand fs-4 " href="#">Rick & Morty</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active fs-4" href="index.php">Inicio</a>
            <a class="nav-link active fs-4" href="personajes.php">Personajes</a>
            <a class="nav-link active fs-4" href="temporadas.php">Temporadas</a>
            <a class="nav-link active fs-4" href="capitulos.php">Capitulos</a>
          </div>
        </div>
        <img src="imagenes/iconmorty.png" alt="Logo" width="55" height="55" class="d-inline-block align-text-top ">
      </div>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
      <div class="row g-3 text-center justify-content-center">
        <div class="col-12 col-md-6 col-lg-6 align-self-center justify-content-center" style="width: 45vh;">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="imagenes/temp1.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Temporada 1</h5>
                  <p class="card-text">En la Primera Temporada, Rick y Morty van a una casa de empeño en el espacio, conocen universos paralelos y al diablo, que trabaja en su tienda de antigüedades.</p>
                  <p class="card-text"><small class="text-muted">N° de Capitulos : 11</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
        echo " <div class='col-12 col-md-6 col-lg-6 align-self-center justify-content-center' style='width: 45vh;'>
            <div class='card mb-3' style='max-width: 540px;'>
              <div class='row g-0'>
                <div class='col-md-4'>
                  <img src='imagenes/temp2.jpg' class='img-fluid rounded-start'>
                </div>
                <div class='col-md-8'>
                  <div class='card-body'>
                    <h5 class='card-title'>Temporada 2</h5>
                    <p class='card-text'>Después de que Rick y Morty descongelan el tiempo, deben lugar contra parásitos extraterrestres, Jerrys alternos y una posible dimensión inexistente.</p>
                    <p class='card-text'><small class='text-muted'>N° de Capitulos : 10</small></p>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <div class='col-12 col-md-6 col-lg-6 align-self-center justify-content-center' style='width: 45vh;'>
              <div class='card mb-3' style='max-width: 540px;'>
                <div class='row g-0'>
                  <div class='col-md-4'>
                    <img src='imagenes/seas3 (2).jpeg' class='img-fluid rounded-start'>
                  </div>
                  <div class='col-md-8'>
                    <div class='card-body'>
                      <h5 class='card-title'>Temporada 3</h5>
                      <p class='card-text'>Jerry le pide a Beth que elija entre él y Rick, para así poder probar la fortaleza de su matrimonio. Al ver que su esposa elige a Rick, Jerry decide abandonar a su familia.</p>
                      <p class='card-text'><small class='text-muted'>N° de Capitulos : 10</small></p>
                    </div>
                  </div>
                </div>
              </div>
              </div>

            <div class='col-12 col-md-6 col-lg-6 align-self-center justify-content-center' style='width: 45vh;'>
                <div class='card mb-3' style='max-width: 540px;'>
                  <div class='row g-0'>
                    <div class='col-md-4'>
                      <img src='imagenes/tempor4.png' class='img-fluid rounded-start'>
                    </div>
                    <div class='col-md-8'>
                      <div class='card-body'>
                        <h5 class='card-title'>Temporada 4</h5>
                        <p class='card-text'>El regreso de Jerry, por lo que Rick cree que su poder y estatus en la unidad familiar se ha visto relegado, disminuyendo sus locas hazañas científicas. Sin embargo, las aventuras con su nieto Morty.</p>
                        <p class='card-text'><small class='text-muted'>N° de Capitulos : 10</small></p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class='col-12 col-md-6 col-lg-6 align-self-center justify-content-center' style='width: 45vh;'>
                  <div class='card mb-3' style='max-width: 540px;'>
                    <div class='row g-0'>
                      <div class='col-md-4'>
                        <img src='imagenes/temp5.png' class='img-fluid rounded-start'>
                      </div>
                      <div class='col-md-8'>
                        <div class='card-body'>
                          <h5 class='card-title'>Temporada 5</h5>
                          <p class='card-text'>Morty, después de una frenética introducción en la que se dedica a arreglar problemas por distintos planetas que Rick ha ido ocasionando a causa de su desidia, discute con su abuelo.</p>
                          <p class='card-text'><small class='text-muted'>N° de Capitulos : 10</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class='col-12 col-md-6 col-lg-6 align-self-center justify-content-center' style='width: 45vh;'>
                    <div class='card mb-3' style='max-width: 540px;'>
                      <div class='row g-0'>
                        <div class='col-md-4'>
                          <img src='imagenes/temp6.png' class='img-fluid rounded-start'>
                        </div>
                        <div class='col-md-8'>
                          <div class='card-body'>
                            <h5 class='card-title'>Temporada 6</h5>
                            <p class='card-text'>Rick y Morty varados en los restos de la Ciudadela en el espacio. No tienen líquido de portales ni aparente esperanza. Tras una referencia a ‘Los Vengadores: Endgame’, son rescatados </p>
                            <p class='card-text'><small class='text-muted'>N° de Capitulos : 10</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>

             
        </div>
        </div>
      </div>
                "
        ?>

      <!-- eres malisima -->
      <!-- <div class="row align-items-center">-->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>