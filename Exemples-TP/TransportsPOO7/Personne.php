<?php
namespace POO\transports;

require_once('IDisplayable.php');

class Personne implements IDisplayable
{
    // PHP 7.4
    /*private string $_nom;
    private string $_prenom;
    private int $_age;*/
    private $nom;
    private $prenom;
    private $age;

    /**
     * Personne constructor.
     * @param string $nom
     * @param string $prenom
     * @param string $age
     */
    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
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
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'Nom : '.$this->nom.', prénom : '.$this->prenom.', âge : '.$this->age;
    }
}