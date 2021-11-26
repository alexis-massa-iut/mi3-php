<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'ecommerce/Produit.php';
        require 'ecommerce/LignePanier.php';
        require 'ecommerce/Panier.php';

        use ecommerce\Produit;
        use ecommerce\LignePanier;
        use ecommerce\Panier;

        $p1 = new Produit('Produit 1', 9.99);
        $p2 = new Produit('Produit 2', 19.95);

        echo 'Produit : ref='.$p1->get_nom().', prix='.$p1->get_prix();

        $p1->set_nom('Prod1');
        $p1->set_prix(8.99);

        echo '<p>'.$p1->__toString().'</p>';
        echo '<p>'.$p1.'</p>';

        $lp1 = new LignePanier($p1,3);
        $lp2 = new LignePanier($p2,2);
        echo '<p>Montant de la ligne de panier 1 : '.$lp1->getMontant().'</p>';
        echo '<p>Montant de la ligne de panier 2 : '.$lp2->getMontant().'</p>';

        $lignesP = array($lp1,$lp2);
        $pan1 = new Panier('Client 1', $lignesP);
        echo '<p>Montant du panier 1 : '.$pan1->getMontantTotal().'</p>';

        $p3 = new Produit('Produit 3', 5.99);
        $lp3 = new LignePanier($p3,1);
        $pan1->ajouterLigne($lp3);

        echo '<p>Nouveau montant du panier 1 : '.$pan1->getMontantTotal().'</p>';
        ?>
    </body>
</html>
