<?php
require_once "functions.php";
require_once "keys.php";

session_start();

if (!$_SESSION[$loadedGame]) {
    $_SESSION[$catPos] = rand(1, 25);
    $_SESSION[$mousePos] = rand(1, 25);
}
$_SESSION[$loadedGame] = false; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Autor Dailos ramirez - Gato y Ratón</title>
    <style>
        .odd-cell {
            background-image: url("./Recursos/celda1.gif");
            background-size: cover;
            border: 1px solid black;
            height: 15vh;
        }

        .even-cell {
            background-image: url("./Recursos/celda2.gif");
            background-size: cover;
            border: 1px solid black;
            height: 15vh;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            border: 1px solid black;
            width: 80vw;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div class="grid">
        <?php 
         
        for ($i = 1; $i <= 25; $i++) {
            drawCell($i);
            if (doorAtCell($i)) {
                if (mouseWins()) {
                    printImg("ratonpuerta.gif");
                } elseif (catAtDoor()) {
                    printImg("gatopuerta.gif");
                } else {
                    if ($i % 2 > 0) {
                        printImg("celda1-puerta.gif");
                    } else {
                        printImg("celda2-puerta.gif");
                    }
                }
            } elseif (catAtCell($i)) {
                if (catWins()) {
                    printImg("gato-atrapa-raton.gif");
                } else {
                    printImg("gato.gif");
                }
            } elseif (mouseAtCell($i)) {
                printImg("raton.gif");
            }
            print " </div>";
        }
        ?>
    </div>
    <div>
        <?php if (mouseWins()) {
            setcookie($savedGame, false, time() + 3600 * 24); ?>
            <h3>¡El ratón ha ganado!</h3>
            <h3><a href="index.php">Volver a la pantalla principal</a></h3>
        <?php } elseif (catWins()) {
            setcookie($savedGame, false, time() + 3600 * 24); ?>
            <h3>¡El gato ha ganado!</h3>
            <h3><a href="index.php">Volver a la pantalla principal</a></h3>
        <?php } else {        ?>
            <h3><a href="accion.php">Acción</a></h3>
            <h3><a href="guardar.php">Guardar y salir</a></h3>
        <?php } ?>
    </div>
</body>

</html>