<!-- Aprire la sessione! -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Zornio Laura">
    <title>Session</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="content">
        <div class="spacer"></div>
        <h1>Siamo nella pagina <span class="color-azz">Sessione</span></h1>

        <?php
            
            if(isset($_SESSION['nome'])) {
                $nome = $_SESSION['nome'];
                echo '<p>Ciao,<span class="color-azz"> '.$nome.'! </span>Sei nella sessione!</p>';
            } else {
                echo "<p>Nessuna sessione Aperta.</p>";
            }
        
        ?>

        <div class="maxi"></div>

        <div class="center">
            <a href="index.php" class="btn-sess color-azz">Torna Indietro</a>
        </div>
    </div>


</body>
</html>