<?php
    if(!isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    else
        {                     
            if(isset($_POST["validmod"]) && !empty($_POST["login"]) && !empty($_POST["old_password"]))
                 {          
                    $mdp_hash = $_SESSION["password"];                               
                    if(password_verify($_POST["old_password"], $mdp_hash))
                        {
                            $login = $_POST["login"];
                            $mdp = $_POST["nw_password"];
                        
                            $id = $_SESSION["id"];            

                            $connexionbd = mysqli_connect("localhost" , "root" , "" , "discussion");
                            $requete_info = "SELECT * FROM utilisateurs WHERE login='$login'";
                            $query_requete_info = mysqli_query($connexionbd, $requete_info);
                            $info_user = mysqli_fetch_all($query_requete_info, MYSQLI_ASSOC);

                            if($login == $_SESSION["login"] || empty($info_user))
                                {
                                    $update_L = "UPDATE utilisateurs SET login='$login' WHERE id='$id'";
                                    $query_update_L = mysqli_query($connexionbd, $update_L);  
                                    $_SESSION["login"] = $login;                          
                                    echo $_SESSION["login"];
                                    $msg = "Login modifié";
                                }
                            else
                                {
                                    $msg = "Ce login existe déjà";
                                }
                        }
                    else    
                        {
                            $msg = "Mauvais mot de passe";
                        }
                 }
        }
?>