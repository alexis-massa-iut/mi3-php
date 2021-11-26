<?php
session_start();
if (isset($_GET["nb1"], $_GET["nb2"], $_GET["operator"])) {
	$_SESSION["nb1"] = $_GET["nb1"];
	$_SESSION["nb2"] = $_GET["nb2"];
	$_SESSION["operator"] = $_GET["operator"];
}
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
</head>

<body>
	<?php
	var_dump($_GET);
	?>
	<form method="get" action="calcul.php">
		<label for="nb1" style="display:block; float:left; width:70px">Number 1</label>

		<p><input type="number" size="30" name="nb1" id="nb1" value="<?php
																		if (isset($_SESSION['nb1'])) {
																			echo htmlspecialchars($_SESSION['nb1']);
																		} ?>" /></p>

		<label for="nb2" style="display:block; float:left; width:70px">Number 2</label>

		<p><input type="number" size="30" name="nb2" id="nb2" value="<?php
																		if (isset($_SESSION['nb2'])) {
																			echo htmlspecialchars($_SESSION['nb2']);
																		} ?>" /></p>

		<label for="operator" style="display:block; float:left; width:70px">Operator</label>
		<p><select name="operator" id="operator">
				<option value="+" <?php
									if (isset($_SESSION['operator']) and $_SESSION['operator'] == '+') {
										echo 'selected';
									} ?>>+</option>
				<option value="-" <?php
									if (isset($_SESSION['operator']) and $_SESSION['operator'] == '-') {
										echo 'selected';
									} ?>>-</option>
				<option value="*" <?php
									if (isset($_SESSION['operator']) and $_SESSION['operator'] == '*') {
										echo 'selected';
									} ?>>*</option>
				<option value="/" <?php
									if (isset($_SESSION['operator']) and $_SESSION['operator'] == '/') {
										echo 'selected';
									} ?>>/</option>
			</select></p>
		<input type="hidden" name="champCache" value="valCachee">
		<input type="submit" name="bSubmit" value="Valider">
		<input type="submit" name="bSave" value="Enregistrer le calcul">
	</form>

	<p>Vous avez saisi :</p>
	<table border=1>
		<?php
		if (isset($_SESSION['nb1'], $_SESSION['nb2'], $_SESSION['operator'])) {
			echo '<tr><td>Number 1:</td><td>' . htmlspecialchars($_SESSION['nb1']) . '</td></tr>';
			echo '<tr><td>Number 2:</td><td>' . htmlspecialchars($_SESSION['nb2']) . '</td></tr>';
			echo '<tr><td>Operator: </td><td>' . htmlspecialchars($_SESSION['operator']) . '</td></tr>';
		}
		?>
	</table>

	<?php
	if (isset($_SESSION['nb1']) && isset($_SESSION['nb1']) && isset($_SESSION['nb2'])) {
		if (is_numeric($_SESSION['nb1']) && is_numeric($_SESSION['nb2'])) {
			$result = calcul($_SESSION['nb1'], $_SESSION['nb2'], $_SESSION['operator']);
			echo "Resultat = $result";
		}
	}

	function calcul($nb1, $nb2, $operator)
	{
		switch ($operator) {
			case '+':
				return $nb1 + $nb2;
				break;
			case '-':
				return $nb1 - $nb2;
				break;
			case '*':
				return $nb1 * $nb2;
				break;
			case '/':
				if ($nb2 == 0)
					return 'Division par 0 impossible';
				else
					return $nb1 / $nb2;
				break;
			default:
				return "L'opérateur $_SESSION[operator] n'existe pas";
				break;
		}
	}
	?>

</body>

</html>