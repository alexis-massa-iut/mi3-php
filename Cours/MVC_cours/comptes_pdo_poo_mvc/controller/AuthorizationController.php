<?php

namespace mvc\controller;

require_once('AController.php');
require_once(__DIR__ . '/../model/managers/AuthorizationManager.php');

use mvc\model\entities\Authorization;
use mvc\model\manager\AuthorizationManager;

class AuthorizationController extends AController
{
    public function __construct()
    {
        $this->manager = new AuthorizationManager();
    }

    public function viewAuths() : void
    {
        $title = 'Liste des autorisations';
        $auths = $this->findAll();

        require(__DIR__ . '/../view/viewAuths.php');
    }

    public function viewAuth($id) : void
    {
        $title = 'Détail de l\'autorisation';
        $auth = $this->findById($id);

        if ($auth) {
            require(__DIR__ . '/../view/viewAuth.php');
        }
        else {
            $error = 'id d\'autorisation non valide';
            require(__DIR__ . '/../view/error.php');
        }
    }

    public function addAuth() : void
    {
        $readOnly = isset($_POST['readonly']) ? 1 : 0;
        $auth = new Authorization(null, $_POST['name'], $readOnly);
        $this->insert($auth);
        header('Location: index.php?action=viewAuths');
    }
}
