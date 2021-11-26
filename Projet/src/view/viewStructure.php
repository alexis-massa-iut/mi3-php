<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>

<body>
    <?php
    //var_dump($account);
    if ($structure) { ?>
        Id : <?= $structure->getId() ?><br />
        Nom : <?= $structure->getNom() ?> <br />
        Rue : <?= $structure->getRue() ?> <br />
        Cp : <?= $structure->getCp() ?> <br />
        Ville : <?= $structure->getVille() ?> <br />
        Association : <?= $structure->getEstAsso() ?> <br />
        Nombre de donateurs : <?= $structure->getNbDonateurs() ?> <br />
        Nombre d'actionnaires : <?= $structure->getNbActionnaires() ?> <br />
    <?php } ?>
    <a href="index.php?action=viewSecteurs">Liste des secteurs</a><br />
    <a href="index.php?action=viewStructures">Liste des structures</a>
</body>

</html>