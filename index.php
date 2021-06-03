<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css
    ">
    <title>PHP badwords</title>
</head>
<body>
<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

$paragrafo = "trentatré trentini entrarono
trotterellando in Trento,
tutti e trentatré trotterellando.

Trentatré trentini entrarono
trotterellando in Trento,
tutti e trentatré trotterellando.

Trentatré trentini entrarono
trotterellando in Trento,
tutti e trentatré trotterellando.";
$parolaCensurataUtente = $_GET['parola'];
$nuovoParagrafo = str_replace($parolaCensurataUtente, '***', $paragrafo);
$nuovoParagrafoGiàCensurato = str_replace('trentatré', '***', $paragrafo);
$parolaCensurata = "trentatré";

  ?>

  <div class="container">

<!-- paragrafo iniziale -->
  <div>
    <h1>Paragrafo iniziale: </h1><p><?php echo $paragrafo ?></p>
    <h3>Lunghezza paragrafo: <span><?php echo strlen($paragrafo) . ' caratteri' ?></span></h3>
    <hr>
  </div>

<!-- paragrafo con parole censurate in base alla parola che inserisce l'utente nella barra di URL con parola='valore da inserire' -->
<div>
    <h1>Paragrafo modificato con la parola inserita dall'utente: </h1><p><?php echo $nuovoParagrafo ?></p>
    <h3>Lunghezza nuovo paragrafo: <span><?php echo strlen($nuovoParagrafo) . ' caratteri' ?></span></h3>
    <h3>Parola censurata: <span><?php echo $parolaCensurataUtente ?></span></h3>
    <hr>
</div>
<!-- 
paragrafo con parola censurata dià di default perchè decisa da me -->
<div>
    <h1>Paragrafo modificato con la parola già censurata di default: </h1><p><?php echo $nuovoParagrafoGiàCensurato ?></p>
    <h3>Lunghezza nuovo paragrafo: <span><?php echo strlen($nuovoParagrafoGiàCensurato) . ' caratteri' ?></span></h3>
    <h3>Parola censurata di default: <span><?php echo 'trentatré' ?></span></h3>
    <hr>
</div>

  </div>




</body>
</html>