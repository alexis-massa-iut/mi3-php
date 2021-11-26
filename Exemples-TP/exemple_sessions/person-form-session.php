<?php
	include('fonctions.php');
	session_start();

	if (isset($_POST['nomSaisi'],$_POST['prenomSaisi'],$_POST['civiliteSaisie'])) {
		$_SESSION['nomSession'] = $_POST['nomSaisi'];
		$_SESSION['prenomSession'] = $_POST['prenomSaisi'];
		$_SESSION['civiliteSession'] = $_POST['civiliteSaisie'];
	}
?>
<!DOCTYPE html>
<html> 
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="post">
			<label for="nomSaisi" style="display:block; float:left; width:70px">Nom</label>
			
			<p><input type="text" size="30" name="nomSaisi" id="nomSaisi" value="<?php
					if (isset($_SESSION['nomSession'])) echo htmlspecialchars($_SESSION['nomSession']); ?>"/></p>
					
			<label for="prenomSaisi" style="display:block; float:left; width:70px">Prénom</label>

            <p><input type="text" size="30" name="prenomSaisi" id="prenomSaisi" value="<?php
					if (isset($_SESSION['prenomSession'])) echo htmlspecialchars($_SESSION['prenomSession']); ?>"/></p>
					
			<label for="civiliteSaisie" style="display:block; float:left; width:70px">Civilité</label>
            <p><select name="civiliteSaisie" id="civiliteSaisie">
				<option value="monsieur" <?php 
					if (isset($_SESSION['civiliteSession']) AND $_SESSION['civiliteSession']=='monsieur') {
						echo 'selected';
					}?>>M.
				<option value="madame" <?php 
					if (isset($_SESSION['civiliteSession']) AND $_SESSION['civiliteSession']=='madame') {
						echo 'selected';
					}?>>Mme
				<option value="mademoiselle" <?php 
					if (isset($_SESSION['civiliteSession']) AND $_SESSION['civiliteSession']=='mademoiselle') {
						echo 'selected';
					}?>>Mlle
			</select></p>
			<input type="submit" name="bSubmit" value="Valider">
		</form>
        <p><a href="person-display-session.php">Visualiser variables de sessions dans autre page</a></p>
        <?php
        displayTabsIdSession();
        ?>
	</body>
</html>


