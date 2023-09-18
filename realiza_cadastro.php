<?php
    session_start();
    if(!isset($_SESSION['loggedin']) or $_SESSION['loggedin'] != true) {
        header('location: login.php');
        exit;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST['nome']) and !empty($_POST['ra']) and !empty($_POST['placa'])) {
            $filename = 'registro.txt';
            $handle = fopen($filename, 'a');
            fwrite($handle, $_POST['nome'].'|'.$_POST['ra'].'|'.$_POST['placa'].PHP_EOL);
            fflush($handle);
            fclose($handle);
            print('cadastro realizado');
        }
        else {
            print('informações insuficientes');
        }
    }
?>

<!DOCTYPE html>
<htmld>
    <body>
        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
            <input name='nome'>
            <label>
                nome completo
            </label>
            <br/>
            <input name='ra'>
            <label>
                registro acadêmico
            </label>
            <br/>
            <input name='placa'>
            <label>
                placa do veículo
            </label>
            <br/>
            <input type='submit' value='cadastrar'>
        </form>
        <button onclick="location.href='menu.php'">
            voltar
        </button>
    </body>
</html>