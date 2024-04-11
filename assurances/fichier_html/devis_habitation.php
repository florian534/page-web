<?php

	function convertCountryValueToFrenchLabel($value){
		if($value === "Propriétaire"){
			return "Propriétaire d'une maison";
		}
		else if($value === "Locataire"){
			return "Locataire";
		}
		else if($value === "occupant"){
			return "Propriétaire non occupant";
		}
		else{
			return "inconnu";
		}
	}

	$Nom 			 = $_POST["Nom"];
	$Prénom 		 = $_POST["Prénom"];
	$datedenaissance = $_POST["datedenaissance"];
	$numero 		 = $_POST["numero"];
	$email 			 = $_POST["email"];
	$code			 = $_POST["code"];
	$surface		 = $_POST["surface"];
	$capitale		 = $_POST["capitale"];
	$propriétaire    = $_POST["propriétaire"];
	$qualité		 = convertCountryValueToFrenchLabel($_POST["qualité"]);
?>

<html>
<head>
	<meta charset="utf-8" />
</head>

<body>
	
	
	<div align="center">
	
	<h1>Voici un rappel des informations que vous avez envoyé.</h1>
	
	<h2> Devis d'assurance multirisque habitation </h2>
	
	<label>Nom:</label><span id="Nom"><?=$Nom?> </span>
	<label>Pr&eacutenom: </label>  <span id="Prénom"><?=$Prénom?></span>
	<label>Date de naissance:</label><span id="datedenaissance"><?=$datedenaissance?></span>
	<label>Num&eacutero de t&eacutel&eacutephone :</label> <span id="numero"><?=$numero?></span> 
	<label>Adresse email :</label> <span id="email"><?=$email?></span>
	<label>Code postal :</label> <span id="code"><?=$code?></span>
	
	<br/><br/><br/><br/>
	
	<fieldset>
	<legend>Objet de risque </legend>
	
	<label>Adresse du risque:</label> : <span id="adresse"><?=$adresse?></span> <br/><br/>
	<label>Surface: </label> : <span id="surface"><?=$surface?></span> <br/><br/>
	<label>Capital mobilier: </label> : <span id="capitale"><?=$capitale?></span> <br/><br/>
	<label for="qualité:"> Qualit&eacute de l'occupant :</label>
		<span id="qualité"><?=$qualité?></span> 
			
	</fieldset>
	
	<br/>
	
	</form>
	
	</div>
	
	</body>
</html>