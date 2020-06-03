<?php
    if(!isset($_SESSION["login"]))
        {
            header("Location:connexion.php");
        }
    else    
        {
            if(isset($_POST["validcom"]) && !empty($_POST["msg_"]))
                {
                    $msg = $_POST["msg_"];
                    $id = $_SESSION["id"];
                    $connexionbd = mysqli_connect("localhost" , "root" , "" , "discussion");
                    $insert_msg = "INSERT INTO messages (message, id_utilisateur, date) VALUES ('$msg', '$id', NOW())";
                    $query_insert = mysqli_query($connexionbd, $insert_msg);
                    mysqli_close($connexionbd);
                }
        }
?>