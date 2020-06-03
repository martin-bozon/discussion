<?php
    if(!isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    else
        {
            $login = $_SESSION["login"];
            $id = $_SESSION["id"];
            $mdp_hash = $_SESSION["password"];
           

             if(isset($_POST["validmod"]))
                 {
                    $connexionbd = mysqli_connect("localhost" , "root" , "" , "discussion");
                    $requete_info = "SELECT * FROM utilisateurs";
                    $query = mysqli_query($connexionbd, $requete_info);
                    $info_user = mysqli_fetch_all($query, MYSQLI_ASSOC);

                    if(password_verify($_POST["old_password"], $mdp_hash))
                        {
                            if($_POST["login"] == $login || empty($info_user))
                                {
                                    
                                }
                            else
                                {
                                    $msg_error = "Ce login existe déjà";
                                }
                        }
                    else    
                        {
                            $msg_error = "Mauvais mot de passe";
                        }
                 }
        }
?>