<?php
require_once "keys.php";
session_start();

setcookie($doorPos, $_SESSION[$doorPos], time() + 3600 * 24);
setcookie($catPos, $_SESSION[$catPos], time() + 3600 * 24);
setcookie($mousePos, $_SESSION[$mousePos], time() + 3600 * 24);
setcookie($savedGame, true, time() + 3600 * 24);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Autor Dailos ramirez - Gato y Ratón</title>
</head>

<body>
    <h2>
        Se ha guardado la partida
    </h2>
    <h3><a href="index.php">Volver a la pantalla inicial.</a></h3>
</body>

</html>