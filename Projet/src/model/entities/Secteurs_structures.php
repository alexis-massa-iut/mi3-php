<?php

namespace mvc\model\entities;

require_once('Entity.php');

class Secteurs_structures extends Entity
{

    private $id, $idStruct, $idSect;

    /**
     * Secteurs_structures constructor.
     * @param int|null $id
     * @param int $id_structure
     * @param int $id_secteur
     */
    public function __construct(?int $id, int $idStruct, int $idSect)
    {
        $this->id = $id;
        $this->idStruct = $idStruct;
        $this->idSect = $idSect;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdStruc(): int
    {
        return $this->idStruct;
    }

    /**
     * @param int $idStruct
     */
    public function setIdStruct(int $idStruct): void
    {
        $this->idStruct = $idStruct;
    }

    /**
     * @return int
     */
    public function getIdSect(): int
    {
        return $this->idSect;
    }

    /**
     * @param int $idSect
     */
    public function setIdSect(int $idSect): void
    {
        $this->idSect = $idSect;
    }
}
