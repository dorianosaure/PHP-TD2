<?php 
	$ID = $_POST['ID'];
	$sexe = $_POST['sexe'];
	$mail = $_POST['mail'];
	$pswd = $_POST['password'];
	$vpswd = $_POST['Vpassword'];
	$tel = $_POST['tel'];
	$pays = $_POST['pays'];
	$cgu = $_POST['cgu'];

	echo 'jai vole tes informations !';
	echo 'identifiant :' . $ID . PHP_EOL .
		'sexe :' . $sexe . PHP_EOL . 
		'Email :' . $mail . PHP_EOL . 
		'password :' . $pswd . PHP_EOL .
		'verif :' . $vpswd . PHP_EOL . 
		'tel :' . $tel . PHP_EOL .
		'pays :' . $pays . PHP_EOL
?>