<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="personajes.css">
    <link rel="stylesheet" href="style.css">
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

      <section class="container">
        
      <div class="container color">
            <div class="text-center">
                <p class="fs-2 mt-4">Personajes</p>
            </div>
    </div>
            

            <div class="container">
                <div class="row">
                    <?php
                    //inicio de sesion
                    $ch = curl_init();

                    curl_setopt($ch, CURLOPT_URL, 'https://rickandmortyapi.com/api/character');
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($ch);
                    $decoded = json_decode($response, true);
                    foreach ($decoded['results'] as $data) {
                        $name = $data['name'];
                        $image = $data['image'];
                        $status = $data['status'];
                        $species = $data['species'];
                        $gender = $data['gender'];
                        echo "<div class='col-12 col-md-6 col-lg-4 col-xl-3 mt-4'>
                    <div class='card mb-3'>
                        <img src='$image' class='card-img-top' alt='Imagen de $name'>
                        <div class='card-body'>
                            <h5 class='card-title'>$name</h5>
                            <p class='card-text'>Estatus: $status</p>
                            <p class='card-text'>Especie: $species</p>
                            <p class='card-text'>Genero: $gender</p>
                        </div>
                    </div>
                </div>";
                    }

                    curl_close($ch);

                    ?>
                </div>
            </div>

        </section>
    
</body>
</html>