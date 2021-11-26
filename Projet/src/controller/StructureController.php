<?php

namespace mvc\controller;

require_once('AController.php');
require_once(__DIR__ . '/../model/managers/StructureManager.php');

use mvc\model\entities\Structure;
use mvc\model\manager\StructureManager;

class StructureController extends AController
{
    public function __construct()
    {
        $this->manager = new StructureManager();
    }

    public function viewStructures(): void
    {
        $title = 'Liste des structures';
        $structures = $this->findAll();

        require(__DIR__ . '/../view/viewStructures.php');
    }

    public function viewStructure($id): void
    {
        $title = 'Détail de la structure';
        $structure = $this->findById($id);

        if ($structure) {
            require(__DIR__ . '/../view/viewStructure.php');
        } else {
            $error = 'id de structure non valide';
            require(__DIR__ . '/../view/error.php');
        }
    }

    public function addStructure(): void
    {
        $structure = new Structure(null, $_POST['nom'], $_POST['rue'], $_POST['cp'], $_POST['ville'], $_POST['estAsso'], $_POST['nbDonateurs'], $_POST['nbActionnaires']);
        $this->insert($structure);
        header('Location: index.php?action=viewStructures');
    }
}
