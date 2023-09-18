<?php
    session_start();
    if(!isset($_SESSION['loggedin']) or $_SESSION['loggedin'] != true) {
        header('location: login.php');
        exit;
    }

    $filename = 'registro.txt';
    if(!file_exists($filename)) {
        print('nenhum cadastro'.PHP_EOL.'<br>');
    }
    else {
        $handle = fopen($filename, 'r');
        while(!feof($handle)) {
            print(fgets($handle).PHP_EOL.'<br>');
        }
        fclose($handle);
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <button onclick="location.href='menu.php'">
            voltar
        </button>
    </body>
</html>