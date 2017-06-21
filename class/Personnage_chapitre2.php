<?php
	class Personnage {
		
		public $vie = 80;
		public $attaque = 60;
		public $name;
		
		/**
		 * Fonction de construction du personnage
		 * @param unknown $name : nom du personnage
		 */
		public function __construct($name){
			$this->name = $name;
		}
		
		
		/**
		 * Fonction faisant crier le personnage
		 */
		public function crier() {
			echo "Personnage crier() ligne 14 : LERROY JENKINS</br>";
		}
		
		
		/**
		 * Fonction de regénération des points de vie
		 * @param unknown $PV
		 * Si $PV est vide, 
		 * 		alors la vie est mise à 100
		 * 		sinon, on ajoute $PV aux points de vie
		 */
		public function regenerer($PV = null){
			if(is_null($PV)){
				$this->vie = 100;
			}
			else{
				$this->vie += $PV;
			}
			
		}
		
		
		/**
		 * Fonction test la mort
		 * @return boolean
		 */
		public function mort() {
			return $this->vie <= 0;
		}
		
		/**
		 * Fonction attaquer
		 * @param unknown $cible
		 * 	$cible perd autant de points de vie que les points d'attaque de l'agresseur
		 */
		public function attaquer($cible) {
			$cible->vie -= $this->attaque;
			var_dump($cible);
			$cible->mort();
		}
	}
?>