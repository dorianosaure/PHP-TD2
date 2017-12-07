<?php include 'utils.inc.php'; ?>
<?php start_page('formulaire'); ?>
<form action="data_process.php" method="post">
	<input type="text" name="ID"/>Identifiant<br/>
	<input type="radio" name="sexe" value="homme" />homme<br/>
	<input type="radio" name="sexe" value="femme" />femme<br/>
	<input type="email" name="mail"/>email<br/>
	<input type="password" name="password"/>mot de passe<br/>
	<input type="password" name="Vpassword"/>Vérification<br/>
	<input type="text" name="tel"/>telephone<br/>
	<select name="pays">
		<option value="france">France</option>
		<option value="italie">Italie</option>
		<option value="USA">USA</option>
	</select>
	<input type="checkbox" name="cgu" value="true" />CGU<br/>
	<input type="submit" name="Envoyer">Envoyer><br/>
</form>








<?php end_page(); ?>

