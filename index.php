<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL); // crear sesión de curl
// Obtener valor, no mostrarlo
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($ch); // ejecutar

// Transformarlo en un array y poder acceder a él
$data = json_decode($response,true);

curl_close($ch); // Cierra petición


?>

<head>
    <title>Peliculas de marvel</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="Cual es la proxima pelicula de marvel">
</head>

<main>
    <section>
        <h1>La proxima pelicula de Marvel</h1>
        <img src=<?= $data["poster_url"]; ?> alt="Poster de <?= $data["title"]?>" style = "width:200px; border-radius: 8px">
        <div class = "tarjet">
            <h2><?= $data["title"] ?></h2>
            <p>Estrenado el <?= $data["release_date"] ?></p>
            <p>Proximamente: <?= $data["following_production"]["title"] ?></p>
        </div>
    </section>
</main>

<style>
    :root{
        color-scheme: light dark;
    }
    body, section {
        display: grid;
        place-items: center;
    }

    .tarjet{
        text-align: center;
    }

</style>