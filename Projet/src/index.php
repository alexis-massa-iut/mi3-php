
<?php
require_once('./controller/SecteurController.php');
require_once('./controller/StructureController.php');
use mvc\controller\SecteurController;
use mvc\controller\StructureController;

try {
    if (isset($_GET['action'])) {
        if (stripos($_GET['action'], 'secteur')) {
            $controller = new SecteurController();
            switch ($_GET['action']) {
                case 'viewSecteur':
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $secteur = $controller->viewSecteur($_GET['id']);
                    } else {
                        $error = 'Erreur : mauvais identifiant<br/>';
                    }
                    break;
                case 'viewSecteurs':
                    $secteurs = $controller->viewSecteurs();
                    break;
                case 'addSecteur':
                    if (isset($_POST['libelle'])) {
                        $controller->addSecteur();
                    } else {
                        $error = 'Erreur de paramètres<br/>';
                    }
                    break;
                default :
                    $error = 'Erreur : action non reconnue<br/>';
                    break;
            }
        } elseif (stripos($_GET['action'], 'structure')) {
            $controller = new StructureController();
            switch ($_GET['action']) {
                case 'viewStructure':
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $secteur = $controller->viewStructure($_GET['id']);
                    } else {
                        $error = 'Erreur : mauvais identifiant<br/>';
                    }
                    break;
                case 'viewStructures':
                    $secteurs = $controller->viewStructures();
                    break;
                case 'addStructure':
                    if (isset($_POST['nom'], $_POST['rue'], $_POST['cp'], $_POST['ville'], $_POST['estAsso'])) {
                        $controller->addStructure();
                    } else {
                        $error = 'Erreur de paramètres<br/>';
                    }
                    break;
                default :
                    $error = 'Erreur : action non reconnue<br/>';
                    break;
            }
        } else {
            $error = 'Erreur : action non reconnue<br/>';
        }
    } else {
        ?>
        <a href="index.php?action=viewSecteurs">Liste des comptes</a><br/>
        <a href="index.php?action=viewStructures">Liste des autorisations</a>
        <?php
    }
}
catch (Exception $ex) {
    $error='Error '.$ex->getCode().' : '.$ex->getMessage().'<br/>'.str_replace("\n","<br/>",
            $ex->getTraceAsString());
}
if (isset($error)) {
    require(__DIR__.'/view/error.php');
}
?>
