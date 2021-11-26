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
		<?php
        // suppression session en cours
        $_SESSION = array();
        if (isset($_COOKIE[session_name()])) {
          setcookie(session_name(),'',time()-1000,'/');
        }
        session_destroy();
        displayTabsIdSession();
		?>
		<p><a href="person-form-session.php">Revenir au formulaire</a></p>
        <p><a href="person-display-session.php">Revenir à la page d'affichage des variables</a></p>

	</body>
</html>
