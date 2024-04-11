<?php

	function convertCountryValueToFrenchLabel($value){
		if($value === "Régimegénéral"){
			return "R&eacutegime g&eacuten&eacuteral";
		}
		else if($value === "Travailleursnonsalari&eacutes"){
			return "Travailleurs non salari&eacutes";
		}
		else if($value === "AlsaceMoselle"){
			return "Alsace Moselle";
		}
		else if ($value === "RégimeAgricoleMSA"){
			return "R&eacutegime Agricole";
		}
		else if ($value === "Autres"){
			return "Autres";
		}
		else if($value === "Artisan"){
			return "Artisan";
		}
		else if($value === "Cadre"){
			return "Cadre";
		}
		else if($value === "Chefdentreprise"){
			return "chef d'entreprise";
		}
		else if($value === "Commerçant"){
			return "Commerçant";
		}
		else if($value === "Employé"){
			return "Employé";
		}
		else if($value === "Enseignant"){
			return "Enseignant";
		}
		else if($value === "Etudiant"){
			return "Etudiant";
		}
		else if($value === "Exploitantagricole"){
			return "Exploitant agricole";
		}
		else if($value === "Fonctionnaire"){
			return "Fonctionnaire";
		}
		else if($value === "Fonctionnaireterritorial"){
			return "Fonctionnaire territorial";
		}
		else if($value === "Noncadre"){
			return "Non cadre";
		}
		else if($value === "Ouvrier"){
			return "Ouvrier";
		}
		else if($value === "Professionlibérale"){
			return "Profession libérale";
		}
		else if($value === "Retraité"){
			return "Retraité";
		}
		else if($value === "Retraitédelafonctionterritoriale"){
			return "Retraité de la fonction territoriale";
		}
		else if($value ==="Salariéagricole"){
			return "Salarié agricole";
		}
		else if($value === "Sansprofession"){
			return "Sans profession";
		}
		else if($value === "Oui"){
			return "Oui";
		}
		else if($value === "Non"){
			return "Non";
		}
		
		else {
			return "Inconnu";
		}
	}
		
	
	$datedenaissance = $_POST["datedenaissance"];
	$Régimesocial 	 = convertCountryValueToFrenchLabel($_POST["Régimesocial"]);
	$Profession 	 = convertCountryValueToFrenchLabel($_POST["Profession"]);
	$Codepostale 	 = $_POST["Codepostale"];
	$Datedeffet 	 = $_POST["Datedeffet"];
	$Prénom			 = $_POST["Prénom"];
	$Nom			 = $_POST["Nom"];
	$Email			 = $_POST["Email"];
	$Téléphone	   	 = $_POST["Téléphone"];
	$Endentaire		 = convertCountryValueToFrenchLabel($_POST["Endantaire"]);
	$Enoptique		 = convertCountryValueToFrenchLabel($_POST["Enoptique"]);
	$Hospitalisation = convertCountryValueToFrenchLabel($_POST["Hospitalisation"]);

?>

<!Doctype html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
	<table border="1"cellspacing="1" bordercolor="black">
	<tbody>
	
	<h1>Voici un rappel des informations que vous avez envoyé.</h1>
	
	
	<tr>
	<td>
	<fieldset>
		<legend>VOUS</legend>
		<label>Date de naissance</label> : <span id="Datedenaissance" ><?=$datedenaissance?></span> 
		<br/><br/>
		
		<label for="Regimesocial"> R&eacutegime social :</label>
		<span id="Régimesocial" ><?=$Régimesocial?></span>
		
		<br/><br/>
		
		<label for="Profession"> Profession: </label>
		<span id="Profession" ><?=$Profession?></span>
		
			<br/><br/>
			
			<label>Code postal</label> : <span id="Codepostale"><?=$Codepostale?></span> 
			
			<br/><br/>
			
			<label>Date d'effet</label> : <span id="Datedeffet"><?=$Datedeffet?></span>
			<input type="date"/>
			
		</fieldset>
		</td>
		
		<td>
		<br/><br/>
		
		<fieldset>

			<legend>Votre conjoint(e)</legend>
			<label>Date de naissance</label> : <span id="Datedenaissance"/><?=$Datedenaissance?></span>
			<input type="date"/>
			
		<br/><br/>
		
		<label for="Regimesocial"> R&eacutegime social :</label>
		<span id="Régimesocial" ><?=$Régimesocial?></span>
		
		<br/><br/>
		
		<label for="Profession"> Profession: </label>
		<span id="Profession" ><?=$Profession?></span>
		</fieldset>
			
			</td>
			</tr>
			
			<tr>
			<td>
			
			
		<br/><br/>
		
		<fieldset>
			<legend>Enfants ( +	&acircg&eacutees )</legend>
			
			<fieldset>
			<legend>1er enfant</legend>
			<label>Date de naissance</label> : <span id="Date de naissance"/> <br/>
		<br/><br/>
		
		<label for="Regimesocial"> R&eacutegime social :</label>
		<span id="Regimesocial"><?=$Régimesocial?></span>
		</fieldset>
			
		

		
		<br/><br/>
		
		<fieldset>
			<legend>2&eacuteme enfant</legend>
			<label>Date de naissance</label> : <span id="Date de naissance"/> <br/>
		<br/><br/>
		
		<label for="Regimesocial"> R&eacutegime social :</label>
		<span id="Regimesocial"><?=$Régimesocial?></span>
		</fieldset>
		
		<br/><br/>
		
		<fieldset>
			<legend>Gratuit&eacute au 3&eacuteme enfant</legend>
			<label>Date de naissance</label> : <span id="Date de naissance"/> <br/>
		<br/><br/>
		
		<label for="Regimesocial"> R&eacutegime social :</label>
		<span id="Regimesocial"><?=$Régimesocial?></span>
		</fieldset>
		
		</td>
		
		<td>
		
		
		<br/><br/>
		
		<fieldset>
			<legend>Vos coordonn&eacutees </legend>
			<p>
			Civilit&eacute <br/> 
			<span id="Civilité"> </span>
		<br/>
		<label>Pr&eacutenom </label> : <span id="Prénom"><?=$Prénom?></span>
		<br/><br/>
		<label>Nom</label> : <span id="Nom"><?=$Nom?></span>
		<br/><br/>
		<label>Email</label> : <span id="Email"><?=$Email?></span>
		<br/><br/>
		<label>T&eacutel&eacutephone</label> : <span id="Télephone"><?=$Téléphone?></span>
			</p>
		</fieldset>
		
		</td>
		</tr>
		
		<tr>
		<td>
		
		<br/><br/>
		
		
	<fieldset>
		<legend>+ </legend>
		<p>
		Avez-vous besoin de renfort: <br/> <br/>
		<label>En dentaire ? </label>
		<span id="Endentaire?"><?=$Endentaire?></span> <br/> <br/>
		
		<label>En optique ? 
		<span id="Enoptique?"><?=$Enoptique?></span> <br/> <br/>
		
		<label>En Hospitalisation ? </label>
		<span id="Hospitalisation"><?=$Hospitalisation?></span>
	</fieldset>
	
	</td>
	</tr>
	
	</tbody>
	</table>
	
	<br/> <br/>
		
	</div>
	</span>
	</body>
</html>