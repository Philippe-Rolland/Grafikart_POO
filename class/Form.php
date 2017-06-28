<?php
require 'Verif.php';

	class Form{
		
		public $data;
		
		public function __construct($data = null){
			if(isset($data)){
				$this->data = $data;
				return $data;
			}
			else{
				return 'Vous devez commencer par vous inscrire';
			}
		}
		
		public function input($id,$val){
			
			return "<p>".$id." : \t<input type='text' name='".$id."' value='".$val."' /></p>";
				
		}
		
		public function submit(){
			
			return "<input type='submit' value='Soumettre'/>";
			
		}
		
		public function verif($id,$val){
			
			echo '<p>Utilisation de la fonction ctype_alpha</p>';
			
			echo '<p>suppression des espaces</p>';
						
			Verif::verifChaine($val);
			
			return '<p>Vérification de la validité de la valeur de '.$id.' contenant : '.$val.'</p>';
			
		}
	}