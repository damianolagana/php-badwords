<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <main>
        <div class="formBox">
            <form action="printData.php" method="GET">
                <input class="h50px" type="text" name="paragrafo" size="40" maxlength="200" placeholder="Inserisci del testo">
                <input type="text" name="parolaCensurata" size="30" placeholder="Inserisci parola da censurare">
                <button type="submit">Invia</button>
            </form>

        </div>
    </main>
</body>
</html>