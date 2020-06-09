<?php
    if(!isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    else
        {                     
            if(isset($_POST["validmod"]) && !empty($_POST["login"]) && !empty($_POST["old_password"]))
                 {                                                        
                    if(password_verify($_POST["old_password"], $_SESSION["password"]))
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
                                    $msg_login = "Login modifié";                                    
                                }
                            else
                                {
                                    $msg_error = "Ce login existe déjà";
                                }
                            if(isset($mdp) && !empty($mdp))  
                                {
                                    if($mdp == $_POST["conf_password"])
                                        {
                                            $mdp_hash = password_hash($mdp, PASSWORD_DEFAULT);
                                            $update_mdp = "UPDATE utilisateurs SET password='$mdp_hash' WHERE id='$id'";
                                            $query_update_mdp = mysqli_query($connexionbd, $update_mdp);  
                                            $_SESSION["password"] = $mdp_hash;                                         
                                            $msg_mdp = "Mot de passe modifié";
                                        }
                                    else
                                        {
                                            $msg_error = "Les mots de passe sont différents";
                                        }
                                }                          
                        }
                    else    
                        {
                            $msg_error = "Mauvais mot de passe";
                        }
                 }
        }
?>