<?php
require_once('Etudiant.php');
require_once('Module.php');
require_once('MoyenneModule.php');
require_once('MoyenneEtudiant.php');
use POO\Notes\Etudiant;
use POO\Notes\Module;
use POO\Notes\MoyenneEtudiant;
use POO\Notes\MoyenneModule;

$etu = new Etudiant("Paul", "Dupont", 13);
echo $etu;

echo '<br>';

$mod1 = new Module("Maths", 3);
$mod2 = new Module("Francais", 4);
$mod3 = new Module("Histoire", 1);
echo $mod1.'<br>';
echo $mod2.'<br>';
echo $mod3.'<br>';

echo '<br>';

$moy_mod1 = new MoyenneModule($etu, $mod1, 12.5);
$moy_mod2 = new MoyenneModule($etu, $mod2, 15);
$moy_mod3 = new MoyenneModule($etu, $mod3, 5);
echo $moy_mod1.'<br>';
echo $moy_mod2.'<br>';
echo $moy_mod3.'<br>';

echo '<br>';

$moy_etu = new MoyenneEtudiant();
$moy_etu->addMoyenne($moy_mod1)->addMoyenne($moy_mod2)->addMoyenne($moy_mod3);
echo $moy_etu;
