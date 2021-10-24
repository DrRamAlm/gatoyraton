<!DOCTYPE html>
<html>

<head>
    <title>Autor Dailos ramirez - Gato y Ratón</title>
</head>

<body>
    <h1> Gato y ratón</h1>
    <?php
    require_once "keys.php";
    if ((isset($_COOKIE[$savedGame])) && ($_COOKIE[$savedGame] == true)) {
    ?>
        <p> <a href="recupera.php"> Recuperar partida anterior</a></p>
    <?php    }    ?>
    <p> <a href="reinicia.php"> Inicia una nueva partida</a></p>
</body>

</html>