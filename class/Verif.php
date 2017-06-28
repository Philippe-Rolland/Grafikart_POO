<?php
class Verif{
	static function verifChaine($param) {
		echo "La chaine ".$param;
		if(is_string($param)){
			echo " est valide</p>";
		}else{
			echo " n'est pas valide</p>";
		}
	}
}