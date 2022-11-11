<?php
function Json($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($data);
    return $json;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="classM">
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

        <div class="container color">
            <div class="text-center ">
                <p class="fs-2 mt-4">Personajes Capitulo 1</p>
            </div>
        </div>

        <div class="container">
            <div class="row" id="infoCharacters">
                <?php
                $url = "https://rickandmortyapi.com/api/episode/1";
                $json = file_get_contents($url);
                $data = json_decode($json, true);
                $characters = $data['characters'];

                foreach ($characters as $character) {
                    $json = file_get_contents($character);
                    $data = json_decode($json, true);
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
                ?>

            </div>
        <div class="container color">
            <div class="text-center">
                <p class="fs-2 text">Personajes Aleatorios</p>
            </div>
        </div>
            
        </div>
        <div class="container">
            <div class="row">
                <?php
                //3 personajes aleatorios en tarjetas 
                $url = "https://rickandmortyapi.com/api/character";
                $json = file_get_contents($url);
                $data = json_decode($json, true);
                $results = $data['results'];
                $characters = array_rand($results, 3);

                foreach ($characters as $character) {
                    $name = $results[$character]['name'];
                    $image = $results[$character]['image'];
                    $status = $results[$character]['status'];
                    $species = $results[$character]['species'];
                    $gender = $results[$character]['gender'];

                    //3 tarjetas centradas
                    echo "<div class='col-12 col-md-6 col-lg-4 col-xl-4 mt-5'>
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
                ?>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>