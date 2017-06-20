<?php
	class Personnage{
		
		public $vie = 80;
		public $attaque = 50;
		public $name;
		
		public function __construct($name) {
			$this->name = $name;
		}
		
		public function crier() {
			echo "Lerooy Jennkins !!";
		}
		
		public function regenerer($PV = null){
			if(is_null($PV)){
				$this->vie = 80;
			}else{
				$this->vie  += $PV;
			}
		}
		
		public function attaquer($cible){
			$cible->vie -= $this->attaque;
			if($cible->mort()){
				$cible->regenerer();
			}
		}
		
		public function mort(){
			return $this->vie <= 0;
		}
	}