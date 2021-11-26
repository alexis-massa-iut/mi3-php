<?php

namespace mvc\model\manager;

require_once('PDOManager.php');

require_once(__DIR__ . '/../entities/Structure.php');
require_once(__DIR__ . '/../entities/Entity.php');
require_once('PDOManager.php');

use mvc\model\entities\Structure;
use mvc\model\entities\Entity;
use \PDOStatement;

class StructureManager extends PDOManager
{
    public function findById(int $id): ?Entity
    {
        $stmt = $this->executePrepare("select * from structure where id=:id", ['id' => $id]);
        $structure = $stmt->fetch();
        if (!$structure) return null;
        return new Structure($structure['ID'], $structure['NOM'], $structure['RUE'], $structure['CP'], $structure['VILLE'], $structure['ESTASSO'], $structure['NBDONATEURS'], $structure['NBACTIONNAIRES']);
    }

    public function find(): PDOStatement
    {
        $stmt = $this->executePrepare("select * from structure", []);
        return $stmt;
    }

    public function findAll(int $pdoFecthMode): array
    {
        $stmt = $this->find();
        $structures = $stmt->fetchAll($pdoFecthMode);

        $structuresEntities = [];
        foreach ($structures as $structure) {
            $structuresEntities[] = new Structure($structure['ID'], $structure['NOM'], $structure['RUE'], $structure['CP'], $structure['VILLE'], $structure['ESTASSO'], $structure['NB_DONATEURS'], $structure['NB_ACTIONNAIRES']);
        }
        return $structuresEntities;
    }

    public function insert(Entity $e): PDOStatement
    {
        $req = "insert into structure(id, nom, rue, cp, ville, estAsso, nb_donateurs, nb_actionnaires) values ( :id, :nom, :rue, :cp, :ville, :estAsso, :nbDonateurs, :nbActionnaires )";
        $params = array('id' => $e->getId(), 'nom' => $e->getNom(), 'rue' => $e->getRue(), 'cp' => $e->getCp(), 'ville' => $e->getVille(), 'estAsso' => $e->getEstAsso(), 'nbDonateurs' => $e->getNbDonateurs(), 'nbActionnaires' => $e->getNbActionnaires());
        $res = $this->executePrepare($req, $params);
        return $res;
    }
}
