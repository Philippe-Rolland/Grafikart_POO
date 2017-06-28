<?php

class Accueil {
	
	public $data;
	
	function Init($user=null,$passwd=null){
		if(isset($user) && isset($passwd)){
			$this->data['Utilisateur'] = $user;
			$this->data['Mot de passe'] = $passwd;
			echo 'Vous êtes inscrit !';
			
			return $this->data;
		}else{
			
			$this->data['Utilisateur'] = null;
			$this->data['Mot de passe'] = null;
			echo 'Vous devez vous inscrire !';
			
			return $this->data;
			
		}
		
		
		
	}
}