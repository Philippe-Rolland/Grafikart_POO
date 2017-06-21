<?php

require './class/Personnage.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");

var_dump($merlin);
var_dump($harry);

//$harry->vie = 60;
echo "Merlin attaque Harry.</br>";
$merlin->attaquer($harry);

var_dump($merlin);
var_dump($harry);

echo "Merlin attaque une autre fois Harry.</br>";
$merlin->attaquer($harry);

var_dump($merlin);
var_dump($harry);

?>