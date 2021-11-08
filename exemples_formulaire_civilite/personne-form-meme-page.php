<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head> 
	<body>
    <?php
    var_dump($_POST);
    ?>
		<form method="post" action="personne-form-meme-page.php">
		<!-- équivalent pour traiter dans le même formulaire 
		<form method="post">-->
		<!-- pour traitement avec méthode get -->
		<!--<form method="get">-->
			<label for="nomSaisi" style="display:block; float:left; width:70px">Nom</label>

			<p><input type="text" size="30" name="nomSaisi" id="nomSaisi" value="<?php
					if (isset($_POST['nomSaisi'])) echo htmlspecialchars($_POST['nomSaisi']); ?>"/></p>
					
			<label for="prenomSaisi" style="display:block; float:left; width:70px">Prénom</label>
			
			<p><input type="text" size="30" name="prenomSaisi" id="prenomSaisi" value="<?php
					if (isset($_POST['prenomSaisi'])) echo htmlspecialchars($_POST['prenomSaisi']); ?>"/></p>
					
			<label for="civiliteSaisie" style="display:block; float:left; width:70px">Civilité</label>
			<p><select name="civiliteSaisie" id="civiliteSaisie">
				<option value="monsieur" <?php
					if (isset($_POST['civiliteSaisie']) AND $_POST['civiliteSaisie']=='monsieur') {
						echo 'selected';
					}?>>M.
				<option value="madame" <?php
					if (isset($_POST['civiliteSaisie']) AND $_POST['civiliteSaisie']=='madame') {
						echo 'selected';
					}?>>Mme
				<option value="mademoiselle" <?php
					if (isset($_POST['civiliteSaisie']) AND $_POST['civiliteSaisie']=='mademoiselle') {
						echo 'selected';
					}?>>Mlle
			</select></p>
            <input type="hidden" name="champCache" value="valCachee">
			<input type="submit" name="bSubmit" value="Valider">
		</form>

		<p>Vous avez saisi :</p>
		<table border=1>
		<?php
        if (isset($_POST['nomSaisi'],$_POST['prenomSaisi'],$_POST['civiliteSaisie'])) {
            echo '<tr><td>Nom</td><td>' . htmlspecialchars($_POST['nomSaisi']) . '</td></tr>';
            echo '<tr><td>Prénom</td><td>' . htmlspecialchars($_POST['prenomSaisi']) . '</td></tr>';
            echo '<tr><td>Civilité</td><td>'. htmlspecialchars($_POST['civiliteSaisie']) . '</td></tr>';
        }
        ?>
		</table>
	</body>
</html>