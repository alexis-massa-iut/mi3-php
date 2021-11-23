<?php

namespace mvc\controller;

require_once('AController.php');
require_once(__DIR__ . '/../model/managers/AccountManager.php');

use mvc\model\entities\Account;
use mvc\model\manager\AccountManager;

class AccountController extends AController
{
    public function __construct()
    {
        $this->manager = new AccountManager();
    }

    public function viewAccounts() : void
    {
        $title = 'Liste des comptes';
        $accounts = $this->findAll();

        require(__DIR__ . '/../view/viewAccounts.php');
    }

    public function viewAccount($id) : void
    {
        $title = 'Détail du compte';
        $account = $this->findById($id);

        if ($account) {
            require(__DIR__ . '/../view/viewAccount.php');
        }
        else {
            $error = 'id de compte non valide';
            require(__DIR__ . '/../view/error.php');
        }
    }

    public function addAccount() : void
    {
        $isadmin = isset($_POST['isadmin']) ? 1 : 0;
        $account = new Account(null, $_POST['login'], $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['pass'], $isadmin);
        $this->insert($account);
        header('Location: index.php?action=viewAccounts');
    }
}
