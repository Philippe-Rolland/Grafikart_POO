<?php
		require './class/Personnage.php';
		require './class/Archer.php';
		
		
		$merlin = new Personnage("Merlin");
		var_dump($merlin);
		
		$harry = new Personnage("Harry");
		var_dump($harry);
		
		$merlin->crier();
		
		$harry->regenerer(5);
		var_dump($harry);
		
		$merlin->vie = -10;
		var_dump($merlin->mort());
		
		$merlin->attaquer($harry);
		var_dump($harry);
		
		$merlin->attaquer($harry);
		var_dump($harry);
		
		$legolas = new Archer("Legolas");
		
		$legolas->attaquer($merlin);
		var_dump($merlin);
		