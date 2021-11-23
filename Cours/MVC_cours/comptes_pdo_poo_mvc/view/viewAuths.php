<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<?php
//var_dump($accounts);
foreach ($auths as $auth) { ?>
    <form method="post" action="index.php?action=viewAuth&id=<?= $auth->getId()?>">
        <label><?= $auth->getName(); ?></label>
        <input type="submit" name="viewAuth" value="Détails">
    </form>
<?php
}
?>
<br/><br/><form method="post" action="index.php?action=addAuth">
    <table>
        <tr><td>Nom</td><td><input required type="text" name="name"></td></tr>
        <tr><td>Lecture seule</td><td><input type="checkbox" name="readonly"></td></tr>
    </table>
    <input type="submit" name="add" value="Ajouter">
</form>
<br/><br/><a href="index.php?action=viewAccounts">Liste des comptes</a>
</body>
</html>
