<?php

	$Prénom			 = $_POST["Prénom"];
	$Nom			 = $_POST["Nom"];
	$code		 	 = $_POST["code"];
	$numéro   	 	 = $_POST["numéro"];
	$Monsieur		 = $_POST["Monsieur"];
	$Madame		 	 = $_POST["Madame"];
	$un  	 	 	 = $_POST["un"];
	$deux		 	 = $_POST["deux"];
	$trois		 	 = $_POST["trois"];
	$email			 = $_POST["email"];
?>

<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<div align="center">
	
	<h1> Voici un rappel de ce que vous avez envoy&eacute </h1>
	
	<label>Nom:</label>  <span id="Nom"><?=$Nom?></span> <br/> <br/>
	<label>Pr&eacutenom: </label>  <span id="Prénom"><?=$Prénom?></span> <br/> <br/>
	<label>Code postal :</label> <span id="code"><?=$code?></span> <br/> <br/>
	<label>Num&eacutero de t&eacutel&eacutephone :</label> <span id="numéro"><?=$numéro?></span> <br/>
	<label>Adresse email :</label> <span id="email"><?=$email?></span> <br/> <br/>
	<br/><br/><br/>
	<fieldset>
	<legend>Date de naissance des assur&eacutes </legend>
	<br/>
	<label>Monsieur : </label> <span id="Monsieur"><?=$Monsieur?></span> <br/> <br/>
	<label>Madame :</label> <span id="Madame"><?=$Madame?></span> <br/> <br/>
	<label>1er enfant : </label> <span id="un"><?=$un?></span> <br/> <br/>
	<label>2&eacuteme enfant :</label> <span id="deux"><?=$deux?></span> <br/> <br/>
	<label>3&eacuteme enfant :</label> <span id="trois"><?=$trois?></span> <br/> <br/>
	</fieldset>
	
	
	</div>
</body>
</html>