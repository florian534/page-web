<?php

	function convertCountryValueToFrenchLabel($value){
		if($value === "F1"){
			return "F1 : RC + DR + PJ + ASSIST";
		}
		else if($value === "F2"){
			return "F2 : F1 + BDG";
		}
		else if($value === "F3"){
			return "F3 : F1 + VOL/INC";
		}
		else if($value === "F4"){
			return "F4 : F1 + BDG + VOL/INC";
		}
		else if($value === "F5"){
			return "F1 + BDG + VOL/INC + DTA";
		}
		
		else{
			return "inconnu";
		}
	}

	$Nom 			 	 = $_POST["Nom"];
	$Prénom 		 	 = $_POST["Prénom"];
	$datedenaissance 	 = $_POST["datedenaissance"];
	$email 		 	 	 = $_POST["email"];
	$véhicule 			 = $_POST["véhicule"];
	$miseencirculation 	 = $_POST["miseencirculation"];
	$immatriculation 	 = $_POST["immatriculation"];
	$puissancefiscale	 = $_POST["puissancefiscale"];
	$datedupermis 		 = $_POST["datedupermis"];
	$coefbonusmalus		 = $_POST["coefbonusmalus"];
	$Formule		 	 = convertCountryValueToFrenchLabel($_POST["Typedegarantie"]);
	$code	 			 = $_POST["code"];
?>

<html>
<head>
	<meta charset="utf-8" />
</head>

<body>

<div align="center">

	<h1>Voici un rappel des informations que vous avez envoyé.</h1>
	
	<h2> Devis d'assurance automobile </h2>
	
	
	<label>Nom:</label><span id="Nom"><?=$Nom?> </span>
	<label>Pr&eacutenom: </label>  <span id="Prénom"><?=$Prénom?></span>
	<label>Date de naissance:</label><span id="datedenaissance"><?=$datedenaissance?></span>
	<label>Num&eacutero de t&eacutel&eacutephone :</label> <span id="numero"><?=$numero?></span> 
	<label>Adresse email :</label> <span id="email"><?=$email?></span>
	<label>Code postal :</label> <span id="code"><?=$code?></span>
	
	 <br/> <br/>
	
	<table border="1"cellspacing="1" bordercolor="black">
	<tbody>
	<tr>
		<td> <label> Marque: </label>  <span id="véhicule"><?=$véhicule?></td>
		<td> <label> Mise en circulation: </label>  <span id="miseencirculation"><?=$miseencirculation?> </td>
	</tr>
	<tr>
		<td> <label> Mod&eacutele usuel du v&eacutehicule: </label>  <span id="immatriculation"><?=$immatriculation?></td>
		<td> <label> Puissance fiscale: </label>  <span id="puissancefiscale"><?=$puissancefiscale?></td>
	</tr>
	<tr>
		<td> <label> Date du permis </label>  <span id="datedupermis"><?=$datedupermis?></td>
		<td> <label> Coef Bonus-Malus </label>  <span id="coefbonusmalus"><?=$coefbonusmalus?></td>
	</tr>
	
	</tbody>
	</table>
	
	<br/><br/>
	
	<label for="Formule"> Formule :</label>
		<span id="Formule"><?=$Formule?></span>
		
	
	<p> <b>RC:</b>  Responsabilit&eacute Civile <br/> <br/>
	<b>DR:</b>  D&eacutefense-Recours <br/> <br/>
	<b>BDG:</b>  Bris De Glace <br/> <br/>
	<b>PJ:</b>  Protection Juridique <br/> </br>
	<b>ASSIST:</b>  Assistance Remarquage <br/> <br/>
	<b>VOL/INC:</b> Incendie <br/><br/>
	<b>DTA:</b> Dommage Tous Accident <br/> <br/>
	</p>
			
		<br/><br/>
	
	</div>
	
	</body>
</html>