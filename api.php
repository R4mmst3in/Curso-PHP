<?php
CONST API_CURL = "https://whenisthenextmcufilm.com/api";

echo "Datos de la API";

$ch = curl_init(API_CURL);

// Indicar que queremos hacer recibir el resultado pero no mostrarlo por pantall

curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$data = json_decode($result, true);

var_dump($data);

?>

<main>
  <h2>PROXIMA PELICULA DE MARVEL</h3>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>
