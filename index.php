<?php
//stocke les informations dans des cookies.
if (!empty($_POST['login'])) {
    setcookie('cookieLogin', $_POST['login'], time() + 500, null, null, false, true);
}
if (!empty($_POST['password'])) {
    setcookie('cookiePassword', $_POST['password'], time() + 500, null, null, false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>php8exo3</title>
    </head>
    <body>
        <!--formulaire demandant l'identifiant et le mot de passe-->
        <form action="index.php" method="POST">
            <label for="login">Identifiant : </label>
            <input type="text" name="login" id="login"/>
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" id="password"/>
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>