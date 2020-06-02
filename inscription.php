<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>Inscription</title>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <main>
        <section>
            <h1>Formulaire d'inscription</h1>
        </section>
        <section>
            <form action="inscription.php" method="POST" id="form_inscription">
                <label for="login"><h3>Login :</h3></label>
                <input type="text" id="login" name="login" required/>

                <label for="password"><h3>Mot de passe :</h3></label>
                <input type="password" id="password" name="password" required/>

                <label for="confpassword"><h3>Confirmer le mot de passe :</h3></label>
                <input type="password" id="confpassword" name="confpassword" required/>

                <input type="submit" value="Inscription" name="validinsc"/>
            </form>
        </section>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>