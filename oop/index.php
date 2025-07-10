<?php

require_once "animal.php";
require_once "Frog.php";
require_once "Ape.php";

$sheep = new Animal("shaun");
echo $sheep->name; 
echo "<br>";
echo $sheep->legs; 
echo "<br>";
echo $sheep->cold_blooded; 
echo "<br><br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); 
echo "<br>";
echo $sungokong->name; 
echo "<br>";
echo $sungokong->legs; 
echo "<br><br>";

$kodok = new Frog("buduk");
$kodok->jump(); 
echo "<br>";
echo $kodok->name; 
echo "<br>";
echo $kodok->legs; 

?>
