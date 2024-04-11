<?php
if(isset($_POST['mailform']))
$header="MIME-Version: 1.0\r\n";
$header.='From:"server17.hostinger.fr"<amp@amp.890m.com>'."\n";
$header.='Content-Type:text/html; cahset="uft-8"'."\n";
$header.='content-transfe-Encoding: 8bit';

$message='
<html>
	<body>
		<div align= "center">
			J\'ai envoyé ce mail avec PHP !
			<br />
		</div>
	</body>
</html>
';

mail("na_to974@hotmail.fr", "Salut test", $message, $header);

?>
<form methode="POST" action="">
	<input type="submit" value="Recevoir un mail !" name="mailform"/>
</form>