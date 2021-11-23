<!DOCTYPE html>
<html>
<head>
    <title>Structures - PDO</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'structures';
$stmt = null;
$conn = null;
try {
    // connexion à l'aide d'une chaîne de connexion
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    // Configure le mode d'erreur de PDO à exception (mode non par défaut)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prépare la requête et bind les paramètres
    $stmt = $conn->prepare("insert into secteur(id, libelle) values (:id, :libelle)");

    $res = $stmt->execute([':id' => NULL, ':libelle' => 'secteur' . rand()]);

    var_dump($conn);
    var_dump($stmt);
    var_dump($res);
    var_dump($conn->errorCode());
    var_dump($conn->errorInfo());

    echo '<p>'.$stmt->rowCount() . ' nouveau(x) secteur(s) d\'activité(s) créé(s)</p>';

    $stmt->closeCursor();

    $stmt = $conn->prepare("select * from structure where ville=:v and id>:i");
    // On laisse PDO déterminer le type du paramètre si le 3ème argument n'est pas précisé
    // On associe la valeur du paramètre à une valeur
    $bp_res = $stmt->bindValue('v', 'Paris', PDO::PARAM_STR);

    var_dump($bp_res);

    $id = 0;
    // On associe la valeur du paramètre à celle d'une variable
    // qui est relue à chaque execute
    $bp_res = $stmt->bindParam(':i', $id, PDO::PARAM_INT);

    var_dump($bp_res);

    $res = $stmt->execute();

    if ($res) {
        $lines = $stmt->fetchAll(PDO::FETCH_BOTH);
        var_dump($lines);
    }

    $stmt->closeCursor();

    $id = 1;

    $res = $stmt->execute();

    $lines = $stmt->fetchAll(PDO::FETCH_OBJ);
    var_dump($lines);

    $stmt->closeCursor();

    $res = $stmt->execute();

    $lines = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($lines);

    $stmt->closeCursor();

    $id = 0;

    $res = $stmt->execute();

    while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
        var_dump($line);
        echo '<p>'.$line['ID'] . ' ' . $line['NOM'] . '</p>';
    }

    $stmt->closeCursor();
}
catch(PDOException $e)
{
    echo '<p>PDOException '.$e->getCode().' : '.$e->getMessage().'<br/>'.$e->getTraceAsString().'</p>';
}
catch (Error $e) {
    echo '<p>Error : '.$e->getCode().' : '.$e->getMessage().'<br/>'.$e->getTraceAsString().'</p>';
}
finally {
    if ($stmt != null) $stmt->closeCursor();
    // fermeture de la connexion dans tous les cas (erreur ou pas) si
    // elle a pu être établie (!= null)
    $conn = null;
}

?>
</body>
</html>