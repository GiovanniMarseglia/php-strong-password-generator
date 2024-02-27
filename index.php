<?php
session_start();
$lunghezza=$_GET["lunghezza"];
$num=isset($_GET["num"]) ? 'true' : 'false';
$char=isset($_GET["char"]) ? 'true' : 'false';
$sim=isset($_GET["sim"]) ? 'true' : 'false';
$dup=$_GET["radio1"];
var_dump($num,$char,$sim,$dup);

include __DIR__ .'/functions.php' ; 

$_SESSION["num"] = $num;
$_SESSION["char"] = $char;
$_SESSION["sim"] = $sim;
$_SESSION["dup"] = $dup;

if( $num=="false" && $char=="false" && $sim=="false" ){
    
    $lunghezza=RandomPass($lunghezza);
    var_dump($lunghezza);
}else{
    $lunghezza=RandomExstra($lunghezza);
}

$_SESSION["res"] = $lunghezza;


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
        <input type="number" name="lunghezza" min="5" max="15" require style="display:block; margin-bottom:20px">
        <label for="num" style="display:block;">numeri</label>
        <input type="checkbox" name="num" style="display:block; margin-bottom:20px">
        <label for="num"  style="display:block;">caratteri</label>
        <input type="checkbox" name="char" style="display:block; margin-bottom:20px">
        <label for="sim" style="display:block;">simboli</label>
        <input type="checkbox" name="sim" style="display:block; margin-bottom:20px">
        <h4 style="margin:20px 0px">duplicare i caratteri?</h4>
        <label for="radio1">si</label>
        <input type="radio" name="radio1" value="si" style="display:block; margin-bottom:20px">
        <label for="radio2" >no</label>
        <input type="radio" name="radio1" value="no" style="display:block; margin-bottom:20px" checked>
        <button>Invio </button>
        
        
    </form>

    <h1><?php echo $lunghezza?></h1>

</body>
</html>