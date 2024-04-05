<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";

# inicializamos una nueva sesión de curl, ch= curl handle
$ch = curl_init(API_URL);
# indicar que queremos recibir el resultado de la operación y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejecutar la petición 
  y guardamos el resultado*/

$result = curl_exec($ch);

// una alternativa sería usar file_get_contents
// $result = file_get_contents(API_URL); // Si solo quieres hacer un GET a una API
$data = json_decode( $result, true);

curl_close($ch);



?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>La proxima pelicula de marvel</title>
  <meta name="description" content="La proxima pelicula de Marvel">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>
  </head>
<main>
  <pre style= "font-size: 10px; overflow: scroll; height: 250px">
    <?php var_dump($data); ?>;
  </pre>
  <section>
    <img src="<?= $data['poster_url']; ?>" width="200" alt="Poster de <?= $data["title"]; ?>"
      style= "border-radius: 16px" />;
  </section>

<hgroup>
  <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> </h3>
  <p> Se estrena en: <?= $data["release_date"]; ?> </p>
  <p> La Siguiente peli es: <?= $data["following_production"]["title"]; ?> </p>
</hgroup>
  

<style>
  :root {
    color-scheme: light dark;
  }
  body {
    display: grid;
    place-content: center;

    section {
      display: flex;
      justify-content: center;
    }
    hgroup {
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }
    
  }
</style>
   </main>
