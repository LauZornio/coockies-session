<!-- impostazione COOKIES -->
<!--
    * importante settare il cookies
    * tempo di durata del cookies in secondi: 3600 equivale ad un'ora
 -->
<?php
    if(isset($_POST['cookies'])) {
        $name = $_POST['cookies'];
        setcookie('nome_cookie', $name, time() + 3600);
        header("Location: pagina_cookie.php"); //reindirizza automaticamente alla pagina di destinazione
        exit;
    }
?>

<!-- impostazione SESSIONE -->
<!--
    *aprire la sesisone
    *in $_SESSION mettere il valore dell'input type session
 -->
<?php
    session_start();

    if(isset($_POST['session'])) {
        $_SESSION['nome'] = $_POST['session'];
        header("Location: pagina_sessione.php"); //reindirizza automaticamente alla pagina di destinazione
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Zornio Laura">
    <title>Cookies - Session</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="content">
        <div class="spacer"></div>
        <h1>Come funzionano i <span class="color-green">Cookies</span> e le <span class="color-azz">Sessioni</span></h1>

        <div class="sez-col">
            <div class="col-6 colonne">
                <h2 class="color-green cap">Cookies</h2>

                <div class="spacer"></div>

                <p>Il cookies rimane salvato nel browser per una durata stabilita dal cookies stesso.</p>
                <p>Il cookies non è legato alla chiusura del browser.</p>
                <p>Il cookies deve essere settato!</p>

                <form action="index.php" method="post">
                    <input type="text" name="cookies" placeholder="Inserisci il tuo nome">
                    <input type="submit" name="submit" value="Invia Cookies" class="color-green">
                </form>
            </div> <!-- end col-6 colonne -->

            <div class="col-6 colonne">
                <h2 class="color-azz cap"></span>Sessione</h2>

                <div class="spacer"></div>

                <p>La sessione NON deposita dati nel browser dell'utente.</p>
                <p>La sessione è legata alla chiusura del browser.</p>
                <p>La sessione non ha settaggi.</p>

                <form action="index.php" method="post">
                    <input type="text" name="session" value="" placeholder="Inserisci il tuo nome">
                    <input type="submit" name="submit" value="Avvia Sessione" class="color-azz" >
                </form>
            </div> <!-- end col-6 colonne -->
        </div> <!-- end sez-col -->
    </div> <!-- end content -->


</body>
</html>
