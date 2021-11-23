<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<?php
//var_dump($auth);

if ($auth) { ?>
Id : <?= $auth->getId() ?><br/>
Name : <?= $auth->getName() ?><br/>
Lecteur seule : <?= $auth->getReadOnly() ?><br/><br/>
<?php } ?>
<a href="index.php?action=viewAccounts">Liste des comptes</a><br/>
<a href="index.php?action=viewAuths">Liste des autorisations</a>
</body>
</html>
