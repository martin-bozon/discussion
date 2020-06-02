<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>Discussenger</title>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <main>
        <?php
            if(isset($_SESSION["login"]))
                {
        ?>
                    <main>
                        <section class="titre_index">
                            <h1>Bonjour <?php echo $_SESSION["login"]; ?> viens discuter avec nos membres !</h1>
                        </section>
                        <section class="info_index">
                            <h2>Voilà un aperçu de ce qu'il s'est passé récement</h2>
                            <!-- Afficher le dernier message poster -->
                        </section>
                    </main>
        <?php
                }
            else
                {
        ?>
                    <main>
                        <section class="titre_index">
                            <h1>Bonjour, bienvenue sur Discussenger</h1>
                        </section>
                        <section class="info_index">
                            <p>Je t'invites à <a href="inscription.php">t'inscrires</a> ou à te <a href="connexion.php">connecter</a> pour vraiment rentrer dans Discussenger !</p>
                        </section>
                    </main>
        <?php
                }
        ?>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>