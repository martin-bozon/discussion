<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>Connexion</title>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <main>
        <form action="connexion.php" method="POST" id="form_connexion">
            <label for="login"><h3>Login :</h3></label>
            <input type="text" id="login" name="login" required/>

            <label for="password"><h3>Mot de passe :</h3></label>
            <input type="password" id="password" name="password" required/>
            
            <input type="submit" value="Connexion" name="validco"/>
        </form>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>