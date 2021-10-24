<?php
require_once "keys.php";
session_start();
$_SESSION[$doorPos] = $_COOKIE[$doorPos];
$_SESSION[$catPos] = $_COOKIE[$catPos];
$_SESSION[$mousePos] = $_COOKIE[$mousePos];
$_SESSION[$loadedGame] = true;

header("location: accion.php");
