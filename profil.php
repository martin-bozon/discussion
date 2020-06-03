<?php 
    session_start();
    include 'include/php_profil.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>Profil</title>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <main>
        <section>
            <h1>Modification du Profil</h1>
        </section>
        <section>
            <form action="profil.php" method="POST" id="form_profil">
                <label for="login"><h3>Login :</h3></label>
                <input type="text" id="login" name="login" value="<?php echo $login ?>"/>

                <label for="old_password"><h3>Ancien Mot de passe :</h3></label>
                <input type="password" id="old_password" name="old_password"/>

                <label for="nw_password"><h3>Nouveau Mot de passe :</h3></label>
                <input type="password" id="nw_password" name="nw_password"/>

                <label for="conf_password"><h3>Confirmer le mot de passe :</h3></label>
                <input type="password" id="conf_password" name="conf_password"/>

                <input type="submit" value="Modifier" name="validmod"/>
                
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