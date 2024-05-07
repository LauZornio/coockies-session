<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Zornio Laura">
    <title>Cookies</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="content">
        <div class="spacer"></div>
        <h1>Siamo nella seconda pagina <span class="color-green">Cookies</span></h1>

        <?php
        // attraverso la variabile super globale COOKIE, posso ricavare il valore
            if(isset($_COOKIE['nome_cookie'])) {
                $nome = $_COOKIE['nome_cookie'];
                echo '<p>Ciao,<span class="color-green"> '.$nome.'! </span>Sei nella seconda pagina Cookies!</p>';
            } else if ($_COOKIE['nome_cookie']="''") {
                echo "<p>Il Cookies è impostato ma risulta vuoto</p>";
            } else {
                echo "<p>Errore nella creazione del Cookie</p>";
            }
        ?>

        <div class="maxi"></div>

        <div class="center">
            <a href="index.php" class="btn-cook color-green">Torna in index</a>
        </div>
    </div>


</body>
</html>