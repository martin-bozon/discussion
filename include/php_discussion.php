<?php
    if(!isset($_SESSION["login"]))
        {
            header("Location:connexion.php");
        }
    else    
        {
            $connexionbd = mysqli_connect("localhost" , "root" , "" , "discussion");
            $requete_msg = "SELECT messages.id, message, date, utilisateurs.login FROM messages INNER JOIN utilisateurs ON messages.id_utilisateur = utilisateurs.id ORDER BY id DESC";
            $query_requete_msg = mysqli_query($connexionbd, $requete_msg);
            $info_msg = mysqli_fetch_all($query_requete_msg, MYSQLI_ASSOC);

            foreach($info_msg as $message)
                {
                    $date = date("d/m/Y", strtotime($message["date"]));

                    if($message["login"] == $_SESSION["login"])
                        {
                    ?>
                            <section id="message_user">
                                <h4 class="info_msg"><?php echo $message["login"];?> le <i><?php echo $date;?></i> :</h4>
                                <p id="user_message"><?php echo $message["message"];?></p>
                                <a href="include/suppression.php?id_message=<?php echo $message["id"];?>">imgage</a>
                            </section>
                    <?php
                        }
                    else
                        {
                    ?>
                            <section id="message_info">
                                <h4 class="info_msg"><?php echo $message["login"];?> le <i><?php echo $date;?></i> :</h4>
                                <p id="message_"><?php echo $message["message"];?></p>
                            </section>
                    <?php
                        }        
                }
        
            if(isset($_POST["validcom"]) && !empty($_POST["msg_"]))
                {
                    $msg = addslashes($_POST["msg_"]);
                    $id = $_SESSION["id"];
                    
                    $insert_msg = "INSERT INTO messages (message, id_utilisateur, date) VALUES ('$msg', '$id', NOW())";
                    $query_insert = mysqli_query($connexionbd, $insert_msg);
                    mysqli_close($connexionbd);
                    header("Location:discussion.php");
                }
        }
?>