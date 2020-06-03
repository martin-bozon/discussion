<?php
    if(isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    else if(isset($_POST["validco"]))
        {
            $login = $_POST["login"];
            $mdp = $_POST["password"];

            $connexionbd = mysqli_connect("localhost" , "root" , "" , "discussion");
            $requete_info = "SELECT * FROM utilisateurs WHERE login ='$login'";
            $query_requete_info = mysqli_query($connexionbd, $requete_info);
            $info_user = mysqli_fetch_all($query_requete_info, MYSQLI_ASSOC);
            
            if(!empty($info_user))
                {                    
                    if(password_verify($mdp , $info_user[0]["password"]) && !empty($mdp))
                        {
                            session_start();
                            $_SESSION["login"] = $info_user[0]["login"];
                            $_SESSION["password"] = $info_user[0]["password"];
                            $_SESSION["id"] = $info_user[0]["id"];
                            mysqli_close($connexionbd);
                            header("Location:index.php");
                        }
                    else    
                        {
                            $msg_error = "Mauvais mot de passe";
                        }                                                          
                }                
            else
                {
                    $msg_error = "Le login n'existe pas";
                }
        }
?>