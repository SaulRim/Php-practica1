<?php
declare(strict_types =1);

function renderTemplate(string $template, array $data){
    // Evita que tome variables de fuera
    // Somos nosotros quienes se las damos
    extract($data); // variables desenpacadas aquí
    // Podriamos colocarlas una por una
    require("./template/$template.php");
}

// Activado a nivel de archivo
// Que respete el tipado de datos
function getData(string $url): array{ // Sugerencia de tipo y devolución Para info
    // Podriamos usar || Get Directo
    $response = file_get_contents($url);

    /* 
    No capta las variables fuera de la función a menos que las traigas con el parametro global.

    global $saludo;
    echo $saludo;
     */
    /* $ch = curl_init($url); // crear sesión de curl
    // Obtener valor, no mostrarlo
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch); // ejecutar

    // Transformarlo en un array y poder acceder a él
    $data = json_decode($response,true);

    curl_close($ch); // Cierra petición */
    $data = json_decode($response,true);
    return $data;

}

function getUntilMessage(int $days){
    $output = match(true){
        $days == 0 => "Estreno hoy",
        $days < 8 => "En una semana",
        default => "Falta aun mucho"
    };
    return $output;
}
?>