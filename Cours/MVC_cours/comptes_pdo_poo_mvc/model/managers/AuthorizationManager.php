<?php

namespace mvc\model\manager;

require_once(__DIR__ . '/../entities/Authorization.php');
require_once(__DIR__.'/../entities/Entity.php');
require_once('PDOManager.php');

use mvc\model\entities\Authorization;
use mvc\model\entities\Entity;
use \PDOStatement;

class AuthorizationManager extends PDOManager
{
    public function findById(int $id): ?Entity
    {
        $stmt = $this->executePrepare("select * from authorization where id=:id", [ 'id' => $id]);
        $authorization = $stmt->fetch();
        if (!$authorization) return null;
        return new Authorization($authorization['ID'],$authorization['NAME'],$authorization['READONLY']);
    }

    public function find(): PDOStatement
    {
        $stmt=$this->executePrepare("select * from authorization",[]);
        return $stmt;
    }

    public function findAll(int $pdoFecthMode): array
    {
        $stmt=$this->find();
        $authorizations = $stmt->fetchAll($pdoFecthMode);

        $authorizationsEntities=[];
        foreach($authorizations as $authorization) {
            $authorizationsEntities[] = new Authorization($authorization['ID'],$authorization['NAME'],$authorization['READONLY']);
        }
        return $authorizationsEntities;
    }

    public function insert(Entity $e): PDOStatement
    {
        $req = "insert into authorization(id, name, readonly) values (:id, :name, :readonly)";
        $params = array('id' => $e->getId(), 'name' => $e->getName(), 'readonly' => $e->getReadOnly());
        $res=$this->executePrepare($req,$params);
        return $res;
    }
}