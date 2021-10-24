<?php

function mouseWins()
{
    include "keys.php";
    return $_SESSION[$doorPos] == $_SESSION[$mousePos];
}

function catWins()
{
    include "keys.php";
    return $_SESSION[$catPos] == $_SESSION[$mousePos];
}

function catAtDoor()
{
    include "keys.php";
    return $_SESSION[$catPos] == $_SESSION[$doorPos];
}

function doorAtCell($i)
{
    include "keys.php";
    return $_SESSION[$doorPos] == $i;
}


function catAtCell($i)
{
    include "keys.php";
    return $_SESSION[$catPos] == $i;
}

function mouseAtCell($i)
{
    include "keys.php";
    return $_SESSION[$mousePos] == $i;
}


function printImg($img){
    print "<img src =\".\Recursos\\$img\">";
}


       
function drawCell($id){
    print '<div id ="'.$id.'" ';
    if ($id % 2 > 0) {
        setCellClass("odd-cell");
    } else {
        setCellClass("even-cell");
    }

}
function setCellClass($class){
    print "class=\"$class\">";

}