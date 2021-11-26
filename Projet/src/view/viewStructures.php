<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>

<body>
    <table>
        <thead>
            <th>Nom</th>
            <th>Rue</th>
            <th>Cp</th>
            <th>Ville</th>
            <th>EstAsso</th>
            <th>Nombre de donateurs</th>
            <th>Nombre d'actionnaires</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            //var_dump($structures);
            foreach ($structures as $structure) { ?>
                <tr>
                    <form method="post" action="index.php?action=viewStructure&id=<?= $structure->getId() ?>">
                        <td><?= $structure->getNom(); ?></td>
                        <td><?= $structure->getRue(); ?></td>
                        <td><?= $structure->getCp(); ?></td>
                        <td><?= $structure->getVille(); ?></td>
                        <td><?= $structure->getEstAsso(); ?></td>
                        <td><?= $structure->getNbDonateurs(); ?></td>
                        <td><?= $structure->getNbActionnaires(); ?></td>
                        <td><input type="submit" name="viewStructure" value="Détails" /></td>
                    </form>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br /><br />
    <form method="post" action="index.php?action=addStructure">
        <table>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" required></td>
            </tr>
            <tr>
                <td>Rue</td>
                <td><input type="text" name="rue" required></td>
            </tr>
            <tr>
                <td>Code postal</td>
                <td><input type="text" pattern="[0-9]{5}" name="cp" required></td>
            </tr>
            <tr>
                <td>Ville</td>
                <td><input type="text" name="ville" required></td>
            </tr>
            <tr>
                <td>EstAsso</td>
                <td><input type="number" pattern="[01]" name="estAsso" required></td>
            </tr>
            <tr>
                <td>Nombre de donateurs</td>
                <td><input type="number" name="nbDonateurs"></td>
            </tr>
            <tr>
                <td>Nombre d'actionnaires</td>
                <td><input type="number" name="nbActionnaires"></td>
            </tr>
        </table>
        <input type="submit" name="add" value="Ajouter">
    </form>
    <br /><br /><a href="index.php?action=viewStructures">Liste des structures</a>
</body>

</html>