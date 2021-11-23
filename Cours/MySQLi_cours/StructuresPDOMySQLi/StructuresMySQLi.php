<!DOCTYPE html>
<html>
<head>
    <title>Structures - MySQLi</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'structures';
$conn=null;

try {
    // Configure le mode d'erreur de PDO à exception (mode non par défaut)
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    // connexion à l'aide d'une chaîne de connexion
    $conn=new mysqli($server, $user, $pass, $db);

    // prépare la requête et bind les paramètres
    $stmt = $conn->prepare("insert into secteur(id, libelle) values (?, ?)");
    $id=null;
    $libelle='secteur'.rand();
    // i pour entier, s pour chaine, d pour float
    $bp_res=$stmt->bind_param('is',$id,$libelle);
    $res=$stmt->execute();
    // booléen
    var_dump($conn);
    var_dump($stmt);
    var_dump($bp_res);
    var_dump($res);

    echo '<p>'.$stmt->affected_rows.' nouveau(x) secteur(s) d\'activité(s) créé(s), id : '.$stmt->insert_id.'</p>';
    // equivalent
    echo '<p>'.$stmt->affected_rows.' nouveau(x) secteur(s) d\'activité(s) créé(s), id : '.$conn->insert_id.'</p>';
	$stmt->close();
    $stmt = $conn->prepare("select * from structure where ville=? and id>?");

    // On associe la valeur du paramètre à une case du tableau
    $params = [ 'id' => 0, 'ville' => 'Paris' ];
	$res=$stmt->bind_param('si', $params['ville'], $params['id']);
    $res = $stmt->execute();

    // fetch sur l'objet mysqli_result avec plusieurs formats de retour
    $stmt_result = $stmt->get_result();
    var_dump($stmt_result);
    $lines = $stmt_result->fetch_all();

    echo '<p>Nombre de lignes retournées : '.$stmt_result->num_rows.'</p>';
    var_dump($lines);

    $stmt_result->close();

    $res = $stmt->execute();
    $stmt_result = $stmt->get_result();
    while ($line = $stmt_result->fetch_assoc()) {
        var_dump($line);
    }

    $stmt_result->close();

    $res = $stmt->execute();
    $stmt_result = $stmt->get_result();
    while ($line = $stmt_result->fetch_object()) {
        var_dump($line);
    }

    $stmt_result->close();

    $res = $stmt->execute();
    $stmt_result = $stmt->get_result();
    while ($line = $stmt_result->fetch_array()) {
        var_dump($line);
    }

    $stmt_result->close();

    // fetch sur un objet mysqli_stmt pour récupérer les résultats ligne par ligne
    // dans des variables
    $stmt->bind_result($id,$nom,$rue,$cp,$ville,$estasso,$nbDon,$nbAct);
    $res=$stmt->execute();

    while ($stmt->fetch()) {
        echo "<p>$id, $nom, $rue, $cp, $ville, $estasso, $nbDon, $nbAct</p>";
    }

    $stmt->close();
}
catch(mysqli_sql_exception $e)
{
    //var_dump($conn);
    echo '<p>mysqli_sql_exception : '.$e->getCode().' : '.$e->getMessage().'<br/>'.$e->getTraceAsString().'</p>';
}
catch (Error $e) {
    echo '<p>Error : '.$e->getCode().' : '.$e->getMessage().'<br/>'.$e->getTraceAsString().'</p>';
}
finally {
    if ($conn != null) $conn->close();
}
?>
</body>
</html>