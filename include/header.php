<header>
    <?php 
        if(isset($_SESSION["login"]))
            {
    ?>
                <section class="HeadG">
                    <h2><a href="index.php">Discussenger</a></h2>
                </section>
                <section class="HeadD">
                <h2><a href="profil.php">Profil</a></h2>
                <h2><a href="discussion.php">Discussion</a></h2>
                    <form id="form_deco" method="POST">
                        <input type="submit" name="deco" value="Déconnexion" class="bouton"/>
                    </form>
                </section>
    <?php
                if(isset($_POST["deco"]))
                    {
                        session_destroy();
                        header("Location:index.php");
                    }
            }
        else
            {
    ?>  
                <section class="HeadG">
                    <h2><a href="index.php">Discussenger</a></h2>
                </section>
                <section class="HeadD">
                    <h2><a href="inscription.php">Inscription</a>
                    <h2><a href="connexion.php">Connexion</a></h2>
                </section>                
    <?php
            }
    ?>
</header>