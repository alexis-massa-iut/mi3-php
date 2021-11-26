<?php

namespace mvc\model\entities;

require_once('Entity.php');

class Structure extends Entity
{

    private $id, $nom, $rue, $cp, $ville, $estAsso, $nbDonateurs, $nbActionnaires;

    /**
     * Structure constructor.
     * @param int|null $id
     * @param string $nom
     * @param string $rue
     * @param string $cp
     * @param string $ville
     * @param int $estAsso
     * @param int|null $nbDonateurs
     * @param int|null $nbActionnaires
     */
    public function __construct(?int $id, string $nom, string $rue, string $cp, string $ville, int $estAsso, ?int $nbDonateurs, ?int $nbActionnaires)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->rue = $rue;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->estAsso = $estAsso;
        $this->nbDonateurs = $nbDonateurs;
        $this->nbActionnaires = $nbActionnaires;
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
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $rue
     */
    public function setRue(string $rue): void
    {
        $this->rue = $rue;
    }

    /**
     * @return string
     */
    public function getRue(): string
    {
        return $this->rue;
    }

    /**
     * @param string $cp
     */
    public function setCp(string $cp): void
    {
        $this->cp = $cp;
    }

    /**
     * @return string
     */
    public function getCp(): string
    {
        return $this->cp;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param int $estAsso
     */
    public function setEstAsso(int $estAsso): void
    {
        $this->estAsso = $estAsso;
    }

    /**
     * @return int
     */
    public function getEstAsso(): int
    {
        return $this->estAsso;
    }

    /**
     * @param int $nbDonateurs
     */
    public function setNbDonateurs(int $nbDonateurs): void
    {
        $this->nbDonateurs = $nbDonateurs;
    }

    /**
     * @return int
     */
    public function getNbDonateurs(): ?int
    {
        return $this->nbDonateurs;
    }

    /**
     * @param int $nbActionnaires
     */
    public function setNbActionnaires(int $nbActionnaires): void
    {
        $this->nbActionnaires = $nbActionnaires;
    }

    /**
     * @return int
     */
    public function getNbActionnaires(): ?int
    {
        return $this->nbActionnaires;
    }
}
