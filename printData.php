<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$testo = $_GET["paragrafo"];
$censuredWord = $_GET["parolaCensurata"]
?>

    <h1>Paragrafo</h1>
    <div>
        <h3>
            <?php 
            $badWord = str_replace($censuredWord,"***",$testo);
            echo $badWord; ?>

        </h3>
    </div>
    <div>
        La lunghezza del testo che hai scritto è :
        <?php
            $lunghezza = strlen($testo);
            echo $lunghezza . " caratteri"
        ?>
    </div>
</body>
</html>