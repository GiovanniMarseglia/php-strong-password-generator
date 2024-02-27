<?php
session_start();
$lunghezza=$_SESSION["res"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1><?php echo $lunghezza?></h1>

    <button>
        <a href="./index.php" style="text-decoration:none" >Indietro</a>
        <?php
        session_unset();
        session_destroy();
        ?>
    </button>
</body>
</html>