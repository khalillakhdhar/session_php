<?php
session_start();
$stock = $_SESSION["valeurst"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];


?>

<html>

<head>

    <title>recuperation</title>
</head>

<body>
    <table>
        <tr>
            <td>La valeur stocké est:</td>
            <td><?php echo $stock; ?></td>
        </tr>
    </table>


</body>


</html>