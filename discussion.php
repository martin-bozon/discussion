<?php 
    session_start();
    include 'include/php_discussion.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>Discussion</title>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <main>
        <section>
            <!-- affichage des messages -->
        </section>
        <section>
            <form action="discussion.php" method="POST" id="form_discussion">
                <label for="message"><h3>Ecris ton message :</h3></label>
                <textarea rows="7" cols="53" id="msg_" name="msg_" required></textarea>

                <input type="submit" value="Poster" name="validcom"/>
            </form>
        </section>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>