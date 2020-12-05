<html>

<head>
    <?php
    session_start();
    $_SESSION["valeurst"] = "ecje";

    ?>


</head>




<body>
    <form method="POST" action="recuperation.php">
        Nom<input type="text" name="nom" required>
        Prenom<input type="text" name="prenom" required>

        <input type="submit" value="envoyer">
    </form>
</body>




</html>