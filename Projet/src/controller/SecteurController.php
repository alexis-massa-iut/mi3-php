<?php

namespace mvc\controller;

require_once('AController.php');
require_once(__DIR__ . '/../model/managers/SecteurManager.php');

use mvc\model\entities\Secteur;
use mvc\model\manager\SecteurManager;

class SecteurController extends AController
{
    public function __construct()
    {
        $this->manager = new SecteurManager();
    }

    public function viewSecteurs() : void
    {
        $title = 'Liste des secteurs';
        $secteurs = $this->findAll();

        require(__DIR__ . '/../view/viewSecteurs.php');
    }

    public function viewSecteur($id) : void
    {
        $title = 'Détail du secteur';
        $secteur = $this->findById($id);

        if ($secteur) {
            require(__DIR__ . '/../view/viewSecteur.php');
        }
        else {
            $error = 'id de secteur non valide';
            require(__DIR__ . '/../view/error.php');
        }
    }

    public function addSecteur() : void
    {
        $isadmin = isset($_POST['isadmin']) ? 1 : 0;
        $secteur = new Secteur(null, $_POST['libelle']);
        $this->insert($secteur);
        header('Location: index.php?action=viewSecteurs');
    }
}
