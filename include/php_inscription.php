<?php
     if(isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    elseif(isset($_POST["validinsc"]))
        {
            $login = $_POST["login"];
            $connexionbd = mysqli_connect("localhost", "root" ,"" , "discussion");
            $verif_login = "SELECT login FROM utilisateurs WHERE login = '$login'";
            $query_VL = mysqli_query($connexionbd , $verif_login);
            $resultat_verif_L = mysqli_fetch_all($query_VL);

            if(empty($resultat_verif_L))
                {
                    if($_POST["password"] == $_POST["confpassword"])
                        {
                            $mdp = password_hash($_POST["password"], PASSWORD_DEFAULT);
                            $requete_insert = "INSERT INTO utilisateurs (login, password) VALUES ('$login', '$mdp')";
                            $query_RI = mysqli_query($connexionbd, $requete_insert);
                            header("Location:connexion.php");
                        }
                    else
                        {
                            $msg_error = "Les mots de passe ne sont pas identiques";
                        }
                }
            else
                {
                    $msg_error = "Ce login est déjà prit";
                }
        }
?>