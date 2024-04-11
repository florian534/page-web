<?php

function convertCountryValueToFrenchLabel($value){
		if($value === "moto"){
			return "moto";
		}
		else if($value === "scooter"){
			return "scooter";
		}
		else if($value === "quad"){
			return "quad";
		}
		else if ($value === "cyclo"){
			return "Un cyclo";
		}
		else if($value === "Homme"){
			return "Homme";
		}
		else if ($value === "Femme"){
			return "Femme";
		}
		else if($value === "quad"){
			return "Un quad";
		}
		else if ($value === "Célibataire"){
			return "Célibataire";
		}
		else if($value === "Marié"){
			return "Marié(e)";
		}
		
		else if($value === "Concubin"){
			return "Concubin(e)";
		}
		else if ($value === "Pacsé"){
			return "Pacsé(e)";
		}
		else if($value === "Séparé"){
			return "Séparé(e)";
		}
		else if ($value === "Veuf"){
			return "Veu(ve)";
		}
		else if($value === "21ans"){
			return "Moins de 21 ans";
		}
		else if ($value === "70ans"){
			return "Entre 21 ans et 70 ans";
		}
		else if($value === "un"){
			return "1 à 13ans";
		}
		else if ($value === "treize"){
			return "+13ans";
		}
		else if($value === "moins"){
			return "-3ans";
		}
		else if ($value === "plus"){
			return "+3ans";
		}
		else if($value === "1"){
			return "1";
		}
		else if($value === "2"){
			return "2";
		}
		else if ($value === "3"){
			return "3";
		}
		else if($value === "4"){
			return "4";
		}
		else if ($value === "5"){
			return "5";
		}
		else if ($value === "6"){
			return "6";
		}
		else if ($value === "Oui"){
			return "Oui";
			
		}else if ($value === "Non"){
			return "Non";
		}
		
		else {
			return "Inconnu";
		}
	}

$Prénom			 = $_POST["Prénom"];
$Nom			 = $_POST["Nom"];
$datedenaissance = $_POST["datedenaissance"];
$numero		 	 = $_POST["numero"];
$marque			 = $_POST["marque"];
$modele		 	 = $_POST["modele"];
$bonus			 = $_POST["bonus"];
$code		 	 = ($_POST["code"]);
$email		 	 = ($_POST["email"]);

$véhicule		 = convertCountryValueToFrenchLabel($_POST["véhicule"]);
$civilité		 = convertCountryValueToFrenchLabel($_POST["civilité"]);
$age		 	 = convertCountryValueToFrenchLabel($_POST["age"]);
$année			 = convertCountryValueToFrenchLabel($_POST["année"]);
$moto1		 	 = convertCountryValueToFrenchLabel($_POST["moto1"]);
$auto1		 	 = convertCountryValueToFrenchLabel($_POST["auto1"]);
$sinistre		 = convertCountryValueToFrenchLabel($_POST["sinistre"]);
$carte			 = convertCountryValueToFrenchLabel($_POST["carte"]);

?>

<html>
	<head>
		<meta charset="utf-8" />
	</head>
	
	<body>
	
	<div align="center">
	
	<h1>Voici un rappel des informations que vous avez envoyé.</h1>
	
	<h2> Devis gratuit d'assurance moto </h2>
		
	<label>Nom:</label><span id="Nom"><?=$Nom?> </span>
	<label>Pr&eacutenom: </label>  <span id="Prénom"><?=$Prénom?></span>
	<label>Date de naissance:</label><span id="datedenaissance"><?=$datedenaissance?></span>
	<label>Num&eacutero de t&eacutel&eacutephone :</label> <span id="numero"><?=$numero?></span> 
	<label>Adresse email :</label> <span id="email"><?=$email?></span>
	<label>Code postal :</label> <span id="code"><?=$code?></span>
	
	<br/><br/>
	
	<table border="1"cellspacing="1" bordercolor="black">
	<tbody>
	
	<tr>
	<td><label>Le v&eacutehicule <br/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="marque"><?=$marque?></span>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="modele"><?=$modele?></span>
	</td>
	</tr>
	
	<tr>
		<td> <label> Le v&eacutehcule que vous souhaitez assurer est:<br/>
		&nbsp&nbsp&nbsp </label> </td>
		<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<span id="véhicule"><?=$véhicule?></span> </td>
	</tr>
	
	<tr>
	<td><label>	&acircge du conducteur <br/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="age"><?=$name?></span>
	</td>
	</tr>
	<tr>
	<td><label>Nombre d'ann&eacutees d'assurances <br/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="année"><?=$année?></span>
	</tr>
	<tr>
	<td><label>Bonus malus <br/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="bonus"><?=$bonus?></span></td>
	</tr>
	<tr>
	<td><label>Ancient&eacute du permis <br/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label>MOTO</label> <span id="moto1"><?=$moto1?></span>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label>AUTO</label>&nbsp&nbsp <span id="auto1"><?=$auto1?></span>
	</td>
	</tr>
	<tr>
	<td><label>Nombre total sinistre responsable <br/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label></td>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="sinistre"><?=$sinistre?></span>
	</td>
	</tr>
	
	<tr>
	<td>Serez-vous le titulaire de la carte grise ? <br/> 
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
	<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="carte"><?=$carte?></span>
	</td>
	</tr>
	

	</tbody>
	</table>
	</body>
</html>