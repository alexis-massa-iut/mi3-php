<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<?php
//var_dump($account);
if ($secteur) { ?>
Id : <?= $secteur->getId() ?><br/>
Libelle : <?= $secteur->getLibelle() ?><br/>
<?php } ?>
<a href="index.php?action=viewSecteurs">Liste des secteurs</a><br/>
<a href="index.php?action=viewStructures">Liste des structures</a>
</body>
</html>