<?php
require_once "keys.php";
setcookie($savedGame, false);
setcookie($loadedGame, false);
session_start();
$_SESSION[$doorPos] = rand(1, 25);
$_SESSION[$loadedGame] = false;

header("location: accion.php");
