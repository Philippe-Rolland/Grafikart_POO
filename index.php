<?php



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" />
</head>

<body>

	<h1>Das Boot Test V2</h1>
	<h3>Proposition de Philippe/Maurice</h3>
	
	<p>Grand jeu de simulation navale - contexte historique WWII</p>
	
	<div class='contener'>
		<?php
		require './class/Accueil.php';
		require './class/Form.php';
		$accueil = new Accueil();
		$accueil->Init('Willy von Estienne d\'Orvês','phr');
				
		//var_dump($accueil);
		
		$form = new Form();
		
		
		?>
		<form action="Form.php" method="post">
			<?php
				foreach($accueil->data as $id=>$val){
					echo $form->input($id,$val);
					//echo $id.'   '.$val;
				}
				
				echo $form->submit();
				
				foreach($accueil->data as $id=>$val){
					echo $form->verif($id,$val);
					//echo $id.'   '.$val;
				}
			?>
		</form>
	</div>
	
	
	


</body>

</html>