<?php 
    session_start();
    include 'include/php_connexion.php';    
?>
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
        <section>
            <h1>Formulaire de Connexion</h1>
        </section>
        <section>
            <form action="connexion.php" method="POST" id="form_connexion">
                <label for="login"><h3>Login :</h3></label>
                <input type="text" id="login" name="login" required/>

                <label for="password"><h3>Mot de passe :</h3></label>
                <input type="password" id="password" name="password" required/>

                <input type="submit" value="Connexion" name="validco"/>

                <?php if(isset($msg_error))
                        {
                ?>
                            <p class="msg_error">
                <?php
                            echo $msg_error;
                ?>
                            </p>
                <?php
                        }
                ?>
            </form>
        </section>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>