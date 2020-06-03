<?php
    if(isset($_SESSION["login"]))
        {
            $connexionbd = mysqli_connect("localhost" , "root" , "" , "discussion");
            $requete_max_id = "SELECT MAX(id) FROM messages ";
            $query_requete_max_id = mysqli_query($connexionbd, $requete_max_id);
            $resultat_max_id = mysqli_fetch_all($query_requete_max_id, MYSQLI_ASSOC);
            $max_id = $resultat_max_id[0]["MAX(id)"];

            $requete_last_msg = "SELECT messages.id, message, date, utilisateurs.login FROM messages INNER JOIN utilisateurs ON messages.id_utilisateur = utilisateurs.id WHERE messages.id='$max_id'";
            $query_last_msg = mysqli_query($connexionbd, $requete_last_msg);
            $last_msg = mysqli_fetch_all($query_last_msg, MYSQLI_ASSOC);
            
            $date = date("d/m/Y" , strtotime($last_msg[0]["date"]));
    ?>
            <section id="last_message">
                <h4><?php echo $last_msg[0]["login"];?> le <i><?php echo $date;?></i> :</h4>
                <p><?php echo $last_msg[0]["message"];?></p>
            </section>
    <?php
        }
?>