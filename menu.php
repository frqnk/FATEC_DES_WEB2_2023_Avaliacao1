<?php
    session_start();
    if(!isset($_SESSION['loggedin']) or $_SESSION['loggedin'] != true) {
        header('location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <button onclick="location.href='realiza_cadastro.php'">
            realizar cadastros
        </button>
        <br/>
        <button onclick="location.href='visualiza_cadastro.php'">
            visuaizar cadastros
        </button>
        <br/>
        <button onclick="location.href='logout.php'">
            sair
        </button>
    </body>
</html>