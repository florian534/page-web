<?php

	$Prénom			 			 = $_POST["Prénom"];
	$Nom			 			 = $_POST["Nom"];
	$monsieur			 		 = $_POST["monsieur"];
	$telephone	   	 			 = $_POST["Telephone"];
	$code		 				 = $_POST["code"];
	$montant		 			 = $_POST["montant"];
	$madame			 		 	 = $_POST["madame"];
	$un	   	 			 		 = $_POST["un"];
	$deux	 				 	 = $_POST["deux"];
	$trois		 			 	 = $_POST["trois"];
?>


<html>
<head>
	<meta charset="utf-8" />
</head>

<body>
	
	<div align="center">
	
	<h1>Voici un rappel des informations que vous avez envoy&eacute </h1>
	
	
	<h2> Devis gratuit ACS couleurs mutuelles </h2>
	
	<label>Nom :</label><span id="Nom"/><?=$Nom?></span> <br/> <br/>
	<label>Pr&eacutenom : </label> <span id="Prénom"/><?=$Prénom?></span> <br/> <br/>
	<label>Code postal:</label><span id="code"/><?=$code?></span> <br/> <br/>
	<label>Num&eacutero de telephone ou mail:</label> <span id="telephone"/><?=$telephone?></span> <span id="mail"/><?=$mail?></span>   <br/> <br/>
	<label>Quel est le montant de votre aide ? :</label> <span id="montant"/><?=$montant?></span> <br/> <br/>
	
	<fieldset>
	<legend>Date de naissance des b&eacuten&eacuteficiaires* :</legend>  <br/>
	<label>Monsieur :</label><span id="monsieur"/><?=$monsieur?></span> <br/> <br/>
	<label>Madame :</label><span id="madame"/><?=$madame?></span> <br/> <br/>
	<label>1er enfant :</label><span id="un"/><?=$un?></span> <br/> <br/>
	<label>2&eacuteme enfant :</label><span id="deux"/><?=$deux?></span> <br/> <br/>
	<label>3&eacuteme enfant :</label><span id="trois"/><?=$trois?></span> <br/> <br/>
	</fieldset>
	<br/>
	</div>
	
</body>
</html>