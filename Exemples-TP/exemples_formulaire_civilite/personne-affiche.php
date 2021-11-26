<!DOCTYPE html> 
<html>
	<head>
        <title>Affichage saisie</title>
		<meta charset="UTF-8">
	</head> 
	<body>
		<?php
            $a=1;
            echo "<p>valeur de a : $a</p>\n";
            echo "<p>valeur de a : \$a</p>\n";
            echo '<p>valeur de a : $a</p>'."\n";
            echo '<p>valeur de a : '.$a."</p>\n";

            var_dump($_GET);
            var_dump($_POST);

            //echo $_GET['nomSaisi'];
            echo '<p>'.$_POST['prenomSaisi'].'</p>';

            if (isset($_GET['nomSaisi'])) {
                echo '<p>'.htmlspecialchars($_GET['nomSaisi']).'</p>';
            }
            if (isset($_POST['prenomSaisi'])) {
                echo '<p>'.htmlspecialchars($_POST['prenomSaisi']).'</p>';
            }

            print_r($_POST);

			echo '<p>$_GET par print_r</p><pre>';
			print_r($_GET);
			echo '</pre>';

			echo '<p>$_POST par print_r</p><pre>';
			print_r($_POST);
			echo '</pre>';

			echo '<p>$_GET par table</p><table border=1>';

			foreach ($_GET as $cle => $valeur)
			{
				echo '<tr><td>'.$cle.'</td><td>'.$valeur.'</td></tr>';
			}

			echo '</table><p></p>';

			echo '<p>$_POST par table</p><table border=1>';

			foreach ($_POST as $cle => $valeur)
			{
                echo '<tr><td>'.$cle.'</td><td>'.$valeur.'</td></tr>';
			}
			echo '</table>';
		?>
	</body>
</html>