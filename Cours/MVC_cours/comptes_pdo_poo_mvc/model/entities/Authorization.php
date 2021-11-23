<?php
namespace mvc\model\entities;

require_once('Entity.php');

class Authorization extends Entity
{
    /* private int $id, $readonly;
     private string $name;*/
     private $id;
     private $name;
     private $readOnly;

    /**
     * Autorisation constructor.
     * @param int $id
     * @param string $name
     * @param int $readOnly
     */
    public function __construct(?int $id, string $name, int $readOnly)
    {
        $this->id = $id;
        $this->name = $name;
        $this->readOnly = $readOnly;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getReadOnly(): int
    {
        return $this->readOnly;
    }

    /**
     * @param int $readOnly
     */
    public function setReadOnly(int $readOnly): void
    {
        $this->readOnly = $readOnly;
    }
}