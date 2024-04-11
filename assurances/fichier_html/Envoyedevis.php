<?php

	function convertCountryValueToFrenchLabel($value){
		
		if ($value === "1"){
			return "1";
		}
		else if($value === "2"){
			return "2";
		}	
		else if($value === "3"){
			return "3";
		}
		else if($value === "4"){
			return "4";	
		}
		else if($value === "5"){
			return "5";
		}
		else if($value === "6"){
			return "6";	
		}
	
		else if($value === "Homme"){
			return "Homme";
		}
		else if($value === "Femme"){
			return "Femme";
		}
		
		else if($value === "Oui"){
			return "oui";
		}
		else if($value === "Non"){
			return "Non";
		}
		else if($value === "salariécadre"){
			return "salarié cadre";
		}
		else if($value === "Salariénoncadre"){
			return "Salarié non cadre";
		}
		else if($value === "Professionlibérale"){
			return "Profession libérale";
		}
		else if($value === "Professionsmédicaleslibérales"){
			return "Professions médicales libérales";
		}
		else if($value === "Artisan"){
			return "Artisan";
		}
		else if($value === "Commerçant"){
			return "Commerçant";
		}	
		else if($value === "Retraitépréretraité"){
			return "Retraité, pré-retraité";
		}
		else if($value === "Sansactivitéprofessionnelle"){
			return "Sans activit&eacute professionnelle";
		}
		else if($value === "Moinsde20000km/an"){
			return "Moins de  20000km/an";
		}
		else if($value === "20000km/ansetplus"){
			return "20 000km/an et plus";
		}
		else if($value === "Aucun"){
			return "Aucun";
		}
		else if($value === "Avectravailmoyenléger"){
			return "Avec travail moyen léger";
		}
		else if($value === "Avectravailmanuelmoyen"){
			return "Avec travail manuel moyen";
		}
		else if($value === "Commerçant"){
			return "Commerçant";
		}	
			
		else if($value === "Amortissable"){
			return "Amortissable";
		}
		else if($value === "In-Fine"){
			return "In-Fine";
		}
		else if($value === "Relais"){
			return "Relais";
		}
		else if($value === "Créditbail"){
			return "Créditbail";
		}
		else if($value === "LOA"){
			return "LOA";
		}
		else if($value === "Taux0%"){
			return "Taux 0%";
		}
		else if($value === "Paliers"){
			return "Paliers";
		}
		else if($value === "Prêtdhonneur"){
			return "Prêtdhonneur";	
		}	
		else if($value === "Restructuration"){
			return "Restructuration";
		}	
		
		else if($value === "Pardéfaut"){
			return "Par défaut ";
		}	
		
		else if($value === "Restructuration"){
			return "Restructuration";
		}			
	}
	
	$ASSURUN 		= convertCountryValueToFrenchLabel($_POST["ASSURUN"]);
	$nombredassures = $_POST["nombredassures"];
	$civilité		= convertCountryValueToFrenchLabel($_POST["civilité"]);
	$nom 			= $_POST["nom"];
	$Prénom 		= $_POST["Prénom"];
	$date 			= $_POST["date"];
	$Fumeur 		= convertCountryValueToFrenchLabel($_POST["Fumeur"]);
	$CSP 			= convertCountryValueToFrenchLabel($_POST["CSP"]);
	$déplacement 	= convertCountryValueToFrenchLabel($_POST["déplacement"]);
	$travaux 		= convertCountryValueToFrenchLabel($_POST["travaux"]);
	$pourcent 		= convertCountryValueToFrenchLabel($_POST["pourcent"]);
	$pret 			= convertCountryValueToFrenchLabel($_POST["pret"]);
	$typedepret 	= convertCountryValueToFrenchLabel($_POST["typedepret"]);
	$montant 		= $_POST["montant"];
	$taux 			= $_POST["taux"];
	$durée 			= $_POST["durée"];
	$dont 			= $_POST["dont"];
	$defaut 		= $_POST["defaut"];
	$ipt 			= convertCountryValueToFrenchLabel($_POST["ipt"]);
	$ipp 			= convertCountryValueToFrenchLabel($_POST["ipp"]);
	$arrêt 			= convertCountryValueToFrenchLabel($_POST["arrêt"]);
	$perte 			= convertCountryValueToFrenchLabel($_POST["perte"]);
	$nonnecessaire  = convertCountryValueToFrenchLabel($_POST["nonnecessaire"]);
	
	?>
	

<html>
<head>
	<meta charset="utf-8" />
</head>
<body>

<body>

	<h1>Voici un rappel des informations que vous avez envoyé.</h1>
	

	<table border="1"cellspacing="1" bordercolor="black">
	<tbody>
	<tr>
	<td> Agence du/des assur&eacute(s)* 
		 <span id="ASSURUN" ><?=$ASSURUN?></span> 
		</td>
	</tr>
	</tbody>
	</table>
	
	<br/>
	
	<table border="1"cellspacing="1" bordercolor="black">
	<tbody>
	<tr>
	<td bgcolor="#5F9EA0">Les assur&eacutes </td>
	<td bgcolor="#5F9EA0">Assur&eacute 1 </td>
	<td bgcolor="#5F9EA0">Assur&eacute 2 </td>
	</tr>
	<tr>
	<td><label>Nombre d'assur&eacutes ? </label>
		 <span id="nombredassures" ><?=$nombredassures?></span>
	</td>
	</tr>
	<tr>
	<td>Civilit&eacute*</td>
	<td>
		<span id="civilité" ><?=$civilité?></span> 
	<td>
		<span id="civilité" ><?=$civilité?></span>
	</tr>

	<tr>
	<td>Nom*</td>
	<td> <span id="nom" ><?=$nom?></span>  </td>
	<td> <span id="nom" ><?=$nom?></span> </td>
	</tr>
	
	<tr>
	<td>Pr&eacutenom </td>
	<td> <span id="Prénom" ><?=$nom?> </span> </td>
	<td> <span id="Prénom" ><?=$nom?> </span> </td>
	</tr>
	
	<tr>
	<td>N&eacute(e) le* </td>
	<td>  <span id="date" ><?=$date?> </span> </td>
	<td> <span id="date" ><?=$date?> </span> </td>
	</tr>
	
	<tr>
	<td>Fumeur ?*</td>
	<td> 
		<span id="Fumeur" ><?=$Fumeur?> </span>
	<td>
		<span id="Fumeur" ><?=$Fumeur?> </span>	
	</tr>
	
	<tr>
	<td>CSP*</td>
	<td> <span id="CSP" ><?=$CSP?> </span> </td>
	<td> <span id="CSP" ><?=$CSP?> </span> </td>
			
		
	</tr>
	
	<tr>
	<td>D&eacuteplacement professionels*</td>
	<td>  <span id="déplacement" ><?=$déplacement?> </span> </td>
		
	<td> <span id="déplacement" ><?=$déplacement?> </span> </td>
		
	</tr>
	
	<tr>
	<td> Travaux manuels* </td>
	<td> <span id="travaux" ><?=$travaux?> </span> 
	<td> <span id="travaux" ><?=$travaux?> </span> </td>
	</tr>
	
	<tr>
	<td> Niveau de couverture </td>
	<td>  <span id="pourcent" ><?=$pourcent?> </span> </td>
	<td> <span id="travaux" ><?=$travaux?> </span> </td>
		
		</tbody>
	</table>
	
	<br/>
	
	<table border="1"cellspacing="1" bordercolor="black">
	<tbody>
	<tr>
	<td bgcolor="#5F9EA0">Les pr&ecircts </td>
	<td bgcolor="#5F9EA0"> </td>
	<td bgcolor="#5F9EA0"> </td>
	<td bgcolor="#5F9EA0"> </td>
	<td bgcolor="#5F9EA0"> </td>
	<td bgcolor="#5F9EA0"> </td>
	<td bgcolor="#5F9EA0"> </td>
	</tr>
	<tr>
	<td><label>Nombre de pr&ecircts? </label>
		</td>
		</select>
	</tr>
	<tr>
	<td> <span id="pourcent" ><?=$pourcent?> </span></td>
	<td> Numero</td>
	<td>Type de pr&ecirct </td>
	<td> Montant*(&#128)</td>
	<td>Taux*(%)</td>
	<td>Dur&eacutee*(mois)</td>
	<td>Dont diff&eacuter&eacute(mois)</td>
	</tr>
	
	<tr>
	<td></td>
	<td>1</td>
	<td> <span id="pourcent" ><?=$pourcent?> </span> </td>
	<td> <span id="montant" ><?=$montant?></span>  </td>
	<td> <span id="taux" ><?=$taux?> </span> </td>
	<td> <span id="durée" ><?=$durée?> </span> </td>
	<td> <span id="dont" ><?=$dont?> </span> </td>
	</tr>
	
	<tr>
	<td>Date d&eacutebut de garantie*</td>
	<td> <span id="date" ><?=$date?> </span> </td>
	</tr>
	
	</tbody>
</table>

<br/>
	<div class="ca">
	<h2>Les garanties </h2>
	<fieldset>
		<legend>Garanties de base</legend>
		<p>-D&eacutec&egraves et Perte Totale et Irr&eacuteversible d'Autonomie </p>
		<span id="defaut" ><?=$defaut?> </span>
	<p>-Incapacit&eacute Temporaire Partielle(I.T.P)-Invalidit&eacute Permanente Totale(I.P.T)</p>

	<span id="ipt" ><?=$ipt?> </span>
	
	</fieldset>
	
	
	<fieldset>
	
		<legend>Garanties optionnelles</legend>
		
		<p>-Incapacit&eacute Temporaire Partielle(I.T.P)-Invalidit&eacute Permanente Partielle(I.P.P.) </p>
		<span id="ipp" ><?=$ipp?> </span>
	
		<p>Invalidit&eacute Professionnelle Permanente(IPPRO)</p>
	<span id="ippro" ><?=$ippro?> </span>
	
		<p>Arr&ecirct de travail li&eacute aux probl&egravemes de dos et de maladies psychologiques </p>
	<span id="arrêt" ><?=$arrêt?> </span>
	
		<p>Perte emploi</p>
	<span id="arrêt" ><?=$perte?> </span>
	
	</fieldset>
	
	<fieldset>
		<legend>Franchise </legend>
		<p>Veuillez choisir une franchise pour l'ensemble des pr&ecircts </p>
		<span id="necessaire" ><?=$necessaire?> </span>
	</fieldset>
	
	</div>
	
	 </br>
	 
	</body>
</html>
