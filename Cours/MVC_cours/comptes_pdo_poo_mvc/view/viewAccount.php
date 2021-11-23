<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<?php
//var_dump($account);
if ($account) { ?>
Id : <?= $account->getId() ?><br/>
Login : <?= $account->getLogin() ?><br/>
Nom : <?= $account->getName() ?><br/>
Prénom : <?= $account->getSurname() ?><br/>
Email : <?= $account->getEmail() ?><br/>
Mot de passe : <?= $account->getPass() ?><br/>
Administreur : <?= $account->getIsAdmin() ?><br/><br/>
<?php } ?>
<a href="index.php?action=viewAccounts">Liste des comptes</a><br/>
<a href="index.php?action=viewAuths">Liste des autorisations</a>
</body>
</html>
