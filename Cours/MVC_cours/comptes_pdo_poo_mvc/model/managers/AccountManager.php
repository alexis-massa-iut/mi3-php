<?php

namespace mvc\model\manager;

require_once('PDOManager.php');

require_once(__DIR__ . '/../entities/Account.php');
require_once(__DIR__.'/../entities/Entity.php');
require_once('PDOManager.php');

use mvc\model\entities\Account;
use mvc\model\entities\Entity;
use \PDOStatement;

class AccountManager extends PDOManager
{
    public function findById(int $id): ?Entity
    {
        $stmt = $this->executePrepare("select * from account where id=:id", [ 'id' => $id]);
        $account = $stmt->fetch();
        if (!$account) return null;
        return new Account($account['ID'],$account['LOGIN'],$account['NAME'],$account['SURNAME'],
            $account['EMAIL'], $account['PASS'],$account['ISADMIN']);
    }

    public function find(): PDOStatement
    {
        $stmt=$this->executePrepare("select * from account",[]);
        return $stmt;
    }

    public function findAll(int $pdoFecthMode): array
    {
        $stmt=$this->find();
        $accounts = $stmt->fetchAll($pdoFecthMode);

        $accountsEntities=[];
        foreach($accounts as $account) {
            $accountsEntities[] = new Account($account['ID'],$account['LOGIN'],$account['NAME'],
                $account['SURNAME'],$account['EMAIL'],
                $account['PASS'],$account['ISADMIN']);
        }
        return $accountsEntities;
    }

    public function insert(Entity $e): PDOStatement
    {
        $req = "insert into account(id, login, name, surname, email, pass, isadmin) values (:id, :login, :name, 
                    :surname, :email, :pass, :isadmin)";
        $params = array('id' => $e->getId(), 'login' => $e->getLogin(), 'name' => $e->getName(), 'surname' => $e->getSurname(),
            'email' => $e->getEmail(), 'pass' => sha1($e->getPass()), 'isadmin' => $e->getIsAdmin());
        $res=$this->executePrepare($req,$params);
        return $res;
    }
}
