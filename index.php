<?php
$lunghezza=$_GET["lunghezza"];

include __DIR__ .'/functions.php' ; 

$lunghezza=RandomPass($lunghezza);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    

    <form action="./index.php" method="get" >
        <label for="lunghezza" style="display:block; margin-bottom:20px">Inserisci la lunghezza desiderata per generare una password che sia compresa tra 5 e 15 caratteri</label>
        <input type="number" name="lunghezza" min="5" max="15">
        <button>Invio</button>
    </form>
    <p>La tua password verrà genrata qui:</p>
    <p><strong><?php echo $lunghezza ?></strong></p>

</body>
</html>