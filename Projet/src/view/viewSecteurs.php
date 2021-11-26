<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<?php
//var_dump($secteurs);
foreach ($secteurs as $secteur) { ?>
    <form method="post" action="index.php?action=viewSecteur&id=<?= $secteur->getId()?>">
        <label><?= $secteur->getLibelle(); ?></label>
        <input type="submit" name="viewSecteur" value="Détails"/>
    </form>
<?php
}
?>
<br/><br/><form method="post" action="index.php?action=addSecteur">
    <table>
        <tr><td>Libelle</td><td><input required type="text" name="login"></td></tr>
    </table>
    <input type="submit" name="add" value="Ajouter">
</form>
<br/><br/><a href="index.php?action=viewSecteurs">Liste des secteurs</a>
</body>
</html>