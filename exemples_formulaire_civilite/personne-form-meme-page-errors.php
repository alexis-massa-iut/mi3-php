<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head> 
	<body>
		<form method="post" action="personne-form-meme-page-errors.php">
			<label for="nomSaisi" style="display:block; float:left; width:70px">Nom</label>
			<p><input type="text" size="30" name="nomSaisi" id="nomSaisi" value=""/></p>
					
			<label for="prenomSaisi" style="display:block; float:left; width:70px">Prénom</label>
			<p><input type="text" size="30" name="prenomSaisi" id="prenomSaisi" value=""/></p>
					
			<label for="civiliteSaisie" style="display:block; float:left; width:70px">Civilité</label>
			<p><select name="civiliteSaisie" id="civiliteSaisie">
				<option value="monsieur">M.
				<option value="madame">Mme
				<option value="mademoiselle">Mlle
			</select></p>
			<input type="submit" name="bSubmit" value="Valider">
		</form>
		<p>Vous avez saisi :</p>
        <?php
        var_dump($_POST);
        ?>
		<table border=1>
		<?php
        echo '<tr><td>Nom</td><td>'.htmlspecialchars($_POST['nomSaisi']).'</td></tr>';
        echo '<tr><td>Prénom</td><td>'.htmlspecialchars($_POST['prenomSaisi']).'</td></tr>';
        echo '<tr><td>Civilité</td><td>'.htmlspecialchars($_POST['civiliteSaisie']).'</td></tr>';
        ?>
		</table>
	</body>
</html>