<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        if($_POST['user'] == 'portaria' and $_POST['password'] == 'FatecAraras') {
            $_SESSION['loggedin'] = true;
            header('location: menu.php');
        }
        else $_SESSION['loggedin'] = false;
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
            <input type='text' name='user'>
            <label>
                usuário
            </label>
            <br/>
            <input type='password' name='password'>
            <label>
                senha
            </label>
            <br/>
            <input type='submit' value='entrar'>
        </form>
    </body>
</html>