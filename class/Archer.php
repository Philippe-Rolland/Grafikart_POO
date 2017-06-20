<?php
	class Archer extends Personnage{
		
		public function attaquer($cible){
			$cible->vie -= 2*$this->attaque;
			if($cible->mort()){
				$cible->regenerer(120);
			}
		}
		
		
	}