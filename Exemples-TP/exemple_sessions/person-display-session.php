<?php
	include('fonctions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head> 
	<body>
        <p><a href="person-form-session.php">Revenir au formulaire</a></p>
        <p><a href="person-clear-session.php">Réinitialiser session</a></p>
		<?php
        displayTabsIdSession();
		?>
	</body>
</html>