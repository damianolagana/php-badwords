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
?>

    <h1>Paragrafo</h1>
    <div>
        <?php echo $testo; ?>
    </div>
</body>
</html>