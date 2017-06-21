<?php

require './class/Personnage.php';

$merlin = new Personnage("Merlin");
//var_dump($merlin);

$merlin->crier();

$merlin->regenerer(20);
echo "Index appel regenerer(\"Merlin\") ligne 11 : La vie de ".$merlin->name." vaut ".$merlin->vie."</br>";
//var_dump($merlin);

$harry = new Personnage("Harry");
echo "Index appel création Harry ligne 15 : La vie de ".$harry->name." vaut ".$harry->vie."</br>";
//var_dump($harry);

$merlin->vie = 0;
echo "Index appel mise à 0 vie de Merlin ligne 19 : La vie de ".$merlin->name." vaut ".$merlin->vie."</br>";

$harry->vie = 0;
echo "Index appel mise à 0 vie de Harry ligne 22 : La vie de ".$harry->name." vaut ".$harry->vie."</br>";
$harry->regenerer(10);
echo "Index regenerer(\"Harry\") ligne 24 : La vie de ".$harry->name." vaut après regénération ".$harry->vie."</br>";

$merlin->mort();
echo "Index test mort de Merlin ligne 27 : La vie de ".$merlin->name." vaut ".$merlin->vie."</br>";

var_dump($merlin);
var_dump($harry);

?>