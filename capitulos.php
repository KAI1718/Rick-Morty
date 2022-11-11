<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitulos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="capitulos.css">
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
              <a class="nav-link active fs-4" href="personajes.html">Personajes</a>
              <a class="nav-link active fs-4" href="temporadas.php">Temporadas</a>
              <a class="nav-link active fs-4" href="capitulos.php">Capitulos</a>
            </div>
          </div>
          <img src="imagenes/iconmorty.png" alt="Logo" width="55" height="55" class="d-inline-block align-text-top ">
        </div>
      </nav>

      <div class="container color">
          <div class="text-center">
            <p class="fs-2 mt-4">Capitulos</p>
          </div>
      </div>

        <div class="container">
            <div class="row">
            <?php
                if(isset($_GET["page"])){
                    $page=$_GET["page"] +=1;
                }else{
                    $page=1;
                }
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://rickandmortyapi.com/api/episode?page=".$page);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $head = curl_exec($ch);
                curl_close($ch);
                $data = json_decode($head);
                foreach ($data->results as $result) {
                    $name = $result->name;
                    $episode = $result->episode;
                    $air_date = $result->air_date;
                    echo "<div class='col-12 col-md-6 col-lg-4 col-xl-3 mt-5'>
                    <div class='card mb-3'>
                    <img src='imagenes/portadacapitulos.png' class='card-img-top'>
                            <div class='card-body'>
                                <h5 class='card-title text-center'>$name</h5>
                                <p class='card-text text-center'>Episodio: $episode</p>
                                <p class='card-text text-center'>Fecha de Lanzamiento: $air_date</p>
                            </div>
                        </div>
                    </div>";
                }
                ?>
                <?php
                if($page > 1){
                    $back = $page-2;
                    echo"
                    <form action='capitulos.php' method='get' class='col justify-content-start align-self-start'>
                    <input type='text' style='display:none'  name='page' value='$back'>
                    <input type='submit' value='Anterior' class='btn'>
                    </form>";
                }
                if($page < $data->info->pages){
                    echo"
                    <form  class='justify-content-end col align-self-end' action='capitulos.php' method='get'>
                    <input type='text' style='display:none'   name='page' value='$page'>
                    <input type='submit' value='Siguiente' class='btn2 text-white'>  
                    </form>";
                }
                                    
            ?>
            </div>
        </div>
</body>
</html>