<?php
	include('fonctions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
	<title>Recherche de structures</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  </head>
  <body>
  <?php
  if (isset($_POST['bouton_enregistrer'])) {
      createCookie('c_nom', $_POST['nomSaisi']);
      createCookie('c_ville', $_POST['villeSaisie']);
      createCookie('c_rue', $_POST['rueSaisie']);
  }

  ?>
	<form method=post>
		<label for="nom" style="display:block; float:left; width:50px">Nom</label>
		<?php createInputText('nomSaisi','c_nom'); ?><br/>
		
		<label for="ville" style="display:block; float:left; width:50px">Ville</label>
		<?php createInputText('villeSaisie','c_ville'); ?><br/>
		
		<label for="rue" style="display:block; float:left; width:50px">Rue</label>
		<?php createInputText('rueSaisie','c_rue'); ?><br/>
		
		<input type="submit" name="bouton_chercher" value="Chercher">
		<input type="submit" name="bouton_enregistrer" value="Enregistrer recherche">
	</form>
    <?php
    displayTab('$_GET',$_GET);
    displayTab('$_POST',$_POST);
    displayTab('$_SESSION',$_SESSION);
    displayTab('$_COOKIE',$_COOKIE);
    ?>
  </body>
</html>
