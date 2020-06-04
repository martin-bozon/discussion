<?php
    if(isset($_GET["id_message"]) && !empty($_GET["id_message"]))
        {
            $id_del = $_GET["id_message"];

            $connexionbd = mysqli_connect("localhost" , "root" , "" , "discussion");
            $delete_msg = "DELETE FROM messages WHERE id='$id_del'";
            $query_delete_msg = mysqli_query($connexionbd, $delete_msg);
            mysqli_close($connexionbd);

            header("Location:../discussion.php");
        }
    else
        {
            header("Location:../index.php");
        }
    
?>

